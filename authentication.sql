-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2017 at 04:33 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `password`) VALUES
('adminid1', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl2`
--

CREATE TABLE `course_tbl2` (
  `course_id` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `credits` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl2`
--

INSERT INTO `course_tbl2` (`course_id`, `title`, `dep_id`, `credits`) VALUES
('cse2101', 'computer architecture', 4, 3),
('cse3100', 'Software Development-IV', 4, 0.75),
('cse3101', 'Mathematical Analysis for Computer Science', 4, 3),
('cse3103', 'Database', 4, 3),
('cse3104', 'Database Lab', 4, 1.5),
('cse3107', 'Microprocessors ', 4, 3),
('cse3108', 'Microprocessor Lab', 4, 0.75),
('cse3109', 'Digital System Design ', 4, 3),
('cse3110', 'Digital System Design Lab', 4, 0.75),
('hum3115', 'Economics and Accounting ', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `dep_tbl`
--

CREATE TABLE `dep_tbl` (
  `dep_name` varchar(100) NOT NULL,
  `dep_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_tbl`
--

INSERT INTO `dep_tbl` (`dep_name`, `dep_id`) VALUES
('eee', 3),
('cse', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `news_id` int(11) NOT NULL,
  `sort_des` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `sort_des`, `time`, `news`) VALUES
(1, 'Farewell Ceremony for Outgoing Students of Fall Semester-2016', '20170211', 'A farewell program for outgoing students of Fall Semester-2016 has been arranged on 16 February, 2017 at Prof. Dr. M. H. Khan Auditorium, AUST from 02:00 P.M. to 03:30 P.M. On behalf of AUST, honourable Vice-Chancellor will accord farewell to the outgoing students. Heads of each department/school are hereby invited along with faculty members and requested to ensure the presence of outgoing students in the Prof. Dr. M. H. Khan Auditorium as per schedule attached herewith.'),
(3, 'Study Tour to "PADMA MULTIPURPOSE BRIDGE" (Railway Bridge Construction Site) of Students of Departme', '20170211', 'A day long study tour was organized by AUST Civil Engineering Society (ACES) on 26th January 2017 at the Padma Multipurpose road-rail Bridge construction site. A total of 106 students of 4th year 2nd semester participated in the study tour at the Louhajong end of the bridge. Four faculty members of Civil Engineering Department guided them throughout the tour. The journey started at 9:00 am. from AUST campus. The visit at construction site was started with a warm welcome from the Chief Engineer of the truss construction division, Mr. Harry Li. Then participants had a short briefing on the safety precautions of site visit and general rules at the premises of the China Railway Shanhaiguan Bridge Co. Ltd. (CRSBG) office followed by a photo session.');

-- --------------------------------------------------------

--
-- Table structure for table `result_table`
--

CREATE TABLE `result_table` (
  `stu_id` varchar(100) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `scutoniser_id` int(10) NOT NULL,
  `number` int(10) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `year` int(10) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `approved` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_table`
--

INSERT INTO `result_table` (`stu_id`, `course_id`, `scutoniser_id`, `number`, `grade`, `year`, `semester`, `approved`) VALUES
('14.02.04.034', 'cse 3101', 10101, 55, 'b-', 2016, 'fall', 'no'),
('14.02.04.048', 'cse 3101', 10101, 88, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse 3103', 10105, 70, 'a-', 2016, 'fall', 'no'),
('14.02.04.048', 'cse 3103', 10105, 88, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse 3107', 10103, 75, 'a', 2016, 'fall', 'no'),
('14.02.04.048', 'cse 3107', 10103, 80, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse 3109', 10104, 75, 'a', 2016, 'fall', 'no'),
('14.02.04.048', 'cse 3109', 10104, 100, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'hum 3115', 10102, 65, 'b+', 2016, 'fall', 'no'),
('14.02.04.048', 'hum 3115', 10102, 88, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse3100', 10107, 65, 'b+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse3104', 10106, 64, 'b', 2016, 'fall', 'no'),
('14.02.04.034', 'cse3108', 10103, 55, 'b-', 2016, 'fall', 'no'),
('14.02.04.034', 'cse3110', 10104, 54, 'c+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3100', 10107, 90, 'a+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3104', 10106, 95, 'a+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3108', 10103, 86, 'a+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3110', 10104, 98, 'a+', 2016, 'fall', 'no'),
('14.02.04.029', 'cse3101', 10101, 66, 'b+', 2016, '2016', 'no'),
('14.02.04.032', 'cse3101', 10101, 85, 'a+', 2016, 'fall', 'yes'),
('14.02.04.039', 'cse3101', 10101, 100, 'a+', 2016, 'fall', 'yes'),
('14.02.04.041', 'cse3101', 10101, 81, 'a+', 2016, 'fall', 'yes'),
('14.02.04.042', 'cse3101', 10101, 83, 'a+', 2016, 'fall', 'yes'),
('14.02.04.049', 'cse3101', 10101, 80, 'a+', 2016, 'fall', 'yes'),
('14.02.04.034', 'cse3101', 10101, 72, 'a-', 2016, 'fall', 'yes'),
('14.02.04.048', 'cse3101', 10101, 98, 'a+', 2016, 'fall', 'yes'),
('14.02.04.048', 'cse3103', 10105, 87, 'a+', 2016, 'fall', 'yes'),
('14.02.04.034', 'cse3103', 10105, 86, 'a+', 2016, 'fall', 'yes'),
('14.02.04.034', 'cse3107', 10103, 67, 'b+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3107', 10103, 95, 'a+', 2016, 'fall', 'no'),
('14.02.04.048', 'cse3109', 10104, 95, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'hum3115', 10102, 45, 'c-', 2016, 'fall', 'no'),
('14.02.04.048', 'hum3115', 10102, 80, 'a+', 2016, 'fall', 'no'),
('14.02.04.034', 'cse3109', 10104, 63, 'b', 2016, 'fall', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `sta`
--

CREATE TABLE `sta` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sta`
--

INSERT INTO `sta` (`id`, `username`, `email`, `password`, `type`) VALUES
(1, 'asif', 'asif@gmail.com', '123456', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `year` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `dep_id` int(10) NOT NULL,
  `temp_roll` int(10) NOT NULL,
  `stu_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `total_credit` float NOT NULL,
  `comleted_credit` float NOT NULL,
  `cgpa` float NOT NULL,
  `sec` varchar(100) NOT NULL,
  `sub_sec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`year`, `semester`, `dep_id`, `temp_roll`, `stu_id`, `name`, `email`, `password`, `total_credit`, `comleted_credit`, `cgpa`, `sec`, `sub_sec`) VALUES
(14, 2, 4, 29, '14.02.04.029', 'sihab', 'sihab@gmail.com', '123456', 160.5, 65.75, 3.53, 'a', 'a2'),
(14, 2, 4, 31, '14.02.04.031', 'tanjila', 'tanjila@gmail.com', '123456', 160.5, 65.75, 3.06, 'a', 'a2'),
(14, 2, 4, 32, '14.02.04.032', 'nafiz', 'nafiz@gmail.com', '123456', 160.5, 65.75, 3.07, 'a', 'a2'),
(14, 2, 4, 34, '14.02.04.034', 'asif', 'asifisthiaq@gmail.com', '123456', 160.25, 65.75, 0, 'a', 'a2'),
(14, 2, 4, 39, '14.02.04.039', 'ishti', 'ishti@gmail.com', '123456', 160.5, 65.75, 3.5, 'a', 'a2'),
(0, 0, 4, 0, '14.02.04.041', 'abrar', 'abrar@gmail.com', '123456', 0, 0, 0, '', ''),
(0, 0, 4, 0, '14.02.04.042', 'saiful', 'saiful@gmail.com', '123456', 0, 0, 0, '', ''),
(14, 2, 4, 48, '14.02.04.048', 'anik', 'anik@gmail.com', '123456', 160.25, 65.75, 4, 'a', 'a2'),
(0, 0, 4, 0, '14.02.04.049', 'inzamam', 'inzamam@gmail.com', '123456', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl2`
--

CREATE TABLE `student_tbl2` (
  `stu_id` varchar(100) NOT NULL,
  `dep_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl2`
--

INSERT INTO `student_tbl2` (`stu_id`, `dep_id`) VALUES
('14.02.04.035', 4),
('14.02.04.034', 4),
('14.02.04.034', 4);

-- --------------------------------------------------------

--
-- Table structure for table `takes_tbl`
--

CREATE TABLE `takes_tbl` (
  `course_id` varchar(100) NOT NULL,
  `tec_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `takes_tbl`
--

INSERT INTO `takes_tbl` (`course_id`, `tec_id`) VALUES
('cse 3101', 10101),
('cse 3103', 10105),
('cse 2101', 10101),
('cse1001', 10101),
('cse 3109', 10104),
('cse3100', 10107),
('cse3104', 10106),
('cse3108', 10103),
('cse3110', 10104),
('cse3101', 10101),
('cse3103', 10105),
('cse2101', 10101),
('cse1001', 10101),
('cse3109', 10104);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `tec_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salary` int(10) NOT NULL,
  `dep_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`tec_id`, `name`, `email`, `password`, `salary`, `dep_id`) VALUES
(10101, 'Saiful Islam Suvo', 'suvo@gmail.com', '1234567', 55000, 4),
(10102, 'acsir', 'acsir@gmail.com', '1234567', 30000, 4),
(10103, 'Sujon Sarkar', 'sujon@gmail.com', '1234567', 60000, 4),
(10104, 'Anisur Rahman', 'anisur@gmail.com', '1234567', 50000, 4),
(10105, 'Najmus Sakib', 'dma@gmail.com', '1234567', 50000, 4),
(10106, 'Robin Hood', 'robin@gmail.com', '1234567', 30000, 4),
(10107, 'Nadia Binte Asif', 'nadia@gmail.com', '1234567', 50000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'asif', 'asifisthiaq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'isthiaq', 'isthiaq@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'anik', 'anik@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'ronaldo', 'ronaldo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'jarif', 'jarif@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'tahsin', 'tahsin@gmail.com', '123456'),
(9, 'cristiano', 'cristiano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_tbl2`
--
ALTER TABLE `course_tbl2`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `dep_tbl`
--
ALTER TABLE `dep_tbl`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `sta`
--
ALTER TABLE `sta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `dep_id` (`dep_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`tec_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sta`
--
ALTER TABLE `sta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD CONSTRAINT `student_tbl_ibfk_1` FOREIGN KEY (`dep_id`) REFERENCES `dep_tbl` (`dep_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
