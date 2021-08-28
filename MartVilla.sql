-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 06:33 PM
-- Server version: 8.0.22
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MartVilla`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE `category_info` (
  `category_id` int NOT NULL,
  `category_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`category_id`, `category_name`) VALUES
(1, 'Fashion'),
(2, 'Restaurant'),
(3, 'Electronic');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `created_at`) VALUES
('cus_IWvk8k4IakAIXw', 'da', '0000', 'asd@mf.dd', '2020-12-08 04:38:23'),
('cus_IWwJxIYruwbLVj', 'aaa', '11111', 'yamin@gmail.com', '2020-12-08 05:13:29'),
('cus_IWxcVPbueEvmNW', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 06:34:35'),
('cus_IWxeLxWuw4TjuH', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 06:37:07'),
('cus_IWxQcTKTeJM2MM', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 06:23:16'),
('cus_IWxS9LVp89HpvP', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 06:24:50'),
('cus_IXATvd0GyD3Vhd', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 19:51:25'),
('cus_IXDmfhMFhjCpVR', 'Thh', '98483', 'thh@gmail.com', '2020-12-08 23:17:13'),
('cus_IXp1EUyxnS9TFM', 'Thh', '98483', 'thh@gmail.com', '2020-12-10 13:45:32'),
('cus_IXr5KtL4ScyXuJ', 'Thh', '98483', 'thh@gmail.com', '2020-12-10 15:53:46'),
('cus_IXr7uOyGUH4J9i', 'Thh', '98483', 'thh@gmail.com', '2020-12-10 15:55:27'),
('cus_IXr8pC1Igvu08F', 'Thh', '98483', 'thh@gmail.com', '2020-12-10 15:57:15'),
('cus_IXrTLHQQYTZ79N', ' Yamin Thiri Aung', '09785555948', 'yaminthiriaungyta@gmail.com', '2020-12-10 16:17:54'),
('cus_IXrx9RR4XqvbuJ', ' Yamin Thiri Aung', '09785555948', 'yaminthiriaungyta@gmail.com', '2020-12-10 16:48:15'),
('cus_IY9gRt0YiPbTQb', 'Yamin Thiri Aung', '9785555948', 'yaminthiriaungyta@gmail.com', '2020-12-11 11:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `d`
--

CREATE TABLE `d` (
  `question_id` int NOT NULL,
  `parent_question_id` int NOT NULL,
  `comment` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `comment_sender_id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` int NOT NULL,
  `comment_sender_name` varchar(255) NOT NULL,
  `seen` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `d`
--

INSERT INTO `d` (`question_id`, `parent_question_id`, `comment`, `comment_sender_id`, `date`, `type`, `comment_sender_name`, `seen`) VALUES
(132, 0, 'I am HR staff. I want to buy laptop for my business needs especially for using microsoft office application and Internet browing. For online meeing, I aslo need good quality built-in camera. My expected budget is up to 500$. I want to know the exact brand and model that meets with my needs and also the available shop. Thank you!', 7, '2020-12-09 07:21:59', 1, 'Mon ', 1),
(133, 132, 'Hi, I think that every modern laptop can meet your needs and you can find in every computer store near you.', 9, '2020-12-09 07:29:59', 1, 'Yamin ', 1),
(135, 132, 'Hey, I am June Owner of June Computer Store. I am sure that DELL XPS  is the best for your need and for the price, it is also about 400$  Currently, it is also in stock in my store. You can visit to my store on this EVERY MART website. And here is my physical shop address :503 Mango Street, Hlaing, Yangon.', 10, '2020-12-09 08:16:12', 1, 'June ', 1),
(136, 132, 'Hello, I am from Sally Mobile and Electronic center. If you visit to my store, I will show you the best laptop for you. You can freely browse to my website and shop. www.sallystore.com \r\n29, Apple street, Yangon.', 11, '2020-12-09 08:27:53', 1, 'aung aung ', 1),
(137, 132, 'Hey, I am also a HR officer and now I am using DELL XPS series. It worth the price with around 500$. I recommend you to buy this on June Computer Store on this Every Mart website. It is one of the best service stores and I also bought there on last month.', 12, '2020-12-09 08:29:40', 1, 'Thiri ', 1),
(138, 0, 'Hello! I am from June Computer Store. We are having a promotion for our new customer. I am keen to know that what kind of promotion would you like to see in this month?', 10, '2020-12-09 08:53:33', 3, 'June ', 1),
(165, 0, 'I want some advice for my shop.', 13, '2020-12-10 10:52:38', 1, ' Yamin Thiri Aung ', 1),
(168, 165, 'it is good', 13, '2020-12-10 11:04:18', 1, ' Yamin Thiri Aung ', 1),
(169, 165, 'new', 13, '2020-12-10 11:08:36', 1, ' Yamin Thiri Aung ', 1),
(170, 138, 'i want to suggest...', 13, '2020-12-17 17:02:38', 3, ' YaminThiriAung ', 0),
(171, 0, 'i want to know ', 13, '2020-12-17 17:02:52', 1, ' YaminThiriAung ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory_info`
--

CREATE TABLE `orderhistory_info` (
  `order_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_quantity` int NOT NULL,
  `order_total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderhistory_info`
--

INSERT INTO `orderhistory_info` (`order_id`, `user_id`, `product_id`, `order_date`, `order_quantity`, `order_total`) VALUES
(1, 1, 1, '0000-00-00 00:00:00', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111),
(1, 1, 1, 'ssss', 1111, 1111);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment_info`
--

CREATE TABLE `product_comment_info` (
  `id` int NOT NULL,
  `product_id` int NOT NULL,
  `p_comment` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `comment_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_comment_info`
--

INSERT INTO `product_comment_info` (`id`, `product_id`, `p_comment`, `user_id`, `comment_time`) VALUES
(33, 12, 'good', 13, '2020-12-10 04:47:43'),
(34, 11, 'It is good', 13, '2020-12-10 05:47:50'),
(35, 8, 'I love it ', 13, '2020-12-10 05:48:22'),
(36, 4, 'Good TV', 13, '2020-12-10 05:49:01'),
(37, 15, 'it is beautiful', 13, '2020-12-10 16:52:17'),
(38, 16, 'I like it ', 13, '2020-12-10 16:52:35'),
(39, 9, 'Delicious', 13, '2020-12-10 16:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int NOT NULL,
  `shop_id` int NOT NULL,
  `category_id` int NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_description` varchar(255) DEFAULT NULL,
  `p_sellprice` int NOT NULL,
  `p_quantity` int NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_sizedetail` varchar(255) NOT NULL,
  `delete_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `shop_id`, `category_id`, `p_name`, `p_description`, `p_sellprice`, `p_quantity`, `p_image`, `p_sizedetail`, `delete_flag`) VALUES
(1, 4, 3, 'SAMSUNG 55RU7300– 55” - UHD 4K CURV', 'BEST BUY\r\nSAMSUNG - 50\" CLASS NU6900 SERIES LED 4K ', 500000, 4, 'am1b6aqoaovlr9feumj5_1400x.jpg copy.tiff,am1b6aqoaovlr9feumj5_1400x.jpg copy.tiff,', '', 0),
(4, 4, 3, 'Samsung TV UE50TU8500', 'Pocket-lint\r\nSamsung UE50TU8500', 600000, 10, '152964-tv-review-samsung-ue50tu8500-review-image4-6gw0bglewl-jpg copy.tiff,152964-tv-review-samsung-ue50tu8500-review-image4-6gw0bglewl-jpg copy.tiff,', 'Pocket-lint\r\nSamsung UE50TU8500', 0),
(5, 4, 3, 'Samsung TV UE32TU8500', '435qcdmfndg', 450000, 3, '152964-tv-review-samsung-ue50tu8500-review-image4-6gw0bglewl-jpg copy.tiff,152964-tv-review-samsung-ue50tu8500-review-image4-6gw0bglewl-jpg copy.tiff,', 'Samsung TV UE32TU8500', 0),
(6, 2, 1, 'Classic Black Dinner Gown', 'Classic Black Dinner Gown', 35000, 5, '519705070134843.jpg,519705070134843.jpg,', 'Classic Black Dinner Gown', 0),
(7, 2, 1, 'Classic Dinner Grown', 'Classic Dinner Grown', 29000, 8, '47908346_polish-20200704-161218542_1500x1500.jpg,47908346_polish-20200704-161218542_1500x1500.jpg,', 'Classic Dinner Grown', 0),
(8, 2, 1, 'CUTE DINNER DATE OUTFIT', 'CUTE DINNER DATE OUTFIT', 35900, 2, '16-ExtraPetite-5c33851546e0fb0001b1b6e8.jpg,16-ExtraPetite-5c33851546e0fb0001b1b6e8.jpg,', 'CUTE DINNER DATE OUTFIT', 0),
(9, 1, 2, 'Grilled burger', 'GRILLED BURGER', 3800, 30, '13COOKING-BURGER-articleLarge.jpg,13COOKING-BURGER-articleLarge.jpg,', 'GRILLED BURGER', 0),
(11, 1, 2, 'Lou\'s burger', 'Serve these tasty beef burgers with potato wedges for a complete mid-week meal.', 4000, 12, 'family-favourite-hamburgers-2911-1.jpeg,family-favourite-hamburgers-2911-1.jpeg,', '1/4 cup olive oil\r\n1 onion, finely diced\r\n4 garlic cloves, crushed\r\n1 cup flat-leaf parsley leaves, chopped\r\n1/4 cup basil leaves, chopped', 0),
(12, 2, 1, 'CUTE DINNER DATE OUTFIT', 'CUTE DINNER DATE OUTFIT', 35900, 2, '16-ExtraPetite-5c33851546e0fb0001b1b6e8.jpg,16-ExtraPetite-5c33851546e0fb0001b1b6e8.jpg,', 'CUTE DINNER DATE OUTFIT', 0),
(13, 5, 1, 'traditional Purse', 'For shopping ', 5000, 21, 'handbag2.jpg,handbag2.jpg,', 'Small size', 0),
(14, 5, 1, 'TRADITIONAL tote Bag', 'Large and much capacity', 4500, 31, 'handbag4.jpg,handbag4.jpg,', 'Large size', 0),
(15, 5, 1, 'traditional hang bag', 'beautiful to use ', 10000, 12, 'handbag1.jpg,handbag1.jpg,', 'Small size', 0),
(16, 5, 1, 'TRADITIONAL bag New', '3 color/Big size', 6000, 12, 'handbag3.jpg,handbag3.jpg,', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `shop_id` int NOT NULL,
  `user_id` int NOT NULL,
  `category_id` int NOT NULL,
  `ownername` text NOT NULL,
  `shop_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shopphnum` text NOT NULL,
  `shopemail` text NOT NULL,
  `shopaddress` text NOT NULL,
  `shopdes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `shop_info`
--

INSERT INTO `shop_info` (`shop_id`, `user_id`, `category_id`, `ownername`, `shop_name`, `shopphnum`, `shopemail`, `shopaddress`, `shopdes`) VALUES
(1, 8, 2, 'TMH', 'Lets food ', '091234', 'chillfood@gmail.com', 'Yangon', 'food is paradise'),
(2, 8, 1, 'TMH', 'Lets chill with fashion', '0956789', 'chillfashion@gmail.com', 'Yangon', 'fashion is paradise'),
(3, 10, 3, 'june', 'JUNE COMPUTER STORE', '09123456', 'junepcstore@gmail.com', '405, Mango Street, Hlaing, Yangon.', 'amazing laptop with amazing price'),
(4, 11, 3, 'sally', 'Sally Mobile and Electronic center', '0912345', 'sallyceter@gmail.com', '29, Apple street, Yangon.', 'you will say wow on our products:3'),
(5, 11, 1, ' Yamin Thiri Aung', 'Yamin shop', '0978555549', 'yamin@gmail.com', 'yamin', 'yamin'),
(6, 13, 1, ' YaminThiriAung', 'shop1 ', '09785555948', 'yamin@gmail.com', '123', 'for clothing');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `product`, `amount`, `currency`, `status`, `created_at`) VALUES
('ch_1HvrsbKfiVHi9Uzi6Pe79Soo', 'cus_IWvk8k4IakAIXw', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 04:38:23'),
('ch_1HvsQZKfiVHi9Uzi4pp6LMSD', 'cus_IWwJxIYruwbLVj', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 05:13:29'),
('ch_1Hvth2KfiVHi9UziQLWXhwmO', 'cus_IWxcVPbueEvmNW', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 06:34:35'),
('ch_1HvtjVKfiVHi9UziML0VUAOQ', 'cus_IWxeLxWuw4TjuH', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 06:37:08'),
('ch_1HvtW5KfiVHi9Uzit55m1t0p', 'cus_IWxQcTKTeJM2MM', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 06:23:16'),
('ch_1HvtXcKfiVHi9UziRY0yWVzY', 'cus_IWxS9LVp89HpvP', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 06:24:50'),
('ch_1Hw688KfiVHi9UziIxBH66z8', 'cus_IXATvd0GyD3Vhd', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 19:51:25'),
('ch_1Hw9LIKfiVHi9UzifxuzjDMn', 'cus_IXDmfhMFhjCpVR', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-08 23:17:13'),
('ch_1HwmDyKfiVHi9UziwWeoHp5X', 'cus_IXrx9RR4XqvbuJ', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-10 16:48:15'),
('ch_1Hx3NCKfiVHi9UziS1HDnWcW', 'cus_IY9gRt0YiPbTQb', 'Intro To React Course', '5000', 'usd', 'succeeded', '2020-12-11 11:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `seller_buyer` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `phone_no`, `address`, `email`, `password`, `seller_buyer`) VALUES
(7, 'Yamin Thiri Aung', '9785555948', 'Yangon', 'yaminthiriaungyta@gmail.com', 'Yaminthiri21$', 'Buyer'),
(8, 'Hnin', '912345', 'Yangon', 'okithetmon.th@gmail.com', '12345', 'Seller'),
(9, 'Yamin', '912345', 'yangon', 'yamin@gmail.com', '12345', 'Buyer'),
(10, 'June', '9123456', 'Yangon', 'june@gmail.com', '12345', 'Seller'),
(11, 'aung aung', '912345', 'yangon', 'aung@gmail.com', '12345', 'Seller'),
(12, 'Thiri', '912345', 'Yangon', 'thiri@gmail.com', '12345', 'Buyer'),
(13, ' YaminThiriAung', '09785555948', 'Insein', 'yaminthiriaungyta@gmail.com', '1234', 'Seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_info`
--
ALTER TABLE `category_info`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d`
--
ALTER TABLE `d`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `product_comment_info`
--
ALTER TABLE `product_comment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`shop_id`),
  ADD KEY `userid` (`user_id`),
  ADD KEY `cid` (`category_id`) USING BTREE;

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d`
--
ALTER TABLE `d`
  MODIFY `question_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `product_comment_info`
--
ALTER TABLE `product_comment_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `shop_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
