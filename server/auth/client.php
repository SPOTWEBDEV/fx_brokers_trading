<?php

if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];

    $query = mysqli_query($connection, "SELECT * FROM `users` WHERE `id`='$id'");

    if(mysqli_num_rows($query)){
        $row = mysqli_fetch_assoc($query);

        $firstname = $row['firstname'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $phone=$row['phone'];
    }
}




?>