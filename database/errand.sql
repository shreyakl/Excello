-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 06:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `errand`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Visited` varchar(100) NOT NULL,
  `Status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `Name`, `Region`, `Address`, `Email`, `Visited`, `Status`) VALUES
(1, 'V. J. Exim Consolidated', 'Edappally', 'Rainbow Building, Nh Byepass, Edapally, Near Mahila Sihva Temple,, Kochi - 682024, Kerala, India', '', '', 0),
(2, 'Farmer Mulackel Inc.', 'Edappally', '48-733a, Nethaji Road, Edapally P.o.,, Kochi - 682024, Kerala, India', '', '', 0),
(3, 'model eng clg', 'edappally', 'thrikkakara,123456778', '', '', 0),
(4, 'lulu mall', 'edappally', 'edapally toll,653521', '', '', 0),
(5, 'wipro', 'ernakulam', 'asdfgghjkiy', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `id` int(100) NOT NULL,
  `idea` varchar(256) NOT NULL,
  `vote` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `idea`, `vote`) VALUES
(4, 'asdfghjkl', 0),
(5, 'wertyiuop[', 0),
(6, 'zxcvbn,m./', 0);

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE `institute` (
  `id` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Visited` bit(1) DEFAULT b'0',
  `Status` varchar(100) DEFAULT NULL,
  `Event` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`id`, `Name`, `Region`, `Address`, `Email`, `Visited`, `Status`, `Event`) VALUES
(0, 'ghjk', 'werty', '34567', '', b'1', '0', ''),
(10, 'mec', 'thrikkakara', 'ernakulam', 'shajnam.mec@gmail.com', b'1', '0', ''),
(11, 'wertyu', 'defrgtyhujik', '3456789', 'dilawzkk.mec@gmail.com', b'1', '0', ''),
(12, 'wertyu', 'defrgtyhujik', '3456789', 'dilawzkk.mec@gmail.com', b'1', '0', ''),
(13, 'dfghjkl', 'dfghjkl', '12345678', 'sads@gmail.com', b'1', '0', ''),
(14, 'cet', 'tvm', '123456789', 'shajnam.mec@gmail.com', b'1', '0', 'ibeto'),
(23, 'asdcxz', 'asdfgh', 'sdfghjk', 'shajnam.mec@gmail.com', b'1', 'interested', 'ibeto'),
(33, 'asdcxz', 'asdfgh', 'sdfghjk', 'shajnam.mec@gmail.com', b'1', 'interested', 'ibeto');

-- --------------------------------------------------------

--
-- Table structure for table `ptask`
--

CREATE TABLE `ptask` (
  `action` varchar(256) NOT NULL,
  `team` varchar(256) NOT NULL,
  `done` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptask`
--

INSERT INTO `ptask` (`action`, `team`, `done`) VALUES
('visit NIT', 'calicut', b'0'),
('visit abc', 'ernakulam', b'0'),
('visit wer', 'ekm', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(200) NOT NULL,
  `action` varchar(256) NOT NULL,
  `region` varchar(256) NOT NULL,
  `done` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `team` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `Area` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `team`, `type`, `Area`) VALUES
(1, 'ashik', '1234', 'initiatives', '', NULL),
(2, 'dilawz', '123456', 'initiatives', '', NULL),
(3, 'shajna', '2356', 'initiatives', '', NULL),
(4, 'nina', '4567', 'marketing', '', NULL),
(5, 'amel', 'wertyuop[', 'marketing', '', NULL),
(6, 'ashma', 'zxcvbnm', 'marketing', '', NULL),
(7, 'shajna', '12345', 'marketing', '', NULL),
(12, 'fida', '4321', 'publicity', '', NULL),
(20, 'fida', '4321', 'publicity', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `idea` int(100) NOT NULL,
  `user` int(100) NOT NULL,
  `likes` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`idea`, `user`, `likes`) VALUES
(4, 1, b'1'),
(5, 1, b'1'),
(4, 2, b'1'),
(0, 2, b'1'),
(0, 2, b'1'),
(4, 3, b'1'),
(0, 3, b'1'),
(0, 3, b'1'),
(5, 3, b'1'),
(0, 3, b'1'),
(0, 3, b'1'),
(0, 3, b'1'),
(0, 3, b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institute`
--
ALTER TABLE `institute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `institute`
--
ALTER TABLE `institute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
