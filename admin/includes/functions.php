<?php

    function logAdminActivity($connection, $name, $ref_id, $status) {
        // Prepare date and time
        $date = date('Y-m-d');
        $time = date('H:i:s');

        // Prepare SQL statement
        $stmt = $connection->prepare("INSERT INTO adminactivity (`name`, `ref_id`, `date`, `time`, `status`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $ref_id, $date, $time, $status);

        // Execute and check
        if ($stmt->execute()) {
            return true; // Success
        } else {
            return "Error: " . $stmt->error; // Error details
        }
    }


    function getClientIP() {
        $ip = '';

        if (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            // Cloudflare
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            // Shared Internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            // Proxy or Load Balancer
            $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $ip = trim($ipList[0]); // First IP is the real one
        } else {
            // Default Remote IP
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return filter_var($ip, FILTER_VALIDATE_IP) ? $ip : 'UNKNOWN';
    }




?>