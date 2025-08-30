-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2025 at 08:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `ec_categories`
--

CREATE TABLE `ec_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) DEFAULT NULL,
  `cat_name` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `slug_url` text DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_categories`
--

INSERT INTO `ec_categories` (`id`, `cat_id`, `cat_name`, `meta_title`, `meta_desc`, `meta_key`, `slug_url`, `status`, `added_on`) VALUES
(36, 33277, 'fashion design', 'Meta Title', 'Meta Description', 'Meta Keyword', 'fashion-design', 1, '2025-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `ec_product`
--

CREATE TABLE `ec_product` (
  `id` int(10) NOT NULL,
  `pro_id` int(10) DEFAULT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `pro_cate` int(10) DEFAULT NULL,
  `pro_sub_cate` int(10) DEFAULT NULL,
  `pro_desc` longblob DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `pro_image` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `slug_url` text DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_product`
--

INSERT INTO `ec_product` (`id`, `pro_id`, `pro_name`, `pro_cate`, `pro_sub_cate`, `pro_desc`, `mrp`, `stock`, `selling_price`, `pro_image`, `meta_title`, `meta_desc`, `meta_key`, `status`, `slug_url`, `added_on`) VALUES
(8, 24872, 'ethenic', 33277, 0, 0x637664626877656b66626a636e7364627662736e, 20000, 15, 0, 'assets/img/uploads/qPjEkQA.webp', 'Meta Title', 'Meta Description', 'Meta Keyword', 1, 'ethenic', '2025-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `ec_sub_categories`
--

CREATE TABLE `ec_sub_categories` (
  `id` int(11) NOT NULL,
  `cat_id` int(10) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL,
  `cat_name` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_desc` text DEFAULT NULL,
  `meta_key` text DEFAULT NULL,
  `slug_url` text DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `added_on` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ec_sub_categories`
--

INSERT INTO `ec_sub_categories` (`id`, `cat_id`, `parent_id`, `cat_name`, `meta_title`, `meta_desc`, `meta_key`, `slug_url`, `status`, `added_on`) VALUES
(12, 50582, 33277, 'fashion', 'Meta Title', 'Meta Description', 'Meta Keyword', 'fashion', 1, '2025-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `user_name` text DEFAULT NULL,
  `user_mail` varchar(256) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `user_name`, `user_mail`, `phone_no`, `created_at`) VALUES
(5, 70482, 'san', 'xyz@gmail.com', 2147483647, '2025-07-25 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ec_categories`
--
ALTER TABLE `ec_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_product`
--
ALTER TABLE `ec_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ec_sub_categories`
--
ALTER TABLE `ec_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ec_categories`
--
ALTER TABLE `ec_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ec_product`
--
ALTER TABLE `ec_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ec_sub_categories`
--
ALTER TABLE `ec_sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
