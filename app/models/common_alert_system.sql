-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2015 at 10:59 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `common_alert_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Employee_ID` int(11) DEFAULT NULL,
  `E_First_Name` varchar(30) DEFAULT NULL,
  `E_Last_Name` varchar(30) DEFAULT NULL,
  `E_NIC` varchar(255) DEFAULT NULL,
  `E_Email` varchar(50) DEFAULT NULL,
  `E_Tel` varchar(15) DEFAULT NULL,
  `E_Address` varchar(255) DEFAULT NULL,
  `E_Job_Role` varchar(30) DEFAULT NULL,
  `E_Password` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_ID`, `E_First_Name`, `E_Last_Name`, `E_NIC`, `E_Email`, `E_Tel`, `E_Address`, `E_Job_Role`, `E_Password`) VALUES
(1, 'Damitha', 'Senarathne', '784569451V', 'damitha@yahoo.com', '0776488320', '341/2, Depanama, Pannipitiya.', 'Manager', '$2y$11$LQ4vHYYFt0dBaglpeE4HY.TnMspy/Ecft1WH0qCEDWnbOkOKDhEva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
