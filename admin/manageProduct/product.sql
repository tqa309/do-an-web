-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 07, 2020 at 06:35 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_decription` varchar(255) DEFAULT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_decription`, `item_image`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy 10', 152.00, NULL, './assets/products/1.png', '2020-03-28 11:08:57'),
(2, 'Redmi', 'Redmi Note 7', 122.00, NULL, './assets/products/2.png', '2020-03-28 11:08:57'),
(3, 'Redmi', 'Redmi Note 6', 122.00, NULL, './assets/products/3.png', '2020-03-28 11:08:57'),
(4, 'Redmi', 'Redmi Note 5', 122.00, NULL, './assets/products/4.png', '2020-03-28 11:08:57'),
(5, 'Redmi', 'Redmi Note 4', 122.00, NULL, './assets/products/5.png', '2020-03-28 11:08:57'),
(6, 'Redmi', 'Redmi Note 8', 122.00, NULL, './assets/products/6.png', '2020-03-28 11:08:57'),
(7, 'Redmi', 'Redmi Note 9', 122.00, NULL, './assets/products/8.png', '2020-03-28 11:08:57'),
(8, 'Redmi', 'Redmi Note', 122.00, NULL, './assets/products/10.png', '2020-03-28 11:08:57'),
(9, 'Samsung', 'Samsung Galaxy S6', 152.00, NULL, './assets/products/11.png', '2020-03-28 11:08:57'),
(10, 'Samsung', 'Samsung Galaxy S7', 152.00, NULL, './assets/products/12.png', '2020-03-28 11:08:57'),
(11, 'Apple', 'Apple iPhone 5', 152.00, NULL, './assets/products/13.png', '2020-03-28 11:08:57'),
(12, 'Apple', 'Apple iPhone 6', 152.00, NULL, './assets/products/14.png', '2020-03-28 11:08:57'),
(13, 'Apple', 'Apple iPhone 7', 152.00, NULL, './assets/products/15.png', '2020-03-28 11:08:57'),
(40, 'ngon', 'hmmm', 99999999.99, 'mlem mlem', '../../assets/products/105705847_271862984041079_5754881365820370185_n.png', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
