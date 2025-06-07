-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2025 at 03:34 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('superadmin','admin','editor') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'admin',
  `remember_token` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `username`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'SAdmin', 'sadmin@bgb.com', '$2y$10$4/PwnsfYm8M0E9LQ9vyocedYWCy.HvbmJcj13PqDiOYgqWeF7.Sle', 'superadmin', '934c0ce47378c258b57471497bb99b332c4c17d348bf09f5d253d6a32a069980', NULL, '2025-06-03 19:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

DROP TABLE IF EXISTS `amenities`;
CREATE TABLE IF NOT EXISTS `amenities` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `cat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `am_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `cat_slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `am_slug` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `cat`, `am_name`, `cat_slug`, `am_slug`, `created_at`, `updated_at`) VALUES
(1, 'Popular amenities', 'Wifi', 'popular-amenities', 'wifi', '2025-06-04 07:27:11', '2025-06-04 07:27:11'),
(2, 'Popular amenities', 'Breakfast', 'popular-amenities', 'breakfast', '2025-06-04 07:28:12', '2025-06-04 07:28:12'),
(3, 'Popular amenities', 'Gym', 'popular-amenities', 'gym', '2025-06-04 07:28:22', '2025-06-04 07:28:22'),
(4, 'Popular amenities', 'Swimming pool', 'popular-amenities', 'swimming-pool', '2025-06-04 07:28:34', '2025-06-04 07:28:34'),
(5, 'Popular amenities', 'In-room coffee/tea', 'popular-amenities', 'in-room-coffee-tea', '2025-06-04 07:28:47', '2025-06-04 07:28:47'),
(6, 'Popular amenities', 'Daily housekeeping', 'popular-amenities', 'daily-housekeeping', '2025-06-04 07:28:55', '2025-06-04 07:28:55'),
(7, 'Popular amenities', 'Bar / Lounge', 'popular-amenities', 'bar-lounge', '2025-06-04 07:29:02', '2025-06-04 07:29:02'),
(8, 'Popular amenities', 'Laundry', 'popular-amenities', 'laundry', '2025-06-04 07:29:12', '2025-06-04 07:29:12'),
(9, 'Popular amenities', 'Newspaper', 'popular-amenities', 'newspaper', '2025-06-04 07:29:21', '2025-06-04 07:29:21'),
(10, 'Popular amenities', 'Bicycle', 'popular-amenities', 'bicycle', '2025-06-04 07:29:30', '2025-06-04 07:29:30'),
(11, 'Popular amenities', 'Air conditioning', 'popular-amenities', 'air-conditioning', '2025-06-04 07:29:45', '2025-06-04 07:29:45'),
(12, 'Popular amenities', 'Games room', 'popular-amenities', 'games-room', '2025-06-04 07:29:56', '2025-06-04 07:29:56'),
(13, 'Popular amenities', 'Beach view', 'popular-amenities', 'beach-view', '2025-06-04 07:30:05', '2025-06-04 07:30:05'),
(14, 'Food & Drink', 'Restaurants', 'food-drink', 'restaurants', '2025-06-04 07:39:06', '2025-06-04 07:39:06'),
(15, 'Food & Drink', 'Bars', 'food-drink', 'bars', '2025-06-04 07:39:15', '2025-06-04 07:39:15'),
(16, 'Food & Drink', 'In-Room Dining', 'food-drink', 'in-room-dining', '2025-06-04 07:39:25', '2025-06-04 07:39:25'),
(17, 'Food & Drink', 'Family-Friendly Dining', 'food-drink', 'family-friendly-dining', '2025-06-04 07:39:34', '2025-06-04 07:39:34'),
(18, 'Food & Drink', 'Breakfast Buffet', 'food-drink', 'breakfast-buffet', '2025-06-04 07:39:41', '2025-06-04 07:39:41'),
(19, 'Outdoor & View', 'Garden or Courtyard', 'outdoor-view', 'garden-or-courtyard', '2025-06-04 07:40:09', '2025-06-04 07:40:09'),
(20, 'Outdoor & View', 'Scenic Views', 'outdoor-view', 'scenic-views', '2025-06-04 07:40:14', '2025-06-04 07:40:14'),
(21, 'Outdoor & View', 'Sunbathing Areas', 'outdoor-view', 'sunbathing-areas', '2025-06-04 07:40:34', '2025-06-04 07:40:34'),
(22, 'Outdoor & View', 'Outdoor Lounge Areas', 'outdoor-view', 'outdoor-lounge-areas', '2025-06-04 07:40:43', '2025-06-04 07:40:43'),
(23, 'Entertainment & Family Services', 'Game Room', 'entertainment-family-services', 'game-room', '2025-06-04 07:41:33', '2025-06-04 07:41:33'),
(24, 'Entertainment & Family Services', 'Children\'s Play Area', 'entertainment-family-services', 'children-s-play-area', '2025-06-04 07:41:41', '2025-06-04 07:41:41'),
(25, 'Entertainment & Family Services', 'Sports Facilities', 'entertainment-family-services', 'sports-facilities', '2025-06-04 07:41:49', '2025-06-04 07:41:49'),
(26, 'Entertainment & Family Services', 'Babysitting Services', 'entertainment-family-services', 'babysitting-services', '2025-06-04 07:41:55', '2025-06-04 07:41:55'),
(27, 'Media & Technology', 'High-Speed Internet', 'media-technology', 'high-speed-internet', '2025-06-04 07:42:12', '2025-06-04 07:42:12'),
(28, 'Media & Technology', 'Business Center', 'media-technology', 'business-center', '2025-06-04 07:42:23', '2025-06-04 07:42:23'),
(29, 'Media & Technology', 'Video Conferencing Facilities', 'media-technology', 'video-conferencing-facilities', '2025-06-04 07:42:31', '2025-06-04 07:42:31'),
(30, 'Media & Technology', 'Virtual Reality (VR) Experiences', 'media-technology', 'virtual-reality-vr-experiences', '2025-06-04 07:42:39', '2025-06-04 07:42:39'),
(31, 'Accessibility', 'Accessible Common Areas', 'accessibility', 'accessible-common-areas', '2025-06-04 07:42:48', '2025-06-04 07:42:48'),
(32, 'Accessibility', 'Accessible Parking Spaces', 'accessibility', 'accessible-parking-spaces', '2025-06-04 07:42:55', '2025-06-04 07:42:55'),
(33, 'Accessibility', 'Accessible Fitness Center', 'accessibility', 'accessible-fitness-center', '2025-06-04 07:43:03', '2025-06-04 07:43:03'),
(34, 'Accessibility', 'Accessible Swimming Pool', 'accessibility', 'accessible-swimming-pool', '2025-06-04 07:43:10', '2025-06-04 07:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `property_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `rating` int NOT NULL DEFAULT '5',
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `chain_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_amenities`
--

