-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2011 at 11:02 AM
-- Server version: 5.1.58
-- PHP Version: 5.3.6-13ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autorepair`
--

-- --------------------------------------------------------

--
-- Table structure for table `automodels`
--

CREATE TABLE IF NOT EXISTS `automodels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `engines`
--

CREATE TABLE IF NOT EXISTS `engines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `make_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE IF NOT EXISTS `makes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mileages`
--

CREATE TABLE IF NOT EXISTS `mileages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `miles` int(11) NOT NULL,
  `vehicle_id` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicle_id` (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `repairs`
--

CREATE TABLE IF NOT EXISTS `repairs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned NOT NULL,
  `created` datetime NOT NULL,
  `finished` datetime NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `notes` text NOT NULL,
  `repairtype_id` int(10) unsigned NOT NULL,
  `mileage` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auto_id` (`vehicle_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `repairtypes`
--

CREATE TABLE IF NOT EXISTS `repairtypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(10) unsigned NOT NULL,
  `make_id` int(10) unsigned NOT NULL,
  `automodel_id` int(10) unsigned NOT NULL,
  `trim` varchar(20) NOT NULL,
  `engine_id` int(10) unsigned NOT NULL,
  `vin` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `purchaseDate` date NOT NULL,
  `saleDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
