<?php
/**
 * trading_monitor.php
 * Cron/CLI script to update trading positions.
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
include("../../connection.php");

$apiKey = "8e00e9b9-9402-41f0-8a15-37f9a9b0cdcb";

/* -----------------------------------------------------------
   1) Load trades + user balance
----------------------------------------------------------- */
$sql = "
    SELECT t.id, t.user_id, t.order_no, t.symbol, t.order_type,
           t.entry_price, t.stop_loss, t.take_profit,
           t.volume, t.leverage, t.status,
           u.trading_balance AS account_balance
    FROM trading t
    JOIN users u ON u.id = t.user_id
    WHERE t.status IN ('pending','open')
      AND t.entry_price IS NOT NULL
";

$res = mysqli_query($connection, $sql);
if (!$res) die("DB query failed: " . mysqli_error($connection));

$trades  = [];
$symbols = [];  // base symbols to fetch once

while ($row = mysqli_fetch_assoc($res)) {
    $trades[] = $row;

    // Extract base currency (BTC-USD or BTC/USD -> BTC)
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
   2) Single API call for all base symbols
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
if (!$response) die("API error: " . curl_error($ch));
curl_close($ch);

$data = json_decode($response, true);
if (!isset($data['data'])) die("Unexpected API response\n");

/* -----------------------------------------------------------
   3) Process each trade
----------------------------------------------------------- */
foreach ($trades as $t) {
    $id         = (int)$t['id'];
    $orderNo    = (int)$t['order_no'];
    $userId     = (int)$t['user_id'];
    $orderType  = strtolower($t['order_type']); // buy or sell
    $entry      = (float)$t['entry_price'];
    $stopLoss   = (float)$t['stop_loss'];
    $takeProfit = (float)$t['take_profit'];
    $volume     = (float)$t['volume'];
    $leverage   = max(1, (float)$t['leverage']);
    $status     = $t['status'];
    $balance    = (float)$t['account_balance'];

    // Extract base symbol for price lookup
    $sym = strtoupper(trim($t['symbol']));
    if (strpos($sym, '-') !== false) {
        [$base] = explode('-', $sym, 2);
    } elseif (strpos($sym, '/') !== false) {
        [$base] = explode('/', $sym, 2);
    } else {
        $base = $sym;
    }

    if (!isset($data['data'][$base]['quote']['USD']['price'])) {
        echo "No price for {$base}\n";
        continue;
    }
    $current = (float)$data['data'][$base]['quote']['USD']['price'];

    /* ---------- A) Pending → Open trigger ---------- */
    if ($status === 'pending') {
        $triggered = ($orderType === 'buy'  && $current <= $entry) ||
                     ($orderType === 'sell' && $current >= $entry);
        if ($triggered) {
            mysqli_query(
                $connection,
                "UPDATE trading
                    SET status='open',
                        updated_at=NOW()
                 WHERE id={$id}"
            );
            $status = 'open';
            echo "Order {$orderNo} opened at price {$current}\n";
        }
    }

    /* ---------- B) Floating P/L + SL/TP ---------- */
    if ($status === 'open') {
        // simple pip calculation (USD pairs, 1 pip = 0.0001)
        $pipSize = 0.0001;
        $pipDiff = ($current - $entry) / $pipSize;
        if ($orderType === 'sell') $pipDiff *= -1; // reverse for sells

        // pip value (example: $10 per pip per 1 lot)
        $pipValue = $volume * $pipSize;

        // floating gain/loss
        $gain = $pipDiff * $pipValue;

        // 🔴 Cap loss to user balance (no negative equity)
        $maxLoss = -1 * $balance;
        if ($gain < $maxLoss) {
            $gain = $maxLoss;
        }

        mysqli_query(
            $connection,
            "UPDATE trading
                SET gain = '".mysqli_real_escape_string($connection, $gain)."',
                    updated_at = NOW()
             WHERE id={$id}"
        );

        // Stop-loss check
        if ($stopLoss > 0 &&
            (($orderType === 'buy'  && $current <= $stopLoss) ||
             ($orderType === 'sell' && $current >= $stopLoss))) {

            mysqli_query(
                $connection,
                "UPDATE trading
                    SET status='closed',
                        comment='Stopped out',
                        updated_at=NOW()
                 WHERE id={$id}"
            );
            echo "Order {$orderNo} hit STOP LOSS\n";
            continue;
        }

        // Take-profit check
        if ($takeProfit > 0 &&
            (($orderType === 'buy'  && $current >= $takeProfit) ||
             ($orderType === 'sell' && $current <= $takeProfit))) {

            mysqli_query(
                $connection,
                "UPDATE trading
                    SET status='closed',
                        comment='Take profit',
                        updated_at=NOW()
                 WHERE id={$id}"
            );
            echo "Order {$orderNo} hit TAKE PROFIT\n";
            continue;
        }
    }
}
echo "Done.\n";
?>
