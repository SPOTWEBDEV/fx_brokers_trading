<?php

    if(isset($_SESSION['admin_id'])){
        $id = $_SESSION['admin_id'];

        $query = mysqli_query($connection, "SELECT * FROM `admin` WHERE `id`='$id'");

        if(mysqli_num_rows($query)){
            $row = mysqli_fetch_assoc($query);

            $username = $row['username'];

        }else{
            
            
             echo "<script> window.location.href = '../../admin/' </script>";
        }

    }else{

        echo "<script> window.location.href = '../../admin/' </script>";
    }


    if (isset($_GET['logout'])) {
        session_destroy();
        echo "<script> window.location.href = '../../admin/' </script>";
    }




?> 