-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2020 at 04:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bluebubble`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `key1` varchar(10) NOT NULL,
  `value1` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`key1`, `value1`) VALUES
('booking_st', 1);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `kids_rate` int(5) NOT NULL DEFAULT '0',
  `regular_rate` int(5) NOT NULL DEFAULT '0',
  `srcitizen_rate` int(5) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `date`, `kids_rate`, `regular_rate`, `srcitizen_rate`, `is_active`) VALUES
(5, '2020-02-11', 40, 525, 342, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(5) NOT NULL,
  `name` varchar(60) NOT NULL,
  `kids` int(3) NOT NULL DEFAULT '0',
  `regular` int(3) NOT NULL DEFAULT '0',
  `srcitizen` int(3) NOT NULL DEFAULT '0',
  `kids_rate` int(6) NOT NULL DEFAULT '0',
  `regular_rate` int(6) NOT NULL DEFAULT '0',
  `srcitizen_rate` int(6) NOT NULL DEFAULT '0',
  `date_of_booking` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_for_booking` date NOT NULL,
  `mobile_num` varchar(10) NOT NULL,
  `email_id` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `kids`, `regular`, `srcitizen`, `kids_rate`, `regular_rate`, `srcitizen_rate`, `date_of_booking`, `date_for_booking`, `mobile_num`, `email_id`) VALUES
(1, 'Vivek', 1, 2, 0, 100, 200, 300, '2020-02-01 14:27:00', '2020-02-27', '9898686650', 'vivekshah9969@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
