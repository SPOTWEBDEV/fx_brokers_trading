<?php
// place_order.php



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Validate & sanitize inputs
$order_type   = isset($_POST['order_type']) ? trim($_POST['order_type']) : null;
$type         = isset($_POST['type']) ? trim($_POST['type']) : null;
$symbol       = isset($_POST['symbol']) ? trim($_POST['symbol']) : null;
$volume       = isset($_POST['volume']) ? (float)$_POST['volume'] : 0;
$stop_loss    = isset($_POST['stop_loss']) ? (float)$_POST['stop_loss'] : 0.0000;
$take_profit  = isset($_POST['take_profit']) ? (float)$_POST['take_profit'] : 0.0000;
$leverage     = isset($_POST['leverage']) ? trim($_POST['leverage']) : "1:1";
$comment      = isset($_POST['comment']) ? trim($_POST['comment']) : null;
$entry_price  = isset($_POST['entry_price']) && $_POST['entry_price'] !== "" ? (float)$_POST['entry_price'] : null;

// Generate order number if not provided
$order_no =  "#".rand(100000,999999);

// Default status
$status = ($type === "Pending Order") ? "pending" : "open";

// Insert into database
$query = "INSERT INTO trading
    (user_id, order_no, order_type, type, symbol, volume, stop_loss, take_profit, leverage, comment, entry_price, status) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $connection->prepare($query);

$stmt->bind_param(
    "issssddsssss", 
    $id, 
    $order_no, 
    $order_type, 
    $type, 
    $symbol, 
    $volume, 
    $stop_loss, 
    $take_profit, 
    $leverage, 
    $comment, 
    $entry_price, 
    $status
);

if ($stmt->execute()) {
    echo "<script>alert('✅ Order placed successfully!')</script>";
} else {
    echo "<script>alert('❌ Error: . $stmt->error')</script>";

}

$stmt->close();
$connection->close();

}
