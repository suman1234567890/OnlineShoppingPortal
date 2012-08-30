-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2011 at 06:16 PM
-- Server version: 5.1.43
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tcs_shoppingportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE IF NOT EXISTS `accessories` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) NOT NULL,
  `ItemPrice` varchar(10) NOT NULL,
  `ItemUrl` varchar(40) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`Sno`, `ItemName`, `ItemPrice`, `ItemUrl`) VALUES
(1, 'A1', '10.00', 'accessories/1.jpg'),
(2, 'A2', '20.00', 'accessories/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE IF NOT EXISTS `clothes` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) NOT NULL,
  `ItemPrice` varchar(50) NOT NULL,
  `ItemUrl` varchar(50) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Sno`, `ItemName`, `ItemPrice`, `ItemUrl`) VALUES
(1, 'C1', '10.00', 'clothes/3.jpg'),
(2, 'C2', '11.00', 'clothes/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mobphone`
--

CREATE TABLE IF NOT EXISTS `mobphone` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(50) NOT NULL,
  `ItemPrice` varchar(50) NOT NULL,
  `ItemUrl` varchar(50) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mobphone`
--

INSERT INTO `mobphone` (`Sno`, `ItemName`, `ItemPrice`, `ItemUrl`) VALUES
(1, 'M1', '20.00', 'mobphone/5.jpg'),
(2, 'M2', '50.00', 'mobphone/6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderinprocess`
--

CREATE TABLE IF NOT EXISTS `orderinprocess` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `orderinprocess`
--


-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `Sno` int(10) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `UserPass` varchar(100) NOT NULL,
  PRIMARY KEY (`Sno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`Sno`, `UserName`, `UserPass`) VALUES
(1, 'Admin', 'Admin'),
(2, 'user', 'user');
