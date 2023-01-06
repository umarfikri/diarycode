-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 09:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entryid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `mood` int(2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `img_title` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryid`, `title`, `content`, `mood`, `img`, `img_title`, `date_created`) VALUES
(1, 'sdasd', '<p>sdad</p>\r\n', 3, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(2, 'sdasds', '<p>sdasd</p>\r\n', 3, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(3, 'test real', '<p>sdasdadsads sadsakdjaskdjaskld sadnaskjdnaksndkasd sdnaklsduasdsidkjasdhkjasdh</p>\r\n', 2, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(4, 'sdasd', '<p>sdasd</p>\r\n', 0, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(5, 'dfsfafsadfd', '<p>asfsafsafsafsa</p>\r\n', 4, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(6, 'ghjfdfgsegrsd', '<p>dfdghgjhfdgf</p>\r\n', 6, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(7, 'Test 123', '<p>Reason for test to check for date and time. Supposed to be 8 34</p>\r\n', 5, 'testimg', 'test attendance', '2023-01-06 08:34:12'),
(8, 'dsdsd', '<p>sdsdsdsdsds</p>\r\n', 1, 'testimg', 'test attendance', '2023-01-06 15:52:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
