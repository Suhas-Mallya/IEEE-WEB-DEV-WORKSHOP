-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 06:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `usn` varchar(10) DEFAULT NULL,
  `syear` int(11) DEFAULT NULL,
  `eyear` int(11) DEFAULT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`usn`, `syear`, `eyear`, `cname`, `info`) VALUES
('4UB19CS053', 2019, 2023, 'University B.D.T. College of E', '8.93'),
('4UB19CS053', 2017, 2019, 'Sri Vyshnavi Chetana PU colleg', '92%'),
('4UB19CS053', 2023, 2025, '', 'sde-1 alexa');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `usn` varchar(10) DEFAULT NULL,
  `syear` int(11) DEFAULT NULL,
  `eyear` int(11) DEFAULT NULL,
  `comp_name` varchar(100) DEFAULT NULL,
  `info` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`usn`, `syear`, `eyear`, `comp_name`, `info`) VALUES
('4UB19CS053', 2023, 2025, '', 'sde-1 alexa'),
('4UB19CS053', 2023, 2025, 'amazon', 'sde-1 alexa');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `usn` varchar(10) DEFAULT NULL,
  `skname` varchar(20) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`usn`, `skname`, `percent`) VALUES
('4UB19CS053', 'HTML', 80),
('4UB19CS053', 'CSS', 60),
('4UB19CS053', 'JS', 55),
('4UB19CS053', 'PHP', 75),
('4UB19CS054', 'C++', 80),
('4UB19CS054', 'PYTHON', 70),
('4UB19CS054', 'JAVA', 90);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `pwd` varchar(10) DEFAULT NULL,
  `place` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `email`, `phno`, `pwd`, `place`) VALUES
('4UB19CS053', 'SUHAS MALLYA', 'suhasmallya18@gmail.com', '1234567890', '123', 'davangere'),
('4UB19CS054', 'xyz', 'xyz@gmail.com', '0987654321', '123', 'mumbai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
