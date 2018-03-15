-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 02:47 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pikot`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL,
  `people` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_type`, `event_time`, `status`, `people`) VALUES
(1, 'Skills Test', '2018-01-25', 'Event Type 2', '0000-00-00 00:00:00', 'Open', 0),
(2, 'Skills Test Part 2', '2018-01-25', 'Event Type 1', '0000-00-00 00:00:00', 'Open', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_people`
--

CREATE TABLE `event_people` (
  `ep_id` int(11) NOT NULL,
  `event_id` int(255) NOT NULL,
  `people_id` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `people_id` int(11) NOT NULL,
  `people_fname` varchar(255) DEFAULT NULL,
  `people_mname` varchar(255) NOT NULL,
  `people_lname` varchar(255) NOT NULL,
  `people_phone` varchar(255) NOT NULL,
  `people_address` varchar(255) NOT NULL,
  `people_gender` varchar(255) NOT NULL,
  `people_bdate` date NOT NULL,
  `event` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`people_id`, `people_fname`, `people_mname`, `people_lname`, `people_phone`, `people_address`, `people_gender`, `people_bdate`, `event`) VALUES
(1, 'Mickale', 'Lapasanda', 'Saturre', '09165970601', 'Cebu City', 'Male', '1998-05-17', 0),
(2, 'Desiree', '', 'Omapoy', '12345', 'Saint Bernard Southern Leyte', 'Female', '1998-09-21', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_people`
--
ALTER TABLE `event_people`
  ADD PRIMARY KEY (`ep_id`);

--
-- Indexes for table `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`people_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event_people`
--
ALTER TABLE `event_people`
  MODIFY `ep_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peoples`
--
ALTER TABLE `peoples`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
