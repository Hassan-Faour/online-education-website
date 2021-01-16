-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 11:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lbedugatedtd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likesyst`
--

CREATE TABLE `likesyst` (
  `idlike` int(11) NOT NULL,
  `idt` int(11) NOT NULL DEFAULT 0,
  `stid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likesyst`
--

INSERT INTO `likesyst` (`idlike`, `idt`, `stid`) VALUES
(43, 34, 29);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `idr` int(11) NOT NULL,
  `recat` varchar(25) NOT NULL,
  `redes` varchar(300) NOT NULL,
  `ids` int(11) NOT NULL,
  `idt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stid` int(11) NOT NULL,
  `firstn` varchar(15) NOT NULL,
  `lastn` varchar(15) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dobn` varchar(10) NOT NULL,
  `addn` varchar(25) NOT NULL,
  `emailn` varchar(25) NOT NULL,
  `domainn` varchar(20) NOT NULL,
  `classn` varchar(20) NOT NULL,
  `coursn` varchar(100) NOT NULL,
  `phonen` int(9) NOT NULL,
  `logo` varchar(100) NOT NULL DEFAULT 'images/v.gif',
  `status` varchar(10) NOT NULL DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stid`, `firstn`, `lastn`, `user`, `pass`, `dobn`, `addn`, `emailn`, `domainn`, `classn`, `coursn`, `phonen`, `logo`, `status`) VALUES
(29, 'hassan', 'faour', 'hassan22', 'Hello2', '1998-06-25', 'jbaa/seha', 'faourhmh7@gmail.com', ' academic', ' Y3', 'marketing', 48451859, 'upload/20170416_135346.jpg', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `stid` int(20) NOT NULL,
  `firstn` varchar(20) NOT NULL,
  `lastn` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dobn` varchar(15) NOT NULL,
  `addn` varchar(20) NOT NULL,
  `phonen` int(9) NOT NULL,
  `emailn` varchar(20) NOT NULL,
  `classn` varchar(25) NOT NULL,
  `domainn` varchar(25) NOT NULL,
  `coursn` varchar(40) NOT NULL,
  `liken` int(11) NOT NULL DEFAULT 0,
  `logo` varchar(100) NOT NULL DEFAULT 'images/tt.gif',
  `status` varchar(10) NOT NULL DEFAULT 'teacher'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`stid`, `firstn`, `lastn`, `user`, `pass`, `dobn`, `addn`, `phonen`, `emailn`, `classn`, `domainn`, `coursn`, `liken`, `logo`, `status`) VALUES
(33, 'hassan', 'faour', 'zahi22', 'Hello2', '1993-06-18', 'faourhmh7@gmail.com', 48451859, 'faourhmh7@gmail.com', ' Y1', ' academic', 'sg', 0, 'images/tt.gif', 'teacher'),
(34, 'wissam', 'dhayni', 'wissam22', 'Hello2', '1981-02-18', 'jbaa/seha', 48451859, 'faourhmh7@gmail.com', ' LT', ' technical', 'Computer sience IT', 0, 'images/tt.gif', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teacherfile`
--

CREATE TABLE `teacherfile` (
  `idf` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL,
  `filedesc` varchar(200) NOT NULL,
  `fileclass` varchar(100) NOT NULL,
  `idt` int(11) NOT NULL,
  `tusname` varchar(30) NOT NULL DEFAULT 'UKNOWN'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacherfile`
--

INSERT INTO `teacherfile` (`idf`, `fname`, `ftype`, `filedesc`, `fileclass`, `idt`, `tusname`) VALUES
(99, 'upload/mpc-hc64.exe', 'exe', 'hello', 'ts2', 33, 'zahi22'),
(100, 'upload/Changelog.txt', 'txt', 'biology', 'class2', 34, 'wissam22'),
(101, 'upload/', '', '', '', 34, 'wissam22'),
(102, 'upload/', '', '', '', 34, 'wissam22'),
(103, 'upload/20170202_133657.jpg', 'jpg', '1', '1', 34, 'wissam22'),
(104, 'upload/', '', '', '', 34, 'wissam22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likesyst`
--
ALTER TABLE `likesyst`
  ADD PRIMARY KEY (`idlike`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idr`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`stid`),
  ADD KEY `drp` (`stid`);

--
-- Indexes for table `teacherfile`
--
ALTER TABLE `teacherfile`
  ADD PRIMARY KEY (`idf`),
  ADD KEY `idt` (`idt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likesyst`
--
ALTER TABLE `likesyst`
  MODIFY `idlike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `stid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teacherfile`
--
ALTER TABLE `teacherfile`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `teacherfile`
--
ALTER TABLE `teacherfile`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idt`) REFERENCES `teacher` (`stid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
