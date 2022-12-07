-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2021 at 08:54 AM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.1.33-37+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `classname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `address`, `phone`, `photo`, `classname`) VALUES
(14, 'Modi Bixa 1', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057575862770.jpg', '04T2'),
(15, 'Modi bixa 23', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057577628814.jpg', '04T1'),
(16, 'Modi bixa 3', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '142057579643359.jpg', '04T2'),
(19, 'softdevelop test', '61 Le Van Si - Hoa Minh -Lien Chieu', '0976565434', '158918913571045.jpg', '45'),
(20, 'modi bixa', '61 Le Van Si - Hoa Minh -Lien Chieu', '+84123456789', '162153916635162.jpeg', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
