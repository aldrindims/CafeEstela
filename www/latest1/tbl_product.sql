--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00),
(4, 'Invicta Men''s Pro ', '4.jpg', 65.00),
(5, 'ibagbar Laptop Bag', '5.jpg', 25.00),
(6, 'LED Solar Spotlight', '6.jpg', 30.00),
(7, 'Lutron dimmers', '7.jpg', 22.00),
(8, 'Anker Quick Charger', '8.jpg', 35.00),
(9, 'Sony Headset', '9.jpg', 60.00);