-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2025 at 01:00 PM
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
-- Database: `ploy`
--

-- --------------------------------------------------------

--
-- Table structure for table `memberinput`
--

CREATE TABLE `memberinput` (
  `IdMember` int(11) NOT NULL,
  `firstName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `lastName` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `room` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `memberId` int(11) DEFAULT -1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberinput`
--

INSERT INTO `memberinput` (`IdMember`, `firstName`, `lastName`, `datetime`, `room`, `memberId`) VALUES
(8, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-17 02:41:26', '1212', 1234),
(9, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-17 02:58:21', '1212', 1234),
(10, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-17 03:09:35', '1313', 7000059),
(11, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-17 03:57:34', '1313', 7000059),
(12, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-17 03:58:40', '1313', 7000059),
(13, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-17 03:59:19', '1313', 7000059),
(14, NULL, NULL, '2025-01-17 08:50:48', '1313', -1),
(15, NULL, NULL, '2025-01-17 09:52:43', '1122', -1),
(16, NULL, NULL, '2025-01-17 09:54:03', '1122', -1),
(17, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:27:42', '1111', 1234),
(18, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:31:43', '1111', 1234),
(19, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:42:56', '1150', 1234),
(20, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:43:37', '1150', 1234),
(21, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:46:20', '1150', 1234),
(22, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:46:45', '1150', 1234),
(23, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 02:46:59', '1150', 1234),
(24, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 03:33:44', '1212', 1234),
(25, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 03:36:04', '1212', 1234),
(26, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 04:27:37', '1212', 1234),
(27, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 04:28:21', '1212', 1234),
(28, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 04:38:56', '1212', 1234),
(29, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 13:07:48', '1212', 1234),
(30, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 13:08:44', '1212', 1234),
(31, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 13:08:53', '1212', 1234),
(32, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 13:54:49', '1217', 7000059),
(33, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 14:39:01', '1217', 7000059),
(34, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 14:40:20', '1217', 7000059),
(35, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 14:54:33', '1212', NULL),
(36, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 14:56:49', '1212', NULL),
(37, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:00:17', '1212', NULL),
(38, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:02:17', '1212', NULL),
(39, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:02:56', '1212', NULL),
(40, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:03:12', '1212', NULL),
(41, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:07:13', '1212', NULL),
(42, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:07:38', '1212', NULL),
(43, 'g', 'เพชรอย่างดี', '2025-01-20 15:08:02', '1211', NULL),
(44, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:13:04', '1218', NULL),
(45, 'เอกสิทธิ์', 'บุรณะชีวิน', '2025-01-20 15:15:26', '1218', NULL),
(46, 'ชวัลลักษณ์', 'เพชรอย่างดี', '2025-01-20 15:42:35', '1215', 66963);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `firstname` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `department` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `userType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userTypeId` int(11) NOT NULL,
  `userTypeName` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userTypeId`, `userTypeName`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memberinput`
--
ALTER TABLE `memberinput`
  ADD PRIMARY KEY (`IdMember`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `userType` (`userType`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `memberinput`
--
ALTER TABLE `memberinput`
  MODIFY `IdMember` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `userTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`userType`) REFERENCES `usertype` (`userTypeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
