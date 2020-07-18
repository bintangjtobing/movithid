-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.31-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table movith.ads
CREATE TABLE IF NOT EXISTS `ads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.ads: ~2 rows (approximately)
DELETE FROM `ads`;
/*!40000 ALTER TABLE `ads` DISABLE KEYS */;
INSERT INTO `ads` (`id`, `judul_ads`, `desc_ads`, `requester`, `fileads`, `kategori`, `lama_kontrak`, `datefinished`, `starteddate`, `coverimg`, `created_at`, `updated_at`) VALUES
	(1, 'Halo BCA!', 'Iklan ini untuk testing.. hahaha', 'BCA PT', 'LOGO OPENER - IMEDIA_14.mp4', 'Iklan Media', '3 Bulan', '10/20/2020', '10/24/2019', 'AAC2_film_dpn.jpg', '2020-06-13 01:51:05', '2020-06-13 01:51:05'),
	(2, 'Halo Sarjanamalam', 'ajsadbwqkljdbiyvbwlvjqebfukgufjqwd', 'Sarjanamalam', 'imediaproperti.mp4', 'Iklan Parawisata', '3 Bulan', '09/14/2020', '10/24/2019', 'MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg', '2020-06-13 05:59:49', '2020-06-13 05:59:49');
/*!40000 ALTER TABLE `ads` ENABLE KEYS */;

-- Dumping structure for table movith.boxoffice
CREATE TABLE IF NOT EXISTS `boxoffice` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.boxoffice: ~0 rows (approximately)
DELETE FROM `boxoffice`;
/*!40000 ALTER TABLE `boxoffice` DISABLE KEYS */;
INSERT INTO `boxoffice` (`id`, `coverimg`, `judul`, `tahun_film`, `kategori_utama`, `sub_kategori`, `sub_kategori2`, `file`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'The_Amazing_Spider-Man_theatrical_poster.jpeg', 'Spiderman (2012)', '2012', 'action', 'adventure', 'musical', '180301_16_B_LunarYearsParade_20.mp4', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-13 05:55:05', '2020-06-13 05:55:05');
/*!40000 ALTER TABLE `boxoffice` ENABLE KEYS */;

-- Dumping structure for table movith.clients
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.clients: ~0 rows (approximately)
DELETE FROM `clients`;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` (`id`, `clients_name`, `phone`, `email`, `deskripsi`, `namausaha`, `username`, `password`, `unpassword`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'Bintang Jeremia Tobing', '081262845980', 'hello@bintangtobing.com', 'Hahaha untuk testing doang', 'PT BTSA Logistics', 'bintangjtobing', '$2y$10$S5LNTRv1Sm2/M5w4x8zg0uxdu6oZoYr86XOeDrFXCGiuG4NiBN2h2', 'AEXWi1', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-03 08:34:06', '2020-06-03 09:38:51');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;

-- Dumping structure for table movith.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.migrations: ~6 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2020_05_09_090858_ads', 2),
	(4, '2020_05_09_090911_boxoffice', 2),
	(5, '2020_05_09_091614_clients', 2),
	(6, '2020_05_30_121123_places', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table movith.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table movith.places
CREATE TABLE IF NOT EXISTS `places` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_toko` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_toko` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesifikasitv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smarttv` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.places: ~3 rows (approximately)
DELETE FROM `places`;
/*!40000 ALTER TABLE `places` DISABLE KEYS */;
INSERT INTO `places` (`id`, `nama`, `username`, `password`, `nama_toko`, `alamat_toko`, `email`, `nohp`, `spesifikasitv`, `smarttv`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
	(1, 'Bintang Tobing', 'bintangtobing', '$2y$10$f4pLMVg/No2HGvfSEVtMMODIp0U9RE6cVlcsbJbT5KgsUBrZiiUzu', 'Cafe Cuan Cuan', 'Jalan Rakyat 212', 'hello@bintangtobing.com', '081262845980', 'Led HUD TV 15" Inch with Chroma TV Box', 'Smart TV', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-06-03 08:34:43', '2020-06-03 09:46:02'),
	(2, 'wew', 'wew', '$2y$10$f4pLMVg/No2HGvfSEVtMMODIp0U9RE6cVlcsbJbT5KgsUBrZiiUzu', 'wew', 'wew', 'wew@wew.com', '087867894423', 'wew', 'Smart TV', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-07-17 14:35:56', '2020-07-17 14:35:56'),
	(3, 'gazz96', 'gazz96', '$2y$10$f4pLMVg/No2HGvfSEVtMMODIp0U9RE6cVlcsbJbT5KgsUBrZiiUzu', 'asdas', 'wew', 'bagas.topati@gmail.com', '087867894423', 'uiu', 'Smart TV', 'Bintang Jr. Tobing', 'Bintang Jr. Tobing', '2020-07-17 15:02:16', '2020-07-17 15:02:16');
/*!40000 ALTER TABLE `places` ENABLE KEYS */;

-- Dumping structure for table movith.places_video
CREATE TABLE IF NOT EXISTS `places_video` (
  `id_place` bigint(20) DEFAULT NULL,
  `id_ads` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table movith.places_video: ~4 rows (approximately)
DELETE FROM `places_video`;
/*!40000 ALTER TABLE `places_video` DISABLE KEYS */;
INSERT INTO `places_video` (`id_place`, `id_ads`) VALUES
	(3, 1),
	(3, 2),
	(2, 2),
	(1, 1);
/*!40000 ALTER TABLE `places_video` ENABLE KEYS */;

-- Dumping structure for table movith.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table movith.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `status`, `email`, `phone`, `city`, `email_verified_at`, `password`, `unpassword`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'bintangjtobing', 'Bintang Jr. Tobing', 'active', 'hello@bintangtobing.com', '081262845980', '', NULL, '$2y$10$QUNOK60H3q4tFGEEBYLuSeUKl5h1Ru0aOn/In2IyuH67nJu8cUede', 'libra2110', NULL, NULL, '2020-06-03 08:37:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
