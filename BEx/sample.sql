-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 19, 2014 at 05:34 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sampdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE IF NOT EXISTS `sample` (
  `file1` varchar(100) NOT NULL,
  `file2` varchar(100) NOT NULL,
  `file3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`file1`, `file2`, `file3`) VALUES
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.p', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.p', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.g'),
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.p', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.p', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.g'),
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.p', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.n', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.g'),
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.jpg', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.jpg', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.png'),
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.jpg', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.jpg', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.png'),
('/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id0.png', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id1.jpg', '/opt/lampp/htdocs/backend/BookUpload/114113089/114113089id2.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
