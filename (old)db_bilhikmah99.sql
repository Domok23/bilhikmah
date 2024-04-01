-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2024 pada 15.09
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bilhikmah99`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `kutipan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `kutipan`, `created_at`, `updated_at`) VALUES
(2, 1, 'Where does it come from?scsd', '<div><strong>lotem</strong>mmscnscsascas</div>', 'Owxu4i0VxshMfP8t5bsraQFJPMBkYl.jpg', 'lotemmmscnscsascas', '2023-12-02 23:02:23', '2024-01-28 06:09:08'),
(3, 2, 'Why do we use it?', '<div><strong>It is a long established fact that a r</strong>eader will be distracted by the readable content of a page when looking at its layout.</div>', 'CrLxPKz1EGuEF9IAnv0gAJRxFeR8Kx.jpg', 'It is a long established fact that a reader will be distracted by the readable content of a page whe...', '2023-12-02 23:02:43', '2024-01-21 03:19:14'),
(4, 1, 'What is Lorem Ipsum?', '<div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</div>', '3os9ozso5ESaXLzwKKKeALyhKuyVup.jpg', '', '2023-12-24 18:15:07', '2024-01-19 02:37:01'),
(5, 2, 'Dakwah Mingguan', '<div>\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</div>', 'xve85DfiYxkLHr7oULq2DWMSaRb6ZF.png', '', '2024-01-08 06:49:01', '2024-01-19 02:37:09'),
(8, 1, 'svsdvsdascas', '<div>sdvsvsdscsdcas</div>', 'qlLtMFwEEiebSF2r9JByilB4vPFhCi.jpg', 'sdvsvsd', '2024-01-21 03:09:56', '2024-01-21 03:10:11'),
(9, 5, 'ascascsdvsdv', '<div>ascascas&nbsp; sdvsdvsd</div>', '6JTni4PDnxXtzFIMvoR4cwFQ0lFEFu.jpg', 'ascascas&nbsp; sdvsdvsd', '2024-01-21 22:34:06', '2024-01-21 22:34:27'),
(10, 2, 'sacasc', '<div>sacas</div>', '', 'sacas', '2024-01-22 02:47:11', '2024-01-22 02:47:11'),
(11, 2, 'ascasc', '<div>ascasc</div>', 'IDkUBsROR5hgwGXpZz0O1qy5GCFGpr.jpg', 'ascasc', '2024-01-22 02:50:57', '2024-01-22 02:50:57'),
(12, 5, 'test ascascas', '<div>test ascascasc</div>', 'sSl1Utmkmna4ZMLBHGOzxK58pxHDFT.jpg', 'test ascascasc', '2024-01-22 03:37:54', '2024-01-22 03:37:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `isyarats`
--

CREATE TABLE `isyarats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `isyarats`
--

INSERT INTO `isyarats` (`id`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Aaa', 'ltDAyUySjagaJN0z3UBkCDJ3cJgVid.jpg', '2023-12-27 06:17:35', '2024-01-26 02:14:57'),
(2, 'Bb', 'fhjnqk4lyQGfMhXrdXSDP6Ut4asMYD.jpg', '2023-12-27 06:18:14', '2024-01-19 02:35:34'),
(3, 'Cc', 'yTUnSmxAGiwQfN7iou78CuYjeEwaVl.jpg', '2023-12-27 06:18:23', '2024-01-19 02:35:43'),
(4, 'Dd', '9UAwm8y5HxpkRcr2BlAU1WFNqwFEJx.jpg', '2023-12-27 06:18:33', '2024-01-19 02:35:51'),
(5, 'Ee', 'mUMXqsBVdqOxmsGRg042wYVQ99hI9W.jpg', '2023-12-27 06:18:42', '2024-01-19 02:36:02'),
(6, 'Ff', 'gIgPj0Fmqxyk13vCKVtj4ESnKdwXJb.jpg', '2023-12-27 06:18:50', '2024-01-19 02:36:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Kajian Harian', '2023-12-02 22:26:50', '2024-01-11 09:37:17'),
(2, 'Kultum', '2023-12-02 22:26:54', '2023-12-24 17:24:14'),
(3, 'Bahasa Isyarat', '2023-12-02 22:26:58', '2023-12-24 17:24:26'),
(5, 'Khutbah Jum\'at', '2023-12-24 00:48:19', '2023-12-24 17:24:39'),
(6, 'Dakwah', '2024-01-08 06:45:57', '2024-01-08 06:45:57'),
(11, 'aaa', '2024-01-22 04:41:30', '2024-01-22 04:41:30'),
(15, 'test', '2024-01-28 18:33:22', '2024-01-28 18:33:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posters`
--

INSERT INTO `posters` (`id`, `id_kategori`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(4, 2, 'The standard chunk of Lorem Ipsu asca sfsdcfsd', 'Contrary to popular belief, Lorem Ipsum is not acas simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '3AFVh1W9OQbBn8d83e6tdBtmVMzLKf.jpg', '2023-12-12 23:35:35', '2024-01-26 02:15:09'),
(5, 5, 'It is a long established fact', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'kU653HWTGEckeMyhOQlusV5tvjH7np.jpg', '2023-12-13 00:55:10', '2024-01-20 08:54:41'),
(7, 1, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', '1enm6ytw2AnDHGnUjtBDsX4ivP3nvc.jpg', '2023-12-24 17:09:27', '2024-01-19 02:37:44'),
(8, 1, 'Melangkah Menuju Hidup Islami yang Berseri Menyambut Indahnya Ramadhan 1432 H', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'IZyFnhM78oQkIWQOUZBeSyB5OQ94jw.png', '2023-12-24 17:12:54', '2024-01-19 02:37:53'),
(9, 3, 'Injected humour', 'The generated Lorem Ipsum is therefore always free from repetition,', 'Tp6OGUFHa2dSG1o0tLGmuo3MYaEek3.jpg', '2023-12-24 17:21:43', '2024-01-19 02:38:03'),
(10, 6, 'Dakwah Islami', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. asdsabdsadasdjas', 'nLVkchvOnTybma7Gg7Puapt2NUTVdl.jpg', '2024-01-08 06:49:25', '2024-01-19 02:38:16'),
(13, 5, 'gambar', 'gamadadkasascasc', 'Ez6cwbYwYiiK6UmPruQry1ipNZNi3i.jpg', '2024-01-17 08:24:01', '2024-01-19 02:38:27'),
(14, 2, 'ascasc', 'ascasc', NULL, '2024-01-22 02:47:24', '2024-01-22 02:47:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$zlYuuZ3cO1CnrJgeflfjk.aAH1KII.kYbE/./JX7IWwN3mzfKg0Am', NULL, '2023-12-27 06:02:06', '2023-12-27 06:02:06'),
(3, 'admin', 'admin@site.com', NULL, '$2y$10$7UCd8yYtzCiMgePRBZ3dy.RscUooP4QZldRzF9yvtxDAsnd5wxUaq', NULL, '2024-01-28 06:38:43', '2024-01-28 06:38:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `videos`
--

INSERT INTO `videos` (`id`, `id_kategori`, `judul`, `link`, `created_at`, `updated_at`) VALUES
(1, 3, 'wadsadsa', 'https://www.youtube.com/embed/nFr1Jj1KxVk?si=6u78MSGYLJUkBjYb', '2023-12-03 22:59:33', '2024-01-22 04:54:18'),
(2, 1, 'de Finibus Bonorum et Malorum', 'https://www.youtube.com/embed/mukuTulfT6s?si=EpDxnSjDNR_bxOzI', '2023-12-03 22:59:43', '2024-01-08 19:10:49'),
(3, 2, 'The standard Lorem Ipsum passage', 'https://www.youtube.com/embed/Vfisfv8s_ys?si=ot0VM7r360AHwHn3', '2023-12-24 18:34:22', '2024-01-08 19:11:45'),
(4, 3, 'Dakwah Islami', 'https://www.youtube.com/embed/L28odw3necc?si=fSccvf7eiGqErKwA', '2024-01-08 06:49:42', '2024-01-08 09:14:41'),
(7, 2, 'test', 'https://www.youtube.com/embed/7LOAy0-tzqg?si=sygD7fqPOfA83oSj', '2024-01-24 02:38:02', '2024-01-24 02:38:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `isyarats`
--
ALTER TABLE `isyarats`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategoris_judul_unique` (`judul`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posters_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_id_kategori_foreign` (`id_kategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `isyarats`
--
ALTER TABLE `isyarats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `posters`
--
ALTER TABLE `posters`
  ADD CONSTRAINT `posters_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);

--
-- Ketidakleluasaan untuk tabel `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
