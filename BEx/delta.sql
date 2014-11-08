-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2014 at 03:23 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `delta`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookdetails`
--

CREATE TABLE IF NOT EXISTS `bookdetails` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(64) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `cost` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `cond` int(11) DEFAULT '0',
  `lastupdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hashtags` varchar(30) NOT NULL,
  `photos` varchar(30) NOT NULL,
  `status` int(11) DEFAULT '0',
  `lastseen` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `bookdetails`
--

INSERT INTO `bookdetails` (`book_id`, `username`, `bookname`, `author`, `cost`, `description`, `cond`, `lastupdated`, `hashtags`, `photos`, `status`, `lastseen`) VALUES
(39, 'ganyguru', 'sad', 'sad', 100, 'sdasdasddssssssssssssssssssssssaaaaaaadssssssssssssssssdadadasdsasssssssssssssdadadasdsasdasdasddssssssssssssssssssssssa', 1, '2014-09-19 08:48:06', 'MATH,GREWAL,GURU,', 'ganyguru/ganyguru391.png,', 4, '0000-00-00 00:00:00'),
(40, 'ganyguru', 'GAny', 'gany', 0, 'this is maths book', 1, '2014-09-23 13:22:25', 'MATH,GREWAL,', '', 1, '0000-00-00 00:00:00'),
(41, 'ganyguru', 'rish', 'rishi', 0, 'this is rishi maths book', 0, '2014-09-19 10:12:13', 'MATH,GREWAL,RISHI,', '', 0, '0000-00-00 00:00:00'),
(42, 'rishi88', 'Maths', 'Saranya', 0, 'hard cover maths book by saranya', 0, '2014-09-19 12:14:17', 'MATH,SARANYA,BOOKK,HARD,COVER,', 'rishi88/rishi88421.png,', 0, '0000-00-00 00:00:00'),
(44, 'ganyguru', 'sdf', 'sdf', 0, 'hi m sdf  sdf ', 0, '2014-09-19 13:49:20', 'SDF,SDF,', '', 0, '0000-00-00 00:00:00'),
(45, '', '', '', 0, '', 0, '2014-09-23 13:20:33', '', '', 0, '2014-09-23 13:20:33'),
(46, '', '', '', 0, '', 0, '2014-09-23 13:52:13', '', '', 0, '2014-09-23 13:52:13'),
(47, '', '', '', 0, '', 0, '2014-09-23 14:05:00', '', '', 0, '2014-09-23 14:05:00'),
(48, '', '', '', 0, '', 0, '2014-10-26 14:21:05', '', '', 0, '2014-10-26 14:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE IF NOT EXISTS `coupon` (
  `tokenno` int(11) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `user` text NOT NULL,
  `item` text NOT NULL,
  `used` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`tokenno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`tokenno`, `date`, `user`, `item`, `used`) VALUES
