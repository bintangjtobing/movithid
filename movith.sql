-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Jul 2020 pada 05.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movith`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_ads` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_ads` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `requester` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileads` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lama_kontrak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datefinished` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starteddate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverimg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ads`
--

INSERT INTO `ads` (`id`, `judul_ads`, `desc_ads`, `requester`, `fileads`, `kategori`, `lama_kontrak`, `datefinished`, `starteddate`, `coverimg`, `created_at`, `updated_at`) VALUES
(1, 'Halo BCA!', 'Iklan ini untuk testing.. hahaha', 'BCA PT', 'LOGO OPENER - IMEDIA_14.mp4', 'Iklan Media', '3 Bulan', '10/20/2020', '10/24/2019', 'AAC2_film_dpn.jpg', '2020-06-13 01:51:05', '2020-06-13 01:51:05'),
(2, 'Halo Sarjanamalam', 'ajsadbwqkljdbiyvbwlvjqebfukgufjqwd', 'Sarjanamalam', 'imediaproperti.mp4', 'Iklan Parawisata', '3 Bulan', '09/14/2020', '10/24/2019', 'MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg', '2020-06-13 05:59:49', '2020-06-13 05:59:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `boxoffice`
--

CREATE TABLE `boxoffice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coverimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_film` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_utama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_kategori2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `boxoffice`
--

INSERT INTO `boxoffice` (`id`, `coverimg`, `judul`, `tahun_film`, `kategori_utama`, `sub_kategori`, `sub_kategori2`, `file`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'The_Amazing_Spider-Man_theatrical_poster.jpeg', 'Spiderman (2012)', '2012', 'action', 'adventure', 'musical', '180301_16_B_LunarYearsParade_20.mp4', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-13 05:55:05', '2020-06-13 05:55:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clients_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `namausaha` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unpassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `clients_name`, `phone`, `email`, `deskripsi`, `namausaha`, `username`, `password`, `unpassword`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bintang Jeremia Tobing', '081262845980', 'hello@bintangtobing.com', 'Hahaha untuk testing doang', 'PT BTSA Logistics', 'bintangjtobing', '$2y$10$S5LNTRv1Sm2/M5w4x8zg0uxdu6oZoYr86XOeDrFXCGiuG4NiBN2h2', 'AEXWi1', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-03 08:34:06', '2020-06-03 09:38:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_09_090858_ads', 2),
(4, '2020_05_09_090911_boxoffice', 2),
(5, '2020_05_09_091614_clients', 2),
(6, '2020_05_30_121123_places', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_toko` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasitv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smarttv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `places`
--

INSERT INTO `places` (`id`, `nama`, `nama_toko`, `alamat_toko`, `email`, `nohp`, `spesifikasitv`, `smarttv`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Bintang Tobing', 'Cafe Cuan Cuan', 'Jalan Rakyat 212', 'hello@bintangtobing.com', '081262845980', 'Led HUD TV 15\" Inch with Chroma TV Box', 'Smart TV', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-03 08:34:43', '2020-06-03 09:46:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unpassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `status`, `email`, `phone`, `city`, `email_verified_at`, `password`, `unpassword`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bintangjtobing', 'Bintang Jr. Tobing', 'active', 'hello@bintangtobing.com', '081262845980', '', NULL, '$2y$10$/g/pqeMQqGuy5LnWkTi50.epP3tszOv7O4uiE.s2F6VjDq1mtWvFe', 'libra2110', NULL, NULL, '2020-06-03 08:37:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `boxoffice`
--
ALTER TABLE `boxoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `boxoffice`
--
ALTER TABLE `boxoffice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
