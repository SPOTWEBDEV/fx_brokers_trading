-- USERS TABLE
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    phone VARCHAR(20),
    status ENUM('active', 'inactive', 'suspended') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DEPOSIT TABLE
CREATE TABLE deposit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    amount DECIMAL(12,2) NOT NULL,
    method VARCHAR(50),
    status ENUM('pending', 'successful', 'failed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- WITHDRAWAL TABLE
CREATE TABLE withdrawal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    amount DECIMAL(12,2) NOT NULL,
    method VARCHAR(50),
    status ENUM('pending', 'successful', 'failed') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- VERIFICATION TABLE
CREATE TABLE verification (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    document_type VARCHAR(50),
    document_number VARCHAR(100),
    status ENUM('pending', 'verified', 'rejected') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- TRADING TABLE
CREATE TABLE trading (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    trade_type ENUM('buy', 'sell'),
    asset VARCHAR(50),
    amount DECIMAL(12,2) NOT NULL,
    price DECIMAL(12,2) NOT NULL,
    status ENUM('open', 'closed', 'cancelled') DEFAULT 'open',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- USER ACTIVITY TABLE
CREATE TABLE useractivity (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    activity VARCHAR(255),
    ip_address VARCHAR(45),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

------------------------------------------------------
-- SAMPLE INSERTS
------------------------------------------------------

-- Insert Users
INSERT INTO users (firstname, lastname, email, phone, status)
VALUES 
('John', 'Doe', 'john.doe@example.com', '1234567890', 'active'),
('Jane', 'Smith', 'jane.smith@example.com', '0987654321', 'inactive');

-- Insert Deposits
INSERT INTO deposit (user_id, amount, method, status)
VALUES 
(1, 500.00, 'Bank Transfer', 'successful'),
(2, 200.00, 'Crypto', 'pending');

-- Insert Withdrawals
INSERT INTO withdrawal (user_id, amount, method, status)
VALUES 
(1, 150.00, 'Bank Transfer', 'successful'),
(2, 50.00, 'Crypto', 'pending');

-- Insert Verifications
INSERT INTO verification (user_id, document_type, document_number, status)
VALUES 
(1, 'Passport', 'A1234567', 'verified'),
(2, 'Driver License', 'DL98765', 'pending');

-- Insert Trading
INSERT INTO trading (user_id, trade_type, asset, amount, price, status)
VALUES 
(1, 'buy', 'BTC', 0.05, 30000.00, 'open'),
(2, 'sell', 'ETH', 1.5, 2000.00, 'closed');

-- Insert User Activity
INSERT INTO useractivity (user_id, activity, ip_address)
VALUES 
(1, 'Logged in', '192.168.1.10'),
(2, 'Deposited funds', '192.168.1.11');
