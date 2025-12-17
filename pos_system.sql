-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2025 at 04:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'Electronic devices, gadgets, and accessories including smartphones, laptops, and audio equipment', '2025-12-16 19:23:09', '2025-12-16 19:23:09'),
(2, 'Clothing', 'Apparel, fashion items, and accessories for men, women, and children', '2025-12-16 19:23:09', '2025-12-16 19:23:09'),
(3, 'Food & Beverages', 'Food products, snacks, beverages, and grocery items', '2025-12-16 19:23:09', '2025-12-16 19:23:09'),
(4, 'Home & Garden', 'Home decor, furniture, kitchen items, and gardening supplies', '2025-12-16 19:23:09', '2025-12-16 19:23:09'),
(5, 'Sports & Fitness', 'Sports equipment, fitness gear, and outdoor recreational items', '2025-12-16 19:23:09', '2025-12-16 19:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `logID` bigint(20) UNSIGNED NOT NULL,
  `ActionType` varchar(255) NOT NULL,
  `entityID` bigint(20) UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `entityType` varchar(255) NOT NULL,
  `details` text DEFAULT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_10_28_064605_create_categories_table', 1),
(4, '2025_10_28_071700_create_roles_table', 1),
(5, '2025_10_28_071701_create_users_table', 1),
(6, '2025_10_28_094122_create_reports_table', 1),
(7, '2025_10_28_095416_create_logs_table', 1),
(8, '2025_10_28_101157_create_pricing_rules_table', 1),
(9, '2025_10_28_102109_create_tax_rules_table', 1),
(10, '2025_10_28_111510_create_products_table', 1),
(11, '2025_10_28_160627_create_receipts_table', 1),
(12, '2025_10_28_161504_create_transactions_table', 1),
(13, '2025_10_28_162434_create_transaction_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext DEFAULT NULL,
  `stocklevel` int(11) NOT NULL DEFAULT 0,
  `is_test_record` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `price`, `description`, `stocklevel`, `is_test_record`) VALUES
(1, 1, 'Wireless Bluetooth Headphones', 2500, 'High-quality wireless headphones with noise cancellation and 20-hour battery life', 50, 0),
(2, 1, 'Smart Watch Pro', 8500, 'Feature-rich smartwatch with fitness tracking, heart rate monitor, and GPS', 30, 0),
(3, 2, 'Cotton T-Shirt', 350, 'Premium 100% cotton t-shirt available in multiple colors and sizes', 200, 0),
(4, 2, 'Denim Jeans', 1200, 'Classic fit denim jeans, durable and comfortable for everyday wear', 80, 0),
(5, 3, 'Organic Green Tea', 280, 'Premium organic green tea leaves, 50 tea bags per box', 150, 0),
(6, 3, 'Dark Chocolate Bar', 120, '70% cacao dark chocolate bar, 100g, imported from Belgium', 300, 0),
(7, 4, 'Indoor Plant Pot Set', 650, 'Set of 3 ceramic plant pots with drainage holes, perfect for succulents', 60, 0),
(8, 4, 'LED Desk Lamp', 1200, 'Adjustable LED desk lamp with USB charging port and touch controls', 45, 0),
(9, 5, 'Yoga Mat', 890, 'Non-slip yoga mat with carrying strap, 6mm thickness', 70, 0),
(10, 5, 'Water Bottle 1L', 450, 'Insulated stainless steel water bottle keeps drinks cold for 24 hours', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `printed_by_user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `period_start` date NOT NULL,
  `period_end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `report_type` varchar(255) NOT NULL,
  `generated_by_user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `period_start`, `period_end`, `created_at`, `updated_at`, `report_type`, `generated_by_user_id`) VALUES
(1, '2025-12-01', '2025-12-31', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Monthly Sales Report', 8),
(2, '2025-11-01', '2025-11-30', '2025-11-16 19:23:09', '2025-11-16 19:23:09', 'Monthly Sales Report', 4),
(3, '2025-12-15', '2025-12-21', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Weekly Inventory Report', 6),
(4, '2025-10-01', '2025-12-31', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Quarterly Financial Report', 9),
(5, '2025-12-08', '2025-12-14', '2025-12-09 19:23:09', '2025-12-09 19:23:09', 'Weekly Sales Report', 5),
(6, '2025-12-17', '2025-12-17', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Daily Sales Report', 1),
(7, '2025-01-01', '2025-12-31', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Annual Performance Report', 10),
(8, '2025-12-10', '2025-12-17', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Product Performance Report', 7),
(9, '2025-12-01', '2025-12-17', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Customer Transaction Report', 4),
(10, '2025-09-17', '2025-12-17', '2025-12-16 19:23:09', '2025-12-16 19:23:09', 'Tax Compliance Report', 8);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'Cashier'),
(2, 'Manager'),
(3, 'Inventory Staff'),
(4, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CbEccZoQzVALPoIjkm6jPT4xmTyX6h5JJzb6vYmD', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:146.0) Gecko/20100101 Firefox/146.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR0IwbGFVYUo3eU9QWWJLQnJqamRrOWRZblpqTzZCQ0gyTlVqZ004ZyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyOToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3JlY2VpcHQiO31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3RheF9ydWxlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjc6InJvbGVfaWQiO2k6Mzt9', 1765942566);

-- --------------------------------------------------------

--
-- Table structure for table `tax_rules`
--

CREATE TABLE `tax_rules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_date` date NOT NULL,
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receipt_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_items`
--

CREATE TABLE `transaction_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`, `last_login`, `role_id`) VALUES
(1, 'Kunrad01', '$2y$12$ufm02SqiLdxHx12VvlEP7uJyRxUE9QVg8Ygq2f7wXEqSHHQvlitl.', 'kunrad@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:07', 1),
(2, 'Frenchi02', '$2y$12$gJrRgtHHXQlTo0DSVTAOEuwirCsqTcOT0SD6qey7Xz6eKznVu6nuO', 'frenchie@gmail.com', '2025-12-16 16:00:00', '2025-12-16 19:24:59', '2025-12-17 03:24:59', 2),
(3, 'Hodge03', '$2y$12$IBDgiGDZBeCXgnXqsQFRDOLl7Q/.PnhkHHXTXq983cj6uhexxmv7m', 'hodge@gmail.com', '2025-12-16 16:00:00', '2025-12-16 19:25:55', '2025-12-17 03:25:55', 3),
(4, 'Admin04', '$2y$12$2r7cK5Q40ubpG1TbB/qc0Oo8LolvMJjUgAZTYfvgc2fmkFsc03rIi', 'admin@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:08', 4),
(5, 'Ella05', '$2y$12$iASjMGOLT8mQBX8bx71bEefaPX5CJznafp/aIcmlGDg/KIpG17Ha2', 'ella05@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:08', 1),
(6, 'Marco06', '$2y$12$N3KkaU4Xh5fNjtYI2kRlA.5ALObxa2wWzSTYz/WNdH2KDqHMkVf4S', 'marco06@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:08', 3),
(7, 'Clara07', '$2y$12$5kVxW7gb/8YLSioIyOZiHuAEVS1XSJfti50gVZ//svMHsGng/MmtW', 'clara07@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:09', 2),
(8, 'Rico08', '$2y$12$esiNc4lvdsms.t2PSZTF4u5V5U6fj9CqROHEMaNtnYY3LtupL6Hzq', 'rico08@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:09', 3),
(9, 'Diana09', '$2y$12$ZEwO2wBuGLvaiHsc3K4TyOGbBpEEk4O4AiH4HDJPx9B3m3bbvS7ya', 'diana09@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:09', 1),
(10, 'Leo10', '$2y$12$T/0wn7ZsLcufvkqldoG8peTZ.41fNpc0nr/cjPq35srakjt09Wvfy', 'leo10@gmail.com', '2025-12-16 16:00:00', '2025-12-16 16:00:00', '2025-12-17 03:23:09', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`logID`),
  ADD KEY `logs_userid_foreign` (`userID`),
  ADD KEY `logs_entitytype_index` (`entityType`),
  ADD KEY `logs_actiontype_index` (`ActionType`),
  ADD KEY `logs_timestamp_index` (`timestamp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `receipts_printed_by_user_id_foreign` (`printed_by_user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_generated_by_user_id_foreign` (`generated_by_user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tax_rules`
--
ALTER TABLE `tax_rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`),
  ADD KEY `transactions_receipt_id_foreign` (`receipt_id`);

--
-- Indexes for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_items_transaction_id_foreign` (`transaction_id`),
  ADD KEY `transaction_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `logID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tax_rules`
--
ALTER TABLE `tax_rules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_items`
--
ALTER TABLE `transaction_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_printed_by_user_id_foreign` FOREIGN KEY (`printed_by_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_generated_by_user_id_foreign` FOREIGN KEY (`generated_by_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_receipt_id_foreign` FOREIGN KEY (`receipt_id`) REFERENCES `receipts` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaction_items`
--
ALTER TABLE `transaction_items`
  ADD CONSTRAINT `transaction_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `transaction_items_transaction_id_foreign` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
