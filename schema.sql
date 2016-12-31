-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 31, 2016 at 04:27 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `expData`
--

CREATE TABLE IF NOT EXISTS `expData` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Experience` text NOT NULL,
  `City` varchar(255) NOT NULL,
  `Rate` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `expData`
--

INSERT INTO `expData` (`ID`, `Name`, `Experience`, `City`, `Rate`) VALUES
(12, 'testing data 1 dhanaulti', 'best place i ever seen !!\r\n', 'Dhanaulti', 4),
(13, 'testing data 1 mussoorie', 'really you must you there...!!! atleast once toh!', 'Mussoorie', 3),
(14, 'testing data 2 mussoorie', 'mussoories is nice place to hang out\r\n', 'Mussoorie', 5),
(15, 'testing data 2  dhanault', 'cool place.', 'Dhanaulti', 3),
(16, 'testing data 3 mussoorie', 'so pollution i dont like this place ', 'Mussoorie', 2),
(17, 'testing data 4 mussoorie', 'cool i liked this place very much !!', 'Mussoorie', 5),
(18, 'YDL', '101000101010100011 understand lol', 'Mussoorie', 3),
(21, 'Naman', 'what a cool place is!!!!', 'Mussoorie', 4),
(22, 'Testing data 1 Rishikesh', 'hmm its really nice holy place.!!', 'Rishikesh', 4),
(23, 'testing data 2 rishi', 'i dont like this place too religious !!', 'Rishikesh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE IF NOT EXISTS `suggestions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`ID`, `Name`, `Email`, `Message`) VALUES
(1, 'Testing data 1', 'ydlamba@gmail.com', 'this is cool man!'),
(2, 'Testing data 2', 'yashdev18@gmail.com', 'hello is this working?'),
(3, 'Testing data 3', 'bla@cool.com', 'nice man is that u made?'),
(4, 'Testing data 4', 'new@bla.com', 'bla bla bla bla'),
(5, '', '', ''),
(6, 'Daily user', 'user@sds.com', 'this website helped with a lot thank you'),
(7, 'Naman', 'naman@yahoo.com', 'seems like but u have to work hard !!!!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
