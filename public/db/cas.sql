-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2015 at 07:40 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cas`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `Alert_ID` int(5) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL,
  `Notification_ID` int(5) NOT NULL,
  PRIMARY KEY (`Alert_ID`),
  KEY `Notification_ID` (`Notification_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE IF NOT EXISTS `authentication` (
  `A_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Alert_ID` int(5) NOT NULL,
  `Emp_ID` int(5) NOT NULL,
  PRIMARY KEY (`A_ID`),
  KEY `Alert_ID` (`Alert_ID`),
  KEY `Emp_ID` (`Emp_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE IF NOT EXISTS `broadcast` (
  `Bradcast_ID` int(5) NOT NULL AUTO_INCREMENT,
  `A_ID` int(5) NOT NULL,
  `Emp_ID` int(5) NOT NULL,
  `Auth_ID` int(5) NOT NULL,
  PRIMARY KEY (`Bradcast_ID`),
  KEY `A_ID` (`A_ID`),
  KEY `Emp_ID` (`Emp_ID`),
  KEY `Auth_ID` (`Auth_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cyclone`
--

CREATE TABLE IF NOT EXISTS `cyclone` (
  `Disaster_ID` int(5) NOT NULL,
  `Category` varchar(50) COLLATE utf8_bin NOT NULL,
  `Wind_speed` varchar(20) COLLATE utf8_bin NOT NULL,
  KEY `Disaster_ID` (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE IF NOT EXISTS `disaster` (
  `Disaster_ID` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `latitude` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitude` varchar(100) COLLATE utf8_bin NOT NULL,
  `location` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `drought`
--

CREATE TABLE IF NOT EXISTS `drought` (
  `SPI_value` int(20) NOT NULL,
  `Disaster_ID` int(5) NOT NULL,
  KEY `Disaster_ID` (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `earth_quake`
--

CREATE TABLE IF NOT EXISTS `earth_quake` (
  `Disaster_ID` int(5) NOT NULL,
  `Magnitude` varchar(20) COLLATE utf8_bin NOT NULL,
  KEY `Disaster_ID` (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `Email_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Email_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `subject` varchar(255) COLLATE utf8_bin NOT NULL,
  `content` varchar(255) COLLATE utf8_bin NOT NULL,
  `validaton` varchar(6) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Email_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_ID` int(5) NOT NULL AUTO_INCREMENT,
  `E_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `E_nic` varchar(15) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` varchar(15) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `role` varchar(100) COLLATE utf8_bin NOT NULL,
  `image` longblob NOT NULL,
  `username` varchar(25) COLLATE utf8_bin NOT NULL,
  `password` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Emp_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `E_name`, `E_nic`, `email`, `tel`, `address`, `role`, `image`, `username`, `password`) VALUES
(1, 'Dilini weerasinghe', '916191197v', 'dweerasinghe91@gmail.com', '0718759697', 'Galketiya,Haliela', 'General User', '', 'dweerasinghe91@gmail.com', 'CAS@123'),
(3, 'Pasan Madara', '926586637v', 'pmartz@gmail.com', '0718569795', 'Malabe,Kaduwela', 'Executive User', '', 'pmartz@gmail.com', 'CAS@123'),
(4, 'Ashan Maduranga', '92658563345v', 'ashanmaduranga92@gmail.com', '0778536452', 'Dekatana', 'Executive User', '', 'ashanmaduranga92@gmail.co', 'CAS@123'),
(5, 'Thushara Dhanayake', '915864452v', 'thusharadahanayake@gmail.com', '0715870087', 'Sewanagala,Abilipitiya', 'Operational User', '', 'thusharadahanayake@gmail.', 'CAS@123'),
(6, 'Nathaliya Jayawardana', '935624478v', 'nathaliyajayawardana@yahoo.com', '0778563252', 'Kiribathgoda', 'General User', '', 'nathaliyajayawardana@yaho', 'CAS@123'),
(7, 'Imasha Dilshani', '914563352v', 'imashadilshani@gmail.com', '07118234212', 'Matara', 'General User', '', 'imashadilshani@gmail.com', 'CAS@123'),
(8, 'Dili Madhubhashini', '916191197v', 'diliniweerasinghe28@yahoo.com', '0718759697', 'Haliela,Badulla', 'Administrator', '', 'diliniweerasinghe28@yahoo', 'CAS@123');

-- --------------------------------------------------------

--
-- Table structure for table `external_authority`
--

CREATE TABLE IF NOT EXISTS `external_authority` (
  `Auth_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Auth_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `Auth_tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `Auth_address` varchar(255) COLLATE utf8_bin NOT NULL,
  `Auth_email` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Auth_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `external_authority`
--

INSERT INTO `external_authority` (`Auth_ID`, `Auth_name`, `Auth_tel`, `Auth_address`, `Auth_email`) VALUES
(1, 'Disaster Management Center', '0112569877', 'Colombo 7', 'dmc@dmc.lk'),
(2, 'Disaster Management Center', '0112569877', 'Colombo 7', 'dmc@dmc.lk');

-- --------------------------------------------------------

--
-- Table structure for table `flood`
--

CREATE TABLE IF NOT EXISTS `flood` (
  `Disaster_ID` int(5) NOT NULL,
  `river_water_level` int(20) NOT NULL,
  KEY `Disaster_ID` (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `landslide`
--

CREATE TABLE IF NOT EXISTS `landslide` (
  `Disaster_ID` int(5) NOT NULL,
  `area` varchar(20) COLLATE utf8_bin NOT NULL,
  KEY `Disaster_ID` (`Disaster_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `Notification_ID` int(5) NOT NULL AUTO_INCREMENT,
  `validation` varchar(5) COLLATE utf8_bin NOT NULL,
  `Email_ID` int(5) NOT NULL,
  `Web_ID` int(5) NOT NULL,
  PRIMARY KEY (`Notification_ID`),
  KEY `Web_ID` (`Web_ID`),
  KEY `Email_ID` (`Email_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
  `Temp_ID` int(5) NOT NULL AUTO_INCREMENT,
  `T_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `T_email` varchar(255) COLLATE utf8_bin NOT NULL,
  `T_nic` varchar(15) COLLATE utf8_bin NOT NULL,
  `T-tel` varchar(15) COLLATE utf8_bin NOT NULL,
  `T_title` varchar(100) COLLATE utf8_bin NOT NULL,
  `T_address` text COLLATE utf8_bin NOT NULL,
  `T_image` longblob NOT NULL,
  PRIMARY KEY (`Temp_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `Web_ID` int(5) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Web_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alert`
--
ALTER TABLE `alert`
  ADD CONSTRAINT `alert_ibfk_1` FOREIGN KEY (`Notification_ID`) REFERENCES `notification` (`Notification_ID`);

--
-- Constraints for table `authentication`
--
ALTER TABLE `authentication`
  ADD CONSTRAINT `authentication_ibfk_2` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`),
  ADD CONSTRAINT `authentication_ibfk_1` FOREIGN KEY (`Alert_ID`) REFERENCES `alert` (`Alert_ID`);

--
-- Constraints for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD CONSTRAINT `broadcast_ibfk_3` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`),
  ADD CONSTRAINT `broadcast_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `authentication` (`A_ID`),
  ADD CONSTRAINT `broadcast_ibfk_2` FOREIGN KEY (`Auth_ID`) REFERENCES `external_authority` (`Auth_ID`);

--
-- Constraints for table `cyclone`
--
ALTER TABLE `cyclone`
  ADD CONSTRAINT `cyclone_ibfk_1` FOREIGN KEY (`Disaster_ID`) REFERENCES `disaster` (`Disaster_ID`);

--
-- Constraints for table `drought`
--
ALTER TABLE `drought`
  ADD CONSTRAINT `drought_ibfk_1` FOREIGN KEY (`Disaster_ID`) REFERENCES `disaster` (`Disaster_ID`);

--
-- Constraints for table `earth_quake`
--
ALTER TABLE `earth_quake`
  ADD CONSTRAINT `earth_quake_ibfk_1` FOREIGN KEY (`Disaster_ID`) REFERENCES `disaster` (`Disaster_ID`);

--
-- Constraints for table `flood`
--
ALTER TABLE `flood`
  ADD CONSTRAINT `flood_ibfk_1` FOREIGN KEY (`Disaster_ID`) REFERENCES `disaster` (`Disaster_ID`);

--
-- Constraints for table `landslide`
--
ALTER TABLE `landslide`
  ADD CONSTRAINT `landslide_ibfk_1` FOREIGN KEY (`Disaster_ID`) REFERENCES `disaster` (`Disaster_ID`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_2` FOREIGN KEY (`Email_ID`) REFERENCES `email` (`Email_ID`),
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`Web_ID`) REFERENCES `website` (`Web_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
