-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2015 at 07:50 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gcc_assets2`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountability`
--

CREATE TABLE IF NOT EXISTS `accountability` (
`accountability_id` int(11) NOT NULL,
  `item_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `accountability_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountability`
--

INSERT INTO `accountability` (`accountability_id`, `item_id`, `employee_id`, `accountability_date`) VALUES
(1, 1, 3, '11/04/2015'),
(2, 1, 5, '11/04/2015'),
(3, 3, 5, '11/04/2015');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`category_id` int(10) NOT NULL,
  `category_name` varchar(30) DEFAULT NULL,
  `category_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'Furniture', NULL),
(2, 'Computers', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`company_id` int(255) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_location` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_location`) VALUES
(1, 'GC & C', 'Bata'),
(2, 'Home World Construction', 'Bata');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`employee_id` int(10) NOT NULL,
  `employee_fname` varchar(50) DEFAULT NULL,
  `employee_mname` varchar(50) DEFAULT NULL,
  `employee_lname` varchar(50) DEFAULT NULL,
  `employee_age` varchar(50) DEFAULT NULL,
  `employee_dob` varchar(20) DEFAULT NULL,
  `employee_gender` varchar(50) DEFAULT NULL,
  `employee_id_number` varchar(20) DEFAULT NULL,
  `employee_position` varchar(50) DEFAULT NULL,
  `employee_house_num` varchar(50) DEFAULT NULL,
  `employee_street` varchar(50) DEFAULT NULL,
  `employee_subd` varchar(50) DEFAULT NULL,
  `employee_block` varchar(50) DEFAULT NULL,
  `employee_lot_num` varchar(20) DEFAULT NULL,
  `employee_brgy` varchar(20) DEFAULT NULL,
  `employee_country` varchar(20) DEFAULT NULL,
  `employee_postal` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `employee_access_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_fname`, `employee_mname`, `employee_lname`, `employee_age`, `employee_dob`, `employee_gender`, `employee_id_number`, `employee_position`, `employee_house_num`, `employee_street`, `employee_subd`, `employee_block`, `employee_lot_num`, `employee_brgy`, `employee_country`, `employee_postal`, `username`, `password`, `employee_access_level`) VALUES
(1, 'john carlo3', 'coleongco', 'lucasan', '23', '07/13/1991', 'Male', '215', 'junior Programmer', '', 'paper street', 'arles', '', '', 'Alijis', 'Philippines', '6100', 'admin', 'admin', 'Super Administrator'),
(3, 'roben', 'sds', 'ong', '', '01/01/1970', '', '216', '', '', '', '', '', '', '', '', '', 'user', 'user', 'Super Administrator'),
(5, 'nika', 'guillermo', 'lucasan', '23', '07/15/1992', 'Female', '222', 'medtech', '', '', '', '', '', 'Alijis', 'Philippines', '6100', 'adminnika', 'adminnika', 'Super Administrator'),
(7, 'summer', '', 'lucasan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 'new', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, '', 'sheila', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '', '', '', '', 'null', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`item_id` int(255) NOT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_serial` varchar(100) DEFAULT NULL,
  `item_model` varchar(100) DEFAULT NULL,
  `item_qty` varchar(20) DEFAULT NULL,
  `item_dop` varchar(20) DEFAULT NULL,
  `employee_id` int(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `item_remarks` varchar(50) DEFAULT NULL,
  `item_description` varchar(50) DEFAULT NULL,
  `item_Image` varchar(100) DEFAULT NULL,
  `item_accountability` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `item_price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_serial`, `item_model`, `item_qty`, `item_dop`, `employee_id`, `company_id`, `item_remarks`, `item_description`, `item_Image`, `item_accountability`, `category_id`, `item_price`) VALUES
(1, 'headset1234', 'headset123', 'a4tech', '1', '11/04/2015', 1, 2, 'brandnew1', 'headset and holder only', 'photos/', '', 1, '121'),
(3, 'monitors', '', '', '', '01/01/2015', 1, 1, '', '', 'photos/dota_2_battle_games_hd_free_wallpaper.jpg', '', 1, ''),
(4, 'ok23', '', '', '', '01/01/2015', 1, 1, '', '', 'photos/miakhalifa.jpg', '', 1, ''),
(5, 'ok', '', '', '', '01/01/2015', 1, 1, '', '', 'photos/Chrysanthemum.jpg', '', 1, ''),
(6, 'desserrt', '', '', '', '01/01/2015', 1, 1, '', '', 'photos/Desert.jpg', '', 1, ''),
(15, '5', '', '', '', '01/01/2015', 1, 1, '', '', 'photos/', '', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountability`
--
ALTER TABLE `accountability`
 ADD PRIMARY KEY (`accountability_id`), ADD KEY `item_id` (`item_id`), ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`item_id`), ADD KEY `employee_id` (`employee_id`), ADD KEY `company_id` (`company_id`), ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountability`
--
ALTER TABLE `accountability`
MODIFY `accountability_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `company_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `employee_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accountability`
--
ALTER TABLE `accountability`
ADD CONSTRAINT `accountability_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
ADD CONSTRAINT `accountability_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`item_id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`),
ADD CONSTRAINT `items_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
ADD CONSTRAINT `items_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
