-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 04:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ultrasou_ssems`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(250) NOT NULL,
  `student_id` int(250) NOT NULL,
  `inventory_id` varchar(25) NOT NULL,
  `return_date` date DEFAULT NULL,
  `borrow_date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `dateReturn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `student_id`, `inventory_id`, `return_date`, `borrow_date`, `status`, `quantity`, `dateReturn`) VALUES
(7, 3, '5', '2024-03-27', '2024-03-27', 'Return', '5', '2024-03-28'),
(8, 3, '5', '2024-04-03', '2024-03-27', 'Return', '6', '2024-03-28'),
(9, 3, '5', '2024-03-31', '2024-03-29', 'Borrow', '6', NULL),
(10, 4, '6', '2024-03-30', '2024-03-29', 'Return', '6', '2024-03-29'),
(11, 4, '8', '2024-03-29', '2024-03-29', 'Return', '3', '2024-03-29'),
(12, 4, '6', '2024-03-29', '2024-03-30', 'Borrow', '12', NULL),
(13, 4, '7', '2024-03-31', '2024-03-30', 'Borrow', '2', NULL),
(14, 4, '7', '2024-03-29', '2024-03-30', 'Borrow', '12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(250) NOT NULL,
  `item` varchar(250) NOT NULL,
  `inventoryNo` varchar(240) NOT NULL,
  `quantity` int(22) NOT NULL,
  `borrow` int(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `item`, `inventoryNo`, `quantity`, `borrow`) VALUES
(5, 'bola', 'TMO23C', 12, 6),
(6, 'Bet Ping Pong', '6XQVUH', 21, 12),
(7, 'Bola Ping Pong', 'GOOV19', 50, 14),
(8, 'TENIS', 'C521JZ', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `noFon` varchar(250) DEFAULT NULL,
  `noKp` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `nama`, `noFon`, `noKp`) VALUES
(2, 4, 'admin', NULL, NULL),
(8, 11, 'Dizz121', '0139381521121', '9802090257672222'),
(9, 12, 'UI', '12381092830', '9213120938');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(250) NOT NULL,
  `nama` text NOT NULL,
  `noMatrik` text NOT NULL,
  `noFon` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `nama`, `noMatrik`, `noFon`, `email`) VALUES
(3, 'asda', '123123', '0139381521', 'dziya.zaman@gmail.com'),
(4, 'Aina', 'D1231', '0123121', 'nychaang07@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `role`) VALUES
(4, 'admin@gmail.com', 'admin', 'Admin'),
(11, 'dizz@gmail.com', '980209025767', 'Staff'),
(12, 'opie@gmail.com', '9213120938', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
