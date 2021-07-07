-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2021 at 08:40 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_term`
--

CREATE TABLE `exam_term` (
  `id` int(12) NOT NULL,
  `name` varchar(450) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_term`
--

INSERT INTO `exam_term` (`id`, `name`) VALUES
(6, 'mid_term_1'),
(5, 'first_term');

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(12) NOT NULL,
  `website_name` varchar(400) NOT NULL,
  `website_address` varchar(500) NOT NULL,
  `website_phone1` varchar(30) NOT NULL,
  `website_phone2` varchar(30) NOT NULL,
  `website_email1` varchar(200) NOT NULL,
  `website_email2` varchar(200) NOT NULL,
  `website_start` varchar(25) NOT NULL,
  `web_about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `website_name`, `website_address`, `website_phone1`, `website_phone2`, `website_email1`, `website_email2`, `website_start`, `web_about`) VALUES
(5, 'WithYou', 'XXXX XXXX', 'XXX XXX XXX', 'XXX XXX XX', 'XXXXX@gmail.com', 'XXX@gmail.com', 'XXXX', 'welcome ');

-- --------------------------------------------------------

--
-- Table structure for table `meadmin`
--

CREATE TABLE `meadmin` (
  `id` int(12) NOT NULL,
  `admin_username` varchar(150) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `t_staff_type` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meadmin`
--

