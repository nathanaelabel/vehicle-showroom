-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 12, 2023 at 12:28 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uc_showroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` bigint UNSIGNED NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Gasoline',
  `trunk_size_car` double(8,2) NOT NULL DEFAULT '0.00',
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `fuel_type`, `trunk_size_car`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 'Gasoline', 20.65, 5, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 'Diesel', 15.07, 6, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 'Diesel', 28.14, 7, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(4, 'Electric', 22.78, 10, '2023-11-11 17:27:39', '2023-11-11 17:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `address`, `phone_number`, `id_card`, `created_at`, `updated_at`) VALUES
(1, 'Torrance Fadel PhD', '5156 Maggio Underpass\nNew Janet, PA 12685', '915-418-1439', '54669743', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 'Elton Lang', '499 Gerhold Trafficway\nPort Abdul, CT 00235-1003', '+1-940-976-8389', '56336536', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 'Mrs. Ramona Zulauf Sr.', '24718 Stehr Glen\nEast Cordieberg, LA 02595-9086', '714-602-9515', '42412691', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(4, 'Telly Ziemann', '335 Heaney Mount\nSouth Ceciliaside, WY 70088-3445', '+1 (518) 342-6976', '66965974', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(5, 'Jodie Bins', '6806 Cummings Road Suite 556\nPort Darren, CA 91789', '1-781-931-5942', '49024540', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(6, 'Katheryn Schuster', '584 Sid Shores Apt. 577\nWest Sterlingbury, RI 35500', '+1.530.253.1917', '13394732', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(7, 'Dr. Manley Lind II', '480 Rodrigo Forest\nMcGlynnport, MT 92401-5971', '351.797.4892', '187259', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(8, 'Prof. Santa Johns', '7785 Tyrel Mews\nTorranceshire, WA 28782-9169', '+1.229.907.8505', '45380238', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(9, 'Miss Lauryn Reilly', '8632 Cummings Place Suite 020\nTavareschester, MI 80853-3479', '678-639-9397', '20229099', '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(10, 'Miss Natalia Zboncak', '806 Harber View\nEast Malvinaburgh, FL 89091', '425-957-8016', '58307202', '2023-11-11 17:27:39', '2023-11-11 17:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_11_024928_create_customers_table', 1),
(6, '2023_11_11_074441_create_vehicles_table', 1),
(7, '2023_11_11_080623_create_cars_table', 1),
(8, '2023_11_11_081401_create_motorcycles_table', 1),
(9, '2023_11_11_081427_create_trucks_table', 1),
(10, '2023_11_11_093415_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `motorcycles`
--

CREATE TABLE `motorcycles` (
  `motorcycle_id` bigint UNSIGNED NOT NULL,
  `trunk_size_motorcycle` double(8,2) NOT NULL DEFAULT '0.00',
  `fuel_capacity` double(8,2) NOT NULL DEFAULT '1.00',
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motorcycles`
--

INSERT INTO `motorcycles` (`motorcycle_id`, `trunk_size_motorcycle`, `fuel_capacity`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 1.15, 18.54, 4, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 2.20, 12.12, 8, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 4.69, 6.11, 9, '2023-11-11 17:27:39', '2023-11-11 17:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 9, 5, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 1, 7, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 7, 6, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(4, 3, 10, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(5, 5, 1, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(6, 10, 3, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(7, 4, 8, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(8, 8, 4, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(9, 2, 2, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(10, 6, 9, '2023-11-11 17:27:39', '2023-11-11 17:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `truck_id` bigint UNSIGNED NOT NULL,
  `wheel_count` int NOT NULL DEFAULT '4',
  `cargo_area_size` int NOT NULL DEFAULT '0',
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`truck_id`, `wheel_count`, `cargo_area_size`, `vehicle_id`, `created_at`, `updated_at`) VALUES
(1, 10, 103, 1, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 10, 104, 2, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 11, 71, 3, '2023-11-11 17:27:39', '2023-11-11 17:27:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicle_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `passenger_count` int NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicle_id`, `type`, `model`, `year`, `passenger_count`, `manufacturer`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Truck', 'placeat', 2013, 3, 'Daniel, Koss and Ernser', 19819, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(2, 'Truck', 'et', 1971, 6, 'Jaskolski, Sawayn and Rau', 45134, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(3, 'Truck', 'ea', 1980, 2, 'Bradtke, Powlowski and Bartell', 27518, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(4, 'Motorcycle', 'cupiditate', 1998, 5, 'Torphy-Emmerich', 26004, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(5, 'Car', 'cumque', 1994, 4, 'Beer-Hudson', 34366, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(6, 'Car', 'libero', 1994, 5, 'Maggio Group', 23242, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(7, 'Car', 'et', 1995, 5, 'Dach Ltd', 37493, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(8, 'Motorcycle', 'expedita', 1975, 4, 'Altenwerth, Boyle and Heller', 36852, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(9, 'Motorcycle', 'sunt', 2004, 6, 'Harber-Jenkins', 27604, '2023-11-11 17:27:39', '2023-11-11 17:27:39'),
(10, 'Car', 'earum', 1987, 2, 'Johns, Durgan and Davis', 10398, '2023-11-11 17:27:39', '2023-11-11 17:27:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`),
  ADD KEY `cars_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motorcycles`
--
ALTER TABLE `motorcycles`
  ADD PRIMARY KEY (`motorcycle_id`),
  ADD KEY `motorcycles_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`),
  ADD KEY `orders_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`truck_id`),
  ADD KEY `trucks_vehicle_id_foreign` (`vehicle_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `motorcycles`
--
ALTER TABLE `motorcycles`
  MODIFY `motorcycle_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `truck_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `vehicle_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motorcycles`
--
ALTER TABLE `motorcycles`
  ADD CONSTRAINT `motorcycles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trucks`
--
ALTER TABLE `trucks`
  ADD CONSTRAINT `trucks_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
