-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2021 at 08:44 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emaxequi_crystalgrandinvestment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(999) NOT NULL,
  `admin_password` varchar(999) NOT NULL,
  `admin_status` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_status`) VALUES
(1, 'favour@facour.com', '12345', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `notification` varchar(999) NOT NULL,
  `total_deposit_manipulation` int(11) NOT NULL,
  `total_cashout_manipulation` int(11) NOT NULL,
  `last_deposit_manipulation` int(11) NOT NULL,
  `last_cashout_manipulation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `notification`, `total_deposit_manipulation`, `total_cashout_manipulation`, `last_deposit_manipulation`, `last_cashout_manipulation`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:28px\"><span style=\"color:#ff0000\"><strong>â€¼ Welcome to SOLIDTREND â€¼</strong></span></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>A &nbsp;Registered Forex Investment Company Forex With CAC RC NO :3027032.â€¼â€¼&nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ’Ÿ &nbsp;GET 40% IN 20DAYS &nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ’Ÿ YOU CAN CASHOUT FROM 10DAYS&nbsp;</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-size:28px\"><strong>ðŸ›‘Also Earn On Our 3 levels Referral Bonuse System, &nbsp;3% 2% &amp; 1% RespectivelyðŸ›‘</strong></span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"color:#ff0000\"><span style=\"font-size:28px\"><strong>ðŸ’ŸTOGETHER WE WILL ACHIEVE SUCCESSðŸ’Ÿ</strong></span></span></p>\r\n', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `test_id` int(11) NOT NULL,
  `test_user_name` varchar(999) NOT NULL,
  `test_user_id` int(11) NOT NULL,
  `test_user_email` varchar(999) NOT NULL,
  `testimony` varchar(999) NOT NULL,
  `test_status` varchar(999) NOT NULL,
  `test_date` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tran_id` int(11) NOT NULL,
  `tran_email` varchar(999) DEFAULT NULL,
  `tran_username` varchar(999) DEFAULT NULL,
  `tran_user_id` varchar(999) DEFAULT NULL,
  `tran_desc` varchar(999) DEFAULT NULL,
  `trant_amt` varchar(999) DEFAULT NULL,
  `tran_status` varchar(999) DEFAULT NULL,
  `tran_date` varchar(999) DEFAULT NULL,
  `tran_exp_date` varchar(999) DEFAULT NULL,
  `tran_roi` varchar(999) DEFAULT NULL,
  `tran_daily_growth` varchar(999) DEFAULT NULL,
  `tran_current_bal` varchar(999) DEFAULT NULL,
  `tran_invoice` varchar(999) DEFAULT NULL,
  `tran_dep_name` varchar(999) DEFAULT NULL,
  `start_tran_date` varchar(999) DEFAULT NULL,
  `tran_withdraw_amt` varchar(999) DEFAULT NULL,
  `coin` varchar(111) DEFAULT NULL,
  `trans_id` varchar(999) DEFAULT NULL,
  `coin_amt` varchar(999) DEFAULT NULL,
  `hash_id` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tran_id`, `tran_email`, `tran_username`, `tran_user_id`, `tran_desc`, `trant_amt`, `tran_status`, `tran_date`, `tran_exp_date`, `tran_roi`, `tran_daily_growth`, `tran_current_bal`, `tran_invoice`, `tran_dep_name`, `start_tran_date`, `tran_withdraw_amt`, `coin`, `trans_id`, `coin_amt`, `hash_id`) VALUES
