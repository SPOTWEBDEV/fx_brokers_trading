<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../connection.php");

$apiKey = "8e00e9b9-9402-41f0-8a15-37f9a9b0cdcb";

/* -----------------------------------------------------------
   1) Load all trades that need monitoring
----------------------------------------------------------- */
$sql = "SELECT id, user_id, order_no, symbol, order_type, entry_price,
               stop_loss, take_profit, volume, leverage, status
        FROM trading
        WHERE status IN ('pending','open') 
          AND entry_price IS NOT NULL";
$res = mysqli_query($connection, $sql);
if (!$res) die("DB query failed: " . mysqli_error($connection));

$trades = [];
$symbols = [];   // store base symbols to fetch once

while ($row = mysqli_fetch_assoc($res)) {
    $trades[] = $row;

    // normalize symbol (BTC-USD or BTC/USD → BTC)
    $sym = strtoupper(trim($row['symbol']));
    if (strpos($sym, '-') !== false) {
        [$base] = explode('-', $sym, 2);
    } elseif (strpos($sym, '/') !== false) {
        [$base] = explode('/', $sym, 2);
    } else {
        $base = $sym;
    }
    $symbols[$base] = true;
}
if (!$trades) exit("No trades to check.\n");

/* -----------------------------------------------------------
   2) One API call for all base symbols
----------------------------------------------------------- */
$baseList = implode(',', array_keys($symbols));
$url = "https://pro-api.coinmarketcap.com/v1/cryptocurrency/quotes/latest?symbol="
     . urlencode($baseList) . "&convert=USD";

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "X-CMC_PRO_API_KEY: {$apiKey}",
        "Accept: application/json"
    ],
    CURLOPT_TIMEOUT => 20
]);
$response = curl_exec($ch);
if (!$response) die("API error: ".curl_error($ch));
curl_close($ch);

$data = json_decode($response, true);
if (!isset($data['data'])) die("Unexpected API response");

/* -----------------------------------------------------------
   3) Process each trade
----------------------------------------------------------- */
foreach ($trades as $t) {
    $id         = (int)$t['id'];
    $orderNo    = (int)$t['order_no'];
    $orderType  = strtolower($t['order_type']); // buy/sell
    $entry      = (float)$t['entry_price'];
    $stopLoss   = (float)$t['stop_loss'];
    $takeProfit = (float)$t['take_profit'];
    $volume     = (float)$t['volume'];
    $leverage   = max(1, (float)$t['leverage']);
    $status     = $t['status'];

    // Extract base and quote
    $sym = strtoupper(trim($t['symbol']));
    if (strpos($sym, '-') !== false) {
        [$base,$quote] = explode('-', $sym, 2);
    } elseif (strpos($sym, '/') !== false) {
        [$base,$quote] = explode('/', $sym, 2);
    } else {
        $base=$sym; $quote='USD';
    }

    if (!isset($data['data'][$base]['quote']['USD']['price'])) {
        echo "No price for {$base}\n"; continue;
    }
    $current = (float)$data['data'][$base]['quote']['USD']['price'];

    /* ---------- A) Pending → Open trigger ---------- */
    if ($status === 'pending') {
        $triggered = ($orderType === 'buy'  && $current <= $entry) ||
                     ($orderType === 'sell' && $current >= $entry);
        if ($triggered) {
            mysqli_query(
                $connection,
                "UPDATE trading SET status='open', updated_at=NOW()
                 WHERE id={$id}"
            );
            $status = 'open'; // continue below with stop/tp
            echo "Order {$orderNo} opened at price {$current}\n";
        }
    }

    /* ---------- B) Stop-loss / Take-profit check ---------- */
    if ($status === 'open') {
        // pips (for USD pairs, 1 pip = 0.0001)
        $pipSize = 0.0001;
        $pipDiff = ($current - $entry) / $pipSize;
        if ($orderType === 'sell') $pipDiff *= -1; // reverse for sells

        // pip value: volume * 10 (example for 1 lot = $10/pip on USD pairs)
        $pipValue = $volume * 10;

        // floating P/L in account currency
        $gain = $pipDiff * $pipValue * $leverage;

        mysqli_query(
            $connection,
            "UPDATE trading SET gain = '".mysqli_real_escape_string($connection,$gain)."',
                                updated_at = NOW()
             WHERE id={$id}"
        );

        // Stop loss / take profit hit?
        if ($stopLoss > 0 && 
            (($orderType==='buy' && $current <= $stopLoss) ||
             ($orderType==='sell'&& $current >= $stopLoss))) {
            mysqli_query($connection,
                "UPDATE trading SET status='closed',
                 comment='Stopped out', updated_at=NOW()
                 WHERE id={$id}");
            echo "Order {$orderNo} hit STOP LOSS\n";
        } elseif ($takeProfit > 0 &&
            (($orderType==='buy' && $current >= $takeProfit) ||
             ($orderType==='sell'&& $current <= $takeProfit))) {
            mysqli_query($connection,
                "UPDATE trading SET status='closed',
                 comment='Take profit', updated_at=NOW()
                 WHERE id={$id}");
            echo "Order {$orderNo} hit TAKE PROFIT\n";
        }
    }
}
?>
