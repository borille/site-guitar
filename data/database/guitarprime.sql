-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2013 at 01:44 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guitarprime`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(50) NOT NULL,
  `adminPassword` varchar(32) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminId`, `adminName`, `adminPassword`) VALUES
(1, 'borille', '58e5c7b9fba0532e36e5cd4740e1f4c5');

-- --------------------------------------------------------

--
-- Table structure for table `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `instrumentId` int(11) NOT NULL AUTO_INCREMENT,
  `instrumentName` varchar(20) NOT NULL,
  PRIMARY KEY (`instrumentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `instrument`
--

INSERT INTO `instrument` (`instrumentId`, `instrumentName`) VALUES
(1, 'Guitar');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `languageId` int(11) NOT NULL AUTO_INCREMENT,
  `languageName` varchar(20) NOT NULL,
  PRIMARY KEY (`languageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`languageId`, `languageName`) VALUES
(1, 'Português'),
(2, 'English');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(100) NOT NULL,
  `userMail` varchar(100) NOT NULL,
  `userPassword` varchar(32) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userMail`, `userPassword`) VALUES
(1, 'borille', 'thiagoborille@gmail.com', '58e5c7b9fba0532e36e5cd4740e1f4c5'),
(3, 'claretimus', 'claretimus@gmail.com', '692c784846a2e1574709e921173d522c');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
