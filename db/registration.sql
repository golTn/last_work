-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 01:02 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE IF NOT EXISTS `city_master` (
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`city_id`, `country_id`, `state_id`, `city_name`) VALUES
(1, 1, 1, 'surat'),
(4, 2, 5, 'california123'),
(6, 2, 2, 'ny123'),
(8, 0, 0, ''),
(9, 2, 0, ''),
(10, 0, 0, ''),
(11, 0, 0, ''),
(12, 1, 0, ''),
(13, 2, 0, ''),
(14, 2, 0, 'fg'),
(16, 1, 4, 'Pune'),
(17, 1, 4, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE IF NOT EXISTS `country_master` (
  `country_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `country_master`
--

INSERT INTO `country_master` (`country_id`, `country_name`) VALUES
(1, 'India'),
(4, 'Africa'),
(9, 'Rasiya'),
(10, 'China'),
(11, 'Australiya'),
(12, 'afghansitan'),
(13, 'pakistan'),
(14, 'xyz'),
(15, 'abc'),
(16, 'qerert'),
(17, 'qwert'),
(18, '12345678'),
(19, '2345');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_master`
--

CREATE TABLE IF NOT EXISTS `hotel_master` (
  `hotel_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `star` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `country_id` int(50) NOT NULL,
  `state_id` int(50) NOT NULL,
  `city_id` int(50) NOT NULL,
  PRIMARY KEY (`hotel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `hotel_master`
--

INSERT INTO `hotel_master` (`hotel_id`, `name`, `email`, `mobile`, `star`, `image`, `country_id`, `state_id`, `city_id`) VALUES
(7, 'wewrtgy', 'qwerf', 'werfgt', 0, '15099444_214236449017097_1809301749928820736_n.jpg', 1, 1, 1),
(8, '2e3rt45', 'email@gmail.com', '854123690', 5, 'OT-0461.JPG', 1, 4, 17),
(9, 'qwe', 'email@gmail.com', '4521369870', 6, 'OT-0455.JPG', 1, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE IF NOT EXISTS `login_master` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`user_id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `select` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_master`
--

CREATE TABLE IF NOT EXISTS `reg_master` (
  `reg_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `country_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg_master`
--

INSERT INTO `reg_master` (`reg_id`, `name`, `mobile`, `email`, `image`, `country_id`, `state_id`, `city_id`) VALUES
(3, 'keval', '7878827777', 'email@gmail.com', 'OT-0455.JPG', 2, 2, 2),
(4, 'krupali makadiya', '8000167777', 'krupalimakadiya123@gmail.com', 'OT-0461.JPG', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE IF NOT EXISTS `state_master` (
  `state_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`state_id`, `country_id`, `state_name`, `status`) VALUES
(1, 1, 'Gujarat', 0),
(2, 2, 'newyourk', 0),
(4, 1, 'Maharastra', 0),
(5, 2, 'california', 0),
(6, 2, 'cansas', 0),
(8, 0, 'frty', 0),
(10, 4, 'East Africa', 1),
(11, 4, 'west  Africa', 0),
(12, 9, 'south rasiya', 1),
(13, 9, 'north rasiya', 1),
(14, 10, 'manchurian', 0),
(15, 10, 'Chinease Bhel', 1),
(16, 11, 'A123', 0),
(18, 11, 'Aish ...', 0),
(19, 4, 'qASWEDRGTY', 1),
(20, 10, 'china123', 1),
(21, 1, 'india_1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
