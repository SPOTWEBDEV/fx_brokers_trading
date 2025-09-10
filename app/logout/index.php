<?php
include('../../server/connection.php');

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();


$out = $domain . 'auth/login.php';
header("Location: $out");
exit;
?>
