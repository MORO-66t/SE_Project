-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 06:34 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ac_id` int(4) NOT NULL,
  `ac_nm` varchar(200) NOT NULL,
  `ac_time` varchar(200) NOT NULL,
  `ac_tmp` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`ac_id`, `ac_nm`, `ac_time`, `ac_tmp`) VALUES
(101, '48 Seats Booked ', '1564273432', ''),
(102, '48 Ticket Cancellled', '1564273585', ''),
(103, 'mo@gmail.com Is Registered', '1714927703', ''),
(104, 'mo@gmail.com Is Logged in', '1714927706', ''),
(105, 'mo@gmail.com Is Logged in', '1714986731', ''),
(106, 'mo@gmail.com Is Logged in', '1714986788', ''),
(107, '6 Seats Booked ', '1714989091', ''),
(108, 'mo@gmail.com Is Logged in', '1714999844', ''),
(109, '6 Seats Booked ', '1715000265', ''),
(110, 'you have new message <a href=\"contact_manage.php\">View</a>', '1715007031', ''),
(111, 'you have new message <a href=\"contact_manage.php\">View</a>', '1715007081', ''),
(112, 'mo@gmail.com Is Logged in', '1715013650', ''),
(113, 'mo@gmail.com Is Logged in', '1715016584', ''),
(114, 'mo@gmail.com Is Logged in', '1715016587', ''),
(115, 'mo@gmail.com Is Logged in', '1715016755', ''),
(116, 'mo@gmail.com Is Logged in', '1715017376', ''),
(117, 'm@gmail.com Is Registered', '1715017403', ''),
(118, 'm@gmail.com Is Logged in', '1715017407', ''),
(119, 'm@gmail.com Is Logged in', '1715017993', ''),
(120, '6 Seats Booked ', '1715018044', ''),
(121, 'mo@gmail.com Is Logged in', '1715018076', ''),
(122, 'mo@gmail.com Is Logged in', '1715018417', ''),
(123, 'mo@gmail.com Is Logged in', '1715020491', ''),
(124, 'mo@gmail.com Is Logged in', '1715020622', ''),
(125, 'mo@gmail.com Is Logged in', '1715020761', ''),
(126, 'mo@gmail.com Is Logged in', '1715162792', ''),
(127, 'mo@gmail.com Is Logged in', '1715184438', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `a_nm` varchar(50) NOT NULL,
  `a_unm` varchar(6) NOT NULL,
  `a_mno` varchar(12) NOT NULL,
  `a_pwd` varchar(40) NOT NULL,
  `a_email` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_nm`, `a_unm`, `a_mno`, `a_pwd`, `a_email`) VALUES
