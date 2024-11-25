-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2023 at 03:11 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `port_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` bigint NOT NULL AUTO_INCREMENT,
  `Brandname` varchar(50) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `Brandname`) VALUES
(1, 'Maruthi'),
(2, 'Tyota');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catid` bigint NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'With Driver'),
(2, 'Without Driver');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `f_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(10) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `user_id`, `subject`, `description`) VALUES
(3, '9', 'Hi ', 'Nice Love It\r\n'),
(4, '14', 'asa', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `l_id` int NOT NULL AUTO_INCREMENT,
  `reg_id` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'pending',
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`l_id`, `reg_id`, `email`, `password`, `type`, `status`) VALUES
(38, '0', 'admin@gmail.com', 'admin', 'ADMIN', 'pending'),
(48, '9', 'go@gmail.com', 'go123', 'SHOP', 'Approved'),
(49, '14', 'ramu@gmail.com', 'Ramu123', 'USER', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `s_id` int NOT NULL AUTO_INCREMENT,
  `sname` varchar(100) NOT NULL,
  `sphone` varchar(100) DEFAULT NULL,
  `saddress` varchar(100) DEFAULT NULL,
  `semail` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `sname`, `sphone`, `saddress`, `semail`, `photo`) VALUES
(9, 'Goteam', '9974859872', 'Enakulam,near Nort', 'go@gmail.com', 'about-img.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

DROP TABLE IF EXISTS `tb_cart`;
CREATE TABLE IF NOT EXISTS `tb_cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `cusid` varchar(100) DEFAULT NULL,
  `centerid` varchar(100) DEFAULT NULL,
  `itemid` varchar(100) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`cart_id`, `cusid`, `centerid`, `itemid`, `item`, `date`, `status`) VALUES
(20, '9', '5', '14', 'ASUS VivoBook 15 (2022) Core i3 10th Gen', '2022/Sep/26', 'Paid'),
(21, '9', '5', '15', 'HP Pavilion Ryzen 5', '2022/Sep/26', 'incart'),
(22, '14', '9', '16', 'Swift', '2023/Oct/16', 'Paid'),
(24, '14', '9', '16', 'Swift', '2023/Oct/17', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

DROP TABLE IF EXISTS `tb_product`;
CREATE TABLE IF NOT EXISTS `tb_product` (
  `productcode` bigint NOT NULL AUTO_INCREMENT,
  `centerid` int DEFAULT NULL,
  `productname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `price` bigint NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `features` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`productcode`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`productcode`, `centerid`, `productname`, `category`, `brand`, `price`, `warranty`, `features`, `image`) VALUES
(14, 5, 'ASUS VivoBook 15 (2022) Core i3 10th Gen', 'Laptop', 'Asus', 28890, '6', 'he outstanding Asus VivoBook 15 laptop, created to simplify your workday and improve performance, offers fantastic efficiency and stunning aesthetics.', 'laptop.webp'),
(15, 5, 'HP Pavilion Ryzen 5', 'Laptop', 'HP', 49890, '6', '(8 GB/512 GB SSD/Windows 10/4 GB Graphics/NVIDIA GeForce GTX 1650/144 Hz) 15-ec2004AX Gaming Laptop  (15.6 inch, Shadow Black, 1.98 kg)', 'hp lap.webp'),
(16, 9, 'Swift', 'Without Driver', 'Maruthi', 1000, '2', 'testing', 'quick-icon.png'),
(17, 9, 'etios', 'With Driver', 'Tyota', 1500, '3', 'testing', 'banner-bg.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

DROP TABLE IF EXISTS `tb_service`;
CREATE TABLE IF NOT EXISTS `tb_service` (
  `servicebookid` int NOT NULL AUTO_INCREMENT,
  `center_id` varchar(100) DEFAULT NULL,
  `servicename` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `fee` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`servicebookid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`servicebookid`, `center_id`, `servicename`, `description`, `fee`) VALUES
(9, '9', 'FlightBooking', 'EKM-MOB', '1200');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service_booking`
--

DROP TABLE IF EXISTS `tb_service_booking`;
CREATE TABLE IF NOT EXISTS `tb_service_booking` (
  `book_id` int NOT NULL AUTO_INCREMENT,
  `centerid` varchar(200) DEFAULT NULL,
  `serviceid` varchar(100) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `fee` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_service_booking`
--

INSERT INTO `tb_service_booking` (`book_id`, `centerid`, `serviceid`, `customer_id`, `fee`, `date`, `status`) VALUES
(11, '9', '9', '14', '1200', '2023-10-17', 'Booked'),
(12, '9', '9', '14', '1200', '2023-10-27', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) NOT NULL,
  `uemail` varchar(40) NOT NULL,
  `uaddress` varchar(40) NOT NULL,
  `uphoneno` varchar(40) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `uemail`, `uaddress`, `uphoneno`) VALUES
(14, 'Ramu', 'ramu@gmail.com', 'RamusVilla', '9947589658');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
