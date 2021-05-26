-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 03:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careerbd_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobtabel`
--

CREATE TABLE `jobtabel` (
  `UserName` varchar(50) NOT NULL,
  `UserID` int(10) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CName` varchar(50) NOT NULL,
  `CId` int(10) NOT NULL,
  `accType` int(10) NOT NULL DEFAULT '2',
  `Location` varchar(50) NOT NULL,
  `Cmail` varchar(50) NOT NULL,
  `cPhnNo` int(11) NOT NULL,
  `cType` varchar(50) NOT NULL,
  `cWeb` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtabel`
--

INSERT INTO `jobtabel` (`UserName`, `UserID`, `Pass`, `Email`, `CName`, `CId`, `accType`, `Location`, `Cmail`, `cPhnNo`, `cType`, `cWeb`) VALUES
('Anik', 111, '123', 'nasim@gmail.com', 'Anik Enterprise', 11, 2, 'Mirpur', 'anikenterprise@gmail.com', 123456789, 'Garments', 'www.aenterprise.com'),
('Shovon',222, '123', 'shovon@gmail.com', 'Tobacco-BD', 121, 2, 'Mohakhali', 'tobaccobd@gmail.com', 987654321, 'Export-Import', 'www.tobaccobd.com'),
('Saif', 333, '123', 'saif@yahoo.com', 'Saif Group', 126, 2, 'Bashundhara', 'saifgroup@gmail.com', 456789123, 'Garments', 'www.saifgroup.com'),
('Mahfuz', 444, '123', 'mahfuzsrijon@gmail.com', 'Srijon Group', 135, 2, 'Mohakhali', 'srijon.group@gmail.com', 456897123, 'Beverage', 'www.noakhailla.com');

-- --------------------------------------------------------

--
-- Table structure for table `parttimer`
--

CREATE TABLE `parttimer` (
  `UserID` int(11) NOT NULL,
  `accType` int(10) NOT NULL DEFAULT '1',
  `UserName` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `ConfirmPassword` int(11) NOT NULL,
  `DateOfBirth` varchar(150) NOT NULL,
  `PhoneNumber` int(20) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Address` varchar(150) DEFAULT NULL,
  `City` varchar(150) DEFAULT NULL,
  `Gender` varchar(150) DEFAULT NULL,
  `EducatinalDetail` varchar(200) DEFAULT NULL,
  `UnderGraduation` varchar(150) DEFAULT NULL,
  `PostGraduation` varchar(150) DEFAULT NULL,
  `CurrentStatus` varchar(150) DEFAULT NULL,
  `Skills` varchar(150) DEFAULT NULL,
  `Achivement` varchar(200) NOT NULL,
  `WorkingExperiences` varchar(200) NOT NULL,
  `AvailableTime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parttimer`
--

INSERT INTO `parttimer` (`UserID`, `accType`, `UserName`, `password`, `ConfirmPassword`, `DateOfBirth`, `PhoneNumber`, `Email`, `Address`, `City`, `Gender`, `EducatinalDetail`, `UnderGraduation`, `PostGraduation`, `CurrentStatus`, `Skills`, `Achivement`, `WorkingExperiences`, `AvailableTime`) VALUES
(78, 1, 'rahman', '456123', 456123, '1998-05-08', 1795328267, 'www@gmail.com', 'rrrrr', 'Dhaka', 'Male', 'aawerrr', 'eerrrrr', 'ffffffff', 'aaaa', 'aaaaaaaa', 'aaaaa', 'aaaaa', '254kkka'),
(124, 1, 'sumu', '456789', 456789, '2017-12-06', 1795328269, 'ahaha@gmail.com', '32..ddd', 'dhaka', 'on', 'fafafa', 'asdddd', 'dddddd', 'dddddddd', 'ddddd', 'dddddd', 'dddddd', 'ddddddd'),
(178, 1, 'Ornob', '252525', 252525, '1996-02-05', 1985656565, 'ornob@gmail.com', 'Mohakhali Wareless', 'Dhaka', 'Male', 'Govt Lab School', 'Aiub', 'Aiub', 'Service Holder', 'Programming', 'nothing', '3 Years', '5 days a week'),
(789, 1, 'akif', '852852', 852852, '1998-05-08', 1795328267, 'eew@gmail.com', 'rrrrr', 'Dhaka', 'Male', 'aawerrr', 'eerrrrr', 'ffffffff', 'aaaa', 'aaaaaaaa', 'aaaaa', 'aaaaa', '254kkka'),
(1478, 1, 'sezu', '123654', 123654, '2017-12-13', 1795328269, 'aaa@.com', 'mmmmm', 'dddddd', 'Female', 'aaaa', 'aaaaaa', 'qqqqq', 'qqqqqq', 'fffffff', 'aaaaa', '555aaa', '125a'),
(12345, 1, 'rahat', '123456', 123456, '2017-12-06', 1795328269, 'eee@h.com', '32..ddd', 'dhaka', 'on', 'fafafa', 'asdddd', 'dddddd', 'dddddddd', 'many', 'dddddd', 'dddddd', 'ddddddd'),
(78888, 1, 'rrrrttt', '741258', 741258, '1998-05-08', 1795328267, 'www@gmail.com', 'rrrrr', 'Dhaka', 'Male', 'aawerrr', 'eerrrrr', 'ffffffff', 'aaaa', 'aaaaaaaa', 'aaaaa', 'aaaaa', '254kkka'),
(1234566, 1, 'sumu', '123456', 123456, '2017-12-06', 1795328269, 'ahaha@gmail.com', '32..ddd', 'dhaka', 'on', 'fafafa', 'asdddd', 'dddddd', 'dddddddd', 'ddddd', 'dddddd', 'dddddd', 'ddddddd'),
(1234577, 1, 'rahatt', '654321', 654321, '1995-02-08', 1795328267, 'rrrrrrr@gmail.com', '32/dddd', 'Dhaka', 'Male', 'qqqqq', 'wwwwww', 'rrrrrr', 'yyyyyyy', 'ddddd', 'dddddd', 'dddddd', '247');

-- --------------------------------------------------------

--
-- Table structure for table `posttable`
--

CREATE TABLE `posttable` (
  `Designation` varchar(100) NOT NULL,
  `Experience` varchar(100) NOT NULL,
  `Qualification` varchar(100) NOT NULL,
  `Salary` int(60) NOT NULL,
  `Requirements` varchar(100) NOT NULL,
  `DeleteID` int(10) NOT NULL DEFAULT '1',
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttable`
--

INSERT INTO `posttable` (`Designation`, `Experience`, `Qualification`, `Salary`, `Requirements`, `DeleteID`, `Email`) VALUES
('Manager', '10 Years', 'BBA', 80000, 'nothing', 1, 'anikenterprise@gmail.com'),
('Assistant Manager', '5 Years', 'BBA in Accounting', 40000, 'Good in English', 1, 'anikenterprise@gmail.com'),
('Senior Employee', '4 Years', 'BSc. in any SUbject', 25000, 'Good in Talking', 1, 'anikenterprise@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobtabel`
--
ALTER TABLE `jobtabel`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `parttimer`
--
ALTER TABLE `parttimer`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobtabel`
--
ALTER TABLE `jobtabel`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `parttimer`
--
ALTER TABLE `parttimer`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234578;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
