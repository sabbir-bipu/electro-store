-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 03:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electro_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Samsung', 'Samsung', 1, '2019-11-07 15:53:17', '2019-11-07 15:53:17'),
(5, 'Xiaomi', 'Xiaomi', 1, '2019-11-07 15:53:28', '2019-11-07 15:53:28'),
(6, 'Apple', 'Apple', 1, '2019-11-07 15:53:34', '2019-11-07 15:53:34'),
(7, 'Huawei', 'Huawei', 1, '2019-11-07 15:53:57', '2019-11-07 15:53:57'),
(8, 'Oppo', 'Oppo', 1, '2019-11-07 15:55:27', '2019-11-07 15:55:27'),
(9, 'Sony', 'Sony', 1, '2019-11-07 15:55:36', '2019-11-07 15:55:36'),
(10, 'LG', 'LG', 1, '2019-11-07 16:04:58', '2019-11-07 16:04:58'),
(11, 'Dell', 'Dell', 1, '2019-11-07 16:05:41', '2019-11-07 16:05:41'),
(12, 'Acer', 'Acer', 1, '2019-11-07 16:05:49', '2019-11-07 16:05:49'),
(13, 'HP', 'HP', 1, '2019-11-07 16:05:55', '2019-11-07 16:05:55'),
(14, 'Lenovo', 'Lenovo', 1, '2019-11-07 16:06:05', '2019-11-07 16:06:05'),
(15, 'Lotto', 'Lotto', 1, '2019-11-07 16:07:02', '2019-11-07 16:07:02'),
(16, 'Arong', 'Arong', 1, '2019-11-07 16:07:10', '2019-11-07 16:07:10'),
(17, 'Yellow', 'Yellow', 1, '2019-11-07 16:07:18', '2019-11-07 16:07:18'),
(18, 'Richman', 'Richman', 1, '2019-11-07 16:07:39', '2019-11-07 16:07:39'),
(19, 'Converse', 'Converse', 1, '2019-11-07 16:08:52', '2019-11-07 16:08:52'),
(20, 'Reebok', 'Reebok', 1, '2019-11-07 16:09:20', '2019-11-07 16:09:20'),
(21, 'Artisti', 'Artisti', 1, '2019-11-07 16:09:35', '2019-11-07 16:09:35'),
(22, 'Rolex', 'Rolex', 1, '2019-11-07 16:10:45', '2019-11-07 16:10:45'),
(23, 'Seiko', 'Seiko', 1, '2019-11-07 16:10:52', '2019-11-07 16:10:52'),
(24, 'Fastrack', 'Fastrack', 1, '2019-11-07 16:11:04', '2019-11-07 16:11:04'),
(25, 'Casio', 'Casio', 1, '2019-11-07 16:11:15', '2019-11-07 16:11:15'),
(26, 'Hublot', 'Hublot', 1, '2019-11-07 16:11:33', '2019-11-07 16:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Mobiles', 'Mobile', 1, '2019-11-30 11:09:53', '2019-11-30 11:10:04'),
(5, 'Laptops', 'Laptops', 1, '2019-11-07 15:51:27', '2019-11-07 15:51:27'),
(6, 'Televisions', 'Televisions', 1, '2019-11-07 15:51:45', '2019-11-07 15:51:45'),
(7, 'Clothes', 'Clothes', 1, '2019-11-07 15:52:09', '2019-11-07 15:52:09'),
(8, 'Shoes', 'Shoes', 1, '2019-11-07 15:52:17', '2019-11-07 15:52:17'),
(9, 'Watches', 'Watches', 1, '2019-11-07 15:52:31', '2019-11-07 15:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email_address`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(13, 'Sabbir', 'Ahmmed', 'sabbirahmmed@gmail.com', '$2y$10$rDliw3fYHjqPszozciXabey8N7vzLEV7S20Tb3voWpo1MXJKFh9Gq', '00000000000', 'Dhaka', '2019-11-28 09:20:09', '2019-11-28 09:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_06_151854_create_categories_table', 2),
(4, '2019_11_06_221818_create_brands_table', 3),
(5, '2019_11_06_224949_create_products_table', 4),
(6, '2019_11_10_161941_create_customers_table', 5),
(7, '2019_11_10_173923_create_orders_table', 6),
(8, '2019_11_10_174432_create_order_details_table', 6),
(9, '2019_11_10_174539_create_payments_table', 6),
(10, '2019_10_24_161247_create_shippings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(3, 13, 6, 180000.00, 'Pending', '2019-11-28 11:29:16', '2019-11-28 11:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(3, 3, 7, 'Oppo', 60000.00, 2, '2019-11-28 11:29:16', '2019-11-28 11:29:16'),
(4, 3, 6, 'Huawei', 60000.00, 1, '2019-11-28 11:29:16', '2019-11-28 11:29:16'),
(5, 4, 14, 'Sony Television', 100000.00, 1, '2019-11-30 09:42:33', '2019-11-30 09:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2019-11-26 16:51:18', '2019-11-26 16:51:18'),
(2, 2, 'Cash', 'Pending', '2019-11-27 11:34:39', '2019-11-27 11:34:39'),
(3, 3, 'Cash', 'Pending', '2019-11-28 11:29:16', '2019-11-28 11:29:16'),
(4, 4, 'Cash', 'Pending', '2019-11-30 09:42:33', '2019-11-30 09:42:33');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 8, 19, 'Converse', 1000.00, 1, 'Converse Shoe', '<p>Converse Shoe</p>', 'product-images/Converse 2.jpg', 1, '2019-11-07 16:15:11', '2019-11-09 08:48:59'),
(3, 4, 4, 'Samsung', 50000.00, 1, 'Samsung Smart Phone', '<p>Samsung Smart Phone</p>', 'product-images/Samsung.jpg', 1, '2019-11-07 16:22:59', '2019-11-07 16:22:59'),
(4, 4, 5, 'Xiaomi', 50000.00, 1, 'Xiaomi Smart Phone', '<p>Xiaomi Smart Phone</p>', 'product-images/Xiaomi.jpg', 1, '2019-11-07 16:24:03', '2019-11-07 16:24:03'),
(5, 4, 6, 'Apple', 100000.00, 1, 'Apple Smart Phone', '<p>Apple Smart Phone</p>', 'product-images/Apple.jpg', 1, '2019-11-07 16:24:50', '2019-11-07 16:24:50'),
(6, 4, 7, 'Huawei', 60000.00, 1, 'Huawei Smart Phone', '<p>Huawei Smart Phone</p>', 'product-images/Huawei.jpg', 1, '2019-11-07 16:27:00', '2019-11-07 16:27:00'),
(7, 4, 8, 'Oppo', 60000.00, 1, 'Oppo Smart Phone', '<p>Oppo Smart Phone</p>', 'product-images/Oppo.jpg', 1, '2019-11-07 16:28:07', '2019-11-07 16:28:07'),
(8, 5, 4, 'Samsung Laptop', 70000.00, 1, 'Samsung Laptop', '<p>Samsung Laptop</p>', 'product-images/Samsung Laptop.jpg', 1, '2019-11-07 16:28:50', '2019-11-07 16:28:50'),
(9, 5, 11, 'Dell Laptop', 70000.00, 1, 'Dell Laptop', '<p>Dell Laptop</p>', 'product-images/Dell Laptop.jpg', 1, '2019-11-07 16:29:19', '2019-11-07 16:29:19'),
(10, 5, 12, 'Acer Laptop', 70000.00, 1, 'Acer Laptop', '<p>Acer Laptop</p>', 'product-images/Acer Laptop.jpg', 1, '2019-11-07 16:29:52', '2019-11-07 16:29:52'),
(11, 5, 13, 'HP Laptop', 80000.00, 1, 'HP Laptop', '<p>HP Laptop</p>', 'product-images/HP Laptop.jpg', 1, '2019-11-07 16:30:20', '2019-11-07 16:30:20'),
(12, 5, 14, 'Lenovo Laptop', 50000.00, 1, 'Lenovo Laptop', '<p>Lenovo Laptop</p>', 'product-images/Lenovo Laptop.jpg', 1, '2019-11-07 16:30:52', '2019-11-07 16:30:52'),
(13, 6, 4, 'Samsung Television', 100000.00, 1, 'Samsung Television', '<p>Samsung Television</p>', 'product-images/Samsung Television.jpg', 1, '2019-11-07 16:31:42', '2019-11-07 16:31:42'),
(14, 6, 9, 'Sony Television', 100000.00, 1, 'Sony Television', '<p>Sony Television</p>', 'product-images/Sony Television.jpg', 1, '2019-11-07 16:32:53', '2019-11-07 16:32:53'),
(15, 6, 10, 'LG Television', 100000.00, 1, 'LG Television', '<p>LG Television</p>', 'product-images/LG Television.jpg', 1, '2019-11-07 16:33:21', '2019-11-07 16:33:21'),
(16, 6, 5, 'Xiaomi Television', 100000.00, 1, 'Xiaomi Television', '<p>Xiaomi Television</p>', 'product-images/Xiaomi Television.jpg', 1, '2019-11-07 16:34:00', '2019-11-07 16:34:00'),
(17, 7, 16, 'Sharee', 5000.00, 1, 'Sharee', '<p>Sharee</p>', 'product-images/Sharee.jpg', 1, '2019-11-07 16:37:28', '2019-11-07 16:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email_address`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Sabbir Ahmmed', 'sabbirahmmed.cse@gmail.com', '01717662072', 'Rajshahi', '2019-11-26 16:51:03', '2019-11-26 16:51:03'),
(2, 'Sabbir Ahmmed', 'sabbir.jasper@gmail.com', '01717662072', 'Dhaka', '2019-11-27 11:22:30', '2019-11-27 11:22:30'),
(3, 'Sabbir Ahmmed', 'sabbir.jasper@gmail.com', '01717662072', 'Dhaka', '2019-11-27 11:31:59', '2019-11-27 11:31:59'),
(4, 'Sabbir Ahmmed', 'sabbirahmmed@gmail.com', '00000000000', 'Dhaka', '2019-11-28 09:49:24', '2019-11-28 09:49:24'),
(5, 'Sabbir Ahmmed', 'dsafdasf@dsadas.com', '00000000000', 'sadasd', '2019-11-28 11:11:59', '2019-11-28 11:11:59'),
(6, 'Sabbir Ahmmed', 'sabbirahmmed@gmail.com', '00000000000', 'Dhaka', '2019-11-28 11:29:13', '2019-11-28 11:29:13'),
(7, 'Sabbir Ahmmed', 'sabbirahmmed@gmail.com', '00000000000', 'Dhaka', '2019-11-30 09:42:29', '2019-11-30 09:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sabbir Ahmmed', 'sabbirahmmed@gmail.com', '$2y$10$h0eF3k0V7GwZE7sp.5gWqOX/Kvf28eNLe2m0WvW7jNpyTYYjQGpQC', 'hd2o9cvEi91MLhT8Aw77afxgC04YZTETFfHczEkEJOQoIXQtvoiyDCHEs5VU', '2019-11-05 16:49:18', '2019-11-05 16:49:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
