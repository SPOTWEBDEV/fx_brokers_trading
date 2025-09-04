        // Hash password
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        // Check if username already exists
        $stmt = $connection->prepare("SELECT id FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo json_encode([
                'message' => 'This username has already been taken. Please use another one!',
                'status' => 'error'
            ]);
            $stmt->close();
            exit();
        }
        $stmt->close();

        // Insert user into database
        $insert_stmt = $connection->prepare("
            INSERT INTO users (username, firstname, lastname, email, password,profile,ref) 
            VALUES (?, ?, ?, ?, ?,?,?)
        ");

        if (!$insert_stmt) {
            echo json_encode([
                'message' => 'Failed to prepare insert statement.',
                'status' => 'error'
            ]);
            exit();
        }

        $insert_stmt->bind_param("sssssss", $username, $firstname, $lastname, $email, $passwordHash,$profile, $ref);

        if ($insert_stmt->execute()) {
            echo json_encode([
                'message' => 'User registered successfully.',
                'status' => 'success'
            ]);
            $insert_stmt->close();
            pay_referral($ref);
        } else {
            echo json_encode([
                'message' => 'Unable to register, please try again later.',
                'status' => 'error'
            ]);
        }

        exit();