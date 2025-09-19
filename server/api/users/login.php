<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: application/json');
require_once '../../connection.php';
require_once '../../../mailer/email_template_user.php';
require_once '../../../mailer/mailer.php';



if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $url = $_POST['url'];

    if ($url == $domain . "auth/login.php") {
        $stmt = $connection->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];

                $userEmail = $user['email'];
                $userName = $user['firstname'] . ' ' . $user['lastname'];


                if ($user['status'] == 'active') {

                    $body = generateEmailTemplate(
                        "login",           // type of email
                        $userName,         // name of user
                        $userEmail,        // email of user
                        true               // include system info table
                    );

                    $result = smtpmailer(
                        $userEmail,                      // recipient
                        "New Login to Your Account",     // subject
                        $body                            // HTML content
                    );


                    // success
                    echo json_encode(['status' => 'success', 'message' => 'Login successful']);
                    exit();



                    echo json_encode(['status' => 'success', 'message' => 'Login successful']);
                    exit();
                } else if ($user['status'] == 'pending') {

                    echo json_encode(['status' => 'warn', 'message' => 'Account awaiting approval']);

                    exit();
                } else if ($user['status'] == 'suspended') {

                    echo json_encode(['status' => 'error', 'message' => 'Account suspended. Contact support.']);
                    exit();
                }
            } else {
                echo json_encode(['status' => 'error', 'message' => 'incorrect password']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'No user found with this email']);
        }

        $stmt->close();
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Access denied']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
}
