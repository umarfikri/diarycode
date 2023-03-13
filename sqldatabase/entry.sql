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
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryid`, `title`, `content`, `mood`, `alt_img`, `img_url`, `image`, `date`, `time`, `username`) VALUES
(1, 'Test 1', '<p>sdasdasdasd</p>\r\n', 1, 'Hello world', 'uploads/img/', '11130a-hello-world-hd-image.jpg', '2023-01-20', '21:16:20', ''),
(2, 'dsdad', '<p>sdasdasd</p>\r\n', 2, NULL, NULL, NULL, '2023-01-21', '21:18:44', ''),
(3, 'asda', '<p>dasdas</p>\r\n', 3, 'dasdadas', 'uploads/img/', '20211201193103.png', '2023-02-17', '08:20:23', ''),
(4, 'fgdgfd', '<p>gdfgfg</p>\r\n', 4, NULL, NULL, NULL, '2023-02-17', '12:10:52', ''),
(5, 'asdasd', '<p>sdasdsa</p>\r\n', 2, NULL, NULL, NULL, '2023-02-19', '21:20:01', ''),
(6, 'gfgfgfsg', '<p>sdasdsa</p>\r\n', 3, NULL, NULL, NULL, '2023-02-19', '21:21:28', ''),
(7, 'jgdfgsf', '<p>hdfgsgsd</p>\r\n', 4, NULL, NULL, NULL, '2023-02-19', '21:24:36', 'username123'),
(8, 'fgdfgadsfdfdsa', '<p>gjkgfhsfgsdf</p>\r\n', 2, NULL, NULL, NULL, '2023-02-19', '21:41:35', 'testname'),
(9, 'sfdsfsd', '<p>gfsgfsdgsdf</p>\r\n', 6, 'ghafgfga', 'uploads/testname/img/', 'flat,800x800,075,f-c,0,75,800,331_u2.jpg', '2023-02-19', '21:46:11', 'testname'),
(10, 'sdasfdaf', '<p>fsdfwadaefead</p>\r\n', 2, 'fsdfadf', 'uploads/username123/entry/', 'drawing_face_shape_spot_83476_1600x1200.jpg', '2023-02-22', '08:29:36', 'username123'),
(11, 'adasdas', '<p>asdsadas</p>\r\n', 2, NULL, NULL, NULL, '2023-03-03', '11:51:32', 'nickumar'),
(12, 'sdasdasd', '<p>fdfasfasdf</p>\r\n', 4, NULL, NULL, NULL, '2023-03-03', '11:55:18', 'nickumar');

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
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
