-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 05:54 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_rantal`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenitiess`
--

CREATE TABLE `amenitiess` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fa_code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenitiess`
--

INSERT INTO `amenitiess` (`id`, `name`, `fa_code`, `created_at`, `updated_at`) VALUES
(1, 'Kitchen', 'fa fa-cutlery', '2020-10-02 03:07:25', '2020-10-02 03:33:46'),
(2, 'Bathtub', 'fa fa-bathtub', '2020-10-02 03:12:16', '2020-10-02 03:12:16'),
(3, 'Wheelchair', 'fa fa-wheelchair', '2020-10-02 03:18:08', '2020-10-02 03:18:08'),
(4, 'Free Parking', 'fa fa-product-hunt', '2020-10-02 03:18:26', '2020-10-02 03:18:26'),
(6, 'Free WiFi', 'fa fa-wifi', '2020-10-02 03:19:14', '2020-10-02 03:34:13'),
(9, 'First aid kit', 'fa fa-medkit', '2020-10-12 05:05:08', '2020-10-12 05:05:08'),
(10, 'tv', 'fa fa-television', '2020-10-12 05:09:09', '2020-10-12 05:09:09'),
(11, 'Breakfast', 'fa fa-coffee', '2020-10-12 05:30:49', '2020-10-12 05:30:49'),
(13, 'Laptop friendly workspace', 'fa fa-laptop', '2020-10-12 05:36:22', '2020-10-12 05:36:22'),
(14, 'Carbon monoxide alarm', 'fa fa-bell-o', '2020-10-12 05:42:16', '2020-10-12 05:42:16'),
(15, 'Smoke alarm', 'fa fa-bell-o', '2020-10-12 05:42:35', '2020-10-12 05:43:48'),
(17, 'Fire extinguisher', 'fa fa-fire-extinguisher', '2020-10-12 05:45:06', '2020-10-12 05:45:06'),
(18, 'Lock on bedroom door Unavailable', 'fa fa-lock', '2020-10-12 05:47:18', '2020-10-12 05:47:18'),
(19, 'Air conditioning', 'fa fa-crosshairs', '2020-10-12 05:53:38', '2020-10-12 05:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `amenities_assings`
--

CREATE TABLE `amenities_assings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `amenities_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities_assings`
--

