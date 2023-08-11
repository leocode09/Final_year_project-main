-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oicas`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `rollnumber` int(20) NOT NULL,
  `request` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`rollnumber`, `request`) VALUES
(4, 'DOCUMENTS'),
(10, 'diplome'),
(1212, 'DIPLOME'),
(201920046, 'TRANSIPT');

-- --------------------------------------------------------

--
-- Table structure for table `requested_docs`
--

CREATE TABLE `requested_docs` (
  `id` int(20) NOT NULL,
  `rollnumber` int(20) NOT NULL,
  `requested` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requested_docs`
--

INSERT INTO `requested_docs` (`id`, `rollnumber`, `requested`) VALUES
(1, 4, 'DOCUMENTS'),
(2, 10, 'diplome'),
(3, 201920046, 'TRANSIPT'),
(4, 1212, 'DIPLOME');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollnumber` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollnumber`, `fname`, `lname`, `password`, `email`, `phone`) VALUES
(1, 'd', 'd', '1', '', ''),
(2, 'w', 'w', '2', '', ''),
(3, 'w', 'w', '3', '', ''),
(4, 'deborah', 'w', '4', '', ''),
(10, '10', '10', '10', '', ''),
(122, 'weeeww', 'keke', '123', 'keke@gmail.com', '0780344858'),
(1212, 'UWERA', 'MAMY', '1212', 'bahatizirimwabagabo@gmail.com', '0788474692'),
(20222, 'deborah', 'hhhhhh', '111', '', ''),
(2222222, 'deborah', 'Muhawenimana', 'Divin123', '', ''),
(201920046, 'MUHIRE', 'PASCAL', '12345', 'bepayrubavu@besoft.info', '0787959242'),
(201920311, 'Bahati', 'ZIR', '123', 'bahatizirimwabagabo@gmail.com', '0787959242'),
(202320001, 'deborah', 'Muhawenimana', '123', '', ''),
(202320002, 'Divin', 'Uwase', '123', '', ''),
(202320005, 'LEO', 'bernard', 'bernard123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student-reg_file`
--

CREATE TABLE `student-reg_file` (
  `rollnumber` int(20) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student-reg_file`
--

INSERT INTO `student-reg_file` (`rollnumber`, `problem`) VALUES
(1, 'ddd'),
(2, 'ss'),
(3, 'dfgf'),
(202320001, 'd'),
(202320002, '\r\n Name Problem');

-- --------------------------------------------------------

--
-- Table structure for table `student_fin_problem`
--

CREATE TABLE `student_fin_problem` (
  `rollnumber` int(20) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fin_problem`
--

INSERT INTO `student_fin_problem` (`rollnumber`, `problem`) VALUES
(1, 'dssdf'),
(2, 'retar'),
(3, 'dsg'),
(20222, 'gyuhh'),
(2222222, '\r\nRemain with 20000 rwf to pay'),
(201920046, 'insurance');

-- --------------------------------------------------------

--
-- Table structure for table `student_lib_problem`
--

CREATE TABLE `student_lib_problem` (
  `rollnumber` int(20) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_lib_problem`
--

INSERT INTO `student_lib_problem` (`rollnumber`, `problem`) VALUES
(1, 'asf'),
(2, 'cccccccccc'),
(20222, '222'),
(202320001, 'f'),
(202320002, 'Return the book'),
(202320005, 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks_problem`
--

CREATE TABLE `student_marks_problem` (
  `rollnumber` int(20) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_marks_problem`
--

INSERT INTO `student_marks_problem` (`rollnumber`, `problem`) VALUES
(1, 'sdd'),
(2, 'essr'),
(202320001, '\r\n\r\n  MISSED MARKS IN RESEARCH'),
(202320005, 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `student_sec_approv`
--

CREATE TABLE `student_sec_approv` (
  `rollnumber` int(20) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_sec_approv`
--

INSERT INTO `student_sec_approv` (`rollnumber`, `status`) VALUES
(4, 'PENDING'),
(10, 'APPROVED'),
(1212, 'PENDING'),
(201920046, 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`) VALUES
(2, 'Finance', 'Divin', 'Divin123'),
(6, 'Secretary', 'Deborah', 'Deborah123'),
(8, 'Marks', 'owner', '123'),
(9, 'Library', 'Library', '123'),
(10, 'Registration', 'Registration', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `requested_docs`
--
ALTER TABLE `requested_docs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student-reg_file`
--
ALTER TABLE `student-reg_file`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_fin_problem`
--
ALTER TABLE `student_fin_problem`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_lib_problem`
--
ALTER TABLE `student_lib_problem`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_marks_problem`
--
ALTER TABLE `student_marks_problem`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `student_sec_approv`
--
ALTER TABLE `student_sec_approv`
  ADD PRIMARY KEY (`rollnumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requested_docs`
--
ALTER TABLE `requested_docs`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `req` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student-reg_file`
--
ALTER TABLE `student-reg_file`
  ADD CONSTRAINT `reg` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_fin_problem`
--
ALTER TABLE `student_fin_problem`
  ADD CONSTRAINT `fin` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_lib_problem`
--
ALTER TABLE `student_lib_problem`
  ADD CONSTRAINT `lib` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_marks_problem`
--
ALTER TABLE `student_marks_problem`
  ADD CONSTRAINT `marks` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_sec_approv`
--
ALTER TABLE `student_sec_approv`
  ADD CONSTRAINT `sec` FOREIGN KEY (`rollnumber`) REFERENCES `student` (`rollnumber`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
