-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2015 at 03:36 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob` varchar(20) NOT NULL,
  `college` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `event1` int(10) NOT NULL,
  `event2` int(10) NOT NULL,
  `event3` int(10) NOT NULL,
  `event4` int(10) NOT NULL,
  `event5` int(10) NOT NULL,
  `event6` int(10) NOT NULL,
  `wrk1` int(10) NOT NULL,
  `wrk2` int(10) NOT NULL,
  `wrk3` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`name`, `email`, `mob`, `college`, `password`, `event1`, `event2`, `event3`, `event4`, `event5`, `event6`, `wrk1`, `wrk2`, `wrk3`) VALUES
('Hari', 'yo@gmail.com', '8148593847', 'NIT', 'qwerty', 1, 1, 0, 0, 0, 0, 1, 0, 1),
('9999999999', 'rishav@gmail.com', '', 'VIT', 'qwerty', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('vartika', '114113089@nitt.edu', 'dd', 'ff', 'ff', 0, 0, 0, 0, 0, 0, 1, 0, 0),
('guy', 'guy@gmail.com', '8148789789', 'IIT', 'qwerty', 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Tushar', 'tushar@gmail.c', '9999999999', 'NIT', 'qwerty', 0, 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