INSERT INTO `amenities_assings` (`id`, `pro_id`, `amenities_id`, `created_at`, `updated_at`) VALUES
(49, 13, 2, '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(50, 13, 4, '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(51, 13, 6, '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(52, 13, 10, '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(53, 13, 11, '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(54, 13, 13, '2020-10-22 10:45:53', '2020-10-22 10:45:53'),
(55, 13, 17, '2020-10-22 10:45:53', '2020-10-22 10:45:53'),
(56, 13, 18, '2020-10-22 10:45:53', '2020-10-22 10:45:53'),
(57, 14, 1, '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(58, 14, 2, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(59, 14, 4, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(60, 14, 6, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(61, 14, 9, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(62, 14, 10, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(63, 14, 11, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(64, 14, 13, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(65, 14, 15, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(66, 14, 17, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(67, 14, 18, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(68, 14, 19, '2020-10-22 10:53:23', '2020-10-22 10:53:23'),
(69, 15, 4, '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(70, 15, 6, '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(71, 15, 10, '2020-10-22 11:02:31', '2020-10-22 11:02:31'),
(72, 15, 11, '2020-10-22 11:02:31', '2020-10-22 11:02:31'),
(73, 15, 13, '2020-10-22 11:02:31', '2020-10-22 11:02:31'),
(74, 16, 1, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(75, 16, 2, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(76, 16, 3, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(77, 16, 4, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(78, 16, 6, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(79, 16, 9, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(80, 16, 10, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(81, 16, 11, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(82, 16, 13, '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(83, 16, 14, '2020-10-22 11:16:05', '2020-10-22 11:16:05'),
(84, 16, 15, '2020-10-22 11:16:05', '2020-10-22 11:16:05'),
(85, 16, 17, '2020-10-22 11:16:05', '2020-10-22 11:16:05'),
(86, 16, 18, '2020-10-22 11:16:05', '2020-10-22 11:16:05'),
(87, 16, 19, '2020-10-22 11:16:05', '2020-10-22 11:16:05'),
(88, 17, 1, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(89, 17, 2, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(90, 17, 6, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(91, 17, 10, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(92, 17, 11, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(93, 17, 14, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(94, 17, 19, '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(95, 18, 1, '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(96, 18, 2, '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(97, 18, 4, '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(98, 18, 6, '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(99, 18, 9, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(100, 18, 10, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(101, 18, 11, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(102, 18, 13, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(103, 18, 14, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(104, 18, 17, '2020-10-22 12:11:46', '2020-10-22 12:11:46'),
(105, 19, 1, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(106, 19, 2, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(107, 19, 9, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(108, 19, 10, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(109, 19, 11, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(110, 19, 13, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(111, 19, 14, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(112, 19, 15, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(113, 19, 17, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(114, 19, 19, '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(115, 20, 2, '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(116, 20, 6, '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(117, 20, 11, '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(118, 20, 13, '2020-10-22 12:28:27', '2020-10-22 12:28:27'),
(119, 20, 18, '2020-10-22 12:28:27', '2020-10-22 12:28:27'),
(120, 21, 1, '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(121, 21, 2, '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(122, 21, 4, '2020-10-23 01:14:56', '2020-10-23 01:14:56'),
(123, 21, 6, '2020-10-23 01:14:56', '2020-10-23 01:14:56'),
(124, 21, 9, '2020-10-23 01:14:56', '2020-10-23 01:14:56'),
(125, 21, 10, '2020-10-23 01:14:56', '2020-10-23 01:14:56'),
(126, 21, 13, '2020-10-23 01:14:56', '2020-10-23 01:14:56'),
(127, 22, 1, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(128, 22, 2, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(129, 22, 4, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(130, 22, 6, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(131, 22, 10, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(132, 22, 11, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(133, 22, 13, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(134, 22, 14, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(135, 22, 15, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(136, 22, 18, '2020-10-23 05:45:37', '2020-10-23 05:45:37'),
(137, 23, 1, '2020-10-25 08:07:57', '2020-10-25 08:07:57'),
(139, 23, 10, '2020-10-25 08:07:57', '2020-10-25 08:07:57'),
(141, 23, 13, '2020-10-25 08:07:57', '2020-10-25 08:07:57'),
(142, 23, 19, '2020-10-25 08:07:57', '2020-10-25 08:07:57'),
(143, 24, 1, '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(144, 24, 2, '2020-10-25 08:14:27', '2020-10-25 08:14:27'),
(145, 24, 4, '2020-10-25 08:14:27', '2020-10-25 08:14:27'),
(146, 24, 6, '2020-10-25 08:14:27', '2020-10-25 08:14:27'),
(147, 24, 10, '2020-10-25 08:14:27', '2020-10-25 08:14:27'),
(148, 24, 11, '2020-10-25 08:14:27', '2020-10-25 08:14:27'),
(149, 25, 1, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(150, 25, 2, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(151, 25, 4, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(152, 25, 6, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(153, 25, 9, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(154, 25, 10, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(155, 25, 11, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(156, 25, 13, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(157, 25, 14, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(158, 25, 17, '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(159, 25, 18, '2020-10-25 08:29:54', '2020-10-25 08:29:54'),
(160, 25, 19, '2020-10-25 08:29:54', '2020-10-25 08:29:54'),
(161, 26, 1, '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(162, 26, 2, '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(163, 26, 4, '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(164, 26, 6, '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(165, 26, 9, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(166, 26, 10, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(167, 26, 11, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(168, 26, 13, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(169, 26, 18, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(170, 26, 19, '2020-10-25 11:20:05', '2020-10-25 11:20:05'),
(171, 27, 1, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(172, 27, 2, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(173, 27, 3, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(174, 27, 4, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(175, 27, 6, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(176, 27, 11, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(177, 27, 13, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(178, 27, 18, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(179, 27, 19, '2020-10-25 11:29:10', '2020-10-25 11:29:10'),
(182, 13, 1, '2020-10-28 04:26:11', '2020-10-28 04:26:11'),
(183, 23, 15, '2020-11-26 23:13:34', '2020-11-26 23:13:34'),
(184, 23, 18, '2020-11-26 23:13:35', '2020-11-26 23:13:35');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `email_id`, `pro_id`, `check_in`, `check_out`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(7, 'priyajanii1999@gmail.com', 25, '2020-10-27', '2020-10-30', 4737, 1, '2020-10-27 04:28:39', '2020-10-27 04:28:39'),
(9, 'dholakiyakalpesh79@gmail.com', 14, '2020-11-04', '2020-11-10', 555, 1, '2020-11-01 18:30:00', '2020-11-01 18:30:00'),
(10, 'dholakiyakalpesh79@gmail.com', 14, '2020-10-28', '2020-10-30', 555, 1, '2020-11-01 18:30:00', '2020-11-01 18:30:00'),
(11, 'priyajanii1999@gmail.com', 23, '2020-11-28', '2020-11-30', 1738, 1, '2020-11-26 22:58:23', '2020-11-26 22:58:23'),
(12, 'priyajanii1999@gmail.com', 25, '2020-11-30', '2020-12-03', 4737, 1, '2020-11-26 23:08:15', '2020-11-26 23:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `st_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `name`, `image`, `st_id`, `created_at`, `updated_at`) VALUES
(1, 'surat', '447246152.jpg', 1, '2020-10-01 07:59:23', '2020-10-25 07:40:43'),
(3, 'Ahmedabad', '811584-ahmedabad-041119.jpg', 1, '2020-10-01 08:23:15', '2020-10-07 07:20:55'),
(7, 'vasco da gama', 'vasco da gama.jpeg', 4, '2020-10-02 01:53:53', '2020-10-02 01:53:53'),
(9, 'Vadodara', '1733129815.jpg', 1, '2020-10-15 09:26:33', '2020-10-25 07:36:22'),
(10, 'Rajkot', '742934473.jpg', 1, '2020-10-15 09:27:46', '2020-10-25 07:36:06'),
(12, 'Junagadh', '1970008134.jpg', 1, '2020-10-15 09:32:45', '2020-10-25 07:35:50'),
(13, 'Panji', '1385260847.jpg', 4, '2020-10-15 09:34:16', '2020-10-25 07:35:35'),
(14, 'Margao', '1444852332.jpg', 4, '2020-10-15 09:35:25', '2020-10-25 07:35:20'),
(15, 'Calangute', '315696589.jpg', 4, '2020-10-15 09:36:55', '2020-10-25 07:34:57'),
(16, 'Condolim', 'candolim.jpg', 4, '2020-10-15 09:38:14', '2020-10-23 01:31:56'),
(17, 'prayagraj', '388734401.jpg', 5, '2020-10-15 09:42:43', '2020-10-25 07:34:35'),
(18, 'Lucknow', '1565784717.jpg', 5, '2020-10-15 09:44:04', '2020-10-25 07:34:16'),
(19, 'Kanpur', '1545626319.jpg', 5, '2020-10-15 09:45:12', '2020-10-25 07:33:59'),
(20, 'Agra', '724075734.jpg', 5, '2020-10-15 09:46:22', '2020-10-25 07:33:39'),
(21, 'Varanasi', '1651117120.jpg', 5, '2020-10-15 09:47:33', '2020-10-25 07:33:22'),
(22, 'Kochi', '582652337.jpg', 6, '2020-10-15 09:48:39', '2020-10-25 07:32:48'),
(23, 'Thiruvananthapuram', '979613534.jpg', 6, '2020-10-15 09:49:39', '2020-10-25 07:32:32'),
(24, 'Kozhikode', '1519224598.jpg', 6, '2020-10-15 09:52:54', '2020-10-25 07:32:06'),
(25, 'Kollam', '1125701628.jpg', 6, '2020-10-15 09:54:05', '2020-10-25 03:42:37'),
(26, 'Thrissur', '1524754500.jpg', 6, '2020-10-15 09:55:16', '2020-10-25 03:41:07'),
(27, 'Guwahati', '1693636535.jpg', 8, '2020-10-15 09:56:32', '2020-10-25 03:40:48'),
(28, 'Jorhat', '1027406990.jpg', 8, '2020-10-15 09:58:17', '2020-10-25 03:39:28'),
(29, 'slichar', 'slichar.jpg', 8, '2020-10-15 09:59:50', '2020-10-15 09:59:50'),
(30, 'Dibrugarh', '1894941308.jpg', 8, '2020-10-15 10:01:23', '2020-10-25 03:36:21'),
(31, 'Tezpur', '42193208.jpg', 6, '2020-10-15 10:02:41', '2020-10-25 03:35:47'),
(32, 'Jaipur', '350966398.jpg', 13, '2020-10-15 10:06:16', '2020-10-25 03:35:20'),
(33, 'Jodhpur', '547756612.jpg', 13, '2020-10-15 10:07:26', '2020-10-25 03:25:42'),
(34, 'Ajmer', '845090440.jpg', 13, '2020-10-15 10:10:28', '2020-10-25 02:59:46'),
(35, 'Bikaner', '787099932.jpg', 13, '2020-10-15 10:12:09', '2020-10-25 02:59:29'),
(36, 'Kota', '2100050996.jpg', 13, '2020-10-15 10:13:35', '2020-10-25 02:59:11'),
(37, 'udaipur', '1004657298.jpg', 13, '2020-10-15 10:15:54', '2020-10-25 02:58:46'),
(38, 'jaisalmer', '1337520244.jpg', 13, '2020-10-15 10:17:28', '2020-10-25 02:58:27'),
(39, 'Pushkar', '46508229.jpg', 13, '2020-10-15 10:18:48', '2020-10-25 02:58:11'),
(40, 'new delhi', '1333196002.jpg', 15, '2020-10-15 10:22:46', '2020-10-25 02:57:58'),
(41, 'Amritsar', 'Amritsar.jpg', 16, '2020-10-15 10:24:45', '2020-10-15 10:24:45'),
(42, 'jalandhar', '1466372825.jpg', 16, '2020-10-15 10:25:46', '2020-10-25 02:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `contactuss`
--

CREATE TABLE `contactuss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuss`
--

INSERT INTO `contactuss` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'kalpesh', 'k@gmail.com', 'my subject', 'i lookin good !!!', '2020-10-08 01:28:25', '2020-10-08 01:28:25'),
(2, 'ppp', 'pp@gmail.com', 'dhd', 'jsfb b', '2020-10-08 01:38:11', '2020-10-08 01:38:11'),
(3, 'Tirth A Godhani', 'tirthgodhani1412@outlook.com', 'AMazing', 'out 2,67,00,000 results (0.46 seconds) \r\nDid you mean: about us\r\n\r\n\r\nAboutUsaboutus.com\r\nTell the world about it with AboutUs! Give your facts, feedback, and opinions on websites, businesses, people, places, things, and more.\r\n‎Contact Us · ‎Getting Started · ‎FAQ · ‎Policies\r\n\r\nAbout Us | Website.comwww.website.com › about-us\r\nWelcome. At Website.com, we believe everyone deserves to have a website or online store. Innovation and simplicity makes us happy: our goal is to remove any ...\r\n\r\n25 Creative Examples of About Us Pageswww.searchenginejournal.com › Content Marketing\r\nMay 20, 2020 — Need some inspiration for your About Us page? Check out these 25 awesome examples that make a great impression on visitors.', '2020-10-15 07:43:26', '2020-10-15 07:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `countrys`
--

CREATE TABLE `countrys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countrys`
--

INSERT INTO `countrys` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'india', '2020-09-30 08:14:42', '2020-10-02 00:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_09_20_051927_create_countrys_table', 1),
(5, '2020_09_20_051947_create_states_table', 1),
(6, '2020_09_20_052011_create_citys_table', 1),
(7, '2020_09_20_052034_create_registrations_table', 1),
(8, '2020_09_20_052109_create_property_types_table', 1),
(9, '2020_09_20_052129_create_propertys_table', 1),
(13, '2020_09_20_052538_create_property_images_table', 2),
(14, '2020_10_02_082944_create_amenitiess_table', 3),
(15, '2020_10_02_083218_create_amenities_assings_table', 3),
(16, '2020_10_08_064015_create_contactuss_table', 4),
(17, '2020_10_14_103408_create_bookings_table', 5);

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
-- Table structure for table `propertys`
--

CREATE TABLE `propertys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` bigint(20) UNSIGNED NOT NULL,
  `rent` int(11) NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `map` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `washroom` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `propertys`
--

INSERT INTO `propertys` (`id`, `email_id`, `name`, `property_type`, `rent`, `address`, `city_id`, `map`, `bedroom`, `description`, `washroom`, `status`, `created_at`, `updated_at`) VALUES
(13, 'riddhimaiyani2110@gmail.com', 'Virat House - Weekend Address', 4, 1000, 'Dumas, Gujarat, India', 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.6567182813214!2d72.718703414409!3d21.126247889820124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be053897495bd4d%3A0xaa995a209a2226b!2sWeekend%20Address!5e0!3m2!1sen!2sin!4v1603383312641!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 'weekend address is a beautiful property 5 mnts from surat airport, got a fantastic restaurant, and plenty of other amenities like banquet, kid game zone , disco theque. super decor and ambiance', 2, 1, '2020-10-22 10:45:51', '2020-10-22 10:45:51'),
(14, 'riddhimaiyani2110@gmail.com', 'Krishna Villa - Silent Zone', 1, 1200, 'Kholvad, Gujarat, India', 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.574979745707!2d72.72338351386546!3d21.129504385610502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be052baea1e051b%3A0x66161295f4ab3a0b!2sSilent%20zone%20farm%20house!5e0!3m2!1sen!2sin!4v1603383789653!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'This is a new build property equipped with modern furnishing. And all.amenities. the property has scenic view of river. Amazing Location very near to Railway station and Airport.', 3, 1, '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(15, 'riddhimaiyani2110@gmail.com', 'MRB House', 5, 449, 'Surat, Gujarat, India', 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9448011978734!2d72.77708556440953!3d21.154594888847555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04d8ca32ee72d%3A0xaf22868d2ba1e18e!2sSarunagar%2C%20Piplod%2C%20Surat%2C%20Gujarat%20395007!5e0!3m2!1sen!2sin!4v1603384336119!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 'Our spacious and homely 3 bedroom ( 1 listed ) Flat with attach bathroom and ac in all rooms making the place more comfortable and luxurious. It is located in Hindu colony. And it is near the main area from where everything is easily available.', 1, 1, '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(16, 'domadiyabhautik123@gmail.com', 'dom\'s Pent house', 7, 1800, 'Ahmedabad, Gujarat, India', 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5862.04539917851!2d72.52688526133399!3d23.038893975368254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84b6e4913515%3A0x7ee2bb7b738a6ca7!2sVastrapur%20Lake%20Garden!5e0!3m2!1sen!2sin!4v1603385148593!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3, 'dom\'s Residency brings the right combination of comfort, luxury and world class facilities with the much-desired touch of homeliness to your stay with its service apartments. We welcome you to a wonderful stay that will make you feel at home in a new city.\r\n\r\nEbony Residency offers fully furnished apartments available for a short as well as long term stay, providing the 5 Star hotel-like amenities such as room service, housekeeping, a fitness center, a laundry room etc.', 4, 1, '2020-10-22 11:16:02', '2020-10-22 11:16:02'),
(17, 'domadiyabhautik123@gmail.com', 'Morjim River Villa', 1, 1699, 'Condolim , Goa , India', 16, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30756.503753313642!2d73.75699954008518!3d15.507922414112803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfbbaaaaaaaaab%3A0xc8707132e8ca565c!2s360%20Degrees%20Beach%20Retreat%2C%20Resort%20-%20Goa!5e0!3m2!1sen!2sin!4v1603387208762!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'A beautiful 1+1 BHK villa in Condolim, Goa located on the banks of the Chapora river with picturesque views of the Goan coastline and the Chapora fort across the river. The villa is a short 5 minute drive from Morjim Beach, and in close proximity to the villages of Siolim, Ashwem and Arambol. The house comes fully furnished, with a large private garden that overlooks the river and a caretaker on call 24 x 7.', 3, 1, '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(18, 'domadiyabhautik123@gmail.com', 'River Side Facing cottage', 1, 999, 'Kochi, Kerala, India', 22, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.383948792646!2d76.27048151428134!3d9.901944977433022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0872098a8fce09%3A0x4872ec8a44a64bdd!2sRiverside%20Heritage%20Homestay!5e0!3m2!1sen!2sin!4v1603388492060!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'Mylanthra House is approved and licensed as DIAMOND GRADE since 2005 by the Kerala Tourism department. It is an 85-year-old traditional Bungalow located in Kochi at the bank of Vembanad Lake and has a Chinese fishing net in this beautiful backwaters. This Diamond-graded homestay is built of Plinthite blocks and plastered with lime. Its roofs and floors are covered with old clay tiles & have a wooden ceiling all over. This traditional construction keeps the bungalow cool.', 4, 1, '2020-10-22 12:11:44', '2020-10-22 12:11:44'),
(19, 'domadiyabhautik123@gmail.com', 'Royal Family House', 7, 1699, 'Jaisalmer, Rajasthan, India', 38, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28461.303397151478!2d70.89786400237192!3d26.914190787502204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3947bc25d7ce3cc5%3A0x474be6baee3d01fc!2sRoyal%20Villa%20Jaisalmer!5e0!3m2!1sen!2sin!4v1603388943835!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 3, 'A sprawled out old house built around a grand courtyard, this room leads to an interconnected balcony which gives a view of the city below. The room is infused with warmth and luxury and it reminds you of a bygone era. Here, the time stands still when you witness the magnificent sunrise or the breath-taking sunset. Also, This place is the house of Maharaj Mahendra Singh Ji who pioneered Tourism in the Jaisalmer City and put it on the Tourism map of India!', 5, 1, '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(20, 'domadiyabhautik123@gmail.com', 'Thharkka (Prestige) Room', 6, 749, 'Jaisalmer, Rajasthan, India', 38, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56932.206150673!2d70.87444017984191!3d26.895150830951604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3947bc25ffb2715d%3A0xd1bc979cd9f52e26!2sMoustache%20Jaisalmer!5e0!3m2!1sen!2sin!4v1603389494558!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 'Hi! Welcome to my place which is a west-facing small house located inside the Jaisalmer Fort. This property is more than 250 years old located inside an 850 year old UNESCO World Heritage Site.\r\n\r\nThe breath-taking view from here is that of the Jaisalmer City and at night, the breeze will relax you.\r\nHere, you can rejuvenate and be away from the hustle-bustle of the daily life by being one with the city\'s heritage!', 1, 1, '2020-10-22 12:28:25', '2020-10-22 12:28:25'),
(21, 'domadiyabhautik123@gmail.com', 'Bougainvillea', 4, 1149, 'Guwahati, Assam, India', 27, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.1308861465964!2d91.78058921450439!3d26.159866498390844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59a8fc5ea025%3A0xa2d1bb1fa6dc65a!2sBOUGAINVILLEA!5e0!3m2!1sen!2sin!4v1603435484681!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'Situated in a quiet pretty Posh Residential colony of Guwahati is a home away from home. A cozy room, furnished with elegant furniture in a Contemporary style villa, surrounded by lush green Garden. It is for guests who appreciate style and peace.', 3, 1, '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(22, 'riddhimaiyani2110@gmail.com', 'Luxurious modern apartment Defence Colony', 3, 2599, 'New Delhi, Delhi, India', 40, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14015.660152622746!2d77.22321677088145!3d28.57231389078939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce2577180daff%3A0x4a692f0596e8b464!2sDefence%20Colony%20Service%20Apartments%20Delhi!5e0!3m2!1sen!2sin!4v1603451724028!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'A well furnished,new,luxurious, modern 3 bedrooms flat on a 3rd floor with a lift,letting the entire apartment, located in quiet location, Defence Colony.Important eating hub located only 0.3Km and important amenities like shopping centres of South X ,Ansal Plaza,GK 1 Market within 1.5 Km.Banks,Hospital and three Metros stations within 0.5-1.5Km,30min drive domestic, international airport and railway station.A 24/7 store 5 min walk and local liquor shop only 1 min walk. Sorry NO PARTIES ALLOWED', 3, 1, '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(23, 'priyajani1999@gmail.com', 'Cozy apartment with amazing features', 4, 749, 'Ahmedabad, Gujarat, India', 3, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117543.7240435464!2d72.44153022766116!3d22.97814984912248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x76064e44d49e1281!2sSunflower%20Enclave!5e0!3m2!1sen!2sin!4v1603633063850!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'My place is close to Heritage Monument - Sarkhej Roza. You’ll love my place because of the ambiance and the location. My place is good for couples, solo adventurers, business travelers, and families (with kids).', 2, 1, '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(24, 'priyajani1999@gmail.com', 'Backpackers Haven', 6, 449, 'Guwahati, Assam, India', 27, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14323.90398643087!2d91.6744566227348!3d26.16491119426098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a5b2efe7da069%3A0x3e610d92d79cf39c!2sBBC%20Colony%2C%20Pandu%2C%20Guwahati%2C%20Assam%20781012!5e0!3m2!1sen!2sin!4v1603633455221!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 'Two rooms with well placed bunk beds and a living room, hand painted with original artwork. Furnished with a set of eco-friendly cane-wood sofa, the ambiance of the hostel is totally beautiful.', 1, 1, '2020-10-25 08:14:25', '2020-10-25 08:14:25'),
(25, 'priyajani1999@gmail.com', 'Luxurious Weekend Home', 7, 1499, 'Dumas, Gujarat, India', 1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.7201305474364!2d72.71734181440894!3d21.12372118990676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be052b73c649f03%3A0xc7278743287c79cc!2sRajhans%20Belliza!5e0!3m2!1sen!2sin!4v1603634381801!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 1, 'Rajhans Belliza Weekend Studios are specially built for connoisseurs of fine living in Surat.This is certainly the best weekend bliss to make the most of your leisure time.', 1, 1, '2020-10-25 08:29:52', '2020-10-25 08:29:52'),
(26, 'priyajani1999@gmail.com', 'Taneja House', 4, 1100, 'New Delhi, Delhi, India', 40, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.873434959336!2d77.05191901455896!3d28.60357349214305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1ad5b6afe8a7%3A0x676ee420d07ed137!2sSouth%20Delhi%20Apartments%2C%20Sector%204%2C%20Dwarka%2C%20New%20Delhi%2C%20Delhi%20110078!5e0!3m2!1sen!2sin!4v1603644589625!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 4, 'Welcome to our home in south Delhi - A newly constructed 4 bedroom multi-storey house. We are very excited to open our home to Airbnb for the first time and have guests from around the world come and share our space with us.\r\n\r\nThe room offered is on the 3rd floor with access from both an elevator and stairs. Once you enter the gates of our residence you can leave the hustle and bustle of Delhi behind and relax.', 5, 1, '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(27, 'dhavanmaiyani@gmail.com', 'Santosh House', 3, 999, 'Amritsar, Punjab, India', 41, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6793.045792209928!2d74.85996107364863!3d31.64691105876779!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919649881c96241%3A0xbd2f1dd6bfde841d!2sGreen%20Avenue%2C%20Amritsar%2C%20Punjab%20143001!5e0!3m2!1sen!2sin!4v1603645138855!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', 2, 'Hello & Welcome to Amritsar\r\n\r\nMy apartment located in the lanes of Green Avenue, is a newly constructed property with a modular kitchen, a living area , lounge access and a spacious master bedroom with an attached washroom and wardrobe.\r\n\r\nIt\'s perfect for families, couples & business travellers. Located in a very posh area, near to all the markets, popular bars, restaurants and easily accessible through Public transport.\r\n\r\nI look forward to having you here and hope that you have a great stay!', 2, 1, '2020-10-25 11:29:09', '2020-10-25 11:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `property_images`
--

CREATE TABLE `property_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_images`
--

INSERT INTO `property_images` (`id`, `pro_id`, `image`, `created_at`, `updated_at`) VALUES
(88, 13, 'Virat House - Weekend Address_974171428.jpg', '2020-10-22 10:45:51', '2020-10-22 10:45:51'),
(89, 13, 'Virat House - Weekend Address_864723868.jpg', '2020-10-22 10:45:51', '2020-10-22 10:45:51'),
(90, 13, 'Virat House - Weekend Address_833111972.jpg', '2020-10-22 10:45:51', '2020-10-22 10:45:51'),
(91, 13, 'Virat House - Weekend Address_1839162045.jpg', '2020-10-22 10:45:51', '2020-10-22 10:45:51'),
(92, 13, 'Virat House - Weekend Address_1110323440.jpg', '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(93, 13, 'Virat House - Weekend Address_1872520811.jpg', '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(94, 13, 'Virat House - Weekend Address_658124783.jpg', '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(95, 13, 'Virat House - Weekend Address_1434563698.jpg', '2020-10-22 10:45:52', '2020-10-22 10:45:52'),
(98, 14, 'Krishna Villa - Silent Zone_2032498063.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(99, 14, 'Krishna Villa - Silent Zone_151522494.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(100, 14, 'Krishna Villa - Silent Zone_741273375.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(101, 14, 'Krishna Villa - Silent Zone_1317706259.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(102, 14, 'Krishna Villa - Silent Zone_52249556.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(103, 14, 'Krishna Villa - Silent Zone_1080645287.jpg', '2020-10-22 10:53:22', '2020-10-22 10:53:22'),
(104, 15, 'MRB House_1515472915.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(105, 15, 'MRB House_1885728200.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(106, 15, 'MRB House_165427908.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(107, 15, 'MRB House_1244318583.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(108, 15, 'MRB House_708735717.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(109, 15, 'MRB House_670685943.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(110, 15, 'MRB House_5386725.jpg', '2020-10-22 11:02:30', '2020-10-22 11:02:30'),
(112, 16, 'doms Pent house_329007841.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(113, 16, 'dom\'s Pent house_1283773693.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(114, 16, 'dom\'s Pent house_1113511088.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(115, 16, 'dom\'s Pent house_604408402.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(116, 16, 'dom\'s Pent house_1646232784.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(117, 16, 'dom\'s Pent house_1329654498.jpg', '2020-10-22 11:16:03', '2020-10-22 11:16:03'),
(118, 16, 'dom\'s Pent house_1351085507.jpg', '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(119, 16, 'dom\'s Pent house_1384171825.jpg', '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(120, 16, 'dom\'s Pent house_85956789.jpg', '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(121, 16, 'dom\'s Pent house_203380654.jpg', '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(122, 16, 'dom\'s Pent house_1136372936.jpg', '2020-10-22 11:16:04', '2020-10-22 11:16:04'),
(123, 17, 'Morjim River Villa_201083815.jpg', '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(124, 17, 'Morjim River Villa_810542068.jpg', '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(125, 17, 'Morjim River Villa_1755271058.jpg', '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(126, 17, 'Morjim River Villa_1643815601.jpg', '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(127, 17, 'Morjim River Villa_1064180133.jpg', '2020-10-22 11:50:20', '2020-10-22 11:50:20'),
(128, 17, 'Morjim River Villa_296072643.jpg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(129, 17, 'Morjim River Villa_1159693239.jpg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(130, 17, 'Morjim River Villa_269809211.jpg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(131, 17, 'Morjim River Villa_1354056098.jpg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(132, 17, 'Morjim River Villa_769668922.jpg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(133, 17, 'Morjim River Villa_1522030763.jpeg', '2020-10-22 11:50:21', '2020-10-22 11:50:21'),
(134, 18, 'River Side Facing cottage_1145870198.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(135, 18, 'River Side Facing cottage_2049979719.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(136, 18, 'River Side Facing cottage_1632846910.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(137, 18, 'River Side Facing cottage_382816212.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(138, 18, 'River Side Facing cottage_1258948713.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(139, 18, 'River Side Facing cottage_381540285.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(140, 18, 'River Side Facing cottage_790371666.jpg', '2020-10-22 12:11:45', '2020-10-22 12:11:45'),
(141, 19, 'Royal Family House_1974021761.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(142, 19, 'Royal Family House_199371072.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(143, 19, 'Royal Family House_840501134.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(144, 19, 'Royal Family House_1463128813.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(145, 19, 'Royal Family House_338540861.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(146, 19, 'Royal Family House_198621325.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(147, 19, 'Royal Family House_473561102.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(148, 19, 'Royal Family House_1929524783.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(149, 19, 'Royal Family House_1065824720.jpg', '2020-10-22 12:19:14', '2020-10-22 12:19:14'),
(150, 19, 'Royal Family House_684214057.jpg', '2020-10-22 12:19:15', '2020-10-22 12:19:15'),
(151, 20, 'Thharkka (Prestige) Room_1376052275.jpg', '2020-10-22 12:28:25', '2020-10-22 12:28:25'),
(152, 20, 'Thharkka (Prestige) Room_685030200.jpg', '2020-10-22 12:28:25', '2020-10-22 12:28:25'),
(153, 20, 'Thharkka (Prestige) Room_1007057358.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(154, 20, 'Thharkka (Prestige) Room_530574632.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(155, 20, 'Thharkka (Prestige) Room_2035843917.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(156, 20, 'Thharkka (Prestige) Room_133449066.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(157, 20, 'Thharkka (Prestige) Room_1045629523.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(158, 20, 'Thharkka (Prestige) Room_688459655.jpg', '2020-10-22 12:28:26', '2020-10-22 12:28:26'),
(159, 21, '21_213901534.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(160, 21, '21_1679904143.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(161, 21, '21_1987163535.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(162, 21, '21_1582305570.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(164, 21, '21_2081157196.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(165, 21, '21_415689139.jpg', '2020-10-23 01:14:55', '2020-10-23 01:14:55'),
(166, 21, '21_1902114069.jpg', '2020-10-23 01:17:13', '2020-10-23 01:17:13'),
(167, 22, '22_672447062.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(168, 22, '22_1336925792.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(169, 22, '22_443941951.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(170, 22, '22_498107103.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(171, 22, '22_900793112.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(172, 22, '22_2011101282.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(173, 22, '22_1551712812.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(174, 22, '22_1218070112.jpg', '2020-10-23 05:45:36', '2020-10-23 05:45:36'),
(175, 23, '23_340450619.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(176, 23, '23_276028333.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(177, 23, '23_1518853136.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(178, 23, '23_874172043.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(179, 23, '23_1944368212.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(180, 23, '23_507906427.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(181, 23, '23_2130757956.jpg', '2020-10-25 08:07:56', '2020-10-25 08:07:56'),
(182, 23, '23_303937442.jpg', '2020-10-25 08:07:57', '2020-10-25 08:07:57'),
(183, 24, '24_548524074.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(184, 24, '24_1477789908.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(185, 24, '24_599906586.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(186, 24, '24_1773634605.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(187, 24, '24_1827472046.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(188, 24, '24_1839372368.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(189, 24, '24_1240941170.jpg', '2020-10-25 08:14:26', '2020-10-25 08:14:26'),
(190, 25, '25_2098489275.jpg', '2020-10-25 08:29:52', '2020-10-25 08:29:52'),
(191, 25, '25_37927055.jpg', '2020-10-25 08:29:52', '2020-10-25 08:29:52'),
(192, 25, '25_1950070675.jpg', '2020-10-25 08:29:52', '2020-10-25 08:29:52'),
(193, 25, '25_290799938.jpg', '2020-10-25 08:29:52', '2020-10-25 08:29:52'),
(194, 25, '25_1173396928.jpg', '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(195, 25, '25_2123147424.jpg', '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(196, 25, '25_1302785506.jpg', '2020-10-25 08:29:53', '2020-10-25 08:29:53'),
(197, 26, '26_1559225574.jpg', '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(198, 26, '26_1386257406.jpg', '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(199, 26, '26_1762642242.jpg', '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(200, 26, '26_422017030.jpg', '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(201, 26, '26_1326870020.jpg', '2020-10-25 11:20:03', '2020-10-25 11:20:03'),
(202, 26, '26_521823603.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(203, 26, '26_1023574622.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(204, 26, '26_2081286920.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(205, 26, '26_926252491.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(206, 26, '26_1497955024.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(207, 26, '26_281353902.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(208, 26, '26_1685366737.jpg', '2020-10-25 11:20:04', '2020-10-25 11:20:04'),
(209, 27, '27_862801323.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(210, 27, '27_586772260.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(211, 27, '27_1779188130.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(212, 27, '27_223493925.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(213, 27, '27_382045150.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(214, 27, '27_1189712942.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(215, 27, '27_1890779715.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(216, 27, '27_1550343171.jpg', '2020-10-25 11:29:09', '2020-10-25 11:29:09'),
(217, 27, '27_2101015965.jpg', '2020-10-25 11:29:10', '2020-10-25 11:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'unique home', '2020-10-02 04:02:03', '2020-10-03 00:26:55'),
(3, 'apartment', '2020-10-07 07:32:38', '2020-10-07 07:32:38'),
(4, 'Entire Home', '2020-10-15 10:28:00', '2020-10-15 10:28:00'),
(5, 'Private Room', '2020-10-15 10:29:02', '2020-10-15 10:29:02'),
(6, 'Shared Room', '2020-10-15 10:29:11', '2020-10-15 10:29:11'),
(7, 'Pent House', '2020-10-15 10:30:47', '2020-10-15 10:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `email_id`, `fname`, `lname`, `gender`, `phone_no`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(6, 'tirthgodhani98@gmail.com', 'tirth', 'godhani', 'male', '9737020120', '123456789', 0, '2020-10-15 10:38:00', '2020-10-15 10:38:00'),
(7, 'riddhimaiyani2110@gmail.com', 'Riddhi', 'Maiyani', 'female', '8000848402', '123456789', 2, '2020-10-22 10:36:40', '2020-10-22 10:36:40'),
(8, 'domadiyabhautik123@gmail.com', 'Bhautik', 'Domadiya', 'male', '9054946767', '123456789', 2, '2020-10-22 11:06:18', '2020-10-22 11:06:18'),
(9, 'mansimoradiya28@gmail.com', 'Mansi', 'Moradiya', 'female', '7096855203', '123456789', 1, '2020-10-23 05:48:24', '2020-10-23 05:48:24'),
(10, 'shrutichavda0724@gmail.com', 'Shruti', 'Chavda', 'female', '9977965896', '123456789', 1, '2020-10-25 02:35:55', '2020-10-25 02:35:55'),
(11, 'hetvipatil09@gmail.com', 'Hetvi', 'Patil', 'female', '9874569685', '123456789', 1, '2020-10-25 02:36:55', '2020-10-25 02:36:55'),
(12, 'dhavanmaiyani@gmail.com', 'Dhavan', 'Maiyani', 'male', '8563147896', '123456789', 2, '2020-10-25 02:42:17', '2020-10-25 02:42:17'),
(13, 'priyajani1999@gmail.com', 'priya', 'jani', 'female', '8530689354', '123456789', 2, '2020-10-25 02:44:11', '2020-10-25 02:44:11'),
(14, 'priyajanii1999@gmail.com', 'Priyaaa', 'Janiii', 'male', '6358964111', '12345678', 1, '2020-10-25 02:44:56', '2020-10-27 04:27:18'),
(15, 'dholakiyakalpesh79@gmail.com', 'kalpesh', 'dholakiya', 'male', '7899456123', 'kalpesh97', 1, '2020-10-27 04:22:57', '2020-10-27 04:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `c_id`, `created_at`, `updated_at`) VALUES
(1, 'gujarat', 3, '2020-09-30 08:35:43', '2020-09-30 08:35:43'),
(4, 'goa', 3, '2020-10-01 06:01:26', '2020-10-01 06:01:26'),
(5, 'uttar pradesh', 3, '2020-10-01 06:02:12', '2020-10-01 06:02:12'),
(6, 'Kerala', 3, '2020-10-01 06:04:03', '2020-10-01 06:04:03'),
(8, 'Assam', 3, '2020-10-01 06:15:46', '2020-10-01 06:15:46'),
(13, 'Rajasthan', 3, '2020-10-15 08:15:04', '2020-10-15 08:15:04'),
(15, 'Delhi', 3, '2020-10-15 09:23:56', '2020-10-15 09:23:56'),
(16, 'Panjab', 3, '2020-10-15 09:24:18', '2020-10-15 09:24:40');

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
  `role` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kalpesh', 'kalpesh@gmail.com', NULL, '$2y$10$Mnxa/ix9ZlHyuALo5sxeIe5k/KHO4Wrw08MLpRJlPrz0TRCZlMtni', 1, NULL, '2020-09-23 08:36:36', '2020-09-23 08:36:36'),
(2, 'sumit', 'sumit@gmail.com', NULL, '$2y$10$w8VprCAQ9wjkr.PaTm.QHu/6JCb0f0JuGtcz1XW3ABJ06PTDqCm36', 2, NULL, '2020-09-23 08:39:53', '2020-09-23 08:39:53'),
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$HC5wCb97wBNo8ohJ7BxNf.Twbf86QHbg/7wiHnoJrtwwgacX1xKxa', 0, NULL, '2020-09-23 08:41:19', '2020-09-23 08:41:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenitiess`
--
ALTER TABLE `amenitiess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities_assings`
--
ALTER TABLE `amenities_assings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amenities_assings_amenities_id_foreign` (`amenities_id`),
  ADD KEY `amenities_assings_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_email_id_foreign` (`email_id`),
  ADD KEY `bookings_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citys_st_id_foreign` (`st_id`);

--
-- Indexes for table `contactuss`
--
ALTER TABLE `contactuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countrys`
--
ALTER TABLE `countrys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `propertys`
--
ALTER TABLE `propertys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propertys_city_id_foreign` (`city_id`),
  ADD KEY `propertys_email_id_foreign` (`email_id`),
  ADD KEY `propertys_property_type_foreign` (`property_type`);

--
-- Indexes for table `property_images`
--
ALTER TABLE `property_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_images_pro_id_foreign` (`pro_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registrations_email_id_unique` (`email_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_c_id_foreign` (`c_id`);

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
-- AUTO_INCREMENT for table `amenitiess`
--
ALTER TABLE `amenitiess`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `amenities_assings`
--
ALTER TABLE `amenities_assings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `contactuss`
--
ALTER TABLE `contactuss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countrys`
--
ALTER TABLE `countrys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `propertys`
--
ALTER TABLE `propertys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `property_images`
--
ALTER TABLE `property_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenities_assings`
--
ALTER TABLE `amenities_assings`
  ADD CONSTRAINT `amenities_assings_amenities_id_foreign` FOREIGN KEY (`amenities_id`) REFERENCES `amenitiess` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amenities_assings_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `propertys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_email_id_foreign` FOREIGN KEY (`email_id`) REFERENCES `registrations` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `propertys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `citys`
--
ALTER TABLE `citys`
  ADD CONSTRAINT `citys_st_id_foreign` FOREIGN KEY (`st_id`) REFERENCES `states` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `propertys`
--
ALTER TABLE `propertys`
  ADD CONSTRAINT `propertys_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `citys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propertys_email_id_foreign` FOREIGN KEY (`email_id`) REFERENCES `registrations` (`email_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `propertys_property_type_foreign` FOREIGN KEY (`property_type`) REFERENCES `property_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property_images`
--
ALTER TABLE `property_images`
  ADD CONSTRAINT `property_images_pro_id_foreign` FOREIGN KEY (`pro_id`) REFERENCES `propertys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_c_id_foreign` FOREIGN KEY (`c_id`) REFERENCES `countrys` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
