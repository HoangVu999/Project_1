-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2020 at 08:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `news_descriptiion` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `view_news` varbinary(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_adult_number` int(11) DEFAULT NULL,
  `order_child_number` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_phone` int(11) DEFAULT NULL,
  `user_mail` varchar(255) DEFAULT NULL,
  `order_booking_day` date DEFAULT NULL,
  `order_start_day` date DEFAULT NULL,
  `order_end_day` date DEFAULT NULL,
  `order_sum_price` float DEFAULT NULL,
  `order_status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `order_detail_sum_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `images` varchar(255) NOT NULL,
  `room_number` varchar(20) DEFAULT NULL,
  `room_description` varchar(255) DEFAULT NULL,
  `room_status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type_id`, `images`, `room_number`, `room_description`, `room_status`) VALUES
(1, 1, '', '111', '11111', b'0'),
(2, 1, '5f244ce55c6f8Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>hiA h ưm</p>', b'0'),
(3, 11, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>h&iacute; anh em&nbsp;</p>', b'1'),
(4, 8, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>h&iacute; anh em</p>', b'1'),
(5, 8, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>qqqq</p>', b'1'),
(6, 8, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>qqqq</p>', b'1'),
(7, 8, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>qqqq</p>', b'1'),
(9, 9, 'Diennvph07101_PT15362-MUL_Lab3.png', '123', '<p>h&iacute; anh em&nbsp;</p>', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `id` int(11) NOT NULL,
  `name_room_type` varchar(255) DEFAULT NULL,
  `room_price` float DEFAULT NULL,
  `room_price_sale` float DEFAULT NULL,
  `comment_id` int(11) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`id`, `name_room_type`, `room_price`, `room_price_sale`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, 'wwwww', 111122, 11122, 5, '2020-07-31', '2020-07-30'),
(11, 'deluxe room', 11.2233, 4, 0, '2020-07-31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `name_web` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `link_website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `slogan` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` int(4) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` int(2) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room_types`
--
ALTER TABLE `room_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
