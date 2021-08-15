-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 11:19 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gofunding`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptrequest_tb`
--

CREATE TABLE `acceptrequest_tb` (
  `rno` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` int(11) NOT NULL,
  `requester_add2` int(11) NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `request_amount` int(11) NOT NULL,
  `assgin_date` date NOT NULL,
  `vid` int(11) NOT NULL,
  `vname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acceptrequest_tb`
--

INSERT INTO `acceptrequest_tb` (`rno`, `uid`, `request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `request_amount`, `assgin_date`, `vid`, `vname`) VALUES
(1, 0, 1, 'information -4', 'your money can save someone life', 'Shaheen', 0, 0, 'e', 'none', 34343, 'e@gamil.com', 983294823984, 0, '0000-00-00', 0, ''),
(2, 0, 1, 'information -4', 'your money can save someone life', 'Shaheen', 0, 0, 'e', 'none', 34343, 'e@gamil.com', 983294823984, 0, '0000-00-00', 0, ''),
(3, 0, 1, 'request 6', 'your money can save someone life', 'e', 0, 0, 'dhaka', 'no_state', 3244234, 'e@gamil.com', 39842348, 0, '2021-08-01', 1, 'Shaheen Alam Jony'),
(4, 7, 1, 'request after add id and amount', 'decription', 'user', 0, 0, 'dhaka', 'no_state', 3244234, 'user@gmail.com', 983294823984, 2000, '2021-08-16', 1, 'Shaheen Alam Jony'),
(5, 0, 1, 'request 6', 'your money can save someone life', 'e', 0, 0, 'dhaka', 'no_state', 3244234, 'e@gamil.com', 39842348, 0, '2021-08-16', 1, 'Shaheen Alam Jony'),
(6, 7, 1, 'request after add id and amount', 'decription', 'user', 0, 0, 'dhaka', 'no_state', 3244234, 'user@gmail.com', 983294823984, 2000, '0000-00-00', 1, 'Shaheen Alam Jony'),
(7, 7, 5, 'request  demo', 'your money can save someone life', 'user', 0, 0, 'dhaka', 'no_state', 3244234, 'user@gmail.com', 39842348, 50000, '2021-08-01', 5, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aName` varchar(30) NOT NULL,
  `aUsername` varchar(30) NOT NULL,
  `aEmail` varchar(50) NOT NULL,
  `aGender` varchar(10) NOT NULL,
  `aPassword` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aName`, `aUsername`, `aEmail`, `aGender`, `aPassword`, `role`) VALUES
(1, 'Shaheen Alam Jony', 'shaheen', 'shaheen@gmail.com', 'Male', 'shaheen', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `donation_id` int(11) NOT NULL,
  `request_no` int(11) NOT NULL,
  `donar_email` varchar(55) NOT NULL,
  `donar_name` varchar(55) NOT NULL,
  `d_ammount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`donation_id`, `request_no`, `donar_email`, `donar_name`, `d_ammount`) VALUES
(1, 4, 'shaheen alam jony', 'user@gmail.com', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `eName` varchar(30) NOT NULL,
  `eUsername` varchar(30) NOT NULL,
  `eEmail` varchar(30) NOT NULL,
  `eGender` varchar(10) NOT NULL,
  `ePassword` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `eName`, `eUsername`, `eEmail`, `eGender`, `ePassword`, `role`) VALUES
(1, 'shaheen alam', 'shaheenalam', 'shaheenalam@gmail.com', 'male', 'shaheenalam', 2),
(5, 'employee', 'employee', 'employee@gmail.com', 'Male', 'employee', 2),
(6, 's', 'ss', 'shaheen@gmail.com', 'Male', 's', 2),
(7, 'ss', 'sssss', 'shaheen@gmail.com', 'Male', 'ss', 2),
(8, 'shaheen alam jony', 'sssssss', 'shaheen@gmail.com', 'Male', 'ss', 2),
(11, 'shaheen', 'shaheen22', 'dafd@gmail.com', 'Male', 'ss', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `roleId` int(11) NOT NULL,
  `roleName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`roleId`, `roleName`) VALUES
(1, 'admin'),
(2, 'employee'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `submitrequest_tb`
--

CREATE TABLE `submitrequest_tb` (
  `request_id` int(11) NOT NULL,
  `request_info` text NOT NULL,
  `request_desc` text NOT NULL,
  `requester_name` varchar(60) NOT NULL,
  `requester_add1` text NOT NULL,
  `requester_add2` text NOT NULL,
  `requester_city` varchar(60) NOT NULL,
  `requester_state` varchar(60) NOT NULL,
  `requester_zip` int(11) NOT NULL,
  `requester_email` varchar(60) NOT NULL,
  `requester_mobile` bigint(20) NOT NULL,
  `requester_date` date NOT NULL,
  `requester_id` int(11) NOT NULL,
  `requester_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitrequest_tb`
--

INSERT INTO `submitrequest_tb` (`request_id`, `request_info`, `request_desc`, `requester_name`, `requester_add1`, `requester_add2`, `requester_city`, `requester_state`, `requester_zip`, `requester_email`, `requester_mobile`, `requester_date`, `requester_id`, `requester_amount`) VALUES
(7, 'request 6', 'your money can save someone life', 'e', 'hourse no 1', 'mirzapur', 'dhaka', 'no_state', 3244234, 'e@gamil.com', 39842348, '2021-08-01', 0, 0),
(8, 'request after add id and amount', 'decription', 'user', 'hourse no 1', 'mirzapur', 'dhaka', 'no_state', 3244234, 'user@gmail.com', 983294823984, '2021-08-01', 7, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `uName` varchar(30) NOT NULL,
  `uUsername` varchar(30) NOT NULL,
  `uEmail` varchar(30) NOT NULL,
  `uGender` varchar(10) NOT NULL,
  `uPassword` varchar(200) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uName`, `uUsername`, `uEmail`, `uGender`, `uPassword`, `role`) VALUES
(1, 'shaheen alam jony', 'shaheenalamjony', 'shaheenalamjony@gmail.com', 'Male', 'shaheenalamjony', 3),
(7, 'user', 'user', 'user@gmail.com', '1', 'user', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptrequest_tb`
--
ALTER TABLE `acceptrequest_tb`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `aUsername` (`aUsername`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`donation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `eUsername` (`eUsername`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uUsername` (`uUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptrequest_tb`
--
ALTER TABLE `acceptrequest_tb`
  MODIFY `rno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `donation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `submitrequest_tb`
--
ALTER TABLE `submitrequest_tb`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
