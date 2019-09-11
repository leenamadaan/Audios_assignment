-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 29, 2019 at 05:47 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `audios`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `s_model` varchar(30) NOT NULL,
  `s_quality` varchar(15) NOT NULL,
  `s_remarks` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `s_model`, `s_quality`, `s_remarks`) VALUES
('Pushpraj', '9650514538', 'pushpraj@gmail.com', 'S910', 'below average', 'pricing and reviews about the products\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`email`) VALUES
('Hardik@gmail.com'),
('leenamadaan451@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(4, 'Smart speaker''s combo', 'S1k98', 105.00, 'images/smart_combo.jpg'),
(5, 'Home Theatre', 'W125R', 70.00, 'images/white6.jpg'),
(6, 'Speaker', 'EK150', 55.00, 'images/ima.jpg'),
(7, 'Lamp speaker', 'LP129', 60.00, 'images/lamp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE IF NOT EXISTS `registration1` (
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`name`, `phone`, `address`, `email`, `password`) VALUES
('Leena', '8802121993', '66/7 Ashok Nagar', 'leena@audios.com', 'audios'),
('Prabhleen', '8700931653', '66/7 Ashok Nagar', 'pushpraj@gmail.com', '123456789');
