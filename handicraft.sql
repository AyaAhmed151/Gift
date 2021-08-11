-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 02:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handicraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`id`, `cat_id`, `type`, `name`, `price`, `image`, `details`) VALUES
(32, 0, 'flo', 'Flower', '10', 'images (1).jfif', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(33, 0, 'flo', 'Flower #2', '25', '9c3a5c1b2209dad4538b4039fcf9db01.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(34, 0, 'flo', 'Flower #3', '14', 'SH0114-01.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(35, 0, 'flo', 'Flower #4', '20', 'imgbin-watercolor-flowers-KUnBdKBAd9Gxv8vbtCY7WGhEq.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person new'),
(36, 0, 'cho', 'Chocolate', '12', 'b6a51e073d6cccceef2487ba2c2336a9.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(37, 0, 'cho', 'Chocolate #230', '10', 'Chocolate-Gift-Hampers.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(38, 0, 'cho', 'Chocolate #305', '25', 'imported-chocolates-basket-28iga00231-29-500x500.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(39, 0, 'cho', 'Chocolate #50', '17', 'valentines-day-godiva.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(89, 0, 'flo', 'Flower #12', '20', '2008_aug-spong-web-01.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(90, 0, 'flo', 'Flower #15', '30', '407-4074497_ivy-lane-flowers-gifts-bouquet-hd-png-download.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(91, 0, 'flo', 'Flower #102', '25', '427-4273169_silk-touch-of-winter-royers-flowers-gifts.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(92, 0, 'flo', 'Flower #103', '10', 'a94ef0da0d53a246e7ac184f632ccd90.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(93, 0, 'flo', 'Flower #109', '15', 'imagsdasdsades.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(94, 0, 'flo', 'Flower #302', '30', 'png-transparent-paper-gift-box-flower-nosegay-a-bouquet-of-roses-buckle-creative-gifts-free-flower-arranging-free-logo-design-template-artificial-flower.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(95, 0, 'flo', 'Flower #002', '6', 'SweetLoveinPink.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(96, 0, 'flo', 'Flower #008', '30', 'unnamsdasdasded.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(97, 0, 'cho', 'Chocolate #200', '10', '5c563bec-8012-4d53-bb7e-eb3287b50ee0.__CR0,0,300,300_PT0_SX300_V1___.jpg', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(98, 0, 'cho', 'Chocolate #305', '15', '3-e1564698809207.png', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(99, 0, 'cho', 'Chocolate #501', '30', '48-box-white-web.png', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(100, 0, 'cho', 'Chocolate #505', '10', '20210120_115845[1].jpg', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(101, 0, 'cho', 'Chocolate #231', '20', 'chocolate-boxes.png', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(102, 0, 'cho', 'Chocolate', '20', 'imasdwdwwsges.jpg', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(103, 0, 'cho', 'Chocolate #280', '15', 'png-transparent-gift-valentines-day-chocolate-chocolate-gifts-heart-gift-box-black.png', 'new addition chocolate is ready to add to your gift be a special and unique person'),
(104, 0, 'cat', 'Hats', NULL, NULL, NULL),
(105, 104, 'item', 'White Hat', '200', 'hat.png', 'This product is available now in our store and you can click on add to cart to buy it '),
(106, 104, 'item', 'Hat', '230', 'hat5.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(107, 104, 'item', 'Hat', '150', 'hat2.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(108, 104, 'item', 'Hat', '125', 'hat3.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(109, 104, 'item', 'Hat', '300', 'hat6.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(110, 104, 'item', 'Hat', '167', 'hat4.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(111, 0, 'cat', 'Accessories', NULL, NULL, NULL),
(112, 111, 'item', 'Necklace', '160', 'necklace.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(113, 111, 'item', 'Brooch', '89', 'Brooch.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(114, 111, 'item', 'Necklace', '150', 'necklace2.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(115, 111, 'item', 'Earring', '75', 'Earring.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(117, 111, 'item', 'Necklace', '300', 'necklace5.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(119, 0, 'cat', 'Carpets', NULL, NULL, NULL),
(120, 119, 'item', 'White Carpet', '650', 'carpet.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(121, 111, 'item', 'Necklace', '200', 'necklace4.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(122, 119, 'item', 'Carpet', '700', 'carpet5.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(123, 119, 'item', 'Carpet', '1000', 'carpet2.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(124, 119, 'item', 'Carpet', '290', 'carpet4.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(125, 119, 'item', 'Carpet', '700', 'carpet3.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(126, 0, 'cat', 'Doily Textile', NULL, NULL, NULL),
(127, 126, 'item', 'Doily-Textile', '750', 'doily-textile8.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(128, 126, 'item', 'Doily-Textile', '550', 'doily-textile3.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(129, 126, 'item', 'Doily-Textile', '330', 'doily-textile6.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(130, 126, 'item', 'Doily-Textile', '330', 'doily-textile7.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(131, 126, 'item', 'Doily-Textile', '250', 'doily-textile2.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(132, 126, 'item', 'Doily-Textile', '4000', 'doily-textile4.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(133, 126, 'item', 'Doily-Textile', '650', 'doily-textile.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(134, 0, 'cat', 'Pillows', NULL, NULL, NULL),
(135, 134, 'item', 'White Pillow', '1000', 'pillow3.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(136, 134, 'item', 'Pillow', '600', 'pillow2.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(137, 134, 'item', 'Pillow', '670', 'pillow4.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(138, 134, 'item', 'Pillow', '740', 'pillow5.png', 'This product is available now in our store and you can click on add to cart to buy it.'),
(139, 0, 'cat', 'Others', NULL, NULL, NULL),
(141, 139, 'item', 'paper scraobooking', '170', 'paper scraobooking.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(142, 139, 'item', 'Dreamcatcher', '200', 'Dreamcatcher2.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(143, 139, 'item', 'Bubble Chair', '2000', 'Bubble chair.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(144, 139, 'item', 'Dishes', '2000', 'dishes.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(145, 139, 'item', 'Basket', '1000', 'Basket.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(146, 139, 'item', 'Dreamcatcher', '200', 'Dreamcatcher.png', 'This product is available now in our store and you can click on add to cart to buy it.	'),
(147, 139, 'item', 'Basket', '1000', 'basket3.png', 'This product is available now in our store and you can click on add to cart to buy it.	');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ncard` varchar(255) DEFAULT NULL,
  `card_namber` varchar(255) DEFAULT NULL,
  `expire_date` varchar(255) DEFAULT NULL,
  `cvs` varchar(255) DEFAULT NULL,
  `date_pick` varchar(255) DEFAULT NULL,
  `date_dropoff` varchar(255) DEFAULT NULL,
  `dropoff_time` varchar(255) DEFAULT NULL,
  `pickup_time` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `location_dropoff` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `flower` int(11) DEFAULT NULL,
  `choc` int(11) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `delivery` int(11) DEFAULT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fname`, `lname`, `phone`, `ncard`, `card_namber`, `expire_date`, `cvs`, `date_pick`, `date_dropoff`, `dropoff_time`, `pickup_time`, `location`, `location_dropoff`, `price`, `item`, `flower`, `choc`, `msg`, `details`, `delivery`, `state`) VALUES
(1, 35, 'ahmed', 'mohamed', '0102329394', 'visa', '999', '0002-03-02', '1', 'NULL', '0002-02-22', '14:22', 'NULL', 'NULL', '22 street', '200', 105, 0, 0, '', 'NULL', 0, 6),
(2, 35, 'ahmed', 'mohamed', '0102329394', 'visa', '8888', '0001-11-11', '2', 'NULL', '0001-11-11', '01:11', 'NULL', 'NULL', 'Nasr City', '1000', 135, 0, 0, '', 'NULL', 0, 1),
(3, 35, 'ahmed', 'mohamed', '0102329394', 'ahmed mohamed', '888', '2021-04-04', '99', 'NULL', '0003-02-23', '05:30', 'NULL', 'NULL', 'Nasr City', '600', 136, 0, 0, '', 'NULL', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `country`, `type`) VALUES
(25, 'Admin', 'Admin', NULL, 'admin@gmail.com', '1', NULL, 'admin'),
(34, 'marwa', 'mohamed', '01092716171', 'marwa@gmail.com', '123', 'Cairo', 'user'),
(35, 'ahmed', 'mohamed', '0102329394', 'ahmed@yahoo.com', '123', 'Cairo', 'user'),
(36, 'hamza', ' Ahmed', NULL, 'hamza@gmail.com', '12', NULL, 'delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gifts`
--
ALTER TABLE `gifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
