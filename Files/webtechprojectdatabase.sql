-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2015 at 11:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webtechprojectdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` varchar(10) NOT NULL,
  `class_id` int(5) NOT NULL,
  `discipline_name` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `is_open` tinyint(1) NOT NULL,
  `total_capacity` int(11) NOT NULL,
  `filled_number` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `room` int(11) NOT NULL,
  `sec` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `user_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `qulification` text NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` text NOT NULL,
  `specility` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `issue_list`
--

CREATE TABLE IF NOT EXISTS `issue_list` (
`issue_id` int(11) NOT NULL,
  `user_id` varchar(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `author` text NOT NULL,
  `arrival_date` date NOT NULL,
  `issue_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `user_id` varchar(11) NOT NULL,
  `name` text NOT NULL,
  `cantact_no` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `current_address` text NOT NULL,
  `gender` text NOT NULL,
  `gurdian_name` text NOT NULL,
  `gurdians_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taken_courses`
--

CREATE TABLE IF NOT EXISTS `taken_courses` (
  `course_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `completion_status` varchar(255) NOT NULL,
  `availablity_status` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `cpga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `validity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `issue_list`
--
ALTER TABLE `issue_list`
 ADD PRIMARY KEY (`issue_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD UNIQUE KEY `user_id` (`user_id`,`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `issue_list`
--
ALTER TABLE `issue_list`
MODIFY `issue_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
