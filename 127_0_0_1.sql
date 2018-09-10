-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2018 at 10:47 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_income`
--
CREATE DATABASE IF NOT EXISTS `my_income` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `my_income`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income`
--

CREATE TABLE `tbl_income` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `amount` float(10,2) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เงินได้';

--
-- Dumping data for table `tbl_income`
--

INSERT INTO `tbl_income` (`id`, `detail`, `amount`, `datesave`) VALUES
(1, 'รายได้จากการสอนทำเว็บไซต์', 50000.00, '2018-08-01 04:33:19'),
(2, 'รายได้จากการสอนทำเว็บไซต์', 40000.00, '2018-09-08 04:33:19'),
(3, 'รายได้จากการสอนทำเว็บไซต์', 70000.00, '2018-09-07 04:34:43'),
(4, 'รายได้จากการสอนทำเว็บไซต์', 80000.00, '2018-09-06 04:34:43'),
(5, 'รายได้จากการสอนทำเว็บไซต์', 40000.00, '2017-07-02 17:00:00'),
(6, 'รายได้จากการสอนทำเว็บไซต์', 50000.00, '2017-06-19 17:00:00'),
(7, 'รายได้จากการสอนทำเว็บไซต์', 5000.00, '2018-09-10 06:26:46'),
(8, 'รายได้จากการสอนทำเว็บไซต์', 5000.00, '2018-09-10 06:26:53'),
(9, 'รายได้จากการสอนทำเว็บไซต์', 100000.00, '2018-09-10 06:27:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_income`
--
ALTER TABLE `tbl_income`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_income`
--
ALTER TABLE `tbl_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
