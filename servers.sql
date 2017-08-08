-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 015, 2017 at 02:49 AM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `cpu` varchar(150) NOT NULL,
  `ram` int(3) NOT NULL,
  `hdd_capacity` int(4) NOT NULL,
  `storage_type` varchar(50) NOT NULL,
  `raid` varchar(50) NOT NULL,
  `bandwidth` int(3) NOT NULL,
  `network_speed` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servers`
--

INSERT INTO `servers` (`id`, `country`, `city`, `manufacturer`, `cpu`, `ram`, `hdd_capacity`, `storage_type`, `raid`, `bandwidth`, `network_speed`) VALUES
(1, 'Canada', 'Montreal', 'Intel', 'Xeon E3-1230V2', '8', '1000', 'HDD', 'SW', '0', '100'),
(2, 'Canada', 'Quebec', 'Intel', 'Xeon E3-1230V2', '16', '1000', 'HDD', 'SW', '33', '100'),
(3, 'Canada', 'Sherbrooke', 'Intel', 'Xeon E3-1230V3', '16', '256', 'SSD', 'SW', '10', '100'),
(4, 'Canada', 'Montreal', 'Intel ', 'Xeon E3-1230V3', '8', '500', 'HDD ', 'None', '10', '1000');






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
