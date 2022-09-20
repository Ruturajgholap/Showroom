-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addstock`
--

CREATE TABLE `addstock` (
  `stockid` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `purchaseprice` varchar(20) NOT NULL,
  `finalprice` varchar(20) NOT NULL,
  `chessisno` varchar(20) NOT NULL,
  `purchasedata` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addstock`
--

INSERT INTO `addstock` (`stockid`, `model`, `type`, `purchaseprice`, `finalprice`, `chessisno`, `purchasedata`) VALUES
(1, 'scrpio', '4wheelar', '200000', '23232323', '45689', '124564'),
(2, 'oddi', '4wheelar', '2323232323', '23232323', '2323232', '20/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookingcustmer`
--

CREATE TABLE `bookingcustmer` (
  `bookingID` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `finalprice` int(50) NOT NULL,
  `advances` int(50) NOT NULL,
  `deleverydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookingcustmer`
--

INSERT INTO `bookingcustmer` (`bookingID`, `cust_id`, `model`, `type`, `color`, `finalprice`, `advances`, `deleverydate`) VALUES
(1, 11, 'mrf', 'four wheeler', 'Pink', 234322, 24324, '2022-08-26'),
(2, 11, 'mrf', 'four wheeler', 'Pink', 234322, 24324, '2022-08-26'),
(3, 11, 'mrf', 'four wheeler', 'Pink', 234322, 24324, '2022-08-26'),
(4, 0, '', '', '', 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `newcustmer`
--

CREATE TABLE `newcustmer` (
  `CUST_ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(20) NOT NULL,
  `CONTACT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newcustmer`
--

INSERT INTO `newcustmer` (`CUST_ID`, `NAME`, `ADDRESS`, `CONTACT`) VALUES
(1, 'vipul', 'supli', '9561680556'),
(2, 'keshav', 'chennai', '8975085085'),
(3, 'vishnu', 'pune', '4545896235'),
(4, 'mahesh', 'supli', '7895645896'),
(7, 'krishna', 'pune', '9822008952'),
(9, 'ruturaj', 'pune', '7845451213'),
(10, 'suraj', 'pune', '9855235645');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `SrNo` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `FINALPRICE` varchar(20) NOT NULL,
  `EPOWER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`SrNo`, `NAME`, `TYPE`, `FINALPRICE`, `EPOWER`) VALUES
(1, 'scarpio', '4Wheelar', '2000000', '400MH'),
(2, 'Bolero', '4Wheelar', '500000', '30MH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addstock`
--
ALTER TABLE `addstock`
  ADD PRIMARY KEY (`stockid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `bookingcustmer`
--
ALTER TABLE `bookingcustmer`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `newcustmer`
--
ALTER TABLE `newcustmer`
  ADD PRIMARY KEY (`CUST_ID`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addstock`
--
ALTER TABLE `addstock`
  MODIFY `stockid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookingcustmer`
--
ALTER TABLE `bookingcustmer`
  MODIFY `bookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newcustmer`
--
ALTER TABLE `newcustmer`
  MODIFY `CUST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
