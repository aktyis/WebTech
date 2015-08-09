-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2015 at 07:57 PM
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

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`user_id`, `name`, `qulification`, `contact_no`, `email`, `specility`) VALUES
('1111-111-11', 'Nabil Sarwar', 'Software Engineering', 124568956, 'nabil@aiub.edu', 'abc');

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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`user_id`, `name`, `cantact_no`, `email`, `blood_group`, `current_address`, `gender`, `gurdian_name`, `gurdians_contact`) VALUES
('1111-111-11', '', '', '', '', '', '', '', 1111),
('13-23456-1', 'nayre', '012568', 'nay@gnah.con', 'B pos', 'dhaka', 'Male', 'nayu', 13),
('13-23669-1', '', '', '', '', '', '', '', 13),
('13-23669-1', 'Nayeem Islam', '01245863685', 'nirob@aiub.edu', 'B pos', 'Dhaka', 'Male', 'Md Islam', 13),
('14-23869-1', 'Nirob Islam', '01245863685', 'nirob@aiub.edu', 'B pos', 'Dhaka', 'Male', 'Md Islam Al', 14);

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
  `status` varchar(50) DEFAULT NULL,
  `validity` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `password`, `status`, `validity`) VALUES
('1111-111-11', 'e10adc3949ba59abbe56e057f20f883e', 'faculty', 'active'),
('13-23456-1', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'active'),
('13-23669-1', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'active'),
('14-23869-1', 'e10adc3949ba59abbe56e057f20f883e', 'student', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
 ADD UNIQUE KEY `user_id` (`user_id`);

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
