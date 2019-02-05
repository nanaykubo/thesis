-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 12:10 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`code`, `username`, `password`, `LN`, `FN`, `MN`, `POSITION`, `date`) VALUES
(1001, 'admin', 'admin', 'Chua', 'Angel', 'De Guia', 'ADMIN', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--

CREATE TABLE `adminlogs` (
  `auto` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `activity` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogs`
--

INSERT INTO `adminlogs` (`auto`, `code`, `activity`, `date`) VALUES
(23, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(24, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(25, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(26, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(27, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(28, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(29, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-01'),
(30, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-02'),
(31, 1212, 'RESTORED USER ASDASD CHUA', '2019-02-02'),
(32, 1212, 'RESTORED USER ANGELICA CHUA', '2019-02-02'),
(33, 1212, 'RESTORED FAMILY 6', '2019-02-02'),
(34, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-04'),
(35, 1212, 'VIEW ACCOUNT DETAILS MERLYN CHUA', '2019-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `brgy`
--

CREATE TABLE `brgy` (
  `HCID` int(11) NOT NULL,
  `BRGY` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgy`
--

INSERT INTO `brgy` (`HCID`, `BRGY`) VALUES
(6, 662),
(6, 644),
(6, 660),
(6, 650),
(0, 644),
(0, 660),
(0, 650),
(0, 644),
(0, 650),
(0, 288),
(0, 293),
(0, 296),
(4, 288),
(4, 290),
(4, 291),
(4, 296);

-- --------------------------------------------------------

--
-- Table structure for table `checkup`
--

CREATE TABLE `checkup` (
  `ID` int(11) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Result` varchar(50) NOT NULL,
  `Diagnosis` varchar(50) NOT NULL,
  `Prescription` varchar(50) NOT NULL,
  `Return Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `familyno` int(11) NOT NULL,
  `HCID` int(11) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `Brgy` int(11) NOT NULL,
  `St` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `is_delete` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`familyno`, `HCID`, `LN`, `FN`, `MN`, `Brgy`, `St`, `City`, `is_delete`) VALUES
(5, 1, 'JUSAY', 'ALLEN', 'DE  TORRES', 808, 'MANILA', 'MANILA', 0),
(8, 1, 'STINSTON', 'BARNEY', '', 813, 'MANILA', 'MANILA', 1),
(9, 2, 'BASCO', 'KAREN', 'LUGAY', 823, 'MAKATI', 'MANILA', 1),
(10, 2, 'CHUA', 'MICHAEL', 'WONG', 823, 'MAKATI', 'MANILA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fdesc`
--

CREATE TABLE `fdesc` (
  `ID` int(11) NOT NULL,
  `familyno` int(11) NOT NULL,
  `is_delete` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fdesc`
--

INSERT INTO `fdesc` (`ID`, `familyno`, `is_delete`) VALUES
(12312312, 10, 0),
(2147483647, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `healthcenters`
--

CREATE TABLE `healthcenters` (
  `HCID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthcenters`
--

INSERT INTO `healthcenters` (`HCID`, `Name`, `Location`, `City`) VALUES
(1, 'VALENTINA HEALTH CENTER', '1563 E. Valentina St. Paco Mla. Manila, Philippine', 'Paco'),
(2, 'M. ICASIANO HEALTH CENTER', 'Pedro Gil St, Santa Ana, Manila, Metro Manila', 'Paco'),
(4, 'SAN ANDRES HEALTH CENTER', 'HEALTH CENTER', 'Binondo');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `auto` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `activity` text NOT NULL,
  `date` date NOT NULL,
  `POSITION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`auto`, `code`, `activity`, `date`, `POSITION`) VALUES
(76, 1001, 'UPDATED FAMILY NO(9) BASCO KAREN', '2019-02-04', ''),
(77, 1001, 'ADDED PATIENT BASCO KAREN', '2019-02-04', ''),
(80, 1001, 'EDITED PATIENT NO(12312312) BASCO KAREN', '2019-02-04', ''),
(81, 1001, 'UPDATED FAMILY NO(9) BASCO KAREN', '2019-02-04', '');

-- --------------------------------------------------------

--
-- Table structure for table `pinfobackup`
--

CREATE TABLE `pinfobackup` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `HCID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `Brgy` varchar(50) NOT NULL,
  `St` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `familyno` int(50) NOT NULL,
  `Philhealth` varchar(50) DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL,
  `Sex` varchar(6) DEFAULT NULL,
  `Age` int(3) NOT NULL,
  `Assist` int(20) NOT NULL,
  `dateinsert` date NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Zipcode` int(111) NOT NULL,
  `Landline` int(11) DEFAULT NULL,
  `Relation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `precords`
--

CREATE TABLE `precords` (
  `recordno` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `HCID` int(11) NOT NULL,
  `RecordType` varchar(50) NOT NULL,
  `DATE` date NOT NULL,
  `RETURNDATE` date NOT NULL,
  `RESULT` varchar(50) NOT NULL,
  `PRESCRIPTION` varchar(50) NOT NULL,
  `Attached` varchar(100) NOT NULL,
  `is_delete` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `precords`
--

INSERT INTO `precords` (`recordno`, `ID`, `HCID`, `RecordType`, `DATE`, `RETURNDATE`, `RESULT`, `PRESCRIPTION`, `Attached`, `is_delete`) VALUES
(6, 2147483647, 1, 'Checkup', '2019-01-29', '0000-00-00', '', '', 'C:/xampp/htdocs/medrec/assets/uploads/', 1),
(7, 2147483647, 1, 'Checkup', '2019-01-29', '0000-00-00', '', '', 'C:/xampp/htdocs/medrec/assets/uploads/', 1),
(8, 2147483647, 1, 'Checkup', '2019-01-29', '0000-00-00', '', '', 'C:/xampp/htdocs/medrec/assets/uploads/11112.png', 1),
(9, 2147483647, 1, 'Checkup', '2019-01-29', '0000-00-00', '', '', 'C:/xampp/htdocs/medrec/assets/uploads/11113.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `ID` int(11) NOT NULL,
  `blab` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicesdesc`
--

CREATE TABLE `servicesdesc` (
  `ID` int(11) NOT NULL,
  `ServicesCode` int(11) NOT NULL,
  `Services` varchar(50) NOT NULL,
  `Date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabletest`
--

CREATE TABLE `tabletest` (
  `ID` int(11) NOT NULL,
  `HCID` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `LN` varchar(50) NOT NULL,
  `FN` varchar(50) NOT NULL,
  `MN` varchar(50) NOT NULL,
  `Brgy` varchar(50) NOT NULL,
  `St` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `BirthDate` date NOT NULL,
  `CivilStatus` varchar(50) NOT NULL,
  `familyno` int(50) NOT NULL,
  `Philhealth` varchar(50) DEFAULT NULL,
  `Remarks` varchar(100) DEFAULT NULL,
  `Sex` varchar(6) DEFAULT NULL,
  `Age` int(3) NOT NULL,
  `Assist` int(20) NOT NULL,
  `dateinsert` date NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `Zipcode` int(111) NOT NULL,
  `Landline` int(11) DEFAULT NULL,
  `Relation` varchar(50) NOT NULL,
  `is_delete` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabletest`
--

INSERT INTO `tabletest` (`ID`, `HCID`, `Status`, `Type`, `LN`, `FN`, `MN`, `Brgy`, `St`, `City`, `BirthDate`, `CivilStatus`, `familyno`, `Philhealth`, `Remarks`, `Sex`, `Age`, `Assist`, `dateinsert`, `Nationality`, `Religion`, `Address`, `Zipcode`, `Landline`, `Relation`, `is_delete`) VALUES
(12312312, 2, 'ACTIVE', 'CHILD', 'BASCO', 'KAREN', 'DE GUIA', '823', 'MANILA', 'MANILA', '2019-02-05', 'WIDOW', 10, NULL, '', 'FEMALE', 0, 1001, '2019-02-04', 'ALGERIAN', 'BORN AGAIN', '2347 onyx st', 0, 5629270, 'NEPHEW', 1),
(150380212, 1, 'ACTIVE', 'CHILD', 'CHUA', 'ASDASD', 'ASD', '810', 'MANILA', 'MANILA', '2019-01-27', 'SINGLE', 9, NULL, '12', 'FEMALE', 0, 1001, '2019-02-01', 'FILIPINO', 'CHRISTIAN', '2347 onyx st', 0, 0, 'DAUGHTER', 1),
(2147483647, 2, 'ACTIVE', 'CHILD', 'CHUA', 'ANGELICA', 'DE GUIA', '813', 'TAGUIG', 'TAGUIG', '2019-01-20', 'SINGLE', 9, NULL, '1', 'MALE', 0, 1001, '2019-02-01', 'FILIPINO', 'BORN AGAIN', '2347 onyx st', 0, 0, 'SON', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `code` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `HCID` int(11) NOT NULL,
  `LN` text NOT NULL,
  `FN` text NOT NULL,
  `MN` text NOT NULL,
  `POSITION` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`code`, `username`, `password`, `HCID`, `LN`, `FN`, `MN`, `POSITION`, `date`) VALUES
(1001, 'valentina', 'pass', 2, 'DE GUIA', 'CHUA', 'MERLYN', 'NURSE', '2019-02-01'),
(1212, 'admin', 'admin', 1, 'BASCO', 'KAREN', 'DE GUIA', 'ADMIN', '0000-00-00'),
(1221, 'MERLYN', 'CHUA', 1, 'CHUA', 'MICHAEL', 'JR', 'DOCTOR', '0000-00-00'),
(23123, 'bastille', 'happier', 1, 'DE  TORRES', 'STINSTON', 'ANGELICA', 'DOCTOR', '2019-02-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`code`),
  ADD KEY `POSITION` (`POSITION`);

--
-- Indexes for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`auto`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `brgy`
--
ALTER TABLE `brgy`
  ADD KEY `BRGYID` (`BRGY`);

--
-- Indexes for table `checkup`
--
ALTER TABLE `checkup`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`familyno`),
  ADD KEY `HCID` (`HCID`);

--
-- Indexes for table `fdesc`
--
ALTER TABLE `fdesc`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `familyno` (`familyno`);

--
-- Indexes for table `healthcenters`
--
ALTER TABLE `healthcenters`
  ADD PRIMARY KEY (`HCID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`auto`),
  ADD KEY `logs_ibfk_1` (`code`);

--
-- Indexes for table `precords`
--
ALTER TABLE `precords`
  ADD PRIMARY KEY (`recordno`),
  ADD KEY `ID` (`ID`),
  ADD KEY `HCID` (`HCID`),
  ADD KEY `HCID_2` (`HCID`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `servicesdesc`
--
ALTER TABLE `servicesdesc`
  ADD KEY `ID` (`ID`),
  ADD KEY `ServicesCode` (`ServicesCode`);

--
-- Indexes for table `tabletest`
--
ALTER TABLE `tabletest`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `HCID` (`HCID`),
  ADD KEY `tabletest_ibfk_1` (`Assist`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`code`),
  ADD KEY `HID` (`HCID`),
  ADD KEY `POSITION` (`POSITION`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `familyno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fdesc`
--
ALTER TABLE `fdesc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `precords`
--
ALTER TABLE `precords`
  MODIFY `recordno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabletest`
--
ALTER TABLE `tabletest`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD CONSTRAINT `adminlogs_ibfk_1` FOREIGN KEY (`code`) REFERENCES `users` (`code`);

--
-- Constraints for table `brgy`
--
ALTER TABLE `brgy`
  ADD CONSTRAINT `brgy_ibfk_1` FOREIGN KEY (`HCID`) REFERENCES `healthcenters` (`HCID`);

--
-- Constraints for table `checkup`
--
ALTER TABLE `checkup`
  ADD CONSTRAINT `checkup_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tabletest` (`ID`);

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`HCID`) REFERENCES `healthcenters` (`HCID`);

--
-- Constraints for table `fdesc`
--
ALTER TABLE `fdesc`
  ADD CONSTRAINT `fdesc_ibfk_1` FOREIGN KEY (`familyno`) REFERENCES `family` (`familyno`),
  ADD CONSTRAINT `fdesc_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `tabletest` (`ID`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`code`) REFERENCES `users` (`code`);

--
-- Constraints for table `precords`
--
ALTER TABLE `precords`
  ADD CONSTRAINT `precords_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tabletest` (`ID`),
  ADD CONSTRAINT `precords_ibfk_2` FOREIGN KEY (`HCID`) REFERENCES `healthcenters` (`HCID`);

--
-- Constraints for table `tabletest`
--
ALTER TABLE `tabletest`
  ADD CONSTRAINT `tabletest_ibfk_1` FOREIGN KEY (`Assist`) REFERENCES `users` (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
