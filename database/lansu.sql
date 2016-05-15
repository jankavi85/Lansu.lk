-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2016 at 10:07 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lansu`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
  `additem_id` int(64) NOT NULL AUTO_INCREMENT,
  `user_id` int(64) NOT NULL,
  `category` varchar(30) NOT NULL,
  `sub_category` varchar(30) NOT NULL,
  `item_type` varchar(30) NOT NULL,
  `district` varchar(25) NOT NULL,
  `district_area` varchar(25) NOT NULL,
  `condition` varchar(10) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` varchar(300) NOT NULL,
  `price` int(15) NOT NULL,
  `saling_type` varchar(15) NOT NULL,
  `delivery_option` varchar(15) NOT NULL,
  `closingtime` varchar(18) NOT NULL,
  `addingtime` varchar(18) NOT NULL,
  PRIMARY KEY (`additem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `placebid`
--

CREATE TABLE IF NOT EXISTS `placebid` (
  `bid_id` int(64) NOT NULL AUTO_INCREMENT,
  `additem_id` int(64) NOT NULL,
  `user_id` int(64) NOT NULL,
  `bid_price` int(15) NOT NULL,
  PRIMARY KEY (`bid_id`),
  KEY `additem_id` (`additem_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL,
  `user_email` varchar(64) NOT NULL,
  `user_password_hash` int(40) NOT NULL,
  `login_type` varchar(10) NOT NULL,
  `phone_number` int(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `user_activation` int(5) NOT NULL,
  `user_type` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password_hash`, `login_type`, `phone_number`, `address`, `user_activation`, `user_type`) VALUES
(14, 'kavi', 'kavi@gmail.com', 0, 'none', 0, '', 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additem`
--
ALTER TABLE `additem`
  ADD CONSTRAINT `additem_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `placebid`
--
ALTER TABLE `placebid`
  ADD CONSTRAINT `placebid_ibfk_1` FOREIGN KEY (`additem_id`) REFERENCES `additem` (`additem_id`),
  ADD CONSTRAINT `placebid_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