(1, 'Darshak Pansuriya', 'admin', '9714007824', '7472', 'pdwapinc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(4) NOT NULL,
  `b_bookid` varchar(100) NOT NULL,
  `b_theatre` varchar(10) NOT NULL,
  `b_unm` varchar(20) NOT NULL,
  `b_show` varchar(20) NOT NULL,
  `b_screen` varchar(20) NOT NULL,
  `b_seat` int(20) NOT NULL,
  `b_amt` int(40) NOT NULL,
  `b_date` varchar(40) NOT NULL,
  `b_time` bigint(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_bookid`, `b_theatre`, `b_unm`, `b_show`, `b_screen`, `b_seat`, `b_amt`, `b_date`, `b_time`) VALUES
(17, 'BKID6224181', '11', '11', '59', '22', 6, 3000, '2024-05-14', 1714989091),
(18, 'BKID6641560', '14', '11', '57', '23', 6, 1200, '2024-05-30', 1715000265),
(19, 'BKID5955141', '13', '12', '58', '17', 6, 1800, '2024-05-22', 1715018044);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `co_id` int(4) NOT NULL,
  `co_nm` varchar(20) NOT NULL,
  `co_mno` varchar(12) NOT NULL,
  `co_email` varchar(50) NOT NULL,
  `co_msg` longtext NOT NULL,
  `co_time` bigint(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`co_id`, `co_nm`, `co_mno`, `co_email`, `co_msg`, `co_time`) VALUES
(2, 'Darshak', '9714007824', 'pdwapinc@gmail.com', 'Fhjwjwj', 1559740252),
(3, 'Mohamed ragab salama', '1027886935', 'mohamedragab987321654@gmail.com', 'Lorem Ipsum ', 1715007031);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `m_id` int(4) NOT NULL,
  `m_nm` varchar(40) NOT NULL,
  `m_date` varchar(40) NOT NULL,
  `m_cnm` varchar(200) NOT NULL,
  `m_dnm` varchar(200) NOT NULL,
  `m_des` longtext NOT NULL,
  `m_banner` varchar(200) NOT NULL,
  `m_shw` int(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`m_id`, `m_nm`, `m_date`, `m_cnm`, `m_dnm`, `m_des`, `m_banner`, `m_shw`) VALUES
(16, 'Article 11', '2019-06-28', 'Ayushmann Khurrana Isha Talwar Sayani Gupta', 'Anubhav Sinha', 'A crime thriller film directed by Anubhav Sinha, starring Ayushmann Khurrana, Isha Talwar and Sayani Gupta in the lead roles.            ', '1714940077_1563833516_article.jpg', 0),
(15, 'The Lion King', '2019-07-19', 'Amy Sedaris Donald Glover Keegan-Michael Key', 'Jon Favreau ', 'Simba idolizes his father Mufasa and follows his footsteps to achieve his royal destiny with the help of his newfound friends and regain what is rightfully his.    ', '1563833550_lionking.jpeg', 0),
(17, 'Spider Man:Far From Home', '2019-07-04', 'Jake Gyllenhaal Marisa Tomei Samuel L Jackson Tom Hollander', 'Jon Watts', 'Dubbed action adventure film directed by Jon Watts, starring Jake Gyllenhaal, Tom Holland and Zendaya in the lead roles.    ', '1563833608_spider.jpg', 1),
(18, 'Kabir Singh', '2019-06-21', 'Kiara Advani, Shahid Kapoor', 'Sandeep Reddy Vanga ', 'A short-tempered alcoholic surgeon goes down a self-destructive path when the love of his life is forced to marry someone else.', '1563639828_kabir.jpeg', 0),
(19, 'Arjun Patiyala', '2019-07-26', 'Diljit Dosanj ,hKriti Sanon', 'Rohit Jugraj', 'Comic difficulties ensue when a tall female journalist falls in love with a short Punjabi man.', '1563639960_arjun.jpeg', 1),
(23, 'sd', '0', ' Paul Atreides, ', ' Denis Villeneuve', 'kjhlk', '1714932975_P_HO00011079.jpg', 1),
(24, 'boys kill worlds', '2024-05-24', 'all', 'Mohammed Ragab', 'you     ', '1715017938_we.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `full_price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(4) NOT NULL,
  `r_nm` varchar(30) NOT NULL,
  `r_age` varchar(2) NOT NULL,
  `r_gender` varchar(10) NOT NULL,
  `r_mno` varchar(12) NOT NULL,
  `r_email` varchar(40) NOT NULL,
  `r_pwd` varchar(40) NOT NULL,
  `r_time` bigint(40) NOT NULL,
  `r_status` int(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_nm`, `r_age`, `r_gender`, `r_mno`, `r_email`, `r_pwd`, `r_time`, `r_status`) VALUES
(12, 'Mohamed ragab salama', '77', 'Male', '1027886935', 'm@gmail.com', '0plm0plM', 1715017403, 1),
(4, 'Ram bhai', '20', 'Male', '2341235123', 'pdwapinc@gmail.com', '747233', 1559047656, 1),
(6, 'Ketan Patel', '40', 'Male', '4727727248', 'Ketan@mail.com', '123123', 1559047783, 1),
(7, 'Ketan Patel', '40', 'Male', '000000000', 'Ketanz@mail.com', '121212', 1559047797, 1),
(8, 'Pd wap', '22', 'Male', '1482848289', 'pdwapofficial@gmail.com', '123123', 1559736049, 1),
(9, 'Darshak', '22', 'Male', '9714007824', 'pdwapinc@gmail.com', '123123', 1559738573, 1),
(10, 'pradip swer', '19', 'Male', '9912456780', 'p@gmail.com', '121212', 1563636916, 1),
(11, 'Mohamed ragab salama', '77', 'Male', '1027886935', 'mo@gmail.com', '0plm0plM', 1714927703, 1);

-- --------------------------------------------------------

--
-- Table structure for table `screen`
--

CREATE TABLE `screen` (
  `s_id` int(4) NOT NULL,
  `s_nm` varchar(20) NOT NULL,
  `s_theatre` int(2) NOT NULL,
  `s_seats` int(250) NOT NULL DEFAULT 49,
  `s_time` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `screen`
--

INSERT INTO `screen` (`s_id`, `s_nm`, `s_theatre`, `s_seats`, `s_time`) VALUES
(16, 'Local', 11, 49, 1564013078),
(15, 'Silver', 8, 49, 1564013069),
(14, 'Gold', 8, 49, 1564013054),
(13, 'Last', 10, 49, 1564013044),
(12, 'First', 10, 49, 1564012964),
(11, 'Red', 6, 49, 1564012935),
(10, 'Blue', 6, 49, 1564012929),
(17, 'O-led', 13, 49, 1714950864),
(18, 'O-led', 13, 49, 1714951217),
(22, 'HAHA', 11, 49, 1714987870),
(20, 'MORO', 8, 49, 1714987436),
(23, 'FLOOOOS', 14, 49, 1714988095);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(5) NOT NULL,
  `seat_row` varchar(5) NOT NULL,
  `seat_col` int(5) NOT NULL,
  `seat_show` int(5) NOT NULL DEFAULT 0,
  `seat_uid` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seat_row`, `seat_col`, `seat_show`, `seat_uid`) VALUES
(1, 'A', 1, 48, 0),
(2, 'A', 2, 48, 0),
(3, 'A', 3, 48, 0),
(4, 'A', 4, 48, 0),
(5, 'A', 5, 48, 0),
(6, 'A', 6, 48, 0),
(7, 'B', 1, 48, 0),
(8, 'B', 2, 48, 0),
(9, 'B', 3, 48, 0),
(10, 'B', 4, 48, 0),
(11, 'B', 5, 48, 0),
(12, 'B', 6, 48, 0),
(13, 'C', 1, 48, 0),
(14, 'C', 2, 48, 0),
(15, 'C', 3, 48, 0),
(16, 'C', 4, 48, 0),
(17, 'C', 5, 48, 0),
(18, 'C', 6, 48, 0),
(19, 'D', 1, 48, 0),
(20, 'D', 2, 48, 0),
(21, 'D', 3, 48, 0),
(22, 'D', 4, 48, 0),
(23, 'D', 5, 48, 0),
(24, 'D', 6, 48, 0),
(25, 'E', 1, 48, 0),
(26, 'E', 2, 48, 0),
(27, 'E', 3, 48, 0),
(28, 'E', 4, 48, 0),
(29, 'E', 5, 48, 0),
(30, 'E', 6, 48, 0),
(31, 'F', 1, 48, 0),
(32, 'F', 2, 48, 0),
(33, 'F', 3, 48, 0),
(34, 'F', 4, 48, 0),
(35, 'F', 5, 48, 0),
(36, 'F', 6, 48, 0),
(37, 'G', 1, 48, 0),
(38, 'G', 2, 48, 0),
(39, 'G', 3, 48, 0),
(40, 'G', 4, 48, 0),
(41, 'G', 5, 48, 0),
(42, 'G', 6, 48, 0),
(43, 'H', 1, 48, 0),
(44, 'H', 2, 48, 0),
(45, 'H', 3, 48, 0),
(46, 'H', 4, 48, 0),
(47, 'H', 5, 48, 0),
(48, 'H', 6, 48, 0),
(49, 'A', 1, 49, 0),
(50, 'A', 2, 49, 0),
(51, 'A', 3, 49, 0),
(52, 'A', 4, 49, 0),
(53, 'A', 5, 49, 0),
(54, 'A', 6, 49, 0),
(55, 'B', 1, 49, 0),
(56, 'B', 2, 49, 0),
(57, 'B', 3, 49, 0),
(58, 'B', 4, 49, 0),
(59, 'B', 5, 49, 0),
(60, 'B', 6, 49, 0),
(61, 'C', 1, 49, 0),
(62, 'C', 2, 49, 0),
(63, 'C', 3, 49, 0),
(64, 'C', 4, 49, 0),
(65, 'C', 5, 49, 0),
(66, 'C', 6, 49, 0),
(67, 'D', 1, 49, 0),
(68, 'D', 2, 49, 0),
(69, 'D', 3, 49, 0),
(70, 'D', 4, 49, 0),
(71, 'D', 5, 49, 0),
(72, 'D', 6, 49, 0),
(73, 'E', 1, 49, 0),
(74, 'E', 2, 49, 0),
(75, 'E', 3, 49, 0),
(76, 'E', 4, 49, 0),
(77, 'E', 5, 49, 0),
(78, 'E', 6, 49, 0),
(79, 'F', 1, 49, 0),
(80, 'F', 2, 49, 0),
(81, 'F', 3, 49, 0),
(82, 'F', 4, 49, 0),
(83, 'F', 5, 49, 0),
(84, 'F', 6, 49, 0),
(85, 'G', 1, 49, 0),
(86, 'G', 2, 49, 0),
(87, 'G', 3, 49, 0),
(88, 'G', 4, 49, 0),
(89, 'G', 5, 49, 0),
(90, 'G', 6, 49, 0),
(91, 'H', 1, 49, 0),
(92, 'H', 2, 49, 0),
(93, 'H', 3, 49, 0),
(94, 'H', 4, 49, 0),
(95, 'H', 5, 49, 0),
(96, 'H', 6, 49, 0),
(97, 'A', 1, 50, 0),
(98, 'A', 2, 50, 0),
(99, 'A', 3, 50, 0),
(100, 'A', 4, 50, 0),
(101, 'A', 5, 50, 0),
(102, 'A', 6, 50, 0),
(103, 'B', 1, 50, 0),
(104, 'B', 2, 50, 0),
(105, 'B', 3, 50, 0),
(106, 'B', 4, 50, 0),
(107, 'B', 5, 50, 0),
(108, 'B', 6, 50, 0),
(109, 'C', 1, 50, 0),
(110, 'C', 2, 50, 0),
(111, 'C', 3, 50, 0),
(112, 'C', 4, 50, 0),
(113, 'C', 5, 50, 0),
(114, 'C', 6, 50, 0),
(115, 'D', 1, 50, 0),
(116, 'D', 2, 50, 0),
(117, 'D', 3, 50, 0),
(118, 'D', 4, 50, 0),
(119, 'D', 5, 50, 0),
(120, 'D', 6, 50, 0),
(121, 'E', 1, 50, 0),
(122, 'E', 2, 50, 0),
(123, 'E', 3, 50, 0),
(124, 'E', 4, 50, 0),
(125, 'E', 5, 50, 0),
(126, 'E', 6, 50, 0),
(127, 'F', 1, 50, 0),
(128, 'F', 2, 50, 0),
(129, 'F', 3, 50, 0),
(130, 'F', 4, 50, 0),
(131, 'F', 5, 50, 0),
(132, 'F', 6, 50, 0),
(133, 'G', 1, 50, 0),
(134, 'G', 2, 50, 0),
(135, 'G', 3, 50, 0),
(136, 'G', 4, 50, 0),
(137, 'G', 5, 50, 0),
(138, 'G', 6, 50, 0),
(139, 'H', 1, 50, 0),
(140, 'H', 2, 50, 0),
(141, 'H', 3, 50, 0),
(142, 'H', 4, 50, 0),
(143, 'H', 5, 50, 0),
(144, 'H', 6, 50, 0),
(145, 'A', 1, 51, 0),
(146, 'A', 2, 51, 0),
(147, 'A', 3, 51, 0),
(148, 'A', 4, 51, 0),
(149, 'A', 5, 51, 0),
(150, 'A', 6, 51, 0),
(151, 'B', 1, 51, 0),
(152, 'B', 2, 51, 0),
(153, 'B', 3, 51, 0),
(154, 'B', 4, 51, 0),
(155, 'B', 5, 51, 0),
(156, 'B', 6, 51, 0),
(157, 'C', 1, 51, 0),
(158, 'C', 2, 51, 0),
(159, 'C', 3, 51, 0),
(160, 'C', 4, 51, 0),
(161, 'C', 5, 51, 0),
(162, 'C', 6, 51, 0),
(163, 'D', 1, 51, 0),
(164, 'D', 2, 51, 0),
(165, 'D', 3, 51, 0),
(166, 'D', 4, 51, 0),
(167, 'D', 5, 51, 0),
(168, 'D', 6, 51, 0),
(169, 'E', 1, 51, 0),
(170, 'E', 2, 51, 0),
(171, 'E', 3, 51, 0),
(172, 'E', 4, 51, 0),
(173, 'E', 5, 51, 0),
(174, 'E', 6, 51, 0),
(175, 'F', 1, 51, 0),
(176, 'F', 2, 51, 0),
(177, 'F', 3, 51, 0),
(178, 'F', 4, 51, 0),
(179, 'F', 5, 51, 0),
(180, 'F', 6, 51, 0),
(181, 'G', 1, 51, 0),
(182, 'G', 2, 51, 0),
(183, 'G', 3, 51, 0),
(184, 'G', 4, 51, 0),
(185, 'G', 5, 51, 0),
(186, 'G', 6, 51, 0),
(187, 'H', 1, 51, 0),
(188, 'H', 2, 51, 0),
(189, 'H', 3, 51, 0),
(190, 'H', 4, 51, 0),
(191, 'H', 5, 51, 0),
(192, 'H', 6, 51, 0),
(193, 'A', 1, 52, 0),
(194, 'A', 2, 52, 0),
(195, 'A', 3, 52, 0),
(196, 'A', 4, 52, 0),
(197, 'A', 5, 52, 0),
(198, 'A', 6, 52, 0),
(199, 'B', 1, 52, 0),
(200, 'B', 2, 52, 0),
(201, 'B', 3, 52, 0),
(202, 'B', 4, 52, 0),
(203, 'B', 5, 52, 0),
(204, 'B', 6, 52, 0),
(205, 'C', 1, 52, 0),
(206, 'C', 2, 52, 0),
(207, 'C', 3, 52, 0),
(208, 'C', 4, 52, 0),
(209, 'C', 5, 52, 0),
(210, 'C', 6, 52, 0),
(211, 'D', 1, 52, 0),
(212, 'D', 2, 52, 0),
(213, 'D', 3, 52, 0),
(214, 'D', 4, 52, 0),
(215, 'D', 5, 52, 0),
(216, 'D', 6, 52, 0),
(217, 'E', 1, 52, 0),
(218, 'E', 2, 52, 0),
(219, 'E', 3, 52, 0),
(220, 'E', 4, 52, 0),
(221, 'E', 5, 52, 0),
(222, 'E', 6, 52, 0),
(223, 'F', 1, 52, 0),
(224, 'F', 2, 52, 0),
(225, 'F', 3, 52, 0),
(226, 'F', 4, 52, 0),
(227, 'F', 5, 52, 0),
(228, 'F', 6, 52, 0),
(229, 'G', 1, 52, 0),
(230, 'G', 2, 52, 0),
(231, 'G', 3, 52, 0),
(232, 'G', 4, 52, 0),
(233, 'G', 5, 52, 0),
(234, 'G', 6, 52, 0),
(235, 'H', 1, 52, 0),
(236, 'H', 2, 52, 0),
(237, 'H', 3, 52, 0),
(238, 'H', 4, 52, 0),
(239, 'H', 5, 52, 0),
(240, 'H', 6, 52, 0),
(241, 'A', 1, 53, 0),
(242, 'A', 2, 53, 0),
(243, 'A', 3, 53, 0),
(244, 'A', 4, 53, 0),
(245, 'A', 5, 53, 0),
(246, 'A', 6, 53, 0),
(247, 'B', 1, 53, 0),
(248, 'B', 2, 53, 0),
(249, 'B', 3, 53, 0),
(250, 'B', 4, 53, 0),
(251, 'B', 5, 53, 0),
(252, 'B', 6, 53, 0),
(253, 'C', 1, 53, 0),
(254, 'C', 2, 53, 0),
(255, 'C', 3, 53, 0),
(256, 'C', 4, 53, 0),
(257, 'C', 5, 53, 0),
(258, 'C', 6, 53, 0),
(259, 'D', 1, 53, 0),
(260, 'D', 2, 53, 0),
(261, 'D', 3, 53, 0),
(262, 'D', 4, 53, 0),
(263, 'D', 5, 53, 0),
(264, 'D', 6, 53, 0),
(265, 'E', 1, 53, 0),
(266, 'E', 2, 53, 0),
(267, 'E', 3, 53, 0),
(268, 'E', 4, 53, 0),
(269, 'E', 5, 53, 0),
(270, 'E', 6, 53, 0),
(271, 'F', 1, 53, 0),
(272, 'F', 2, 53, 0),
(273, 'F', 3, 53, 0),
(274, 'F', 4, 53, 0),
(275, 'F', 5, 53, 0),
(276, 'F', 6, 53, 0),
(277, 'G', 1, 53, 0),
(278, 'G', 2, 53, 0),
(279, 'G', 3, 53, 0),
(280, 'G', 4, 53, 0),
(281, 'G', 5, 53, 0),
(282, 'G', 6, 53, 0),
(283, 'H', 1, 53, 0),
(284, 'H', 2, 53, 0),
(285, 'H', 3, 53, 0),
(286, 'H', 4, 53, 0),
(287, 'H', 5, 53, 0),
(288, 'H', 6, 53, 0),
(289, 'A', 1, 54, 0),
(290, 'A', 2, 54, 0),
(291, 'A', 3, 54, 0),
(292, 'A', 4, 54, 0),
(293, 'A', 5, 54, 0),
(294, 'A', 6, 54, 0),
(295, 'B', 1, 54, 0),
(296, 'B', 2, 54, 0),
(297, 'B', 3, 54, 0),
(298, 'B', 4, 54, 0),
(299, 'B', 5, 54, 0),
(300, 'B', 6, 54, 0),
(301, 'C', 1, 54, 0),
(302, 'C', 2, 54, 0),
(303, 'C', 3, 54, 0),
(304, 'C', 4, 54, 0),
(305, 'C', 5, 54, 0),
(306, 'C', 6, 54, 0),
(307, 'D', 1, 54, 0),
(308, 'D', 2, 54, 0),
(309, 'D', 3, 54, 0),
(310, 'D', 4, 54, 0),
(311, 'D', 5, 54, 0),
(312, 'D', 6, 54, 0),
(313, 'E', 1, 54, 0),
(314, 'E', 2, 54, 0),
(315, 'E', 3, 54, 0),
(316, 'E', 4, 54, 0),
(317, 'E', 5, 54, 0),
(318, 'E', 6, 54, 0),
(319, 'F', 1, 54, 0),
(320, 'F', 2, 54, 0),
(321, 'F', 3, 54, 0),
(322, 'F', 4, 54, 0),
(323, 'F', 5, 54, 0),
(324, 'F', 6, 54, 0),
(325, 'G', 1, 54, 0),
(326, 'G', 2, 54, 0),
(327, 'G', 3, 54, 0),
(328, 'G', 4, 54, 0),
(329, 'G', 5, 54, 0),
(330, 'G', 6, 54, 0),
(331, 'H', 1, 54, 0),
(332, 'H', 2, 54, 0),
(333, 'H', 3, 54, 0),
(334, 'H', 4, 54, 0),
(335, 'H', 5, 54, 0),
(336, 'H', 6, 54, 0),
(337, 'A', 1, 55, 0),
(338, 'A', 2, 55, 0),
(339, 'A', 3, 55, 0),
(340, 'A', 4, 55, 0),
(341, 'A', 5, 55, 0),
(342, 'A', 6, 55, 0),
(343, 'B', 1, 55, 0),
(344, 'B', 2, 55, 0),
(345, 'B', 3, 55, 0),
(346, 'B', 4, 55, 0),
(347, 'B', 5, 55, 0),
(348, 'B', 6, 55, 0),
(349, 'C', 1, 55, 0),
(350, 'C', 2, 55, 0),
(351, 'C', 3, 55, 0),
(352, 'C', 4, 55, 0),
(353, 'C', 5, 55, 0),
(354, 'C', 6, 55, 0),
(355, 'D', 1, 55, 0),
(356, 'D', 2, 55, 0),
(357, 'D', 3, 55, 0),
(358, 'D', 4, 55, 0),
(359, 'D', 5, 55, 0),
(360, 'D', 6, 55, 0),
(361, 'E', 1, 55, 0),
(362, 'E', 2, 55, 0),
(363, 'E', 3, 55, 0),
(364, 'E', 4, 55, 0),
(365, 'E', 5, 55, 0),
(366, 'E', 6, 55, 0),
(367, 'F', 1, 55, 0),
(368, 'F', 2, 55, 0),
(369, 'F', 3, 55, 0),
(370, 'F', 4, 55, 0),
(371, 'F', 5, 55, 0),
(372, 'F', 6, 55, 0),
(373, 'G', 1, 55, 0),
(374, 'G', 2, 55, 0),
(375, 'G', 3, 55, 0),
(376, 'G', 4, 55, 0),
(377, 'G', 5, 55, 0),
(378, 'G', 6, 55, 0),
(379, 'H', 1, 55, 0),
(380, 'H', 2, 55, 0),
(381, 'H', 3, 55, 0),
(382, 'H', 4, 55, 0),
(383, 'H', 5, 55, 0),
(384, 'H', 6, 55, 0),
(385, 'A', 1, 56, 0),
(386, 'A', 2, 56, 0),
(387, 'A', 3, 56, 0),
(388, 'A', 4, 56, 0),
(389, 'A', 5, 56, 0),
(390, 'A', 6, 56, 0),
(391, 'B', 1, 56, 0),
(392, 'B', 2, 56, 0),
(393, 'B', 3, 56, 0),
(394, 'B', 4, 56, 0),
(395, 'B', 5, 56, 0),
(396, 'B', 6, 56, 0),
(397, 'C', 1, 56, 0),
(398, 'C', 2, 56, 0),
(399, 'C', 3, 56, 0),
(400, 'C', 4, 56, 0),
(401, 'C', 5, 56, 0),
(402, 'C', 6, 56, 0),
(403, 'D', 1, 56, 0),
(404, 'D', 2, 56, 0),
(405, 'D', 3, 56, 0),
(406, 'D', 4, 56, 0),
(407, 'D', 5, 56, 0),
(408, 'D', 6, 56, 0),
(409, 'E', 1, 56, 0),
(410, 'E', 2, 56, 0),
(411, 'E', 3, 56, 0),
(412, 'E', 4, 56, 0),
(413, 'E', 5, 56, 0),
(414, 'E', 6, 56, 0),
(415, 'F', 1, 56, 0),
(416, 'F', 2, 56, 0),
(417, 'F', 3, 56, 0),
(418, 'F', 4, 56, 0),
(419, 'F', 5, 56, 0),
(420, 'F', 6, 56, 0),
(421, 'G', 1, 56, 0),
(422, 'G', 2, 56, 0),
(423, 'G', 3, 56, 0),
(424, 'G', 4, 56, 0),
(425, 'G', 5, 56, 0),
(426, 'G', 6, 56, 0),
(427, 'H', 1, 56, 0),
(428, 'H', 2, 56, 0),
(429, 'H', 3, 56, 0),
(430, 'H', 4, 56, 0),
(431, 'H', 5, 56, 0),
(432, 'H', 6, 56, 0),
(433, 'A', 1, 57, 0),
(434, 'A', 2, 57, 0),
(435, 'A', 3, 57, 0),
(436, 'A', 4, 57, 0),
(437, 'A', 5, 57, 0),
(438, 'A', 6, 57, 11),
(439, 'B', 1, 57, 0),
(440, 'B', 2, 57, 0),
(441, 'B', 3, 57, 0),
(442, 'B', 4, 57, 0),
(443, 'B', 5, 57, 11),
(444, 'B', 6, 57, 0),
(445, 'C', 1, 57, 0),
(446, 'C', 2, 57, 0),
(447, 'C', 3, 57, 0),
(448, 'C', 4, 57, 11),
(449, 'C', 5, 57, 0),
(450, 'C', 6, 57, 0),
(451, 'D', 1, 57, 0),
(452, 'D', 2, 57, 0),
(453, 'D', 3, 57, 11),
(454, 'D', 4, 57, 0),
(455, 'D', 5, 57, 0),
(456, 'D', 6, 57, 0),
(457, 'E', 1, 57, 0),
(458, 'E', 2, 57, 11),
(459, 'E', 3, 57, 0),
(460, 'E', 4, 57, 0),
(461, 'E', 5, 57, 0),
(462, 'E', 6, 57, 0),
(463, 'F', 1, 57, 11),
(464, 'F', 2, 57, 0),
(465, 'F', 3, 57, 0),
(466, 'F', 4, 57, 0),
(467, 'F', 5, 57, 0),
(468, 'F', 6, 57, 0),
(469, 'G', 1, 57, 0),
(470, 'G', 2, 57, 0),
(471, 'G', 3, 57, 0),
(472, 'G', 4, 57, 0),
(473, 'G', 5, 57, 0),
(474, 'G', 6, 57, 0),
(475, 'H', 1, 57, 0),
(476, 'H', 2, 57, 0),
(477, 'H', 3, 57, 0),
(478, 'H', 4, 57, 0),
(479, 'H', 5, 57, 0),
(480, 'H', 6, 57, 0),
(481, 'A', 1, 58, 0),
(482, 'A', 2, 58, 0),
(483, 'A', 3, 58, 0),
(484, 'A', 4, 58, 0),
(485, 'A', 5, 58, 0),
(486, 'A', 6, 58, 12),
(487, 'B', 1, 58, 0),
(488, 'B', 2, 58, 0),
(489, 'B', 3, 58, 0),
(490, 'B', 4, 58, 0),
(491, 'B', 5, 58, 12),
(492, 'B', 6, 58, 0),
(493, 'C', 1, 58, 0),
(494, 'C', 2, 58, 0),
(495, 'C', 3, 58, 0),
(496, 'C', 4, 58, 12),
(497, 'C', 5, 58, 0),
(498, 'C', 6, 58, 0),
(499, 'D', 1, 58, 0),
(500, 'D', 2, 58, 0),
(501, 'D', 3, 58, 12),
(502, 'D', 4, 58, 0),
(503, 'D', 5, 58, 0),
(504, 'D', 6, 58, 0),
(505, 'E', 1, 58, 0),
(506, 'E', 2, 58, 12),
(507, 'E', 3, 58, 0),
(508, 'E', 4, 58, 0),
(509, 'E', 5, 58, 0),
(510, 'E', 6, 58, 0),
(511, 'F', 1, 58, 12),
(512, 'F', 2, 58, 0),
(513, 'F', 3, 58, 0),
(514, 'F', 4, 58, 0),
(515, 'F', 5, 58, 0),
(516, 'F', 6, 58, 0),
(517, 'G', 1, 58, 0),
(518, 'G', 2, 58, 0),
(519, 'G', 3, 58, 0),
(520, 'G', 4, 58, 0),
(521, 'G', 5, 58, 0),
(522, 'G', 6, 58, 0),
(523, 'H', 1, 58, 0),
(524, 'H', 2, 58, 0),
(525, 'H', 3, 58, 0),
(526, 'H', 4, 58, 0),
(527, 'H', 5, 58, 0),
(528, 'H', 6, 58, 0),
(529, 'A', 1, 59, 0),
(530, 'A', 2, 59, 0),
(531, 'A', 3, 59, 0),
(532, 'A', 4, 59, 0),
(533, 'A', 5, 59, 0),
(534, 'A', 6, 59, 11),
(535, 'B', 1, 59, 0),
(536, 'B', 2, 59, 0),
(537, 'B', 3, 59, 0),
(538, 'B', 4, 59, 0),
(539, 'B', 5, 59, 11),
(540, 'B', 6, 59, 0),
(541, 'C', 1, 59, 0),
(542, 'C', 2, 59, 0),
(543, 'C', 3, 59, 0),
(544, 'C', 4, 59, 11),
(545, 'C', 5, 59, 0),
(546, 'C', 6, 59, 0),
(547, 'D', 1, 59, 0),
(548, 'D', 2, 59, 0),
(549, 'D', 3, 59, 11),
(550, 'D', 4, 59, 0),
(551, 'D', 5, 59, 0),
(552, 'D', 6, 59, 0),
(553, 'E', 1, 59, 0),
(554, 'E', 2, 59, 11),
(555, 'E', 3, 59, 0),
(556, 'E', 4, 59, 0),
(557, 'E', 5, 59, 0),
(558, 'E', 6, 59, 0),
(559, 'F', 1, 59, 11),
(560, 'F', 2, 59, 0),
(561, 'F', 3, 59, 0),
(562, 'F', 4, 59, 0),
(563, 'F', 5, 59, 0),
(564, 'F', 6, 59, 0),
(565, 'G', 1, 59, 0),
(566, 'G', 2, 59, 0),
(567, 'G', 3, 59, 0),
(568, 'G', 4, 59, 0),
(569, 'G', 5, 59, 0),
(570, 'G', 6, 59, 0),
(571, 'H', 1, 59, 0),
(572, 'H', 2, 59, 0),
(573, 'H', 3, 59, 0),
(574, 'H', 4, 59, 0),
(575, 'H', 5, 59, 0),
(576, 'H', 6, 59, 0),
(577, 'A', 1, 60, 0),
(578, 'A', 2, 60, 0),
(579, 'A', 3, 60, 0),
(580, 'A', 4, 60, 0),
(581, 'A', 5, 60, 0),
(582, 'A', 6, 60, 0),
(583, 'B', 1, 60, 0),
(584, 'B', 2, 60, 0),
(585, 'B', 3, 60, 0),
(586, 'B', 4, 60, 0),
(587, 'B', 5, 60, 0),
(588, 'B', 6, 60, 0),
(589, 'C', 1, 60, 0),
(590, 'C', 2, 60, 0),
(591, 'C', 3, 60, 0),
(592, 'C', 4, 60, 0),
(593, 'C', 5, 60, 0),
(594, 'C', 6, 60, 0),
(595, 'D', 1, 60, 0),
(596, 'D', 2, 60, 0),
(597, 'D', 3, 60, 0),
(598, 'D', 4, 60, 0),
(599, 'D', 5, 60, 0),
(600, 'D', 6, 60, 0),
(601, 'E', 1, 60, 0),
(602, 'E', 2, 60, 0),
(603, 'E', 3, 60, 0),
(604, 'E', 4, 60, 0),
(605, 'E', 5, 60, 0),
(606, 'E', 6, 60, 0),
(607, 'F', 1, 60, 0),
(608, 'F', 2, 60, 0),
(609, 'F', 3, 60, 0),
(610, 'F', 4, 60, 0),
(611, 'F', 5, 60, 0),
(612, 'F', 6, 60, 0),
(613, 'G', 1, 60, 0),
(614, 'G', 2, 60, 0),
(615, 'G', 3, 60, 0),
(616, 'G', 4, 60, 0),
(617, 'G', 5, 60, 0),
(618, 'G', 6, 60, 0),
(619, 'H', 1, 60, 0),
(620, 'H', 2, 60, 0),
(621, 'H', 3, 60, 0),
(622, 'H', 4, 60, 0),
(623, 'H', 5, 60, 0),
(624, 'H', 6, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(4) NOT NULL,
  `show_m` int(4) NOT NULL,
  `show_t` int(4) NOT NULL,
  `show_s` int(4) NOT NULL,
  `show_time` varchar(200) NOT NULL,
  `show_date` varchar(20) NOT NULL,
  `show_price` int(4) NOT NULL,
  `show_status` int(1) NOT NULL DEFAULT 1,
  `show_seat` int(3) NOT NULL DEFAULT 48,
  `show_unq` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `show_m`, `show_t`, `show_s`, `show_time`, `show_date`, `show_price`, `show_status`, `show_seat`, `show_unq`) VALUES
(60, 23, 10, 13, '20:48', '2024-05-22', 500, 1, 48, '663916ffc5e1f'),
(59, 19, 11, 22, '12:54', '2024-05-14', 500, 1, 42, '6638a7e5e6f58'),
(58, 24, 13, 17, '16:49', '2024-05-22', 300, 1, 42, '6638a7bd1fb85'),
(57, 17, 14, 23, '12:46', '2024-05-30', 200, 1, 42, '6638a61f69c56'),
(56, 24, 10, 12, '12:39', '2024-05-15', 230, 1, 48, '6638a479c531b');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `t_id` int(4) NOT NULL,
  `t_nm` varchar(30) NOT NULL,
  `t_city` varchar(30) NOT NULL,
  `t_time` bigint(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`t_id`, `t_nm`, `t_city`, `t_time`) VALUES
(6, 'Cosmoplex', 'Rajkot', 1558695729),
(8, 'Angel', 'Amreli      ', 1559134151),
(9, 'Galaxy ', 'Rajkot', 1559548986),
(10, 'R World', 'Rajkot', 1559549005),
(11, 'Rajeshri', 'Rajkot', 1559549033),
(12, 'sd', 'assiut', 1714927032),
(13, 'GO', 'Manfalout', 1714948994),
(14, 'DUBI', 'DUBI', 1714988002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `screen`
--
ALTER TABLE `screen`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ac_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `co_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `m_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `screen`
--
ALTER TABLE `screen`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=625;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `t_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
