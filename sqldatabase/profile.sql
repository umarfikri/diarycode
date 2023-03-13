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
('nickumar', '123456', 'dfsfdsf', 'Nick test', '2003-02-14', 'adafdsf fgawefdvad esafdfasd gfasefadfsdgteh atef', 'Test new motto', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('react123', '123456', 'Test name', 'Nickname', '2023-02-18', 'dasdagfdsa rdfadf efadfdafe', 'dwead', 'Facebook link.com.my', 'Twitter link.com', 'Insta link.com'),
('test78123', '123456', 'Test name', 'Nickname', '2023-02-18', 'dasdagfdsa rdfadf efadfdafe', 'dwead', 'Facebook link.com.my', 'Twitter link.com', 'Insta link.com'),
('testname', '123456', 'hsdasdasd', 'hjhgfjfghj', '2023-02-01', 'Et sapiente voluptatem est officiis unde et magnam ipsam sed voluptas repellat et voluptas cupiditate. Aut deleniti rerum aut fugit veritatis rem deleniti eligendi. Id exercitationem nobis ut molestiae incidunt qui molestiae distinctio et optio nemo ut galisum molestias At voluptatem quia qui minima modi.', 'Live a new Life', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('username123', '123456', 'Test fullname', 'Nickname', '2023-02-05', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 'Test new motto', 'Facebook link.com.my', 'https://twitter.com/Auri_UmarFikri', 'Insta link.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
