-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 11:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Furniture', 'furniture2.jpg', '2020-04-13 21:08:35', '2020-04-14 03:39:30'),
(5, 'Devices', 'devices.jpg', '2020-04-14 01:00:04', '2020-04-14 03:49:25'),
(7, 'Food', 'food2.jpg', '2020-04-14 03:13:43', '2020-04-14 03:14:13'),
(9, 'Tools', 'tools2.jpg', '2020-04-14 03:33:10', '2020-04-14 03:39:47'),
(10, 'Animals', 'dog.jpg', '2020-04-14 03:54:45', '2020-04-19 02:01:03'),
(12, 'Toys', 'toys.jpg', '2020-04-14 04:13:39', '2020-04-14 04:13:39'),
(13, 'Drugs', 'drugs.jpg', '2020-04-14 04:14:05', '2020-04-14 04:14:05'),
(15, 'shoes', 'shoes2.jpg', '2020-04-14 04:32:59', '2020-04-14 04:32:59'),
(16, 'Bags', 'bags.jpg', '2020-04-14 04:33:39', '2020-04-14 04:33:39'),
(17, 'Glasses', 'glasses_M.jpg', '2020-04-14 04:34:09', '2020-04-14 04:34:09'),
(18, 'music', 'music2.jpg', '2020-04-14 21:46:11', '2020-04-14 21:46:11'),
(21, 'pizza', 'pizza2.jpg', '2020-04-25 06:36:19', '2020-04-25 06:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_price` double(10,5) NOT NULL,
  `product_total_cost` double(10,5) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`user_id`, `product_name`, `product_quantity`, `product_price`, `product_total_cost`, `image`, `created_at`, `updated_at`) VALUES
