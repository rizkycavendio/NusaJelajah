-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Des 2023 pada 12.34
-- Versi server: 5.7.33
-- Versi PHP: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusajelajah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Peninggalan Sejarah', 'peninggalan-sejarah', '2023-12-15 04:40:33', '2023-12-15 04:40:33'),
(2, 'Adat dan Tradisi Lokal', 'adat-dan-tradisi-lokal', '2023-12-15 04:40:41', '2023-12-15 04:40:41'),
(3, 'Alam dan Kearifan Lokal', 'alam-dan-kearifan-lokal', '2023-12-15 04:40:48', '2023-12-15 04:40:48'),
(4, 'Seni Tradisional', 'seni-tradisional', '2023-12-15 04:40:57', '2023-12-15 04:40:57'),
(5, 'Ritual Keagamaan', 'ritual-keagamaan', '2023-12-15 04:41:03', '2023-12-15 04:41:03'),
(6, 'Kearifan Lokal Laut', 'kearifan-lokal-laut', '2023-12-15 04:41:09', '2023-12-15 04:41:09'),
(7, 'Budaya Musikal', 'budaya-musikal', '2023-12-15 04:41:16', '2023-12-15 04:41:16');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_package_id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `tour_package_id`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'assets/gallery/LTb0Oo62FMHKxxFkC5ogsJJOYZKIxDy8Kgn8l7dn.jpg', '2023-12-16 09:36:43', '2023-12-16 09:36:43', NULL),
(2, 5, 'assets/gallery/DNZ973aJC6RP8mRJS4MrYb09Kwy2Be9UjCPEEwUv.jpg', '2023-12-16 10:42:58', '2023-12-16 10:42:58', NULL),
(3, 5, 'assets/gallery/FN1ENgC4O6iuTOV0ThEaQlIGspEHGYOzNbcs7qTA.jpg', '2023-12-16 10:43:05', '2023-12-16 10:43:05', NULL),
(4, 4, 'assets/gallery/Gcy54E6FbwYEAor3fDjXHbSDRArmIZmItqgr8Z9O.png', '2023-12-17 01:09:34', '2023-12-17 01:09:34', NULL),
(5, 4, 'assets/gallery/U32Zs9OoYMnn2SSBwz1FqvRjh1AIW8KYEm8UVUAj.jpg', '2023-12-17 01:09:41', '2023-12-17 01:09:41', NULL),
(6, 4, 'assets/gallery/nwCHBTWLNmClIbTdSLDhP2rg5YER2A5vLuL2HYfV.jpg', '2023-12-17 01:09:52', '2023-12-17 01:09:52', NULL),
(7, 3, 'assets/gallery/fYPTFipaRMms41ZpZU2gNSswNRLA5yPI9xPwuDjp.jpg', '2023-12-17 01:13:15', '2023-12-17 01:13:15', NULL),
(8, 3, 'assets/gallery/SRWpLWUmBPmNGrH2QfHxzc6QReHw4rCOJL1Gv9lJ.jpg', '2023-12-17 01:13:22', '2023-12-17 01:13:22', NULL),
(9, 3, 'assets/gallery/HyxYGtpRZm0w98DbxednsbdSQHobuNKYw755l0FC.jpg', '2023-12-17 01:13:28', '2023-12-17 01:13:28', NULL),
(10, 2, 'assets/gallery/NohK4hSHruJXLDFbfk1fBIYVbUipz4LuZUcZDuln.jpg', '2023-12-17 01:25:59', '2023-12-17 01:25:59', NULL),
(11, 2, 'assets/gallery/a939CSZgxoNqILqWbc7wi2UQPV5iaMCJqbUFReAP.jpg', '2023-12-17 01:26:05', '2023-12-17 01:26:05', NULL),
(12, 2, 'assets/gallery/L3YeWNKJoI4Z48jhmHRYtZmIGJ953JXsc7sKGeXT.jpg', '2023-12-17 01:26:12', '2023-12-17 01:26:12', NULL),
(13, 1, 'assets/gallery/BF2FpMB2nFAwXoVLkyviGf1UQpHWmk2efo4gzvd5.jpg', '2023-12-17 01:32:30', '2023-12-17 01:32:30', NULL),
(14, 1, 'assets/gallery/UgfFm64MOAV348hsmup1PlnpVn4qx30Bx1NvZ0NH.jpg', '2023-12-17 01:32:36', '2023-12-17 01:32:36', NULL),
(15, 1, 'assets/gallery/kmUTPx3R5ZoFu9HVmjfwAnpOKm2uwekOwuOzwJrG.jpg', '2023-12-17 01:32:42', '2023-12-17 01:32:42', NULL),
(16, 6, 'assets/gallery/wkicx5WmjxjibPQC7cF7fPEh6V3bLRPa7yqTj1gI.jpg', '2023-12-17 01:48:20', '2023-12-17 01:48:20', NULL),
(17, 6, 'assets/gallery/TXhuIoztsPRoHIdTV0c5tGTmeDgPMctXD8kdPRTC.jpg', '2023-12-17 01:48:27', '2023-12-17 01:48:27', NULL),
(18, 6, 'assets/gallery/EgJK4Dd4WBPslhmY9yVFw9UjPEU3Zt4Zw1o6H3yK.jpg', '2023-12-17 01:48:33', '2023-12-17 01:48:33', NULL),
(19, 7, 'assets/gallery/Xm9j2RTsggBr7yGBg5wFnW3AKUd3CGPS9dbG2kb6.jpg', '2023-12-17 01:59:19', '2023-12-17 01:59:19', NULL),
(20, 7, 'assets/gallery/d2z0IsPGcg3e6PJaSQElctGKTAN0XrJ0Emu9grsK.jpg', '2023-12-17 01:59:26', '2023-12-17 01:59:26', NULL),
(21, 7, 'assets/gallery/iitDeGjhzs1CbaWnVUzZBjSapgD0UXQTW3jxhjXI.jpg', '2023-12-17 01:59:36', '2023-12-17 01:59:36', NULL),
(22, 8, 'assets/gallery/l6BXry6fZMzxEnZumU68zu83zqykCr2MFLpr9Qd3.jpg', '2023-12-17 02:09:18', '2023-12-17 02:09:18', NULL),
(23, 8, 'assets/gallery/U6Wi8FVgnhnJkqXBog0eOLRneIm3GgS5bGn6X6aC.jpg', '2023-12-17 02:09:25', '2023-12-17 02:09:25', NULL),
(24, 8, 'assets/gallery/MjUSmSOmkcRctC1lpPUHCmmRaAZ1DoB0pwRjiTiv.jpg', '2023-12-17 02:09:32', '2023-12-17 02:09:32', NULL),
(25, 9, 'assets/gallery/hLraStFulEargQjqcCCcdc9YnYYEc0yEIgLjnScu.jpg', '2023-12-17 02:18:50', '2023-12-17 02:18:50', NULL),
(26, 9, 'assets/gallery/bpWmVqlARQ7575ulxg89KhPC7OHT84vAxmvX1ADe.jpg', '2023-12-17 02:18:56', '2023-12-17 02:18:56', NULL),
(27, 9, 'assets/gallery/icnB8762lAlCD1XqBHDhPuGcGIqyAQ3sRQ7QYX2U.jpg', '2023-12-17 02:19:04', '2023-12-17 02:19:04', NULL),
(28, 10, 'assets/gallery/zEaDonTdRxQVdZKErQvkOTc9DzLA2CKGsGzWaIHs.png', '2023-12-17 02:25:57', '2023-12-17 02:25:57', NULL),
(29, 10, 'assets/gallery/wj1d53tb7KXDZtbe0MABUl6A9tN3qhCyi20sKLsI.jpg', '2023-12-17 02:26:05', '2023-12-17 02:26:05', NULL),
(30, 10, 'assets/gallery/T3opqtkvWIcVZAcQWDIG9KcnFr0mzr4Qrav45Uy6.jpg', '2023-12-17 02:26:12', '2023-12-17 02:26:12', NULL),
(31, 11, 'assets/gallery/f75Y6icQgufMqVSlquSq9OfJahRBidnm93OMoslP.jpg', '2023-12-17 02:35:42', '2023-12-17 02:35:42', NULL),
(32, 11, 'assets/gallery/6vBUnTGRFqqEJgQRoO5Ghpsvk9DILFMGScjZBETa.jpg', '2023-12-17 02:36:00', '2023-12-17 02:36:00', NULL),
(33, 12, 'assets/gallery/ls2FD4BdIhGsHQjWhAC0Or7PXNLutpCt5GUzQmA5.jpg', '2023-12-17 02:44:22', '2023-12-17 02:44:22', NULL),
(34, 12, 'assets/gallery/KkRCWGi4qDoxIabLphj2PuPe214GJKprY52Kdk7F.jpg', '2023-12-17 02:44:30', '2023-12-17 02:44:30', NULL),
(35, 12, 'assets/gallery/4v28fdMwwcKLHguJR0UeEAqK7qypYtSCHlxJpf5R.webp', '2023-12-17 02:44:36', '2023-12-17 02:44:36', NULL);

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
(78, '2014_10_12_000000_create_users_table', 1),
(79, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(80, '2014_10_12_100000_create_password_resets_table', 1),
(81, '2019_08_19_000000_create_failed_jobs_table', 1),
(82, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(83, '2023_12_09_145955_create_tour_packages_table', 1),
(84, '2023_12_09_152123_create_galleries_table', 1),
(85, '2023_12_09_152512_create_regions_table', 1),
(86, '2023_12_09_152530_create_categories_table', 1),
(87, '2023_12_09_195037_add_roles_field_to_users_table', 1),
(88, '2023_12_10_071048_add_username_field_to_users_table', 1),
(89, '2023_12_17_042005_add_map_url_to_tour_packages_table', 2),
(90, '2023_12_17_042338_add_city_to_regions_table', 3),
(94, '2023_12_17_052548_add_city_to_tour_packages_table', 4),
(95, '2023_12_17_054029_add_city_to_tour_packages_table', 5);

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
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `location`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Tengah', 'jawa-tengah', '2023-12-15 04:34:11', '2023-12-16 22:56:18'),
(2, 'DI Yogyakarta', 'di-yogyakarta', '2023-12-15 04:34:27', '2023-12-16 22:56:34'),
(3, 'Sulawesi Selatan', 'sulawesi-selatan', '2023-12-15 04:34:42', '2023-12-16 22:56:40'),
(4, 'Pulau Bali', 'pulau-bali', '2023-12-15 04:34:52', '2023-12-16 22:56:46'),
(5, 'Nusa Tenggara Barat', 'nusa-tenggara-barat', '2023-12-15 04:35:09', '2023-12-16 22:56:22'),
(6, 'Sumatera Utara', 'sumatera-utara', '2023-12-15 04:36:51', '2023-12-16 22:56:53'),
(8, 'Sulawesi Tenggara', 'sulawesi-tenggara', '2023-12-15 04:38:36', '2023-12-16 22:57:05'),
(9, 'Nusa Tenggara Timur', 'nusa-tenggara-timur', '2023-12-15 04:38:57', '2023-12-16 22:57:11'),
(10, 'Jawa Barat', 'jawa-barat', '2023-12-17 02:04:39', '2023-12-17 02:04:39'),
(11, 'Maluku', 'maluku', '2023-12-17 02:31:26', '2023-12-17 02:31:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_people` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_guide` tinyint(1) NOT NULL DEFAULT '0',
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `region_id`, `category_id`, `title`, `slug`, `description`, `num_people`, `tour_guide`, `duration`, `departure_date`, `price`, `created_at`, `updated_at`, `deleted_at`, `city`, `map_url`) VALUES
(1, 1, 1, 'Candi Borobudur', 'candi-borobudur', 'Candi Borobudur adalah kompleks candi Buddha terbesar di dunia yang merupakan warisan budaya dunia UNESCO. Dibangun pada abad ke-9, candi ini menawarkan arsitektur megah dengan relief Buddha yang menggambarkan ajaran dan kehidupan Buddha.', '10', 1, '1 Hari', '2024-01-10', 150000, '2023-12-15 04:42:29', '2023-12-15 04:42:29', NULL, '', ''),
(2, 2, 1, 'Keraton Yogyakarta', 'keraton-yogyakarta', 'Keraton Yogyakarta adalah istana kerajaan yang masih menjadi tempat tinggal sultan dan keluarganya. Tempat ini menyimpan kekayaan budaya Jawa, mulai dari seni, tradisi, tari, hingga upacara keagamaan.', '25', 1, '1 Hari', '2023-12-20', 25000, '2023-12-15 04:43:25', '2023-12-17 01:29:18', NULL, 'Yogyakarta', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.853976488801!2d110.36162817430645!3d-7.805279177486147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5796db06c7ef%3A0x395271cf052b276c!2sKeraton%20Ngayogyakarta%20Hadiningrat!5e0!3m2!1sen!2sid!4v1702801450109!5m2!1sen!2sid'),
(3, 3, 2, 'Toraja', 'toraja', 'Toraja terkenal dengan budaya khasnya dalam upacara pemakaman dan rumah tradisional \"Tongkonan\". Ritual pemakaman yang disebut \"Rambu Solo\" merupakan bagian dari kekayaan budaya yang menarik bagi wisatawan.', '12', 1, '5 Hari', '2023-12-25', 6300000, '2023-12-15 04:44:49', '2023-12-17 01:14:08', NULL, '', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d509970.4072194741!2d119.3774567771803!3d-3.056165650013066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9395b1758f3585%3A0x3030bfbcaf77090!2sTana%20Toraja%20Regency%2C%20South%20Sulawesi!5e0!3m2!1sen!2sid!4v1702800838635!5m2!1sen!2sid'),
(4, 4, 2, 'Pasar Badung', 'pasar-badung', 'Pasar Badung adalah pasar tradisional terbesar di Bali yang menjadi pusat aktivitas jual beli sehari-hari. Pasar ini memamerkan berbagai produk lokal, seperti hasil pertanian, kerajinan, dan barang-barang unik Bali.', '6', 1, '1 Hari', '2023-12-21', 100000, '2023-12-15 04:45:29', '2023-12-16 23:25:06', NULL, 'Denpasar', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.37567567575!2d115.20997257432084!3d-8.655774588061893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd241c7f9419b61%3A0xe8eb7a49a3fd4036!2sBadung%20Market%20-%20Smart%20Heritage%20Market!5e0!3m2!1sen!2sid!4v1702794298575!5m2!1sen!2sid'),
(5, 5, 3, 'Desa Wisata Sade', 'desa-wisata-sade', 'Desa Sade adalah desa tradisional suku Sasak yang mempertahankan gaya hidup dan tradisi nenek moyang mereka. Pengunjung dapat melihat rumah adat, kerajinan tenun, dan budaya unik suku Sasak.', '25', 1, '4 Hari', '2023-12-19', 2225000, '2023-12-15 04:46:22', '2023-12-16 23:15:06', NULL, 'Lombok', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.4320702346577!2d116.28941217432423!3d-8.839302890498399!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcda9172d983baf%3A0xfa9eed5a2752a97c!2sSade%20Village!5e0!3m2!1sen!2sid!4v1702786447246!5m2!1sen!2sid'),
(6, 6, 3, 'Danau Toba', 'danau-toba', 'Danau Toba adalah keindahan alam alami yang megah di Sumatera Utara, Indonesia. Terkenal sebagai danau kawah vulkanik terbesar di dunia, danau ini menawarkan pemandangan spektakuler, pulau eksotis, serta kegiatan wisata air yang menarik. Menjadi tujuan utama bagi wisatawan yang mencari keindahan alam yang memukau dan kegiatan rekreasi yang seru.', '6', 1, '2 Hari', '2023-12-19', 325000, '2023-12-17 01:42:57', '2023-12-17 01:49:20', NULL, 'Karo', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510166.39721753466!2d98.50629164990946!3d2.611403949078387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031de07a843b6ad%3A0xc018edffa69c0d05!2sLake%20Toba!5e0!3m2!1sen!2sid!4v1702802949293!5m2!1sen!2sid'),
(7, 9, 6, 'Taman Nasional Komodo', 'taman-nasional-komodo', 'Pulau Komodo, terletak di Nusa Tenggara Timur, Indonesia, adalah destinasi yang memukau dengan keindahan alamnya yang unik. Pulau ini terkenal karena menjadi rumah bagi komodo, kadal raksasa yang merupakan hewan purba dan satu-satunya spesies kadal terbesar di dunia. Selain keberadaan komodo, pulau ini menawarkan panorama alam yang menakjubkan, mulai dari pantai pasir putih yang mempesona hingga pemandangan gunung berapi yang megah.\r\n\r\nWisatawan dapat melakukan trekking di Taman Nasional Pulau Komodo untuk menyaksikan kehidupan liar komodo dan keanekaragaman hayati yang melimpah. Selain itu, kegiatan snorkeling dan diving di perairan sekitar pulau ini sangat populer karena keindahan terumbu karangnya yang memesona dan keanekaragaman biota lautnya yang menakjubkan.\r\n\r\nJangan lewatkan pengalaman melihat matahari terbenam yang spektakuler di Pulau Komodo. Selain itu, beberapa pulau di sekitarnya seperti Pulau Padar dan Pulau Rinca juga menawarkan pesona alam yang tidak kalah menariknya. Pulau Komodo tidak hanya menjadi surga bagi para pecinta alam dan penikmat petualangan, tetapi juga tempat yang menghadirkan keajaiban alam yang tak terlupakan bagi setiap pengunjung yang datang.', '50', 1, '1 Hari', '2024-02-06', 12500000, '2023-12-17 01:52:25', '2023-12-17 02:02:25', NULL, 'Manggarai', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d252484.81353718168!2d119.16075702730954!3d-8.588767475037875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db4545ba8b2bbbb%3A0x62b9b2c3feba412!2sKomodo!5e0!3m2!1sen!2sid!4v1702803140321!5m2!1sen!2sid'),
(8, 10, 4, 'Saung Angklung Udjo', 'saung-angklung-udjo', 'Saung Angklung Udjo adalah destinasi budaya yang memukau di Bandung, Indonesia. Tempat ini menampilkan pertunjukan seni budaya Sunda, terutama angklung, alat musik tradisional bambu. Pengunjung dapat menikmati pertunjukan angklung yang mengagumkan oleh para seniman lokal, mempelajari cara membuat dan memainkan angklung, serta berpartisipasi dalam workshop musik dan tari tradisional.\r\n\r\nSaung Angklung Udjo bukan hanya tempat hiburan, tetapi juga menjadi pusat pelestarian warisan budaya Sunda. Dengan suasana ramah dan edukatif, pengalaman di tempat ini memperkaya pengetahuan tentang budaya lokal dan memberikan penghargaan atas kekayaan seni tradisional Indonesia.', '100', 1, '1 Hari', '2023-12-28', 155000, '2023-12-17 02:06:43', '2023-12-17 02:06:43', NULL, 'Bandung', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.940721557642!2d107.65211007429232!3d-6.897693667499711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7904f868405%3A0xefbc33f025ba4c9c!2sSaung%20Angklung%20Udjo!5e0!3m2!1sen!2sid!4v1702803998230!5m2!1sen!2sid'),
(9, 5, 5, 'Festival Bau Nyale', 'festival-bau-nyale', 'Upacara Bau Nyale adalah perayaan tradisional suku Sasak di Lombok, Indonesia, yang merayakan kedatangan cacing laut nyale. Ritual ini diadakan setiap tahun pada bulan ke-10 kalender lunar Sasak, di Pantai Selong Belanak. Masyarakat berkumpul untuk menangkap nyale sebagai simbol keberuntungan dan pertanda musim panen yang baik. Acara diwarnai dengan tarian, musik, dan prosesi adat. Ini juga menjadi momen spiritual, di mana penduduk setempat melakukan doa bersama dan ritual keagamaan. Perayaan ini tidak hanya mempertahankan warisan budaya Sasak, tetapi juga menjadi daya tarik wisata budaya yang unik bagi wisatawan yang ingin merasakan tradisi otentik Indonesia.', '5', 1, '1 Hari', '2024-04-17', 425000, '2023-12-17 02:14:50', '2023-12-17 02:19:41', NULL, 'Lombok Tengah', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15767.348512794131!2d116.27287053701464!3d-8.894730258789963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcda9d5c27174e5%3A0x7189bdd6dc8af5b!2sKuta%20Beach!5e0!3m2!1sen!2sid!4v1702804484809!5m2!1sen!2sid'),
(10, 1, 4, 'Desa Wisata Wayang Sidowarno', 'desa-wisata-wayang-sidowarno', 'Desa Wisata Wayang Sidowarno adalah destinasi budaya yang menakjubkan di Jawa Tengah, Indonesia. Terkenal dengan seni wayang kulit tradisional Jawa, desa ini menjadi tempat di mana pengunjung dapat memahami dan merasakan kehidupan seorang dalang (pembawa cerita wayang) secara langsung. Pengalaman unik ini melibatkan pertunjukan wayang kulit, lokakarya pembuatan wayang, serta interaksi dengan para seniman lokal. Wisatawan dapat belajar tentang sejarah, cerita, dan teknik di balik seni yang kaya tradisi ini. Desa Wisata Wayang Sidowarno menjadi tempat ideal bagi mereka yang ingin memahami lebih dalam tentang kekayaan budaya Indonesia.', '15', 0, '1 Hari', '2023-12-27', 25000, '2023-12-17 02:23:01', '2023-12-17 02:23:01', NULL, 'Klaten', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.3562764296444!2d110.79336327430389!3d-7.644782775622509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86f7f2eee498e93%3A0xc8ef5135bb4507c9!2sDesa%20Wisata%20Wayang%20Sidowarno!5e0!3m2!1sen!2sid!4v1702804915392!5m2!1sen!2sid'),
(11, 11, 7, 'Dusun Tuni Wisata Musik Bambu', 'dusun-tuni-wisata-musik-bambu', 'Dusun Tuni di Ambon, Maluku, merupakan destinasi unik yang mempersembahkan keindahan alam sambil menawarkan pengalaman wisata musik yang menarik. Lokasinya yang indah di tepi pantai memberikan suasana yang mendamaikan untuk menikmati musik tradisional Maluku yang khas. Pengunjung dapat menikmati pertunjukan musik lokal, seperti tifa, gong, dan alat musik tradisional lainnya yang dimainkan dengan penuh semangat oleh penduduk setempat. Selain itu, wisatawan dapat berpartisipasi dalam workshop musik untuk belajar lebih lanjut tentang warisan budaya musik Maluku. Dengan kombinasi keindahan alamnya dan pengalaman musik yang autentik, Dusun Tuni menjadi tempat yang menarik bagi pecinta seni dan budaya.', '10', 1, '3 Hari', '2024-02-14', 1200000, '2023-12-17 02:33:32', '2023-12-17 02:33:32', NULL, 'Ambon', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42296.89822377811!2d128.18170420874887!3d-3.652747532891936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d6cc3f45c87afe1%3A0xeb6da240f919a998!2sDusun%20Tuni!5e0!3m2!1sen!2sid!4v1702805606506!5m2!1sen!2sid'),
(12, 2, 1, 'Candi Prambanan', 'candi-prambanan', 'Candi Prambanan adalah kompleks kuil Hindu abad ke-9 yang megah di Yogyakarta, Indonesia. Dikenal sebagai salah satu situs warisan dunia UNESCO, candi ini mempesona dengan arsitektur monumentalnya yang indah dan relief reliefnya yang menakjubkan. Tiga candi utama, yaitu Candi Shiva, Vishnu, dan Brahma, menghiasi kompleks ini dengan keanggunan dan keagungan seni Hindu klasik. Pengunjung dapat menikmati keindahan arsitektur kuno, memahami kekayaan sejarahnya melalui pameran dan museum, serta menikmati pertunjukan Ramayana yang spektakuler di malam hari dengan latar belakang candi yang menawan. Candi Prambanan adalah destinasi yang memukau bagi mereka yang mencari pengalaman sejarah dan spiritual yang luar biasa.', '18', 0, '1 Hari', '2024-03-12', 325000, '2023-12-17 02:40:21', '2023-12-17 02:40:21', NULL, 'Yogyakarta', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.355983681198!2d110.48889247430567!3d-7.752015276863034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5ae3dbd859d1%3A0x19e7a03b25955a2d!2sPrambanan%20Temple!5e0!3m2!1sen!2sid!4v1702806016137!5m2!1sen!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$sUcAox.WqqrpgMD/ermt8./OqzioMsK3xJrN2/gMqcYQ.I5SluEnS', 'A5LpmS3FubbR7kTfKYq3GntGrBGInrT4t4gu0TWq5SDme7lFuw6nmbpJs0k6', '2023-12-15 04:23:55', '2023-12-15 04:23:55', 'ADMIN', 'admin'),
(2, 'test1', 'test1@gmail.com', NULL, '$2y$12$Dv6CjL7n1h8I1keepBdVeup.oRxCjsckPevw2QG3d3WTX0DNtZxWK', NULL, '2023-12-16 09:16:55', '2023-12-16 09:16:55', 'USER', 'test1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
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
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regions_slug_unique` (`slug`),
  ADD UNIQUE KEY `regions_location_unique` (`location`);

--
-- Indeks untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
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
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
