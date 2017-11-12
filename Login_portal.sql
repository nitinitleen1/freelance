-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2017 at 09:17 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Login_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `account` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`account`, `password`, `pin`, `mobile`) VALUES
('201352010', 'password', '1234', '99999999999');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `Bank` varchar(20) NOT NULL,
  `Account_name` varchar(50) NOT NULL,
  `Account_no` varchar(20) NOT NULL,
  `route_no` varchar(20) NOT NULL,
  `Senders_ano` varchar(20) NOT NULL,
  `Amount` double NOT NULL,
  `tmode` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Remarks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`Bank`, `Account_name`, `Account_no`, `route_no`, `Senders_ano`, `Amount`, `tmode`, `Date`, `Remarks`) VALUES
('SBI', 'ABC', '', '123', '201352010', 5000, 'NEFT', '12/08/2017', 'Just for fun'),
('SBI', 'ABC', '2101444', '1234', '201352010', 5000, 'NEFT', '12/08/2017', 'Just for fun'),
('SBI', 'ABC', '2101444', '1234', '201352010', 5000, 'NEFT', '12/08/2017', 'Test4'),
('SBI', 'ABC', '2101444', '1234', '201352010', 5000, 'NEFT', '12/08/2017', 'Test5'),
('SBI', 'ABC', '2101444', '1234', '201352010', 5000, 'NEFT', '12/08/2017', 'Test6'),
('test', 'bname', '1111', '11', '201352010', 200, 'EIMP', '12/08/2017', 'making sure'),
('hello', 'nahi hai', '22222', '12111', '201352010', 100, 'RTGS', '12/08/2017', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD UNIQUE KEY `account` (`account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
