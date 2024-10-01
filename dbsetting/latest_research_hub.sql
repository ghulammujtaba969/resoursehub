-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 05:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latest_research_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `apps_admins_history`
--

CREATE TABLE `apps_admins_history` (
  `id` int(5) NOT NULL,
  `id_emply` int(4) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `computer_browser` varchar(100) DEFAULT NULL,
  `dated` datetime DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `apps_admins_history`
--

INSERT INTO `apps_admins_history` (`id`, `id_emply`, `ip_address`, `computer_browser`, `dated`, `remarks`) VALUES
(1, 1, '127.0.0.1', 'Google Chrome90.0.4430.', '2022-04-27 00:14:07', 'Login to Software From Credentials'),
(2, 1, '127.0.0.1', 'Google Chrome90.0.4430.', '2022-04-27 00:22:58', 'Login to Software From Credentials'),
(3, 1, '127.0.0.1', 'Google Chrome116.0.0.0 ', '2023-08-20 12:27:09', 'Login to Software From Credentials'),
(4, 1, '127.0.0.1', 'Google Chrome117.0.0.0 ', '2023-10-02 16:32:17', 'Login to Software From Credentials'),
(5, 1, '127.0.0.1', 'Google Chrome119.0.0.0 ', '2023-12-06 23:04:12', 'Login to Software From Credentials'),
(6, 3, '127.0.0.1', 'Google Chrome119.0.0.0 ', '2023-12-06 23:28:53', 'Login to Software From Credentials'),
(7, 3, '127.0.0.1', 'Google Chrome119.0.0.0 ', '2023-12-06 23:30:31', 'Login to Software From Credentials'),
(8, 3, '127.0.0.1', 'Google Chrome119.0.0.0 ', '2023-12-07 22:55:01', 'Login to Software From Credentials'),
(9, 3, '127.0.0.1', 'Google Chrome119.0.0.0 ', '2023-12-08 22:51:32', 'Login to Software From Credentials'),
(10, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-18 19:31:59', 'Login to Software From Credentials'),
(11, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-19 17:28:14', 'Login to Software From Credentials'),
(12, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-19 17:38:37', 'Login to Software From Credentials'),
(13, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-20 18:15:31', 'Login to Software From Credentials'),
(14, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-20 18:20:29', 'Login to Software From Credentials'),
(15, 1, '127.0.0.1', 'Google Chrome127.0.0.0 ', '2024-08-20 18:25:11', 'Login to Software From Credentials');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_by` int(11) DEFAULT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `access` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `role` enum('1','2') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `access`, `fullname`, `email`, `phone`, `role`, `created_at`) VALUES
(1, 'ghulammujtaba969@gmail.com', '4e075844d2e00e4c800c8c62716bed8c', 1, 1, 'Mujtaba Alvi', 'ghulammujtaba969@gmail.com', '03314057324', '1', '2024-08-20 13:12:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apps_admins_history`
--
ALTER TABLE `apps_admins_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `uploaded_by` (`uploaded_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apps_admins_history`
--
ALTER TABLE `apps_admins_history`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `documents_ibfk_2` FOREIGN KEY (`uploaded_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
