<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
include("../../connection.php");

if (isset($_POST['url'])) {

    $url = $_POST['url'];
    $firstname = $_POST['first_name'];
    $lastname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    $question = $_POST['security_question'];
    $answer = $_POST['security_answer'];
    $date = date('Y-m-d H:i:s');
    $profile = "default";
    $status = "pending";



    if ($url == $domain . 'auth/register.php'  || $url == $domain . 'auth/register.php?ref=' . $ref) {


        if ($password1 !== $password2) {
            echo json_encode([
                'message' => 'Passwords do not match.',
                'status' => 'error'
            ]);
            exit();
        } else {



            // Check if username already exists
            $stmt = $connection->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                echo json_encode([
                    'message' => 'This email has already been taken. Please use another one!',
                    'status' => 'error'
                ]);
                $stmt->close();
                exit();
            }
            $stmt->close();


            // Hash the password
            $passwordHash = password_hash($password1, PASSWORD_BCRYPT);

            // Insert user into the database
            $insert_stmt = $connection->prepare("
                INSERT INTO users (firstname, lastname, email, phone, gender, country, password, security_question, security_answer, profile, status, created_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");

            if (!$insert_stmt) {
                echo json_encode([
                    'message' => 'Failed to prepare insert statement.',
                    'status' => 'error'
                ]);
                exit();
            }

            $insert_stmt->bind_param(
                "ssssssssssss",
                $firstname,
                $lastname,
                $email,
                $phone,
                $gender,
                $country,
                $passwordHash,
                $question,
                $answer,
                $profile,
                $status,
                $date
            );

           // make sure session is started at the very top of your script

            if ($insert_stmt->execute()) {
                // Get the newly inserted user ID
                $newUserId = $connection->insert_id;

                // Store user ID in session
                $_SESSION['user_id'] = $newUserId;

                echo json_encode([
                    'message' => 'User registered successfully.',
                    'status' => 'success',
                    'user_id' => $newUserId
                ]);
                $insert_stmt->close();
            } else {
                echo json_encode([
                    'message' => 'Unable to register, please try again later.',
                    'status' => 'error'
                ]);
            }


            exit();
        }
    } else {
        echo json_encode([
            'message' => 'Access Denied! You are not allowed to access this page directly.',
            'status' => 'error'
        ]);
        exit();
    }
} else {
    echo json_encode([
        'message' => 'No data posted.',
        'status' => 'error'
    ]);
    exit();
}
