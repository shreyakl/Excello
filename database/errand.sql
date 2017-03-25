-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 05:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `action` varchar(256) NOT NULL,
  `team` varchar(256) NOT NULL,
  `done` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`action`, `team`, `done`) VALUES
('scouting', 'edappally', b'0'),
('scouting', 'edappally', b'0'),
('scouting', 'kalamassery', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `team` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `team`) VALUES
(1, 'ashik', '1234', 'initiatives'),
(2, 'dilawz', '123456', 'initiatives'),
(3, 'shajna', '2356', 'initiatives'),
(4, 'nina', '4567', 'marketing'),
(5, 'amel', 'wertyuop[', 'marketing'),
(6, 'ashma', 'zxcvbnm', 'marketing');

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
