-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 04:28 PM
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
  `daymonthyear` varchar(20) CHARACTER SET latin1 NOT NULL,
  `day` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_data`
--

INSERT INTO `date_data` (`id`, `daymonthyear`, `day`) VALUES
(1, '2023-01-01', '01'),
(2, '2023-01-02', '02'),
(3, '2023-01-03', '03'),
(4, '2023-01-04', '04'),
(5, '2023-01-05', '05'),
(6, '2023-01-06', '06'),
(7, '2023-01-07', '07'),
(8, '2023-01-08', '08'),
(9, '2023-01-09', '09'),
(10, '2023-01-10', '10'),
(11, '2023-01-11', '11'),
(12, '2023-01-12', '12'),
(13, '2023-01-13', '13'),
(14, '2023-01-14', '14'),
(15, '2023-01-15', '15'),
(16, '2023-01-16', '16'),
(17, '2023-01-17', '17'),
(18, '2023-01-18', '18'),
(19, '2023-01-19', '19'),
(20, '2023-01-20', '20'),
(21, '2023-01-21', '21'),
(22, '2023-01-22', '22'),
(23, '2023-01-23', '23'),
(24, '2023-01-24', '24'),
(25, '2023-01-25', '25'),
(26, '2023-01-26', '26'),
(27, '2023-01-27', '27'),
(28, '2023-01-28', '28'),
(29, '2023-01-29', '29'),
(30, '2023-01-30', '30'),
(31, '2023-01-31', '31'),
(32, '2023-02-01', '01'),
(33, '2023-02-02', '02'),
(34, '2023-02-03', '03'),
(35, '2023-02-04', '04'),
(36, '2023-02-05', '05'),
(37, '2023-02-06', '06'),
(38, '2023-02-07', '07'),
(39, '2023-02-08', '08'),
(40, '2023-02-09', '09'),
(41, '2023-02-10', '10'),
(42, '2023-02-11', '11'),
(43, '2023-02-12', '12'),
(44, '2023-02-13', '13'),
(45, '2023-02-14', '14'),
(46, '2023-02-15', '15'),
(47, '2023-02-16', '16'),
(48, '2023-02-17', '17'),
(49, '2023-02-18', '18'),
(50, '2023-02-19', '19'),
(51, '2023-02-20', '20'),
(52, '2023-02-21', '21'),
(53, '2023-02-22', '22'),
(54, '2023-02-23', '23'),
(55, '2023-02-24', '24'),
(56, '2023-02-25', '25'),
(57, '2023-02-26', '26'),
(58, '2023-02-27', '27'),
(59, '2023-02-28', '28'),
(60, '2023-03-01', '01'),
(61, '2023-03-02', '02'),
(62, '2023-03-03', '03'),
(63, '2023-03-04', '04'),
(64, '2023-03-05', '05'),
(65, '2023-03-06', '06'),
(66, '2023-03-07', '07'),
(67, '2023-03-08', '08'),
(68, '2023-03-09', '09'),
(69, '2023-03-10', '10'),
(70, '2023-03-11', '11'),
(71, '2023-03-12', '12'),
(72, '2023-03-13', '13'),
(73, '2023-03-14', '14'),
(74, '2023-03-15', '15'),
(75, '2023-03-16', '16'),
(76, '2023-03-17', '17'),
(77, '2023-03-18', '18'),
(78, '2023-03-19', '19'),
(79, '2023-03-20', '20'),
(80, '2023-03-21', '21'),
(81, '2023-03-22', '22'),
(82, '2023-03-23', '23'),
(83, '2023-03-24', '24'),
(84, '2023-03-25', '25'),
(85, '2023-03-26', '26'),
(86, '2023-03-27', '27'),
(87, '2023-03-28', '28'),
(88, '2023-03-29', '29'),
(89, '2023-03-30', '30'),
(90, '2023-03-31', '31'),
(91, '2023-04-01', '01'),
(92, '2023-04-02', '02'),
(93, '2023-04-03', '03'),
(94, '2023-04-04', '04'),
(95, '2023-04-05', '05'),
(96, '2023-04-06', '06'),
(97, '2023-04-07', '07'),
(98, '2023-04-08', '08'),
(99, '2023-04-09', '09'),
(100, '2023-04-10', '10'),
(101, '2023-04-11', '11'),
(102, '2023-04-12', '12'),
(103, '2023-04-13', '13'),
(104, '2023-04-14', '14'),
(105, '2023-04-15', '15'),
(106, '2023-04-16', '16'),
(107, '2023-04-17', '17'),
(108, '2023-04-18', '18'),
(109, '2023-04-19', '19'),
(110, '2023-04-20', '20'),
(111, '2023-04-21', '21'),
(112, '2023-04-22', '22'),
(113, '2023-04-23', '23'),
(114, '2023-04-24', '24'),
(115, '2023-04-25', '25'),
(116, '2023-04-26', '26'),
(117, '2023-04-27', '27'),
(118, '2023-04-28', '28'),
(119, '2023-04-29', '29'),
(120, '2023-04-30', '30'),
(121, '2023-05-01', '01'),
(122, '2023-05-02', '02'),
(123, '2023-05-03', '03'),
(124, '2023-05-04', '04'),
(125, '2023-05-05', '05'),
(126, '2023-05-06', '06'),
(127, '2023-05-07', '07'),
(128, '2023-05-08', '08'),
(129, '2023-05-09', '09'),
(130, '2023-05-10', '10'),
(131, '2023-05-11', '11'),
(132, '2023-05-12', '12'),
(133, '2023-05-13', '13'),
(134, '2023-05-14', '14'),
(135, '2023-05-15', '15'),
(136, '2023-05-16', '16'),
(137, '2023-05-17', '17'),
(138, '2023-05-18', '18'),
(139, '2023-05-19', '19'),
(140, '2023-05-20', '20'),
(141, '2023-05-21', '21'),
(142, '2023-05-22', '22'),
(143, '2023-05-23', '23'),
(144, '2023-05-24', '24'),
(145, '2023-05-25', '25'),
(146, '2023-05-26', '26'),
(147, '2023-05-27', '27'),
(148, '2023-05-28', '28'),
(149, '2023-05-29', '29'),
(150, '2023-05-30', '30'),
(151, '2023-05-31', '31'),
(152, '2023-06-01', '01'),
(153, '2023-06-02', '02'),
(154, '2023-06-03', '03'),
(155, '2023-06-04', '04'),
(156, '2023-06-05', '05'),
(157, '2023-06-06', '06'),
(158, '2023-06-07', '07'),
(159, '2023-06-08', '08'),
(160, '2023-06-09', '09'),
(161, '2023-06-10', '10'),
(162, '2023-06-11', '11'),
(163, '2023-06-12', '12'),
(164, '2023-06-13', '13'),
(165, '2023-06-14', '14'),
(166, '2023-06-15', '15'),
(167, '2023-06-16', '16'),
(168, '2023-06-17', '17'),
(169, '2023-06-18', '18'),
(170, '2023-06-19', '19'),
(171, '2023-06-20', '20'),
(172, '2023-06-21', '21'),
(173, '2023-06-22', '22'),
(174, '2023-06-23', '23'),
(175, '2023-06-24', '24'),
(176, '2023-06-25', '25'),
(177, '2023-06-26', '26'),
(178, '2023-06-27', '27'),
(179, '2023-06-28', '28'),
(180, '2023-06-29', '29'),
(181, '2023-06-30', '30'),
(182, '2023-07-01', '01'),
(183, '2023-07-02', '02'),
(184, '2023-07-03', '03'),
(185, '2023-07-04', '04'),
(186, '2023-07-05', '05'),
(187, '2023-07-06', '06'),
(188, '2023-07-07', '07'),
(189, '2023-07-08', '08'),
(190, '2023-07-09', '09'),
(191, '2023-07-10', '10'),
(192, '2023-07-11', '11'),
(193, '2023-07-12', '12'),
(194, '2023-07-13', '13'),
(195, '2023-07-14', '14'),
(196, '2023-07-15', '15'),
(197, '2023-07-16', '16'),
(198, '2023-07-17', '17'),
(199, '2023-07-18', '18'),
(200, '2023-07-19', '19'),
(201, '2023-07-20', '20'),
(202, '2023-07-21', '21'),
(203, '2023-07-22', '22'),
(204, '2023-07-23', '23'),
(205, '2023-07-24', '24'),
(206, '2023-07-25', '25'),
(207, '2023-07-26', '26'),
(208, '2023-07-27', '27'),
(209, '2023-07-28', '28'),
(210, '2023-07-29', '29'),
(211, '2023-07-30', '30'),
(212, '2023-07-31', '31'),
(213, '2023-08-01', '01'),
(214, '2023-08-02', '02'),
(215, '2023-08-03', '03'),
(216, '2023-08-04', '04'),
(217, '2023-08-05', '05'),
(218, '2023-08-06', '06'),
(219, '2023-08-07', '07'),
(220, '2023-08-08', '08'),
(221, '2023-08-09', '09'),
(222, '2023-08-10', '10'),
(223, '2023-08-11', '11'),
(224, '2023-08-12', '12'),
(225, '2023-08-13', '13'),
(226, '2023-08-14', '14'),
(227, '2023-08-15', '15'),
(228, '2023-08-16', '16'),
(229, '2023-08-17', '17'),
(230, '2023-08-18', '18'),
(231, '2023-08-19', '19'),
(232, '2023-08-20', '20'),
(233, '2023-08-21', '21'),
(234, '2023-08-22', '22'),
(235, '2023-08-23', '23'),
(236, '2023-08-24', '24'),
(237, '2023-08-25', '25'),
(238, '2023-08-26', '26'),
(239, '2023-08-27', '27'),
(240, '2023-08-28', '28'),
(241, '2023-08-29', '29'),
(242, '2023-08-30', '30'),
(243, '2023-08-31', '31'),
(244, '2023-09-01', '01'),
(245, '2023-09-02', '02'),
(246, '2023-09-03', '03'),
(247, '2023-09-04', '04'),
(248, '2023-09-05', '05'),
(249, '2023-09-06', '06'),
(250, '2023-09-07', '07'),
(251, '2023-09-08', '08'),
(252, '2023-09-09', '09'),
(253, '2023-09-10', '10'),
(254, '2023-09-11', '11'),
(255, '2023-09-12', '12'),
(256, '2023-09-13', '13'),
(257, '2023-09-14', '14'),
(258, '2023-09-15', '15'),
(259, '2023-09-16', '16'),
(260, '2023-09-17', '17'),
(261, '2023-09-18', '18'),
(262, '2023-09-19', '19'),
(263, '2023-09-20', '20'),
(264, '2023-09-21', '21'),
(265, '2023-09-22', '22'),
(266, '2023-09-23', '23'),
(267, '2023-09-24', '24'),
(268, '2023-09-25', '25'),
(269, '2023-09-26', '26'),
(270, '2023-09-27', '27'),
(271, '2023-09-28', '28'),
(272, '2023-09-29', '29'),
(273, '2023-09-30', '30'),
(274, '2023-10-01', '01'),
(275, '2023-10-02', '02'),
(276, '2023-10-03', '03'),
(277, '2023-10-04', '04'),
(278, '2023-10-05', '05'),
(279, '2023-10-06', '06'),
(280, '2023-10-07', '07'),
(281, '2023-10-08', '08'),
(282, '2023-10-09', '09'),
(283, '2023-10-10', '10'),
(284, '2023-10-11', '11'),
(285, '2023-10-12', '12'),
(286, '2023-10-13', '13'),
(287, '2023-10-14', '14'),
(288, '2023-10-15', '15'),
(289, '2023-10-16', '16'),
(290, '2023-10-17', '17'),
(291, '2023-10-18', '18'),
(292, '2023-10-19', '19'),
(293, '2023-10-20', '20'),
(294, '2023-10-21', '21'),
(295, '2023-10-22', '22'),
(296, '2023-10-23', '23'),
(297, '2023-10-24', '24'),
(298, '2023-10-25', '25'),
(299, '2023-10-26', '26'),
(300, '2023-10-27', '27'),
(301, '2023-10-28', '28'),
(302, '2023-10-29', '29'),
(303, '2023-10-30', '30'),
(304, '2023-10-31', '31'),
(305, '2023-11-01', '01'),
(306, '2023-11-02', '02'),
(307, '2023-11-03', '03'),
(308, '2023-11-04', '04'),
(309, '2023-11-05', '05'),
(310, '2023-11-06', '06'),
(311, '2023-11-07', '07'),
(312, '2023-11-08', '08'),
(313, '2023-11-09', '09'),
(314, '2023-11-10', '10'),
(315, '2023-11-11', '11'),
(316, '2023-11-12', '12'),
(317, '2023-11-13', '13'),
(318, '2023-11-14', '14'),
(319, '2023-11-15', '15'),
(320, '2023-11-16', '16'),
(321, '2023-11-17', '17'),
(322, '2023-11-18', '18'),
(323, '2023-11-19', '19'),
(324, '2023-11-20', '20'),
(325, '2023-11-21', '21'),
(326, '2023-11-22', '22'),
(327, '2023-11-23', '23'),
(328, '2023-11-24', '24'),
(329, '2023-11-25', '25'),
(330, '2023-11-26', '26'),
(331, '2023-11-27', '27'),
(332, '2023-11-28', '28'),
(333, '2023-11-29', '29'),
(334, '2023-11-30', '30'),
(335, '2023-12-01', '01'),
(336, '2023-12-02', '02'),
(337, '2023-12-03', '03'),
(338, '2023-12-04', '04'),
(339, '2023-12-05', '05'),
(340, '2023-12-06', '06'),
(341, '2023-12-07', '07'),
(342, '2023-12-08', '08'),
(343, '2023-12-09', '09'),
(344, '2023-12-10', '10'),
(345, '2023-12-11', '11'),
(346, '2023-12-12', '12'),
(347, '2023-12-13', '13'),
(348, '2023-12-14', '14'),
(349, '2023-12-15', '15'),
(350, '2023-12-16', '16'),
(351, '2023-12-17', '17'),
(352, '2023-12-18', '18'),
(353, '2023-12-19', '19'),
(354, '2023-12-20', '20'),
(355, '2023-12-21', '21'),
(356, '2023-12-22', '22'),
(357, '2023-12-23', '23'),
(358, '2023-12-24', '24'),
(359, '2023-12-25', '25'),
(360, '2023-12-26', '26'),
(361, '2023-12-27', '27'),
(362, '2023-12-28', '28'),
(363, '2023-12-29', '29'),
(364, '2023-12-30', '30'),
(365, '2023-12-31', '31');

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
(14, 'dasdasdas', '<p>asdgfsgsdf</p>\r\n', 2, NULL, NULL, NULL, '2023-04-02', '08:52:42', 'hide123'),
(15, 'fdgsafgsfdgasf', '<p>gfhdfsgfgf</p>\r\n', 4, NULL, NULL, NULL, '2023-05-02', '10:52:57', 'hide123'),
(16, 'hjhnjkklj', '<p>hnjjhkljkljkljlk</p>\r\n', 1, NULL, NULL, NULL, '2023-04-26', '22:27:21', 'hide123'),
(17, 'dasdasd', '<p>dfSDSAFDGSDFfsdf</p>\r\n', 2, NULL, NULL, NULL, '2023-05-07', '11:09:12', 'hide123'),
(18, 'dasdasdsa', '<p>sadasdasdwad</p>\r\n', 4, NULL, NULL, NULL, '2023-05-07', '21:11:31', 'hide123'),
(19, 'dasdasd', '<p>sadsadfdrdsrgds</p>\r\n', 2, NULL, NULL, NULL, '2023-05-16', '07:40:03', 'umar123'),
(20, 'fgsaffgd', '<p>fsgadfa</p>\r\n', 4, NULL, NULL, NULL, '2023-05-16', '21:40:22', 'umar123'),
(21, 'gsafdswaf', '<p>gdhdsgfds</p>\r\n', 3, NULL, NULL, NULL, '2023-05-18', '07:40:31', 'umar123'),
(22, 'Test Post', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 2, NULL, NULL, NULL, '2023-05-30', '20:13:09', 'test123'),
(23, 'Test New', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 4, 'New Background', 'uploads/test123/entry/', 'close-up-concrete-green-212937.jpg', '2023-05-30', '20:14:08', 'test123');

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
  `bgmsc` longtext DEFAULT NULL,
  `mscsts` int(10) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `path`, `profile_img`, `home_img`, `other_img`, `bgmsc`, `mscsts`, `username`) VALUES
(15, 'uploads/umar123/gallery/', 'drawing_colorful_circles_bright_259_1440x900.jpg', 'close-up-concrete-green-212937.jpg', 'Amazing-Star-Wallpaper-HD.jpg', '', 0, 'umar123'),
(16, 'uploads/hide123/gallery/', NULL, NULL, NULL, 'Karakuri_Pierrot.mp3', 0, 'hide123'),
(19, 'uploads/animal/gallery/', NULL, NULL, NULL, 'Suzume.mp3', 0, 'animal'),
(20, 'uploads/suzume/gallery/', NULL, NULL, NULL, 'Suzume.mp3', 0, 'suzume'),
(21, 'uploads//gallery/', NULL, NULL, NULL, NULL, 0, ''),
(22, 'uploads/test123/gallery/', NULL, NULL, NULL, 'Suzume.mp3', 0, 'test123');

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
(4, 0, 125, 45, 55, 'umar123'),
(5, 0, 175, 49, 56, 'hide123'),
(6, 1, 152, 63, 56, 'animal'),
(7, 1, 152, 63, 56, 'animal'),
(8, 1, 152, 63, 56, 'animal'),
(9, 1, 154, 54, 55, 'suzume'),
(10, 0, 170, 50, 55, 'test123');

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
('animal', '123456', 'Animal', 'Crossing', '2023-05-19', 'Test music animal', 'New Horizon', '', '', ''),
('hide123', '44ff77987e71d0ce316e3f8e677fda13ed161972e4116fe72582b2e113efd9704717933f481924159438275c3a4a3731b9c8bf92946a2582caebe18fafbc39540P0Y5wLOO7hIF6MkNUcXUbmGjnvluq/6u5lFB3ovDdQ=', 'gfssdfdf', 'afdfasd', '2023-03-09', 'dgsfgdsfasdfd', 'Live a new Life', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('suzume', '123456', 'Suzume', 'Suzume', '2023-05-11', 'SUZUME', 'Why', '', '', ''),
('test123', '420dc8bfae903f993f1fb9274659c7ff0c795df4bd77d710e7586da553dbf60af24c5f62b6029c55e7ed54a5b3f403e07b565048e864c382c1d2dab59d4091b7DWGCyP6ga7S6jStsqOQCyhDG1bp0Z6nM5kq6Wizdy6A=', 'Test Name', 'Test', '2023-05-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'New Motto New Life', 'Facebook link.com', 'Twitter link.com', 'Insta link.com'),
('umar123', '6be7d0151d1ac746cdaab354db398adf4c223a175dfcee03ce3e9997793f9e2436c317cb8de4f7dfb0ee5dc795572635a1996a45fd0494728225dee7edb5044bDiqS2XuTaR3NZog8xbW6lhhcV/oD9BcT91BaYgrMnf0=', 'asdsada', 'sadasda', '2023-03-13', 'adsdad', 'sdasdsada', 'gfsfdda', 'adasda', 'adfads');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `galleryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `healthid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
