-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 10:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentinfo`
--

CREATE TABLE `appointmentinfo` (
  `apt_id` int(11) NOT NULL,
  `aptid` text NOT NULL,
  `name` text NOT NULL,
  `year` text NOT NULL,
  `month` text NOT NULL,
  `aptlength` text NOT NULL,
  `adate` date NOT NULL,
  `provider` text NOT NULL,
  `operatory` text NOT NULL,
  `atime` time NOT NULL,
  `aamount` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointmentinfo`
--

INSERT INTO `appointmentinfo` (`apt_id`, `aptid`, `name`, `year`, `month`, `aptlength`, `adate`, `provider`, `operatory`, `atime`, `aamount`, `pid`) VALUES
(23, '2', 'Shivani', '2022\r\n', 'may', '60', '2022-06-04', '4', '2', '08:00:00', '500', 0),
(28, '6', 'vedika', '2014\r\n', 'may', '60', '2021-05-15', '7', '2', '09:00:00', '500', 0),
(38, '6', 'amey', '2014\r\n', 'may', '60', '2021-05-22', '2', '2', '09:00:00', '500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `clinicinfo`
--

CREATE TABLE `clinicinfo` (
  `cid` int(11) NOT NULL,
  `c_id` text NOT NULL,
  `cname` text NOT NULL,
  `citi` text NOT NULL,
  `mstate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinicinfo`
--

INSERT INTO `clinicinfo` (`cid`, `c_id`, `cname`, `citi`, `mstate`) VALUES
(1, '2', 'nager hospital', 'shevgaon\r\n', 'maharastra'),
(2, '4', 'shevgaon hospital', 'shevgaon\r\n', 'maharastra'),
(3, '5', 'patil hospital', 'ahmednager\r\n', 'maharastra'),
(4, '5', 'nager hospital', 'shevgaon\r\n', 'maharastra'),
(5, '', '', '\r\n', ''),
(6, '5', 'shevgaon hospital', 'ahmednager\r\n', 'maharastra'),
(7, '5', 'shevgaon hospital', 'shevgaon\r\n', 'maharastra'),
(8, '5', 'nager hospital', 'shevgaon\r\n', 'maharastra'),
(9, '2', 'nager hospital', 'ahmednager\r\n', 'maharastra'),
(10, '', '', '\r\n', ''),
(11, '2', 'shevgaon hospital', 'ahmednager\r\n', 'maharastra');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `d_id` int(11) NOT NULL,
  `did` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`d_id`, `did`, `fname`, `lname`, `city`, `state`, `cid`) VALUES
(1, '5', 'shivani', 'Are\r\n', 'shevgaon', 'maharshtra', 2),
(2, '6', 'jay', 'Are\r\n', 'shevgaon', 'maharshtra', 2),
(3, '7', 'vijay', 'Are\r\n', 'shevgaon', 'maharshtra', 2),
(4, '5', 'kalyani', 'borul\r\n', 'shevgaon', 'maharshtra', 2),
(5, '5', 'shivani', 'Are\r\n', 'shevgaon', 'maharshtra', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `pid` int(11) NOT NULL,
  `p_id` text NOT NULL,
  `bgroup` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(70) NOT NULL,
  `cnumber` text NOT NULL,
  `city` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `afuture` text NOT NULL,
  `state` varchar(70) NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`pid`, `p_id`, `bgroup`, `fname`, `lname`, `age`, `mname`, `dob`, `gender`, `cnumber`, `city`, `email`, `afuture`, `state`, `pwd`) VALUES
(59, '4', 'B+', 'rupali\r\n', 'bhagat', '15', 'vaishali', '2000-07-08', 'male', '7896654556', 'shevgaon', 'kalyani82@gmail.com', 'yes', 'maharshtra', '246'),
(60, '5', 'o+', 'jay\r\n', 'Are', '16', 'vaishali', '2000-08-09', 'male', '7896654556', 'shevgaon', 'kalyani82@gmail.com', 'yes', 'maharshtra', '248'),
(61, '5', 'B+', 'amey\r\n', 'wagh', '20', '', '1999-06-14', 'male', '8978678956', 'shevgaon', 'amey.24@gmail.com', 'no', 'maharshtra', '257'),
(62, '8', 'Select', 'vijay\r\n', 'Are', '78', 'pushpa', '1981-04-14', 'Select', '87654567890', 'shevgaon', 'vijay45@gmail.com', 'no', 'maharshtra', '890'),
(63, '4', 'B+', 'kalyani\r\n', 'borul', '15', '', '2005-05-05', 'female', '7865989898', 'shevgaon', 'kalyani82@gmail.com', 'no', 'maharshtra', '456'),
(64, '9', 'A+', 'amini\r\n', 'gaykwad', '20', 'manini', '2000-08-09', 'female', '8978678989', 'shevgaon', 'amini45@gmail.com', 'no', 'maharshtra', '679'),
(65, '5', 'o+', 'jay\r\n', 'Are', '20', '', '2002-06-11', 'Select', '9876584567', 'shevgaon', 'jayare77@gmail.com', 'yes', 'maharshtra', '789'),
(66, '', 'o+', '\r\n', 'arevedik', '', '', '0000-00-00', 'Select', '', '', '', '', '', ''),
(67, '8', 'o+', 'vedika\r\n', 'Are', '2', 'rupali', '2000-02-01', 'female', '92226700', 'shevgaon', 'vedikaare@gmail.com', 'yes', 'maharshtra', '248'),
(68, '', '', '\r\n', '', '', '', '0000-00-00', '', '', '', '', '', '', ''),
(69, '8', 'A+', 'bhakti\r\n', 'Are', '20', 'vaishali', '2002-07-15', 'female', '9876542578', 'shevgaon', 'vijay45@gmail.com', 'yes', 'maharshtra', '245'),
(70, '8', 'A+', 'jay\r\n', 'Are', '20', 'vaishali', '2021-04-30', 'male', '6789765677', 'shevgaon', 'shivaniare01@gmail.com', 'no', 'maharshtra', '247'),
(71, '8', 'A+', 'shivani\r\n', 'borul', '20', 'rupali', '2021-05-05', 'female', '7898786767', 'shevgaon', 'vijay45@gmail.com', 'no', 'maharshtra', '456'),
(74, '8', 'A+', 'jay\r\n', 'Are', '20', 'rupali', '2021-05-06', 'female', '6789056788', 'shevgaon', 'jayare77@gmail.com', 'no', 'maharshtra', '456');

-- --------------------------------------------------------

--
-- Table structure for table `transactioninfo`
--

CREATE TABLE `transactioninfo` (
  `srid` int(11) NOT NULL,
  `srno` text NOT NULL,
  `ptype` text NOT NULL,
  `cname` text NOT NULL,
  `pname` text NOT NULL,
  `year` text NOT NULL,
  `month` text NOT NULL,
  `amounts` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactioninfo`
--

INSERT INTO `transactioninfo` (`srid`, `srno`, `ptype`, `cname`, `pname`, `year`, `month`, `amounts`, `cid`) VALUES
(1, '2', 'production', 'nager hospital\r\n', 'ankita', '2014', 'may', '500', 0),
(2, '5', 'payment', 'nager hospital\r\n', 'nikhil', '2014', 'may', '500', 0),
(3, '6', 'production', 'shevgaon hospital\r\n', 'vedika', '2014', 'jun', '200', 0),
(4, '2', 'payment', 'nager hospital\r\n', 'ankita', '2014', 'may', '40', 0),
(5, '2', 'payment', 'nager hospital\r\n', 'nikhil', '2022', 'may', '500', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentinfo`
--
ALTER TABLE `appointmentinfo`
  ADD PRIMARY KEY (`apt_id`);

--
-- Indexes for table `clinicinfo`
--
ALTER TABLE `clinicinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `transactioninfo`
--
ALTER TABLE `transactioninfo`
  ADD PRIMARY KEY (`srid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentinfo`
--
ALTER TABLE `appointmentinfo`
  MODIFY `apt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `clinicinfo`
--
ALTER TABLE `clinicinfo`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patientinfo`
--
ALTER TABLE `patientinfo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `transactioninfo`
--
ALTER TABLE `transactioninfo`
  MODIFY `srid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
