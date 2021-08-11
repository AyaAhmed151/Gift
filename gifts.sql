-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 12:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gifts`
--

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL DEFAULT 0,
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
(1, 0, 'cat', 'watchs', NULL, NULL, NULL),
(5, 0, 'cat', 'Accessories', NULL, NULL, NULL),
(6, 0, 'cat', 'Clothes', NULL, NULL, NULL),
(7, 0, 'cat', 'Bags', NULL, NULL, NULL),
(8, 0, 'cat', 'Electronics', NULL, NULL, NULL),
(18, 1, 'item', 'watch', '560', 'download.jfif', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(19, 1, 'item', 'watch 1', '500', '71VjM5LOeYL._AC_UX522_.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(20, 1, 'item', 'watch 2', '200', '71xk7LGnBlL._AC_UL1500_.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(21, 1, 'item', 'watch 3', '450', 'ChronoSBlue_Brown_1000x.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(24, 7, 'item', 'Bag', '120', 'pngtree-shopping-bag-icon-in-trendy-style-isolated-background-png-image_1536177.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(25, 7, 'item', 'Brouwn bag', '700', 'images.jfif', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(26, 7, 'item', 'Black bag', '260', '194-1942574_transparent-purses-black-handbag-amal-clooney-bags-hd.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(27, 7, 'item', 'Travel Bag', '120', '56-567881_transparent-backpack-clipart-png-school-bag-clipart-color.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(28, 7, 'item', 'Laptop Bag', '300', 'laptop-briefcase-bag-computer-backpack-png-favpng-sKpH74hfjVmvpSC7H50jyn08X.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(32, 0, 'flo', 'Flower', '10', 'images (1).jfif', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(33, 0, 'flo', 'Flower #2', '25', '9c3a5c1b2209dad4538b4039fcf9db01.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(34, 0, 'flo', 'Flower #3', '14', 'SH0114-01.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(35, 0, 'flo', 'Flower #4', '20', 'imgbin-watercolor-flowers-KUnBdKBAd9Gxv8vbtCY7WGhEq.jpg', 'new addtion flower is ready to add to your gift be special and uniqe person new'),
(36, 0, 'cho', 'Chocolate', '12', 'b6a51e073d6cccceef2487ba2c2336a9.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(37, 0, 'cho', 'Chocolate #230', '10', 'Chocolate-Gift-Hampers.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(38, 0, 'cho', 'Chocolate #305', '25', 'imported-chocolates-basket-28iga00231-29-500x500.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(39, 0, 'cho', 'Chocolate #50', '17', 'valentines-day-godiva.png', 'new addtion flower is ready to add to your gift be special and uniqe person'),
(43, 1, 'item', 'New watch ', '350', '539-5394315_watch-womens-watch-female-watches-wrist-watch-for.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(44, 1, 'item', 'Watch #23', '560', '82599369344d8092ba84d4ce50676dde.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(45, 1, 'item', 'Watch #052', '780', 'download.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(46, 1, 'item', 'Watch #51', '980', 'images.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(47, 1, 'item', 'Watch 60#', '450', 'unnamed.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(48, 5, 'item', 'Necklace', '1500', '42281_thumb.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(49, 5, 'item', 'Apple touchpad', '650', 'apple-magic-trackpad-touchpad-ex0412D-600.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(50, 5, 'item', 'Women cross body', '320', 'beige-women-cross-body-shoulder-purse-bag-K60aK67-600.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(51, 5, 'item', 'Christmas santa claus', '30', 'christmas-santa-claus-png-favpng-w5GRUzmGWvNGUV1jbsAdafMiC.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(52, 5, 'item', 'Clipart birthday', '15', 'gift-clipart-birthday-accessory.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(53, 5, 'item', 'Bibione', '12', 'images.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(54, 5, 'item', 'Clipart hair', '8', 'png-clipart-hair-fashion-accessory-barrette-cartoon-hair-accessories-black-hair-people-thumbnail.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(55, 5, 'item', 'Pngtree bohemian indian', '15', 'pngtree-bohemian-indian-feather-headdress-accessories-png-image_916636.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(58, 5, 'item', 'Iphone cover', '15', 'unnamesd.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(59, 5, 'item', 'White hat', '30', 'white-top-hat-ZR1vom8-600.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(60, 6, 'item', 'Blue t-shirt', '1200', '01e2d3ab1fe1e3d1272117e1c7e5d708.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(61, 6, 'item', 'Blue dress', '850', '16-164834_blue-women-dress-clothes-hd-image-blue-dress.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(62, 6, 'item', 'Red t-shirt', '650', '96-964332_sweater-red-fall-autumn-clothing-png-polyvore-80s.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(63, 6, 'item', 'T-shirt', '950', '114-1147119_aesthetic-clothes-and-png-image-pink-and-red.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(64, 6, 'item', 'Yellow dress', '1100', '119-1196014_fashion-png-background-image-ladies-clothes-png-transparent.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(65, 6, 'item', 'Jacket', '2100', '130-1302594_transparent-clothes-png-editing-boy-dress-png-png.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(66, 6, 'item', 'T-shirt', '600', '176-1760720_shirt-mens-men-clothing-clothes-top-sweater-sweater.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(67, 6, 'item', 'T-shirt', '350', '197-1976459_24-small-aesthetic-blue-clothes-png-transparent-png.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(68, 6, 'item', 'New', '1200', '823a63b2d9e567c7eb7813fa839e68fc.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(69, 6, 'item', 'Dress', '245', 'original.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(70, 6, 'item', 'New brand', '350', 'cddb74672214cfc291eb9ccb36a68334.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(71, 7, 'item', 'Women bag', '150', 'dsdunnamed.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(72, 7, 'item', 'Yellow bag', '180', 'HTB1_OaBNFXXXXbbXVXXq6xXFXXXS.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(73, 7, 'item', 'Red bag', '250', 'png-clipart-red-fansiman-2-way-handbag-handbag-bride-leather-shoulder-women-s-bag-zipper-luggage-bags-thumbnail.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(74, 7, 'item', 'Nike', '650', 'png-transparent-nike-sportswear-hayward-futura-2-backpack-bag-nike-heritage-gymsack-schoolbag-blue-luggage-bags-backpack.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(75, 7, 'item', 'School bag', '650', 'purepng.com-nike-lazer-bagbagbackpacksnike-lazer-bagtourist-bags-1421526271674pxn0o.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(76, 7, 'item', 'School bag', '352', 'unnamed (1).png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(77, 7, 'item', 'Bag', '650', 'unnamedسيشي.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(78, 8, 'item', 'Airpods', '150', 'kisspng-elago-airpods-silicone-case-elago-airpods-hang-cas-elago-airpod-silicone-case-red-ivizi-5d24ffa08560d7.9829164215627058245463.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(79, 8, 'item', 'Airpods', '100', 'unndsamed.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(80, 8, 'item', 'Apple airpods', '350', 'apple-airpods-earphones-exdGm2B-600.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(81, 8, 'item', 'Dell i7', '2500', '1b2466ad57c9ce45ab273527c5165624.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(82, 8, 'item', 'Dell i7', '3500', 'laptop_PNG5930.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(83, 8, 'item', 'Lenovo', '5000', 'pngtree-laptop-icon-png-image_1871597.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(84, 8, 'item', 'Samsung', '6800', 'samsung-laptop-png-11552846920ggjwoxjcy6.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(85, 8, 'item', 'Hp i3', '1500', 'laptop_PNG5934.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(86, 8, 'item', 'lava phone', '1500', 'lava-mobile-concept-smartphone-1156315636210fl3dbbju.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(87, 8, 'item', 'Phone', '650', 'png-clipart-mini-cooper-tecno-mobile-mobile-phones-android-mini-gadget-computer.png', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
(88, 8, 'item', 'Iphone', '1650', 'iphone-x-apple-telephone-smartphone-t-mobile-png-favpng-ehzxSTeG5UZkk0J4CViv3pctj.jpg', 'This product is available now in our store you can click on add to cart to buy it online or pay cash'),
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
(103, 0, 'cho', 'Chocolate #280', '15', 'png-transparent-gift-valentines-day-chocolate-chocolate-gifts-heart-gift-box-black.png', 'new addition chocolate is ready to add to your gift be a special and unique person');

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
(25, 'Admin', 'Admin', NULL, 'admin@gmail.com', '1', NULL, 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
