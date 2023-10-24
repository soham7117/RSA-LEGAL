-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 06:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghattelawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `ID` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `firstPartyName` varchar(20) NOT NULL,
  `firstPartyAddress` text NOT NULL,
  `secondPartyName` varchar(20) NOT NULL,
  `secondPartyAddress` text NOT NULL,
  `document` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `noOfMonths` int(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `premises` varchar(100) NOT NULL,
  `terms` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`ID`, `email`, `approval`, `Reason`, `firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `document`, `photo`, `noOfMonths`, `startDate`, `endDate`, `premises`, `terms`) VALUES
(2, 'sohampawar626@gmail.com', 'Approved', 'wrong address ', 'soham', 'vile parle', 'parth chauhan', 'dadar', '', '', 10, '30/01/2020', '30/11/2020', 'vile parle', 'from 6am to 6pm'),
(4, 'sohampawar626@gmail.com', 'Pending', '', 'soham Pawar', 'dfgg', 'soham sawant', 'gerg', '', '', 5, '30/01/2020', '30/10/2020', 'gerge', 'gerg'),
(5, 'sohampawar626@gmail.com', 'Pending', '', 'soham Pawar', 'g4trh4r', 'paarth kapur', 'rgherg', '', '', 5, '30/01/2020', '30/10/2020', 'grege', 'rhgertg'),
(6, 'sohampawar626@gmail.com', 'Approved', '', 'soham Pawar', 'fwegew', 'soham pawar', 'gferge', 'Document/Adddhar card.jpg', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 'greg', 'gerg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `ID` int(100) NOT NULL,
  `login_email` varchar(30) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`ID`, `login_email`, `name`, `email`, `subject`, `phone_no`, `message`) VALUES
(55, 'sohampawar626@gmail.com', 'Soham Pawar', 'sohampawar626@gmail.com', 'trademark registration', '07777085902', 'i want to register my brand'),
(56, 'sohampawar626@gmail.com', 'Soham Pawar', 'sohampawar626@gmail.com', 'I want to register a brand', '7777085902', 'plz guide me the steps for brand registration');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_user`
--

CREATE TABLE `lawyer_user` (
  `id` int(50) NOT NULL,
  `approval` varchar(1) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `Degree` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer_user`
--

INSERT INTO `lawyer_user` (`id`, `approval`, `firstname`, `lastname`, `gender`, `phoneno`, `Degree`, `email`, `password`) VALUES
(22, '1', 'parth', 'chauhan', 'male', '8574512368', 'llb', 'parth@gmail.com', 'parth1234'),
(23, '0', 'Soham', 'kirtane', 'male', '07777085902', 'llb', 'sohamk@gmail.com', 'sohamk1234'),
(24, '0', 'omkar', 'chugh', 'male', '8522114563', 'LLB', 'omkar@gmail.com', 'omkar1234');

-- --------------------------------------------------------

--
-- Table structure for table `leave_and_license_agreement`
--

CREATE TABLE `leave_and_license_agreement` (
  `email` varchar(30) NOT NULL,
  `ID` int(100) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `Reason` varchar(30) NOT NULL,
  `firstPartyName` varchar(20) NOT NULL,
  `firstPartyAddress` text NOT NULL,
  `secondPartyName` varchar(20) NOT NULL,
  `secondPartyAddress` text NOT NULL,
  `Witness1` varchar(30) NOT NULL,
  `Witness2` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `noOfMonths` int(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `rent` int(10) NOT NULL,
  `rentxmonths` int(10) NOT NULL,
  `deposit` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_and_license_agreement`
--

INSERT INTO `leave_and_license_agreement` (`email`, `ID`, `approval`, `Reason`, `firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `Witness1`, `Witness2`, `document`, `photo`, `noOfMonths`, `startDate`, `endDate`, `rent`, `rentxmonths`, `deposit`, `total`) VALUES
('sohampawar626@gmail.com', 108, 'Approved', '', 'soham Pawar', 'vileparle', 'asim', 'kurla', 'wincy', 'rishika', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 'Document/Adddhar card.jpg', 5, '2022-10-28', '28/3/2023', 10000, 50000, 100000, 150000),
('sohampawar626@gmail.com', 109, 'Approved', 'wrong address ', 'soham Pawar', 'vile parle', 'asim ', 'kurla', 'rishika', 'amit sir', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 'Document/Adddhar card.jpg', 11, '2022-10-14', '14/9/2023', 20000, 220000, 100000, 320000);

-- --------------------------------------------------------

--
-- Table structure for table `pga`
--

CREATE TABLE `pga` (
  `ID` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `Reason` varchar(30) NOT NULL,
  `firstPartyName` varchar(20) NOT NULL,
  `firstPartyAddress` text NOT NULL,
  `secondPartyName` varchar(20) NOT NULL,
  `secondPartyAddress` text NOT NULL,
  `Witness1` varchar(30) NOT NULL,
  `Witness2` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `noOfMonths` int(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `rent` int(10) NOT NULL,
  `rentxmonths` int(10) NOT NULL,
  `deposit` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pga`
--

INSERT INTO `pga` (`ID`, `email`, `approval`, `Reason`, `firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `Witness1`, `Witness2`, `document`, `photo`, `noOfMonths`, `startDate`, `endDate`, `rent`, `rentxmonths`, `deposit`, `total`) VALUES
(36, 'sohampawar626@gmail.com', 'Pending', '', 'soham Pawar', 'ferfer', 'soham sawant', 'gfrewg', 'rishika', 'amit sir', 'Document1/Adddhar card.jpg', 'Document1/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 10000, 50000, 500000, 550000),
(37, 'sohampawar626@gmail.com', 'Pending', '', 'soham Pawar', 'ferfer', 'soham sawant', 'gfrewg', 'rishika', 'amit sir', 'Document/Adddhar card.jpg', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 10000, 50000, 500000, 550000),
(38, 'sohampawar626@gmail.com', 'Pending', '', 'soham Pawar', 'ferfer', 'soham sawant', 'gfrewg', 'rishika', 'amit sir', 'Document/Adddhar card.jpg', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 10000, 50000, 500000, 550000),
(39, 'sohampawar626@gmail.com', 'Approved', '', 'soham Pawar', 'fregfe', 'soham sawant', 'grg', 'parth', 'rishika', 'Document/Adddhar card.jpg', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 10000, 50000, 500000, 550000);

-- --------------------------------------------------------

--
-- Table structure for table `promisory_note`
--

CREATE TABLE `promisory_note` (
  `ID` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `firstPartyName` varchar(20) NOT NULL,
  `firstPartyAddress` text NOT NULL,
  `secondPartyName` varchar(20) NOT NULL,
  `secondPartyAddress` text NOT NULL,
  `document` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `noOfMonths` int(10) NOT NULL,
  `startDate` varchar(10) NOT NULL,
  `endDate` varchar(10) NOT NULL,
  `rupees` int(20) NOT NULL,
  `withinterset` int(20) NOT NULL,
  `witness_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promisory_note`
--

INSERT INTO `promisory_note` (`ID`, `email`, `approval`, `Reason`, `firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `document`, `photo`, `noOfMonths`, `startDate`, `endDate`, `rupees`, `withinterset`, `witness_name`) VALUES
(14, 'sohampawar626@gmail.com', 'Approved', '', 'anish Khatu', 'vhjgv', 'soham pawar', 'gdfg', 'Document/Adddhar card.jpg', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 5, '30/01/2020', '30/10/2020', 500, 590, 'soham');

-- --------------------------------------------------------

--
-- Table structure for table `property_transfer`
--

CREATE TABLE `property_transfer` (
  `ID` int(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `approval` varchar(10) NOT NULL,
  `Reason` varchar(100) NOT NULL,
  `firstPartyName` varchar(20) NOT NULL,
  `firstPartyAddress` text NOT NULL,
  `secondPartyName` varchar(20) NOT NULL,
  `secondPartyAddress` text NOT NULL,
  `Witness2` varchar(30) NOT NULL,
  `Witness1` varchar(30) NOT NULL,
  `document` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `selling_date` date NOT NULL,
  `area` varchar(10) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `stampduty` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_transfer`
--

INSERT INTO `property_transfer` (`ID`, `email`, `approval`, `Reason`, `firstPartyName`, `firstPartyAddress`, `secondPartyName`, `secondPartyAddress`, `Witness2`, `Witness1`, `document`, `photo`, `selling_date`, `area`, `cost`, `stampduty`, `total`) VALUES
(20, 'sohampawar626@gmail.com', 'Approved', '', 'soham Pawar', 'regertg', 'anish khatu', 'gerg', 'varun', 'rishika', 'Document/bbb2c9a20f4f1a548a10cc1505dcd763.jpg', 'Document/Adddhar card.jpg', '2022-11-08', '23', '23', '5%', '529.05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `gender`, `phoneno`, `email`, `password`) VALUES
(1, 'Soham', 'Pawar', 'male', '8355885197', 'sohampawar626@gmail.com', 'soham1234'),
(2, 'omkar', 'chugh', 'male', '8899662415', 'omkar20@gmail.com', 'omkar1234'),
(22, 'Soham', 'Pawar', 'male', '07777085902', 'soham@gmail.com', 'soham1234'),
(27, 'omkar', 'chugh', 'male', '8699558626', 'omkar18@gmail.com', 'omkar1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca`
--
ALTER TABLE `ca`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lawyer_user`
--
ALTER TABLE `lawyer_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `leave_and_license_agreement`
--
ALTER TABLE `leave_and_license_agreement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pga`
--
ALTER TABLE `pga`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `promisory_note`
--
ALTER TABLE `promisory_note`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `property_transfer`
--
ALTER TABLE `property_transfer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca`
--
ALTER TABLE `ca`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `lawyer_user`
--
ALTER TABLE `lawyer_user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `leave_and_license_agreement`
--
ALTER TABLE `leave_and_license_agreement`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `pga`
--
ALTER TABLE `pga`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `promisory_note`
--
ALTER TABLE `promisory_note`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `property_transfer`
--
ALTER TABLE `property_transfer`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
