-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 05:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empdetails`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `empid` varchar(4) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `working_type` enum('Monthly','Daily') DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `workeddays` int(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `empid`, `uname`, `working_type`, `salary`, `workeddays`, `password`) VALUES
(0, '0999', 'jack danniel', 'Daily', 2000.00, 2, 'password4'),
(1, '0001', 'doe', 'Monthly', 2500.00, 18, 'password1'),
(2, '0025', 'smith', 'Daily', 1500.00, 15, 'password2'),
(3, '0123', 'madhav', 'Daily', 3000.00, 30, 'password3'),
(6, '1111', 'vinoth', 'Monthly', 25000.00, 28, 'vinoth'),
(7, '1234', 'sabri', 'Monthly', 1200.00, 14, 'sabari'),
(8, '4321', 'arvindh', 'Monthly', 3000.00, 22, 'arvindh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
