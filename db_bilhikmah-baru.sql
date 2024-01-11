-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2023 at 06:46 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bilhikmah`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '5STRyFW1anxWvLw8Bkmpf4h3d5S4R0.jpg', '2023-12-02 23:02:04', '2023-12-24 18:19:11'),
(2, 1, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', 'IvA6TNCUPnV5QphGTg3zsntPBwy3io.jpg', '2023-12-02 23:02:23', '2023-12-24 18:18:48'),
(3, 2, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.', 'SFHyvmI4efEYdYjhEBwO6x2xbTyZXN.jpg', '2023-12-02 23:02:43', '2023-12-24 18:18:16'),
(4, 1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'ThxEvaT33uhBPMg6JA0nJU3v7anp07.jpg', '2023-12-24 18:15:07', '2023-12-24 18:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isyarats`
--

CREATE TABLE `isyarats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `isyarats`
--

INSERT INTO `isyarats` (`id`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Aa', 'DjUwMGDhp9yYZEN2rgP2dnYWBHMHPI.jpg', '2023-12-27 06:17:35', '2023-12-27 06:17:35'),
(2, 'Bb', 'YKMZNps188PH4iAYTNqeCH7fdj7AMh.jpg', '2023-12-27 06:18:14', '2023-12-27 06:18:14'),
(3, 'Cc', 'lCJ6BA1l0mJsoWjYo0N6QJHpvcjyUb.jpg', '2023-12-27 06:18:23', '2023-12-27 06:18:23'),
(4, 'Dd', '7aFE2xZZvjngwPLihIY88UHeCl9eZq.jpg', '2023-12-27 06:18:33', '2023-12-27 06:18:33'),
(5, 'Ee', 'vk4u1Lsi3sUKFNdXFS1XpbLgI2Dii6.jpg', '2023-12-27 06:18:42', '2023-12-27 06:18:42'),
(6, 'Ff', 'CPolDWcFR8PBmLT61UihJmL89zBMXU.jpg', '2023-12-27 06:18:50', '2023-12-27 06:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Kajian', '2023-12-02 22:26:50', '2023-12-24 17:24:04'),
(2, 'Kultum', '2023-12-02 22:26:54', '2023-12-24 17:24:14'),
(3, 'Bahasa Isyarat', '2023-12-02 22:26:58', '2023-12-24 17:24:26'),
(5, 'Khutbah Jum\'at', '2023-12-24 00:48:19', '2023-12-24 17:24:39');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_03_120544_create_kategoris_table', 1),
(6, '2023_12_03_115942_create_artikels_table', 1),
(7, '2023_12_03_120614_create_posters_table', 1),
(8, '2023_12_03_120631_create_videos_table', 1),
(9, '2023_12_27_124838_create_isyarats_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`id`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 2, 'The standard chunk of Lorem Ipsu', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '8SfhgOVNYVRUHmMg7of2e9oIaLqGzh.jpg', '2023-12-12 23:35:35', '2023-12-24 17:59:49'),
(5, 5, 'It is a long established fact', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'efPUlwf5ooYRa1sFWWgKsbFIpL98Ny.jpg', '2023-12-13 00:55:10', '2023-12-24 18:01:01'),
(7, 1, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'oJx06QxcYr1rpl2IL125kvxRapfOGx.jpg', '2023-12-24 17:09:27', '2023-12-24 17:58:12'),
(8, 1, 'Melangkah Menuju Hidup Islami yang Berseri Menyambut Indahnya Ramadhan 1432 H', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'tUhpsIMqbzdOQWZQ8shHq6S0iYpmpc.jpg', '2023-12-24 17:12:54', '2023-12-24 17:56:20'),
(9, 3, 'Injected humour', 'The generated Lorem Ipsum is therefore always free from repetition,', '0jw0orMVO64hjqoccQJiuohzDzuy92.jpg', '2023-12-24 17:21:43', '2023-12-24 18:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$zlYuuZ3cO1CnrJgeflfjk.aAH1KII.kYbE/./JX7IWwN3mzfKg0Am', NULL, '2023-12-27 06:02:06', '2023-12-27 06:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `id_kategori`, `judul`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 'written by Cicero in 45 BC', 'https://www.youtube.com/embed/Oextk-If8HQ?si=O4-SNq2uAjUsp4zt', '2023-12-03 22:59:33', '2023-12-24 18:43:30'),
(2, 1, 'de Finibus Bonorum et Malorum', 'https://www.youtube.com/embed/RSNmgE6L8AU?si=bujXJ6uZ7w1qA9qv', '2023-12-03 22:59:43', '2023-12-24 18:44:12'),
(3, 2, 'The standard Lorem Ipsum passage', 'https://www.youtube.com/embed/ZVSJ0sPJSL0?si=hEaw7SMfczpHF-5F', '2023-12-24 18:34:22', '2023-12-24 18:34:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `isyarats`
--
ALTER TABLE `isyarats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_judul_unique` (`judul`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posters_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_id_kategori_foreign` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `isyarats`
--
ALTER TABLE `isyarats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `posters`
--
ALTER TABLE `posters`
  ADD CONSTRAINT `posters_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
