-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2023 at 08:29 AM
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
-- Database: `sitedev`
--

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
-- Table structure for table `masterlists`
--

CREATE TABLE `masterlists` (
  `id` bigint UNSIGNED NOT NULL,
  `emp_num` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salarygrade` int DEFAULT NULL,
  `office` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterlists`
--

INSERT INTO `masterlists` (`id`, `emp_num`, `lname`, `fname`, `mname`, `position`, `salarygrade`, `office`, `created_at`, `updated_at`) VALUES
(1, '0500024D', 'Castillo', 'Paul Simon', 'Lito', 'ADAS II', 8, 'OSDS - ICT', '2023-03-29 03:45:43', '2023-03-29 03:45:43'),
(2, '85', 'Crooks', 'Shaniya', 'Reilly', '3', 1, 'Daremouth', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(3, '53', 'Weissnat', 'Laurianne', 'Orn', '4', 3, 'Hillmouth', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(4, '57', 'Bradtke', 'Aubrey', 'Braun', '7', 7, 'Hesterport', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(5, '16', 'Lesch', 'Chauncey', 'Cremin', '5', 5, 'Kamrenberg', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(6, '77', 'Harris', 'Ivy', 'Aufderhar', '2', 4, 'Sporerfurt', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(7, '87', 'Kautzer', 'Adolfo', 'Pouros', '4', 3, 'Blandaberg', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(8, '39', 'Pagac', 'Tressie', 'Barrows', '7', 4, 'Kaylieland', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(9, '47', 'Towne', 'Liliana', 'Weber', '2', 2, 'West Reid', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(10, '25', 'Schaden', 'Roberta', 'Collier', '2', 1, 'North Opheliastad', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(11, '64', 'Rosenbaum', 'Donnie', 'Legros', '1', 4, 'East Danyka', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(12, '55', 'Gleason', 'Simone', 'Okuneva', '5', 5, 'Andersonmouth', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(13, '1', 'Schaden', 'Luther', 'Connelly', '1', 1, 'Eileenburgh', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(14, '63', 'Green', 'Jayda', 'Wyman', '5', 5, 'South Jaredhaven', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(15, '95', 'Macejkovic', 'Tracy', 'Mueller', '4', 6, 'New Jennie', '2023-03-28 19:58:21', '2023-03-28 19:58:21'),
(16, '8', 'Beatty', 'Birdie', 'Rosenbaum', '5', 2, 'Lake Horacioburgh', '2023-03-28 19:58:21', '2023-03-28 19:58:21');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_03_29_031517_create_masterlists_table', 2);

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@mail.com', NULL, '$2y$10$vanmQZwYs1BYEHkvicvQjur3089t2i7uNyS0O0Cv8PrXCuygNOu5W', NULL, '2023-03-27 23:31:52', '2023-03-28 18:46:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masterlists`
--
ALTER TABLE `masterlists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `masterlists_emp_num_unique` (`emp_num`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `masterlists`
--
ALTER TABLE `masterlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
