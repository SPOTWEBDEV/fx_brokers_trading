<?php
if (isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];

    // Fetch all columns from the users table
    $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `id` = '$id'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);

        // Assign all fields to variables
        $id = $row['id'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $email = $row['email'];
        $phone = $row['phone'];
        $status = $row['status'];
        $created_at = $row['created_at'];
        $gender = $row['gender'];
        $security_answer = $row['security_answer'];
        $security_question = $row['security_question'];
        $country = $row['country'];
        $profile = $row['profile'];
        $password = $row['password'];
        $trading_balance = $row['trading_balance'];
        $bitcoin_balance = $row['bitcoin_balance'];
        $ethereum_balance = $row['ethereum_balance'];
        $dogecoin_balance = $row['dogecoin_balance'];
        $binance_coin_balance = $row['binance_coin_balance'];
        $cosmos_atom_balance = $row['cosmos_atom_balance'];
        $stablecoin_balance = $row['stablecoin_balance'];
        $usdt_balance = $row['usdt_balance'];
        $solana_balance = $row['solana_balance'];
        $cardano_ada_balance = $row['cardano_ada_balance'];
    }
}
?>
