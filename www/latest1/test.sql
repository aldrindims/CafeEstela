-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 06:58 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ingredients`
--

CREATE TABLE `tbl_ingredients` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ingredients`
--

INSERT INTO `tbl_ingredients` (`id`, `name`, `size`) VALUES
(1, 'COFEE BEAN', 10000),
(2, 'VANILA POWDER', 15120),
(3, 'CHOCOLATE POWDER', 3968),
(4, 'DARK CHOCOLATE SAUCE', 18900),
(5, 'WHITE CHOCOLATE SAUCE', 9450),
(6, 'CARAMEL SAUCE', 9450),
(7, 'STAWBERRY REAL FRUIT', 9450),
(8, 'PEACH REAL FRUIT', 7560),
(9, 'MANGO REAL FRUIT', 7560),
(10, 'MATCHA LATTE POWDER', 2000),
(11, 'WHITE SYRUP', 3000),
(12, 'FRENCH VANILLA SYRUP', 3750),
(13, 'CHOCO  CHIPS', 2000),
(14, 'WHITE CHOCO CHIPS', 2000),
(15, 'COOKIES & CREAM CRASHED', 432),
(16, 'BACK TEA', 50),
(17, 'GREEN TEA', 50),
(18, 'HOUSE BLEND TEA', 48),
(19, 'WHIP CREAM', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'testuser', 'testuserpass'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meals`
--

CREATE TABLE `tbl_meals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_meals`
--

INSERT INTO `tbl_meals` (`id`, `name`, `price`) VALUES
(1, 'FETTUCCINE ALFREDO', 140.00),
(2, 'PENNE PASTA WITH CHICKEN', 140.00),
(3, 'TUNA FUSILLI', 140.00),
(4, 'CLUB SANDWICH', 130.00),
(5, 'TUNA SANDWICH', 70.00),
(6, 'BUFFALO WINGS', 120.00),
(7, 'SIZZLING GARLIC PEPPER BEEF', 140.00),
(8, 'T-BONE STEAK', 190.00),
(9, 'SIZZLING PORK CHOP STEAK', 120.00),
(10, 'BEEF TAPA', 95.00),
(11, 'SPAM', 95.00),
(12, 'DAING NA BANGUS', 90.00),
(13, 'LONGGANISA OMMELETTE', 90.00),
(14, 'CORNED BEEF', 85.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `price2` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `price2`) VALUES
(13, 'ICED AMERICANO\r\n', 'Espresso.jpg', 70.00, 75.00),
(12, 'HOT CHOCOLATE\r\n', 'Espresso.jpg', 75.00, 85.00),
(11, 'GREEN TEA\r\n', 'Espresso.jpg', 55.00, 55.00),
(10, 'ESPRESSO\r\n', 'Espresso.jpg', 55.00, 60.00),
(9, 'COOKIES AND CREAM\r\n', 'Espresso.jpg', 120.00, 125.00),
(8, 'CHOCOLATE FRAPPE\r\n', 'Espresso.jpg', 120.00, 125.00),
(7, 'CARAMEL FRAPPE\r\n', 'Espresso.jpg', 120.00, 125.00),
(6, 'CARAMEL CORRETTO\r\n', 'Espresso.jpg', 80.00, 95.00),
(5, 'CAPUCCINO\r\n', 'Espresso.jpg', 80.00, 95.00),
(4, 'CAFE WHITE MOCHA\r\n', 'Espresso.jpg', 80.00, 95.00),
(3, 'CAFE MOCHA\r\n', 'Espresso.jpg', 80.00, 95.00),
(2, 'CAFE LATTE\r\n', 'Espresso.jpg', 80.00, 90.00),
(1, 'CAFE AMERICANO\r\n', 'Espresso.jpg', 65.00, 70.00),
(14, 'ICED CAFE LATTE\r\n', 'Espresso.jpg', 85.00, 90.00),
(15, 'ICED CAFE MOCHA\r\n', 'Espresso.jpg', 85.00, 90.00),
(16, 'ICED CARAMEL CORRETTO\r\n', 'Espresso.jpg', 90.00, 95.00),
(17, 'JAVA CHIP COOKIE FRAPPE\r\n', 'Espresso.jpg', 120.00, 125.00),
(18, 'MATCHA LATTE\r\n', 'Espresso.jpg', 120.00, 125.00),
(19, 'MOCHA FRAPPE\r\n', 'Espresso.jpg', 120.00, 125.00),
(20, 'PEACHES & CREAM\r\n', 'Espresso.jpg', 95.00, 100.00),
(21, 'STRAWBERRY & CREAM', 'Espresso.jpg', 100.00, 110.00),
(22, 'TROPICAL FRUIT\r\n', 'Espresso.jpg', 95.00, 100.00),
(23, 'VANILLA BEAN HOT CHOCOLATE \r\n', 'Espresso.jpg', 85.00, 95.00),
(24, 'WHITE CHOCOLATE CHIP COOKIE FRAPPE', 'Espresso.jpg', 120.00, 125.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
