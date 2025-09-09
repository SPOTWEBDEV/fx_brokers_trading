-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2025 at 01:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`, `id`) VALUES
('kingsley', 'arumkingsley49@gmail.com', 1234, 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminactivity`
--

CREATE TABLE `adminactivity` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ref_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminactivity`
--

INSERT INTO `adminactivity` (`id`, `name`, `ref_id`, `date`, `time`, `status`) VALUES
(1, 'Failed Login', '::1', '2025-09-03', '23:47:27', 'Failed'),
(2, 'Successful Login', '::1', '2025-09-03', '23:48:07', 'Success'),
(3, 'Successful Login', '::1', '2025-09-04', '00:16:07', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `account_type` varchar(255) NOT NULL,
  `method` varchar(50) DEFAULT NULL,
  `status` enum('pending','successful','failed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `user_id`, `uuid`, `amount`, `account_type`, `method`, `status`, `created_at`) VALUES
(5, 5, '430f4eafab7213306e1d3a0155668b1a', 400.00, 'ethereum_balance', 'bitcoin', 'pending', '2025-09-05 10:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(11) NOT NULL,
  `method_key` varchar(50) NOT NULL,
  `method_name` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `wallet_address` varchar(255) DEFAULT NULL,
  `uuid` char(36) NOT NULL DEFAULT 'uuid()'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `method_key`, `method_name`, `details`, `status`, `wallet_address`, `uuid`) VALUES
(1, 'bitcoin', 'BITCOIN', NULL, 'active', 'bc1q6yy32dclff6m8wauv65r6ffar5dhhea37z0va3', 'fc2af488-8a43-11f0-a593-5065f3b89ebb'),
(2, 'solana', 'SOLANA', NULL, 'active', '6Kz2YkjA94jh9Fb57Q3vX8Wwe1g8E6eQGkTmv4oFzzd9', 'fc2b0161-8a43-11f0-a593-5065f3b89ebb'),
(3, 'ethereum', 'ETHEREUM (ETH)', NULL, 'active', '0xAbCdEf1234567890abcdef1234567890AbCdEf12', 'fc2b01f9-8a43-11f0-a593-5065f3b89ebb'),
(4, 'bnb', 'BNB ( BNB SMARTCHAIN)', NULL, 'active', 'bnb1q6yy32dclff6m8wauv65r6ffar5dhhea37z0va3', 'fc2b0251-8a43-11f0-a593-5065f3b89ebb'),
(5, 'usdt_trc20', 'USDT (TRC20)', NULL, 'active', 'TDYf67DH6M8w8Vty6bV8WqfXo2z8HhXkWZ', 'fc2b029b-8a43-11f0-a593-5065f3b89ebb'),
(6, 'usdt_erc20', 'USDT (ERC20)', NULL, 'active', '0x9dE5F93A67b9F1c7cE9b3aF12F34567890AbCdEf', 'fc2b0318-8a43-11f0-a593-5065f3b89ebb'),
(7, 'usdc_erc20', 'USDC (ERC20)', NULL, 'active', '0x111222333444555666777888999000AaBbCcDdEe', 'fc2b039a-8a43-11f0-a593-5065f3b89ebb'),
(8, 'litecoin', 'LITECOIN (LTC)', NULL, 'active', 'ltc1q6yy32dclff6m8wauv65r6ffar5dhhea37z0va3', 'fc2b03e4-8a43-11f0-a593-5065f3b89ebb');

-- --------------------------------------------------------

--
-- Table structure for table `trading`
--

CREATE TABLE `trading` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `trade_type` enum('buy','sell') DEFAULT NULL,
  `asset` varchar(50) DEFAULT NULL,
  `amount` decimal(12,2) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `status` enum('open','closed','cancelled') DEFAULT 'open',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `useractivity`
--

CREATE TABLE `useractivity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` enum('active','pending','suspended') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `gender` varchar(255) NOT NULL,
  `security_answer` varchar(255) NOT NULL,
  `security_question` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `trading_balance` decimal(18,2) DEFAULT 0.00,
  `bitcoin_balance` decimal(18,2) DEFAULT 0.00,
  `ethereum_balance` decimal(18,2) DEFAULT 0.00,
  `dogecoin_balance` decimal(18,2) DEFAULT 0.00,
  `binance_coin_balance` decimal(18,2) DEFAULT 0.00,
  `cosmos_atom_balance` decimal(18,2) DEFAULT 0.00,
  `stablecoin_balance` decimal(18,2) DEFAULT 0.00,
  `usdt_balance` decimal(18,2) DEFAULT 0.00,
  `solana_balance` decimal(18,2) DEFAULT 0.00,
  `cardano_ada_balance` decimal(18,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `status`, `created_at`, `gender`, `security_answer`, `security_question`, `country`, `profile`, `password`, `trading_balance`, `bitcoin_balance`, `ethereum_balance`, `dogecoin_balance`, `binance_coin_balance`, `cosmos_atom_balance`, `stablecoin_balance`, `usdt_balance`, `solana_balance`, `cardano_ada_balance`) VALUES
(1, 'mr', 'mind', 'arumkingsley49@gmail.com', '09017862743', 'pending', '2025-09-05 04:18:18', 'Male', 'coding', 'What is your hobby?', 'AZ', 'normal.jpg', '$2y$10$WyPa4QiAky44o3ENqUx9ruL2NtCWLisVPbSRXGPYXDaJMDw4nSfJe', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(2, 'mr', 'mind', 'arumkingsley9@gmail.com', '09017862743', 'pending', '2025-09-05 04:24:02', 'Male', 'coding', 'What is your hobby?', 'AM', 'normal.jpg', '$2y$10$BDQ8p15sMQnQbxbSuH8u6OPL/bPnnl6bS97bzteAWadNrGxG1Sej2', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(3, 'mr', 'mind', 'arumkingsley@gmail.com', '09017862743', 'pending', '2025-09-05 04:29:01', 'Male', 'mind', 'What is your hobby?', 'BH', 'normal.jpg', '$2y$10$a./wYPZVDXqTp1d5bzi3SObN1FmQZqxzBDZYPKow9hw6Y8hmYeidK', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00),
(5, 'thebest', 'firstclass', 'spotwebdev.com@gmail.com', '09017862743', 'active', '2025-09-05 04:32:13', 'Male', 'coding', 'What is your hobby?', 'BS', 'normal.jpg', '$2y$10$3w.hEC3d/WLxHObDK1.ZaOxGpwx.BDWuTrXhRfqZ9OBKza9o/a5xi', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document_type` varchar(50) DEFAULT NULL,
  `document_number` varchar(100) DEFAULT NULL,
  `status` enum('pending','verified','rejected') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawals` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL DEFAULT 'uuid()'
  `user_id` INT(11) NOT NULL,
  `withdraw_to` ENUM('Bank','Crypto','PayPal','CashApp') NOT NULL,
  `account_type` VARCHAR(255) NOT NULL,
  `amount` DECIMAL(20,2) NOT NULL DEFAULT 0.00,
  `status` ENUM('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending',
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME DEFAULT NULL,
  -- Bank Fields
  `account_number` VARCHAR(100) DEFAULT NULL,
  `bank_name` VARCHAR(255) DEFAULT NULL,
  `account_name` VARCHAR(255) DEFAULT NULL,
  -- Crypto Fields
  `wallet_address` VARCHAR(255) DEFAULT NULL,
  `crypto_currency` VARCHAR(50) DEFAULT NULL,
  -- PayPal Fields
  `paypal_email` VARCHAR(255) DEFAULT NULL,
  -- CashApp Fields
  `cashtag` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminactivity`
--
ALTER TABLE `adminactivity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `method_key` (`method_key`),
  ADD UNIQUE KEY `UUID` (`uuid`);

--
-- Indexes for table `trading`
--
ALTER TABLE `trading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);
  ADD UNIQUE KEY `UUID` (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminactivity`
--
ALTER TABLE `adminactivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trading`
--
ALTER TABLE `trading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deposit`
--
ALTER TABLE `deposit`
  ADD CONSTRAINT `deposit_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trading`
--
ALTER TABLE `trading`
  ADD CONSTRAINT `trading_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `useractivity`
--
ALTER TABLE `useractivity`
  ADD CONSTRAINT `useractivity_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verification`
--
ALTER TABLE `verification`
  ADD CONSTRAINT `verification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD CONSTRAINT `withdrawal_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
