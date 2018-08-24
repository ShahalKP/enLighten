-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 19, 2018 at 02:34 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `enlighten`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdmId` int(11) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Type` varchar(30) NOT NULL DEFAULT 'user',
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdmId`, `UserName`, `Password`, `Type`, `Timestamp`) VALUES
(1, 'admin@com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'user', '2018-08-19 00:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `Contribution` varchar(300) NOT NULL,
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `helpRequests`
--

CREATE TABLE `helpRequests` (
  `ReqId` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `District` varchar(20) NOT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `Mobile1` varchar(15) NOT NULL,
  `Mobile2` varchar(15) DEFAULT NULL,
  `Landmark` varchar(50) DEFAULT NULL,
  `Service` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL DEFAULT 'QUEUED',
  `Timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `helpRequests`
--

INSERT INTO `helpRequests` (`ReqId`, `Name`, `District`, `Address`, `Mobile1`, `Mobile2`, `Landmark`, `Service`, `Status`, `Timestamp`) VALUES
(108, 'Muhammed Shahal KP', 'Kottayam', 'Alasseri Puraya house\r\nPallikkal Bazar\r\nMalappuram', '8137979733', '9037991031', 'Oppo Panchayath Building', 'Manual Work', 'QUEUED', '2018-08-19 10:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `volId` int(11) NOT NULL COMMENT 'Volunteer Id',
  `Name` varchar(40) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Mobile1` varchar(15) NOT NULL,
  `Mobile2` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `District` varchar(20) NOT NULL,
  `Field` varchar(40) DEFAULT NULL COMMENT 'Field of Work/Study',
  `Institution` varchar(50) DEFAULT NULL COMMENT 'Institution of Work/Study',
  `Timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`volId`, `Name`, `Age`, `Mobile1`, `Mobile2`, `Email`, `District`, `Field`, `Institution`, `Timestamp`) VALUES
(1, 'Shahal', 21, '986564654', '8778565', 'sada@asdhi', 'malappuram', 'CSE', 'MES', '2018-08-19 11:19:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdmId`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationId`);

--
-- Indexes for table `helpRequests`
--
ALTER TABLE `helpRequests`
  ADD PRIMARY KEY (`ReqId`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`volId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `donationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `helpRequests`
--
ALTER TABLE `helpRequests`
  MODIFY `ReqId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `volId` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Volunteer Id', AUTO_INCREMENT=2;
