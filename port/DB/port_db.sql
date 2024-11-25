-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 04, 2023 at 08:54 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `computism`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `Brandname` varchar(50) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `Brandname`) VALUES
(1, 'Dell'),
(2, 'Asus'),
(5, 'Apple'),
(6, 'HP'),
(7, 'Acer'),
(8, 'iBall'),
(9, 'Nvidia'),
(10, 'Intel'),
(11, 'AMD'),
(12, 'Corsair');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catid` bigint(50) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'Monitor'),
(2, 'MotherBoard'),
(3, 'RAM'),
(4, 'Processor'),
(5, 'UPS'),
(6, 'KeyBoard'),
(7, 'Mouse'),
(8, 'HDD'),
(9, 'SSD'),
(10, 'Laptop'),
(11, 'PC'),
(12, 'Tablet PC');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `subject`, `description`) VALUES
(3, '9', 'Hi ', 'Nice Love It\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int(20) NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'pending',
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `reg_id`, `email`, `password`, `type`, `status`) VALUES
(38, '0', 'admin@gmail.com', 'admin', 'ADMIN', 'pending'),
(39, '9', 'reshmi@gmail.com', '123', 'USER', 'approved'),
(40, '5', 'myg@gmail.com', '123', 'SHOP', 'Approved'),
(41, '10', 'Meenu@gmail.com', '123', 'USER', 'approved'),
(42, '11', 'aji@gmail.com', '123', 'USER', 'approved'),
(43, '6', 'gift@gmail.com', '123', 'SHOP', 'Approved'),
(44, '7', 'online@gmail.com', '11223', 'SHOP', 'Approved'),
(45, '12', 'joyel@gmail.com', '1234', 'USER', 'approved'),
(46, '8', 'onepc@gmail.com', '1122', 'SHOP', 'Approved'),
(47, '13', 'vineeth@gmail.com', '2233', 'USER', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `s_id` int(10) NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `sphone` varchar(100) DEFAULT NULL,
  `saddress` varchar(100) DEFAULT NULL,
  `semail` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `sname`, `sphone`, `saddress`, `semail`, `photo`) VALUES
(5, 'MyG Next Generation', '9876543211', 'Kaitharam South, Kottuvally, Kerala 683519', 'myg@gmail.com', 'myg.jpg'),
(6, 'Gift House', '9988988373', '465X+79M, Thrikkapuram, Ezhikkara, Kottuvally, Kerala 683519', 'gift@gmail.com', 'gifth1.webp'),
(7, 'online', '9947132568', 'Ernakulam,North', 'online@gmail.com', 'd3.jpg'),
(8, 'onepc', '7789654569', 'Ernakulam,manorama', 'onepc@gmail.com', 'd5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE IF NOT EXISTS `tb_cart` (
  `cart_id` int(100) NOT NULL AUTO_INCREMENT,
  `cusid` varchar(100) DEFAULT NULL,
  `centerid` varchar(100) DEFAULT NULL,
  `itemid` varchar(100) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`cart_id`, `cusid`, `centerid`, `itemid`, `item`, `date`, `status`) VALUES
(20, '9', '5', '14', 'ASUS VivoBook 15 (2022) Core i3 10th Gen', '2022/Sep/26', 'Paid'),
(21, '9', '5', '15', 'HP Pavilion Ryzen 5', '2022/Sep/26', 'incart');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE IF NOT EXISTS `tb_product` (
  `productcode` bigint(50) NOT NULL AUTO_INCREMENT,
  `centerid` int(100) DEFAULT NULL,
  `productname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` bigint(100) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `features` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`productcode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`productcode`, `centerid`, `productname`, `category`, `brand`, `price`, `warranty`, `features`, `image`) VALUES
(14, 5, 'ASUS VivoBook 15 (2022) Core i3 10th Gen', 'Laptop', 'Asus', 28890, '6', 'he outstanding Asus VivoBook 15 laptop, created to simplify your workday and improve performance, offers fantastic efficiency and stunning aesthetics.', 'laptop.webp'),
(15, 5, 'HP Pavilion Ryzen 5', 'Laptop', 'HP', 49890, '6', '(8 GB/512 GB SSD/Windows 10/4 GB Graphics/NVIDIA GeForce GTX 1650/144 Hz) 15-ec2004AX Gaming Laptop  (15.6 inch, Shadow Black, 1.98 kg)', 'hp lap.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE IF NOT EXISTS `tb_service` (
  `servicebookid` int(122) NOT NULL AUTO_INCREMENT,
  `center_id` varchar(100) DEFAULT NULL,
  `servicename` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fee` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`servicebookid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`servicebookid`, `center_id`, `servicename`, `description`, `fee`) VALUES
(7, '5', 'cleaning pc', 'simple cleansing ', '250'),
(8, '5', 'PC Assembly', 'full assembly on site', '2500');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_booking`
--

CREATE TABLE IF NOT EXISTS `tb_service_booking` (
  `book_id` int(200) NOT NULL AUTO_INCREMENT,
  `centerid` varchar(200) DEFAULT NULL,
  `serviceid` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `fee` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tb_service_booking`
--

INSERT INTO `tb_service_booking` (`book_id`, `centerid`, `serviceid`, `customer_id`, `fee`, `date`, `status`) VALUES
(9, '5', '7', '9', '250', '2022-09-26', 'Booked'),
(10, '5', '8', '9', '2500', '2022-09-26', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `uemail` varchar(40) NOT NULL,
  `uaddress` varchar(40) NOT NULL,
  `uphoneno` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uaddress`, `uphoneno`) VALUES
(9, 'Reshmi', 'reshmi@gmail.com', '468W+MXX, Kottuvally Road, Kaitharam Sou', '9876543210'),
(10, 'Meenu', 'Meenu@gmail.com', 'Kaitharam South, Kottuvally, Kerala 6835', '8987678538'),
(11, 'Ajin', 'aji@gmail.com', 'Kaitharam South, Kottuvally, Kerala 6835', '7787089708'),
(12, 'joyel', 'joyel@gmail.com', 'ernakulam,kerala', '9947589632'),
(13, 'vineeth', 'vineeth@gmail.com', 'Idukki,peerumade', '9947589658');
