-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 07:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_visitor`
--

CREATE TABLE `info_visitor` (
  `Serial` int(11) NOT NULL,
  `Name` char(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Purpose` varchar(100) NOT NULL,
  `meetingTo` varchar(100) NOT NULL,
  `day` varchar(50) NOT NULL,
  `month` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `Date` date NOT NULL,
  `TimeIN` time NOT NULL,
  `ReceiptID` int(6) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `ids` varchar(100) NOT NULL,
  `veh` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `TimeOUT` time NOT NULL,
  `registeredBy` varchar(30) NOT NULL,
  `loggedOutBy` varchar(30) NOT NULL,
  `profile_photo` text NOT NULL DEFAULT 'image/defaultAvatar.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_visitor`
--

INSERT INTO `info_visitor` (`Serial`, `Name`, `Contact`, `Purpose`, `meetingTo`, `day`, `month`, `year`, `Date`, `TimeIN`, `ReceiptID`, `Status`, `ids`, `veh`, `Comment`, `TimeOUT`, `registeredBy`, `loggedOutBy`, `profile_photo`) VALUES
(1, 'Sumit', 9841120696, 'Fun', 'Hellp', '16', 1, 2019, '2019-01-16', '18:28:06', 145513, 'OFFLINE', 'asd', 'asd', 'asd', '18:59:04', 'sumit', 'sumit', 'image/defaultAvatar.jpg'),
(2, 'Shreya Vaidya', 9841120696, 'Hello', 'BAba', '16', 1, 2019, '2019-01-16', '18:29:38', 514571, 'OFFLINE', 'asd', 'asd', 'hello', '18:32:01', 'sumit', 'sumit', 'image/defaultAvatar.jpg'),
(3, 'Ursula', 9861549710, 'Etikai', 'Sumit', '16', 1, 2019, '2019-01-16', '21:39:59', 658639, 'OFFLINE', 'asd', 'asd', 'hello', '21:41:46', 'sumit', 'sumit', 'image/defaultAvatar.jpg'),
(4, 'Krishna', 9865321458, 'meet', 'job', '04', 7, 2020, '2020-07-04', '15:18:04', 617285, 'OFFLINE', 'asd', 'asd', 'new employee', '00:49:01', 'sumit', 'admin', 'image/defaultAvatar.jpg'),
(5, 'kisan', 9865324512, 'new job ', 'for meeting', '05', 7, 2020, '2020-07-05', '12:35:18', 820264, 'OFFLINE', 'asd', 'asd', 'new customer', '00:49:15', 'Projectworlds', 'admin', 'image/defaultAvatar.jpg'),
(6, 'shya', 8488224433, 'int', 'jag', '25', 5, 2022, '2022-05-25', '21:39:56', 437720, 'OFFLINE', 'asd', 'asd', 'bag', '00:54:05', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(7, 'ddd', 1234567890, 'fff', 'dfgg', '25', 5, 2022, '2022-05-25', '23:36:17', 148120, 'OFFLINE', '', '', 'gfb', '00:55:27', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(8, 'ddddvfg', 1234567809, 'vdsv', 'fsbf', '25', 5, 2022, '2022-05-25', '23:37:56', 780689, 'OFFLINE', '', '', 'BFDB', '00:57:02', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(9, 'fdg', 9876543210, 'vfdn', 'bgfm', '25', 5, 2022, '2022-05-25', '23:54:28', 251074, 'OFFLINE', '', '', 'fhjm,', '00:51:58', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(10, 'sdfg', 1234567890, 'sdfgh', 'dfghj', '25', 5, 2022, '2022-05-25', '23:58:14', 459009, 'OFFLINE', '', '', 'FGHNMQ', '00:57:26', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(11, 'DSDG', 1234567890, 'SASFV', 'DFVB', '25', 5, 2022, '2022-05-25', '23:59:48', 220849, 'OFFLINE', '', '', 'DFVBN', '00:59:22', 'admin', 'admin', 'image/defaultAvatar.jpg'),
(12, 'ga', 1234567890, 'dsfg', 'xcvbn', '26', 5, 2022, '2022-05-26', '00:04:57', 298999, 'ONLINE', '', '', 'cvbn', '00:00:00', 'admin', '', 'image/defaultAvatar.jpg'),
(13, 'ddghg', 987654321, 'dfgdhjk', 'sdfghjk', '26', 5, 2022, '2022-05-26', '00:28:51', 504785, 'ONLINE', '', '', 'fgh', '00:00:00', 'admin', '', 'image/defaultAvatar.jpg'),
(14, 'vbn', 987654321, 'dfghg', 'dfghj', '26', 5, 2022, '2022-05-26', '00:31:36', 872974, 'ONLINE', '', '', 'dfghj', '00:00:00', 'admin', '', 'image/defaultAvatar.jpg'),
(15, 'tyfgjhmn', 987654321, 'fghjk,', 'vbnm', '26', 5, 2022, '2022-05-26', '00:35:19', 193017, 'ONLINE', 'vbnm,q', 'vbnm,', 'fghgjhm', '00:00:00', 'admin', '', 'image/defaultAvatar.jpg'),
(16, 'dev sharma', 9459243930, 'job interview', 'mr dj', '27', 5, 2022, '2022-05-27', '10:26:29', 133331, 'ONLINE', 'aadhar card', '123123123', 'laptop repair', '00:00:00', 'admin', '', 'image/profile-1653626489.png'),
(17, 'adasd', 2312313123, 'asdasd', 'asdsad', '27', 5, 2022, '2022-05-27', '10:38:17', 861003, 'ONLINE', 'asdsad', '123213', 'adsd', '00:00:00', 'admin', '', 'image/profile-1653627197.png'),
(18, 'Himanshu', 9459243930, 'testing', 'manager', '27', 5, 2022, '2022-05-27', '10:59:02', 177038, 'ONLINE', 'aadhar card', 'hp 11 4600', 'laptop repair', '00:00:00', 'admin', '', 'image/profile-1653628442.png');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `SnoPrimary` int(11) NOT NULL,
  `userName` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `pass` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`SnoPrimary`, `userName`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'shreya', 'shreya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_visitor`
--
ALTER TABLE `info_visitor`
  ADD PRIMARY KEY (`Serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_visitor`
--
ALTER TABLE `info_visitor`
  MODIFY `Serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