(1, '2014-07-22 15:46:35', 'Ganesh', 'I001', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `cust_details`
--

CREATE TABLE IF NOT EXISTS `cust_details` (
  `uname` text NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `sex` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_details`
--

INSERT INTO `cust_details` (`uname`, `pass`, `name`, `sex`) VALUES
('gany', 'a1872e333d0e52644f6125da2276530f7ebe5e77', 'Ganesh', 'm'),
('admin', '3d44f0a6bc7cf52a225a0e14d289bec2f3833c33', 'Administrator', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `cust_order`
--

CREATE TABLE IF NOT EXISTS `cust_order` (
  `orderno` int(11) NOT NULL AUTO_INCREMENT,
  `itemno` text NOT NULL,
  `item` text NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `tprice` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `type` char(1) NOT NULL,
  `did` char(1) NOT NULL DEFAULT 'n',
  `user` text NOT NULL,
  `addr` longtext,
  `plcd` char(1) NOT NULL DEFAULT 'n',
  `delvd` char(1) NOT NULL DEFAULT 'n',
  PRIMARY KEY (`orderno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `cust_order`
--

INSERT INTO `cust_order` (`orderno`, `itemno`, `item`, `price`, `qty`, `tprice`, `date`, `type`, `did`, `user`, `addr`, `plcd`, `delvd`) VALUES
(16, 'I004', 'Pongal(300gms.)', 30, 1, 30, '2014-07-19 15:05:28', 't', 'y', 'Ganesh', 'sdas', 'y', 'y'),
(17, 'I006', 'PBM', 70, 1, 70, '2014-07-19 15:05:36', 't', 'y', 'Ganesh', 'asdas', 'y', 'y'),
(18, 'I010', 'Fish Fry', 120, 1, 120, '2014-07-19 15:07:35', 't', 'y', 'Ganesh', 'jj', 'y', 'y'),
(19, 'I007', 'Chicken Manchu.', 80, 1, 80, '2014-07-19 15:07:42', 't', 'y', 'Ganesh', 'sdf', 'y', 'y'),
(20, 'I013', 'Pizza', 70, 1, 70, '2014-07-19 15:07:54', 't', 'y', 'Ganesh', 'sdfsdf', 'y', 'y'),
(21, 'I011', 'Veg Burger', 50, 1, 50, '2014-07-19 15:08:05', 't', 'y', 'Ganesh', 'sdfsdf', 'y', 'y'),
(22, 'I002', 'Dosa(1 Nos.)', 20, 1, 20, '2014-07-19 15:09:25', 't', 'y', 'Ganesh', 'dsfdsf', 'y', 'y'),
(23, 'I009', 'Chicken Tikka', 200, 1, 200, '2014-07-19 15:10:07', 't', 'y', 'Ganesh', 'xzcxzc', 'y', 'y'),
(24, 'I012', 'Chic. Burger', 80, 1, 80, '2014-07-19 15:10:17', 't', 'y', 'Ganesh', 'zxc', 'y', 'y'),
(25, 'I007', 'Chicken Manchu.', 80, 1, 80, '2014-07-19 15:12:48', 't', 'y', 'Ganesh', 'asdasd', 'y', 'y'),
(26, 'I013', 'Pizza', 70, 1, 70, '2014-07-19 15:12:57', 't', 'y', 'Ganesh', 'asdasd', 'y', 'y'),
(27, 'I015', 'Spaghetti', 80, 1, 80, '2014-07-19 15:13:06', 't', 'y', 'Ganesh', 'asdas', 'y', 'y'),
(28, 'I013', 'Pizza', 70, 4, 280, '2014-07-19 18:26:41', 'h', 'y', 'Ganesh', 'dsfsdf', 'y', 'y'),
(29, 'I011', 'Veg Burger', 50, 1, 50, '2014-07-19 18:27:08', 't', 'y', 'Ganesh', 'asdasd', 'y', 'y'),
(30, 'I017', 'Coke(200ml)', 10, 10, 100, '2014-07-19 18:27:26', 'h', 'y', 'Ganesh', 'zxczxc', 'y', 'y'),
(31, 'I010', 'Fish Fry', 120, 2, 240, '2014-07-20 18:19:47', 't', 'y', 'Ganesh', 'sdfds', 'y', 'y'),
(32, 'I002', 'Dosa(1 Nos.)', 20, 1, 20, '2014-07-20 18:19:55', 't', 'y', 'Ganesh', 'sdf', 'y', 'y'),
(33, 'I013', 'Pizza', 70, 2, 140, '2014-07-21 18:51:50', 't', 'y', 'Ganesh', 'zzz', 'y', 'y'),
(34, 'I003', 'Poori(2 Nos.)', 25, 1, 25, '2014-07-22 10:58:21', 't', 'y', 'Ganesh', 'sdasda', 'y', 'y'),
(35, 'I013', 'Pizza', 70, 4, 280, '2014-07-22 11:53:29', 'h', 'y', 'Ganesh', 'sasxasx', 'y', 'y'),
(36, 'I010', 'Fish Fry', 120, 3, 360, '2014-07-22 17:09:11', 'h', 'y', 'Ganesh', 'erertrt', 'y', 'y'),
(37, 'I009', 'Chicken Tikka', 200, 1, 200, '2014-07-22 17:09:32', 't', 'y', 'Ganesh', 'sdfd', 'y', 'y'),
(38, 'I007', 'Chicken Manchu.', 80, 2, 160, '2014-07-22 17:12:38', 'h', 'y', 'Ganesh', 'wefwe', 'y', 'y'),
(40, 'I003', 'Poori(2 Nos.)', 25, 3, 75, '2014-07-22 18:43:01', 't', 'y', 'Ganesh', 'svdsvsd', 'y', 'y'),
(41, 'I007', 'Chicken Manchu.', 80, 2, 160, '2014-07-22 18:43:10', 'h', 'y', 'Ganesh', 'dscd', 'y', 'y'),
(43, 'I010', 'Fish Fry', 120, 1, 120, '2014-07-22 18:54:50', 't', 'y', 'Ganesh', 'wef', 'y', 'y'),
(44, 'I007', 'Chicken Manchu.', 80, 2, 160, '2014-07-23 17:57:13', 'h', 'y', 'Ganesh', 'wefwe', 'y', 'y'),
(46, 'I003', 'Poori(2 Nos.)', 25, 4, 100, '2014-07-23 19:39:55', 'h', 'y', 'Ganesh', 'asxsx', 'y', 'y'),
(47, 'I002', 'Dosa(1 Nos.)', 20, 2, 40, '2014-07-24 13:10:00', 't', 'y', 'Ganesh', 'dfsdf', 'y', 'y'),
(50, 'I003', 'Poori(2 Nos.)', 25, 1, 25, '2014-08-12 01:47:42', 't', 'y', 'Ganesh', 'sxcashhh', 'y', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `Slot` text NOT NULL,
  `Code` varchar(10) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Prof` varchar(60) NOT NULL,
  `Credits` int(11) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(10) NOT NULL,
  `dept` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Slot`, `Code`, `Subject`, `Prof`, `Credits`, `Email`, `date`, `time`, `venue`, `dept`) VALUES
('F', 'CE281', 'STRENGTH OF MATERIALS', ' DR. B. RAVISANKAR/MME', 3, 'brs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CE281', 'STRENGTH OF MATERIALS', 'PROF. N. SIVASHANMUGAM/MECH', 3, 'brs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CE282', 'FLUID MECHANICS AND MACHINERY', 'DR. K.R. BALASUBRAMANIAN/MECH', 3, 'krbala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EC217', 'APPLIED ELECTRONICS ENGINEERING', 'HOD', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EC219', 'APPLIED ELECTRONICS', 'THE HOD/ECE', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EE223', 'APPLIED ELECTRICAL ENGINEERING', 'PROF. P. SRINIVASRAO NAIK/DR. P. RAJA/EEE', 3, 'praja@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA201', 'MATHEMATICS FOR  PRODUCTION ENGINEEERS', 'DR. R. PONALAGUSAMY/MATHS', 3, 'rpalagu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MA205', 'TRANSFORMS AND PARTIAL DIFFERENTIAL EQUATIONS', 'THE HOD/MATHS', 3, 'nalla@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA211', 'SPECIAL FUNCTIONS AND STATISTICS', 'DR.R.RAVINDRAN', 3, 'ravir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'ME203', 'ENGINEERING THERMODYNAMICS', 'DR V. MARIAPPAN /MECH', 4, 'vmari@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'THE HOD/MECH', 3, 'suthakar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MT207', 'METTALURGICAL THERMODYNAMICS', 'MR. GOWTHAM PRAKASH/MME', 4, '', '0000-00-00', '00:00:00', '', ''),
('G', 'MT209', 'MINERAL PROCESSING AND METALLURGICAL ANALSIS', 'DR. R. JOHN FELIX/MME', 3, '', '0000-00-00', '00:00:00', '', ''),
('E', 'MT213', 'PHYSICAL METALLURGY', 'DR. V. MUTHUPANDI/MME', 4, 'vmuthu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PH211', 'ELECTRICAL, ELECTRONIC AND MAGNETIC MATERIALS', 'MR. RAMAKRISHNAN/MME', 3, '', '0000-00-00', '00:00:00', '', ''),
('B', 'PR201', 'CASTING TECHNOLOGY', 'DR. D.LENIN SINGARAVELU/PROD', 3, 'dlenin@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'PR203', 'MACHINING TECHNOLOGY', 'DR. T. SELVARAJ/PRO', 3, 'tselva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PR205', 'METALLURGY AND MATERIALS ENGINEERING', 'DR. C. SATHYANARAYANAN/PRO', 3, 'csathiya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('G', 'PR207', 'MECHANICS OF MATERIALS', 'DR. C. VELMURUGAN/PRO', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'PR221', 'PRODUCTION TECHNOLOGY', 'DR C. SATHYANARAYANAN/PROD', 3, 'csathiya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'IC203', 'CIRCUIT THEORY', 'DR A. RAMAKALYAN/ICE', 3, 'rkalyn@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'IC201', 'SENSORS AND TRANSDUCERS', 'DR/ M. UMPATHY/DR. G. UMA/ICE', 3, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'IC205', 'DIGITAL TECHNIQUES', 'DR. D. EZHILARAS/ICE', 3, 'ezhil@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'EE225', 'APPLIED ELECTRICAL ENGINEERING LAB', 'DR. P. RAJA/EEE', 1, 'praja@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CL209', 'TECHNICAL ANALYSIS LAB', 'DR M. ARIVAZHAGAN/ DR. ANAND BABU DESAMALA/CHL', 2, 'ariva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE211', 'STRENGTH OF MATERIALS AND CONCRETE LAB', 'MRS. R. ARACHELVI/ DR. M. THAYAPRABA/CIVIL', 2, 'chelvi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('W', 'CE213', 'SURVEY LAB', 'DR. S. SARAVANAN/ MR .N. SURENDRAN/CIVIL', 2, 'ssaravanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CS213', 'DATA STRUCTURES LABORATORY', 'MR R. MOHAN/ MS. NANDHINI/ MR. KUNWAR SINGH/ CSE', 2, 'kunwar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS215', 'DIGITAL SYSTEMS DESIGN LABORATORY', 'MS. M.BRINDHA/ T.K. RAMESH BABU/ MS. B. SHAMEEDA BEGUM/CSE', 2, 'brindham@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'EC211', 'DEVICES AND NETWORKS LABORATORY', 'MS. BINDUSHA AND MS. ABANAH/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'EC213', 'DIGITAL ELECTRONICS LABORATORY', 'DR. R. MALMATHANRAJ/ECE', 2, 'rmathan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE285', 'THERMODYNAMICS AND FLUID MECHANICS LAB', 'DR. R.ANAND/ DR. S. VENKATACHALAPATHY/MECH', 2, 'anandachu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC207', 'DEVICES AND CIRCUITS LAB', 'DR. K. DHANALAKSHMI/ICE', 2, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE283', 'STRENGTH OF MATERIALS', 'PROF. S.S. ARULAPPAN/DR. S. SHANMUGAM/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'ME2205', 'MACHINE DRAWING', 'DR. K. SANKARANARAYANASAMY/MECH', NULL, 'ksnsamy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'PR211', 'MANUFACTURING PROCESS LAB', 'DR. V. ANANDAKRISHNAN/DR. D.LENIN SINGARAVELLU/PRO', NULL, 'krishna@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('X', 'ME311', 'FLUID MACHINERY AND THERMAL ENGINEERING LAB', 'DR.K.R.BALASUBRAMANIAM/ PROF. M. SHAHUL HAMEED/MECH', NULL, 'krbala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CL315', 'TECHNICAL ANALYSIS LAB', 'DR. A. SUBATHIRA/ DR PRASANNA RANI/ DR ANANDBABU DESMALA/CHL', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CHL', 'MECHANICAL OPERATIONS LAB', 'DR. J. SARAT CHANDRA BABU/ K.N.SHEEBA/CHL', 2, 'sarat@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE315', 'ENVIRONMENTAL ENGINEERING LAB', 'DR.R.GANDHIMATI/CIVIL', 2, 'rgmathii@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE313', 'FLUID MECHANICS LAB', 'DR.R.MANJULA/CIVIL', 2, 'manju@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS315', 'SYTEMS PROGRAMMING LAB', 'MS.S.PRIYA/MS.R.MOHAN/CSE', 2, 'rmohan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS313', 'MICROPROCESSOR SYSTEMS LAB', 'MS.S.JAYA NIRMALA/MR.J.PRAVEEN KUMAR/MR.A SANTHANA VIJAYAN/C', 2, 'sjaya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC315', 'DIGITAL SIGNAL PROCESSING LAB', 'PROF. M.BHASKAR/MR.E.S.GOPI/ECE', 2, 'bhaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC313', 'ANALOGY INTEGRATED CIRCUITS', 'MS.S.DEVALAKSHMI/ MS.V.SUDHA/ECE', 2, 'deiva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'IC311', 'ELECTRONICS CIRCUITS LAB', 'DR. S.NARAYANAN/ MS. V.SRIDEVI/ICE', 2, 'narayanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC313', 'INSTRUMATION LAB', 'DR.B.VASUKI/ICE', 2, 'bvas@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P1', 'PR331', 'PRODUCTION DRAWING AND ESTIMATION COST', 'THE HOD/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('P2,X,Y', 'ME309', 'DYNAMICS LAB', 'DR. K. PANNERSELVAM/MECH', NULL, 'pannir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q2&Q2', 'IC317', 'MECHATRONICS LAB', 'MR.K.SARAN KUMAR/MECH', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'PR331', 'FOUNDRY AND WELDING LAB', 'DR.C.ANAND CHAIRMAN/MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'MT315', 'MECHANICAL TESTING LAB', 'DR.K.SIVAPRASAD/MR.R.GOWTHAM PRAKASH/MME', 2, 'ksp@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'PR311', 'MACHINE DRAWING PRACTICE', 'MR.P.SENTHIL/DR.V.SENTHIL KUMAR.MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q2', 'ME331', 'THERMAL ENGINEERING AND METROLOGY LAB', 'PROF.NANDA NAIK KORRA/DR.AR VEERAPPAN/MECH', NULL, 'aveer@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'CL301', 'CHEMICAL REACTION ENGINEERING', 'DR M. MATHESWARAN/CHL', 3, 'matheswaran@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CL311', 'BIOCHEMICAL ENGINEERING', 'DR.M. ARIVAZHAGAN/CHL', 3, 'ariva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CL309', 'HEAT TRANSFER', 'DR. P. KALAICHELVI/CHL', 3, 'kalai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'CL307', 'MASS TRANSFER', 'DR.T. SIVASANKAR/CHL', 3, 'ssankar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CL303', 'ADVANCED PROGRAMMING LANGUAGES C++', 'MS.R. ESWARI/CHL', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CL305', 'MATERIAL TACHNOLOGY', 'MR.N.SAMSUDEEN/CHL', 3, 'samsudeen@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'CE301', 'ENVIRONMENTAL ENGINEERING-II', 'DR. G. SWAMINATHAN/CIVIL', 3, 'gs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CE303', 'STRUCTURAL ANALYSIS-I', 'DR.C. NATRAJAN/CIVIL', 3, 'nataraj@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CE309', 'HYDRAULIC MACHINERY', 'MR.N. SURENDRAN/CIVIL', 3, '', '0000-00-00', '00:00:00', '', ''),
('D', 'CE305', 'CONCRETE STRUCTURES-1', 'PROF.R.JAYASANKAR/CIVIL', 4, 'rj@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CE311', 'ADVANCED STRENGTH OF MATERIALS ', 'DR.M. THAYAPRABHA/CIVIL', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CE307', 'STEEL STRUCTURES-I', 'DR.K.BASKKAR/CIVIL', NULL, 'kbaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA304', 'PRINCIPLES OF OPERATIONS RESEARCH', 'DR. D.DEIVAMONEY', 3, 'selvam@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CS309', 'COMBINATORICS AND GRAPH THEORY', 'DR. K .VISWANATHAN IYER', 3, 'kvi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CS303', 'COMPUTER NETWORKS', 'DR.C.MALA/CSE', 3, 'mala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'CS307', 'SOFTWARE ENGINEERING', 'MS. M. BRINDHA/CSE', 3, 'brindham@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CS305', 'MICROPROCCESOR SYSTEMS', 'MR.J. PRAVEEN KUMAR/CSE', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CS301', 'SYSTEMS PROGRAMMING', 'MS.S.PRIYA/CSE', 3, '', '0000-00-00', '00:00:00', '', ''),
('A', 'EC301', 'STATISTICAL THEORY OF COMMUNICATION', 'MR E.S.GOPI/ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('B', 'EC307', 'ANTENNAS AND PROPAGATION', 'DR.D.SRIRAMKUMAR/ECE', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'EC311', 'ADVANCED MICROPROCCESOR', 'MS. R. THILAGAVATHY/ECE', 3, 'thilagavathy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EC309', 'ANALOG INTEGRATED CIRCUITS', 'MS.S.DEIVALAKSHMI/ECE', 3, 'deiva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'EC303', 'DIGITAL SIGNAL PROCESSORS AND APPLICATIONS', 'PROF.M.BHASKAR/ECE', 3, 'bhaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'EC305', 'COMMUNICATION THEORY', 'MS.N.GUNAVATHI\\ECE', 3, 'gunavathi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'EE301', 'POWER SYSTEM ANALYSIS', 'DR.M. JAYA BHARATA REDDY\\EEE', 4, 'jbreddy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EE303', 'CONTROL SYSTEMS', 'DR. V. SANKARANARAYANAN\\EEE', 3, 'vsankar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'EE305', 'LINEAR INTEGRATED CIRCUITS', 'DR S.ARUL DANIEL/EEE', 3, 'daniel@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EE307', 'HIGH VOLTAGE ENGINEERING', 'MS. D. GLORY REBEKAH/EEE', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'EE309', 'DATA STRUCTURES AND C++', 'DR. S.SUDHA', 3, 'sudha@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'EC319', 'COMMUNICATION SYSTEMS', 'THE HOD\\ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('A', 'EC317', 'PRINCIPLES OF COMMUNICATION SYSTEMS', 'MRS .R. PANDEESWARI\\ECE', 3, 'rpands@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'IC303', 'DATA STRUCTURES AND ALGORITHMS', 'DR.MICHAEL AROCK\\CA', 3, 'michael@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'IC301', 'INDUSTRIAL INSTRUMENTATION-II', 'DR.B. VASUKI\\ICE', 3, 'bvas@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'IC307', 'DIGITAL SIGNAL PROCESSING ', 'THE HOD\\ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('E', 'IC305', 'LINEAR INTEGRATED CIRCUITS', 'DR.S. NARYANAN\\ICE', 2, 'narayanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'IC309', 'CONTROL SYSTEMS', 'DR. K. DHANALAKSHMI/ICE', 3, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'ME303', 'HEAT AND MASS TRANSFER', 'DR. S. SURESH\\/MECH', NULL, 'ssuresh@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'ME307', 'ANALYSIS AND DESIGN OF MACHINE COMPONENTS', 'DR. T.RAMESH\\MECH', NULL, 'tramesh@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MA301', 'NUMERICAL METHODS', 'DR. P .SAIKRISHNAN\\MECH', NULL, 'psai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'ME305', 'MECHANICS OF MACHINES-II', 'DR.K. PANNERSELVAM/MECH', NULL, 'pannir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'IC315', 'MECHATRONICS', 'MR.K. SARAN KUMAR\\MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('F', 'ME301', 'COMPRESSIBLE FLOW AND JET PROPULSION', 'DR. .R.B.ANAND/MECH', NULL, 'rbanand@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MT305', 'POLYMERS AND COMPOSITES', 'DR. .V.SURIYANARAYANAN/MR.C. ANAND CHAIRMAN/MME', 3, 'suri@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('M', 'MT307', 'MATERIALS JOINING TECHNOLOGY', 'MR. S.JEROME', 3, 'jerome@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MT309', 'MECHANICAL BEHAVIOUR OF MATERIALS', 'DR.K. SIVAPRASAD/MME', 3, 'ksp@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'MT301', 'METAL CASTING TECHNOLOGY', 'DR .S.P. KUMARESH BABU/MME', 3, 'babu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CA351', 'C++ AND UNIX', 'MRS. S.SANGEETHA/CA', 3, 'sangeetha@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'MT303', 'IRON MAKING AND STEEL MAKING', 'DR.S. RAMAN SANKARANARAYANAN/MME', 4, 'raman@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA303', 'APPLIED STATISTICS', 'THE HOD/MATHS', NULL, '', '0000-00-00', '00:00:00', '', ''),
('B', 'PR301', 'DYNAMICS OF MACHINES', 'DR.V.ANANDAKRISHNAN/PRO', NULL, '', '0000-00-00', '00:00:00', '', ''),
('C', 'PR303', 'DESIGN OF MACHINE ELEMENTS', 'MR.P.SENTHIL/D.PALANISAMY/PRO', NULL, 'senthil@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PR305', 'NON TRADITIONAL MANUFACTURING PROCESS', 'DR.M.DURAI SELVAM/R. RAMESH/PRO', NULL, 'durai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'PR307', 'METROLOGY & QUALITY ASSURANCE', 'DR. D .LENIN SINGRAVELU/PRO', NULL, 'dlenin@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'PROF.M.SHAHUL HAMEED/MECH', NULL, 'suthakar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'CE281', 'STRENGTH OF MATERIALS', ' DR. B. RAVISANKAR/MME', 3, 'brs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CE281', 'STRENGTH OF MATERIALS', 'PROF. N. SIVASHANMUGAM/MECH', 3, 'brs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CE282', 'FLUID MECHANICS AND MACHINERY', 'DR. K.R. BALASUBRAMANIAN/MECH', 3, 'krbala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EC217', 'APPLIED ELECTRONICS ENGINEERING', 'HOD', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EC219', 'APPLIED ELECTRONICS', 'THE HOD/ECE', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EE223', 'APPLIED ELECTRICAL ENGINEERING', 'PROF. P. SRINIVASRAO NAIK/DR. P. RAJA/EEE', 3, 'praja@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA201', 'MATHEMATICS FOR  PRODUCTION ENGINEEERS', 'DR. R. PONALAGUSAMY/MATHS', 3, 'rpalagu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MA205', 'TRANSFORMS AND PARTIAL DIFFERENTIAL EQUATIONS', 'THE HOD/MATHS', 3, 'nalla@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA211', 'SPECIAL FUNCTIONS AND STATISTICS', 'DR.R.RAVINDRAN', 3, 'ravir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'ME203', 'ENGINEERING THERMODYNAMICS', 'DR V. MARIAPPAN /MECH', 4, 'vmari@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'THE HOD/MECH', 3, 'suthakar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MT207', 'METTALURGICAL THERMODYNAMICS', 'MR. GOWTHAM PRAKASH/MME', 4, '', '0000-00-00', '00:00:00', '', ''),
('G', 'MT209', 'MINERAL PROCESSING AND METALLURGICAL ANALSIS', 'DR. R. JOHN FELIX/MME', 3, '', '0000-00-00', '00:00:00', '', ''),
('E', 'MT213', 'PHYSICAL METALLURGY', 'DR. V. MUTHUPANDI/MME', 4, 'vmuthu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PH211', 'ELECTRICAL, ELECTRONIC AND MAGNETIC MATERIALS', 'MR. RAMAKRISHNAN/MME', 3, '', '0000-00-00', '00:00:00', '', ''),
('B', 'PR201', 'CASTING TECHNOLOGY', 'DR. D.LENIN SINGARAVELU/PROD', 3, 'dlenin@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'PR203', 'MACHINING TECHNOLOGY', 'DR. T. SELVARAJ/PRO', 3, 'tselva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PR205', 'METALLURGY AND MATERIALS ENGINEERING', 'DR. C. SATHYANARAYANAN/PRO', 3, 'csathiya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('G', 'PR207', 'MECHANICS OF MATERIALS', 'DR. C. VELMURUGAN/PRO', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'PR221', 'PRODUCTION TECHNOLOGY', 'DR C. SATHYANARAYANAN/PROD', 3, 'csathiya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'IC203', 'CIRCUIT THEORY', 'DR A. RAMAKALYAN/ICE', 3, 'rkalyn@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'IC201', 'SENSORS AND TRANSDUCERS', 'DR/ M. UMPATHY/DR. G. UMA/ICE', 3, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'IC205', 'DIGITAL TECHNIQUES', 'DR. D. EZHILARAS/ICE', 3, 'ezhil@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'EE225', 'APPLIED ELECTRICAL ENGINEERING LAB', 'DR. P. RAJA/EEE', 1, 'praja@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CL209', 'TECHNICAL ANALYSIS LAB', 'DR M. ARIVAZHAGAN/ DR. ANAND BABU DESAMALA/CHL', 2, 'ariva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE211', 'STRENGTH OF MATERIALS AND CONCRETE LAB', 'MRS. R. ARACHELVI/ DR. M. THAYAPRABA/CIVIL', 2, 'chelvi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('W', 'CE213', 'SURVEY LAB', 'DR. S. SARAVANAN/ MR .N. SURENDRAN/CIVIL', 2, 'ssaravanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CS213', 'DATA STRUCTURES LABORATORY', 'MR R. MOHAN/ MS. NANDHINI/ MR. KUNWAR SINGH/ CSE', 2, 'kunwar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS215', 'DIGITAL SYSTEMS DESIGN LABORATORY', 'MS. M.BRINDHA/ T.K. RAMESH BABU/ MS. B. SHAMEEDA BEGUM/CSE', 2, 'brindham@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'EC211', 'DEVICES AND NETWORKS LABORATORY', 'MS. BINDUSHA AND MS. ABANAH/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'EC213', 'DIGITAL ELECTRONICS LABORATORY', 'DR. R. MALMATHANRAJ/ECE', 2, 'rmathan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE285', 'THERMODYNAMICS AND FLUID MECHANICS LAB', 'DR. R.ANAND/ DR. S. VENKATACHALAPATHY/MECH', 2, 'anandachu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC207', 'DEVICES AND CIRCUITS LAB', 'DR. K. DHANALAKSHMI/ICE', 2, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE283', 'STRENGTH OF MATERIALS', 'PROF. S.S. ARULAPPAN/DR. S. SHANMUGAM/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'ME2205', 'MACHINE DRAWING', 'DR. K. SANKARANARAYANASAMY/MECH', NULL, 'ksnsamy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'PR211', 'MANUFACTURING PROCESS LAB', 'DR. V. ANANDAKRISHNAN/DR. D.LENIN SINGARAVELLU/PRO', NULL, 'krishna@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('X', 'ME311', 'FLUID MACHINERY AND THERMAL ENGINEERING LAB', 'DR.K.R.BALASUBRAMANIAM/ PROF. M. SHAHUL HAMEED/MECH', NULL, 'krbala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CL315', 'TECHNICAL ANALYSIS LAB', 'DR. A. SUBATHIRA/ DR PRASANNA RANI/ DR ANANDBABU DESMALA/CHL', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CHL', 'MECHANICAL OPERATIONS LAB', 'DR. J. SARAT CHANDRA BABU/ K.N.SHEEBA/CHL', 2, 'sarat@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'CE315', 'ENVIRONMENTAL ENGINEERING LAB', 'DR.R.GANDHIMATI/CIVIL', 2, 'rgmathii@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE313', 'FLUID MECHANICS LAB', 'DR.R.MANJULA/CIVIL', 2, 'manju@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS315', 'SYTEMS PROGRAMMING LAB', 'MS.S.PRIYA/MS.R.MOHAN/CSE', 2, 'rmohan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS313', 'MICROPROCESSOR SYSTEMS LAB', 'MS.S.JAYA NIRMALA/MR.J.PRAVEEN KUMAR/MR.A SANTHANA VIJAYAN/C', 2, 'sjaya@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC315', 'DIGITAL SIGNAL PROCESSING LAB', 'PROF. M.BHASKAR/MR.E.S.GOPI/ECE', 2, 'bhaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC313', 'ANALOGY INTEGRATED CIRCUITS', 'MS.S.DEVALAKSHMI/ MS.V.SUDHA/ECE', 2, 'deiva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'IC311', 'ELECTRONICS CIRCUITS LAB', 'DR. S.NARAYANAN/ MS. V.SRIDEVI/ICE', 2, 'narayanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC313', 'INSTRUMATION LAB', 'DR.B.VASUKI/ICE', 2, 'bvas@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P1', 'PR331', 'PRODUCTION DRAWING AND ESTIMATION COST', 'THE HOD/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('P2,X,Y', 'ME309', 'DYNAMICS LAB', 'DR. K. PANNERSELVAM/MECH', NULL, 'pannir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q2&Q2', 'IC317', 'MECHATRONICS LAB', 'MR.K.SARAN KUMAR/MECH', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'PR331', 'FOUNDRY AND WELDING LAB', 'DR.C.ANAND CHAIRMAN/MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'MT315', 'MECHANICAL TESTING LAB', 'DR.K.SIVAPRASAD/MR.R.GOWTHAM PRAKASH/MME', 2, 'ksp@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('P', 'PR311', 'MACHINE DRAWING PRACTICE', 'MR.P.SENTHIL/DR.V.SENTHIL KUMAR.MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q2', 'ME331', 'THERMAL ENGINEERING AND METROLOGY LAB', 'PROF.NANDA NAIK KORRA/DR.AR VEERAPPAN/MECH', NULL, 'aveer@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'CL301', 'CHEMICAL REACTION ENGINEERING', 'DR M. MATHESWARAN/CHL', 3, 'matheswaran@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CL311', 'BIOCHEMICAL ENGINEERING', 'DR.M. ARIVAZHAGAN/CHL', 3, 'ariva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CL309', 'HEAT TRANSFER', 'DR. P. KALAICHELVI/CHL', 3, 'kalai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'CL307', 'MASS TRANSFER', 'DR.T. SIVASANKAR/CHL', 3, 'ssankar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CL303', 'ADVANCED PROGRAMMING LANGUAGES C++', 'MS.R. ESWARI/CHL', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CL305', 'MATERIAL TACHNOLOGY', 'MR.N.SAMSUDEEN/CHL', 3, 'samsudeen@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'CE301', 'ENVIRONMENTAL ENGINEERING-II', 'DR. G. SWAMINATHAN/CIVIL', 3, 'gs@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CE303', 'STRUCTURAL ANALYSIS-I', 'DR.C. NATRAJAN/CIVIL', 3, 'nataraj@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CE309', 'HYDRAULIC MACHINERY', 'MR.N. SURENDRAN/CIVIL', 3, '', '0000-00-00', '00:00:00', '', ''),
('D', 'CE305', 'CONCRETE STRUCTURES-1', 'PROF.R.JAYASANKAR/CIVIL', 4, 'rj@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CE311', 'ADVANCED STRENGTH OF MATERIALS ', 'DR.M. THAYAPRABHA/CIVIL', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CE307', 'STEEL STRUCTURES-I', 'DR.K.BASKKAR/CIVIL', NULL, 'kbaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA304', 'PRINCIPLES OF OPERATIONS RESEARCH', 'DR. D.DEIVAMONEY', 3, 'selvam@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'CS309', 'COMBINATORICS AND GRAPH THEORY', 'DR. K .VISWANATHAN IYER', 3, 'kvi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'CS303', 'COMPUTER NETWORKS', 'DR.C.MALA/CSE', 3, 'mala@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'CS307', 'SOFTWARE ENGINEERING', 'MS. M. BRINDHA/CSE', 3, 'brindham@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CS305', 'MICROPROCCESOR SYSTEMS', 'MR.J. PRAVEEN KUMAR/CSE', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'CS301', 'SYSTEMS PROGRAMMING', 'MS.S.PRIYA/CSE', 3, '', '0000-00-00', '00:00:00', '', ''),
('A', 'EC301', 'STATISTICAL THEORY OF COMMUNICATION', 'MR E.S.GOPI/ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('B', 'EC307', 'ANTENNAS AND PROPAGATION', 'DR.D.SRIRAMKUMAR/ECE', 3, 'srk@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'EC311', 'ADVANCED MICROPROCCESOR', 'MS. R. THILAGAVATHY/ECE', 3, 'thilagavathy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EC309', 'ANALOG INTEGRATED CIRCUITS', 'MS.S.DEIVALAKSHMI/ECE', 3, 'deiva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'EC303', 'DIGITAL SIGNAL PROCESSORS AND APPLICATIONS', 'PROF.M.BHASKAR/ECE', 3, 'bhaskar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'EC305', 'COMMUNICATION THEORY', 'MS.N.GUNAVATHI\\ECE', 3, 'gunavathi@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'EE301', 'POWER SYSTEM ANALYSIS', 'DR.M. JAYA BHARATA REDDY\\EEE', 4, 'jbreddy@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'EE303', 'CONTROL SYSTEMS', 'DR. V. SANKARANARAYANAN\\EEE', 3, 'vsankar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'EE305', 'LINEAR INTEGRATED CIRCUITS', 'DR S.ARUL DANIEL/EEE', 3, 'daniel@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'EE307', 'HIGH VOLTAGE ENGINEERING', 'MS. D. GLORY REBEKAH/EEE', 3, '', '0000-00-00', '00:00:00', '', ''),
('F', 'EE309', 'DATA STRUCTURES AND C++', 'DR. S.SUDHA', 3, 'sudha@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'EC319', 'COMMUNICATION SYSTEMS', 'THE HOD\\ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('A', 'EC317', 'PRINCIPLES OF COMMUNICATION SYSTEMS', 'MRS .R. PANDEESWARI\\ECE', 3, 'rpands@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'IC303', 'DATA STRUCTURES AND ALGORITHMS', 'DR.MICHAEL AROCK\\CA', 3, 'michael@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'IC301', 'INDUSTRIAL INSTRUMENTATION-II', 'DR.B. VASUKI\\ICE', 3, 'bvas@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'IC307', 'DIGITAL SIGNAL PROCESSING ', 'THE HOD\\ECE', 3, '', '0000-00-00', '00:00:00', '', ''),
('E', 'IC305', 'LINEAR INTEGRATED CIRCUITS', 'DR.S. NARYANAN\\ICE', 2, 'narayanan@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'IC309', 'CONTROL SYSTEMS', 'DR. K. DHANALAKSHMI/ICE', 3, 'dhanlak@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'ME303', 'HEAT AND MASS TRANSFER', 'DR. S. SURESH\\/MECH', NULL, 'ssuresh@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('B', 'ME307', 'ANALYSIS AND DESIGN OF MACHINE COMPONENTS', 'DR. T.RAMESH\\MECH', NULL, 'tramesh@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MA301', 'NUMERICAL METHODS', 'DR. P .SAIKRISHNAN\\MECH', NULL, 'psai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'ME305', 'MECHANICS OF MACHINES-II', 'DR.K. PANNERSELVAM/MECH', NULL, 'pannir@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'IC315', 'MECHATRONICS', 'MR.K. SARAN KUMAR\\MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('F', 'ME301', 'COMPRESSIBLE FLOW AND JET PROPULSION', 'DR. .R.B.ANAND/MECH', NULL, 'rbanand@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MT305', 'POLYMERS AND COMPOSITES', 'DR. .V.SURIYANARAYANAN/MR.C. ANAND CHAIRMAN/MME', 3, 'suri@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('M', 'MT307', 'MATERIALS JOINING TECHNOLOGY', 'MR. S.JEROME', 3, 'jerome@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('C', 'MT309', 'MECHANICAL BEHAVIOUR OF MATERIALS', 'DR.K. SIVAPRASAD/MME', 3, 'ksp@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'MT301', 'METAL CASTING TECHNOLOGY', 'DR .S.P. KUMARESH BABU/MME', 3, 'babu@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'CA351', 'C++ AND UNIX', 'MRS. S.SANGEETHA/CA', 3, 'sangeetha@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'MT303', 'IRON MAKING AND STEEL MAKING', 'DR.S. RAMAN SANKARANARAYANAN/MME', 4, 'raman@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('A', 'MA303', 'APPLIED STATISTICS', 'THE HOD/MATHS', NULL, '', '0000-00-00', '00:00:00', '', ''),
('B', 'PR301', 'DYNAMICS OF MACHINES', 'DR.V.ANANDAKRISHNAN/PRO', NULL, '', '0000-00-00', '00:00:00', '', ''),
('C', 'PR303', 'DESIGN OF MACHINE ELEMENTS', 'MR.P.SENTHIL/D.PALANISAMY/PRO', NULL, 'senthil@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('D', 'PR305', 'NON TRADITIONAL MANUFACTURING PROCESS', 'DR.M.DURAI SELVAM/R. RAMESH/PRO', NULL, 'durai@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('E', 'PR307', 'METROLOGY & QUALITY ASSURANCE', 'DR. D .LENIN SINGRAVELU/PRO', NULL, 'dlenin@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'PROF.M.SHAHUL HAMEED/MECH', NULL, 'suthakar@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('F', 'CE281', 'STRENGTH OF MATERIALS', ' DR. B. RAVISANKAR/MME', 3, 'brs.nitt.edu', '2014-09-04', '03:00:00', '', ''),
('C', 'CE281', 'STRENGTH OF MATERIALS', 'PROF. N. SIVASHANMUGAM/MECH', 3, 'nsiva@nitt.edu', '2104-09-03', '03:00:00', '', ''),
('E', 'CE282', 'FLUID MECHANICS AND MACHINERY', 'DR. K.R. BALASUBRAMANIAN/MECH', 3, 'krbala@nitt.edu', '2014-09-04', '10:30:00', '', ''),
('B', 'EC217', 'APPLIED ELECTRONICS ENGINEERING', 'HOD', 3, 'srk@nitt.edu', '2014-09-02', '03:00:00', '', ''),
('B', 'EC219', 'APPLIED ELECTRONICS', 'THE HOD/ECE', 3, 'srk@nitt.edu', '2014-09-02', '03:00:00', '', ''),
('D', 'EE223', 'APPLIED ELECTRICAL ENGINEERING', 'PROF. P. SRINIVASRAO NAIK/DR. P. RAJA/EEE', 3, 'praja@nitt.edu', '2104-09-03', '03:00:00', '', ''),
('A', 'MA201', 'MATHEMATICS FOR  PRODUCTION ENGINEEERS', 'DR. R. PONALAGUSAMY/MATHS', 3, 'rpalagu@nitt.edu', '2014-09-02', '10:30:00', '', ''),
('C', 'MA205', 'TRANSFORMS AND PARTIAL DIFFERENTIAL EQUATIONS', 'THE HOD/MATHS', 3, 'nalla@nitt.edu', '2104-09-03', '03:00:00', '', ''),
('A', 'MA211', 'SPECIAL FUNCTIONS AND STATISTICS', 'DR.R.RAVINDRAN', 3, '', '2014-09-02', '10:30:00', '', ''),
('E', 'ME203', 'ENGINEERING THERMODYNAMICS', 'DR V. MARIAPPAN /MECH', 4, 'vmari@nitt.edu', '2014-09-04', '10:30:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'THE HOD/MECH', 3, 'suthakar@nitt.edu', '2014-09-04', '01:30:00', '', ''),
('A', 'MT207', 'METTALURGICAL THERMODYNAMICS', 'MR. GOWTHAM PRAKASH/MME', 4, '', '2014-09-02', '10:30:00', '', ''),
('G', 'MT209', 'MINERAL PROCESSING AND METALLURGICAL ANALSIS', 'DR. R. JOHN FELIX/MME', 3, '', '2014-09-01', '10:30:00', '', ''),
('E', 'MT213', 'PHYSICAL METALLURGY', 'DR. V. MUTHUPANDI/MME', 4, 'vmuthu@nitt.edu', '2014-09-04', '10:30:00', '', ''),
('D', 'PH211', 'ELECTRICAL, ELECTRONIC AND MAGNETIC MATERIALS', 'MR. RAMAKRISHNAN/MME', 3, '', '2104-09-03', '03:00:00', '', ''),
('B', 'PR201', 'CASTING TECHNOLOGY', 'DR. D.LENIN SINGARAVELU/PROD', 3, '', '2014-09-02', '03:00:00', '', ''),
('C', 'PR203', 'MACHINING TECHNOLOGY', 'DR. T. SELVARAJ/PRO', 3, 'tselva@nitt.edu', '2104-09-03', '10:30:00', '', ''),
('D', 'PR205', 'METALLURGY AND MATERIALS ENGINEERING', 'DR. C. SATHYANARAYANAN/PRO', 3, 'csathiya@nitt.edu', '2104-09-03', '03:00:00', '', ''),
('G', 'PR207', 'MECHANICS OF MATERIALS', 'DR. C. VELMURUGAN/PRO', 3, '', '2014-09-01', '10:30:00', '', ''),
('F', 'PR221', 'PRODUCTION TECHNOLOGY', 'DR C. SATHYANARAYANAN/PROD', 3, 'csathiya@nitt.edu', '2014-09-04', '03:00:00', '', ''),
('D', 'IC203', 'CIRCUIT THEORY', 'DR A. RAMAKALYAN/ICE', 3, 'rkalyn@nitt.edu', '2104-09-03', '03:00:00', '', ''),
('E', 'IC201', 'SENSORS AND TRANSDUCERS', 'DR/ M. UMPATHY/DR. G. UMA/ICE', 3, 'guma@nitt.edu', '2014-09-04', '10:30:00', '', ''),
('F', 'IC205', 'DIGITAL TECHNIQUES', 'DR. D. EZHILARAS/ICE', 3, 'ezhil@nitt.edu', '2014-09-04', '03:00:00', '', ''),
('P', 'EE225', 'APPLIED ELECTRICAL ENGINEERING LAB', 'DR. P. RAJA/EEE', 1, 'praja@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CL209', 'TECHNICAL ANALYSIS LAB', 'DR M. ARIVAZHAGAN/ DR. ANAND BABU DESAMALA/CHL', 2, 'ariva@nitt.edu', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE211', 'STRENGTH OF MATERIALS AND CONCRETE LAB', 'MRS. R. ARACHELVI/ DR. M. THAYAPRABA/CIVIL', 2, '', '0000-00-00', '00:00:00', '', ''),
('W', 'CE213', 'SURVEY LAB', 'DR. S. SARAVANAN/ MR .N. SURENDRAN/CIVIL', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'CS213', 'DATA STRUCTURES LABORATORY', 'MR R. MOHAN/ MS. NANDHINI/ MR. KUNWAR SINGH/ CSE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS215', 'DIGITAL SYSTEMS DESIGN LABORATORY', 'MS. M.BRINDHA/ T.K. RAMESH BABU/ MS. B. SHAMEEDA BEGUM/CSE', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'EC211', 'DEVICES AND NETWORKS LABORATORY', 'MS. BINDUSHA AND MS. ABANAH/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'EC213', 'DIGITAL ELECTRONICS LABORATORY', 'DR. R. MALMATHANRAJ/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'CE285', 'THERMODYNAMICS AND FLUID MECHANICS LAB', 'DR. R.ANAND/ DR. S. VENKATACHALAPATHY/MECH', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC207', 'DEVICES AND CIRCUITS LAB', 'DR. K. DHANALAKSHMI/ICE', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'CE283', 'STRENGTH OF MATERIALS', 'PROF. S.S. ARULAPPAN/DR. S. SHANMUGAM/MECH', NULL, '', '0000-00-00', '03:00:00', '', ''),
('Q', 'ME2205', 'MACHINE DRAWING', 'DR. K. SANKARANARAYANASAMY/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'PR211', 'MANUFACTURING PROCESS LAB', 'DR. V. ANANDAKRISHNAN/DR. D.LENIN SINGARAVELLU/PRO', NULL, '', '0000-00-00', '00:00:00', '', ''),
('X', 'ME311', 'FLUID MACHINERY AND THERMAL ENGINEERING LAB', 'DR.K.R.BALASUBRAMANIAM/ PROF. M. SHAHUL HAMEED/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('P', 'CL315', 'TECHNICAL ANALYSIS LAB', 'DR. A. SUBATHIRA/ DR PRASANNA RANI/ DR ANANDBABU DESMALA/CHL', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CHL', 'MECHANICAL OPERATIONS LAB', 'DR. J. SARAT CHANDRA BABU/ K.N.SHEEBA/CHL', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'CE315', 'ENVIRONMENTAL ENGINEERING LAB', 'DR.R.GANDHIMATI/CIVIL', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CE313', 'FLUID MECHANICS LAB', 'DR.R.MANJULA/CIVIL', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS315', 'SYTEMS PROGRAMMING LAB', 'MS.S.PRIYA/MS.R.MOHAN/CSE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'CS313', 'MICROPROCESSOR SYSTEMS LAB', 'MS.S.JAYA NIRMALA/MR.J.PRAVEEN KUMAR/MR.A SANTHANA VIJAYAN/C', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC315', 'DIGITAL SIGNAL PROCESSING LAB', 'PROF. M.BHASKAR/MR.E.S.GOPI/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q1,X,Y', 'EC313', 'ANALOGY INTEGRATED CIRCUITS', 'MS.S.DEVALAKSHMI/ MS.V.SUDHA/ECE', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'IC311', 'ELECTRONICS CIRCUITS LAB', 'DR. S.NARAYANAN/ MS. V.SRIDEVI/ICE', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'IC313', 'INSTRUMATION LAB', 'DR.B.VASUKI/ICE', 2, '', '0000-00-00', '00:00:00', '', ''),
('P1', 'PR331', 'PRODUCTION DRAWING AND ESTIMATION COST', 'THE HOD/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('P2,X,Y', 'ME309', 'DYNAMICS LAB', 'DR. K. PANNERSELVAM/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('Q2&Q2', 'IC317', 'MECHATRONICS LAB', 'MR.K.SARAN KUMAR/MECH', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'PR331', 'FOUNDRY AND WELDING LAB', 'DR.C.ANAND CHAIRMAN/MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q', 'MT315', 'MECHANICAL TESTING LAB', 'DR.K.SIVAPRASAD/MR.R.GOWTHAM PRAKASH/MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('P', 'PR311', 'MACHINE DRAWING PRACTICE', 'MR.P.SENTHIL/DR.V.SENTHIL KUMAR.MME', 2, '', '0000-00-00', '00:00:00', '', ''),
('Q2', 'ME331', 'THERMAL ENGINEERING AND METROLOGY LAB', 'PROF.NANDA NAIK KORRA/DR.AR VEERAPPAN/MECH', NULL, '', '0000-00-00', '00:00:00', '', ''),
('A', 'CL301', 'CHEMICAL REACTION ENGINEERING', 'DR M. MATHESWARAN/CHL', 3, '', '2014-09-02', '09:00:00', '', ''),
('B', 'CL311', 'BIOCHEMICAL ENGINEERING', 'DR.M. ARIVAZHAGAN/CHL', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'CL309', 'HEAT TRANSFER', 'DR. P. KALAICHELVI/CHL', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'CL307', 'MASS TRANSFER', 'DR.T. SIVASANKAR/CHL', 3, '', '2104-09-03', '01:30:00', '', ''),
('E', 'CL303', 'ADVANCED PROGRAMMING LANGUAGES C++', 'MS.R. ESWARI/CHL', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'CL305', 'MATERIAL TACHNOLOGY', 'MR.N.SAMSUDEEN/CHL', 3, '', '2014-09-04', '01:30:00', '', ''),
('A', 'CE301', 'ENVIRONMENTAL ENGINEERING-II', 'DR. G. SWAMINATHAN/CIVIL', 3, '', '2014-09-02', '09:00:00', '', ''),
('B', 'CE303', 'STRUCTURAL ANALYSIS-I', 'DR.C. NATRAJAN/CIVIL', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'CE309', 'HYDRAULIC MACHINERY', 'MR.N. SURENDRAN/CIVIL', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'CE305', 'CONCRETE STRUCTURES-1', 'PROF.R.JAYASANKAR/CIVIL', 4, '', '2104-09-03', '01:30:00', '', ''),
('E', 'CE311', 'ADVANCED STRENGTH OF MATERIALS ', 'DR.M. THAYAPRABHA/CIVIL', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'CE307', 'STEEL STRUCTURES-I', 'DR.K.BASKKAR/CIVIL', NULL, '', '2014-09-04', '01:30:00', '', ''),
('A', 'MA304', 'PRINCIPLES OF OPERATIONS RESEARCH', 'DR. D.DEIVAMONEY', 3, '', '2014-09-02', '09:00:00', '', ''),
('B', 'CS309', 'COMBINATORICS AND GRAPH THEORY', 'DR. K .VISWANATHAN IYER', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'CS303', 'COMPUTER NETWORKS', 'DR.C.MALA/CSE', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'CS307', 'SOFTWARE ENGINEERING', 'MS. M. BRINDHA/CSE', 3, '', '2104-09-03', '01:30:00', '', ''),
('E', 'CS305', 'MICROPROCCESOR SYSTEMS', 'MR.J. PRAVEEN KUMAR/CSE', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'CS301', 'SYSTEMS PROGRAMMING', 'MS.S.PRIYA/CSE', 3, '', '2014-09-04', '01:30:00', '', ''),
('A', 'EC301', 'STATISTICAL THEORY OF COMMUNICATION', 'MR E.S.GOPI/ECE', 3, '', '2014-09-02', '09:00:00', '', ''),
('B', 'EC307', 'ANTENNAS AND PROPAGATION', 'DR.D.SRIRAMKUMAR/ECE', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'EC311', 'ADVANCED MICROPROCCESOR', 'MS. R. THILAGAVATHY/ECE', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'EC309', 'ANALOG INTEGRATED CIRCUITS', 'MS.S.DEIVALAKSHMI/ECE', 3, '', '2104-09-03', '01:30:00', '', ''),
('E', 'EC303', 'DIGITAL SIGNAL PROCESSORS AND APPLICATIONS', 'PROF.M.BHASKAR/ECE', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'EC305', 'COMMUNICATION THEORY', 'MS.N.GUNAVATHI\\ECE', 3, '', '2014-09-04', '01:30:00', '', ''),
('A', 'EE301', 'POWER SYSTEM ANALYSIS', 'DR.M. JAYA BHARATA REDDY\\EEE', 4, '', '2014-09-02', '09:00:00', '', ''),
('B', 'EE303', 'CONTROL SYSTEMS', 'DR. V. SANKARANARAYANAN\\EEE', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'EE305', 'LINEAR INTEGRATED CIRCUITS', 'DR S.ARUL DANIEL/EEE', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'EE307', 'HIGH VOLTAGE ENGINEERING', 'MS. D. GLORY REBEKAH/EEE', 3, '', '2104-09-03', '01:30:00', '', ''),
('F', 'EE309', 'DATA STRUCTURES AND C++', 'DR. S.SUDHA', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'EC319', 'COMMUNICATION SYSTEMS', 'THE HOD\\ECE', 3, '', '2014-09-04', '01:30:00', '', ''),
('A', 'EC317', 'PRINCIPLES OF COMMUNICATION SYSTEMS', 'MRS .R. PANDEESWARI\\ECE', 3, '', '2014-09-02', '09:00:00', '', ''),
('B', 'IC303', 'DATA STRUCTURES AND ALGORITHMS', 'DR.MICHAEL AROCK\\CA', 3, '', '2014-09-02', '01:30:00', '', ''),
('C', 'IC301', 'INDUSTRIAL INSTRUMENTATION-II', 'DR.B. VASUKI\\ICE', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'IC307', 'DIGITAL SIGNAL PROCESSING ', 'THE HOD\\ECE', 3, '', '2104-09-03', '01:30:00', '', ''),
('E', 'IC305', 'LINEAR INTEGRATED CIRCUITS', 'DR.S. NARYANAN\\ICE', 2, '', '2014-09-04', '09:00:00', '', ''),
('F', 'IC309', 'CONTROL SYSTEMS', 'DR. K. DHANALAKSHMI/ICE', 3, '', '2014-09-04', '01:30:00', '', ''),
('A', 'ME303', 'HEAT AND MASS TRANSFER', 'DR. S. SURESH\\/MECH', NULL, '', '2014-09-02', '09:00:00', '', ''),
('B', 'ME307', 'ANALYSIS AND DESIGN OF MACHINE COMPONENTS', 'DR. T.RAMESH\\MECH', NULL, '', '2014-09-02', '01:30:00', '', ''),
('C', 'MA301', 'NUMERICAL METHODS', 'DR. P .SAIKRISHNAN\\MECH', NULL, '', '2104-09-03', '09:00:00', '', ''),
('D', 'ME305', 'MECHANICS OF MACHINES-II', 'DR.K. PANNERSELVAM/MECH', NULL, '', '2104-09-03', '01:30:00', '', ''),
('E', 'IC315', 'MECHATRONICS', 'MR.K. SARAN KUMAR\\MECH', NULL, '', '2014-09-04', '09:00:00', '', ''),
('F', 'ME301', 'COMPRESSIBLE FLOW AND JET PROPULSION', 'DR. .R.B.ANAND/MECH', NULL, '', '2014-09-04', '01:30:00', '', ''),
('A', 'MT305', 'POLYMERS AND COMPOSITES', 'DR. .V.SURIYANARAYANAN/MR.C. ANAND CHAIRMAN/MME', 3, '', '2014-09-02', '09:00:00', '', ''),
('M', 'MT307', 'MATERIALS JOINING TECHNOLOGY', 'MR. S.JEROME', 3, '', '0000-00-00', '01:30:00', '', ''),
('C', 'MT309', 'MECHANICAL BEHAVIOUR OF MATERIALS', 'DR.K. SIVAPRASAD/MME', 3, '', '2104-09-03', '09:00:00', '', ''),
('D', 'MT301', 'METAL CASTING TECHNOLOGY', 'DR .S.P. KUMARESH BABU/MME', 3, '', '2104-09-03', '01:30:00', '', ''),
('E', 'CA351', 'C++ AND UNIX', 'MRS. S.SANGEETHA/CA', 3, '', '2014-09-04', '09:00:00', '', ''),
('F', 'MT303', 'IRON MAKING AND STEEL MAKING', 'DR.S. RAMAN SANKARANARAYANAN/MME', 4, '', '2014-09-04', '01:30:00', '', ''),
('A', 'MA303', 'APPLIED STATISTICS', 'THE HOD/MATHS', NULL, '', '2014-09-02', '09:00:00', '', ''),
('B', 'PR301', 'DYNAMICS OF MACHINES', 'DR.V.ANANDAKRISHNAN/PRO', NULL, '', '2014-09-02', '01:30:00', '', ''),
('C', 'PR303', 'DESIGN OF MACHINE ELEMENTS', 'MR.P.SENTHIL/D.PALANISAMY/PRO', NULL, '', '2104-09-03', '09:00:00', '', ''),
('D', 'PR305', 'NON TRADITIONAL MANUFACTURING PROCESS', 'DR.M.DURAI SELVAM/R. RAMESH/PRO', NULL, '', '2104-09-03', '01:30:00', '', ''),
('E', 'PR307', 'METROLOGY & QUALITY ASSURANCE', 'DR. D .LENIN SINGRAVELU/PRO', NULL, '', '2014-09-04', '09:00:00', '', ''),
('F', 'ME325', 'THERMAL ENGINEERING', 'PROF.M.SHAHUL HAMEED/MECH', NULL, 'suthakar@nitt.edu', '2014-09-04', '01:30:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `diner`
--

CREATE TABLE IF NOT EXISTS `diner` (
  `itemno` text NOT NULL,
  `item` text NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diner`
--

INSERT INTO `diner` (`itemno`, `item`, `price`) VALUES
('I001', 'Idly(2 Nos.)', 20),
('I002', 'Dosa(1 Nos.)', 20),
('I003', 'Poori(2 Nos.)', 25),
('I004', 'Pongal(300gms.)', 30),
('I005', 'Naan(2 Nos.)', 30),
('I006', 'PBM', 70),
('I007', 'Chicken Manchu.', 80),
('I008', 'Veg Manchu.', 60),
('I009', 'Chicken Tikka', 200),
('I010', 'Fish Fry', 120),
('I011', 'Veg Burger', 50),
('I012', 'Chic. Burger', 80),
('I013', 'Pizza', 70),
('I014', 'Pasta', 40),
('I015', 'Spaghetti', 80),
('I016', 'French Fries', 40),
('I017', 'Coke(200ml)', 10);

-- --------------------------------------------------------

--
-- Table structure for table `hash`
--

CREATE TABLE IF NOT EXISTS `hash` (
  `md5` varchar(64) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hash`
--

INSERT INTO `hash` (`md5`, `book_id`) VALUES
('bf8c144140b15befb8ce662632a7b76e', 0),
('bba78e7d3d6ea696bfef6e87a26a6c03', 0),
('d41d8cd98f00b204e9800998ecf8427e', 0),
('bf8c144140b15befb8ce662632a7b76e', 10),
('bba78e7d3d6ea696bfef6e87a26a6c03', 10),
('d41d8cd98f00b204e9800998ecf8427e', 10),
('65571aa0536447fb1cf47a2b5a98954b', 11),
('a4bf379804cc882f1c23c76d2c894999', 11),
('d41d8cd98f00b204e9800998ecf8427e', 11),
('65571aa0536447fb1cf47a2b5a98954b', 12),
('d41d8cd98f00b204e9800998ecf8427e', 12),
('7fd8d5898957c5d66e077a6bf4db01b5', 13),
('ee97c651418b68f1f3f63919d5f5b2d0', 13),
('a4bf379804cc882f1c23c76d2c894999', 13),
('9d5ed678fe57bcca610140957afab571', 13),
('5dbc98dcc983a70728bd082d1a47546e', 13),
('a4bf379804cc882f1c23c76d2c894999', 14),
('9d5ed678fe57bcca610140957afab571', 14),
('5dbc98dcc983a70728bd082d1a47546e', 14),
('ee97c651418b68f1f3f63919d5f5b2d0', 14),
('7fd8d5898957c5d66e077a6bf4db01b5', 14),
('d457fd0938f5c8ed064f674287867402', 15),
('4c880d0bd14e066d37f4c92a751d9fa2', 15),
('3dee98d413518572e7dbacf79dba0cc8', 15),
('657ee78db8f64cc3123bdbefd2ca7d86', 15),
('f86da0f4f144f755ad6be8bab3eb3f86', 16),
('cc3bfc83f667c2239402e30082ea0018', 16),
('63d18c02d55fa0ce66b6368177bdcd22', 16),
('c976e8945f75bdb56cec8176bc31b830', 16),
('f86da0f4f144f755ad6be8bab3eb3f86', 18),
('c976e8945f75bdb56cec8176bc31b830', 18),
('cc3bfc83f667c2239402e30082ea0018', 18),
('c2f3f489a00553e7a01d369c103c7251', 18),
('c184f1f7103131d3ed58f2c5dbace129', 18),
('bf8c144140b15befb8ce662632a7b76e', 19),
('69b81d2161333263d8555457f408d784', 20),
('16e4ef534cec559430e07e05eb71c719', 21),
('9c0a2523f776c96bce27eeb5671371e0', 22),
('0715fd7d15c6fb1d48a0cd1c834176bf', 38),
('0715fd7d15c6fb1d48a0cd1c834176bf', 38),
('033bd94b1168d7e4f0d644c3c95e35bf', 0),
('7885ad399f9cab93cb42befbe402c588', 0),
('ee97c651418b68f1f3f63919d5f5b2d0', 0),
('93762d802eed04b3e1c59d1d46b35248', 0),
('93762d802eed04b3e1c59d1d46b35248', 0),
('93762d802eed04b3e1c59d1d46b35248', 0),
('ee97c651418b68f1f3f63919d5f5b2d0', 0),
('3080854fe8d9d4c16ea304fda1b3cfa4', 0),
('ee97c651418b68f1f3f63919d5f5b2d0', 0),
('b51124837adeedadacbe67961599bfaf', 0),
('f830e97bde24984c43076ddbfed913e6', 0),
('29deb97a0ba8cccbd4817ad66ad80645', 0),
('cb595bfd668920e8d6da3ff80c5679b9', 0),
('87243927c932713e00ea95a19985b447', 0),
('93762d802eed04b3e1c59d1d46b35248', 36),
('033bd94b1168d7e4f0d644c3c95e35bf', 36),
('697f3af30f48986f6228148346b66c70', 36),
('bf8c144140b15befb8ce662632a7b76e', 37),
('bf8c144140b15befb8ce662632a7b76e', 37),
('65571aa0536447fb1cf47a2b5a98954b', 39),
('a4bf379804cc882f1c23c76d2c894999', 39),
('4b27fbea7d9cb3145957370a907d67be', 39),
('65571aa0536447fb1cf47a2b5a98954b', 40),
('a4bf379804cc882f1c23c76d2c894999', 40),
('65571aa0536447fb1cf47a2b5a98954b', 41),
('a4bf379804cc882f1c23c76d2c894999', 41),
('4c880d0bd14e066d37f4c92a751d9fa2', 41),
('65571aa0536447fb1cf47a2b5a98954b', 42),
('92252be713c2ecc770cfa22066481aeb', 42),
('f4904898d9ee8859b769e45ac4f44af2', 42),
('7c144eae2e08db14c82e376603cc01f4', 42),
('901b03ba0232d92accb3426e9acddfee', 42),
('9c0a2523f776c96bce27eeb5671371e0', 43),
('b2ef9c7b10eb0985365f913420ccb84a', 43),
('b2ef9c7b10eb0985365f913420ccb84a', 43),
('b2ef9c7b10eb0985365f913420ccb84a', 43),
('b2ef9c7b10eb0985365f913420ccb84a', 43),
('9c0a2523f776c96bce27eeb5671371e0', 44),
('9c0a2523f776c96bce27eeb5671371e0', 44);

-- --------------------------------------------------------

--
-- Table structure for table `hscores`
--

CREATE TABLE IF NOT EXISTS `hscores` (
  `score` int(11) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hscores`
--

INSERT INTO `hscores` (`score`, `time`) VALUES
(0, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00'),
(1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(64) NOT NULL,
  `password` varchar(40) NOT NULL,
  `verified` varchar(64) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `verified`) VALUES
('ganyguru', '736fcab46d3c183000b547caa2f1f0abcdcd1c87', 'yes'),
('rishi88', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'yes'),
('surajba', 'b7a61a52dc4d9e0c3fdf1a05a030dcb393159679', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `receiver` varchar(64) NOT NULL,
  `sender` varchar(64) NOT NULL,
  `message` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`receiver`, `sender`, `message`, `time`, `status`) VALUES
('ganyguru', 'ganyguru', 'hi\r\n', '2014-09-15 12:21:38', 'seen'),
('ganyguru', 'ganyguru', 'hi', '2014-09-17 11:53:50', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-17 20:10:11', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book..Dei gany kutty i love you', '2014-09-17 20:12:57', 'seen'),
('undefined', 'ganyguru', 'This is reply test', '2014-09-17 20:54:01', ''),
('ganyguru', 'ganyguru', 'ths is reply test', '2014-09-17 20:56:27', 'seen'),
('ganyguru', 'ganyguru', 'dei ba this is ping', '2014-09-18 10:25:51', 'seen'),
('rishi88', 'ganyguru', 'Hi There! I am interested in your book!!', '2014-09-18 11:46:36', 'seen'),
('rishi88', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-18 12:20:56', 'seen'),
('rishi88', 'ganyguru', 'Hi There! I am interested in your book ping me', '2014-09-18 13:04:18', 'seen'),
('ganyguru', 'rishi88', 'yeah', '2014-09-18 13:04:42', 'seen'),
('rishi88', 'ganyguru', 'Hi rishi88! ', '2014-09-19 09:50:45', 'seen'),
('ganyguru', 'rishi88', 'Hi There! I am interested in your book gany', '2014-09-19 12:06:20', 'seen'),
('rishi88', 'ganyguru', 'thevidiya varudu da', '2014-09-19 12:12:43', 'seen'),
('ganyguru', 'rishi88', 'i love saranya dude', '2014-09-19 12:15:12', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book gany', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:43:28', 'seen'),
('ganyguru', 'ganyguru', 'dei rishi kund..avalu kund', '2014-09-20 13:44:29', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:47:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-20 13:48:29', 'seen'),
('ganyguru', 'ganyguru', 'rishi badu', '2014-09-20 13:49:30', 'seen'),
('ganyguru', 'ganyguru', 'rishi koodi', '2014-09-20 13:50:50', 'seen'),
('ganyguru', 'ganyguru', 'rishi koodi baa', '2014-09-20 13:51:51', 'seen'),
('ganyguru', 'ganyguru', 'rishi panni kuty', '2014-09-20 13:52:52', 'seen'),
('ganyguru', 'ganyguru', 'rishi panni kuty baa', '2014-09-20 13:53:54', 'seen'),
('rishi88', 'ganyguru', 'Hi rishi88! eppudi irukka\naiyo rishi\nvaada vaada panni moonji vaya', '2014-09-20 14:03:39', 'seen'),
('ganyguru', 'ganyguru', 'Hi ganyguru!', '2014-09-21 11:28:28', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book ganesh', '2014-09-23 13:23:15', 'seen'),
('ganyguru', 'ganyguru', 'Hi There! I am interested in your book', '2014-09-23 13:23:56', 'seen'),
('rishi88', 'ganyguru', 'Hi rishi88!', '2014-10-26 13:49:58', 'seen'),
('rishi88', 'ganyguru', 'Hi rishi88!', '2014-10-26 13:57:04', 'seen'),
('rishi88', 'ganyguru', 'Hi There! I am interested in your book', '2014-10-26 14:09:54', 'seen'),
('rishi88', 'ganyguru', 'Hi There! I am interested in your book', '2014-10-26 14:13:14', 'seen'),
('rishi88', 'ganyguru', 'Hi rishi88! I am interested in your book Maths.', '2014-10-26 14:17:35', 'seen');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `username` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `gender` text NOT NULL,
  `department` text NOT NULL,
  `Address` varchar(64) NOT NULL,
  `mobilenumber` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`username`, `name`, `rollnumber`, `email`, `gender`, `department`, `Address`, `mobilenumber`) VALUES
('ganyguru', 'Guru', 102113018, 'cprganesh@gmail.com', 'male', 'Chemical', 'zircon-b 66', '9790892234'),
('rishi88', 'Rishi', 106113077, 'msrishi88@gmail.com', 'male', 'Computer science', 'zircon-b 001', '8056083211'),
('surajba', 'suraj', 102113059, 'cprganesh@hotmail.com', 'male', 'Chemical', 'zircon b-21', '9123456789');

-- --------------------------------------------------------

--
-- Table structure for table `stud_details`
--

CREATE TABLE IF NOT EXISTS `stud_details` (
  `name` text NOT NULL,
  `rollnum` int(9) NOT NULL,
  `department` text NOT NULL,
  `sex` char(1) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`rollnum`),
  UNIQUE KEY `rollnum` (`rollnum`),
  UNIQUE KEY `rollnum_2` (`rollnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_details`
--

INSERT INTO `stud_details` (`name`, `rollnum`, `department`, `sex`, `password`) VALUES
('Ganesh', 102113018, 'Chemical', 'm', '87a67dc102c875e307c45b8ccde2c414b58e03c8'),
('VigneshPD', 102113038, 'Chemical', 'm', 'e79cab55eab4c0a1a63610829a51fd51d5cfb294'),
('suraj', 102113059, 'Chemical', 'm', '0abd0df55eb02d47bf2d3e301d3310c4d084e10b');

-- --------------------------------------------------------

--
-- Table structure for table `View_Details`
--

CREATE TABLE IF NOT EXISTS `View_Details` (
  `ip` text NOT NULL,
  `uagent` text NOT NULL,
  `domain` text NOT NULL,
  `visit` datetime NOT NULL,
  `hits` int(11) NOT NULL DEFAULT '0',
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `View_Details`
--

INSERT INTO `View_Details` (`ip`, `uagent`, `domain`, `visit`, `hits`, `clicks`) VALUES
('127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.153 Safari/537.36', 'localhost', '2014-09-21 13:39:33', 66, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
