-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 08:39 PM
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
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entryid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` mediumtext NOT NULL,
  `mood` int(2) NOT NULL,
  `alt_img` varchar(255) DEFAULT NULL,
  `img_url` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryid`, `title`, `content`, `mood`, `alt_img`, `img_url`, `image`, `date_created`) VALUES
(1, 'sdasd', '<p>sdad</p>\r\n', 3, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(2, 'sdasds', '<p>sdasd</p>\r\n', 3, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(3, 'test real', '<p>sdasdadsads sadsakdjaskdjaskld sadnaskjdnaksndkasd sdnaklsduasdsidkjasdhkjasdh</p>\r\n', 2, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(4, 'sdasd', '<p>sdasd</p>\r\n', 0, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(5, 'dfsfafsadfd', '<p>asfsafsafsafsa</p>\r\n', 4, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(6, 'ghjfdfgsegrsd', '<p>dfdghgjhfdgf</p>\r\n', 6, NULL, 'testimg', 'test attendance', '2023-01-06 08:30:43'),
(7, 'Test 123', '<p>Reason for test to check for date and time. Supposed to be 8 34</p>\r\n', 5, NULL, 'testimg', 'test attendance', '2023-01-06 08:34:12'),
(8, 'dsdsd', '<p>sdsdsdsdsds</p>\r\n', 1, NULL, 'testimg', 'test attendance', '2023-01-06 15:52:57'),
(9, 'Test new', '<p>sdsdadsads</p>\r\n', 2, NULL, 'testimg', 'Sad Image', '2023-01-07 01:22:47'),
(10, 'asasasas', '<p>asasasasa</p>\r\n', 4, NULL, 'uploads/img/', 'Amber.png', '2023-01-07 02:13:46'),
(11, 'vbnghcv', '<p>asasasas</p>\r\n', 2, 'Yoimiya', 'uploads/img/', '', '2023-01-07 03:03:49'),
(12, 'vbnghcv', '<p>asasasas</p>\r\n', 2, 'Yoimiya', 'uploads/img/', '', '2023-01-07 03:13:09'),
(13, 'vbnghcv', '<p>asasasas</p>\r\n', 2, 'Yoimiya', 'uploads/img/', '', '2023-01-07 03:13:24'),
(14, 'khfjggh', '<p>asasasas</p>\r\n', 2, 'Yoimiya', 'uploads/img/', '', '2023-01-07 03:13:52'),
(15, 'Test New', '<p>sdasda</p>\r\n', 6, 'dsdadad', 'uploads/img/', '39_music1.png', '2023-01-07 03:29:26'),
(16, 'sdasda', '<p>sdasda</p>\r\n', 0, 'dadasdsa', 'uploads/img/', '1ba04d3aff8b40a3d6d5f81c1975d55c1.jpg', '2023-01-07 03:33:49');

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
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
