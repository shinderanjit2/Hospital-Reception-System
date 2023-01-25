-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 03:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(10) NOT NULL,
  `visit` varchar(100) NOT NULL,
  `ward` int(10) NOT NULL,
  `discharge_date` varchar(20) NOT NULL,
  `discharge_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`no`, `name`, `address`, `mobile`, `date`, `time`, `gender`, `age`, `visit`, `ward`, `discharge_date`, `discharge_time`) VALUES
(1, 'ABCD', 'ABCD', '1234567890', '25/08/21', '08:08:pm', 'Male', 60, '', 4, '', ''),
(2, 'PQR', 'ABCD', '1234567890', '25/08/21', '09:10:pm', 'Male', 0, '', 1, '', ''),
(3, 'PQR', 'PQRS', '2147483647', '26/08/2021', '10:26:am', 'Male', 10, '', 5, '', ''),
(4, 'ABC', 'KJLASHDFSJSD FA ASDKDSF', '1234567890', '26/08/2021', '10:52:am', 'Male', 45, '', 2, '', ''),
(5, 'ABCD PQR ZZZZ YYYY', 'KALSF SAKL;FDHE ASDKALD ASLDLSD', '2147483647', '26/08/2021', '11:35:am', 'Female', 20, '', 1, '', ''),
(6, 'PQR', 'A/P. ABCD EFG HIJ KLM    ALD 41111112', '1234567890', '26/08/2021', '11:55:am', 'Male', 46, '', 8, '', ''),
(7, 'ABC', 'ABCD', '1234567890', '26/08/2021', '01:21:pm', 'Female', 25, '', 0, '', ''),
(8, 'PQR', 'ABCD', '1234567890', '26/08/2021', '01:22:pm', 'Male', 52, '', 0, '', ''),
(9, 'ABC', 'wdas', '1234567890', '26/08/2021', '01:23:pm', 'Male', 0, '', 0, '', ''),
(10, 'ABC', 'ABCD', '1234567890', '26/08/2021', '01:27:pm', 'Male', 0, '', 0, '', ''),
(11, 'ABC', 'KJAGDGAGDGA', '1234567890', '26/08/2021', '01:27:pm', 'Male', 0, '', 0, '', ''),
(12, 'ABC', 'ABCD', '1234567890', '26/08/2021', '01:28:pm', 'Male', 0, '', 0, '', ''),
(13, 'ABC', 'ABCD', '1234567890', '40', 'Male', 'Male', 26, '', 0, '', ''),
(14, 'ABC', 'ABCD', '1234567890', '26/08/2021', '01:38:pm', 'Male', 40, '', 0, '', ''),
(15, 'ABCDEFG HIJK LMNOPQR', 'AADNSDKSD AHDHSU FHLWOR DFHAUS DJ 1234921', '2147483647', '27/08/2021', '04:29:pm', 'Male', 80, '', 0, '', ''),
(16, 'HSHD SHALDI', 'HSKSLFDHSKSD ', '2147483647', '27/08/2021', '04:30:pm', 'Female', 80, '', 0, '', ''),
(17, 'ABCFAHDJAI AIDA  AIAI', 'IFAHDHSDDJKSD ', '2147483647', '28/08/2021', '10:32:am', 'Female', 50, '', 0, '', ''),
(18, 'ABCD', 'ABCD', '1234567890', '29/08/2021', '03:16:pm', 'Male', 40, '', 0, '', ''),
(19, 'Patient Full Name', 'AAAGDDSSGDGS', '1234567890', '29/08/2021', '03:17:pm', 'Female', 40, '', 0, '', ''),
(20, 'ABC', 'ABCD', '1234567890', '30/08/2021', '08:32:am', 'Female', 40, '', 0, '', ''),
(21, 'ABC', 'ABCD', '1234567890', '30/08/2021', '12:03:pm', 'Female', 40, '', 0, '', ''),
(22, 'ABCD', 'ABCDD', '1234567890', '30/08/2021', '06:18:pm', 'Female', 80, '', 0, '', ''),
(23, 'ABCD EFGH IJKL', 'ABCDEFGH', '1234567890', '30/08/2021', '07:47:pm', 'Male', 40, '', 0, '', ''),
(24, 'PQR', 'PQRS', '2147483647', '30/08/2021', '07:53:pm', 'Female', 40, '', 0, '', ''),
(25, '', 'jfdsklds', '1234567890', '31/08/2021', '02:24:pm', 'Male', 20, '', 0, '', ''),
(26, 'ABCD', 'ABCD', '1234567890', '31/08/2021', '05:37:pm', 'Male', 20, '', 0, '', ''),
(27, 'ABCD', 'ABCD', '1234567890', '31/08/2021', '05:41:pm', 'Male', 20, '', 0, '', ''),
(28, 'sda', 'ssa', '1234567890', '31/08/2021', '05:46:pm', 'Male', 50, '', 0, '', ''),
(29, 'sd', 'as', '1234567890', '31/08/2021', '05:53:pm', 'Male', 40, '', 0, '', ''),
(30, 'sd', '', '1234567890', '31/08/2021', '05:54:pm', 'Male', 20, '', 8, '', ''),
(31, 'ABCD', '', '1234567890', '02/09/2021', '01:50:pm', 'Male', 60, '', 2, '', ''),
(32, 'Patient Full Name', '', '1234567890', '02/09/2021', '01:51:pm', 'Male', 30, '', 2, '', ''),
(33, 'Fg', '', '1234567890', '02/09/2021', '02:03:pm', 'Female', 50, '', 4, '', ''),
(34, 'ABC', 'nhjk', '1234567890', '02/09/2021', '04:39:pm', 'Male', 50, '', 1, '', ''),
(35, 'Patient Full Name', 'Patient Full Address', '1234567890', '05/09/2021', '09:13:am', 'Male', 20, '', 6, '', ''),
(36, 'HELLO', 'HELLO', '1234567890', '05/09/2021', '11:35:am', 'Male', 40, '', 1, '', ''),
(37, 'ABCD', 'ABCD', '1234567890', '05/09/2021', '12:52:pm', 'Male', 20, '', 4, '', ''),
(38, 'Full Name Of The Patient', 'Address', '1234567890', '05/09/2021', '08:05:pm', 'Female', 20, '', 8, '', ''),
(39, 'ABCD', 'ABCD', '1234567890', '06/09/2021', '07:38:am', 'Male', 25, '', 0, '', ''),
(40, 'Full Name', 'Full Address', '2147483647', '06/09/2021', '07:39:am', 'Male', 25, '', 1, '', ''),
(41, 'dfsdfs', 'fdfsdf', '1234567890', '06/09/2021', '07:41:am', 'Male', 20, '', 0, '', ''),
(42, 'df', 'dassa', '1234567890', '06/09/2021', '07:42:am', 'Female', 20, '', 8, '', ''),
(43, 'ABCD', 'ABCD', '1234567890', '06/09/2021', '09:30:am', 'Female', 25, '', 8, '', ''),
(44, 'Todays Patient', 'Patients Address', '2147483647', '07/09/2021', '06:08:pm', 'Male', 20, '', 2, '', ''),
(45, 'Hello', 'Hello', '1234567890', '10/09/2021', '03:32:pm', 'Male', 26, '', 4, '', ''),
(49, 'ABCD', 'ABCD', '9874563210', '17/12/2021', '10:09:am', 'Female', 26, '', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `no` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`no`, `username`, `password`) VALUES
(1, 'username1', 'pass@1'),
(2, 'username2', 'pass@2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `no` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`no`, `username`, `email`, `password`) VALUES
(1, 'username1', 'user1@gmail.com', '597f9b8e62'),
(2, 'user2', 'use2@gmail.com', '09f7b65cb8'),
(3, '2', '2', 'c81e728d9d');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `no` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `visit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`no`, `name`, `address`, `mobile`, `age`, `gender`, `date`, `time`, `visit`) VALUES
(1, 'PQR', 'trefgfgd', '2147483647', 45, 'Female', '', '', ''),
(2, 'ABC', 'PQR', '1234567890', 20, 'Male', '', '', ''),
(3, 'ABCD EFGH IJKL', 'ABCDEFGHI', '1234567890', 60, 'Male', '30/08/2021', '07:47:pm', ''),
(4, 'VISITOR NAME', 'ADDRESS', '1234567890', 20, 'Male', '03/09/2021', '10:00:am', 'ABCD 2'),
(5, 'DSSDDSDD', 'ADDRESS', '1234567890', 60, 'Male', '03/09/2021', '10:05:am', 'ABCDEFG HIJK LMNOPQR 0'),
(6, 'ABCD', 'ABCD', '1234567890', 20, 'Male', '03/09/2021', '11:46:am', 'Patient Full Name 2'),
(7, 'Visitor Full Name', 'Address', '1234567890', 20, 'Male', '05/09/2021', '09:14:am', 'Patient Full Name 6'),
(8, 'ABC', 'ABCD', '1234567890', 20, 'Male', '05/09/2021', '01:31:pm', 'ABCD 2'),
(9, 'ABC', 'PQR', '1234567890', 20, 'Male', '05/09/2021', '07:50:pm', 'ABCD 0'),
(10, 'ABCD', 'ABCD', '1234567890', 20, 'Female', '05/09/2021', '08:02:pm', 'ABCD 2'),
(11, 'ABCD', 'ABCD', '1234567890', 20, 'Male', '05/09/2021', '08:03:pm', 'ABCD 0'),
(12, 'ABCD', 'ABCD', '1234567890', 20, 'Male', '05/09/2021', '08:04:pm', 'ABCD 2'),
(13, 'Visitors Full Address', 'Visitors Full Address', '1234567890', 20, 'Male', '05/09/2021', '08:26:pm', 'HSHD SHALDI 0'),
(14, 'Visitors Full Address', 'jaskdsfldsldsl', '1234567890', 20, 'Male', '05/09/2021', '08:27:pm', 'Full Name Of The Patient 8'),
(16, 'ABCD', 'ABCD', '1234567890', 40, 'Male', '05/09/2021', '08:32:pm', 'Full Name Of The Patient 8'),
(17, 'Hello', 'Hiiii', '1234567890', 45, 'Female', '06/09/2021', '07:34:am', 'Patient Full Name 0'),
(18, 'VISITORS FULL NAME', 'VISITORS FULL ADDRESS', '1234567890', 65, 'Female', '06/09/2021', '07:36:am', 'Patient Full Name 6'),
(19, 'fdssd', 'sd', '2147483647', 25, 'Female', '06/09/2021', '07:43:am', 'df 8'),
(20, 'ABCDPQRS', 'PQRS', '2147483647', 56, 'Male', '06/09/2021', '07:49:am', 'ABCFAHDJAI AIDA AIAI 0'),
(21, 'Visitors Full Name', 'Full Address Of Visitor With Pin Code', '1234567890', 24, 'Female', '06/09/2021', '09:28:am', 'Patient Full Name 4'),
(22, 'ABCD', 'ABCD', '1234567890', 26, 'Female', '06/09/2021', '09:30:am', 'PQR 8'),
(26, 'Todays Visitor', 'Visitors Address', '1234567890', 20, 'Male', '07/09/2021', '06:13:pm', 'Todays Patient 2'),
(27, 'Hello', 'Hello', '1234567890', 24, 'Male', '10/09/2021', '03:32:pm', 'Hello 4'),
(28, 'Hello', 'Hello', '1234567890', 1236547890, 'Male', '10/09/2021', '04:15:pm', 'Todays Patient 2'),
(29, 'Hi', 'Hi', '1234567890', 28, 'Male', '10/09/2021', '04:16:pm', 'ABCD 8'),
(32, 'PQRS', 'PQRS', '7896541203', 36, 'Female', '17/12/2021', '10:10:am', 'ABCD 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
