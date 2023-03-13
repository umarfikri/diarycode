-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 12:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diarycode`
--

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `healthid` int(11) NOT NULL,
  `gender` int(2) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `aimweight` int(11) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`healthid`, `gender`, `height`, `weight`, `aimweight`, `username`) VALUES
(1, 1, 172, 45, 60, 'nickumar'),
(2, 0, 175, 65, 55, 'react123'),
(3, 1, 175, 65, 55, 'test78123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`healthid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `healthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
