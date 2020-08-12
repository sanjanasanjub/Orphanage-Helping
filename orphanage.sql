-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2017 at 10:11 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `orphanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE IF NOT EXISTS `adopt` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `appstatus` varchar(20) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `fage` int(5) NOT NULL,
  `mage` int(5) NOT NULL,
  `mdate` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `income` varchar(10) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `motivation` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `appstatus`, `fathername`, `mothername`, `fage`, `mage`, `mdate`, `phone`, `email`, `address`, `income`, `nation`, `motivation`) VALUES
(1, 'Couple', 'fgf', 'gfhfg', 38, 36, '2017-06-21', '9623058956', 'megha@gmail.com', ' bvh tyh', '1500000', 'fgg', 'hghghgh'),
(2, 'Single Parent', 'fgf', 'gfhfg', 45, 39, '1996-12-02', '9632058741', 'anvi@gmail.com', 'adsd', '5001', 'sads', 'dda'),
(3, 'Couple', 'Goutham', 'Gowri', 38, 30, '2004-07-06', '9234567899', 'gowtham@gmail.com', 'dsfdfdfd fdgdfgdfgfg,\r\ndfjgdjgkjdfgj,\r\nfjgjkdfgfkj', '300000', 'Indian', 'dfdjgfdkjgjdfbg gfgfdgf ugfgfkj uigdfkj gfdgfjfkj  ugfgf g gfugfjhf   hhgkjhgjdfgjfk'),
(6, 'Couple', 'Goutham', 'Gowri', 38, 36, '2002-11-19', '9234567899', 'gowtham@gmail.com', 'gjgjg gjg gkjgkj', '5000000', 'Indian', 'ggfb yfh');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnum` varchar(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `mon` int(10) NOT NULL,
  `year` int(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnum` (`cnum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `cnum`, `cname`, `mon`, `year`, `cvv`) VALUES
(1, '098765432112345', 'Spruthi', 6, 14, 122),
(2, '0987654321123456', 'anusha', 4, 19, 342),
(3, '1011121314151617', 'aaaaaa', 3, 20, 123),
(4, '10203040506070', 'sanjana', 3, 22, 78),
(5, '1234567890098876', 'anvitha', 1, 18, 123),
(6, '12345678901234', 'megha', 4, 20, 123),
(7, '9631235', 'Spruthi', 6, 14, 122),
(8, '9631235678956', 'Spruthi', 8, 22, 122),
(10, 'qwer', 'wewewe', 1, 20, 0),
(11, '0887654321188', 'Lakshmi', 6, 20, 106),
(14, '08876543200', 'Lakshmi', 6, 20, 106);

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `amount` int(6) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `donate` varchar(25) NOT NULL,
  `priorirty` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `name`, `email`, `amount`, `tel`, `message`, `donate`, `priorirty`) VALUES
(1, 'anvitha', 'anvi@gmail.com', 100, '7732068700', 'qwertyuiopasdfghjjk', 'tutorials', 'r1'),
(2, 'sanjana', 'sanjana@gmail.com', 1000, '9632089550', 'qwertyuiop', 'money', 'r3'),
(3, 'anusha', 'anu@gmail.com', 600, '8032058726', 'jhjghghghg', 'money', 'med'),
(4, 'sda', 'sadkj@kjhj.com', 1212, '7832058741', 'sdsad', 'money', 'monthly'),
(5, 'Lakshmi P.k', 'lakshmi@gmail.com', 89000, '9632058741', 'dskhskljh udgf iugfgf', 'health', 'onetime'),
(6, 'sowmya', 'ss@yaho.com', 3000, '9632058782', 'djfgjdsf gdsgsd dfsgfhjs', 'Help kids by Money', 'monthly'),
(7, 'sowmya', 'ss@yaho.com', 3000, '9632058741', 'djfgjdsf gdsgsd dfsgfhjs', 'Help kids by Money', 'monthly'),
(8, 'sowmya', 'ss@yaho.com', 3000, '9632058741', 'djfgjdsf gdsgsd dfsgfhjs', 'Help kids by Money', 'monthly'),
(26, 'Spruthi', 'Spruthi@gmail.com', 5501, '9632587412', 'sdsfsdf dsfdsf ', 'Tutorials', 'onetime');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `pass` varchar(20) NOT NULL,
  `rpass` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `pass`, `rpass`, `email`) VALUES
(1, 'anvi', 'anvi', 'anvi@gmail.com'),
(2, 'sanju', 'sanju', 'sanjana@gmail.com'),
(3, 'anu', 'anu', 'anu@gmail.com'),
(4, 'megha', 'megha', 'megha@gmail.com'),
(6, '123', '123', 'lakshmi'),
(8, '12', '12', 'lakshmi@jsgfj.com'),
(9, '12', '12', 'lakshmi@jsgfj.com1'),
(10, 'ammu', 'ammu', 'vidya@gmail.com'),
(11, 'ss123', 'ss123', 'sowmya@yahoo.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
