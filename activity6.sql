-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 11:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwpactivity6`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity6`
--

CREATE TABLE `activity6` (
  `Slot` varchar(5) NOT NULL,
  `Coursecode` varchar(10) NOT NULL,
  `Coursename` varchar(50) NOT NULL,
  `FacultyId` int(6) NOT NULL,
  `regnum` varchar(10) NOT NULL,
  `Studentname` varchar(40) NOT NULL,
  `facultyname` varchar(40) NOT NULL,
  `studentbranch` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL,
  `coursetype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity6`
--

INSERT INTO `activity6` (`Slot`, `Coursecode`, `Coursename`, `FacultyId`, `regnum`, `Studentname`, `facultyname`, `studentbranch`, `status`, `coursetype`) VALUES
('A1', 'MAT3004', 'Applied linear algebra', 12001, '19BCE2550', 'PrasonPoudel', 'Ankushchanda', 'CSE', 'ongoing', 'theory only'),
('B2', 'CSE3009', 'Internet of things', 12002, '19BCE2550', 'PrasonPoudel', 'NareshK', 'CSE', 'ongoing', 'theory and project'),
('C1', 'CSE3013', 'Artificial Intelligence', 12003, '19BCE2550', 'PrasonPoudel', 'GeraldineBessieAmaliD', 'CSE', 'ongoing', 'theory and project'),
('E1', 'CSE2006', 'Microprocessor', 12004, '19BCE2550', 'PrasonPoudel', 'HariharanI', 'CSE', 'ongoing', 'Theory,projectandlab'),
('F1', 'CSE3501', 'ISAA', 12005, '19BCE2550', 'PrasonPoudel', 'chandramohan', 'CSE', 'ongoing', 'Theory,projectandlab'),
('G1', 'CSE3002', 'Internet and web programming', 12006, '19BCE2550', 'PrasonPoudel', 'ArunkumarG', 'CSE', 'ongoing', 'Theory,projectandlab');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
