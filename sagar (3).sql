-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2023 at 04:18 PM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sagar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `admin_id` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `role` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`admin_id`, `password`, `number`, `name`, `location`, `role`) VALUES
(2, 'sagar', '9851135188', 'Sagar Rimal', '', 'super admin'),
(6, 'test', '9860291188', 'Ram', '  Dakshinkali Urban Municipality', 'manager'),
(8, 'test', '9848265773', 'Sujen', 'Kageshwori Manahara Urban Municipality', 'manager'),
(9, 'test', '1234567', 'Ram', '  Nagarjun Urban Municipality', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int NOT NULL,
  `area` varchar(255) NOT NULL,
  `admin_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `area`, `admin_id`) VALUES
(1, 'Shankharapur Urban Municipality', 2),
(2, 'Tarkeshwor Urban Municipality', 0),
(3, 'Chandragiri Urban Municipality', 4),
(4, '  Nagarjun Urban Municipality', 5),
(5, '  Dakshinkali Urban Municipality', 0),
(6, ' Gokarneshwor Urban Municipality', 0),
(7, '   Kathmandu Metropolitan City', 0),
(8, 'Kageshwori Manahara Urban Municipality', 0),
(9, ' Budhanilkantha Urban Municipality', 0),
(10, 'Kirtipur Urban Municipality', 0),
(11, 'Tokha Urban Municipality', 0);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int NOT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `latitude`, `longitude`) VALUES
(1, '27.4227', '85.1658'),
(2, '27.707764', '85.2842'),
(3, '27.70', '85.252'),
(4, '27.72573', '85.3267'),
(5, '27.707950', '85.284396'),
(6, '27.707581', '85.282884'),
(7, '27.707581', '85.282976'),
(8, '27.707625', '85.283771'),
(9, '27.707646', '85.283886'),
(10, '27.707677', '85.284071'),
(11, '27.707743', '85.284192'),
(12, '27.708003', '85.284293');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `invoice_no` varchar(100) DEFAULT NULL,
  `product_id` int NOT NULL,
  `total` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_no`, `product_id`, `total`, `status`, `created_at`, `updated_at`, `user_number`) VALUES
(6, '11674240088', 1, 100, 0, '2023-01-20 18:41:28', NULL, '9860291188'),
(9, '11674321054', 1, 100, 1, '2023-01-21 17:10:54', NULL, '9851135188'),
(10, '11674379552', 1, 100, 0, '2023-01-22 09:25:52', NULL, '9812121212'),
(11, '11674379681', 1, 100, 1, '2023-01-22 09:28:01', NULL, '9812121212'),
(12, '11674383359', 1, 120, 1, '2023-01-22 10:29:19', NULL, '9860291188'),
(13, '11674386614', 1, 120, 0, '2023-01-22 11:23:34', NULL, '9851135188'),
(14, '21674404598', 2, 150, 0, '2023-01-22 16:23:18', NULL, ''),
(15, '21674404798', 2, 150, 0, '2023-01-22 16:26:38', NULL, ''),
(16, '21674404801', 2, 150, 0, '2023-01-22 16:26:41', NULL, ''),
(17, '21674404855', 2, 150, 0, '2023-01-22 16:27:35', NULL, ''),
(18, '21674404941', 2, 150, 0, '2023-01-22 16:29:01', NULL, ''),
(19, '21674404953', 2, 150, 0, '2023-01-22 16:29:13', NULL, ''),
(20, '21674404975', 2, 150, 0, '2023-01-22 16:29:35', NULL, ''),
(21, '21674405063', 2, 150, 0, '2023-01-22 16:31:03', NULL, ''),
(22, '21674405099', 2, 150, 0, '2023-01-22 16:31:39', NULL, ''),
(23, '21674405136', 2, 150, 0, '2023-01-22 16:32:16', NULL, ''),
(24, '21674405202', 2, 150, 0, '2023-01-22 16:33:22', NULL, ''),
(25, '21674405256', 2, 150, 0, '2023-01-22 16:34:16', NULL, ''),
(26, '21674405298', 2, 150, 0, '2023-01-22 16:34:58', NULL, ''),
(27, '21674405405', 2, 150, 0, '2023-01-22 16:36:45', NULL, ''),
(28, '21674405500', 2, 150, 0, '2023-01-22 16:38:20', NULL, ''),
(29, '21674405705', 2, 150, 0, '2023-01-22 16:41:45', NULL, ''),
(30, '21674405711', 2, 150, 0, '2023-01-22 16:41:51', NULL, ''),
(31, '21674405736', 2, 150, 0, '2023-01-22 16:42:16', NULL, ''),
(32, '21674405896', 2, 150, 0, '2023-01-22 16:44:56', NULL, ''),
(33, '21674405899', 2, 150, 0, '2023-01-22 16:44:59', NULL, ''),
(34, '21674405941', 2, 150, 0, '2023-01-22 16:45:41', NULL, ''),
(35, '21674405948', 2, 150, 0, '2023-01-22 16:45:48', NULL, ''),
(36, '11674406123', 1, 120, 0, '2023-01-22 16:48:43', NULL, '9860291188'),
(37, '11674471279', 1, 120, 0, '2023-01-23 10:54:39', NULL, '9860291188');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `amount`) VALUES
(1, 'Basic', 120),
(2, 'Standard', 150),
(3, 'Plus', 200);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int NOT NULL,
  `date` date NOT NULL,
  `msg` varchar(255) NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `date`, `msg`, `location`, `title`) VALUES
(4, '2023-01-22', 'Testing for 10AM', 'Kageshwori Manahara Urban Municipality', 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int NOT NULL,
  `password` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '0',
  `file` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `password`, `number`, `status`, `file`, `name`, `location`, `latitude`, `longitude`, `email`) VALUES
(28, 'Iamsagar456', '9860291188', '1', '70502-pan-and-citizen.pdf', 'test', ' Budhanilkantha Urban Municipality', '27.6910255', '85.2398931', 'sagarrimal13555@gmail.com'),
(29, 'Iamsagar456', '9851135188', '1', '84607-untitled-document-(2).pdf', 'Sujen', '  Nagarjun Urban Municipality', '27.6908922', '85.2397392', 'kneel.stha@gmail.com'),
(30, 'Iamsagar456', '9812121212', '1', '48063-untitled-document-(2).pdf', 'Ramesh', 'Kageshwori Manahara Urban Municipality', '27.6910453', '85.2397155', ''),
(31, 'Iamsagar456@', '9851335799', '0', '47443-latest_image-page-1.drawio.png', 'test1', '  Dakshinkali Urban Municipality', '27.6905428', '85.2397811', 'test123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`admin_id`,`number`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`,`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
