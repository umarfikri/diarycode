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
(14, 'uploads/test78123/gallery/', 'dangerous_zombie_by_ashmish-daur5ko.jpg', 'drawing_face_shape_spot_83476_1600x1200.jpg', 'close-up-concrete-green-212937.jpg', 'test78123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
