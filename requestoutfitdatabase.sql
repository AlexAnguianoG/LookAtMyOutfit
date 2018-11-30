-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 12:59 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latmyodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `requestoutfit`
--

CREATE TABLE `requestoutfit` (
  `id` int(11) NOT NULL,
  `user` varchar(20) CHARACTER SET utf8 NOT NULL,
  `outfitname` varchar(35) CHARACTER SET utf8 NOT NULL,
  `season` char(6) CHARACTER SET utf8 NOT NULL,
  `time` char(5) CHARACTER SET utf8 NOT NULL,
  `reason` char(11) CHARACTER SET utf8 NOT NULL,
  `comments` varchar(224) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestoutfit`
--

INSERT INTO `requestoutfit` (`id`, `user`, `outfitname`, `season`, `time`, `reason`, `comments`) VALUES
(1, 'Guillermo', 'Wedding outfit', 'winter', 'night', 'formal', 'I am going to a wedding'),
(2, 'Jesus', 'Dinner outfit', 'summer', 'night', 'semiformal', 'I am going to a dinner with my family'),
(3, 'Alejandro', 'Picnic outfit', 'spring', 'day', 'casual', 'I am going to a picnic with my girlfriend'),
(4, 'Guillermo123', 'Summer Outfit', 'summer', 'day', 'casual', 'I going to the beach.'),
(6, 'Guillermo123', 'Wedding', 'winter', 'night', 'formal', 'I am going to a wedding i need to be elegant.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requestoutfit`
--
ALTER TABLE `requestoutfit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requestoutfit`
--
ALTER TABLE `requestoutfit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
