-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 05:34 PM
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
-- Database: `snc`
--

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `e_id` int(11) NOT NULL,
  `e_category` varchar(255) NOT NULL,
  `e_date` date NOT NULL,
  `e_quantity` int(11) NOT NULL,
  `e_amount` int(11) NOT NULL,
  `e_total` int(11) NOT NULL,
  `e_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`e_id`, `e_category`, `e_date`, `e_quantity`, `e_amount`, `e_total`, `e_description`) VALUES
(9, 'Assam Black Tea (1 Pack)', '2024-01-01', 1, 270, 270, 'For Milk Tea'),
(10, 'Ice (1 Sack)', '2024-01-01', 1, 120, 120, 'For Coffee and Tea'),
(11, 'Ham (1 Pack)', '2024-01-01', 1, 120, 120, 'For Snacks'),
(12, 'Pizza Dough and Box (1/Box)', '2024-01-01', 5, 45, 225, 'For Snacks'),
(13, 'Assam Black Tea (1 Pack)', '1970-01-01', 1, 195, 195, 'For Milk Tea');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(255) NOT NULL,
  `i_amount` int(11) NOT NULL,
  `i_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`i_id`, `i_name`, `i_amount`, `i_description`) VALUES
(5, 'Assam Black Tea (1 Pack)', 190, 'For Milk Tea'),
(6, 'Creamer (1 Kilo)', 150, 'For Milk Tea'),
(7, 'Fructose Syrup (1 Liter)', 125, 'For Milk Tea'),
(8, 'Ice (1 Sack)', 120, 'For Coffee and Tea'),
(9, 'Nata (1 Pack)', 220, 'For Milk Tea'),
(10, 'Tapioca Pearl (1 Pack)', 95, 'For Milk Tea'),
(11, 'Black Forest Powder (1 Pack)', 115, 'For Milk Tea'),
(12, 'Dark Choco Powder (1 Pack)', 115, 'For Milk Tea'),
(13, 'Java Chip Powder (1 Pack)', 115, 'For Milk Tea'),
(14, 'Matcha Powder (1 Pack)', 115, 'For Milk Tea'),
(15, 'Okinawa Powder (1 Pack)', 115, 'For Milk Tea'),
(16, 'Strawberry Powder (1 Pack)', 115, 'For Milk Tea'),
(17, 'Coffee Grounds (1 Pack)', 250, 'For Coffee'),
(18, 'Milk (1/Box)', 95, 'For Coffee'),
(19, 'Fruit Jelly (1 Pack)', 240, 'For Fruit Tea'),
(20, 'Green Apple Syrup (1 Liter)', 220, 'For Fruit Tea'),
(21, 'Strawberry Syrup (1 Liter)', 220, 'For Fruit Tea'),
(22, 'Bell Pepper (1/2 Kilo)', 60, 'For Snacks'),
(23, 'Cheese (1 Pack)', 225, 'For Snacks'),
(24, 'Ham (1 Pack)', 120, 'For Snacks'),
(25, 'Mushroom (1 Can)', 40, 'For Snacks'),
(26, 'Pineapple Tidbits (1 Pack)', 30, 'For Snacks'),
(27, 'Pizza Dough and Box (1/Box)', 45, 'For Snacks'),
(28, 'Onion (1 Kilo)', 130, 'For Snacks'),
(29, 'Tuna (1 Can)', 45, 'For Snacks');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_sku` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_sku`, `p_name`, `p_quantity`, `p_category`, `p_price`) VALUES
(15, 'BF1', 'Black Forest (Small)', 50, 'Milk Tea', 60),
(16, 'BF2', 'Black Forest (Medium)', 47, 'Milk Tea', 70),
(17, 'BF3', 'Black Forest (Large)', 53, 'Milk Tea', 80),
(18, 'BF4', 'Black Forest (1Liter)', 49, 'Milk Tea', 100),
(19, 'DC1', 'Dark Choco (Small)', 50, 'Milk Tea', 60),
(20, 'DC2', 'Dark Choco (Medium)', 50, 'Milk Tea', 70),
(21, 'DC3', 'Dark Choco (Large)', 50, 'Milk Tea', 80),
(22, 'DC4', 'Dark Choco (1Liter)', 50, 'Milk Tea', 100),
(23, 'JC1', 'Java Chip (Small)', 50, 'Milk Tea', 60),
(24, 'JC2', 'Java Chip (Medium)', 50, 'Milk Tea', 70),
(25, 'JC3', 'Java Chip (Large)', 50, 'Milk Tea', 80),
(26, 'JC4', 'Java Chip (1Liter)', 50, 'Milk Tea', 100),
(27, 'M1', 'Matcha (Small)', 50, 'Milk Tea', 60),
(28, 'M2', 'Matcha (Medium)', 50, 'Milk Tea', 70),
(29, 'M3', 'Matcha (Large)', 50, 'Milk Tea', 80),
(30, 'M4', 'Matcha (1Liter)', 50, 'Milk Tea', 100),
(31, 'O1', 'Okinawa (Small)', 50, 'Milk Tea', 60),
(32, 'O2', 'Okinawa (Medium)', 50, 'Milk Tea', 70),
(33, 'O3', 'Okinawa (Large)', 50, 'Milk Tea', 80),
(34, 'O4', 'Okinawa (1Liter)', 50, 'Milk Tea', 100),
(35, 'S1', 'Strawberry (Small)', 50, 'Milk Tea', 60),
(36, 'S2', 'Strawberry (Medium)', 50, 'Milk Tea', 70),
(37, 'S3', 'Strawberry (Large)', 50, 'Milk Tea', 80),
(38, 'S4', 'Strawberry (1Liter)', 50, 'Milk Tea', 100),
(39, 'AH1', 'Americano (Hot)', 50, 'Coffee', 70),
(40, 'AI2', 'Americano (Iced)', 50, 'Coffee', 80),
(42, 'CLI2', 'Café Latte (Iced)', 50, 'Coffee', 90),
(43, 'CLH1', 'Caramel Latte (Hot)', 50, 'Coffee', 80),
(45, 'SCH1', 'Salted Caramel (Hot)', 50, 'Coffee', 90),
(46, 'SCI2', 'Salted Caramel (Iced)', 50, 'Coffee', 100),
(47, 'GA1', 'Green Apple (Small)', 50, 'Fruit Tea', 60),
(48, 'GA2', 'Green Apple (Medium)', 50, 'Fruit Tea', 70),
(49, 'GA3', 'Green Apple (Large)', 50, 'Fruit Tea', 80),
(50, 'GA4', 'Green Apple (1Liter)', 50, 'Fruit Tea', 100),
(51, 'SFT1', 'Strawberry (Small)', 50, 'Fruit Tea', 60),
(52, 'SFT2', 'Strawberry (Medium)', 50, 'Fruit Tea', 70),
(53, 'SFT3', 'Strawberry (Large)', 50, 'Fruit Tea', 80),
(54, 'SFT4', 'Strawberry (1Liter)', 50, 'Fruit Tea', 100),
(55, 'PHC1', 'Ham & Cheese (Box)', 50, 'Snacks', 180),
(56, 'PHC2', 'Ham & Cheese (Slice)', 50, 'Snacks', 25),
(57, 'PH1', 'Hawaiian (Box)', 50, 'Snacks', 200),
(58, 'PH2', 'Hawaiian (Slice)', 50, 'Snacks', 30),
(59, 'PP1', 'Pepperoni (Box)', 50, 'Snacks', 210),
(60, 'PP2', 'Pepperoni (Slice)', 50, 'Snacks', 30),
(61, 'PO1', 'Overload (Box)', 50, 'Snacks', 240),
(62, 'PTM1', 'Tuna & Mushroom (Box)', 50, 'Snacks', 250),
(63, 'OR1', 'Oreo (Small)', 0, 'Milk Tea', 60),
(64, 'OR1', 'Oreo (Small)', 0, 'Milk Tea', 60);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `s_id` int(11) NOT NULL,
  `s_date` date NOT NULL,
  `s_sku` varchar(255) NOT NULL,
  `s_product` varchar(255) NOT NULL,
  `s_category` varchar(255) NOT NULL,
  `s_quantity` int(11) NOT NULL,
  `s_price` int(11) NOT NULL,
  `s_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`s_id`, `s_date`, `s_sku`, `s_product`, `s_category`, `s_quantity`, `s_price`, `s_total`) VALUES
(79, '2024-04-25', 'BF2', 'Black Forest (Medium)', 'Milk Tea', 2, 70, 140);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `snc_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`snc_id`, `name`, `email`, `password`) VALUES
(14, 'test1', 'test@gmail.com', '$2y$10$A2x0WVusadSiUOD9pBGK7.f05.ylIneaCBBVOlJIDPXyxiJf88Rk2'),
(18, 'andrei', 'andrei@gmail.com', '$2y$10$MQreptYhewMQ490oAfEMdui9/877FyEaifhACbiMV8THIBtuB6Gme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`snc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `snc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
