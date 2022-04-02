-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 08:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr12_mount_everest_stephan_reindl`
--
CREATE DATABASE IF NOT EXISTS `be15_cr12_mount_everest_stephan_reindl` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `be15_cr12_mount_everest_stephan_reindl`;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `price`, `description`, `picture`, `longitude`, `latitude`) VALUES
(1, 'Nepal', 3500, 'Pack your bags and boots and explore endless trails', 'nepal.jpg', '85.333336', '27.700001'),
(2, 'Peru', 2800, 'Follow the path of the ancient Inka trails', 'peru.jpg', '-72.544960', '-13.163141'),
(3, 'Sri Lanka', 3000, 'Endless beaches and waves for surfing', 'SriLanka.jpg', '80.771797', '7.873054'),
(4, 'Turkey', 1800, 'Enjoy breathtaking moments at the gates of Asia', 'Anatolia.jpg', '32.859741', '39.933365'),
(5, 'Iceland', 3200, 'You know what they say - expect the unexpected!', 'iceland.jpg', '-21.935848', '64.141293'),
(6, 'USA', 3100, 'A roadtrip through the West Coast? - let\'s go!', 'usa.jpg', '37.733795', '-122.446747');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