(1, 'chair1', 1, 40.00000, 40.00000, 'Chair.jpg', '2020-04-24 22:08:27', '2020-04-24 22:08:27'),
(1, 'Tshirt4', 1, 20.00000, 20.00000, 'T-shirt.jpg', '2020-04-24 22:09:15', '2020-04-24 22:09:15'),
(1, 'mobile1', 1, 1000.00000, 1000.00000, 'mobile.jpg', '2020-04-24 22:14:55', '2020-04-24 22:14:55'),
(1, 'Tshirt3', 2, 20.00000, 40.00000, 'T-shirt.jpg', '2020-04-25 00:04:09', '2020-04-25 00:04:09'),
(1, 'Tshirt3', 2, 20.00000, 40.00000, 'T-shirt.jpg', '2020-04-25 00:23:09', '2020-04-25 00:23:09'),
(1, 'dog1', 1, 400.00000, 400.00000, 'c3.jpg', '2020-04-25 00:26:07', '2020-04-25 00:26:07'),
(1, 'Tshirt2', 1, 50.00000, 50.00000, 'T-shirt.jpg', '2020-04-25 00:28:01', '2020-04-25 00:28:01'),
(1, 'Tshirt2', 1, 50.00000, 50.00000, 'T-shirt.jpg', '2020-04-25 00:33:08', '2020-04-25 00:33:08'),
(1, 'Tshirt1', 1, 40.00000, 40.00000, 'T-shirt.jpg', '2020-04-25 00:41:50', '2020-04-25 00:41:50'),
(1, 'Tshirt3', 1, 20.00000, 20.00000, 'a', '2020-04-25 00:46:00', '2020-04-25 00:46:00'),
(1, 'Tshirt2', 1, 50.00000, 50.00000, 'T-shirt.jpg', '2020-04-25 01:03:16', '2020-04-25 01:03:16'),
(1, 'Tshirt2', 1, 50.00000, 50.00000, 'T-shirt.jpg', '2020-04-25 01:04:13', '2020-04-25 01:04:13'),
(1, 'chair200', 1, 40.00000, 40.00000, 'p4.jpg', '2020-04-25 06:44:13', '2020-04-25 06:44:13'),
(1, 'mobile1', 1, 1000.00000, 1000.00000, 'mobile.jpg', '2020-04-25 06:44:13', '2020-04-25 06:44:13'),
(1, 'mobile2', 2, 1000.00000, 2000.00000, 'mobile.jpg', '2020-04-25 06:44:13', '2020-04-25 06:44:13'),
(2, 'cat', 3, 200.00000, 600.00000, 'c1.jpg', '2020-04-25 06:46:02', '2020-04-25 06:46:02'),
(1, 'Tshirt1', 1, 50.00000, 50.00000, 'pp1.jpeg', '2020-04-25 07:25:44', '2020-04-25 07:25:44'),
(1, 'chair2', 3, 50.00000, 150.00000, 'Chair.jpg', '2020-04-25 07:25:44', '2020-04-25 07:25:44'),
(2, 'mobile1', 3, 1000.00000, 3000.00000, 'mobile.jpg', '2020-04-25 07:30:37', '2020-04-25 07:30:37'),
(2, 'TV', 1, 2000.00000, 2000.00000, 'd2.png', '2020-04-25 07:30:37', '2020-04-25 07:30:37'),
(2, 'chair2', 1, 50.00000, 50.00000, 'Chair.jpg', '2020-04-25 07:30:37', '2020-04-25 07:30:37'),
(2, 'Bed', 2, 1000.00000, 2000.00000, 'p3.jpg', '2020-04-25 07:30:37', '2020-04-25 07:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_12_171432_create_categories_table', 1),
(5, '2020_04_13_230158_create_products', 2),
(8, '2020_04_24_173623_card_table', 3),
(11, '2020_04_24_204345_history_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(10,5) NOT NULL,
  `offer` double(10,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `quantity`, `price`, `offer`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'mobile1', 'mobile.jpg', 0, 1000.00000, 0.00000, '2020-04-18 21:15:27', '2020-04-25 07:29:55', 5),
(2, 'TV', 'd2.png', 1, 2000.00000, 0.00000, '2020-04-18 23:19:19', '2020-04-25 07:29:39', 5),
(3, 'chair200', 'p4.jpg', 0, 40.00000, 0.00000, '2020-04-18 23:54:47', '2020-04-25 06:43:11', 2),
(4, 'chair2', 'Chair.jpg', 6, 50.00000, 0.00000, '2020-04-18 23:55:41', '2020-04-25 07:30:12', 2),
(11, 'dog1', 'c3.jpg', 1, 400.00000, 0.00000, '2020-04-19 00:08:23', '2020-04-25 07:28:52', 10),
(17, 'Bed', 'p3.jpg', 1, 1000.00000, 0.00000, '2020-04-25 04:14:17', '2020-04-25 07:30:16', 2),
(18, 'cat', 'c1.jpg', 0, 200.00000, 0.00000, '2020-04-25 06:21:44', '2020-04-25 06:45:51', 10),
(19, 'pizza1', 'z2.jpeg', 2, 40.00000, 0.00000, '2020-04-25 06:37:56', '2020-04-25 06:39:45', 21);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mayer', 'mayeremad5@gmail.com', NULL, '$2y$10$J9OZQOx15vNthcq0COeajeErLy8TGl7D20n.4i.zHuCsOa3575E26', 'YUJxO0k0W3KnlfoJPeSlQN9lSL11gPWIgEWrfGikStrXcDzYKR5KEqnTInPX', '2020-04-14 15:49:10', '2020-04-14 15:49:10'),
(2, 'mayer2', 'mayer.emad@yahoo.com', NULL, '$2y$10$a0Iqo6EdAfXB/FiEHTvxnOJxYIsAuGY6I8tx.Jylk8oOfEOW8i32W', NULL, '2020-04-23 23:39:24', '2020-04-23 23:39:24'),
(3, 'user', 'mayeremad@gmail.com', NULL, '$2y$10$9EK2nSYlivB0kUrME/ZQC.hGRr2zZ90HCAjaFUsCG6KHFou4.jgIK', NULL, '2020-04-25 07:31:51', '2020-04-25 07:31:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
