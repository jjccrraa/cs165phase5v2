-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2018 at 10:26 AM
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
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `Conditions`
--

CREATE TABLE `Conditions` (
  `condition_id` int(11) NOT NULL,
  `condition_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Conditions`
--

INSERT INTO `Conditions` (`condition_id`, `condition_name`) VALUES
(1, 'Centrifuged'),
(2, 'Frozen'),
(3, 'Clotted'),
(4, 'Cool'),
(5, 'Contaminated'),
(6, 'Live'),
(7, 'Dry'),
(8, 'Expired'),
(9, 'Rotten'),
(10, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `name_suffix` varchar(50) DEFAULT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`patient_id`, `first_name`, `middle_name`, `last_name`, `name_suffix`, `creation_date`, `birthdate`, `sex`) VALUES
(1, 'Julius Carlo', 'Reyes', 'Aquino', '', '2018-11-17 05:57:42', '1997-07-10', 'Male'),
(2, 'Gil', 'Rajendra', 'Ackerman', '', '2018-11-17 05:57:42', '1997-08-10', 'Male'),
(3, 'Phoebe', '', 'Rothbauer', '', '2018-11-17 05:57:42', '1997-09-11', 'Female'),
(4, 'Benjamin', 'Omid', 'Sydney', '', '2018-11-17 05:57:42', '1990-07-16', 'Male'),
(5, 'Teofila', 'Rafael', 'Viteri', '', '2018-11-17 05:57:42', '1987-07-10', 'Female'),
(6, 'DE', 'NULL', 'LE', 'TE', '2018-11-25 15:19:57', '2018-11-01', 'Male'),
(7, 'Perseus', NULL, 'Jackson', NULL, '2018-11-25 15:57:32', '1997-08-18', 'Male'),
(8, 'Annabeth', NULL, 'Chase', '', '2018-11-25 16:05:16', '1997-10-11', 'Female'),
(9, 'Land', NULL, 'Grover', '', '2018-11-25 16:07:11', '1991-11-11', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `Specimen`
--

CREATE TABLE `Specimen` (
  `specimen_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `condition_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `description` text,
  `date_acquired` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Specimen`
--

INSERT INTO `Specimen` (`specimen_id`, `patient_id`, `condition_id`, `type_id`, `description`, `date_acquired`) VALUES
(1, 1, 2, 1, 'This is a specimen.', '2018-11-25 13:42:34');

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`type_id`, `type_name`) VALUES
(1, 'Blood'),
(2, 'Urine'),
(3, 'Feces'),
(4, 'Saliva'),
(5, 'Stool');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `name_suffix` varchar(50) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `first_name`, `middle_name`, `last_name`, `name_suffix`, `creation_date`) VALUES
(1, 'Jack', '', 'Kevorkian', '', '2018-11-17 05:34:00'),
(2, 'Patty', 'The', 'Pathologist', '', '2018-11-17 05:34:00'),
(3, 'Martin', 'Joseph', 'Fettman', '', '2018-11-17 05:34:00'),
(4, 'Charles Scott', '', 'Sherrington', '', '2018-11-17 05:34:00'),
(5, 'John', '', 'York', '', '2018-11-17 05:34:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Conditions`
--
ALTER TABLE `Conditions`
  ADD PRIMARY KEY (`condition_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `Specimen`
--
ALTER TABLE `Specimen`
  ADD PRIMARY KEY (`specimen_id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Conditions`
--
ALTER TABLE `Conditions`
  MODIFY `condition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Specimen`
--
ALTER TABLE `Specimen`
  MODIFY `specimen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
<<<<<<< HEAD
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> 650887e55b0e8a60f8bf6363264a99836cbaf3bb
