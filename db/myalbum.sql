-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2015 at 05:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myalbum`
--

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `name`, `album`, `aID`) VALUES
(1, 'a11', 'Zodiac', 1),
(2, 'a12', 'Zodiac', 1),
(3, 'a13', 'Zodiac', 1),
(4, 'a14', 'Zodiac', 1),
(5, 'a15', 'Zodiac', 1),
(6, 'a16', 'Zodiac', 1),
(7, 'a21', 'Hoang dao', 2),
(8, 'a22', 'Hoang dao', 2),
(9, 'a23', 'Hoang dao', 2),
(10, 'a24', 'Hoang dao', 2),
(11, 'a25', 'Hoang dao', 2),
(12, 'a26', 'Hoang dao', 2),
(13, 'a31', 'Quang Nguyễn', 3),
(14, 'a32', 'Quang Nguyễn', 3),
(15, 'a33', 'Quang Nguyễn', 3),
(16, 'a34', 'Quang Nguyễn', 3),
(17, 'a35', 'Quang Nguyễn', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
