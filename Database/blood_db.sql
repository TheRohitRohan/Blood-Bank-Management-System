-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2024 at 02:22 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `A_ID` int NOT NULL,
  `D_ID` int NOT NULL,
  `A_date` date NOT NULL,
  `A_time` time NOT NULL,
  `A_status` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'panding',
  PRIMARY KEY (`A_ID`),
  KEY `D_ID` (`D_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`A_ID`, `D_ID`, `A_date`, `A_time`, `A_status`) VALUES
(1, 1, '2024-03-16', '10:00:00', 'done'),
(2, 2, '2024-03-17', '12:00:00', 'done'),
(4, 2, '2024-03-19', '15:00:00', 'done'),
(5, 6, '2024-03-20', '10:00:00', 'done'),
(6, 2, '2024-04-05', '09:00:00', 'done'),
(10, 2, '2024-05-09', '10:00:00', 'pending'),
(8, 2, '2024-04-05', '12:00:00', 'pending'),
(9, 2, '2024-05-23', '10:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

DROP TABLE IF EXISTS `blood`;
CREATE TABLE IF NOT EXISTS `blood` (
  `B_ID` int NOT NULL,
  `B_date` date NOT NULL,
  `B_Edate` date NOT NULL,
  `D_ID` int NOT NULL,
  `Btype` varchar(10) NOT NULL,
  PRIMARY KEY (`B_ID`),
  KEY `D_ID` (`D_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`B_ID`, `B_date`, `B_Edate`, `D_ID`, `Btype`) VALUES
(8, '2024-03-19', '2024-05-19', 2, 'B-'),
(3, '2024-03-18', '2024-03-28', 3, 'O+'),
(4, '2024-03-19', '2024-03-29', 1, 'AB-'),
(7, '2024-04-05', '2024-06-05', 2, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_record`
--

DROP TABLE IF EXISTS `blood_record`;
CREATE TABLE IF NOT EXISTS `blood_record` (
  `BR_ID` int NOT NULL,
  `D_ID` int NOT NULL,
  `R_ID` int NOT NULL,
  `R_C_date` date NOT NULL,
  PRIMARY KEY (`BR_ID`),
  KEY `D_ID` (`D_ID`),
  KEY `R_ID` (`R_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_record`
--

INSERT INTO `blood_record` (`BR_ID`, `D_ID`, `R_ID`, `R_C_date`) VALUES
(5, 5, 5, '2024-03-19'),
(4, 4, 4, '2024-03-20'),
(3, 3, 3, '2024-03-21'),
(2, 2, 2, '2024-03-22'),
(1, 1, 1, '2024-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `D_ID` int NOT NULL,
  `D_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `D_cno` int NOT NULL,
  `D_pass` varchar(32) NOT NULL,
  `D_add` varchar(30) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `D_email` varchar(32) NOT NULL,
  `Dbdate` date NOT NULL,
  PRIMARY KEY (`D_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`D_ID`, `D_name`, `D_cno`, `D_pass`, `D_add`, `bloodtype`, `D_email`, `Dbdate`) VALUES
(1, 'Jane Smith', 1234567890, 'pass', '456 Oak Ave', 'A+', 'jane@example.com', '1990-01-01'),
(2, 'Jane Smith', 2147483647, 'pass', '456 Oak Ave', 'B-', 'jane2@example.com', '1991-02-02'),
(3, 'Alice Johnson', 2147483647, 'password3', '789 Elm Rd', 'O+', 'alice@example.com', '1992-03-03'),
(4, 'Bob Brown', 1112223333, 'password4', '101 Pine Ln', 'AB-', 'bob@example.com', '1993-04-04'),
(5, 'Emma Davis', 2147483647, 'password5', '202 Cedar Blvd', 'A-', 'emma@example.com', '1994-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `E_ID` int NOT NULL,
  `E_name` text NOT NULL,
  `E_pass` varchar(32) NOT NULL,
  `E_CNO` int NOT NULL,
  `E_Add` varchar(30) NOT NULL,
  `E_sal` int NOT NULL,
  `E_btype` varchar(11) NOT NULL,
  `E_post` varchar(20) NOT NULL,
  `E_email` varchar(32) NOT NULL,
  PRIMARY KEY (`E_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`E_ID`, `E_name`, `E_pass`, `E_CNO`, `E_Add`, `E_sal`, `E_btype`, `E_post`, `E_email`) VALUES
(1, 'Admin', 'admin', 1234567890, '123 Elm St', 50000, 'A+', 'Admin', 'admin@example.com'),
(2, 'Emily', 'pass', 2147483647, '456', 40000, 'B-', 'Assistant', 'emily@example.com'),
(3, 'David Smith', 'david', 2147483647, '789 Maple Rd', 30000, 'O+', 'Manager', 'david@example.com'),
(4, 'Jessica Davis', 'jessica', 1112223333, '101 Pine Ln', 35000, 'AB-', 'Accountant', 'jessica@example.com'),
(5, 'Chris Wilson', 'chris', 2147483647, '202 Cedar Blvd', 45000, 'A-', 'Secretary', 'chris@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `R_ID` int NOT NULL,
  `R_quantity` int NOT NULL,
  `R_name` varchar(20) NOT NULL,
  `R_cno` int NOT NULL,
  `R_hpname` varchar(20) NOT NULL,
  `R_btype` varchar(10) NOT NULL,
  `R_date` date NOT NULL,
  PRIMARY KEY (`R_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`R_ID`, `R_quantity`, `R_name`, `R_cno`, `R_hpname`, `R_btype`, `R_date`) VALUES
(1, 1, 'Jane Smith', 2147483647, 'Blood Bank', 'A-', '2024-03-22'),
(2, 1, 'John Doe', 1234567890, 'Red Cross', 'O+', '2024-03-23'),
(3, 1, 'Michael Johnson', 2147483647, 'Hospital XYZ', 'B+', '2024-03-21'),
(4, 1, 'Emily Brown', 2147483647, 'Health Clinic', 'AB-', '2024-03-20'),
(5, 1, 'David Wilson', 2147483647, 'Community Hospital', 'O-', '2024-03-19'),
(6, 1, 'adgvaw', 123698547, 'bgfdxgbcf', 'B-', '2024-04-04'),
(7, 1, 'nbvvcnbv', 1234567891, 'bgfdxgbcf', 'A-', '2024-05-08'),
(8, 1, 'adgvaw', 1234567891, 'bgfdxgbcf', 'AB+', '2024-05-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
