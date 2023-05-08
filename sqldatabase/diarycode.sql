-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:27 AM
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
-- Table structure for table `datesebulan`
--

CREATE TABLE `datesebulan` (
  `id` int(255) NOT NULL,
  `tarikhsebulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datesebulan`
--

INSERT INTO `datesebulan` (`id`, `tarikhsebulan`) VALUES
(1, '2023-01-01'),
(2, '2023-01-02'),
(3, '2023-01-03'),
(4, '2023-01-04'),
(5, '2023-01-05'),
(6, '2023-01-06'),
(7, '2023-01-07'),
(8, '2023-01-08'),
(9, '2023-01-09'),
(10, '2023-01-10'),
(11, '2023-01-11'),
(12, '2023-01-12'),
(13, '2023-01-13'),
(14, '2023-01-14'),
(15, '2023-01-15'),
(16, '2023-01-16'),
(17, '2023-01-17'),
(18, '2023-01-18'),
(19, '2023-01-19'),
(20, '2023-01-20'),
(21, '2023-01-21'),
(22, '2023-01-22'),
(23, '2023-01-23'),
(24, '2023-01-24'),
(25, '2023-01-25'),
(26, '2023-01-26'),
(27, '2023-01-27'),
(28, '2023-01-28'),
(29, '2023-01-29'),
(30, '2023-01-30'),
(31, '2023-01-31'),
(32, '2023-04-01'),
(33, '2023-04-02'),
(34, '2023-04-03'),
(35, '2023-04-04'),
(36, '2023-04-05'),
(37, '2023-04-06'),
(38, '2023-04-07'),
(39, '2023-04-08'),
(40, '2023-04-09'),
(41, '2023-04-10'),
(42, '2023-04-11'),
(43, '2023-04-12'),
(44, '2023-04-13'),
(45, '2023-04-14'),
(46, '2023-04-15'),
(47, '2023-04-16'),
(48, '2023-04-17'),
(49, '2023-04-18'),
(50, '2023-04-19'),
(51, '2023-04-20'),
(52, '2023-04-21'),
(53, '2023-04-22'),
(54, '2023-04-23'),
(55, '2023-04-24'),
(56, '2023-04-25'),
(57, '2023-04-26'),
(58, '2023-04-27'),
(59, '2023-04-28'),
(60, '2023-04-29'),
(61, '2023-04-30'),
(62, '2023-05-01'),
(63, '2023-05-02'),
(64, '2023-05-03'),
(65, '2023-05-04'),
(66, '2023-05-05'),
(67, '2023-05-06'),
(68, '2023-05-07'),
(69, '2023-05-08'),
(70, '2023-05-09'),
(71, '2023-05-10'),
(72, '2023-05-11'),
(73, '2023-05-12'),
(74, '2023-05-13'),
(75, '2023-05-14'),
(76, '2023-05-15'),
(77, '2023-05-16'),
(78, '2023-05-17'),
(79, '2023-05-18'),
(80, '2023-05-19'),
(81, '2023-05-20'),
(82, '2023-05-21'),
(83, '2023-05-22'),
(84, '2023-05-23'),
(85, '2023-05-24'),
(86, '2023-05-25'),
(87, '2023-05-26'),
(88, '2023-05-27'),
(89, '2023-05-28'),
(90, '2023-05-29'),
(91, '2023-05-30'),
(92, '2023-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `date_data`
--

CREATE TABLE `date_data` (
  `id` int(255) NOT NULL,
  `daymonthyear` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_data`
--

INSERT INTO `date_data` (`id`, `daymonthyear`) VALUES
(1, '2023-05-01'),
(2, '2023-05-02'),
(3, '2023-05-03'),
(4, '2023-05-04'),
(5, '2023-05-05'),
(6, '2023-05-06'),
(7, '2023-05-07'),
(8, '2023-05-08'),
(9, '2023-05-09'),
(10, '2023-05-10'),
(11, '2023-05-11'),
(12, '2023-05-12'),
(13, '2023-05-13'),
(14, '2023-05-14'),
(15, '2023-05-15'),
(16, '2023-05-16'),
(17, '2023-05-17'),
(18, '2023-05-18'),
(19, '2023-05-19'),
(20, '2023-05-20'),
(21, '2023-05-21'),
(22, '2023-05-22'),
(23, '2023-05-23'),
(24, '2023-05-24'),
(25, '2023-05-25'),
(26, '2023-05-26'),
(27, '2023-05-27'),
(28, '2023-05-28'),
(29, '2023-05-29'),
(30, '2023-05-30'),
(31, '2023-05-31'),
(32, '2023-4-01'),
(33, '2023-4-02'),
(34, '2023-4-03'),
(35, '2023-4-04'),
(36, '2023-4-05'),
(37, '2023-4-06'),
(38, '2023-4-07'),
(39, '2023-4-08'),
(40, '2023-4-09'),
(41, '2023-4-10'),
(42, '2023-4-11'),
(43, '2023-4-12'),
(44, '2023-4-13'),
(45, '2023-4-14'),
(46, '2023-4-15'),
(47, '2023-4-16'),
(48, '2023-4-17'),
(49, '2023-4-18'),
(50, '2023-4-19'),
(51, '2023-4-20'),
(52, '2023-4-21'),
(53, '2023-4-22'),
(54, '2023-4-23'),
(55, '2023-4-24'),
(56, '2023-4-25'),
(57, '2023-4-26'),
(58, '2023-4-27'),
(59, '2023-4-28'),
(60, '2023-4-29'),
(61, '2023-4-30');

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
(11, 'adasdas', '<p>asdsadas</p>\r\n', 2, NULL, NULL, NULL, '2023-04-03', '11:51:32', 'nickumar'),
(12, 'sdasdasd', '<p>fdfasfasdf</p>\r\n', 4, NULL, NULL, NULL, '2023-03-03', '11:55:18', 'nickumar'),
(13, 'sfdcda', '<p>sdadsd</p>\r\n', 1, NULL, NULL, NULL, '2023-03-14', '13:16:16', 'nickumar'),
(14, 'dasdasdas', '<p>asdgfsgsdf</p>\r\n', 2, NULL, NULL, NULL, '2023-04-02', '08:52:42', 'hide123'),
(15, 'fdgsafgsfdgasf', '<p>gfhdfsgfgf</p>\r\n', 4, NULL, NULL, NULL, '2023-05-02', '10:52:57', 'hide123'),
(16, 'hjhnjkklj', '<p>hnjjhkljkljkljlk</p>\r\n', 1, NULL, NULL, NULL, '2023-04-26', '22:27:21', 'hide123'),
(17, 'dasdasd', '<p>dfSDSAFDGSDFfsdf</p>\r\n', 2, NULL, NULL, NULL, '2023-05-07', '11:09:12', 'hide123'),
(18, 'dasdasdsa', '<p>sadasdasdwad</p>\r\n', 2, NULL, NULL, NULL, '2023-05-07', '21:11:31', 'hide123');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `galleryid` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `profile_img` longtext DEFAULT NULL,
  `home_img` longtext DEFAULT NULL,
  `other_img` longtext DEFAULT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `path`, `profile_img`, `home_img`, `other_img`, `username`) VALUES
(9, 'uploads/username123/gallery/', 'avatar20180120155712.jpg', 'drawing_colorful_circles_bright_259_1440x900.jpg', 'hardwood-leaves-lumber-139312.jpg', 'username123'),
(10, 'uploads/testname/gallery/', '1ba04d3aff8b40a3d6d5f81c1975d55c.jpg', 'hardwood-leaves-lumber-139312.jpg', 'P77JMwO.jpg', 'testname'),
(12, 'uploads/nickumar/gallery/', '_161002su__ex_aid_b_by_shadowoverlordxdz-dakhz22.png', 'Amazing-Star-Wallpaper-HD.jpg', 'drawing_colorful_circles_bright_259_1440x900.jpg', 'nickumar'),
(13, 'uploads/react123/gallery/', 'dangerous_zombie_by_ashmish-daur5ko.jpg', 'drawing_face_shape_spot_83476_1600x1200.jpg', 'close-up-concrete-green-212937.jpg', 'react123'),
(14, 'uploads/test78123/gallery/', 'dangerous_zombie_by_ashmish-daur5ko.jpg', 'drawing_face_shape_spot_83476_1600x1200.jpg', 'close-up-concrete-green-212937.jpg', 'test78123'),
(15, 'uploads/umar123/gallery/', 'drawing_colorful_circles_bright_259_1440x900.jpg', 'close-up-concrete-green-212937.jpg', 'Amazing-Star-Wallpaper-HD.jpg', 'umar123'),
(16, 'uploads/hide123/gallery/', NULL, NULL, NULL, 'hide123');

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
(3, 1, 175, 65, 55, 'test78123'),
(4, 0, 125, 45, 55, 'umar123'),
(5, 0, 175, 49, 56, 'hide123');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `description` longtext NOT NULL,
  `motto` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`username`, `password`, `fullname`, `nickname`, `birthday`, `description`, `motto`, `facebook`, `twitter`, `insta`) VALUES
('', '123456', 'Test fullname', 'Nickname', '2023-02-05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Test new motto', 'Facebook link.com.my', 'https://twitter.com/Auri_UmarFikri', 'Insta link.com'),
('hide123', 'd77e9e4c14da6475f29df6db78fb7b2adc6844b5ebbb6a9f87557cd57775a64385627abae52cee90b7e769d2d9bac2f8fce72d9205c156c9761ad7c20aac6455CYI+Pw2MljkWfX3Iwf3lMACfsPW0ysG+92wMcwL0wyI=', 'gfssdfdf', 'afdfasd', '2023-03-09', 'dgsfgdsfasdfd', 'Live a new Life', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('nickumar', '123456', 'dfsfdsf', 'Nick test', '2003-02-14', 'adafdsf fgawefdvad esafdfasd gfasefadfsdgteh atef', 'Test new motto', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('react123', '123456', 'Test name', 'Nickname', '2023-02-18', 'dasdagfdsa rdfadf efadfdafe', 'dwead', 'Facebook link.com.my', 'Twitter link.com', 'Insta link.com'),
('test78123', '123456', 'Test name', 'Nickname', '2023-02-18', 'dasdagfdsa rdfadf efadfdafe', 'dwead', 'Facebook link.com.my', 'Twitter link.com', 'Insta link.com'),
('testname', '123456', 'hsdasdasd', 'hjhgfjfghj', '2023-02-01', 'Et sapiente voluptatem est officiis unde et magnam ipsam sed voluptas repellat et voluptas cupiditate. Aut deleniti rerum aut fugit veritatis rem deleniti eligendi. Id exercitationem nobis ut molestiae incidunt qui molestiae distinctio et optio nemo ut galisum molestias At voluptatem quia qui minima modi.', 'Live a new Life', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('umar123', '8a32a3b77a67451587edd6fc21bde387a17def4640a42b1ad5f312838403d3caefc23426a4e795d4892551ed1683c1becdbf0dff36fa74e094eba3ade449652bqAsXZ4CLMRqqK0hgA6NqYwZl6sg7ZkEJjwFwoGw1+i4=', 'asdsada', 'sadasda', '2023-03-13', 'adsdad', 'sdasdsada', 'gfsfdda', 'adasda', 'adfads'),
('username123', '123456', 'Test fullname', 'Nickname', '2023-02-05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Test new motto', 'Facebook link.com.my', 'https://twitter.com/Auri_UmarFikri', 'Insta link.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datesebulan`
--
ALTER TABLE `datesebulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `date_data`
--
ALTER TABLE `date_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entryid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`healthid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datesebulan`
--
ALTER TABLE `datesebulan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `date_data`
--
ALTER TABLE `date_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `healthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
