-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 09:00 AM
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
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `brgy`
--

CREATE TABLE `brgy` (
  `HCID` int(11) NOT NULL,
  `BRGYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brgy`
--

INSERT INTO `brgy` (`HCID`, `BRGYID`) VALUES
(1, 808),
(1, 809),
(1, 810),
(1, 811),
(1, 813),
(1, 814),
(1, 815),
(2, 823),
(2, 824);

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
(6, 1, 'CHUA', 'ANGELICA', 'DE GUIA', 809, 'MANILA', 'TAGUIG', 1),
(8, 1, 'STINSTON', 'BARNEY', '', 813, 'MANILA', 'MANILA', 1);

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
(2147483647, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `healthcenters`
--

CREATE TABLE `healthcenters` (
  `HCID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `BRGYID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthcenters`
--

INSERT INTO `healthcenters` (`HCID`, `Name`, `Location`, `BRGYID`) VALUES
(1, 'VALENTINA HEALTH CENTER', '1563 E. Valentina St. Paco Mla. Manila, Philippine', 1),
(2, 'M. ICASIANO HEALTH CENTER', 'Pedro Gil St, Santa Ana, Manila, Metro Manila', 2);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `auto` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `activity` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`auto`, `code`, `activity`, `date`) VALUES
(33, 1001, 'ADDED RECORD CHUA ASDASD', '2019-01-28'),
(34, 1001, 'DELETED PATIENT CHUA ASDASD', '2019-01-28'),
(35, 1001, 'ADDED RECORD CHUA ASDASD', '2019-01-28'),
(36, 1001, 'DELETED PATIENT CHUA ASDASD', '2019-01-29'),
(37, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(38, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(39, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(40, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(41, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(42, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29'),
(43, 1001, 'ADDED RECORD CHUA ANGELICA', '2019-01-29');

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
(150380212, 1, 'ACTIVE', 'CHILD', 'CHUA', 'ASDASD', 'ASD', '810', 'MANILA', 'MANILA', '2019-01-27', 'SINGLE', 5, NULL, '', 'MALE', 0, 1001, '2019-01-26', 'FILIPINO', '', '2347 onyx st', 0, NULL, 'DAUGHTER', 0),
(2147483647, 1, 'ACTIVE', 'CHILD', 'CHUA', 'ANGELICA', 'DE GUIA', '813', 'TAGUIG', 'TAGUIG', '2019-01-20', 'SINGLE', 5, NULL, '', 'MALE', 0, 1221, '2019-12-27', 'FILIPINO', '', '2347 onyx st', 0, NULL, 'SON', 1);

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
  `POSITION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`code`, `username`, `password`, `HCID`, `LN`, `FN`, `MN`, `POSITION`) VALUES
(1001, 'valentina', 'pass', 1, 'chua', 'merlyn', 'de guia', 'nurse'),
(1221, 'MERLYN', 'CHUA', 1, 'CHUA', 'MICHAEL', 'JR', 'DOCTOR'),
(51231, 'icasiano', 'pass', 2, 'qw', 'qwe', 'qwe', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brgy`
--
ALTER TABLE `brgy`
  ADD KEY `HCID` (`HCID`),
  ADD KEY `BRGYID` (`BRGYID`);

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
  ADD PRIMARY KEY (`HCID`),
  ADD KEY `BRGYID` (`BRGYID`),
  ADD KEY `BRGYID_2` (`BRGYID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`auto`),
  ADD KEY `code` (`code`);

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
  ADD KEY `HID` (`HCID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `familyno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fdesc`
--
ALTER TABLE `fdesc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
  ADD CONSTRAINT `code` FOREIGN KEY (`code`) REFERENCES `users` (`code`);

--
-- Constraints for table `precords`
--
ALTER TABLE `precords`
  ADD CONSTRAINT `precords_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tabletest` (`ID`),
  ADD CONSTRAINT `precords_ibfk_2` FOREIGN KEY (`HCID`) REFERENCES `healthcenters` (`HCID`);

--
-- Constraints for table `servicesdesc`
--
ALTER TABLE `servicesdesc`
  ADD CONSTRAINT `servicesdesc_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tabletest` (`ID`),
  ADD CONSTRAINT `servicesdesc_ibfk_2` FOREIGN KEY (`ServicesCode`) REFERENCES `services` (`ServicesCode`);

--
-- Constraints for table `tabletest`
--
ALTER TABLE `tabletest`
  ADD CONSTRAINT `tabletest_ibfk_1` FOREIGN KEY (`Assist`) REFERENCES `users` (`code`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`HCID`) REFERENCES `healthcenters` (`HCID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
