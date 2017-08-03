-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2017 at 01:58 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_name` varchar(50) DEFAULT NULL,
  `account_number` varchar(20) DEFAULT NULL,
  `debit` varchar(50) DEFAULT '0.00',
  `credit` varchar(50) DEFAULT '0.00',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `account_name`, `account_number`, `debit`, `credit`, `created`, `modified`) VALUES
(7, 3, 'Discount Senior Citizen', '004', '0.00', '60.25', '2017-07-19 10:12:57', '2017-07-19 10:12:57'),
(6, 3, 'Discount', '003', '0.00', '50.69', '2017-07-19 10:12:16', '2017-07-19 10:31:07'),
(5, 3, 'Delivery', '002', '70.00', '0.00', '2017-07-19 10:11:43', '2017-07-20 02:36:19'),
(4, 3, 'Slaughter', '001', '100.50', '0.00', '2017-07-19 10:09:49', '2017-07-19 10:09:49'),
(8, 3, 'Butcher\'s Labor', '007', '140.55', '0.00', '2017-07-19 10:14:40', '2017-07-19 10:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_fees`
--

CREATE TABLE `accounts_fees` (
  `account_id` int(11) NOT NULL,
  `fee_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts_fees`
--

INSERT INTO `accounts_fees` (`account_id`, `fee_id`) VALUES
(4, 3),
(4, 4),
(5, 3),
(5, 4),
(6, 3),
(6, 4),
(7, 3),
(7, 4),
(7, 5),
(8, 3),
(8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `fee_name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `fee_name`, `created`, `modified`) VALUES
(5, 'fee31', '2017-07-21 10:38:43', '2017-07-21 10:38:43'),
(3, 'Payment 3 ', '2017-07-19 09:27:51', '2017-07-19 10:16:06'),
(4, 'Fee 7', '2017-07-19 09:29:05', '2017-07-19 10:18:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fee_id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Middle_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fee_id`, `username`, `password`, `First_Name`, `Middle_Name`, `Last_Name`, `created`, `modified`) VALUES
(4, 3, 'jm', '$2y$10$qFMptUcDrsFGast.MdoXTuQCSrHWhALI538CBAwe3CWe8a5O1yHla', '', '', '', '2017-07-19 09:52:30', '2017-07-21 10:32:14'),
(3, 3, 'user2', '$2y$10$ZSPbwd/dU58Br8GwhFqPpuX1L3KsWAF.aR.vO/8kvTESUFcprWeK6', '', '', '', '2017-07-19 09:26:20', '2017-07-21 08:25:00'),
(5, 3, 'user3', '$2y$10$ug6aXXGrdWToJmryzJaTSeU1/F1dt2LkWOtv/eEbBYc9jigclRC3C', '', '', '', '2017-07-20 01:38:50', '2017-07-21 08:25:10'),
(6, 4, 'user4', '$2y$10$yz.P6trjnGQmn2rICDEi6OL5fOZ58mA3epzgVrX7MHahf/3yM3I2a', 'Charlton', 'Rodriguez', 'Larano', '2017-07-20 02:49:12', '2017-07-21 08:07:57'),
(7, 4, 'user6', '$2y$10$p/fGAAhngkClKJqC5AWuoO0mjuW8/BHFRMVLnLp7hUdcNm6XYQE/C', 'hello', 'hi', '', '2017-07-20 03:13:05', '2017-07-21 08:07:44'),
(8, 5, 'user7', '$2y$10$opgkylRtwWHWla4F459y8u9cQxC8jEoecfhU5PKbCW20sf5SmGrMK', '', '', '', '2017-07-20 03:14:07', '2017-07-21 10:39:08'),
(9, 4, 'user8', '$2y$10$sdmpknunUU4snbt4RHcDP.OYgxNddCpf2FaIxs242Ch4RPx4GANkq', '', '', '', '2017-07-20 03:14:24', '2017-07-21 08:05:57'),
(10, 4, 'user9', '$2y$10$aCWSvczAcLhyavlUY9E6luloQOtIzwtsaUZJvyhDZbfXTLawSHQre', '', '', '', '2017-07-20 03:14:52', '2017-07-21 08:06:33'),
(11, 3, 'user10', '$2y$10$VxrhEnWvJEyQ85qb3MtD6ujwzyti8Bmc2fdY83dE3X8dt2B.JSNDa', '', '', '', '2017-07-20 03:15:21', '2017-07-21 10:33:56'),
(12, 4, 'user11', '$2y$10$G0ZkKD3oWEDpaIOowhL4cehICN6NVLMeDH6bBI448pq9qqXuKsuEa', '', '', '', '2017-07-20 03:15:38', '2017-07-21 08:07:17'),
(13, 4, 'user123', '$2y$10$IdntxeO.0JFSrQhDPFbfsObewo7ovBQnPuTRWvXx1LteTQrwZm5f.', '', '', '', '2017-07-20 03:15:49', '2017-07-21 08:06:12'),
(14, 3, 'user12', '$2y$10$nLETJQ.ztDRgdIn3N8mysOI/y5guDjdBP7cU79XUgUv/D7Dzf8chi', 'fname', '', 'lname', '2017-07-20 08:14:29', '2017-07-21 10:32:43'),
(15, NULL, 'Charlton', '$2y$10$krS/ITS7m8ZaCsxBxUeH0.sg2WFCF8DIRiAMAo8SLHS/G2HLIN.v6', 'Charlton Stephen ', 'Rodriguez', 'Larano', '2017-07-22 06:30:39', '2017-07-22 06:30:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_key` (`user_id`);

--
-- Indexes for table `accounts_fees`
--
ALTER TABLE `accounts_fees`
  ADD PRIMARY KEY (`account_id`,`fee_id`),
  ADD KEY `fee_key` (`fee_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fee_name` (`fee_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fee_key` (`fee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