(64, 'tencotboy@gmail.com', 'obi', '85', 'DEPOSIT', '200', 'CONFIRMED', '2020-12-21', '2021-01-12', NULL, NULL, NULL, 'INV-020322122020', NULL, '2020-12-29', NULL, 'BTC', 'TRA-0220120322', '0.0088', '5tttt'),
(65, 'mskhanmarwat5@gmail.com', 'Mskhan', '87', 'DEPOSIT', '207', 'CONFIRMED', '2020-12-29', '2021-01-12', NULL, NULL, NULL, 'INV-030357122020', NULL, '2020-12-29', NULL, 'BTC', 'TRA-0320120357', '0.0077', '1A8x6CtDwzqXfXob3d5Tc46DbVFJGY1G3f');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(999) DEFAULT NULL,
  `fullname` varchar(777) DEFAULT NULL,
  `user_password` varchar(999) DEFAULT NULL,
  `user_email` varchar(999) DEFAULT NULL,
  `user_phone` varchar(111) DEFAULT NULL,
  `reg_date` varchar(111) DEFAULT NULL,
  `user_referrer` varchar(999) DEFAULT NULL,
  `user_status` varchar(999) DEFAULT NULL,
  `user_ref_bonus` varchar(999) DEFAULT NULL,
  `testimony` varchar(999) DEFAULT NULL,
  `user_notification` varchar(999) DEFAULT NULL,
  `btc_address` varchar(999) DEFAULT NULL,
  `eth_address` varchar(999) DEFAULT NULL,
  `bal` varchar(999) DEFAULT '0',
  `user_ref_bonus_btc` varchar(999) DEFAULT NULL,
  `address` varchar(999) DEFAULT NULL,
  `country` varchar(999) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `fullname`, `user_password`, `user_email`, `user_phone`, `reg_date`, `user_referrer`, `user_status`, `user_ref_bonus`, `testimony`, `user_notification`, `btc_address`, `eth_address`, `bal`, `user_ref_bonus_btc`, `address`, `country`) VALUES
(81, 'Mattifx', 'Favour', '1998', 'bryansteve404@gmail.com', '8076232878', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(82, 'Sessyfx', 'Sessy', 'Happys1998', 'favourchinemerem18@yahoo.com', '8076232878', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(83, 'Lazzbaba', 'Lazarus ', '1960West', 'snrlazzbaba@gmail.com', '08119960777', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(84, 'Lazbaba2020', 'Lazarus ', 'Lazarus123', 'okaforodinakachi19@gmail.com', '08119960777', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(85, 'obi', 'oke', '12345', 'tencotboy@gmail.com', '08065857532', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '200', NULL, NULL, NULL),
(86, 'Daryyxx', 'Glad', '199899', 'erikmoh0@gmail.com', '9079006022', '2020-12-20', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(87, 'Mskhan', 'Shoaib', 'mskhan1122khan', 'mskhanmarwat5@gmail.com', '00966539114173', '2020-12-22', '', 'Active', '0', NULL, NULL, '', '', '207', NULL, 'Saudi Arabia ', 'Saudi Arabia '),
(88, 'Mskhan1122 ', 'Shoaib1', 'mskhan1122khan', 'Shoaibmuhammad450@gmail.com', '00966539114173', '2020-12-22', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(89, 'Harry_Stonefield', 'Harry Stonefield ', 'Student12@', 'acecarterde1st@gmail.com', '09066539848', '2021-01-05', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL),
(90, 'Liam223', 'Liam Alfred', 'Liam@125', 'Liamalfredhawkinson@gmail.com', '07037197735', '2021-01-05', '', 'Active', '0', NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_ref`
--

CREATE TABLE `user_ref` (
  `ref_id` int(11) NOT NULL,
  `user_ref_email` varchar(999) DEFAULT NULL,
  `gen1_email` varchar(999) DEFAULT NULL,
  `gen2_email` varchar(999) DEFAULT NULL,
  `gen3_email` varchar(999) DEFAULT NULL,
  `gen4_email` varchar(999) DEFAULT NULL,
  `reg_date` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ref`
--

INSERT INTO `user_ref` (`ref_id`, `user_ref_email`, `gen1_email`, `gen2_email`, `gen3_email`, `gen4_email`, `reg_date`) VALUES
(85, 'Mattifx', NULL, NULL, NULL, NULL, NULL),
(86, 'Sessyfx', NULL, NULL, NULL, NULL, NULL),
(87, 'Lazzbaba', NULL, NULL, NULL, NULL, NULL),
(88, 'Lazbaba2020', NULL, NULL, NULL, NULL, NULL),
(89, 'obi', NULL, NULL, NULL, NULL, NULL),
(90, 'Daryyxx', NULL, NULL, NULL, NULL, NULL),
(91, 'Mskhan', NULL, NULL, NULL, NULL, NULL),
(92, 'Mskhan1122 ', NULL, NULL, NULL, NULL, NULL),
(93, 'Harry_Stonefield', NULL, NULL, NULL, NULL, NULL),
(94, 'Liam223', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tran_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ref`
--
ALTER TABLE `user_ref`
  ADD PRIMARY KEY (`ref_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `test_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `user_ref`
--
ALTER TABLE `user_ref`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
