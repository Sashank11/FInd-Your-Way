-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `Iname` varchar(20) NOT NULL,
  `dpdate` varchar(20) NOT NULL,
  `ardate` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `hotel` varchar(20) NOT NULL,
  `guest` int(10) NOT NULL,
  `room` varchar(20) NOT NULL,
  `fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `fname`, `Iname`, `dpdate`, `ardate`, `phno`, `hotel`, `guest`, `room`, `fee`) VALUES
(5, 'sashank', 'rijal', '23-12-2021', '28-12-2021', '98247651', 'shanker', 2, 'ac', 6000),
(6, 'binboi', 'damn', '21-12-2021', '28-12-2021', '8329749233', 'yakandyeti', 1, 'ac', 10000),
(7, 'prason', 'poudel', '23-12-2021', '29-12-2021', '99832764234', 'yellow', 2, 'ac', 8000),
(8, 'Adam', 'Len', '12-1-2022', '15-1-2022', '', 'annapurna', 2, 'ac', 7000);

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(5) NOT NULL,
  `card` int(15) NOT NULL,
  `pin` int(8) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `card`, `pin`, `amount`) VALUES
(1, 88888888, 888, 8694500),
(2, 24842550, 252, -74500);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(4, 'sa', 'rie@gmail.com', '2455676', 'hahq', 'dapprrr'),
(5, 'lul', 'eer@gmail.com', '325465672', 'lew', 'dern'),
(7, 'sashank', 'rijalsashank.11@gmail.com', '8250623322', 'Package', 'regarding package discount'),
(8, 'jusin', 'justin@gamail.com', '89327497', 'dis', 'mon'),
(9, 'asd', 'asd', '123123', 'ad', 'asd'),
(10, 'sdds', 'sdf', '124231134', 'dsf', 'adf'),
(11, 'werq', 'qwr', '21345134', 'we', 'qwr'),
(12, 'asd', 'adfd', '124543', 'daf', 'af'),
(13, 'adf', 'asf', '12323', 'ad', 'ads'),
(14, 'dsdf', 'adfsgaa', '1242135', 'ssdf', 'af'),
(15, 'sadfdasf', '1safd', '214124', 'sdfa', 'asdf'),
(16, 'binboi', 'binboi@gmail.com', '927412214', 'inqury', 'i need to inqure about booking'),
(17, 'prason', 'prasonpoudel@gmail.com', '982378423', 'package', 'I have some doubts regarding the package'),
(18, 'Adam', 'adamlen@gmail.com', '985343543', 'FeedBack', 'Wonderful service!');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(5) NOT NULL,
  `dname` varchar(10) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `dname`, `amount`) VALUES
(1, 'TRAVEL', 2000),
(2, 'MICKEY10', 1000),
(3, 'PRASON20', 2500),
(4, 'SASHANK50', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `Iname` varchar(20) NOT NULL,
  `dpdate` varchar(20) NOT NULL,
  `ardate` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `package` varchar(20) NOT NULL,
  `guest` int(10) NOT NULL,
  `room` varchar(20) NOT NULL,
  `fee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `fname`, `Iname`, `dpdate`, `ardate`, `phno`, `package`, `guest`, `room`, `fee`) VALUES
(14, 'sashank', 'rijal', '19-12-2021', '30-12-2021', '98238763429', 'everestbase', 2, 'ac', 150000),
(15, 'binboi', 'damn', '22-12-2021', '30-12-2021', '981235531', 'everestbase', 2, 'ac', 150000),
(16, 'Adam', 'Len', '28-12-2021', '30-12-2021', '9972467142', 'everestbase', 3, 'ac', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(3, 'prason', 'pras@gmail.com', 'prason123'),
(4, 'lily', 'liliy@gmail.com', 'liliy123'),
(6, 'James', 'james@gmail.com', 'james123'),
(7, 'sashank', 'rijalsashank.11@gmail.com', 'sashank123'),
(8, 'binboi', 'binboi2@gmail.com', 'binboi123'),
(9, 'Adam', 'adam@gmail.com', 'adam123');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `fname`, `lname`, `email`, `date`, `type`) VALUES
(1, 'James', 'Tron', 'jamtron@gmail.com', '2021-12-02', 'AC room'),
(3, 'sashank', 'rijal', 'rijalsashank.11@gmai', '2021-12-28', 'Hotel'),
(4, 'binboi', 'dman', 'binboi@gmail.com', '2021-12-15', 'Package Inquiry'),
(5, 'Adam', 'Len', 'adamlen@gmail.com', '2021-12-30', 'Package inquiry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
