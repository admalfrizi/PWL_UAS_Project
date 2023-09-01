-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2022 pada 11.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barangs`
--

CREATE TABLE `barangs` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `barang_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `price`, `description`, `created_at`, `updated_at`, `barang_pic`) VALUES
(4, 'Laptop Gaming', 12999000, 'Laptop Gaming murah 2 jt', '2022-07-08 10:13:34', '2022-07-08 10:14:10', 'laptop_gaming.jpg'),
(10, 'Redmi Note 11', 3099000, 'Hp murah 2jt', '2022-07-08 21:55:46', '2022-07-08 21:55:46', 'redmi_note_11.jpg'),
(11, 'Samsung Galaxy M12', 1700000, 'Hp Samsung paling murah', '2022-07-09 21:37:37', '2022-07-10 01:56:03', '1657428714.webp'),
(12, 'ROG Phone 6', 14099000, 'Hp gaming dengan spek tertinggi', '2022-07-10 02:06:42', '2022-07-10 02:06:42', 'rog_phone_6.png'),
(13, 'Canon EOS M50', 13499000, 'Kamera 4k canon termurah', '2022-07-10 02:44:27', '2022-07-10 02:44:42', 'canon_m50.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_header_transaksi` int(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_barang`, `id_header_transaksi`, `jumlah`, `created_at`, `updated_at`) VALUES
(8, 4, 36, 1, '2022-07-09 08:13:15', '2022-07-09 08:13:15'),
(9, 10, 37, 3, '2022-07-09 22:46:45', '2022-07-09 22:46:45'),
(10, 11, 38, 2, '2022-07-09 23:57:51', '2022-07-09 23:57:51'),
(12, 11, 39, 3, '2022-07-09 23:58:46', '2022-07-09 23:58:46'),
(14, 11, 40, 3, '2022-07-09 23:58:48', '2022-07-09 23:58:48'),
(16, 11, 41, 1, '2022-07-09 23:59:24', '2022-07-09 23:59:24'),
(21, 4, 43, 1, '2022-07-10 02:17:15', '2022-07-10 02:17:15'),
(22, 12, 44, 2, '2022-07-10 02:17:43', '2022-07-10 02:17:43'),
(23, 4, 44, 2, '2022-07-10 02:17:43', '2022-07-10 02:17:43'),
(24, 11, 45, 2, '2022-07-10 02:22:46', '2022-07-10 02:22:46'),
(25, 11, 46, 1, '2022-07-10 02:38:10', '2022-07-10 02:38:10'),
(26, 11, 47, 2, '2022-07-10 02:46:42', '2022-07-10 02:46:42'),
(27, 13, 47, 1, '2022-07-10 02:46:42', '2022-07-10 02:46:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `header_transaksi`
--

CREATE TABLE `header_transaksi` (
  `id_header_transaksi` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `header_transaksi`
--

INSERT INTO `header_transaksi` (`id_header_transaksi`, `tgl_transaksi`, `created_at`, `updated_at`) VALUES
(32, '2022-07-09', '2022-07-09 07:43:15', '2022-07-09 07:43:15'),
(33, '2022-07-09', '2022-07-09 08:10:46', '2022-07-09 08:10:46'),
(34, '2022-07-09', '2022-07-09 08:11:42', '2022-07-09 08:11:42'),
(35, '2022-07-09', '2022-07-09 08:11:50', '2022-07-09 08:11:50'),
(36, '2022-07-09', '2022-07-09 08:13:14', '2022-07-09 08:13:14'),
(37, '2022-07-10', '2022-07-09 22:46:45', '2022-07-09 22:46:45'),
(38, '2022-07-10', '2022-07-09 23:57:51', '2022-07-09 23:57:51'),
(39, '2022-07-10', '2022-07-09 23:58:46', '2022-07-09 23:58:46'),
(40, '2022-07-10', '2022-07-09 23:58:48', '2022-07-09 23:58:48'),
(41, '2022-07-10', '2022-07-09 23:59:24', '2022-07-09 23:59:24'),
(42, '2022-07-10', '2022-07-10 02:14:47', '2022-07-10 02:14:47'),
(43, '2022-07-10', '2022-07-10 02:17:15', '2022-07-10 02:17:15'),
(44, '2022-07-10', '2022-07-10 02:17:43', '2022-07-10 02:17:43'),
(45, '2022-07-10', '2022-07-10 02:22:45', '2022-07-10 02:22:45'),
(46, '2022-07-10', '2022-07-10 02:38:10', '2022-07-10 02:38:10'),
(47, '2022-07-10', '2022-07-10 02:46:42', '2022-07-10 02:46:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2022_07_07_145633_create_barangs_table', 2),
(6, '2022_07_07_150035_create_galleries_table', 3),
(8, '2022_07_07_154915_add_roles_to_users', 4),
(9, '2022_07_08_151424_add_barang_pic_to_barangs_table', 5),
(13, '2014_10_12_000000_create_users_table', 6),
(14, '2014_10_12_100000_create_password_resets_table', 6),
(15, '2019_08_19_000000_create_failed_jobs_table', 6),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(17, '2022_07_09_053444_create_cart_table', 6),
(18, '2022_07_09_061040_create_cart_details_table', 7),
(19, '2022_07_09_115316_header_transaksi', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adam Alfarizi', 'adam.alfarizi.2002@gmail.com', NULL, '$2y$10$rYiSqpnP3KzGSlWqtc6qkOkFhbb8tPjCdO4YA9.givbMOBUikyexO', NULL, '2022-07-07 03:27:09', '2022-07-07 03:27:09'),
(2, 'Bruce Wayne', 'batman@gmail.com', NULL, '$2y$10$PVWAtKqQE66tnV5.ChihQe5lGUZvPIUbf1zqrwVZnMZ/NEU3a5PWq', NULL, '2022-07-07 03:32:32', '2022-07-07 03:32:32'),
(3, 'Bruce Wayne Al', 'batman344@gmail.com', NULL, '$2y$10$Vu68bN68OgMl1QhQwSDuNOrxlY6XGRk0H8lInb8hW6DCfKRsExIJm', NULL, '2022-07-07 03:36:21', '2022-07-07 03:36:21'),
(4, 'Andriawan', 'ayu@gmail.com', NULL, '$2y$10$KGvGaibWfwno9Rnm/9Dk1.BHXVwu6mfuYE1jBQSyePbRRzIqwZWHy', NULL, '2022-07-07 03:38:43', '2022-07-07 03:38:43'),
(5, 'admin', 'admin@gmail.com', NULL, '$2y$10$/Ml45w806Nhe1Jt3KyqiC.9fxtqt46IZG3BCpw00GGmTLUEKkfw36', NULL, '2022-07-08 21:53:02', '2022-07-08 21:53:02'),
(6, 'Liaw Ahmad', 'liaw26@gmail.com', NULL, '$2y$10$Fora/iYTV7tpu8LLvvRlJuBkHpVww4bMcXqBjKj5Wfk0XhWdXX3F2', NULL, '2022-07-10 02:37:15', '2022-07-10 02:37:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `fk_barang` (`id_barang`),
  ADD KEY `fk_header_transaksi` (`id_header_transaksi`) USING BTREE;

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  ADD PRIMARY KEY (`id_header_transaksi`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `header_transaksi`
--
ALTER TABLE `header_transaksi`
  MODIFY `id_header_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_header_transaksi` FOREIGN KEY (`id_header_transaksi`) REFERENCES `header_transaksi` (`id_header_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