DROP TABLE IF EXISTS `hotel_amenities`;
CREATE TABLE IF NOT EXISTS `hotel_amenities` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `amenities` json DEFAULT NULL,
  `service_type` enum('free','paid') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'free',
  `conditions` json DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hotel_amenities_hotel_id_foreign` (`hotel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_locations`
--

DROP TABLE IF EXISTS `hotel_locations`;
CREATE TABLE IF NOT EXISTS `hotel_locations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hotel_id` int NOT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zip_code` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `country_or_region` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(10,7) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `hotel_locations_hotel_id_foreign` (`hotel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(11, '2025-05-12-173149', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1748978582, 1),
(12, '2025-05-12-195708', 'App\\Database\\Migrations\\CreateAdminsTable', 'default', 'App', 1748978582, 1),
(13, '2025-05-23-175323', 'App\\Database\\Migrations\\CreateHotelsTable', 'default', 'App', 1748978582, 1),
(14, '2025-05-29-193413', 'App\\Database\\Migrations\\CreateHotelsLocationTable', 'default', 'App', 1748978582, 1),
(15, '2025-05-31-192232', 'App\\Database\\Migrations\\CreateAmenitiesTable', 'default', 'App', 1748978582, 1),
(16, '2025-06-03-073005', 'App\\Database\\Migrations\\CreateHotelAmenitiesTable', 'default', 'App', 1748978582, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
