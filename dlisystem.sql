-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 08:43 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dlisystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `claimdetails`
--

CREATE TABLE `claimdetails` (
  `cno` varchar(10) NOT NULL,
  `wid` int(10) NOT NULL,
  `gcode` varchar(20) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `claiment` varchar(20) NOT NULL,
  `crelation` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `dod` varchar(20) NOT NULL,
  `pfno` varchar(20) NOT NULL,
  `pfsa` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `squery` varchar(80) NOT NULL,
  `dlica` int(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `acno` int(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `claimdetails`
--

INSERT INTO `claimdetails` (`cno`, `wid`, `gcode`, `wname`, `gender`, `claiment`, `crelation`, `dob`, `dod`, `pfno`, `pfsa`, `status`, `squery`, `dlica`, `bank`, `ifsc`, `code`, `acno`, `branch`) VALUES
('CL-1011', 1, 'G-101', 'Pratim Dutta', 'Male', 'Probir Dutta', 'Father', '04-08-1982', '2018-05-15', 'PF-001', 50000, 'Cancelled', 'birth date not valid', 3000, 'SBI', '2346', '234256', 123456, 'Dispur'),
('CL-1012', 2, 'G-102', 'Kunal Dutta', 'Male', 'Chandana Dutta', 'Son', '04-08-1991', '2018-05-01', '5456456', 54645, '', '', 0, 'UBI', '54654', '5467547', 21474, 'Basistha'),
('CL-1013', 3, 'G-103', 'Susmita Medhi', 'Female', 'Rahul Medhi', 'Daughter', '17-02-1984', '2018-05-02', 'PF-003', 5876, 'Held', 'photo not valid', 0, 'RBI', '2322', '45435353', 234256, 'Dispur'),
('CL-1014', 4, 'G-104', 'Pallavi Medhi', 'Female', 'Kaushik Medhi', 'Daughter', '17-12-1984', '2018-01-11', 'PF-123', 2000, 'Passed', '', 675, 'SBI', '2342', '45443', 232342134, 'Panbazar');

-- --------------------------------------------------------

--
-- Table structure for table `gardendetails`
--

CREATE TABLE `gardendetails` (
  `gcode` varchar(20) NOT NULL,
  `gname` varchar(20) NOT NULL,
  `gdistrict` varchar(20) NOT NULL,
  `gpin` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gardendetails`
--

INSERT INTO `gardendetails` (`gcode`, `gname`, `gdistrict`, `gpin`) VALUES
('G-101', 'BHTC', 'Digboi', 567858),
('G-102', 'DFRC', 'Golaghat', 799356),
('G-103', 'KJTC', 'Jorhat', 726383),
('G-104', 'GHRD', 'Dibrugarh', 524687),
('G-105', 'BDTC', 'Kamrup', 781009);

-- --------------------------------------------------------

--
-- Table structure for table `gardenlogin`
--

CREATE TABLE `gardenlogin` (
  `id` int(4) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `glgcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gardenlogin`
--

INSERT INTO `gardenlogin` (`id`, `first`, `last`, `uid`, `pwd`, `glgcode`) VALUES
(1, 'Kunal', 'Dutta', 'qwe', '123', 'G-101'),
(3, 'Kanak', 'Sir', 'kanak123', '12345', 'G-102'),
(8, 'Bhargav', 'Das', 'bhargav123', '12345', 'G-104');

-- --------------------------------------------------------

--
-- Table structure for table `masterlogin`
--

CREATE TABLE `masterlogin` (
  `id` int(4) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`id`, `first`, `last`, `uid`, `pwd`) VALUES
(1, 'Pratim', 'Dutta', 'qwe', '123'),
(106, 'Kunal', 'Dutta', 'kunaldutta', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cno` varchar(10) NOT NULL,
  `pdate` varchar(20) NOT NULL,
  `pstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cno`, `pdate`, `pstatus`) VALUES
('CL-1012', '27-04-2018', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `postlogin`
--

CREATE TABLE `postlogin` (
  `id` int(4) NOT NULL,
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postlogin`
--

INSERT INTO `postlogin` (`id`, `first`, `last`, `uid`, `pwd`) VALUES
(1, 'Debojit', 'Paul', 'qwe', '123');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `wid` int(10) NOT NULL,
  `gcode` varchar(20) NOT NULL,
  `wname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `claiment` varchar(20) NOT NULL,
  `crelation` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pfno` varchar(20) NOT NULL,
  `pfsa` int(20) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `acno` int(20) NOT NULL,
  `branch` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`wid`, `gcode`, `wname`, `gender`, `claiment`, `crelation`, `dob`, `pfno`, `pfsa`, `bank`, `ifsc`, `code`, `acno`, `branch`) VALUES
(1, 'G-101', 'Pratim Dutta', 'Male', 'Probir Dutta', 'Father', '04-08-1982', 'PF-001', 50000, 'SBI', '2346', '234256', 672462263, 'Dispur'),
(2, 'G-102', 'Kunal Dutta', 'Male', 'Chandana Dutta', 'Son', '04-08-1991', '', 0, '', '', '', 0, ''),
(3, 'G-103', 'Susmita Medhi', 'Female', 'Rahul Medhi', 'Daughter', '17-02-1984', '', 0, '', '', '', 0, ''),
(4, 'G-104', 'Pallavi Medhi', 'Female', 'Kaushik Medhi', 'Daughter', '17-12-1984', 'PF-123', 2000, 'SBI', '2342', '45443', 232342134, 'Panbazar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `claimdetails`
--
ALTER TABLE `claimdetails`
  ADD PRIMARY KEY (`cno`),
  ADD KEY `wid_fkey` (`wid`),
  ADD KEY `gcode_fkey` (`gcode`);

--
-- Indexes for table `gardendetails`
--
ALTER TABLE `gardendetails`
  ADD PRIMARY KEY (`gcode`);

--
-- Indexes for table `gardenlogin`
--
ALTER TABLE `gardenlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masterlogin`
--
ALTER TABLE `masterlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD KEY `cno_fkey2` (`cno`);

--
-- Indexes for table `postlogin`
--
ALTER TABLE `postlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gardenlogin`
--
ALTER TABLE `gardenlogin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `masterlogin`
--
ALTER TABLE `masterlogin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `postlogin`
--
ALTER TABLE `postlogin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claimdetails`
--
ALTER TABLE `claimdetails`
  ADD CONSTRAINT `gcode_fkey` FOREIGN KEY (`gcode`) REFERENCES `gardendetails` (`gcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wid_fkey` FOREIGN KEY (`wid`) REFERENCES `worker` (`wid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `cno_fkey2` FOREIGN KEY (`cno`) REFERENCES `claimdetails` (`cno`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
