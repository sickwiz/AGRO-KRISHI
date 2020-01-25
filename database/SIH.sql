-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2020 at 09:58 AM
-- Server version: 10.3.14-MariaDB-1
-- PHP Version: 7.3.4-2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SIH`
--

-- --------------------------------------------------------

--
-- Table structure for table `CULTIVATOR`
--

CREATE TABLE `CULTIVATOR` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CULTIVATOR`
--

INSERT INTO `CULTIVATOR` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 55415, 545),
('18803005', 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `FARMER`
--

CREATE TABLE `FARMER` (
  `KCC` varchar(20) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `STATE` varchar(40) NOT NULL,
  `CITY` varchar(40) NOT NULL,
  `PINCODE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FARMER`
--

INSERT INTO `FARMER` (`KCC`, `NAME`, `STATE`, `CITY`, `PINCODE`) VALUES
('18803005', 'aamir', 'jharkhand', 'bokara', 229001);

-- --------------------------------------------------------

--
-- Table structure for table `FARMER_LOGIN`
--

CREATE TABLE `FARMER_LOGIN` (
  `KCC` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SECURITY_QUES` varchar(100) NOT NULL,
  `SECURITY_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `FARMER_LOGIN`
--

INSERT INTO `FARMER_LOGIN` (`KCC`, `PASSWORD`, `SECURITY_QUES`, `SECURITY_PASS`) VALUES
('18803005', '$argon2i$v=19$m=1024,t=2,p=2$NGYxc1Iya1JBa1RXRU9lcw$m1Z56fnbMxXKwUI45Nh1hosJqr0ZAvrdXk6MP342iIQ', 'ques1', '$argon2i$v=19$m=1024,t=2,p=2$NG9MTDdxWUk2eE0ualFZMQ$lanK6ijnWCVJUks8i43+sFNXid39TsZlmi3pC7Z5JAs');

-- --------------------------------------------------------

--
-- Table structure for table `HARVESTER`
--

CREATE TABLE `HARVESTER` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HARVESTER`
--

INSERT INTO `HARVESTER` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 5, 545);

-- --------------------------------------------------------

--
-- Table structure for table `MANAGER_LOGIN`
--

CREATE TABLE `MANAGER_LOGIN` (
  `SHOP_ADMIN` varchar(20) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `SECURITY_QUES` varchar(100) NOT NULL,
  `SECURITY_PASS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MANAGER_LOGIN`
--

INSERT INTO `MANAGER_LOGIN` (`SHOP_ADMIN`, `PASSWORD`, `SECURITY_QUES`, `SECURITY_PASS`) VALUES
('123423455678', '$argon2i$v=19$m=65536,t=4,p=1$MFVHc1lhR1dZTURIRlFYYw$be/Qdpv1vZAWqJVIij5SNksg3tRmAHmTgroFLa+CC5o', 'ques2', '$argon2i$v=19$m=65536,t=4,p=1$enlDcS5qZGREZi9wS3NOVQ$xaFY2IsB/KXrtNwTO2fgxK496VJUoCVad2vYPf1NXoo');

-- --------------------------------------------------------

--
-- Table structure for table `PLANTATION`
--

CREATE TABLE `PLANTATION` (
  `KCC` varchar(20) NOT NULL,
  `SOIL_TYPE` varchar(40) NOT NULL,
  `AREA_HECT` float NOT NULL,
  `CROP` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `RENT`
--

CREATE TABLE `RENT` (
  `FROM_KCC` int(11) NOT NULL,
  `TO_KCC` int(11) NOT NULL,
  `EQUIPMENT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `SEED_DRILL`
--

CREATE TABLE `SEED_DRILL` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SHOP`
--

CREATE TABLE `SHOP` (
  `SID` varchar(20) NOT NULL,
  `TYPE` varchar(20) NOT NULL,
  `LOCATION` varchar(40) NOT NULL,
  `SHOP_ADMIN` varchar(20) NOT NULL,
  `PINCODE` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SHOP_MANAGER`
--

CREATE TABLE `SHOP_MANAGER` (
  `NAME` varchar(40) NOT NULL,
  `SHOP_ADMIN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SHOP_MANAGER`
--

INSERT INTO `SHOP_MANAGER` (`NAME`, `SHOP_ADMIN`) VALUES
('dheeraj12', '123423455678');

-- --------------------------------------------------------

--
-- Table structure for table `SLOTS_AVAILABLE`
--

CREATE TABLE `SLOTS_AVAILABLE` (
  `SID` varchar(20) NOT NULL,
  `NO_SLOTS` int(11) NOT NULL,
  `DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SLOTS_BOOKED`
--

CREATE TABLE `SLOTS_BOOKED` (
  `SID` varchar(20) NOT NULL,
  `KCC` varchar(20) NOT NULL,
  `DAY` date NOT NULL,
  `TIME` time NOT NULL,
  `TOKEN_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `SPRAYER`
--

CREATE TABLE `SPRAYER` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SPRAYER`
--

INSERT INTO `SPRAYER` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 500, 69);

-- --------------------------------------------------------

--
-- Table structure for table `TRACTOR`
--

CREATE TABLE `TRACTOR` (
  `KCC` varchar(20) NOT NULL,
  `AVAILABLE` int(11) NOT NULL,
  `RENT` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TRACTOR`
--

INSERT INTO `TRACTOR` (`KCC`, `AVAILABLE`, `RENT`) VALUES
('18803005', 9, 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CULTIVATOR`
--
ALTER TABLE `CULTIVATOR`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `FARMER`
--
ALTER TABLE `FARMER`
  ADD PRIMARY KEY (`KCC`);

--
-- Indexes for table `FARMER_LOGIN`
--
ALTER TABLE `FARMER_LOGIN`
  ADD PRIMARY KEY (`KCC`);

--
-- Indexes for table `HARVESTER`
--
ALTER TABLE `HARVESTER`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `MANAGER_LOGIN`
--
ALTER TABLE `MANAGER_LOGIN`
  ADD PRIMARY KEY (`SHOP_ADMIN`);

--
-- Indexes for table `PLANTATION`
--
ALTER TABLE `PLANTATION`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `SEED_DRILL`
--
ALTER TABLE `SEED_DRILL`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD PRIMARY KEY (`SID`),
  ADD KEY `SHOP_ADMIN` (`SHOP_ADMIN`);

--
-- Indexes for table `SHOP_MANAGER`
--
ALTER TABLE `SHOP_MANAGER`
  ADD PRIMARY KEY (`SHOP_ADMIN`);

--
-- Indexes for table `SLOTS_AVAILABLE`
--
ALTER TABLE `SLOTS_AVAILABLE`
  ADD KEY `SID` (`SID`);

--
-- Indexes for table `SPRAYER`
--
ALTER TABLE `SPRAYER`
  ADD KEY `KCC` (`KCC`);

--
-- Indexes for table `TRACTOR`
--
ALTER TABLE `TRACTOR`
  ADD KEY `KCC` (`KCC`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CULTIVATOR`
--
ALTER TABLE `CULTIVATOR`
  ADD CONSTRAINT `CULTIVATOR_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `FARMER`
--
ALTER TABLE `FARMER`
  ADD CONSTRAINT `FARMER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER_LOGIN` (`KCC`);

--
-- Constraints for table `HARVESTER`
--
ALTER TABLE `HARVESTER`
  ADD CONSTRAINT `HARVESTER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `PLANTATION`
--
ALTER TABLE `PLANTATION`
  ADD CONSTRAINT `PLANTATION_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `SEED_DRILL`
--
ALTER TABLE `SEED_DRILL`
  ADD CONSTRAINT `SEED_DRILL_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `SHOP`
--
ALTER TABLE `SHOP`
  ADD CONSTRAINT `SHOP_ibfk_1` FOREIGN KEY (`SHOP_ADMIN`) REFERENCES `SHOP_MANAGER` (`SHOP_ADMIN`);

--
-- Constraints for table `SHOP_MANAGER`
--
ALTER TABLE `SHOP_MANAGER`
  ADD CONSTRAINT `SHOP_MANAGER_ibfk_1` FOREIGN KEY (`SHOP_ADMIN`) REFERENCES `MANAGER_LOGIN` (`SHOP_ADMIN`);

--
-- Constraints for table `SLOTS_AVAILABLE`
--
ALTER TABLE `SLOTS_AVAILABLE`
  ADD CONSTRAINT `SLOTS_AVAILABLE_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `SHOP` (`SID`);

--
-- Constraints for table `SPRAYER`
--
ALTER TABLE `SPRAYER`
  ADD CONSTRAINT `SPRAYER_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);

--
-- Constraints for table `TRACTOR`
--
ALTER TABLE `TRACTOR`
  ADD CONSTRAINT `TRACTOR_ibfk_1` FOREIGN KEY (`KCC`) REFERENCES `FARMER` (`KCC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