INSERT INTO `meadmin` (`id`, `admin_username`, `admin_password`, `t_staff_type`) VALUES
(1, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `Message`
--

CREATE TABLE `Message` (
  `id` int(5) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` varchar(25) DEFAULT NULL,
  `sender_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Message`
--

INSERT INTO `Message` (`id`, `content`, `user_id`, `sender_id`) VALUES
(1, 'hello', 'student', 'parent'),
(2, 'hello', 'teacher2', 'admin'),
(3, 'You need to improve your skills', 'student', 'teacher1'),
(4, '                  \r\nhklhlkh', 'admin', 'dad'),
(5, 'hello teacher                  \r\n                ', 'teacher1', 'student'),
(6, ' hello me                 \r\n    ', 'student', 'student'),
(7, ' bonjour                 \r\n                ', 'admin', 'student'),
(8, ' bonjour                 \r\n                ', 'admin', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `parents_info`
--

CREATE TABLE `parents_info` (
  `dad_name` varchar(50) NOT NULL,
  `mom_name` varchar(50) NOT NULL,
  `pr_id` int(10) NOT NULL,
  `st_id` int(12) NOT NULL,
  `pr_username` varchar(25) NOT NULL,
  `pr_pass` varchar(50) NOT NULL,
  `pr_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents_info`
--

INSERT INTO `parents_info` (`dad_name`, `mom_name`, `pr_id`, `st_id`, `pr_username`, `pr_pass`, `pr_email`) VALUES
('dad', 'mom', 1, 1, 'parent', '1111', 'parent@parent');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(6) UNSIGNED NOT NULL,
  `student_name` varchar(250) DEFAULT NULL,
  `student_grade` varchar(10) DEFAULT NULL,
  `english` varchar(250) DEFAULT NULL,
  `english2` varchar(250) DEFAULT NULL,
  `math` varchar(250) DEFAULT NULL,
  `math2` varchar(250) DEFAULT NULL,
  `Social` varchar(250) DEFAULT NULL,
  `Health` varchar(250) DEFAULT NULL,
  `GK` varchar(250) DEFAULT NULL,
  `Computer` varchar(250) DEFAULT NULL,
  `Science` varchar(250) DEFAULT NULL,
  `Nepali` varchar(250) DEFAULT NULL,
  `first_term` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_info`
--

CREATE TABLE `st_info` (
  `st_id` int(12) NOT NULL,
  `st_fullname` varchar(100) NOT NULL,
  `st_username` varchar(30) NOT NULL,
  `st_password` varchar(100) NOT NULL,
  `st_grade` int(5) NOT NULL,
  `roll_no` int(5) NOT NULL,
  `st_dob` varchar(20) NOT NULL,
  `st_address` varchar(100) NOT NULL,
  `st_district` varchar(100) NOT NULL,
  `st_gender` varchar(12) NOT NULL,
  `st_father` varchar(100) NOT NULL,
  `st_mother` varchar(100) NOT NULL,
  `st_parents_contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_info`
--

INSERT INTO `st_info` (`st_id`, `st_fullname`, `st_username`, `st_password`, `st_grade`, `roll_no`, `st_dob`, `st_address`, `st_district`, `st_gender`, `st_father`, `st_mother`, `st_parents_contact`) VALUES
(1, 'Student name', 'student', 'student', 10, 1, '12 Jan 1999', 'XX XX XX', 'xx xx xx', 'Male', 'St dad', 'St mom', '9800000'),
(2, 'St2 name', 'student2', 'asdf', 10, 12, '11/17/2055', 'XX XX XX', 'xx xx xx', 'Male', 'st2 dad', 'st2 mom', '9812222200'),
(3, 'qwe', 'asdf', '1234', 8, 11, '27 Dec 1998', 'XX XX XX', 'xx xx xx', 'Male', 'aasd', 'aasdf', '9812222'),
(8, 'Your Name', 'yourname', 'yourname1', 5, 1, '27 Jan 2000', 'xx xx xx', 'xx xx xx', 'Male', 'John Cena', 'Sita Cena', '9811111111');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_info`
--

CREATE TABLE `subjects_info` (
  `id` int(12) NOT NULL,
  `subject_name` varchar(200) NOT NULL,
  `t_fullname` varchar(200) NOT NULL,
  `t_email` varchar(200) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `time` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_info`
--

INSERT INTO `subjects_info` (`id`, `subject_name`, `t_fullname`, `t_email`, `grade`, `time`) VALUES
(1, 'Math', 'ram parsad thapa', 'ram@ram', '9', '10:00AM - 10:45AM'),
(2, 'Computer', 'Teacher 1', 'xxxxx@example.com', '10', '10:00AM - 10:45AM'),
(3, 'English', 'Teacher 2', 'yyyyyy@example.com', '10', '10:45AM - 11:30AM');

-- --------------------------------------------------------

--
-- Table structure for table `sub_class_name`
--

CREATE TABLE `sub_class_name` (
  `id` int(12) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_class_name`
--

INSERT INTO `sub_class_name` (`id`, `subject`, `class`) VALUES
(1, 'English', '1'),
(2, 'Web', '2'),
(3, 'Social', '3'),
(4, 'Computer ', '4'),
(5, 'Math', '5'),
(6, 'Optional Math', '6'),
(7, 'Health', '7'),
(8, 'Grammar', '8'),
(9, 'GK', '9'),
(10, 'Science', '10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `t_id` int(12) NOT NULL,
  `t_fullname` varchar(150) NOT NULL,
  `t_address` varchar(200) NOT NULL,
  `t_email` varchar(100) NOT NULL,
  `t_username` varchar(150) NOT NULL,
  `t_pass` varchar(50) NOT NULL,
  `t_father` varchar(150) NOT NULL,
  `t_mother` varchar(150) NOT NULL,
  `t_dob` varchar(50) NOT NULL,
  `t_qualification` varchar(800) NOT NULL,
  `t_contact` int(255) NOT NULL,
  `t_staff_type` varchar(200) NOT NULL,
  `t_gender` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`t_id`, `t_fullname`, `t_address`, `t_email`, `t_username`, `t_pass`, `t_father`, `t_mother`, `t_dob`, `t_qualification`, `t_contact`, `t_staff_type`, `t_gender`) VALUES
(1, 'Teacher 1', 'Adress1', 't1@gmail.com', 'teacher1', 'teacher1', 'fater ', 'mother', '20 Feb 1978', 'Master ', 986811111, 'Teacher', 'Male'),
(2, 'teacher2', 'XXXX', 'abc@xyz', 'teacher2', '1234', 'ABC XYZ', 'Bcd Xyz', '29 feb 2000', 'Master', 98680000, 'Teacher', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_term`
--
ALTER TABLE `exam_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meadmin`
--
ALTER TABLE `meadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Message`
--
ALTER TABLE `Message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents_info`
--
ALTER TABLE `parents_info`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_info`
--
ALTER TABLE `st_info`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `subjects_info`
--
ALTER TABLE `subjects_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_class_name`
--
ALTER TABLE `sub_class_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_term`
--
ALTER TABLE `exam_term`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `meadmin`
--
ALTER TABLE `meadmin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Message`
--
ALTER TABLE `Message`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_info`
--
ALTER TABLE `st_info`
  MODIFY `st_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects_info`
--
ALTER TABLE `subjects_info`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_class_name`
--
ALTER TABLE `sub_class_name`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `t_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
