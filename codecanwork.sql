-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 04:25 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codecanwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique_identifier` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` float(8,2) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activated` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addressable_id` bigint(20) UNSIGNED NOT NULL,
  `addressable_type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) DEFAULT NULL,
  `postal_code` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `addressable_id`, `addressable_type`, `village`, `street`, `city_id`, `postal_code`, `country_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-06-09 00:13:23', '2022-06-09 00:13:23', NULL),
(2, 3, 'App\\Models\\User', 'Misrepara', NULL, NULL, NULL, NULL, '2022-06-09 01:06:45', '2022-06-09 01:06:45', NULL),
(3, 4, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-06-09 01:10:27', '2022-06-09 01:10:27', NULL),
(4, 6, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 05:12:34', '2022-08-30 05:12:34', NULL),
(5, 7, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:02:06', '2022-08-30 06:02:06', NULL),
(6, 8, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:12:57', '2022-08-30 06:12:57', NULL),
(7, 9, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:20:12', '2022-08-30 06:20:12', NULL),
(8, 10, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:23:52', '2022-08-30 06:23:52', NULL),
(9, 11, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:26:23', '2022-08-30 06:26:23', NULL),
(10, 12, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 06:28:41', '2022-08-30 06:28:41', NULL),
(11, 13, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:04:56', '2022-08-30 07:04:56', NULL),
(12, 14, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:07:35', '2022-08-30 07:07:35', NULL),
(13, 15, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:08:57', '2022-08-30 07:08:57', NULL),
(14, 16, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:11:18', '2022-08-30 07:11:18', NULL),
(15, 17, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:15:18', '2022-08-30 07:15:18', NULL),
(16, 18, 'App\\Models\\User', '', NULL, NULL, NULL, NULL, '2022-08-30 07:15:52', '2022-08-30 07:15:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `badges`
--

CREATE TABLE `badges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'project/earning/membership',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL COMMENT 'minimum value to get this badge',
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `badges`
--

INSERT INTO `badges` (`id`, `role_id`, `type`, `name`, `value`, `icon`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'fixed', 'Test', 100.00, NULL, NULL, NULL, NULL),
(2, 'client', 'membership_badge', 'Badge1', 10.00, NULL, '2022-08-23 05:14:53', '2022-08-23 05:14:53', NULL),
(3, 'freelancer', 'project_badge', 'Badge One', 100.00, NULL, '2022-09-08 03:43:22', '2022-09-08 03:43:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` int(11) DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_img` int(11) DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `short_description`, `description`, `banner`, `meta_title`, `meta_img`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Test Blog', 'testblog', 'Test short dexcription', 'Test Description', NULL, 'Meta title', NULL, 'Test meta description', 'test', 1, '2022-08-23 10:49:44', '2022-08-23 10:49:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test', '2022-08-23 10:50:03', '2022-08-23 10:50:03', NULL),
(2, 'Cate12', 'Cate12', '2022-08-23 05:14:05', '2022-08-23 05:14:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked_clients`
--

CREATE TABLE `bookmarked_clients` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookmarked_clients`
--

INSERT INTO `bookmarked_clients` (`id`, `user_id`, `client_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2022-08-23 10:50:14', '2022-08-23 10:50:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked_experts`
--

CREATE TABLE `bookmarked_experts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `freelancer_user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookmarked_experts`
--

INSERT INTO `bookmarked_experts` (`id`, `user_id`, `freelancer_user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2022-08-23 10:50:24', '2022-08-23 10:50:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookmarked_projects`
--

CREATE TABLE `bookmarked_projects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookmarked_projects`
--

INSERT INTO `bookmarked_projects` (`id`, `user_id`, `project_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2022-08-23 10:46:28', '2022-08-23 10:46:28', NULL),
(2, 3, 4, '2022-09-08 00:06:10', '2022-09-08 00:06:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_projects`
--

CREATE TABLE `cancel_projects` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `requested_user_id` int(11) NOT NULL,
  `reason` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewed` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancel_projects`
--

INSERT INTO `cancel_projects` (`id`, `project_id`, `requested_user_id`, `reason`, `viewed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'No', 1, '2022-08-23 10:44:46', '2022-12-20 11:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_thread_id` bigint(20) UNSIGNED NOT NULL,
  `sender_user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `chat_thread_id`, `sender_user_id`, `message`, `attachment`, `seen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 1, 'Test mgs', NULL, 10, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_threads`
--

CREATE TABLE `chat_threads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thread_code` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_user_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `interview` int(1) NOT NULL DEFAULT 1,
  `blocked_by_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chat_threads`
--

INSERT INTO `chat_threads` (`id`, `thread_code`, `sender_user_id`, `receiver_user_id`, `active`, `interview`, `blocked_by_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1005', 1, 1, 1, 1, 1, NULL, NULL, NULL),
(2, '3202209124', 4, 3, 1, 1, NULL, '2022-09-12 05:41:53', '2022-09-12 05:41:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 101, 'Andaman and Nicobar Islands', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(2, 101, 'Andhra Pradesh', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(3, 101, 'Arunachal Pradesh', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(4, 101, 'Assam', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(5, 101, 'Bihar', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(6, 101, 'Chandigarh', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(7, 101, 'Chhattisgarh', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(8, 101, 'Dadra and Nagar Haveli', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(9, 101, 'Daman and Diu', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(10, 101, 'Delhi', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(11, 101, 'Goa', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(12, 101, 'Gujarat', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(13, 101, 'Haryana', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(14, 101, 'Himachal Pradesh', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(15, 101, 'Jammu and Kashmir', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(16, 101, 'Jharkhand', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(17, 101, 'Karnataka', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(19, 101, 'Kerala', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(20, 101, 'Lakshadweep', '2020-04-27 04:38:04', '2020-04-27 04:38:04', NULL),
(21, 101, 'Madhya Pradesh', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(22, 101, 'Maharashtra', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(23, 101, 'Manipur', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(24, 101, 'Meghalaya', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(25, 101, 'Mizoram', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(26, 101, 'Nagaland', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(29, 101, 'Odisha', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(31, 101, 'Pondicherry', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(32, 101, 'Punjab', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(33, 101, 'Rajasthan', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(34, 101, 'Sikkim', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(35, 101, 'Tamil Nadu', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(36, 101, 'Telangana', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(37, 101, 'Tripura', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(38, 101, 'Uttar Pradesh', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(39, 101, 'Uttarakhand', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(41, 101, 'West Bengal', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(42, 1, 'Badakhshan', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(43, 1, 'Badgis', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(44, 1, 'Baglan', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(45, 1, 'Balkh', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(46, 1, 'Bamiyan', '2020-04-27 04:38:05', '2020-04-27 04:38:05', NULL),
(47, 1, 'Farah', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(48, 1, 'Faryab', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(49, 1, 'Gawr', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(50, 1, 'Gazni', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(51, 1, 'Herat', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(52, 1, 'Hilmand', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(53, 1, 'Jawzjan', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(54, 1, 'Kabul', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(55, 1, 'Kapisa', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(56, 1, 'Khawst', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(57, 1, 'Kunar', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(58, 1, 'Lagman', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(59, 1, 'Lawghar', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(60, 1, 'Nangarhar', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(61, 1, 'Nimruz', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(62, 1, 'Nuristan', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(63, 1, 'Paktika', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(64, 1, 'Paktiya', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(65, 1, 'Parwan', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(66, 1, 'Qandahar', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(67, 1, 'Qunduz', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(68, 1, 'Samangan', '2020-04-27 04:38:06', '2020-04-27 04:38:06', NULL),
(69, 1, 'Sar-e Pul', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(70, 1, 'Takhar', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(71, 1, 'Uruzgan', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(72, 1, 'Wardag', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(73, 1, 'Zabul', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(74, 2, 'Berat', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(75, 2, 'Bulqize', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(76, 2, 'Delvine', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(77, 2, 'Devoll', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(78, 2, 'Dibre', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(79, 2, 'Durres', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(80, 2, 'Elbasan', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(81, 2, 'Fier', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(82, 2, 'Gjirokaster', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(83, 2, 'Gramsh', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(84, 2, 'Has', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(85, 2, 'Kavaje', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(86, 2, 'Kolonje', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(87, 2, 'Korce', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(88, 2, 'Kruje', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(89, 2, 'Kucove', '2020-04-27 04:38:07', '2020-04-27 04:38:07', NULL),
(90, 2, 'Kukes', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(91, 2, 'Kurbin', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(92, 2, 'Lezhe', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(93, 2, 'Librazhd', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(94, 2, 'Lushnje', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(95, 2, 'Mallakaster', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(96, 2, 'Malsi e Madhe', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(97, 2, 'Mat', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(98, 2, 'Mirdite', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(99, 2, 'Peqin', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(100, 2, 'Permet', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(101, 2, 'Pogradec', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(102, 2, 'Puke', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(103, 2, 'Sarande', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(104, 2, 'Shkoder', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(105, 2, 'Skrapar', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(106, 2, 'Tepelene', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(107, 2, 'Tirane', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(108, 2, 'Tropoje', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(109, 2, 'Vlore', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(110, 3, 'Ayn Daflah', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(111, 3, 'Ayn Tamushanat', '2020-04-27 04:38:08', '2020-04-27 04:38:08', NULL),
(112, 3, 'Adrar', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(113, 3, 'Algiers', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(114, 3, 'Annabah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(115, 3, 'Bashshar', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(116, 3, 'Batnah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(117, 3, 'Bijayah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(118, 3, 'Biskrah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(119, 3, 'Blidah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(120, 3, 'Buirah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(121, 3, 'Bumardas', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(122, 3, 'Burj Bu Arririj', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(123, 3, 'Ghalizan', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(124, 3, 'Ghardayah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(125, 3, 'Ilizi', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(126, 3, 'Jijili', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(127, 3, 'Jilfah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(128, 3, 'Khanshalah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(129, 3, 'Masilah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(130, 3, 'Midyah', '2020-04-27 04:38:09', '2020-04-27 04:38:09', NULL),
(131, 3, 'Milah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(132, 3, 'Muaskar', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(133, 3, 'Mustaghanam', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(134, 3, 'Naama', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(135, 3, 'Oran', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(136, 3, 'Ouargla', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(137, 3, 'Qalmah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(138, 3, 'Qustantinah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(139, 3, 'Sakikdah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(140, 3, 'Satif', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(141, 3, 'Sayda', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(142, 3, 'Sidi ban-al-\'\'Abbas', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(143, 3, 'Suq Ahras', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(144, 3, 'Tamanghasat', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(145, 3, 'Tibazah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(146, 3, 'Tibissah', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(147, 3, 'Tilimsan', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(148, 3, 'Tinduf', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(149, 3, 'Tisamsilt', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(150, 3, 'Tiyarat', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(151, 3, 'Tizi Wazu', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(152, 3, 'Umm-al-Bawaghi', '2020-04-27 04:38:10', '2020-04-27 04:38:10', NULL),
(153, 3, 'Wahran', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(154, 3, 'Warqla', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(155, 3, 'Wilaya d Alger', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(156, 3, 'Wilaya de Bejaia', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(157, 3, 'Wilaya de Constantine', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(158, 3, 'al-Aghwat', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(159, 3, 'al-Bayadh', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(160, 3, 'al-Jaza\'\'ir', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(161, 3, 'al-Wad', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(162, 3, 'ash-Shalif', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(163, 3, 'at-Tarif', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(164, 4, 'Eastern', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(165, 4, 'Manu\'\'a', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(166, 4, 'Swains Island', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(167, 4, 'Western', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(168, 5, 'Andorra la Vella', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(169, 5, 'Canillo', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(170, 5, 'Encamp', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(171, 5, 'La Massana', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(172, 5, 'Les Escaldes', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(173, 5, 'Ordino', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(174, 5, 'Sant Julia de Loria', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(175, 6, 'Bengo', '2020-04-27 04:38:11', '2020-04-27 04:38:11', NULL),
(176, 6, 'Benguela', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(177, 6, 'Bie', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(178, 6, 'Cabinda', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(179, 6, 'Cunene', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(180, 6, 'Huambo', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(181, 6, 'Huila', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(182, 6, 'Kuando-Kubango', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(183, 6, 'Kwanza Norte', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(184, 6, 'Kwanza Sul', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(185, 6, 'Luanda', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(186, 6, 'Lunda Norte', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(187, 6, 'Lunda Sul', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(188, 6, 'Malanje', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(189, 6, 'Moxico', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(190, 6, 'Namibe', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(191, 6, 'Uige', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(192, 6, 'Zaire', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(193, 7, 'Other Provinces', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(194, 8, 'Sector claimed by Argentina/Ch', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(195, 8, 'Sector claimed by Argentina/UK', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(196, 8, 'Sector claimed by Australia', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(197, 8, 'Sector claimed by France', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(198, 8, 'Sector claimed by New Zealand', '2020-04-27 04:38:12', '2020-04-27 04:38:12', NULL),
(199, 8, 'Sector claimed by Norway', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(200, 8, 'Unclaimed Sector', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(201, 9, 'Barbuda', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(202, 9, 'Saint George', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(203, 9, 'Saint John', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(204, 9, 'Saint Mary', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(205, 9, 'Saint Paul', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(206, 9, 'Saint Peter', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(207, 9, 'Saint Philip', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(208, 10, 'Buenos Aires', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(209, 10, 'Catamarca', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(210, 10, 'Chaco', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(211, 10, 'Chubut', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(212, 10, 'Cordoba', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(213, 10, 'Corrientes', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(214, 10, 'Distrito Federal', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(215, 10, 'Entre Rios', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(216, 10, 'Formosa', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(217, 10, 'Jujuy', '2020-04-27 04:38:13', '2020-04-27 04:38:13', NULL),
(218, 10, 'La Pampa', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(219, 10, 'La Rioja', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(220, 10, 'Mendoza', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(221, 10, 'Misiones', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(222, 10, 'Neuquen', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(223, 10, 'Rio Negro', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(224, 10, 'Salta', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(225, 10, 'San Juan', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(226, 10, 'San Luis', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(227, 10, 'Santa Cruz', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(228, 10, 'Santa Fe', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(229, 10, 'Santiago del Estero', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(230, 10, 'Tierra del Fuego', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(231, 10, 'Tucuman', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(232, 11, 'Aragatsotn', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(233, 11, 'Ararat', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(234, 11, 'Armavir', '2020-04-27 04:38:14', '2020-04-27 04:38:14', NULL),
(235, 11, 'Gegharkunik', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(236, 11, 'Kotaik', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(237, 11, 'Lori', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(238, 11, 'Shirak', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(239, 11, 'Stepanakert', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(240, 11, 'Syunik', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(241, 11, 'Tavush', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(242, 11, 'Vayots Dzor', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(243, 11, 'Yerevan', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(244, 12, 'Aruba', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(245, 13, 'Auckland', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(246, 13, 'Australian Capital Territory', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(247, 13, 'Balgowlah', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(248, 13, 'Balmain', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(249, 13, 'Bankstown', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(250, 13, 'Baulkham Hills', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(251, 13, 'Bonnet Bay', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(252, 13, 'Camberwell', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(253, 13, 'Carole Park', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(254, 13, 'Castle Hill', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(255, 13, 'Caulfield', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(256, 13, 'Chatswood', '2020-04-27 04:38:15', '2020-04-27 04:38:15', NULL),
(257, 13, 'Cheltenham', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(258, 13, 'Cherrybrook', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(259, 13, 'Clayton', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(260, 13, 'Collingwood', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(261, 13, 'Frenchs Forest', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(262, 13, 'Hawthorn', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(263, 13, 'Jannnali', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(264, 13, 'Knoxfield', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(265, 13, 'Melbourne', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(266, 13, 'New South Wales', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(267, 13, 'Northern Territory', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(268, 13, 'Perth', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(269, 13, 'Queensland', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(270, 13, 'South Australia', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(271, 13, 'Tasmania', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(272, 13, 'Templestowe', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(273, 13, 'Victoria', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(274, 13, 'Werribee south', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(275, 13, 'Western Australia', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(276, 13, 'Wheeler', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(277, 14, 'Bundesland Salzburg', '2020-04-27 04:38:16', '2020-04-27 04:38:16', NULL),
(278, 14, 'Bundesland Steiermark', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(279, 14, 'Bundesland Tirol', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(280, 14, 'Burgenland', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(281, 14, 'Carinthia', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(282, 14, 'Karnten', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(283, 14, 'Liezen', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(284, 14, 'Lower Austria', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(285, 14, 'Niederosterreich', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(286, 14, 'Oberosterreich', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(287, 14, 'Salzburg', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(288, 14, 'Schleswig-Holstein', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(289, 14, 'Steiermark', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(290, 14, 'Styria', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(291, 14, 'Tirol', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(292, 14, 'Upper Austria', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(293, 14, 'Vorarlberg', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(294, 14, 'Wien', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(295, 15, 'Abseron', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(296, 15, 'Baki Sahari', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(297, 15, 'Ganca', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(298, 15, 'Ganja', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(299, 15, 'Kalbacar', '2020-04-27 04:38:17', '2020-04-27 04:38:17', NULL),
(300, 15, 'Lankaran', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(301, 15, 'Mil-Qarabax', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(302, 15, 'Mugan-Salyan', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(303, 15, 'Nagorni-Qarabax', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(304, 15, 'Naxcivan', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(305, 15, 'Priaraks', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(306, 15, 'Qazax', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(307, 15, 'Saki', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(308, 15, 'Sirvan', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(309, 15, 'Xacmaz', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(310, 16, 'Abaco', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(311, 16, 'Acklins Island', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(312, 16, 'Andros', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(313, 16, 'Berry Islands', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(314, 16, 'Biminis', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(315, 16, 'Cat Island', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(316, 16, 'Crooked Island', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(317, 16, 'Eleuthera', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(318, 16, 'Exuma and Cays', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(319, 16, 'Grand Bahama', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(320, 16, 'Inagua Islands', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(321, 16, 'Long Island', '2020-04-27 04:38:18', '2020-04-27 04:38:18', NULL),
(322, 16, 'Mayaguana', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(323, 16, 'New Providence', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(324, 16, 'Ragged Island', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(325, 16, 'Rum Cay', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(326, 16, 'San Salvador', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(327, 17, 'Isa', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(328, 17, 'Badiyah', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(329, 17, 'Hidd', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(330, 17, 'Jidd Hafs', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(331, 17, 'Mahama', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(332, 17, 'Manama', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(333, 17, 'Sitrah', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(334, 17, 'al-Manamah', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(335, 17, 'al-Muharraq', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(336, 17, 'ar-Rifa\'\'a', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(337, 18, 'Bagar Hat', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(338, 18, 'Bandarban', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(339, 18, 'Barguna', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(340, 18, 'Barisal', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(341, 18, 'Bhola', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(342, 18, 'Bogora', '2020-04-27 04:38:19', '2020-04-27 04:38:19', NULL),
(343, 18, 'Brahman Bariya', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(344, 18, 'Chandpur', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(345, 18, 'Chattagam', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(346, 18, 'Chittagong Division', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(347, 18, 'Chuadanga', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(348, 18, 'Dhaka', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(349, 18, 'Dinajpur', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(350, 18, 'Faridpur', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(351, 18, 'Feni', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(352, 18, 'Gaybanda', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(353, 18, 'Gazipur', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(354, 18, 'Gopalganj', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(355, 18, 'Habiganj', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(356, 18, 'Jaipur Hat', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(357, 18, 'Jamalpur', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(358, 18, 'Jessor', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(359, 18, 'Jhalakati', '2020-04-27 04:38:20', '2020-04-27 04:38:20', NULL),
(360, 18, 'Jhanaydah', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(361, 18, 'Khagrachhari', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(362, 18, 'Khulna', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(363, 18, 'Kishorganj', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(364, 18, 'Koks Bazar', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(365, 18, 'Komilla', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(366, 18, 'Kurigram', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(367, 18, 'Kushtiya', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(368, 18, 'Lakshmipur', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(369, 18, 'Lalmanir Hat', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(370, 18, 'Madaripur', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(371, 18, 'Magura', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(372, 18, 'Maimansingh', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(373, 18, 'Manikganj', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(374, 18, 'Maulvi Bazar', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(375, 18, 'Meherpur', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(376, 18, 'Munshiganj', '2020-04-27 04:38:21', '2020-04-27 04:38:21', NULL),
(377, 18, 'Naral', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(378, 18, 'Narayanganj', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(379, 18, 'Narsingdi', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(380, 18, 'Nator', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(381, 18, 'Naugaon', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(382, 18, 'Nawabganj', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(383, 18, 'Netrakona', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(384, 18, 'Nilphamari', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(385, 18, 'Noakhali', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(386, 18, 'Pabna', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(387, 18, 'Panchagarh', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(388, 18, 'Patuakhali', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(389, 18, 'Pirojpur', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(390, 18, 'Rajbari', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(391, 18, 'Rajshahi', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(392, 18, 'Rangamati', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(393, 18, 'Rangpur', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(394, 18, 'Satkhira', '2020-04-27 04:38:22', '2020-04-27 04:38:22', NULL),
(395, 18, 'Shariatpur', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(396, 18, 'Sherpur', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(397, 18, 'Silhat', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(398, 18, 'Sirajganj', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(399, 18, 'Sunamganj', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(400, 18, 'Tangayal', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(401, 18, 'Thakurgaon', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(402, 19, 'Christ Church', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(403, 19, 'Saint Andrew', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(404, 19, 'Saint George', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(405, 19, 'Saint James', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(406, 19, 'Saint John', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(407, 19, 'Saint Joseph', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(408, 19, 'Saint Lucy', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(409, 19, 'Saint Michael', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(410, 19, 'Saint Peter', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(411, 19, 'Saint Philip', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(412, 19, 'Saint Thomas', '2020-04-27 04:38:23', '2020-04-27 04:38:23', NULL),
(413, 20, 'Brest', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(414, 20, 'Homjel', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(415, 20, 'Hrodna', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(416, 20, 'Mahiljow', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(417, 20, 'Mahilyowskaya Voblasts', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(418, 20, 'Minsk', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(419, 20, 'Minskaja Voblasts', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(420, 20, 'Petrik', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(421, 20, 'Vicebsk', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(422, 21, 'Antwerpen', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(423, 21, 'Berchem', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(424, 21, 'Brabant', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(425, 21, 'Brabant Wallon', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(426, 21, 'Brussel', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(427, 21, 'East Flanders', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(428, 21, 'Hainaut', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(429, 21, 'Liege', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(430, 21, 'Limburg', '2020-04-27 04:38:24', '2020-04-27 04:38:24', NULL),
(431, 21, 'Luxembourg', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(432, 21, 'Namur', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(433, 21, 'Ontario', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(434, 21, 'Oost-Vlaanderen', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(435, 21, 'Provincie Brabant', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(436, 21, 'Vlaams-Brabant', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(437, 21, 'Wallonne', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(438, 21, 'West-Vlaanderen', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(439, 22, 'Belize', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(440, 22, 'Cayo', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(441, 22, 'Corozal', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(442, 22, 'Orange Walk', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(443, 22, 'Stann Creek', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(444, 22, 'Toledo', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(445, 23, 'Alibori', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(446, 23, 'Atacora', '2020-04-27 04:38:25', '2020-04-27 04:38:25', NULL),
(447, 23, 'Atlantique', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(448, 23, 'Borgou', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(449, 23, 'Collines', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(450, 23, 'Couffo', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(451, 23, 'Donga', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(452, 23, 'Littoral', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(453, 23, 'Mono', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(454, 23, 'Oueme', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(455, 23, 'Plateau', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(456, 23, 'Zou', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(457, 24, 'Hamilton', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(458, 24, 'Saint George', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(459, 25, 'Bumthang', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(460, 25, 'Chhukha', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(461, 25, 'Chirang', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(462, 25, 'Daga', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(463, 25, 'Geylegphug', '2020-04-27 04:38:26', '2020-04-27 04:38:26', NULL),
(464, 25, 'Ha', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(465, 25, 'Lhuntshi', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(466, 25, 'Mongar', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(467, 25, 'Pemagatsel', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(468, 25, 'Punakha', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(469, 25, 'Rinpung', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(470, 25, 'Samchi', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(471, 25, 'Samdrup Jongkhar', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(472, 25, 'Shemgang', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(473, 25, 'Tashigang', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(474, 25, 'Timphu', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(475, 25, 'Tongsa', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(476, 25, 'Wangdiphodrang', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(477, 26, 'Beni', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(478, 26, 'Chuquisaca', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(479, 26, 'Cochabamba', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(480, 26, 'La Paz', '2020-04-27 04:38:27', '2020-04-27 04:38:27', NULL),
(481, 26, 'Oruro', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(482, 26, 'Pando', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(483, 26, 'Potosi', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(484, 26, 'Santa Cruz', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(485, 26, 'Tarija', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(486, 27, 'Federacija Bosna i Hercegovina', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(487, 27, 'Republika Srpska', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(488, 28, 'Central Bobonong', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(489, 28, 'Central Boteti', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(490, 28, 'Central Mahalapye', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(491, 28, 'Central Serowe-Palapye', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(492, 28, 'Central Tutume', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(493, 28, 'Chobe', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(494, 28, 'Francistown', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(495, 28, 'Gaborone', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(496, 28, 'Ghanzi', '2020-04-27 04:38:28', '2020-04-27 04:38:28', NULL),
(497, 28, 'Jwaneng', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(498, 28, 'Kgalagadi North', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(499, 28, 'Kgalagadi South', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(500, 28, 'Kgatleng', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(501, 28, 'Kweneng', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(502, 28, 'Lobatse', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(503, 28, 'Ngamiland', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(504, 28, 'Ngwaketse', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(505, 28, 'North East', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(506, 28, 'Okavango', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(507, 28, 'Orapa', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(508, 28, 'Selibe Phikwe', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(509, 28, 'South East', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(510, 28, 'Sowa', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(511, 29, 'Bouvet Island', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(512, 30, 'Acre', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(513, 30, 'Alagoas', '2020-04-27 04:38:29', '2020-04-27 04:38:29', NULL),
(514, 30, 'Amapa', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(515, 30, 'Amazonas', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(516, 30, 'Bahia', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(517, 30, 'Ceara', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(518, 30, 'Distrito Federal', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(519, 30, 'Espirito Santo', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(520, 30, 'Estado de Sao Paulo', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(521, 30, 'Goias', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(522, 30, 'Maranhao', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(523, 30, 'Mato Grosso', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(524, 30, 'Mato Grosso do Sul', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(525, 30, 'Minas Gerais', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(526, 30, 'Para', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(527, 30, 'Paraiba', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(528, 30, 'Parana', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(529, 30, 'Pernambuco', '2020-04-27 04:38:30', '2020-04-27 04:38:30', NULL),
(530, 30, 'Piaui', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(531, 30, 'Rio Grande do Norte', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(532, 30, 'Rio Grande do Sul', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(533, 30, 'Rio de Janeiro', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(534, 30, 'Rondonia', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(535, 30, 'Roraima', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(536, 30, 'Santa Catarina', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(537, 30, 'Sao Paulo', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(538, 30, 'Sergipe', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(539, 30, 'Tocantins', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(540, 31, 'British Indian Ocean Territory', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(541, 32, 'Belait', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(542, 32, 'Brunei-Muara', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(543, 32, 'Temburong', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(544, 32, 'Tutong', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(545, 33, 'Blagoevgrad', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(546, 33, 'Burgas', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(547, 33, 'Dobrich', '2020-04-27 04:38:31', '2020-04-27 04:38:31', NULL),
(548, 33, 'Gabrovo', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(549, 33, 'Haskovo', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(550, 33, 'Jambol', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(551, 33, 'Kardzhali', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(552, 33, 'Kjustendil', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(553, 33, 'Lovech', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(554, 33, 'Montana', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(555, 33, 'Oblast Sofiya-Grad', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(556, 33, 'Pazardzhik', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(557, 33, 'Pernik', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(558, 33, 'Pleven', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(559, 33, 'Plovdiv', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(560, 33, 'Razgrad', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(561, 33, 'Ruse', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(562, 33, 'Shumen', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(563, 33, 'Silistra', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(564, 33, 'Sliven', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(565, 33, 'Smoljan', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(566, 33, 'Sofija grad', '2020-04-27 04:38:32', '2020-04-27 04:38:32', NULL),
(567, 33, 'Sofijska oblast', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(568, 33, 'Stara Zagora', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(569, 33, 'Targovishte', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(570, 33, 'Varna', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(571, 33, 'Veliko Tarnovo', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(572, 33, 'Vidin', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(573, 33, 'Vraca', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(574, 33, 'Yablaniza', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(575, 34, 'Bale', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(576, 34, 'Bam', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(577, 34, 'Bazega', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(578, 34, 'Bougouriba', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(579, 34, 'Boulgou', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(580, 34, 'Boulkiemde', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(581, 34, 'Comoe', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(582, 34, 'Ganzourgou', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(583, 34, 'Gnagna', '2020-04-27 04:38:33', '2020-04-27 04:38:33', NULL),
(584, 34, 'Gourma', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(585, 34, 'Houet', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(586, 34, 'Ioba', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(587, 34, 'Kadiogo', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(588, 34, 'Kenedougou', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(589, 34, 'Komandjari', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(590, 34, 'Kompienga', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(591, 34, 'Kossi', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(592, 34, 'Kouritenga', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(593, 34, 'Kourweogo', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(594, 34, 'Leraba', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(595, 34, 'Mouhoun', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(596, 34, 'Nahouri', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(597, 34, 'Namentenga', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(598, 34, 'Noumbiel', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(599, 34, 'Oubritenga', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(600, 34, 'Oudalan', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(601, 34, 'Passore', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(602, 34, 'Poni', '2020-04-27 04:38:34', '2020-04-27 04:38:34', NULL),
(603, 34, 'Sanguie', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(604, 34, 'Sanmatenga', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(605, 34, 'Seno', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(606, 34, 'Sissili', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(607, 34, 'Soum', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(608, 34, 'Sourou', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(609, 34, 'Tapoa', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(610, 34, 'Tuy', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(611, 34, 'Yatenga', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(612, 34, 'Zondoma', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(613, 34, 'Zoundweogo', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(614, 35, 'Bubanza', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(615, 35, 'Bujumbura', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(616, 35, 'Bururi', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(617, 35, 'Cankuzo', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(618, 35, 'Cibitoke', '2020-04-27 04:38:35', '2020-04-27 04:38:35', NULL),
(619, 35, 'Gitega', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(620, 35, 'Karuzi', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(621, 35, 'Kayanza', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(622, 35, 'Kirundo', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(623, 35, 'Makamba', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(624, 35, 'Muramvya', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(625, 35, 'Muyinga', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(626, 35, 'Ngozi', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(627, 35, 'Rutana', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(628, 35, 'Ruyigi', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(629, 36, 'Banteay Mean Chey', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(630, 36, 'Bat Dambang', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(631, 36, 'Kampong Cham', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(632, 36, 'Kampong Chhnang', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(633, 36, 'Kampong Spoeu', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(634, 36, 'Kampong Thum', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(635, 36, 'Kampot', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(636, 36, 'Kandal', '2020-04-27 04:38:36', '2020-04-27 04:38:36', NULL),
(637, 36, 'Kaoh Kong', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(638, 36, 'Kracheh', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(639, 36, 'Krong Kaeb', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(640, 36, 'Krong Pailin', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(641, 36, 'Krong Preah Sihanouk', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(642, 36, 'Mondol Kiri', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(643, 36, 'Otdar Mean Chey', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(644, 36, 'Phnum Penh', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(645, 36, 'Pousat', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(646, 36, 'Preah Vihear', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(647, 36, 'Prey Veaeng', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(648, 36, 'Rotanak Kiri', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(649, 36, 'Siem Reab', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(650, 36, 'Stueng Traeng', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(651, 36, 'Svay Rieng', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(652, 36, 'Takaev', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(653, 37, 'Adamaoua', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(654, 37, 'Centre', '2020-04-27 04:38:37', '2020-04-27 04:38:37', NULL),
(655, 37, 'Est', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(656, 37, 'Littoral', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(657, 37, 'Nord', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(658, 37, 'Nord Extreme', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(659, 37, 'Nordouest', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(660, 37, 'Ouest', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(661, 37, 'Sud', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(662, 37, 'Sudouest', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(663, 38, 'Alberta', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(664, 38, 'British Columbia', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(665, 38, 'Manitoba', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(666, 38, 'New Brunswick', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(667, 38, 'Newfoundland and Labrador', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(668, 38, 'Northwest Territories', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(669, 38, 'Nova Scotia', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(670, 38, 'Nunavut', '2020-04-27 04:38:38', '2020-04-27 04:38:38', NULL),
(671, 38, 'Ontario', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(672, 38, 'Prince Edward Island', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(673, 38, 'Quebec', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(674, 38, 'Saskatchewan', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(675, 38, 'Yukon', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(676, 39, 'Boavista', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(677, 39, 'Brava', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(678, 39, 'Fogo', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(679, 39, 'Maio', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(680, 39, 'Sal', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(681, 39, 'Santo Antao', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(682, 39, 'Sao Nicolau', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(683, 39, 'Sao Tiago', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(684, 39, 'Sao Vicente', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(685, 40, 'Grand Cayman', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(686, 41, 'Bamingui-Bangoran', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(687, 41, 'Bangui', '2020-04-27 04:38:39', '2020-04-27 04:38:39', NULL),
(688, 41, 'Basse-Kotto', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(689, 41, 'Haut-Mbomou', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(690, 41, 'Haute-Kotto', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(691, 41, 'Kemo', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(692, 41, 'Lobaye', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(693, 41, 'Mambere-Kadei', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(694, 41, 'Mbomou', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(695, 41, 'Nana-Gribizi', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(696, 41, 'Nana-Mambere', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(697, 41, 'Ombella Mpoko', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(698, 41, 'Ouaka', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(699, 41, 'Ouham', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(700, 41, 'Ouham-Pende', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(701, 41, 'Sangha-Mbaere', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(702, 41, 'Vakaga', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(703, 42, 'Batha', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(704, 42, 'Biltine', '2020-04-27 04:38:40', '2020-04-27 04:38:40', NULL),
(705, 42, 'Bourkou-Ennedi-Tibesti', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(706, 42, 'Chari-Baguirmi', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(707, 42, 'Guera', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(708, 42, 'Kanem', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(709, 42, 'Lac', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(710, 42, 'Logone Occidental', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(711, 42, 'Logone Oriental', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(712, 42, 'Mayo-Kebbi', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(713, 42, 'Moyen-Chari', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(714, 42, 'Ouaddai', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(715, 42, 'Salamat', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(716, 42, 'Tandjile', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(717, 43, 'Aisen', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(718, 43, 'Antofagasta', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(719, 43, 'Araucania', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(720, 43, 'Atacama', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(721, 43, 'Bio Bio', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(722, 43, 'Coquimbo', '2020-04-27 04:38:41', '2020-04-27 04:38:41', NULL),
(723, 43, 'Libertador General Bernardo O', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(724, 43, 'Los Lagos', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(725, 43, 'Magellanes', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(726, 43, 'Maule', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(727, 43, 'Metropolitana', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(728, 43, 'Metropolitana de Santiago', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(729, 43, 'Tarapaca', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(730, 43, 'Valparaiso', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(731, 44, 'Anhui', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(732, 44, 'Anhui Province', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(733, 44, 'Anhui Sheng', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(734, 44, 'Aomen', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(735, 44, 'Beijing', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(736, 44, 'Beijing Shi', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(737, 44, 'Chongqing', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(738, 44, 'Fujian', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(739, 44, 'Fujian Sheng', '2020-04-27 04:38:42', '2020-04-27 04:38:42', NULL),
(740, 44, 'Gansu', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(741, 44, 'Guangdong', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(742, 44, 'Guangdong Sheng', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(743, 44, 'Guangxi', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(744, 44, 'Guizhou', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(745, 44, 'Hainan', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(746, 44, 'Hebei', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(747, 44, 'Heilongjiang', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(748, 44, 'Henan', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(749, 44, 'Hubei', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(750, 44, 'Hunan', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(751, 44, 'Jiangsu', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(752, 44, 'Jiangsu Sheng', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(753, 44, 'Jiangxi', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(754, 44, 'Jilin', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(755, 44, 'Liaoning', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(756, 44, 'Liaoning Sheng', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(757, 44, 'Nei Monggol', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(758, 44, 'Ningxia Hui', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(759, 44, 'Qinghai', '2020-04-27 04:38:43', '2020-04-27 04:38:43', NULL),
(760, 44, 'Shaanxi', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(761, 44, 'Shandong', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(762, 44, 'Shandong Sheng', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(763, 44, 'Shanghai', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(764, 44, 'Shanxi', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(765, 44, 'Sichuan', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(766, 44, 'Tianjin', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(767, 44, 'Xianggang', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(768, 44, 'Xinjiang', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(769, 44, 'Xizang', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(770, 44, 'Yunnan', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(771, 44, 'Zhejiang', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(772, 44, 'Zhejiang Sheng', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(773, 45, 'Christmas Island', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(774, 46, 'Cocos (Keeling) Islands', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(775, 47, 'Amazonas', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(776, 47, 'Antioquia', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(777, 47, 'Arauca', '2020-04-27 04:38:44', '2020-04-27 04:38:44', NULL),
(778, 47, 'Atlantico', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(779, 47, 'Bogota', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(780, 47, 'Bolivar', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(781, 47, 'Boyaca', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(782, 47, 'Caldas', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(783, 47, 'Caqueta', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(784, 47, 'Casanare', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(785, 47, 'Cauca', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(786, 47, 'Cesar', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(787, 47, 'Choco', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(788, 47, 'Cordoba', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(789, 47, 'Cundinamarca', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(790, 47, 'Guainia', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(791, 47, 'Guaviare', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(792, 47, 'Huila', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(793, 47, 'La Guajira', '2020-04-27 04:38:45', '2020-04-27 04:38:45', NULL),
(794, 47, 'Magdalena', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(795, 47, 'Meta', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(796, 47, 'Narino', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(797, 47, 'Norte de Santander', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(798, 47, 'Putumayo', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(799, 47, 'Quindio', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(800, 47, 'Risaralda', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(801, 47, 'San Andres y Providencia', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(802, 47, 'Santander', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(803, 47, 'Sucre', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(804, 47, 'Tolima', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(805, 47, 'Valle del Cauca', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(806, 47, 'Vaupes', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(807, 47, 'Vichada', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(808, 48, 'Mwali', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(809, 48, 'Njazidja', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(810, 48, 'Nzwani', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(811, 49, 'Bouenza', '2020-04-27 04:38:46', '2020-04-27 04:38:46', NULL),
(812, 49, 'Brazzaville', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(813, 49, 'Cuvette', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(814, 49, 'Kouilou', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(815, 49, 'Lekoumou', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(816, 49, 'Likouala', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(817, 49, 'Niari', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(818, 49, 'Plateaux', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(819, 49, 'Pool', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(820, 49, 'Sangha', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(821, 50, 'Bandundu', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(822, 50, 'Bas-Congo', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(823, 50, 'Equateur', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(824, 50, 'Haut-Congo', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(825, 50, 'Kasai-Occidental', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(826, 50, 'Kasai-Oriental', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(827, 50, 'Katanga', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(828, 50, 'Kinshasa', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(829, 50, 'Maniema', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(830, 50, 'Nord-Kivu', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(831, 50, 'Sud-Kivu', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(832, 51, 'Aitutaki', '2020-04-27 04:38:47', '2020-04-27 04:38:47', NULL),
(833, 51, 'Atiu', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(834, 51, 'Mangaia', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(835, 51, 'Manihiki', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(836, 51, 'Mauke', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(837, 51, 'Mitiaro', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(838, 51, 'Nassau', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(839, 51, 'Pukapuka', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(840, 51, 'Rakahanga', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(841, 51, 'Rarotonga', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(842, 51, 'Tongareva', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(843, 52, 'Alajuela', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(844, 52, 'Cartago', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(845, 52, 'Guanacaste', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(846, 52, 'Heredia', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(847, 52, 'Limon', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(848, 52, 'Puntarenas', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(849, 52, 'San Jose', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(850, 53, 'Abidjan', '2020-04-27 04:38:48', '2020-04-27 04:38:48', NULL),
(851, 53, 'Agneby', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(852, 53, 'Bafing', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(853, 53, 'Denguele', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(854, 53, 'Dix-huit Montagnes', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(855, 53, 'Fromager', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(856, 53, 'Haut-Sassandra', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(857, 53, 'Lacs', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(858, 53, 'Lagunes', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(859, 53, 'Marahoue', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(860, 53, 'Moyen-Cavally', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(861, 53, 'Moyen-Comoe', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(862, 53, 'N\'\'zi-Comoe', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(863, 53, 'Sassandra', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(864, 53, 'Savanes', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(865, 53, 'Sud-Bandama', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(866, 53, 'Sud-Comoe', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(867, 53, 'Vallee du Bandama', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(868, 53, 'Worodougou', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(869, 53, 'Zanzan', '2020-04-27 04:38:49', '2020-04-27 04:38:49', NULL),
(870, 54, 'Bjelovar-Bilogora', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(871, 54, 'Dubrovnik-Neretva', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(872, 54, 'Grad Zagreb', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(873, 54, 'Istra', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(874, 54, 'Karlovac', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(875, 54, 'Koprivnica-Krizhevci', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(876, 54, 'Krapina-Zagorje', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(877, 54, 'Lika-Senj', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(878, 54, 'Medhimurje', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(879, 54, 'Medimurska Zupanija', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(880, 54, 'Osijek-Baranja', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(881, 54, 'Osjecko-Baranjska Zupanija', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(882, 54, 'Pozhega-Slavonija', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(883, 54, 'Primorje-Gorski Kotar', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(884, 54, 'Shibenik-Knin', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(885, 54, 'Sisak-Moslavina', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(886, 54, 'Slavonski Brod-Posavina', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(887, 54, 'Split-Dalmacija', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(888, 54, 'Varazhdin', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(889, 54, 'Virovitica-Podravina', '2020-04-27 04:38:50', '2020-04-27 04:38:50', NULL),
(890, 54, 'Vukovar-Srijem', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(891, 54, 'Zadar', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(892, 54, 'Zagreb', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(893, 55, 'Camaguey', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(894, 55, 'Ciego de Avila', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(895, 55, 'Cienfuegos', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(896, 55, 'Ciudad de la Habana', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(897, 55, 'Granma', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(898, 55, 'Guantanamo', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(899, 55, 'Habana', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(900, 55, 'Holguin', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(901, 55, 'Isla de la Juventud', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(902, 55, 'La Habana', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(903, 55, 'Las Tunas', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(904, 55, 'Matanzas', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(905, 55, 'Pinar del Rio', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(906, 55, 'Sancti Spiritus', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(907, 55, 'Santiago de Cuba', '2020-04-27 04:38:51', '2020-04-27 04:38:51', NULL),
(908, 55, 'Villa Clara', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(909, 56, 'Government controlled area', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(910, 56, 'Limassol', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(911, 56, 'Nicosia District', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(912, 56, 'Paphos', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(913, 56, 'Turkish controlled area', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(914, 57, 'Central Bohemian', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(915, 57, 'Frycovice', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(916, 57, 'Jihocesky Kraj', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(917, 57, 'Jihochesky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(918, 57, 'Jihomoravsky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(919, 57, 'Karlovarsky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(920, 57, 'Klecany', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(921, 57, 'Kralovehradecky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(922, 57, 'Liberecky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(923, 57, 'Lipov', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(924, 57, 'Moravskoslezsky', '2020-04-27 04:38:52', '2020-04-27 04:38:52', NULL),
(925, 57, 'Olomoucky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(926, 57, 'Olomoucky Kraj', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(927, 57, 'Pardubicky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(928, 57, 'Plzensky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(929, 57, 'Praha', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(930, 57, 'Rajhrad', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(931, 57, 'Smirice', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(932, 57, 'South Moravian', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(933, 57, 'Straz nad Nisou', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(934, 57, 'Stredochesky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(935, 57, 'Unicov', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(936, 57, 'Ustecky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(937, 57, 'Valletta', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(938, 57, 'Velesin', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(939, 57, 'Vysochina', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(940, 57, 'Zlinsky', '2020-04-27 04:38:53', '2020-04-27 04:38:53', NULL),
(941, 58, 'Arhus', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(942, 58, 'Bornholm', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(943, 58, 'Frederiksborg', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(944, 58, 'Fyn', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(945, 58, 'Hovedstaden', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(946, 58, 'Kobenhavn', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(947, 58, 'Kobenhavns Amt', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(948, 58, 'Kobenhavns Kommune', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(949, 58, 'Nordjylland', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(950, 58, 'Ribe', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(951, 58, 'Ringkobing', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(952, 58, 'Roervig', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(953, 58, 'Roskilde', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(954, 58, 'Roslev', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(955, 58, 'Sjaelland', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(956, 58, 'Soeborg', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(957, 58, 'Sonderjylland', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(958, 58, 'Storstrom', '2020-04-27 04:38:54', '2020-04-27 04:38:54', NULL),
(959, 58, 'Syddanmark', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(960, 58, 'Toelloese', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(961, 58, 'Vejle', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(962, 58, 'Vestsjalland', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(963, 58, 'Viborg', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(964, 59, 'Ali Sabih', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(965, 59, 'Dikhil', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(966, 59, 'Jibuti', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(967, 59, 'Tajurah', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(968, 59, 'Ubuk', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(969, 60, 'Saint Andrew', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(970, 60, 'Saint David', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(971, 60, 'Saint George', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(972, 60, 'Saint John', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(973, 60, 'Saint Joseph', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(974, 60, 'Saint Luke', '2020-04-27 04:38:55', '2020-04-27 04:38:55', NULL),
(975, 60, 'Saint Mark', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(976, 60, 'Saint Patrick', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(977, 60, 'Saint Paul', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(978, 60, 'Saint Peter', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(979, 61, 'Azua', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(980, 61, 'Bahoruco', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(981, 61, 'Barahona', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(982, 61, 'Dajabon', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(983, 61, 'Distrito Nacional', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(984, 61, 'Duarte', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(985, 61, 'El Seybo', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(986, 61, 'Elias Pina', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(987, 61, 'Espaillat', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(988, 61, 'Hato Mayor', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(989, 61, 'Independencia', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(990, 61, 'La Altagracia', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(991, 61, 'La Romana', '2020-04-27 04:38:56', '2020-04-27 04:38:56', NULL),
(992, 61, 'La Vega', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(993, 61, 'Maria Trinidad Sanchez', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(994, 61, 'Monsenor Nouel', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(995, 61, 'Monte Cristi', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(996, 61, 'Monte Plata', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(997, 61, 'Pedernales', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(998, 61, 'Peravia', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(999, 61, 'Puerto Plata', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1000, 61, 'Salcedo', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1001, 61, 'Samana', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1002, 61, 'San Cristobal', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1003, 61, 'San Juan', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1004, 61, 'San Pedro de Macoris', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1005, 61, 'Sanchez Ramirez', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1006, 61, 'Santiago', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1007, 61, 'Santiago Rodriguez', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1008, 61, 'Valverde', '2020-04-27 04:38:57', '2020-04-27 04:38:57', NULL),
(1009, 62, 'Aileu', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1010, 62, 'Ainaro', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1011, 62, 'Ambeno', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1012, 62, 'Baucau', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1013, 62, 'Bobonaro', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1014, 62, 'Cova Lima', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1015, 62, 'Dili', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1016, 62, 'Ermera', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1017, 62, 'Lautem', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1018, 62, 'Liquica', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1019, 62, 'Manatuto', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1020, 62, 'Manufahi', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1021, 62, 'Viqueque', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1022, 63, 'Azuay', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1023, 63, 'Bolivar', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1024, 63, 'Canar', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1025, 63, 'Carchi', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1026, 63, 'Chimborazo', '2020-04-27 04:38:58', '2020-04-27 04:38:58', NULL),
(1027, 63, 'Cotopaxi', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1028, 63, 'El Oro', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1029, 63, 'Esmeraldas', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1030, 63, 'Galapagos', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1031, 63, 'Guayas', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1032, 63, 'Imbabura', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1033, 63, 'Loja', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1034, 63, 'Los Rios', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1035, 63, 'Manabi', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1036, 63, 'Morona Santiago', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1037, 63, 'Napo', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1038, 63, 'Orellana', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1039, 63, 'Pastaza', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1040, 63, 'Pichincha', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1041, 63, 'Sucumbios', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1042, 63, 'Tungurahua', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1043, 63, 'Zamora Chinchipe', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1044, 64, 'Aswan', '2020-04-27 04:38:59', '2020-04-27 04:38:59', NULL),
(1045, 64, 'Asyut', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1046, 64, 'Bani Suwayf', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1047, 64, 'Bur Sa\'\'id', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1048, 64, 'Cairo', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1049, 64, 'Dumyat', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1050, 64, 'Kafr-ash-Shaykh', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1051, 64, 'Matruh', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1052, 64, 'Muhafazat ad Daqahliyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1053, 64, 'Muhafazat al Fayyum', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1054, 64, 'Muhafazat al Gharbiyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1055, 64, 'Muhafazat al Iskandariyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1056, 64, 'Muhafazat al Qahirah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1057, 64, 'Qina', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1058, 64, 'Sawhaj', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1059, 64, 'Sina al-Janubiyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1060, 64, 'Sina ash-Shamaliyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1061, 64, 'ad-Daqahliyah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1062, 64, 'al-Bahr-al-Ahmar', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1063, 64, 'al-Buhayrah', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1064, 64, 'al-Fayyum', '2020-04-27 04:39:00', '2020-04-27 04:39:00', NULL),
(1065, 64, 'al-Gharbiyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1066, 64, 'al-Iskandariyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1067, 64, 'al-Ismailiyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1068, 64, 'al-Jizah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1069, 64, 'al-Minufiyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1070, 64, 'al-Minya', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1071, 64, 'al-Qahira', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1072, 64, 'al-Qalyubiyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1073, 64, 'al-Uqsur', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1074, 64, 'al-Wadi al-Jadid', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1075, 64, 'as-Suways', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1076, 64, 'ash-Sharqiyah', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1077, 65, 'Ahuachapan', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1078, 65, 'Cabanas', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1079, 65, 'Chalatenango', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1080, 65, 'Cuscatlan', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1081, 65, 'La Libertad', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1082, 65, 'La Paz', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1083, 65, 'La Union', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1084, 65, 'Morazan', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1085, 65, 'San Miguel', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1086, 65, 'San Salvador', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1087, 65, 'San Vicente', '2020-04-27 04:39:01', '2020-04-27 04:39:01', NULL),
(1088, 65, 'Santa Ana', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1089, 65, 'Sonsonate', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1090, 65, 'Usulutan', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1091, 66, 'Annobon', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1092, 66, 'Bioko Norte', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1093, 66, 'Bioko Sur', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1094, 66, 'Centro Sur', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1095, 66, 'Kie-Ntem', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1096, 66, 'Litoral', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1097, 66, 'Wele-Nzas', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1098, 67, 'Anseba', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1099, 67, 'Debub', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1100, 67, 'Debub-Keih-Bahri', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1101, 67, 'Gash-Barka', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1102, 67, 'Maekel', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1103, 67, 'Semien-Keih-Bahri', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1104, 68, 'Harju', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1105, 68, 'Hiiu', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1106, 68, 'Ida-Viru', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1107, 68, 'Jarva', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1108, 68, 'Jogeva', '2020-04-27 04:39:02', '2020-04-27 04:39:02', NULL),
(1109, 68, 'Laane', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1110, 68, 'Laane-Viru', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1111, 68, 'Parnu', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1112, 68, 'Polva', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1113, 68, 'Rapla', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1114, 68, 'Saare', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1115, 68, 'Tartu', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1116, 68, 'Valga', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1117, 68, 'Viljandi', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1118, 68, 'Voru', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1119, 69, 'Addis Abeba', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1120, 69, 'Afar', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1121, 69, 'Amhara', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1122, 69, 'Benishangul', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1123, 69, 'Diredawa', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1124, 69, 'Gambella', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1125, 69, 'Harar', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1126, 69, 'Jigjiga', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1127, 69, 'Mekele', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1128, 69, 'Oromia', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1129, 69, 'Somali', '2020-04-27 04:39:03', '2020-04-27 04:39:03', NULL),
(1130, 69, 'Southern', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1131, 69, 'Tigray', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1132, 70, 'Christmas Island', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1133, 70, 'Cocos Islands', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1134, 70, 'Coral Sea Islands', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1135, 71, 'Falkland Islands', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1136, 71, 'South Georgia', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1137, 72, 'Klaksvik', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1138, 72, 'Nor ara Eysturoy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1139, 72, 'Nor oy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1140, 72, 'Sandoy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1141, 72, 'Streymoy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1142, 72, 'Su uroy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1143, 72, 'Sy ra Eysturoy', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1144, 72, 'Torshavn', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1145, 72, 'Vaga', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1146, 73, 'Central', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1147, 73, 'Eastern', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1148, 73, 'Northern', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1149, 73, 'South Pacific', '2020-04-27 04:39:04', '2020-04-27 04:39:04', NULL),
(1150, 73, 'Western', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1151, 74, 'Ahvenanmaa', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1152, 74, 'Etela-Karjala', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1153, 74, 'Etela-Pohjanmaa', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1154, 74, 'Etela-Savo', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1155, 74, 'Etela-Suomen Laani', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1156, 74, 'Ita-Suomen Laani', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1157, 74, 'Ita-Uusimaa', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1158, 74, 'Kainuu', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1159, 74, 'Kanta-Hame', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1160, 74, 'Keski-Pohjanmaa', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1161, 74, 'Keski-Suomi', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1162, 74, 'Kymenlaakso', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1163, 74, 'Lansi-Suomen Laani', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1164, 74, 'Lappi', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1165, 74, 'Northern Savonia', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1166, 74, 'Ostrobothnia', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1167, 74, 'Oulun Laani', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1168, 74, 'Paijat-Hame', '2020-04-27 04:39:05', '2020-04-27 04:39:05', NULL),
(1169, 74, 'Pirkanmaa', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1170, 74, 'Pohjanmaa', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1171, 74, 'Pohjois-Karjala', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1172, 74, 'Pohjois-Pohjanmaa', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1173, 74, 'Pohjois-Savo', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1174, 74, 'Saarijarvi', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1175, 74, 'Satakunta', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1176, 74, 'Southern Savonia', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1177, 74, 'Tavastia Proper', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1178, 74, 'Uleaborgs Lan', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1179, 74, 'Uusimaa', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1180, 74, 'Varsinais-Suomi', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1181, 75, 'Ain', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1182, 75, 'Aisne', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1183, 75, 'Albi Le Sequestre', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1184, 75, 'Allier', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1185, 75, 'Alpes-Cote dAzur', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1186, 75, 'Alpes-Maritimes', '2020-04-27 04:39:06', '2020-04-27 04:39:06', NULL),
(1187, 75, 'Alpes-de-Haute-Provence', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1188, 75, 'Alsace', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1189, 75, 'Aquitaine', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1190, 75, 'Ardeche', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1191, 75, 'Ardennes', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1192, 75, 'Ariege', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1193, 75, 'Aube', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1194, 75, 'Aude', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1195, 75, 'Auvergne', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1196, 75, 'Aveyron', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1197, 75, 'Bas-Rhin', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1198, 75, 'Basse-Normandie', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1199, 75, 'Bouches-du-Rhone', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1200, 75, 'Bourgogne', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1201, 75, 'Bretagne', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1202, 75, 'Brittany', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1203, 75, 'Burgundy', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1204, 75, 'Calvados', '2020-04-27 04:39:07', '2020-04-27 04:39:07', NULL),
(1205, 75, 'Cantal', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1206, 75, 'Cedex', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1207, 75, 'Centre', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1208, 75, 'Charente', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1209, 75, 'Charente-Maritime', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1210, 75, 'Cher', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1211, 75, 'Correze', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1212, 75, 'Corse-du-Sud', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1213, 75, 'Cote-d\'\'Or', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1214, 75, 'Cotes-d\'\'Armor', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1215, 75, 'Creuse', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1216, 75, 'Crolles', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1217, 75, 'Deux-Sevres', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1218, 75, 'Dordogne', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1219, 75, 'Doubs', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1220, 75, 'Drome', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1221, 75, 'Essonne', '2020-04-27 04:39:08', '2020-04-27 04:39:08', NULL),
(1222, 75, 'Eure', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1223, 75, 'Eure-et-Loir', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1224, 75, 'Feucherolles', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1225, 75, 'Finistere', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1226, 75, 'Franche-Comte', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1227, 75, 'Gard', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1228, 75, 'Gers', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1229, 75, 'Gironde', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1230, 75, 'Haut-Rhin', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1231, 75, 'Haute-Corse', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1232, 75, 'Haute-Garonne', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1233, 75, 'Haute-Loire', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1234, 75, 'Haute-Marne', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1235, 75, 'Haute-Saone', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1236, 75, 'Haute-Savoie', '2020-04-27 04:39:09', '2020-04-27 04:39:09', NULL),
(1237, 75, 'Haute-Vienne', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1238, 75, 'Hautes-Alpes', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1239, 75, 'Hautes-Pyrenees', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1240, 75, 'Hauts-de-Seine', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1241, 75, 'Herault', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1242, 75, 'Ile-de-France', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1243, 75, 'Ille-et-Vilaine', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1244, 75, 'Indre', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1245, 75, 'Indre-et-Loire', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1246, 75, 'Isere', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1247, 75, 'Jura', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1248, 75, 'Klagenfurt', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1249, 75, 'Landes', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1250, 75, 'Languedoc-Roussillon', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1251, 75, 'Larcay', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1252, 75, 'Le Castellet', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1253, 75, 'Le Creusot', '2020-04-27 04:39:10', '2020-04-27 04:39:10', NULL),
(1254, 75, 'Limousin', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1255, 75, 'Loir-et-Cher', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1256, 75, 'Loire', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1257, 75, 'Loire-Atlantique', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1258, 75, 'Loiret', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1259, 75, 'Lorraine', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1260, 75, 'Lot', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1261, 75, 'Lot-et-Garonne', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1262, 75, 'Lower Normandy', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1263, 75, 'Lozere', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1264, 75, 'Maine-et-Loire', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1265, 75, 'Manche', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1266, 75, 'Marne', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1267, 75, 'Mayenne', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1268, 75, 'Meurthe-et-Moselle', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1269, 75, 'Meuse', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1270, 75, 'Midi-Pyrenees', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1271, 75, 'Morbihan', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1272, 75, 'Moselle', '2020-04-27 04:39:11', '2020-04-27 04:39:11', NULL),
(1273, 75, 'Nievre', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1274, 75, 'Nord', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1275, 75, 'Nord-Pas-de-Calais', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1276, 75, 'Oise', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1277, 75, 'Orne', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1278, 75, 'Paris', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1279, 75, 'Pas-de-Calais', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1280, 75, 'Pays de la Loire', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1281, 75, 'Pays-de-la-Loire', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1282, 75, 'Picardy', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1283, 75, 'Puy-de-Dome', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1284, 75, 'Pyrenees-Atlantiques', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1285, 75, 'Pyrenees-Orientales', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1286, 75, 'Quelmes', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1287, 75, 'Rhone', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1288, 75, 'Rhone-Alpes', '2020-04-27 04:39:12', '2020-04-27 04:39:12', NULL),
(1289, 75, 'Saint Ouen', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1290, 75, 'Saint Viatre', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1291, 75, 'Saone-et-Loire', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1292, 75, 'Sarthe', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1293, 75, 'Savoie', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1294, 75, 'Seine-Maritime', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1295, 75, 'Seine-Saint-Denis', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1296, 75, 'Seine-et-Marne', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1297, 75, 'Somme', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1298, 75, 'Sophia Antipolis', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1299, 75, 'Souvans', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1300, 75, 'Tarn', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1301, 75, 'Tarn-et-Garonne', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1302, 75, 'Territoire de Belfort', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1303, 75, 'Treignac', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1304, 75, 'Upper Normandy', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1305, 75, 'Val-d\'\'Oise', '2020-04-27 04:39:13', '2020-04-27 04:39:13', NULL),
(1306, 75, 'Val-de-Marne', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1307, 75, 'Var', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1308, 75, 'Vaucluse', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1309, 75, 'Vellise', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1310, 75, 'Vendee', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1311, 75, 'Vienne', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1312, 75, 'Vosges', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1313, 75, 'Yonne', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1314, 75, 'Yvelines', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1315, 76, 'Cayenne', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1316, 76, 'Saint-Laurent-du-Maroni', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1317, 77, 'Iles du Vent', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1318, 77, 'Iles sous le Vent', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1319, 77, 'Marquesas', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1320, 77, 'Tuamotu', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1321, 77, 'Tubuai', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1322, 78, 'Amsterdam', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1323, 78, 'Crozet Islands', '2020-04-27 04:39:14', '2020-04-27 04:39:14', NULL),
(1324, 78, 'Kerguelen', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1325, 79, 'Estuaire', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1326, 79, 'Haut-Ogooue', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1327, 79, 'Moyen-Ogooue', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1328, 79, 'Ngounie', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1329, 79, 'Nyanga', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1330, 79, 'Ogooue-Ivindo', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1331, 79, 'Ogooue-Lolo', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1332, 79, 'Ogooue-Maritime', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1333, 79, 'Woleu-Ntem', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1334, 80, 'Banjul', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1335, 80, 'Basse', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1336, 80, 'Brikama', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1337, 80, 'Janjanbureh', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1338, 80, 'Kanifing', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1339, 80, 'Kerewan', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1340, 80, 'Kuntaur', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1341, 80, 'Mansakonko', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1342, 81, 'Abhasia', '2020-04-27 04:39:15', '2020-04-27 04:39:15', NULL),
(1343, 81, 'Ajaria', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1344, 81, 'Guria', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1345, 81, 'Imereti', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1346, 81, 'Kaheti', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1347, 81, 'Kvemo Kartli', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1348, 81, 'Mcheta-Mtianeti', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1349, 81, 'Racha', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1350, 81, 'Samagrelo-Zemo Svaneti', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1351, 81, 'Samche-Zhavaheti', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1352, 81, 'Shida Kartli', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1353, 81, 'Tbilisi', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1354, 82, 'Auvergne', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1355, 82, 'Baden-Wurttemberg', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1356, 82, 'Bavaria', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1357, 82, 'Bayern', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1358, 82, 'Beilstein Wurtt', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1359, 82, 'Berlin', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1360, 82, 'Brandenburg', '2020-04-27 04:39:16', '2020-04-27 04:39:16', NULL),
(1361, 82, 'Bremen', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1362, 82, 'Dreisbach', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1363, 82, 'Freistaat Bayern', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1364, 82, 'Hamburg', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1365, 82, 'Hannover', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1366, 82, 'Heroldstatt', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1367, 82, 'Hessen', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1368, 82, 'Kortenberg', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1369, 82, 'Laasdorf', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1370, 82, 'Land Baden-Wurttemberg', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1371, 82, 'Land Bayern', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1372, 82, 'Land Brandenburg', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1373, 82, 'Land Hessen', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1374, 82, 'Land Mecklenburg-Vorpommern', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1375, 82, 'Land Nordrhein-Westfalen', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1376, 82, 'Land Rheinland-Pfalz', '2020-04-27 04:39:17', '2020-04-27 04:39:17', NULL),
(1377, 82, 'Land Sachsen', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1378, 82, 'Land Sachsen-Anhalt', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1379, 82, 'Land Thuringen', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1380, 82, 'Lower Saxony', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1381, 82, 'Mecklenburg-Vorpommern', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1382, 82, 'Mulfingen', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1383, 82, 'Munich', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1384, 82, 'Neubeuern', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1385, 82, 'Niedersachsen', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1386, 82, 'Noord-Holland', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1387, 82, 'Nordrhein-Westfalen', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1388, 82, 'North Rhine-Westphalia', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1389, 82, 'Osterode', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1390, 82, 'Rheinland-Pfalz', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1391, 82, 'Rhineland-Palatinate', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1392, 82, 'Saarland', '2020-04-27 04:39:18', '2020-04-27 04:39:18', NULL),
(1393, 82, 'Sachsen', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1394, 82, 'Sachsen-Anhalt', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1395, 82, 'Saxony', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1396, 82, 'Schleswig-Holstein', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1397, 82, 'Thuringia', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1398, 82, 'Webling', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1399, 82, 'Weinstrabe', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1400, 82, 'schlobborn', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1401, 83, 'Ashanti', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1402, 83, 'Brong-Ahafo', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1403, 83, 'Central', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1404, 83, 'Eastern', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1405, 83, 'Greater Accra', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1406, 83, 'Northern', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1407, 83, 'Upper East', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1408, 83, 'Upper West', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1409, 83, 'Volta', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1410, 83, 'Western', '2020-04-27 04:39:19', '2020-04-27 04:39:19', NULL),
(1411, 84, 'Gibraltar', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1412, 85, 'Acharnes', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1413, 85, 'Ahaia', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1414, 85, 'Aitolia kai Akarnania', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1415, 85, 'Argolis', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1416, 85, 'Arkadia', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1417, 85, 'Arta', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1418, 85, 'Attica', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1419, 85, 'Attiki', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1420, 85, 'Ayion Oros', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1421, 85, 'Crete', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1422, 85, 'Dodekanisos', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1423, 85, 'Drama', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1424, 85, 'Evia', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1425, 85, 'Evritania', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1426, 85, 'Evros', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1427, 85, 'Evvoia', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1428, 85, 'Florina', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1429, 85, 'Fokis', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1430, 85, 'Fthiotis', '2020-04-27 04:39:20', '2020-04-27 04:39:20', NULL),
(1431, 85, 'Grevena', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1432, 85, 'Halandri', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1433, 85, 'Halkidiki', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1434, 85, 'Hania', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1435, 85, 'Heraklion', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1436, 85, 'Hios', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1437, 85, 'Ilia', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1438, 85, 'Imathia', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1439, 85, 'Ioannina', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1440, 85, 'Iraklion', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1441, 85, 'Karditsa', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1442, 85, 'Kastoria', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1443, 85, 'Kavala', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1444, 85, 'Kefallinia', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1445, 85, 'Kerkira', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1446, 85, 'Kiklades', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1447, 85, 'Kilkis', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1448, 85, 'Korinthia', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1449, 85, 'Kozani', '2020-04-27 04:39:21', '2020-04-27 04:39:21', NULL),
(1450, 85, 'Lakonia', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1451, 85, 'Larisa', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1452, 85, 'Lasithi', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1453, 85, 'Lesvos', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1454, 85, 'Levkas', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1455, 85, 'Magnisia', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1456, 85, 'Messinia', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1457, 85, 'Nomos Attikis', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1458, 85, 'Nomos Zakynthou', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1459, 85, 'Pella', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1460, 85, 'Pieria', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1461, 85, 'Piraios', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1462, 85, 'Preveza', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1463, 85, 'Rethimni', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1464, 85, 'Rodopi', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1465, 85, 'Samos', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1466, 85, 'Serrai', '2020-04-27 04:39:22', '2020-04-27 04:39:22', NULL),
(1467, 85, 'Thesprotia', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1468, 85, 'Thessaloniki', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1469, 85, 'Trikala', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1470, 85, 'Voiotia', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1471, 85, 'West Greece', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1472, 85, 'Xanthi', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1473, 85, 'Zakinthos', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1474, 86, 'Aasiaat', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1475, 86, 'Ammassalik', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1476, 86, 'Illoqqortoormiut', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1477, 86, 'Ilulissat', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1478, 86, 'Ivittuut', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1479, 86, 'Kangaatsiaq', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1480, 86, 'Maniitsoq', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1481, 86, 'Nanortalik', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1482, 86, 'Narsaq', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1483, 86, 'Nuuk', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1484, 86, 'Paamiut', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1485, 86, 'Qaanaaq', '2020-04-27 04:39:23', '2020-04-27 04:39:23', NULL),
(1486, 86, 'Qaqortoq', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1487, 86, 'Qasigiannguit', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1488, 86, 'Qeqertarsuaq', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1489, 86, 'Sisimiut', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1490, 86, 'Udenfor kommunal inddeling', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1491, 86, 'Upernavik', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1492, 86, 'Uummannaq', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1493, 87, 'Carriacou-Petite Martinique', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1494, 87, 'Saint Andrew', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1495, 87, 'Saint Davids', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1496, 87, 'Saint George\'\'s', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1497, 87, 'Saint John', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1498, 87, 'Saint Mark', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1499, 87, 'Saint Patrick', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1500, 88, 'Basse-Terre', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1501, 88, 'Grande-Terre', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1502, 88, 'Iles des Saintes', '2020-04-27 04:39:24', '2020-04-27 04:39:24', NULL),
(1503, 88, 'La Desirade', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1504, 88, 'Marie-Galante', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1505, 88, 'Saint Barthelemy', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1506, 88, 'Saint Martin', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1507, 89, 'Agana Heights', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1508, 89, 'Agat', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1509, 89, 'Barrigada', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1510, 89, 'Chalan-Pago-Ordot', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1511, 89, 'Dededo', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1512, 89, 'Hagatna', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1513, 89, 'Inarajan', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1514, 89, 'Mangilao', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1515, 89, 'Merizo', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1516, 89, 'Mongmong-Toto-Maite', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1517, 89, 'Santa Rita', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1518, 89, 'Sinajana', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1519, 89, 'Talofofo', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1520, 89, 'Tamuning', '2020-04-27 04:39:25', '2020-04-27 04:39:25', NULL),
(1521, 89, 'Yigo', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1522, 89, 'Yona', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1523, 90, 'Alta Verapaz', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1524, 90, 'Baja Verapaz', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1525, 90, 'Chimaltenango', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1526, 90, 'Chiquimula', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1527, 90, 'El Progreso', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1528, 90, 'Escuintla', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1529, 90, 'Guatemala', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1530, 90, 'Huehuetenango', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1531, 90, 'Izabal', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1532, 90, 'Jalapa', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1533, 90, 'Jutiapa', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1534, 90, 'Peten', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1535, 90, 'Quezaltenango', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1536, 90, 'Quiche', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1537, 90, 'Retalhuleu', '2020-04-27 04:39:26', '2020-04-27 04:39:26', NULL),
(1538, 90, 'Sacatepequez', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1539, 90, 'San Marcos', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1540, 90, 'Santa Rosa', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1541, 90, 'Solola', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1542, 90, 'Suchitepequez', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1543, 90, 'Totonicapan', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1544, 90, 'Zacapa', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1545, 91, 'Alderney', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1546, 91, 'Castel', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1547, 91, 'Forest', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1548, 91, 'Saint Andrew', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1549, 91, 'Saint Martin', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1550, 91, 'Saint Peter Port', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1551, 91, 'Saint Pierre du Bois', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1552, 91, 'Saint Sampson', '2020-04-27 04:39:27', '2020-04-27 04:39:27', NULL),
(1553, 91, 'Saint Saviour', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1554, 91, 'Sark', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1555, 91, 'Torteval', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1556, 91, 'Vale', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1557, 92, 'Beyla', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1558, 92, 'Boffa', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1559, 92, 'Boke', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1560, 92, 'Conakry', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1561, 92, 'Coyah', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1562, 92, 'Dabola', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1563, 92, 'Dalaba', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1564, 92, 'Dinguiraye', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1565, 92, 'Faranah', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1566, 92, 'Forecariah', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1567, 92, 'Fria', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1568, 92, 'Gaoual', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1569, 92, 'Gueckedou', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1570, 92, 'Kankan', '2020-04-27 04:39:28', '2020-04-27 04:39:28', NULL),
(1571, 92, 'Kerouane', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1572, 92, 'Kindia', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1573, 92, 'Kissidougou', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1574, 92, 'Koubia', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1575, 92, 'Koundara', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1576, 92, 'Kouroussa', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1577, 92, 'Labe', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1578, 92, 'Lola', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1579, 92, 'Macenta', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1580, 92, 'Mali', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1581, 92, 'Mamou', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1582, 92, 'Mandiana', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1583, 92, 'Nzerekore', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1584, 92, 'Pita', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1585, 92, 'Siguiri', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1586, 92, 'Telimele', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1587, 92, 'Tougue', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1588, 92, 'Yomou', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1589, 93, 'Bafata', '2020-04-27 04:39:29', '2020-04-27 04:39:29', NULL),
(1590, 93, 'Bissau', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1591, 93, 'Bolama', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1592, 93, 'Cacheu', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1593, 93, 'Gabu', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1594, 93, 'Oio', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1595, 93, 'Quinara', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1596, 93, 'Tombali', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1597, 94, 'Barima-Waini', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1598, 94, 'Cuyuni-Mazaruni', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1599, 94, 'Demerara-Mahaica', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1600, 94, 'East Berbice-Corentyne', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1601, 94, 'Essequibo Islands-West Demerar', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1602, 94, 'Mahaica-Berbice', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1603, 94, 'Pomeroon-Supenaam', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1604, 94, 'Potaro-Siparuni', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1605, 94, 'Upper Demerara-Berbice', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1606, 94, 'Upper Takutu-Upper Essequibo', '2020-04-27 04:39:30', '2020-04-27 04:39:30', NULL),
(1607, 95, 'Artibonite', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1608, 95, 'Centre', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1609, 95, 'Grand\'\'Anse', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1610, 95, 'Nord', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1611, 95, 'Nord-Est', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1612, 95, 'Nord-Ouest', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1613, 95, 'Ouest', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1614, 95, 'Sud', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1615, 95, 'Sud-Est', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1616, 96, 'Heard and McDonald Islands', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1617, 97, 'Atlantida', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1618, 97, 'Choluteca', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1619, 97, 'Colon', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1620, 97, 'Comayagua', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1621, 97, 'Copan', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1622, 97, 'Cortes', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1623, 97, 'Distrito Central', '2020-04-27 04:39:31', '2020-04-27 04:39:31', NULL),
(1624, 97, 'El Paraiso', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1625, 97, 'Francisco Morazan', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1626, 97, 'Gracias a Dios', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1627, 97, 'Intibuca', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1628, 97, 'Islas de la Bahia', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1629, 97, 'La Paz', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1630, 97, 'Lempira', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1631, 97, 'Ocotepeque', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1632, 97, 'Olancho', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1633, 97, 'Santa Barbara', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1634, 97, 'Valle', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1635, 97, 'Yoro', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1636, 98, 'Hong Kong', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1637, 99, 'Bacs-Kiskun', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1638, 99, 'Baranya', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1639, 99, 'Bekes', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1640, 99, 'Borsod-Abauj-Zemplen', '2020-04-27 04:39:32', '2020-04-27 04:39:32', NULL),
(1641, 99, 'Budapest', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1642, 99, 'Csongrad', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1643, 99, 'Fejer', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1644, 99, 'Gyor-Moson-Sopron', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1645, 99, 'Hajdu-Bihar', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1646, 99, 'Heves', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1647, 99, 'Jasz-Nagykun-Szolnok', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1648, 99, 'Komarom-Esztergom', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1649, 99, 'Nograd', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1650, 99, 'Pest', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1651, 99, 'Somogy', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1652, 99, 'Szabolcs-Szatmar-Bereg', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1653, 99, 'Tolna', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1654, 99, 'Vas', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1655, 99, 'Veszprem', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1656, 99, 'Zala', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1657, 100, 'Austurland', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1658, 100, 'Gullbringusysla', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1659, 100, 'Hofu borgarsva i', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1660, 100, 'Nor urland eystra', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1661, 100, 'Nor urland vestra', '2020-04-27 04:39:33', '2020-04-27 04:39:33', NULL),
(1662, 100, 'Su urland', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1663, 100, 'Su urnes', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1664, 100, 'Vestfir ir', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1665, 100, 'Vesturland', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1666, 102, 'Aceh', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1667, 102, 'Bali', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1668, 102, 'Bangka-Belitung', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1669, 102, 'Banten', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1670, 102, 'Bengkulu', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1671, 102, 'Gandaria', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1672, 102, 'Gorontalo', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1673, 102, 'Jakarta', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1674, 102, 'Jambi', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1675, 102, 'Jawa Barat', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1676, 102, 'Jawa Tengah', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1677, 102, 'Jawa Timur', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1678, 102, 'Kalimantan Barat', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1679, 102, 'Kalimantan Selatan', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1680, 102, 'Kalimantan Tengah', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1681, 102, 'Kalimantan Timur', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1682, 102, 'Kendal', '2020-04-27 04:39:34', '2020-04-27 04:39:34', NULL),
(1683, 102, 'Lampung', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1684, 102, 'Maluku', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1685, 102, 'Maluku Utara', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1686, 102, 'Nusa Tenggara Barat', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1687, 102, 'Nusa Tenggara Timur', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1688, 102, 'Papua', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1689, 102, 'Riau', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1690, 102, 'Riau Kepulauan', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1691, 102, 'Solo', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1692, 102, 'Sulawesi Selatan', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1693, 102, 'Sulawesi Tengah', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1694, 102, 'Sulawesi Tenggara', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1695, 102, 'Sulawesi Utara', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1696, 102, 'Sumatera Barat', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1697, 102, 'Sumatera Selatan', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1698, 102, 'Sumatera Utara', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1699, 102, 'Yogyakarta', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1700, 103, 'Ardabil', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1701, 103, 'Azarbayjan-e Bakhtari', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1702, 103, 'Azarbayjan-e Khavari', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1703, 103, 'Bushehr', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1704, 103, 'Chahar Mahal-e Bakhtiari', '2020-04-27 04:39:35', '2020-04-27 04:39:35', NULL),
(1705, 103, 'Esfahan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1706, 103, 'Fars', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1707, 103, 'Gilan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1708, 103, 'Golestan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1709, 103, 'Hamadan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1710, 103, 'Hormozgan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1711, 103, 'Ilam', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1712, 103, 'Kerman', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1713, 103, 'Kermanshah', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1714, 103, 'Khorasan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1715, 103, 'Khuzestan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1716, 103, 'Kohgiluyeh-e Boyerahmad', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1717, 103, 'Kordestan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1718, 103, 'Lorestan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1719, 103, 'Markazi', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1720, 103, 'Mazandaran', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1721, 103, 'Ostan-e Esfahan', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1722, 103, 'Qazvin', '2020-04-27 04:39:36', '2020-04-27 04:39:36', NULL),
(1723, 103, 'Qom', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1724, 103, 'Semnan', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1725, 103, 'Sistan-e Baluchestan', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1726, 103, 'Tehran', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1727, 103, 'Yazd', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1728, 103, 'Zanjan', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1729, 104, 'Babil', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1730, 104, 'Baghdad', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1731, 104, 'Dahuk', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1732, 104, 'Dhi Qar', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1733, 104, 'Diyala', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1734, 104, 'Erbil', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1735, 104, 'Irbil', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1736, 104, 'Karbala', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1737, 104, 'Kurdistan', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1738, 104, 'Maysan', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1739, 104, 'Ninawa', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1740, 104, 'Salah-ad-Din', '2020-04-27 04:39:37', '2020-04-27 04:39:37', NULL),
(1741, 104, 'Wasit', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1742, 104, 'al-Anbar', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1743, 104, 'al-Basrah', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1744, 104, 'al-Muthanna', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1745, 104, 'al-Qadisiyah', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1746, 104, 'an-Najaf', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1747, 104, 'as-Sulaymaniyah', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1748, 104, 'at-Ta\'\'mim', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1749, 105, 'Armagh', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1750, 105, 'Carlow', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1751, 105, 'Cavan', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1752, 105, 'Clare', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1753, 105, 'Cork', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1754, 105, 'Donegal', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1755, 105, 'Dublin', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1756, 105, 'Galway', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1757, 105, 'Kerry', '2020-04-27 04:39:38', '2020-04-27 04:39:38', NULL),
(1758, 105, 'Kildare', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1759, 105, 'Kilkenny', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1760, 105, 'Laois', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1761, 105, 'Leinster', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1762, 105, 'Leitrim', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1763, 105, 'Limerick', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1764, 105, 'Loch Garman', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1765, 105, 'Longford', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1766, 105, 'Louth', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1767, 105, 'Mayo', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1768, 105, 'Meath', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1769, 105, 'Monaghan', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1770, 105, 'Offaly', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1771, 105, 'Roscommon', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1772, 105, 'Sligo', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1773, 105, 'Tipperary North Riding', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1774, 105, 'Tipperary South Riding', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1775, 105, 'Ulster', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1776, 105, 'Waterford', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1777, 105, 'Westmeath', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1778, 105, 'Wexford', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1779, 105, 'Wicklow', '2020-04-27 04:39:39', '2020-04-27 04:39:39', NULL),
(1780, 106, 'Beit Hanania', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1781, 106, 'Ben Gurion Airport', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1782, 106, 'Bethlehem', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1783, 106, 'Caesarea', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1784, 106, 'Centre', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1785, 106, 'Gaza', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1786, 106, 'Hadaron', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1787, 106, 'Haifa District', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1788, 106, 'Hamerkaz', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1789, 106, 'Hazafon', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1790, 106, 'Hebron', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1791, 106, 'Jaffa', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1792, 106, 'Jerusalem', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1793, 106, 'Khefa', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1794, 106, 'Kiryat Yam', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1795, 106, 'Lower Galilee', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1796, 106, 'Qalqilya', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1797, 106, 'Talme Elazar', '2020-04-27 04:39:40', '2020-04-27 04:39:40', NULL),
(1798, 106, 'Tel Aviv', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1799, 106, 'Tsafon', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1800, 106, 'Umm El Fahem', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1801, 106, 'Yerushalayim', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1802, 107, 'Abruzzi', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1803, 107, 'Abruzzo', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1804, 107, 'Agrigento', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1805, 107, 'Alessandria', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1806, 107, 'Ancona', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1807, 107, 'Arezzo', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1808, 107, 'Ascoli Piceno', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1809, 107, 'Asti', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1810, 107, 'Avellino', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1811, 107, 'Bari', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1812, 107, 'Basilicata', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1813, 107, 'Belluno', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1814, 107, 'Benevento', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1815, 107, 'Bergamo', '2020-04-27 04:39:41', '2020-04-27 04:39:41', NULL),
(1816, 107, 'Biella', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1817, 107, 'Bologna', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1818, 107, 'Bolzano', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1819, 107, 'Brescia', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1820, 107, 'Brindisi', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1821, 107, 'Calabria', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1822, 107, 'Campania', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1823, 107, 'Cartoceto', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1824, 107, 'Caserta', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1825, 107, 'Catania', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1826, 107, 'Chieti', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1827, 107, 'Como', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1828, 107, 'Cosenza', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1829, 107, 'Cremona', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1830, 107, 'Cuneo', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1831, 107, 'Emilia-Romagna', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1832, 107, 'Ferrara', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1833, 107, 'Firenze', '2020-04-27 04:39:42', '2020-04-27 04:39:42', NULL),
(1834, 107, 'Florence', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1835, 107, 'Forli-Cesena', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1836, 107, 'Friuli-Venezia Giulia', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1837, 107, 'Frosinone', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1838, 107, 'Genoa', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1839, 107, 'Gorizia', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1840, 107, 'L\'\'Aquila', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1841, 107, 'Lazio', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1842, 107, 'Lecce', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1843, 107, 'Lecco', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1844, 107, 'Lecco Province', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1845, 107, 'Liguria', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1846, 107, 'Lodi', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1847, 107, 'Lombardia', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1848, 107, 'Lombardy', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1849, 107, 'Macerata', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1850, 107, 'Mantova', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1851, 107, 'Marche', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1852, 107, 'Messina', '2020-04-27 04:39:43', '2020-04-27 04:39:43', NULL),
(1853, 107, 'Milan', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1854, 107, 'Modena', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1855, 107, 'Molise', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1856, 107, 'Molteno', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1857, 107, 'Montenegro', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1858, 107, 'Monza and Brianza', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1859, 107, 'Naples', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1860, 107, 'Novara', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1861, 107, 'Padova', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1862, 107, 'Parma', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1863, 107, 'Pavia', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1864, 107, 'Perugia', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1865, 107, 'Pesaro-Urbino', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1866, 107, 'Piacenza', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1867, 107, 'Piedmont', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1868, 107, 'Piemonte', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1869, 107, 'Pisa', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1870, 107, 'Pordenone', '2020-04-27 04:39:44', '2020-04-27 04:39:44', NULL),
(1871, 107, 'Potenza', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1872, 107, 'Puglia', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1873, 107, 'Reggio Emilia', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1874, 107, 'Rimini', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1875, 107, 'Roma', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1876, 107, 'Salerno', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1877, 107, 'Sardegna', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1878, 107, 'Sassari', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1879, 107, 'Savona', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1880, 107, 'Sicilia', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1881, 107, 'Siena', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1882, 107, 'Sondrio', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1883, 107, 'South Tyrol', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1884, 107, 'Taranto', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1885, 107, 'Teramo', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1886, 107, 'Torino', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1887, 107, 'Toscana', '2020-04-27 04:39:45', '2020-04-27 04:39:45', NULL),
(1888, 107, 'Trapani', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1889, 107, 'Trentino-Alto Adige', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1890, 107, 'Trento', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1891, 107, 'Treviso', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1892, 107, 'Udine', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1893, 107, 'Umbria', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1894, 107, 'Valle d\'\'Aosta', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1895, 107, 'Varese', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1896, 107, 'Veneto', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1897, 107, 'Venezia', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1898, 107, 'Verbano-Cusio-Ossola', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1899, 107, 'Vercelli', '2020-04-27 04:39:46', '2020-04-27 04:39:46', NULL),
(1900, 107, 'Verona', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1901, 107, 'Vicenza', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1902, 107, 'Viterbo', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1903, 108, 'Buxoro Viloyati', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1904, 108, 'Clarendon', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1905, 108, 'Hanover', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1906, 108, 'Kingston', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1907, 108, 'Manchester', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1908, 108, 'Portland', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1909, 108, 'Saint Andrews', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1910, 108, 'Saint Ann', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1911, 108, 'Saint Catherine', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1912, 108, 'Saint Elizabeth', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1913, 108, 'Saint James', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1914, 108, 'Saint Mary', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1915, 108, 'Saint Thomas', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1916, 108, 'Trelawney', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1917, 108, 'Westmoreland', '2020-04-27 04:39:47', '2020-04-27 04:39:47', NULL),
(1918, 109, 'Aichi', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1919, 109, 'Akita', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1920, 109, 'Aomori', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1921, 109, 'Chiba', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1922, 109, 'Ehime', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1923, 109, 'Fukui', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1924, 109, 'Fukuoka', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1925, 109, 'Fukushima', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1926, 109, 'Gifu', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1927, 109, 'Gumma', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1928, 109, 'Hiroshima', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1929, 109, 'Hokkaido', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1930, 109, 'Hyogo', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1931, 109, 'Ibaraki', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1932, 109, 'Ishikawa', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1933, 109, 'Iwate', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1934, 109, 'Kagawa', '2020-04-27 04:39:48', '2020-04-27 04:39:48', NULL),
(1935, 109, 'Kagoshima', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1936, 109, 'Kanagawa', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1937, 109, 'Kanto', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1938, 109, 'Kochi', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1939, 109, 'Kumamoto', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1940, 109, 'Kyoto', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1941, 109, 'Mie', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1942, 109, 'Miyagi', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1943, 109, 'Miyazaki', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1944, 109, 'Nagano', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1945, 109, 'Nagasaki', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1946, 109, 'Nara', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1947, 109, 'Niigata', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1948, 109, 'Oita', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1949, 109, 'Okayama', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1950, 109, 'Okinawa', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1951, 109, 'Osaka', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1952, 109, 'Saga', '2020-04-27 04:39:49', '2020-04-27 04:39:49', NULL),
(1953, 109, 'Saitama', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1954, 109, 'Shiga', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1955, 109, 'Shimane', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1956, 109, 'Shizuoka', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1957, 109, 'Tochigi', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1958, 109, 'Tokushima', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1959, 109, 'Tokyo', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1960, 109, 'Tottori', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1961, 109, 'Toyama', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1962, 109, 'Wakayama', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1963, 109, 'Yamagata', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1964, 109, 'Yamaguchi', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1965, 109, 'Yamanashi', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1966, 110, 'Grouville', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1967, 110, 'Saint Brelade', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1968, 110, 'Saint Clement', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1969, 110, 'Saint Helier', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1970, 110, 'Saint John', '2020-04-27 04:39:50', '2020-04-27 04:39:50', NULL),
(1971, 110, 'Saint Lawrence', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1972, 110, 'Saint Martin', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1973, 110, 'Saint Mary', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1974, 110, 'Saint Peter', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1975, 110, 'Saint Saviour', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1976, 110, 'Trinity', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1977, 111, 'Ajlun', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1978, 111, 'Amman', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1979, 111, 'Irbid', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1980, 111, 'Jarash', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1981, 111, 'Ma\'\'an', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1982, 111, 'Madaba', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1983, 111, 'al-\'\'Aqabah', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1984, 111, 'al-Balqa', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1985, 111, 'al-Karak', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1986, 111, 'al-Mafraq', '2020-04-27 04:39:51', '2020-04-27 04:39:51', NULL),
(1987, 111, 'at-Tafilah', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1988, 111, 'az-Zarqa', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1989, 112, 'Akmecet', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1990, 112, 'Akmola', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1991, 112, 'Aktobe', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1992, 112, 'Almati', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1993, 112, 'Atirau', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1994, 112, 'Batis Kazakstan', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1995, 112, 'Burlinsky Region', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1996, 112, 'Karagandi', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1997, 112, 'Kostanay', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1998, 112, 'Mankistau', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(1999, 112, 'Ontustik Kazakstan', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2000, 112, 'Pavlodar', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2001, 112, 'Sigis Kazakstan', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2002, 112, 'Soltustik Kazakstan', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2003, 112, 'Taraz', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2004, 113, 'Central', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2005, 113, 'Coast', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2006, 113, 'Eastern', '2020-04-27 04:39:52', '2020-04-27 04:39:52', NULL),
(2007, 113, 'Nairobi', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2008, 113, 'North Eastern', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2009, 113, 'Nyanza', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2010, 113, 'Rift Valley', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2011, 113, 'Western', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2012, 114, 'Abaiang', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2013, 114, 'Abemana', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2014, 114, 'Aranuka', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2015, 114, 'Arorae', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2016, 114, 'Banaba', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2017, 114, 'Beru', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2018, 114, 'Butaritari', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2019, 114, 'Kiritimati', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2020, 114, 'Kuria', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2021, 114, 'Maiana', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2022, 114, 'Makin', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2023, 114, 'Marakei', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2024, 114, 'Nikunau', '2020-04-27 04:39:53', '2020-04-27 04:39:53', NULL),
(2025, 114, 'Nonouti', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2026, 114, 'Onotoa', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2027, 114, 'Phoenix Islands', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2028, 114, 'Tabiteuea North', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2029, 114, 'Tabiteuea South', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2030, 114, 'Tabuaeran', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2031, 114, 'Tamana', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2032, 114, 'Tarawa North', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2033, 114, 'Tarawa South', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2034, 114, 'Teraina', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2035, 115, 'Chagangdo', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2036, 115, 'Hamgyeongbukto', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2037, 115, 'Hamgyeongnamdo', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2038, 115, 'Hwanghaebukto', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2039, 115, 'Hwanghaenamdo', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2040, 115, 'Kaeseong', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2041, 115, 'Kangweon', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2042, 115, 'Nampo', '2020-04-27 04:39:54', '2020-04-27 04:39:54', NULL),
(2043, 115, 'Pyeonganbukto', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2044, 115, 'Pyeongannamdo', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2045, 115, 'Pyeongyang', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2046, 115, 'Yanggang', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2047, 116, 'Busan', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2048, 116, 'Cheju', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2049, 116, 'Chollabuk', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2050, 116, 'Chollanam', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2051, 116, 'Chungbuk', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2052, 116, 'Chungcheongbuk', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2053, 116, 'Chungcheongnam', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2054, 116, 'Chungnam', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2055, 116, 'Daegu', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2056, 116, 'Gangwon-do', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2057, 116, 'Goyang-si', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2058, 116, 'Gyeonggi-do', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2059, 116, 'Gyeongsang', '2020-04-27 04:39:55', '2020-04-27 04:39:55', NULL),
(2060, 116, 'Gyeongsangnam-do', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2061, 116, 'Incheon', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2062, 116, 'Jeju-Si', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2063, 116, 'Jeonbuk', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2064, 116, 'Kangweon', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2065, 116, 'Kwangju', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2066, 116, 'Kyeonggi', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2067, 116, 'Kyeongsangbuk', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2068, 116, 'Kyeongsangnam', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2069, 116, 'Kyonggi-do', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2070, 116, 'Kyungbuk-Do', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2071, 116, 'Kyunggi-Do', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2072, 116, 'Kyunggi-do', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2073, 116, 'Pusan', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2074, 116, 'Seoul', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2075, 116, 'Sudogwon', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2076, 116, 'Taegu', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2077, 116, 'Taejeon', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2078, 116, 'Taejon-gwangyoksi', '2020-04-27 04:39:56', '2020-04-27 04:39:56', NULL),
(2079, 116, 'Ulsan', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2080, 116, 'Wonju', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2081, 116, 'gwangyoksi', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2082, 117, 'Al Asimah', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2083, 117, 'Hawalli', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2084, 117, 'Mishref', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2085, 117, 'Qadesiya', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2086, 117, 'Safat', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2087, 117, 'Salmiya', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2088, 117, 'al-Ahmadi', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2089, 117, 'al-Farwaniyah', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2090, 117, 'al-Jahra', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2091, 117, 'al-Kuwayt', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2092, 118, 'Batken', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2093, 118, 'Bishkek', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2094, 118, 'Chui', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2095, 118, 'Issyk-Kul', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2096, 118, 'Jalal-Abad', '2020-04-27 04:39:57', '2020-04-27 04:39:57', NULL),
(2097, 118, 'Naryn', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2098, 118, 'Osh', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2099, 118, 'Talas', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2100, 119, 'Attopu', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2101, 119, 'Bokeo', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2102, 119, 'Bolikhamsay', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2103, 119, 'Champasak', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2104, 119, 'Houaphanh', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2105, 119, 'Khammouane', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2106, 119, 'Luang Nam Tha', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2107, 119, 'Luang Prabang', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2108, 119, 'Oudomxay', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2109, 119, 'Phongsaly', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2110, 119, 'Saravan', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2111, 119, 'Savannakhet', '2020-04-27 04:39:58', '2020-04-27 04:39:58', NULL),
(2112, 119, 'Sekong', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2113, 119, 'Viangchan Prefecture', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2114, 119, 'Viangchan Province', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2115, 119, 'Xaignabury', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2116, 119, 'Xiang Khuang', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2117, 120, 'Aizkraukles', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2118, 120, 'Aluksnes', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2119, 120, 'Balvu', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2120, 120, 'Bauskas', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2121, 120, 'Cesu', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2122, 120, 'Daugavpils', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2123, 120, 'Daugavpils City', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2124, 120, 'Dobeles', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2125, 120, 'Gulbenes', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2126, 120, 'Jekabspils', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2127, 120, 'Jelgava', '2020-04-27 04:39:59', '2020-04-27 04:39:59', NULL),
(2128, 120, 'Jelgavas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2129, 120, 'Jurmala City', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2130, 120, 'Kraslavas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2131, 120, 'Kuldigas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2132, 120, 'Liepaja', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2133, 120, 'Liepajas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2134, 120, 'Limbazhu', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2135, 120, 'Ludzas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2136, 120, 'Madonas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2137, 120, 'Ogres', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2138, 120, 'Preilu', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2139, 120, 'Rezekne', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2140, 120, 'Rezeknes', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2141, 120, 'Riga', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2142, 120, 'Rigas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2143, 120, 'Saldus', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2144, 120, 'Talsu', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2145, 120, 'Tukuma', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2146, 120, 'Valkas', '2020-04-27 04:40:00', '2020-04-27 04:40:00', NULL),
(2147, 120, 'Valmieras', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2148, 120, 'Ventspils', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2149, 120, 'Ventspils City', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2150, 121, 'Beirut', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2151, 121, 'Jabal Lubnan', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2152, 121, 'Mohafazat Liban-Nord', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2153, 121, 'Mohafazat Mont-Liban', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2154, 121, 'Sidon', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2155, 121, 'al-Biqa', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2156, 121, 'al-Janub', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2157, 121, 'an-Nabatiyah', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2158, 121, 'ash-Shamal', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2159, 122, 'Berea', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2160, 122, 'Butha-Buthe', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2161, 122, 'Leribe', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2162, 122, 'Mafeteng', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2163, 122, 'Maseru', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2164, 122, 'Mohale\'\'s Hoek', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2165, 122, 'Mokhotlong', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2166, 122, 'Qacha\'\'s Nek', '2020-04-27 04:40:01', '2020-04-27 04:40:01', NULL),
(2167, 122, 'Quthing', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2168, 122, 'Thaba-Tseka', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2169, 123, 'Bomi', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2170, 123, 'Bong', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2171, 123, 'Grand Bassa', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2172, 123, 'Grand Cape Mount', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2173, 123, 'Grand Gedeh', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2174, 123, 'Loffa', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2175, 123, 'Margibi', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2176, 123, 'Maryland and Grand Kru', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2177, 123, 'Montserrado', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2178, 123, 'Nimba', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2179, 123, 'Rivercess', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2180, 123, 'Sinoe', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2181, 124, 'Ajdabiya', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2182, 124, 'Fezzan', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2183, 124, 'Banghazi', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2184, 124, 'Darnah', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2185, 124, 'Ghadamis', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2186, 124, 'Gharyan', '2020-04-27 04:40:02', '2020-04-27 04:40:02', NULL),
(2187, 124, 'Misratah', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2188, 124, 'Murzuq', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2189, 124, 'Sabha', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2190, 124, 'Sawfajjin', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2191, 124, 'Surt', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2192, 124, 'Tarabulus', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2193, 124, 'Tarhunah', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2194, 124, 'Tripolitania', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2195, 124, 'Tubruq', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2196, 124, 'Yafran', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2197, 124, 'Zlitan', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2198, 124, 'al-\'\'Aziziyah', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2199, 124, 'al-Fatih', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2200, 124, 'al-Jabal al Akhdar', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2201, 124, 'al-Jufrah', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2202, 124, 'al-Khums', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2203, 124, 'al-Kufrah', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2204, 124, 'an-Nuqat al-Khams', '2020-04-27 04:40:03', '2020-04-27 04:40:03', NULL),
(2205, 124, 'ash-Shati', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2206, 124, 'az-Zawiyah', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2207, 125, 'Balzers', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2208, 125, 'Eschen', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2209, 125, 'Gamprin', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2210, 125, 'Mauren', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2211, 125, 'Planken', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2212, 125, 'Ruggell', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2213, 125, 'Schaan', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2214, 125, 'Schellenberg', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2215, 125, 'Triesen', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2216, 125, 'Triesenberg', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2217, 125, 'Vaduz', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2218, 126, 'Alytaus', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2219, 126, 'Anyksciai', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2220, 126, 'Kauno', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2221, 126, 'Klaipedos', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2222, 126, 'Marijampoles', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2223, 126, 'Panevezhio', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2224, 126, 'Panevezys', '2020-04-27 04:40:04', '2020-04-27 04:40:04', NULL),
(2225, 126, 'Shiauliu', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2226, 126, 'Taurages', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2227, 126, 'Telshiu', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2228, 126, 'Telsiai', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2229, 126, 'Utenos', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2230, 126, 'Vilniaus', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2231, 127, 'Capellen', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2232, 127, 'Clervaux', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2233, 127, 'Diekirch', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2234, 127, 'Echternach', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2235, 127, 'Esch-sur-Alzette', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2236, 127, 'Grevenmacher', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2237, 127, 'Luxembourg', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2238, 127, 'Mersch', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2239, 127, 'Redange', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2240, 127, 'Remich', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2241, 127, 'Vianden', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2242, 127, 'Wiltz', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2243, 128, 'Macau', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2244, 129, 'Berovo', '2020-04-27 04:40:05', '2020-04-27 04:40:05', NULL),
(2245, 129, 'Bitola', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2246, 129, 'Brod', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2247, 129, 'Debar', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2248, 129, 'Delchevo', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2249, 129, 'Demir Hisar', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2250, 129, 'Gevgelija', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2251, 129, 'Gostivar', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2252, 129, 'Kavadarci', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2253, 129, 'Kichevo', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2254, 129, 'Kochani', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2255, 129, 'Kratovo', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2256, 129, 'Kriva Palanka', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2257, 129, 'Krushevo', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2258, 129, 'Kumanovo', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2259, 129, 'Negotino', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2260, 129, 'Ohrid', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2261, 129, 'Prilep', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2262, 129, 'Probishtip', '2020-04-27 04:40:06', '2020-04-27 04:40:06', NULL),
(2263, 129, 'Radovish', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2264, 129, 'Resen', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2265, 129, 'Shtip', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2266, 129, 'Skopje', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2267, 129, 'Struga', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2268, 129, 'Strumica', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2269, 129, 'Sveti Nikole', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2270, 129, 'Tetovo', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2271, 129, 'Valandovo', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2272, 129, 'Veles', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2273, 129, 'Vinica', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2274, 130, 'Antananarivo', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2275, 130, 'Antsiranana', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2276, 130, 'Fianarantsoa', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2277, 130, 'Mahajanga', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2278, 130, 'Toamasina', '2020-04-27 04:40:07', '2020-04-27 04:40:07', NULL),
(2279, 130, 'Toliary', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2280, 131, 'Balaka', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2281, 131, 'Blantyre City', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2282, 131, 'Chikwawa', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2283, 131, 'Chiradzulu', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2284, 131, 'Chitipa', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2285, 131, 'Dedza', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2286, 131, 'Dowa', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2287, 131, 'Karonga', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2288, 131, 'Kasungu', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2289, 131, 'Lilongwe City', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2290, 131, 'Machinga', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2291, 131, 'Mangochi', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2292, 131, 'Mchinji', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2293, 131, 'Mulanje', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2294, 131, 'Mwanza', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2295, 131, 'Mzimba', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2296, 131, 'Mzuzu City', '2020-04-27 04:40:08', '2020-04-27 04:40:08', NULL),
(2297, 131, 'Nkhata Bay', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2298, 131, 'Nkhotakota', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2299, 131, 'Nsanje', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2300, 131, 'Ntcheu', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2301, 131, 'Ntchisi', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2302, 131, 'Phalombe', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2303, 131, 'Rumphi', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2304, 131, 'Salima', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2305, 131, 'Thyolo', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2306, 131, 'Zomba Municipality', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2307, 132, 'Johor', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2308, 132, 'Kedah', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2309, 132, 'Kelantan', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2310, 132, 'Kuala Lumpur', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2311, 132, 'Labuan', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2312, 132, 'Melaka', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2313, 132, 'Negeri Johor', '2020-04-27 04:40:09', '2020-04-27 04:40:09', NULL),
(2314, 132, 'Negeri Sembilan', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2315, 132, 'Pahang', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2316, 132, 'Penang', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2317, 132, 'Perak', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2318, 132, 'Perlis', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2319, 132, 'Pulau Pinang', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2320, 132, 'Sabah', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2321, 132, 'Sarawak', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2322, 132, 'Selangor', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2323, 132, 'Sembilan', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2324, 132, 'Terengganu', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2325, 133, 'Alif Alif', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2326, 133, 'Alif Dhaal', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2327, 133, 'Baa', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2328, 133, 'Dhaal', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2329, 133, 'Faaf', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2330, 133, 'Gaaf Alif', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2331, 133, 'Gaaf Dhaal', '2020-04-27 04:40:10', '2020-04-27 04:40:10', NULL),
(2332, 133, 'Ghaviyani', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2333, 133, 'Haa Alif', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2334, 133, 'Haa Dhaal', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2335, 133, 'Kaaf', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2336, 133, 'Laam', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2337, 133, 'Lhaviyani', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2338, 133, 'Male', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2339, 133, 'Miim', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2340, 133, 'Nuun', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2341, 133, 'Raa', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2342, 133, 'Shaviyani', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2343, 133, 'Siin', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2344, 133, 'Thaa', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2345, 133, 'Vaav', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2346, 134, 'Bamako', '2020-04-27 04:40:11', '2020-04-27 04:40:11', NULL),
(2347, 134, 'Gao', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2348, 134, 'Kayes', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2349, 134, 'Kidal', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2350, 134, 'Koulikoro', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2351, 134, 'Mopti', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2352, 134, 'Segou', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2353, 134, 'Sikasso', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2354, 134, 'Tombouctou', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2355, 135, 'Gozo and Comino', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2356, 135, 'Inner Harbour', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2357, 135, 'Northern', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2358, 135, 'Outer Harbour', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2359, 135, 'South Eastern', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2360, 135, 'Valletta', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2361, 135, 'Western', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2362, 136, 'Castletown', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2363, 136, 'Douglas', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2364, 136, 'Laxey', '2020-04-27 04:40:12', '2020-04-27 04:40:12', NULL),
(2365, 136, 'Onchan', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2366, 136, 'Peel', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2367, 136, 'Port Erin', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2368, 136, 'Port Saint Mary', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2369, 136, 'Ramsey', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2370, 137, 'Ailinlaplap', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2371, 137, 'Ailuk', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2372, 137, 'Arno', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2373, 137, 'Aur', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2374, 137, 'Bikini', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2375, 137, 'Ebon', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2376, 137, 'Enewetak', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2377, 137, 'Jabat', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2378, 137, 'Jaluit', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2379, 137, 'Kili', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2380, 137, 'Kwajalein', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2381, 137, 'Lae', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2382, 137, 'Lib', '2020-04-27 04:40:13', '2020-04-27 04:40:13', NULL),
(2383, 137, 'Likiep', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2384, 137, 'Majuro', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2385, 137, 'Maloelap', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2386, 137, 'Mejit', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2387, 137, 'Mili', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2388, 137, 'Namorik', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2389, 137, 'Namu', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2390, 137, 'Rongelap', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2391, 137, 'Ujae', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2392, 137, 'Utrik', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2393, 137, 'Wotho', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2394, 137, 'Wotje', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2395, 138, 'Fort-de-France', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2396, 138, 'La Trinite', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2397, 138, 'Le Marin', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2398, 138, 'Saint-Pierre', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2399, 139, 'Adrar', '2020-04-27 04:40:14', '2020-04-27 04:40:14', NULL),
(2400, 139, 'Assaba', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2401, 139, 'Brakna', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2402, 139, 'Dhakhlat Nawadibu', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2403, 139, 'Hudh-al-Gharbi', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2404, 139, 'Hudh-ash-Sharqi', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2405, 139, 'Inshiri', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2406, 139, 'Nawakshut', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2407, 139, 'Qidimagha', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2408, 139, 'Qurqul', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2409, 139, 'Taqant', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2410, 139, 'Tiris Zammur', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2411, 139, 'Trarza', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2412, 140, 'Black River', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2413, 140, 'Eau Coulee', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2414, 140, 'Flacq', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2415, 140, 'Floreal', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2416, 140, 'Grand Port', '2020-04-27 04:40:15', '2020-04-27 04:40:15', NULL),
(2417, 140, 'Moka', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2418, 140, 'Pamplempousses', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2419, 140, 'Plaines Wilhelm', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2420, 140, 'Port Louis', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2421, 140, 'Riviere du Rempart', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2422, 140, 'Rodrigues', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2423, 140, 'Rose Hill', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2424, 140, 'Savanne', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2425, 141, 'Mayotte', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2426, 141, 'Pamanzi', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2427, 142, 'Aguascalientes', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2428, 142, 'Baja California', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2429, 142, 'Baja California Sur', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2430, 142, 'Campeche', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2431, 142, 'Chiapas', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2432, 142, 'Chihuahua', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2433, 142, 'Coahuila', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2434, 142, 'Colima', '2020-04-27 04:40:16', '2020-04-27 04:40:16', NULL),
(2435, 142, 'Distrito Federal', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2436, 142, 'Durango', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2437, 142, 'Estado de Mexico', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2438, 142, 'Guanajuato', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2439, 142, 'Guerrero', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2440, 142, 'Hidalgo', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2441, 142, 'Jalisco', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2442, 142, 'Mexico', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2443, 142, 'Michoacan', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2444, 142, 'Morelos', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2445, 142, 'Nayarit', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2446, 142, 'Nuevo Leon', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2447, 142, 'Oaxaca', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2448, 142, 'Puebla', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2449, 142, 'Queretaro', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2450, 142, 'Quintana Roo', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2451, 142, 'San Luis Potosi', '2020-04-27 04:40:17', '2020-04-27 04:40:17', NULL),
(2452, 142, 'Sinaloa', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2453, 142, 'Sonora', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2454, 142, 'Tabasco', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2455, 142, 'Tamaulipas', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2456, 142, 'Tlaxcala', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2457, 142, 'Veracruz', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2458, 142, 'Yucatan', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2459, 142, 'Zacatecas', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2460, 143, 'Chuuk', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2461, 143, 'Kusaie', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2462, 143, 'Pohnpei', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2463, 143, 'Yap', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2464, 144, 'Balti', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2465, 144, 'Cahul', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2466, 144, 'Chisinau', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2467, 144, 'Chisinau Oras', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2468, 144, 'Edinet', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2469, 144, 'Gagauzia', '2020-04-27 04:40:18', '2020-04-27 04:40:18', NULL),
(2470, 144, 'Lapusna', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2471, 144, 'Orhei', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2472, 144, 'Soroca', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2473, 144, 'Taraclia', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2474, 144, 'Tighina', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2475, 144, 'Transnistria', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2476, 144, 'Ungheni', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2477, 145, 'Fontvieille', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2478, 145, 'La Condamine', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2479, 145, 'Monaco-Ville', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2480, 145, 'Monte Carlo', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2481, 146, 'Arhangaj', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2482, 146, 'Bajan-Olgij', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2483, 146, 'Bajanhongor', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2484, 146, 'Bulgan', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2485, 146, 'Darhan-Uul', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2486, 146, 'Dornod', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2487, 146, 'Dornogovi', '2020-04-27 04:40:19', '2020-04-27 04:40:19', NULL),
(2488, 146, 'Dundgovi', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2489, 146, 'Govi-Altaj', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2490, 146, 'Govisumber', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2491, 146, 'Hentij', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2492, 146, 'Hovd', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2493, 146, 'Hovsgol', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2494, 146, 'Omnogovi', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2495, 146, 'Orhon', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2496, 146, 'Ovorhangaj', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2497, 146, 'Selenge', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2498, 146, 'Suhbaatar', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2499, 146, 'Tov', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2500, 146, 'Ulaanbaatar', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2501, 146, 'Uvs', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2502, 146, 'Zavhan', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2503, 147, 'Montserrat', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2504, 148, 'Agadir', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2505, 148, 'Casablanca', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2506, 148, 'Chaouia-Ouardigha', '2020-04-27 04:40:20', '2020-04-27 04:40:20', NULL),
(2507, 148, 'Doukkala-Abda', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2508, 148, 'Fes-Boulemane', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2509, 148, 'Gharb-Chrarda-Beni Hssen', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2510, 148, 'Guelmim', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2511, 148, 'Kenitra', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2512, 148, 'Marrakech-Tensift-Al Haouz', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2513, 148, 'Meknes-Tafilalet', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2514, 148, 'Oriental', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2515, 148, 'Oujda', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2516, 148, 'Province de Tanger', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2517, 148, 'Rabat-Sale-Zammour-Zaer', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2518, 148, 'Sala Al Jadida', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2519, 148, 'Settat', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2520, 148, 'Souss Massa-Draa', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2521, 148, 'Tadla-Azilal', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2522, 148, 'Tangier-Tetouan', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2523, 148, 'Taza-Al Hoceima-Taounate', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2524, 148, 'Wilaya de Casablanca', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2525, 148, 'Wilaya de Rabat-Sale', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2526, 149, 'Cabo Delgado', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2527, 149, 'Gaza', '2020-04-27 04:40:21', '2020-04-27 04:40:21', NULL),
(2528, 149, 'Inhambane', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2529, 149, 'Manica', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2530, 149, 'Maputo', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2531, 149, 'Maputo Provincia', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2532, 149, 'Nampula', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2533, 149, 'Niassa', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2534, 149, 'Sofala', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2535, 149, 'Tete', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2536, 149, 'Zambezia', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2537, 150, 'Ayeyarwady', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2538, 150, 'Bago', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2539, 150, 'Chin', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2540, 150, 'Kachin', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2541, 150, 'Kayah', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2542, 150, 'Kayin', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2543, 150, 'Magway', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2544, 150, 'Mandalay', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2545, 150, 'Mon', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2546, 150, 'Nay Pyi Taw', '2020-04-27 04:40:22', '2020-04-27 04:40:22', NULL),
(2547, 150, 'Rakhine', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2548, 150, 'Sagaing', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2549, 150, 'Shan', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2550, 150, 'Tanintharyi', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2551, 150, 'Yangon', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2552, 151, 'Caprivi', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2553, 151, 'Erongo', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2554, 151, 'Hardap', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2555, 151, 'Karas', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2556, 151, 'Kavango', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2557, 151, 'Khomas', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2558, 151, 'Kunene', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2559, 151, 'Ohangwena', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2560, 151, 'Omaheke', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2561, 151, 'Omusati', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2562, 151, 'Oshana', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2563, 151, 'Oshikoto', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2564, 151, 'Otjozondjupa', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2565, 152, 'Yaren', '2020-04-27 04:40:23', '2020-04-27 04:40:23', NULL),
(2566, 153, 'Bagmati', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2567, 153, 'Bheri', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2568, 153, 'Dhawalagiri', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2569, 153, 'Gandaki', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2570, 153, 'Janakpur', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2571, 153, 'Karnali', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2572, 153, 'Koshi', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2573, 153, 'Lumbini', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2574, 153, 'Mahakali', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2575, 153, 'Mechi', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2576, 153, 'Narayani', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2577, 153, 'Rapti', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2578, 153, 'Sagarmatha', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2579, 153, 'Seti', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2580, 154, 'Bonaire', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2581, 154, 'Curacao', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2582, 154, 'Saba', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2583, 154, 'Sint Eustatius', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2584, 154, 'Sint Maarten', '2020-04-27 04:40:24', '2020-04-27 04:40:24', NULL),
(2585, 155, 'Amsterdam', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2586, 155, 'Benelux', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2587, 155, 'Drenthe', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2588, 155, 'Flevoland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2589, 155, 'Friesland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2590, 155, 'Gelderland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2591, 155, 'Groningen', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2592, 155, 'Limburg', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2593, 155, 'Noord-Brabant', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2594, 155, 'Noord-Holland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2595, 155, 'Overijssel', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2596, 155, 'South Holland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2597, 155, 'Utrecht', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2598, 155, 'Zeeland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2599, 155, 'Zuid-Holland', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2600, 156, 'Iles', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2601, 156, 'Nord', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2602, 156, 'Sud', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2603, 157, 'Area Outside Region', '2020-04-27 04:40:25', '2020-04-27 04:40:25', NULL),
(2604, 157, 'Auckland', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2605, 157, 'Bay of Plenty', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2606, 157, 'Canterbury', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2607, 157, 'Christchurch', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2608, 157, 'Gisborne', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2609, 157, 'Hawke\'\'s Bay', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2610, 157, 'Manawatu-Wanganui', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2611, 157, 'Marlborough', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2612, 157, 'Nelson', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2613, 157, 'Northland', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2614, 157, 'Otago', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2615, 157, 'Rodney', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2616, 157, 'Southland', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2617, 157, 'Taranaki', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2618, 157, 'Tasman', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2619, 157, 'Waikato', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2620, 157, 'Wellington', '2020-04-27 04:40:26', '2020-04-27 04:40:26', NULL),
(2621, 157, 'West Coast', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2622, 158, 'Atlantico Norte', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2623, 158, 'Atlantico Sur', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2624, 158, 'Boaco', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2625, 158, 'Carazo', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2626, 158, 'Chinandega', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2627, 158, 'Chontales', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2628, 158, 'Esteli', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2629, 158, 'Granada', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2630, 158, 'Jinotega', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2631, 158, 'Leon', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2632, 158, 'Madriz', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2633, 158, 'Managua', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2634, 158, 'Masaya', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2635, 158, 'Matagalpa', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2636, 158, 'Nueva Segovia', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2637, 158, 'Rio San Juan', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2638, 158, 'Rivas', '2020-04-27 04:40:27', '2020-04-27 04:40:27', NULL),
(2639, 159, 'Agadez', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2640, 159, 'Diffa', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2641, 159, 'Dosso', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2642, 159, 'Maradi', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2643, 159, 'Niamey', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2644, 159, 'Tahoua', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2645, 159, 'Tillabery', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2646, 159, 'Zinder', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2647, 160, 'Abia', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2648, 160, 'Abuja Federal Capital Territor', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2649, 160, 'Adamawa', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2650, 160, 'Akwa Ibom', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2651, 160, 'Anambra', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2652, 160, 'Bauchi', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2653, 160, 'Bayelsa', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2654, 160, 'Benue', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2655, 160, 'Borno', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2656, 160, 'Cross River', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2657, 160, 'Delta', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2658, 160, 'Ebonyi', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2659, 160, 'Edo', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2660, 160, 'Ekiti', '2020-04-27 04:40:28', '2020-04-27 04:40:28', NULL),
(2661, 160, 'Enugu', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2662, 160, 'Gombe', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2663, 160, 'Imo', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2664, 160, 'Jigawa', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2665, 160, 'Kaduna', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2666, 160, 'Kano', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2667, 160, 'Katsina', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2668, 160, 'Kebbi', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2669, 160, 'Kogi', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2670, 160, 'Kwara', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2671, 160, 'Lagos', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2672, 160, 'Nassarawa', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2673, 160, 'Niger', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2674, 160, 'Ogun', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2675, 160, 'Ondo', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2676, 160, 'Osun', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2677, 160, 'Oyo', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2678, 160, 'Plateau', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2679, 160, 'Rivers', '2020-04-27 04:40:29', '2020-04-27 04:40:29', NULL),
(2680, 160, 'Sokoto', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2681, 160, 'Taraba', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2682, 160, 'Yobe', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2683, 160, 'Zamfara', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2684, 161, 'Niue', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2685, 162, 'Norfolk Island', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2686, 163, 'Northern Islands', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2687, 163, 'Rota', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2688, 163, 'Saipan', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2689, 163, 'Tinian', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2690, 164, 'Akershus', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2691, 164, 'Aust Agder', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2692, 164, 'Bergen', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2693, 164, 'Buskerud', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2694, 164, 'Finnmark', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2695, 164, 'Hedmark', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2696, 164, 'Hordaland', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2697, 164, 'Moere og Romsdal', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2698, 164, 'Nord Trondelag', '2020-04-27 04:40:30', '2020-04-27 04:40:30', NULL),
(2699, 164, 'Nordland', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2700, 164, 'Oestfold', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2701, 164, 'Oppland', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2702, 164, 'Oslo', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2703, 164, 'Rogaland', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2704, 164, 'Soer Troendelag', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2705, 164, 'Sogn og Fjordane', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2706, 164, 'Stavern', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2707, 164, 'Sykkylven', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2708, 164, 'Telemark', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2709, 164, 'Troms', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2710, 164, 'Vest Agder', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2711, 164, 'Vestfold', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2712, 164, 'ÃƒÂ˜stfold', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2713, 165, 'Al Buraimi', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2714, 165, 'Dhufar', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2715, 165, 'Masqat', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2716, 165, 'Musandam', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2717, 165, 'Rusayl', '2020-04-27 04:40:31', '2020-04-27 04:40:31', NULL),
(2718, 165, 'Wadi Kabir', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2719, 165, 'ad-Dakhiliyah', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2720, 165, 'adh-Dhahirah', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2721, 165, 'al-Batinah', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2722, 165, 'ash-Sharqiyah', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2723, 166, 'Baluchistan', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2724, 166, 'Federal Capital Area', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2725, 166, 'Federally administered Tribal', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2726, 166, 'North-West Frontier', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2727, 166, 'Northern Areas', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2728, 166, 'Punjab', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2729, 166, 'Sind', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2730, 167, 'Aimeliik', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2731, 167, 'Airai', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2732, 167, 'Angaur', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2733, 167, 'Hatobohei', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2734, 167, 'Kayangel', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2735, 167, 'Koror', '2020-04-27 04:40:32', '2020-04-27 04:40:32', NULL),
(2736, 167, 'Melekeok', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2737, 167, 'Ngaraard', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2738, 167, 'Ngardmau', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2739, 167, 'Ngaremlengui', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2740, 167, 'Ngatpang', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2741, 167, 'Ngchesar', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2742, 167, 'Ngerchelong', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2743, 167, 'Ngiwal', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2744, 167, 'Peleliu', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2745, 167, 'Sonsorol', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2746, 168, 'Ariha', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2747, 168, 'Bayt Lahm', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2748, 168, 'Bethlehem', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2749, 168, 'Dayr-al-Balah', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2750, 168, 'Ghazzah', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2751, 168, 'Ghazzah ash-Shamaliyah', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2752, 168, 'Janin', '2020-04-27 04:40:33', '2020-04-27 04:40:33', NULL),
(2753, 168, 'Khan Yunis', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2754, 168, 'Nabulus', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2755, 168, 'Qalqilyah', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2756, 168, 'Rafah', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2757, 168, 'Ram Allah wal-Birah', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2758, 168, 'Salfit', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2759, 168, 'Tubas', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2760, 168, 'Tulkarm', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2761, 168, 'al-Khalil', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2762, 168, 'al-Quds', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2763, 169, 'Bocas del Toro', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2764, 169, 'Chiriqui', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2765, 169, 'Cocle', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2766, 169, 'Colon', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2767, 169, 'Darien', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2768, 169, 'Embera', '2020-04-27 04:40:34', '2020-04-27 04:40:34', NULL),
(2769, 169, 'Herrera', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2770, 169, 'Kuna Yala', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2771, 169, 'Los Santos', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2772, 169, 'Ngobe Bugle', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2773, 169, 'Panama', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2774, 169, 'Veraguas', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2775, 170, 'East New Britain', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2776, 170, 'East Sepik', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2777, 170, 'Eastern Highlands', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2778, 170, 'Enga', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2779, 170, 'Fly River', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2780, 170, 'Gulf', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2781, 170, 'Madang', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2782, 170, 'Manus', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2783, 170, 'Milne Bay', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2784, 170, 'Morobe', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2785, 170, 'National Capital District', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2786, 170, 'New Ireland', '2020-04-27 04:40:35', '2020-04-27 04:40:35', NULL),
(2787, 170, 'North Solomons', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2788, 170, 'Oro', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2789, 170, 'Sandaun', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2790, 170, 'Simbu', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2791, 170, 'Southern Highlands', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2792, 170, 'West New Britain', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2793, 170, 'Western Highlands', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2794, 171, 'Alto Paraguay', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2795, 171, 'Alto Parana', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2796, 171, 'Amambay', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2797, 171, 'Asuncion', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2798, 171, 'Boqueron', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2799, 171, 'Caaguazu', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2800, 171, 'Caazapa', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2801, 171, 'Canendiyu', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2802, 171, 'Central', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2803, 171, 'Concepcion', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2804, 171, 'Cordillera', '2020-04-27 04:40:36', '2020-04-27 04:40:36', NULL),
(2805, 171, 'Guaira', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2806, 171, 'Itapua', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2807, 171, 'Misiones', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2808, 171, 'Neembucu', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2809, 171, 'Paraguari', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2810, 171, 'Presidente Hayes', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2811, 171, 'San Pedro', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2812, 172, 'Amazonas', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2813, 172, 'Ancash', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2814, 172, 'Apurimac', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2815, 172, 'Arequipa', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2816, 172, 'Ayacucho', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2817, 172, 'Cajamarca', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2818, 172, 'Cusco', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2819, 172, 'Huancavelica', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2820, 172, 'Huanuco', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2821, 172, 'Ica', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2822, 172, 'Junin', '2020-04-27 04:40:37', '2020-04-27 04:40:37', NULL),
(2823, 172, 'La Libertad', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2824, 172, 'Lambayeque', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2825, 172, 'Lima y Callao', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2826, 172, 'Loreto', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2827, 172, 'Madre de Dios', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2828, 172, 'Moquegua', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2829, 172, 'Pasco', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2830, 172, 'Piura', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2831, 172, 'Puno', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2832, 172, 'San Martin', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2833, 172, 'Tacna', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2834, 172, 'Tumbes', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2835, 172, 'Ucayali', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2836, 173, 'Batangas', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2837, 173, 'Bicol', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2838, 173, 'Bulacan', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2839, 173, 'Cagayan', '2020-04-27 04:40:38', '2020-04-27 04:40:38', NULL),
(2840, 173, 'Caraga', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2841, 173, 'Central Luzon', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2842, 173, 'Central Mindanao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2843, 173, 'Central Visayas', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2844, 173, 'Cordillera', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2845, 173, 'Davao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2846, 173, 'Eastern Visayas', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2847, 173, 'Greater Metropolitan Area', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2848, 173, 'Ilocos', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2849, 173, 'Laguna', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2850, 173, 'Luzon', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2851, 173, 'Mactan', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2852, 173, 'Metropolitan Manila Area', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2853, 173, 'Muslim Mindanao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2854, 173, 'Northern Mindanao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2855, 173, 'Southern Mindanao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2856, 173, 'Southern Tagalog', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2857, 173, 'Western Mindanao', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2858, 173, 'Western Visayas', '2020-04-27 04:40:39', '2020-04-27 04:40:39', NULL),
(2859, 174, 'Pitcairn Island', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2860, 175, 'Biale Blota', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2861, 175, 'Dobroszyce', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2862, 175, 'Dolnoslaskie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2863, 175, 'Dziekanow Lesny', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2864, 175, 'Hopowo', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2865, 175, 'Kartuzy', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2866, 175, 'Koscian', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2867, 175, 'Krakow', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2868, 175, 'Kujawsko-Pomorskie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2869, 175, 'Lodzkie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2870, 175, 'Lubelskie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2871, 175, 'Lubuskie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2872, 175, 'Malomice', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2873, 175, 'Malopolskie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2874, 175, 'Mazowieckie', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2875, 175, 'Mirkow', '2020-04-27 04:40:40', '2020-04-27 04:40:40', NULL),
(2876, 175, 'Opolskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2877, 175, 'Ostrowiec', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2878, 175, 'Podkarpackie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2879, 175, 'Podlaskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2880, 175, 'Polska', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2881, 175, 'Pomorskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2882, 175, 'Poznan', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2883, 175, 'Pruszkow', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2884, 175, 'Rymanowska', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2885, 175, 'Rzeszow', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2886, 175, 'Slaskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2887, 175, 'Stare Pole', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2888, 175, 'Swietokrzyskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2889, 175, 'Warminsko-Mazurskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2890, 175, 'Warsaw', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2891, 175, 'Wejherowo', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2892, 175, 'Wielkopolskie', '2020-04-27 04:40:41', '2020-04-27 04:40:41', NULL),
(2893, 175, 'Wroclaw', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2894, 175, 'Zachodnio-Pomorskie', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2895, 175, 'Zukowo', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2896, 176, 'Abrantes', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2897, 176, 'Acores', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2898, 176, 'Alentejo', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2899, 176, 'Algarve', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2900, 176, 'Braga', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2901, 176, 'Centro', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2902, 176, 'Distrito de Leiria', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2903, 176, 'Distrito de Viana do Castelo', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2904, 176, 'Distrito de Vila Real', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2905, 176, 'Distrito do Porto', '2020-04-27 04:40:42', '2020-04-27 04:40:42', NULL),
(2906, 176, 'Lisboa e Vale do Tejo', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2907, 176, 'Madeira', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2908, 176, 'Norte', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2909, 176, 'Paivas', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2910, 177, 'Arecibo', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2911, 177, 'Bayamon', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2912, 177, 'Carolina', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2913, 177, 'Florida', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2914, 177, 'Guayama', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2915, 177, 'Humacao', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2916, 177, 'Mayaguez-Aguadilla', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2917, 177, 'Ponce', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2918, 177, 'Salinas', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2919, 177, 'San Juan', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2920, 178, 'Doha', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2921, 178, 'Jarian-al-Batnah', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2922, 178, 'Umm Salal', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2923, 178, 'ad-Dawhah', '2020-04-27 04:40:43', '2020-04-27 04:40:43', NULL),
(2924, 178, 'al-Ghuwayriyah', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2925, 178, 'al-Jumayliyah', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2926, 178, 'al-Khawr', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2927, 178, 'al-Wakrah', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2928, 178, 'ar-Rayyan', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2929, 178, 'ash-Shamal', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2930, 179, 'Saint-Benoit', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2931, 179, 'Saint-Denis', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2932, 179, 'Saint-Paul', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2933, 179, 'Saint-Pierre', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2934, 180, 'Alba', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2935, 180, 'Arad', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2936, 180, 'Arges', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2937, 180, 'Bacau', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2938, 180, 'Bihor', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2939, 180, 'Bistrita-Nasaud', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2940, 180, 'Botosani', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2941, 180, 'Braila', '2020-04-27 04:40:44', '2020-04-27 04:40:44', NULL),
(2942, 180, 'Brasov', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2943, 180, 'Bucuresti', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2944, 180, 'Buzau', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2945, 180, 'Calarasi', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2946, 180, 'Caras-Severin', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2947, 180, 'Cluj', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2948, 180, 'Constanta', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2949, 180, 'Covasna', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2950, 180, 'Dambovita', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2951, 180, 'Dolj', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2952, 180, 'Galati', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2953, 180, 'Giurgiu', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2954, 180, 'Gorj', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2955, 180, 'Harghita', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2956, 180, 'Hunedoara', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2957, 180, 'Ialomita', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2958, 180, 'Iasi', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2959, 180, 'Ilfov', '2020-04-27 04:40:45', '2020-04-27 04:40:45', NULL),
(2960, 180, 'Maramures', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2961, 180, 'Mehedinti', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2962, 180, 'Mures', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2963, 180, 'Neamt', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2964, 180, 'Olt', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2965, 180, 'Prahova', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2966, 180, 'Salaj', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2967, 180, 'Satu Mare', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2968, 180, 'Sibiu', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2969, 180, 'Sondelor', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2970, 180, 'Suceava', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2971, 180, 'Teleorman', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2972, 180, 'Timis', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2973, 180, 'Tulcea', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2974, 180, 'Valcea', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2975, 180, 'Vaslui', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2976, 180, 'Vrancea', '2020-04-27 04:40:46', '2020-04-27 04:40:46', NULL),
(2977, 181, 'Adygeja', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2978, 181, 'Aga', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2979, 181, 'Alanija', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2980, 181, 'Altaj', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2981, 181, 'Amur', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2982, 181, 'Arhangelsk', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2983, 181, 'Astrahan', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2984, 181, 'Bashkortostan', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2985, 181, 'Belgorod', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2986, 181, 'Brjansk', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2987, 181, 'Burjatija', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2988, 181, 'Chechenija', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2989, 181, 'Cheljabinsk', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2990, 181, 'Chita', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2991, 181, 'Chukotka', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2992, 181, 'Chuvashija', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2993, 181, 'Dagestan', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2994, 181, 'Evenkija', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2995, 181, 'Gorno-Altaj', '2020-04-27 04:40:47', '2020-04-27 04:40:47', NULL),
(2996, 181, 'Habarovsk', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(2997, 181, 'Hakasija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(2998, 181, 'Hanty-Mansija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(2999, 181, 'Ingusetija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3000, 181, 'Irkutsk', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3001, 181, 'Ivanovo', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3002, 181, 'Jamalo-Nenets', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3003, 181, 'Jaroslavl', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3004, 181, 'Jevrej', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3005, 181, 'Kabardino-Balkarija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3006, 181, 'Kaliningrad', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3007, 181, 'Kalmykija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3008, 181, 'Kaluga', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3009, 181, 'Kamchatka', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3010, 181, 'Karachaj-Cherkessija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3011, 181, 'Karelija', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3012, 181, 'Kemerovo', '2020-04-27 04:40:48', '2020-04-27 04:40:48', NULL),
(3013, 181, 'Khabarovskiy Kray', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3014, 181, 'Kirov', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3015, 181, 'Komi', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3016, 181, 'Komi-Permjakija', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3017, 181, 'Korjakija', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3018, 181, 'Kostroma', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3019, 181, 'Krasnodar', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3020, 181, 'Krasnojarsk', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3021, 181, 'Krasnoyarskiy Kray', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3022, 181, 'Kurgan', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3023, 181, 'Kursk', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3024, 181, 'Leningrad', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3025, 181, 'Lipeck', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3026, 181, 'Magadan', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3027, 181, 'Marij El', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3028, 181, 'Mordovija', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3029, 181, 'Moscow', '2020-04-27 04:40:49', '2020-04-27 04:40:49', NULL),
(3030, 181, 'Moskovskaja Oblast', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3031, 181, 'Moskovskaya Oblast', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3032, 181, 'Moskva', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3033, 181, 'Murmansk', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3034, 181, 'Nenets', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3035, 181, 'Nizhnij Novgorod', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3036, 181, 'Novgorod', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3037, 181, 'Novokusnezk', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3038, 181, 'Novosibirsk', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3039, 181, 'Omsk', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3040, 181, 'Orenburg', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3041, 181, 'Orjol', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3042, 181, 'Penza', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3043, 181, 'Perm', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3044, 181, 'Primorje', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3045, 181, 'Pskov', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3046, 181, 'Pskovskaya Oblast', '2020-04-27 04:40:50', '2020-04-27 04:40:50', NULL),
(3047, 181, 'Rjazan', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3048, 181, 'Rostov', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3049, 181, 'Saha', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3050, 181, 'Sahalin', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3051, 181, 'Samara', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3052, 181, 'Samarskaya', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3053, 181, 'Sankt-Peterburg', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3054, 181, 'Saratov', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3055, 181, 'Smolensk', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3056, 181, 'Stavropol', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3057, 181, 'Sverdlovsk', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3058, 181, 'Tajmyrija', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3059, 181, 'Tambov', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3060, 181, 'Tatarstan', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3061, 181, 'Tjumen', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3062, 181, 'Tomsk', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3063, 181, 'Tula', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3064, 181, 'Tver', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3065, 181, 'Tyva', '2020-04-27 04:40:51', '2020-04-27 04:40:51', NULL),
(3066, 181, 'Udmurtija', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3067, 181, 'Uljanovsk', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3068, 181, 'Ulyanovskaya Oblast', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3069, 181, 'Ust-Orda', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3070, 181, 'Vladimir', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3071, 181, 'Volgograd', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3072, 181, 'Vologda', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3073, 181, 'Voronezh', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3074, 182, 'Butare', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3075, 182, 'Byumba', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3076, 182, 'Cyangugu', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3077, 182, 'Gikongoro', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3078, 182, 'Gisenyi', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3079, 182, 'Gitarama', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3080, 182, 'Kibungo', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3081, 182, 'Kibuye', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3082, 182, 'Kigali-ngali', '2020-04-27 04:40:52', '2020-04-27 04:40:52', NULL),
(3083, 182, 'Ruhengeri', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3084, 183, 'Ascension', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3085, 183, 'Gough Island', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3086, 183, 'Saint Helena', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3087, 183, 'Tristan da Cunha', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3088, 184, 'Christ Church Nichola Town', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3089, 184, 'Saint Anne Sandy Point', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3090, 184, 'Saint George Basseterre', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3091, 184, 'Saint George Gingerland', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3092, 184, 'Saint James Windward', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3093, 184, 'Saint John Capesterre', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3094, 184, 'Saint John Figtree', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3095, 184, 'Saint Mary Cayon', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3096, 184, 'Saint Paul Capesterre', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3097, 184, 'Saint Paul Charlestown', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3098, 184, 'Saint Peter Basseterre', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3099, 184, 'Saint Thomas Lowland', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3100, 184, 'Saint Thomas Middle Island', '2020-04-27 04:40:53', '2020-04-27 04:40:53', NULL),
(3101, 184, 'Trinity Palmetto Point', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3102, 185, 'Anse-la-Raye', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3103, 185, 'Canaries', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3104, 185, 'Castries', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3105, 185, 'Choiseul', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3106, 185, 'Dennery', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3107, 185, 'Gros Inlet', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3108, 185, 'Laborie', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3109, 185, 'Micoud', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3110, 185, 'Soufriere', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3111, 185, 'Vieux Fort', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3112, 186, 'Miquelon-Langlade', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3113, 186, 'Saint-Pierre', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3114, 187, 'Charlotte', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3115, 187, 'Grenadines', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3116, 187, 'Saint Andrew', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3117, 187, 'Saint David', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3118, 187, 'Saint George', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3119, 187, 'Saint Patrick', '2020-04-27 04:40:54', '2020-04-27 04:40:54', NULL),
(3120, 188, 'A\'\'ana', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3121, 188, 'Aiga-i-le-Tai', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3122, 188, 'Atua', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3123, 188, 'Fa\'\'asaleleaga', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3124, 188, 'Gaga\'\'emauga', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3125, 188, 'Gagaifomauga', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3126, 188, 'Palauli', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3127, 188, 'Satupa\'\'itea', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3128, 188, 'Tuamasaga', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3129, 188, 'Va\'\'a-o-Fonoti', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3130, 188, 'Vaisigano', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3131, 189, 'Acquaviva', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3132, 189, 'Borgo Maggiore', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3133, 189, 'Chiesanuova', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3134, 189, 'Domagnano', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3135, 189, 'Faetano', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3136, 189, 'Fiorentino', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3137, 189, 'Montegiardino', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3138, 189, 'San Marino', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3139, 189, 'Serravalle', '2020-04-27 04:40:55', '2020-04-27 04:40:55', NULL),
(3140, 190, 'Agua Grande', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3141, 190, 'Cantagalo', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3142, 190, 'Lemba', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3143, 190, 'Lobata', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3144, 190, 'Me-Zochi', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3145, 190, 'Pague', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3146, 191, 'Al Khobar', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3147, 191, 'Aseer', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3148, 191, 'Ash Sharqiyah', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3149, 191, 'Asir', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3150, 191, 'Central Province', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3151, 191, 'Eastern Province', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3152, 191, 'Ha\'\'il', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3153, 191, 'Jawf', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3154, 191, 'Jizan', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3155, 191, 'Makkah', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3156, 191, 'Najran', '2020-04-27 04:40:56', '2020-04-27 04:40:56', NULL),
(3157, 191, 'Qasim', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3158, 191, 'Tabuk', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3159, 191, 'Western Province', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3160, 191, 'al-Bahah', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3161, 191, 'al-Hudud-ash-Shamaliyah', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3162, 191, 'al-Madinah', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3163, 191, 'ar-Riyad', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3164, 192, 'Dakar', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3165, 192, 'Diourbel', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3166, 192, 'Fatick', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3167, 192, 'Kaolack', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3168, 192, 'Kolda', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3169, 192, 'Louga', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3170, 192, 'Saint-Louis', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3171, 192, 'Tambacounda', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3172, 192, 'Thies', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3173, 192, 'Ziguinchor', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3174, 193, 'Central Serbia', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3175, 193, 'Kosovo and Metohija', '2020-04-27 04:40:57', '2020-04-27 04:40:57', NULL),
(3176, 193, 'Vojvodina', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3177, 194, 'Anse Boileau', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3178, 194, 'Anse Royale', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3179, 194, 'Cascade', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3180, 194, 'Takamaka', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3181, 194, 'Victoria', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3182, 195, 'Eastern', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3183, 195, 'Northern', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3184, 195, 'Southern', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3185, 195, 'Western', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3186, 196, 'Singapore', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3187, 197, 'Banskobystricky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3188, 197, 'Bratislavsky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3189, 197, 'Kosicky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3190, 197, 'Nitriansky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3191, 197, 'Presovsky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3192, 197, 'Trenciansky', '2020-04-27 04:40:58', '2020-04-27 04:40:58', NULL),
(3193, 197, 'Trnavsky', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3194, 197, 'Zilinsky', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3195, 198, 'Benedikt', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3196, 198, 'Gorenjska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3197, 198, 'Gorishka', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3198, 198, 'Jugovzhodna Slovenija', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3199, 198, 'Koroshka', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3200, 198, 'Notranjsko-krashka', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3201, 198, 'Obalno-krashka', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3202, 198, 'Obcina Domzale', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3203, 198, 'Obcina Vitanje', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3204, 198, 'Osrednjeslovenska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3205, 198, 'Podravska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3206, 198, 'Pomurska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3207, 198, 'Savinjska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3208, 198, 'Slovenian Littoral', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3209, 198, 'Spodnjeposavska', '2020-04-27 04:40:59', '2020-04-27 04:40:59', NULL),
(3210, 198, 'Zasavska', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3211, 199, 'Pitcairn', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3212, 200, 'Central', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3213, 200, 'Choiseul', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3214, 200, 'Guadalcanal', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3215, 200, 'Isabel', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3216, 200, 'Makira and Ulawa', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3217, 200, 'Malaita', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3218, 200, 'Rennell and Bellona', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3219, 200, 'Temotu', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3220, 200, 'Western', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3221, 201, 'Awdal', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3222, 201, 'Bakol', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3223, 201, 'Banadir', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3224, 201, 'Bari', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3225, 201, 'Bay', '2020-04-27 04:41:00', '2020-04-27 04:41:00', NULL),
(3226, 201, 'Galgudug', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3227, 201, 'Gedo', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3228, 201, 'Hiran', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3229, 201, 'Jubbada Hose', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3230, 201, 'Jubbadha Dexe', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3231, 201, 'Mudug', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3232, 201, 'Nugal', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3233, 201, 'Sanag', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3234, 201, 'Shabellaha Dhexe', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3235, 201, 'Shabellaha Hose', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3236, 201, 'Togdher', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3237, 201, 'Woqoyi Galbed', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3238, 202, 'Eastern Cape', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3239, 202, 'Free State', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3240, 202, 'Gauteng', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3241, 202, 'Kempton Park', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3242, 202, 'Kramerville', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3243, 202, 'KwaZulu Natal', '2020-04-27 04:41:01', '2020-04-27 04:41:01', NULL),
(3244, 202, 'Limpopo', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3245, 202, 'Mpumalanga', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3246, 202, 'North West', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3247, 202, 'Northern Cape', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3248, 202, 'Parow', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3249, 202, 'Table View', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3250, 202, 'Umtentweni', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3251, 202, 'Western Cape', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3252, 203, 'South Georgia', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3253, 204, 'Central Equatoria', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3254, 205, 'A Coruna', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3255, 205, 'Alacant', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3256, 205, 'Alava', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3257, 205, 'Albacete', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3258, 205, 'Almeria', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3259, 205, 'Andalucia', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3260, 205, 'Asturias', '2020-04-27 04:41:02', '2020-04-27 04:41:02', NULL),
(3261, 205, 'Avila', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3262, 205, 'Badajoz', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3263, 205, 'Balears', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3264, 205, 'Barcelona', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3265, 205, 'Bertamirans', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3266, 205, 'Biscay', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3267, 205, 'Burgos', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3268, 205, 'Caceres', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3269, 205, 'Cadiz', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3270, 205, 'Cantabria', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3271, 205, 'Castello', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3272, 205, 'Catalunya', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3273, 205, 'Ceuta', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3274, 205, 'Ciudad Real', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3275, 205, 'Comunidad Autonoma de Canarias', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3276, 205, 'Comunidad Autonoma de Cataluna', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3277, 205, 'Comunidad Autonoma de Galicia', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3278, 205, 'Comunidad Autonoma de las Isla', '2020-04-27 04:41:03', '2020-04-27 04:41:03', NULL),
(3279, 205, 'Comunidad Autonoma del Princip', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3280, 205, 'Comunidad Valenciana', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3281, 205, 'Cordoba', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3282, 205, 'Cuenca', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3283, 205, 'Gipuzkoa', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3284, 205, 'Girona', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3285, 205, 'Granada', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3286, 205, 'Guadalajara', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3287, 205, 'Guipuzcoa', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3288, 205, 'Huelva', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3289, 205, 'Huesca', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3290, 205, 'Jaen', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3291, 205, 'La Rioja', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3292, 205, 'Las Palmas', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3293, 205, 'Leon', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3294, 205, 'Lerida', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3295, 205, 'Lleida', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3296, 205, 'Lugo', '2020-04-27 04:41:04', '2020-04-27 04:41:04', NULL),
(3297, 205, 'Madrid', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3298, 205, 'Malaga', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3299, 205, 'Melilla', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3300, 205, 'Murcia', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3301, 205, 'Navarra', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3302, 205, 'Ourense', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3303, 205, 'Pais Vasco', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3304, 205, 'Palencia', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3305, 205, 'Pontevedra', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3306, 205, 'Salamanca', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3307, 205, 'Santa Cruz de Tenerife', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3308, 205, 'Segovia', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3309, 205, 'Sevilla', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3310, 205, 'Soria', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3311, 205, 'Tarragona', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3312, 205, 'Tenerife', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3313, 205, 'Teruel', '2020-04-27 04:41:05', '2020-04-27 04:41:05', NULL),
(3314, 205, 'Toledo', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3315, 205, 'Valencia', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3316, 205, 'Valladolid', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3317, 205, 'Vizcaya', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3318, 205, 'Zamora', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3319, 205, 'Zaragoza', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3320, 206, 'Amparai', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3321, 206, 'Anuradhapuraya', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3322, 206, 'Badulla', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3323, 206, 'Boralesgamuwa', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3324, 206, 'Colombo', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3325, 206, 'Galla', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3326, 206, 'Gampaha', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3327, 206, 'Hambantota', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3328, 206, 'Kalatura', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3329, 206, 'Kegalla', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3330, 206, 'Kilinochchi', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3331, 206, 'Kurunegala', '2020-04-27 04:41:06', '2020-04-27 04:41:06', NULL),
(3332, 206, 'Madakalpuwa', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3333, 206, 'Maha Nuwara', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3334, 206, 'Malwana', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3335, 206, 'Mannarama', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3336, 206, 'Matale', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3337, 206, 'Matara', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3338, 206, 'Monaragala', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3339, 206, 'Mullaitivu', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3340, 206, 'North Eastern Province', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3341, 206, 'North Western Province', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3342, 206, 'Nuwara Eliya', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3343, 206, 'Polonnaruwa', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3344, 206, 'Puttalama', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3345, 206, 'Ratnapuraya', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3346, 206, 'Southern Province', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3347, 206, 'Tirikunamalaya', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3348, 206, 'Tuscany', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3349, 206, 'Vavuniyawa', '2020-04-27 04:41:07', '2020-04-27 04:41:07', NULL),
(3350, 206, 'Western Province', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3351, 206, 'Yapanaya', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3352, 206, 'kadawatha', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3353, 207, 'A\'\'ali-an-Nil', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3354, 207, 'Bahr-al-Jabal', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3355, 207, 'Central Equatoria', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3356, 207, 'Gharb Bahr-al-Ghazal', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3357, 207, 'Gharb Darfur', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3358, 207, 'Gharb Kurdufan', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3359, 207, 'Gharb-al-Istiwa\'\'iyah', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3360, 207, 'Janub Darfur', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3361, 207, 'Janub Kurdufan', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3362, 207, 'Junqali', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3363, 207, 'Kassala', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3364, 207, 'Nahr-an-Nil', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3365, 207, 'Shamal Bahr-al-Ghazal', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3366, 207, 'Shamal Darfur', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3367, 207, 'Shamal Kurdufan', '2020-04-27 04:41:08', '2020-04-27 04:41:08', NULL),
(3368, 207, 'Sharq-al-Istiwa\'\'iyah', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3369, 207, 'Sinnar', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3370, 207, 'Warab', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3371, 207, 'Wilayat al Khartum', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3372, 207, 'al-Bahr-al-Ahmar', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3373, 207, 'al-Buhayrat', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3374, 207, 'al-Jazirah', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3375, 207, 'al-Khartum', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3376, 207, 'al-Qadarif', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3377, 207, 'al-Wahdah', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3378, 207, 'an-Nil-al-Abyad', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3379, 207, 'an-Nil-al-Azraq', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3380, 207, 'ash-Shamaliyah', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3381, 208, 'Brokopondo', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3382, 208, 'Commewijne', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3383, 208, 'Coronie', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3384, 208, 'Marowijne', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3385, 208, 'Nickerie', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3386, 208, 'Para', '2020-04-27 04:41:09', '2020-04-27 04:41:09', NULL),
(3387, 208, 'Paramaribo', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3388, 208, 'Saramacca', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3389, 208, 'Wanica', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3390, 209, 'Svalbard', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3391, 210, 'Hhohho', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3392, 210, 'Lubombo', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3393, 210, 'Manzini', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3394, 210, 'Shiselweni', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3395, 211, 'Alvsborgs Lan', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3396, 211, 'Angermanland', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3397, 211, 'Blekinge', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3398, 211, 'Bohuslan', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3399, 211, 'Dalarna', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3400, 211, 'Gavleborg', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3401, 211, 'Gaza', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3402, 211, 'Gotland', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3403, 211, 'Halland', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3404, 211, 'Jamtland', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3405, 211, 'Jonkoping', '2020-04-27 04:41:10', '2020-04-27 04:41:10', NULL),
(3406, 211, 'Kalmar', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3407, 211, 'Kristianstads', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3408, 211, 'Kronoberg', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3409, 211, 'Norrbotten', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3410, 211, 'Orebro', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3411, 211, 'Ostergotland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3412, 211, 'Saltsjo-Boo', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3413, 211, 'Skane', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3414, 211, 'Smaland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3415, 211, 'Sodermanland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3416, 211, 'Stockholm', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3417, 211, 'Uppsala', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3418, 211, 'Varmland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3419, 211, 'Vasterbotten', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3420, 211, 'Vastergotland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3421, 211, 'Vasternorrland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3422, 211, 'Vastmanland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3423, 211, 'Vastra Gotaland', '2020-04-27 04:41:11', '2020-04-27 04:41:11', NULL),
(3424, 212, 'Aargau', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3425, 212, 'Appenzell Inner-Rhoden', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3426, 212, 'Appenzell-Ausser Rhoden', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3427, 212, 'Basel-Landschaft', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3428, 212, 'Basel-Stadt', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3429, 212, 'Bern', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3430, 212, 'Canton Ticino', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3431, 212, 'Fribourg', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3432, 212, 'Geneve', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3433, 212, 'Glarus', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3434, 212, 'Graubunden', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3435, 212, 'Heerbrugg', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3436, 212, 'Jura', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3437, 212, 'Kanton Aargau', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3438, 212, 'Luzern', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3439, 212, 'Morbio Inferiore', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3440, 212, 'Muhen', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3441, 212, 'Neuchatel', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3442, 212, 'Nidwalden', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3443, 212, 'Obwalden', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3444, 212, 'Sankt Gallen', '2020-04-27 04:41:12', '2020-04-27 04:41:12', NULL),
(3445, 212, 'Schaffhausen', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3446, 212, 'Schwyz', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3447, 212, 'Solothurn', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3448, 212, 'Thurgau', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3449, 212, 'Ticino', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3450, 212, 'Uri', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3451, 212, 'Valais', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3452, 212, 'Vaud', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3453, 212, 'Vauffelin', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3454, 212, 'Zug', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3455, 212, 'Zurich', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3456, 213, 'Aleppo', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3457, 213, 'Dar\'\'a', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3458, 213, 'Dayr-az-Zawr', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3459, 213, 'Dimashq', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3460, 213, 'Halab', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3461, 213, 'Hamah', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3462, 213, 'Hims', '2020-04-27 04:41:13', '2020-04-27 04:41:13', NULL),
(3463, 213, 'Idlib', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3464, 213, 'Madinat Dimashq', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3465, 213, 'Tartus', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3466, 213, 'al-Hasakah', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3467, 213, 'al-Ladhiqiyah', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3468, 213, 'al-Qunaytirah', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3469, 213, 'ar-Raqqah', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3470, 213, 'as-Suwayda', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3471, 214, 'Changhua County', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3472, 214, 'Chiayi County', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3473, 214, 'Chiayi City', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3474, 214, 'Taipei City', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3475, 214, 'Hsinchu County', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3476, 214, 'Hsinchu City', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3477, 214, 'Hualien County', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3480, 214, 'Kaohsiung City', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3481, 214, 'Keelung City', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3482, 214, 'Kinmen County', '2020-04-27 04:41:14', '2020-04-27 04:41:14', NULL),
(3483, 214, 'Miaoli County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3484, 214, 'Nantou County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3486, 214, 'Penghu County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3487, 214, 'Pingtung County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3488, 214, 'Taichung City', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3492, 214, 'Tainan City', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3493, 214, 'New Taipei City', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3495, 214, 'Taitung County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3496, 214, 'Taoyuan City', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3497, 214, 'Yilan County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3498, 214, 'YunLin County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3500, 215, 'Dushanbe', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3501, 215, 'Gorno-Badakhshan', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3502, 215, 'Karotegin', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3503, 215, 'Khatlon', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3504, 215, 'Sughd', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3505, 216, 'Arusha', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3506, 216, 'Dar es Salaam', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL),
(3507, 216, 'Dodoma', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3508, 216, 'Iringa', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3509, 216, 'Kagera', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3510, 216, 'Kigoma', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3511, 216, 'Kilimanjaro', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3512, 216, 'Lindi', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3513, 216, 'Mara', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3514, 216, 'Mbeya', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3515, 216, 'Morogoro', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3516, 216, 'Mtwara', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3517, 216, 'Mwanza', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3518, 216, 'Pwani', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3519, 216, 'Rukwa', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3520, 216, 'Ruvuma', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3521, 216, 'Shinyanga', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3522, 216, 'Singida', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3523, 216, 'Tabora', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3524, 216, 'Tanga', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3525, 216, 'Zanzibar and Pemba', '2020-04-27 04:41:16', '2020-04-27 04:41:16', NULL),
(3526, 217, 'Amnat Charoen', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3527, 217, 'Ang Thong', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3528, 217, 'Bangkok', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3529, 217, 'Buri Ram', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3530, 217, 'Chachoengsao', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3531, 217, 'Chai Nat', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3532, 217, 'Chaiyaphum', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3533, 217, 'Changwat Chaiyaphum', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3534, 217, 'Chanthaburi', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3535, 217, 'Chiang Mai', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3536, 217, 'Chiang Rai', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3537, 217, 'Chon Buri', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3538, 217, 'Chumphon', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3539, 217, 'Kalasin', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3540, 217, 'Kamphaeng Phet', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3541, 217, 'Kanchanaburi', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3542, 217, 'Khon Kaen', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3543, 217, 'Krabi', '2020-04-27 04:41:17', '2020-04-27 04:41:17', NULL),
(3544, 217, 'Krung Thep', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3545, 217, 'Lampang', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3546, 217, 'Lamphun', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3547, 217, 'Loei', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3548, 217, 'Lop Buri', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3549, 217, 'Mae Hong Son', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3550, 217, 'Maha Sarakham', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3551, 217, 'Mukdahan', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3552, 217, 'Nakhon Nayok', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3553, 217, 'Nakhon Pathom', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3554, 217, 'Nakhon Phanom', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3555, 217, 'Nakhon Ratchasima', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3556, 217, 'Nakhon Sawan', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3557, 217, 'Nakhon Si Thammarat', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3558, 217, 'Nan', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3559, 217, 'Narathiwat', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3560, 217, 'Nong Bua Lam Phu', '2020-04-27 04:41:18', '2020-04-27 04:41:18', NULL),
(3561, 217, 'Nong Khai', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3562, 217, 'Nonthaburi', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3563, 217, 'Pathum Thani', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3564, 217, 'Pattani', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3565, 217, 'Phangnga', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3566, 217, 'Phatthalung', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3567, 217, 'Phayao', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3568, 217, 'Phetchabun', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3569, 217, 'Phetchaburi', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3570, 217, 'Phichit', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3571, 217, 'Phitsanulok', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3572, 217, 'Phra Nakhon Si Ayutthaya', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3573, 217, 'Phrae', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3574, 217, 'Phuket', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3575, 217, 'Prachin Buri', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3576, 217, 'Prachuap Khiri Khan', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3577, 217, 'Ranong', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3578, 217, 'Ratchaburi', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3579, 217, 'Rayong', '2020-04-27 04:41:19', '2020-04-27 04:41:19', NULL),
(3580, 217, 'Roi Et', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3581, 217, 'Sa Kaeo', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3582, 217, 'Sakon Nakhon', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3583, 217, 'Samut Prakan', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3584, 217, 'Samut Sakhon', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3585, 217, 'Samut Songkhran', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3586, 217, 'Saraburi', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3587, 217, 'Satun', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3588, 217, 'Si Sa Ket', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3589, 217, 'Sing Buri', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3590, 217, 'Songkhla', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3591, 217, 'Sukhothai', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3592, 217, 'Suphan Buri', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3593, 217, 'Surat Thani', '2020-04-27 04:41:20', '2020-04-27 04:41:20', NULL),
(3594, 217, 'Surin', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3595, 217, 'Tak', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3596, 217, 'Trang', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3597, 217, 'Trat', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3598, 217, 'Ubon Ratchathani', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3599, 217, 'Udon Thani', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3600, 217, 'Uthai Thani', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3601, 217, 'Uttaradit', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3602, 217, 'Yala', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3603, 217, 'Yasothon', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3604, 218, 'Centre', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3605, 218, 'Kara', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3606, 218, 'Maritime', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3607, 218, 'Plateaux', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3608, 218, 'Savanes', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3609, 219, 'Atafu', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3610, 219, 'Fakaofo', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3611, 219, 'Nukunonu', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3612, 220, 'Eua', '2020-04-27 04:41:21', '2020-04-27 04:41:21', NULL),
(3613, 220, 'Ha\'\'apai', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3614, 220, 'Niuas', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3615, 220, 'Tongatapu', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3616, 220, 'Vava\'\'u', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3617, 221, 'Arima-Tunapuna-Piarco', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3618, 221, 'Caroni', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3619, 221, 'Chaguanas', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3620, 221, 'Couva-Tabaquite-Talparo', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3621, 221, 'Diego Martin', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3622, 221, 'Glencoe', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3623, 221, 'Penal Debe', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3624, 221, 'Point Fortin', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3625, 221, 'Port of Spain', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3626, 221, 'Princes Town', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3627, 221, 'Saint George', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3628, 221, 'San Fernando', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3629, 221, 'San Juan', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3630, 221, 'Sangre Grande', '2020-04-27 04:41:22', '2020-04-27 04:41:22', NULL),
(3631, 221, 'Siparia', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3632, 221, 'Tobago', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3633, 222, 'Aryanah', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3634, 222, 'Bajah', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3635, 222, 'Bin \'\'Arus', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3636, 222, 'Binzart', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3637, 222, 'Gouvernorat de Ariana', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3638, 222, 'Gouvernorat de Nabeul', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3639, 222, 'Gouvernorat de Sousse', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3640, 222, 'Hammamet Yasmine', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3641, 222, 'Jundubah', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3642, 222, 'Madaniyin', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3643, 222, 'Manubah', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3644, 222, 'Monastir', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3645, 222, 'Nabul', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3646, 222, 'Qabis', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3647, 222, 'Qafsah', '2020-04-27 04:41:23', '2020-04-27 04:41:23', NULL),
(3648, 222, 'Qibili', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3649, 222, 'Safaqis', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3650, 222, 'Sfax', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3651, 222, 'Sidi Bu Zayd', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3652, 222, 'Silyanah', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3653, 222, 'Susah', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3654, 222, 'Tatawin', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3655, 222, 'Tawzar', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3656, 222, 'Tunis', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3657, 222, 'Zaghwan', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3658, 222, 'al-Kaf', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3659, 222, 'al-Mahdiyah', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3660, 222, 'al-Munastir', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3661, 222, 'al-Qasrayn', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3662, 222, 'al-Qayrawan', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3663, 223, 'Adana', '2020-04-27 04:41:24', '2020-04-27 04:41:24', NULL),
(3664, 223, 'Adiyaman', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3665, 223, 'Afyon', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3666, 223, 'Agri', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3667, 223, 'Aksaray', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3668, 223, 'Amasya', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3669, 223, 'Ankara', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3670, 223, 'Antalya', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3671, 223, 'Ardahan', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3672, 223, 'Artvin', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3673, 223, 'Aydin', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3674, 223, 'Balikesir', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3675, 223, 'Bartin', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3676, 223, 'Batman', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3677, 223, 'Bayburt', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3678, 223, 'Bilecik', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3679, 223, 'Bingol', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3680, 223, 'Bitlis', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3681, 223, 'Bolu', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3682, 223, 'Burdur', '2020-04-27 04:41:25', '2020-04-27 04:41:25', NULL),
(3683, 223, 'Bursa', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3684, 223, 'Canakkale', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3685, 223, 'Cankiri', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3686, 223, 'Corum', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3687, 223, 'Denizli', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3688, 223, 'Diyarbakir', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3689, 223, 'Duzce', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3690, 223, 'Edirne', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3691, 223, 'Elazig', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3692, 223, 'Erzincan', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3693, 223, 'Erzurum', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3694, 223, 'Eskisehir', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3695, 223, 'Gaziantep', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3696, 223, 'Giresun', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3697, 223, 'Gumushane', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3698, 223, 'Hakkari', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3699, 223, 'Hatay', '2020-04-27 04:41:26', '2020-04-27 04:41:26', NULL),
(3700, 223, 'Icel', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3701, 223, 'Igdir', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3702, 223, 'Isparta', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3703, 223, 'Istanbul', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3704, 223, 'Izmir', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3705, 223, 'Kahramanmaras', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3706, 223, 'Karabuk', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3707, 223, 'Karaman', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3708, 223, 'Kars', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3709, 223, 'Karsiyaka', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3710, 223, 'Kastamonu', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3711, 223, 'Kayseri', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3712, 223, 'Kilis', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3713, 223, 'Kirikkale', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3714, 223, 'Kirklareli', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3715, 223, 'Kirsehir', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3716, 223, 'Kocaeli', '2020-04-27 04:41:27', '2020-04-27 04:41:27', NULL),
(3717, 223, 'Konya', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3718, 223, 'Kutahya', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3719, 223, 'Lefkosa', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3720, 223, 'Malatya', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3721, 223, 'Manisa', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3722, 223, 'Mardin', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3723, 223, 'Mugla', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3724, 223, 'Mus', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3725, 223, 'Nevsehir', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3726, 223, 'Nigde', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3727, 223, 'Ordu', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3728, 223, 'Osmaniye', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3729, 223, 'Rize', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3730, 223, 'Sakarya', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3731, 223, 'Samsun', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3732, 223, 'Sanliurfa', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3733, 223, 'Siirt', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3734, 223, 'Sinop', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3735, 223, 'Sirnak', '2020-04-27 04:41:28', '2020-04-27 04:41:28', NULL),
(3736, 223, 'Sivas', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3737, 223, 'Tekirdag', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3738, 223, 'Tokat', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3739, 223, 'Trabzon', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3740, 223, 'Tunceli', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3741, 223, 'Usak', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3742, 223, 'Van', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3743, 223, 'Yalova', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3744, 223, 'Yozgat', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3745, 223, 'Zonguldak', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3746, 224, 'Ahal', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3747, 224, 'Asgabat', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3748, 224, 'Balkan', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3749, 224, 'Dasoguz', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3750, 224, 'Lebap', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3751, 224, 'Mari', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3752, 225, 'Grand Turk', '2020-04-27 04:41:29', '2020-04-27 04:41:29', NULL),
(3753, 225, 'South Caicos and East Caicos', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3754, 226, 'Funafuti', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3755, 226, 'Nanumanga', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3756, 226, 'Nanumea', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3757, 226, 'Niutao', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3758, 226, 'Nui', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3759, 226, 'Nukufetau', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3760, 226, 'Nukulaelae', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3761, 226, 'Vaitupu', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3762, 227, 'Central', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3763, 227, 'Eastern', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3764, 227, 'Northern', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3765, 227, 'Western', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3766, 228, 'Cherkas\'\'ka', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3767, 228, 'Chernihivs\'\'ka', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3768, 228, 'Chernivets\'\'ka', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3769, 228, 'Crimea', '2020-04-27 04:41:30', '2020-04-27 04:41:30', NULL),
(3770, 228, 'Dnipropetrovska', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3771, 228, 'Donets\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3772, 228, 'Ivano-Frankivs\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3773, 228, 'Kharkiv', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3774, 228, 'Kharkov', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3775, 228, 'Khersonska', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3776, 228, 'Khmel\'\'nyts\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3777, 228, 'Kirovohrad', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3778, 228, 'Krym', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3779, 228, 'Kyyiv', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3780, 228, 'Kyyivs\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3781, 228, 'L\'\'vivs\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3782, 228, 'Luhans\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3783, 228, 'Mykolayivs\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3784, 228, 'Odes\'\'ka', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3785, 228, 'Odessa', '2020-04-27 04:41:31', '2020-04-27 04:41:31', NULL),
(3786, 228, 'Poltavs\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3787, 228, 'Rivnens\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3788, 228, 'Sevastopol', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3789, 228, 'Sums\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3790, 228, 'Ternopil\'\'s\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3791, 228, 'Volyns\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3792, 228, 'Vynnyts\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3793, 228, 'Zakarpats\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3794, 228, 'Zaporizhia', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3795, 228, 'Zhytomyrs\'\'ka', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3796, 229, 'Abu Zabi', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3797, 229, 'Ajman', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3798, 229, 'Dubai', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3799, 229, 'Ras al-Khaymah', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3800, 229, 'Sharjah', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3801, 229, 'Sharjha', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3802, 229, 'Umm al Qaywayn', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3803, 229, 'al-Fujayrah', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3804, 229, 'ash-Shariqah', '2020-04-27 04:41:32', '2020-04-27 04:41:32', NULL),
(3805, 230, 'Aberdeen', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3806, 230, 'Aberdeenshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3807, 230, 'Argyll', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3808, 230, 'Armagh', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3809, 230, 'Bedfordshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3810, 230, 'Belfast', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3811, 230, 'Berkshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3812, 230, 'Birmingham', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3813, 230, 'Brechin', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3814, 230, 'Bridgnorth', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3815, 230, 'Bristol', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3816, 230, 'Buckinghamshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3817, 230, 'Cambridge', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3818, 230, 'Cambridgeshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3819, 230, 'Channel Islands', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3820, 230, 'Cheshire', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3821, 230, 'Cleveland', '2020-04-27 04:41:33', '2020-04-27 04:41:33', NULL),
(3822, 230, 'Co Fermanagh', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3823, 230, 'Conwy', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3824, 230, 'Cornwall', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3825, 230, 'Coventry', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3826, 230, 'Craven Arms', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3827, 230, 'Cumbria', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3828, 230, 'Denbighshire', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3829, 230, 'Derby', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3830, 230, 'Derbyshire', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3831, 230, 'Devon', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3832, 230, 'Dial Code Dungannon', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3833, 230, 'Didcot', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3834, 230, 'Dorset', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3835, 230, 'Dunbartonshire', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3836, 230, 'Durham', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3837, 230, 'East Dunbartonshire', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3838, 230, 'East Lothian', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3839, 230, 'East Midlands', '2020-04-27 04:41:34', '2020-04-27 04:41:34', NULL),
(3840, 230, 'East Sussex', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3841, 230, 'East Yorkshire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3842, 230, 'England', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3843, 230, 'Essex', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3844, 230, 'Fermanagh', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3845, 230, 'Fife', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3846, 230, 'Flintshire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3847, 230, 'Fulham', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3848, 230, 'Gainsborough', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3849, 230, 'Glocestershire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3850, 230, 'Gwent', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3851, 230, 'Hampshire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3852, 230, 'Hants', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3853, 230, 'Herefordshire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3854, 230, 'Hertfordshire', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3855, 230, 'Ireland', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3856, 230, 'Isle Of Man', '2020-04-27 04:41:35', '2020-04-27 04:41:35', NULL),
(3857, 230, 'Isle of Wight', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3858, 230, 'Kenford', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3859, 230, 'Kent', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3860, 230, 'Kilmarnock', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3861, 230, 'Lanarkshire', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3862, 230, 'Lancashire', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3863, 230, 'Leicestershire', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3864, 230, 'Lincolnshire', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3865, 230, 'Llanymynech', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3866, 230, 'London', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3867, 230, 'Ludlow', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3868, 230, 'Manchester', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3869, 230, 'Mayfair', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3870, 230, 'Merseyside', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3871, 230, 'Mid Glamorgan', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3872, 230, 'Middlesex', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3873, 230, 'Mildenhall', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3874, 230, 'Monmouthshire', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3875, 230, 'Newton Stewart', '2020-04-27 04:41:36', '2020-04-27 04:41:36', NULL),
(3876, 230, 'Norfolk', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3877, 230, 'North Humberside', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3878, 230, 'North Yorkshire', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3879, 230, 'Northamptonshire', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3880, 230, 'Northants', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3881, 230, 'Northern Ireland', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3882, 230, 'Northumberland', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3883, 230, 'Nottinghamshire', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3884, 230, 'Oxford', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3885, 230, 'Powys', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3886, 230, 'Roos-shire', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3887, 230, 'SUSSEX', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3888, 230, 'Sark', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3889, 230, 'Scotland', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3890, 230, 'Scottish Borders', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3891, 230, 'Shropshire', '2020-04-27 04:41:37', '2020-04-27 04:41:37', NULL),
(3892, 230, 'Somerset', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3893, 230, 'South Glamorgan', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3894, 230, 'South Wales', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3895, 230, 'South Yorkshire', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3896, 230, 'Southwell', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3897, 230, 'Staffordshire', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3898, 230, 'Strabane', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3899, 230, 'Suffolk', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3900, 230, 'Surrey', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3901, 230, 'Sussex', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3902, 230, 'Twickenham', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3903, 230, 'Tyne and Wear', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3904, 230, 'Tyrone', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3905, 230, 'Utah', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3906, 230, 'Wales', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3907, 230, 'Warwickshire', '2020-04-27 04:41:38', '2020-04-27 04:41:38', NULL),
(3908, 230, 'West Lothian', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3909, 230, 'West Midlands', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3910, 230, 'West Sussex', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3911, 230, 'West Yorkshire', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3912, 230, 'Whissendine', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3913, 230, 'Wiltshire', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3914, 230, 'Wokingham', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3915, 230, 'Worcestershire', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3916, 230, 'Wrexham', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3917, 230, 'Wurttemberg', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3918, 230, 'Yorkshire', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3919, 231, 'Alabama', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3920, 231, 'Alaska', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3921, 231, 'Arizona', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3922, 231, 'Arkansas', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3923, 231, 'Byram', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3924, 231, 'California', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3925, 231, 'Cokato', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3926, 231, 'Colorado', '2020-04-27 04:41:39', '2020-04-27 04:41:39', NULL),
(3927, 231, 'Connecticut', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3928, 231, 'Delaware', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3929, 231, 'District of Columbia', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3930, 231, 'Florida', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3931, 231, 'Georgia', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3932, 231, 'Hawaii', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3933, 231, 'Idaho', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3934, 231, 'Illinois', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3935, 231, 'Indiana', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3936, 231, 'Iowa', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3937, 231, 'Kansas', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3938, 231, 'Kentucky', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3939, 231, 'Louisiana', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3940, 231, 'Lowa', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3941, 231, 'Maine', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3942, 231, 'Maryland', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3943, 231, 'Massachusetts', '2020-04-27 04:41:40', '2020-04-27 04:41:40', NULL),
(3944, 231, 'Medfield', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3945, 231, 'Michigan', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3946, 231, 'Minnesota', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3947, 231, 'Mississippi', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3948, 231, 'Missouri', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3949, 231, 'Montana', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3950, 231, 'Nebraska', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3951, 231, 'Nevada', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3952, 231, 'New Hampshire', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3953, 231, 'New Jersey', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3954, 231, 'New Jersy', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3955, 231, 'New Mexico', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3956, 231, 'New York', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3957, 231, 'North Carolina', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3958, 231, 'North Dakota', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3959, 231, 'Ohio', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3960, 231, 'Oklahoma', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3961, 231, 'Ontario', '2020-04-27 04:41:41', '2020-04-27 04:41:41', NULL),
(3962, 231, 'Oregon', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3963, 231, 'Pennsylvania', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3964, 231, 'Ramey', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3965, 231, 'Rhode Island', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3966, 231, 'South Carolina', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3967, 231, 'South Dakota', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3968, 231, 'Sublimity', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3969, 231, 'Tennessee', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3970, 231, 'Texas', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3971, 231, 'Trimble', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3972, 231, 'Utah', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3973, 231, 'Vermont', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3974, 231, 'Virginia', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3975, 231, 'Washington', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3976, 231, 'West Virginia', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3977, 231, 'Wisconsin', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3978, 231, 'Wyoming', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3979, 232, 'United States Minor Outlying I', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL);
INSERT INTO `cities` (`id`, `country_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3980, 233, 'Artigas', '2020-04-27 04:41:42', '2020-04-27 04:41:42', NULL),
(3981, 233, 'Canelones', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3982, 233, 'Cerro Largo', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3983, 233, 'Colonia', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3984, 233, 'Durazno', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3985, 233, 'FLorida', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3986, 233, 'Flores', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3987, 233, 'Lavalleja', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3988, 233, 'Maldonado', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3989, 233, 'Montevideo', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3990, 233, 'Paysandu', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3991, 233, 'Rio Negro', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3992, 233, 'Rivera', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3993, 233, 'Rocha', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3994, 233, 'Salto', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3995, 233, 'San Jose', '2020-04-27 04:41:43', '2020-04-27 04:41:43', NULL),
(3996, 233, 'Soriano', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(3997, 233, 'Tacuarembo', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(3998, 233, 'Treinta y Tres', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(3999, 234, 'Andijon', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4000, 234, 'Buhoro', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4001, 234, 'Buxoro Viloyati', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4002, 234, 'Cizah', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4003, 234, 'Fargona', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4004, 234, 'Horazm', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4005, 234, 'Kaskadar', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4006, 234, 'Korakalpogiston', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4007, 234, 'Namangan', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4008, 234, 'Navoi', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4009, 234, 'Samarkand', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4010, 234, 'Sirdare', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4011, 234, 'Surhondar', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4012, 234, 'Toskent', '2020-04-27 04:41:44', '2020-04-27 04:41:44', NULL),
(4013, 235, 'Malampa', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4014, 235, 'Penama', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4015, 235, 'Sanma', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4016, 235, 'Shefa', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4017, 235, 'Tafea', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4018, 235, 'Torba', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4019, 236, 'Vatican City State (Holy See)', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4020, 237, 'Amazonas', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4021, 237, 'Anzoategui', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4022, 237, 'Apure', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4023, 237, 'Aragua', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4024, 237, 'Barinas', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4025, 237, 'Bolivar', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4026, 237, 'Carabobo', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4027, 237, 'Cojedes', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4028, 237, 'Delta Amacuro', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4029, 237, 'Distrito Federal', '2020-04-27 04:41:45', '2020-04-27 04:41:45', NULL),
(4030, 237, 'Falcon', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4031, 237, 'Guarico', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4032, 237, 'Lara', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4033, 237, 'Merida', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4034, 237, 'Miranda', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4035, 237, 'Monagas', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4036, 237, 'Nueva Esparta', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4037, 237, 'Portuguesa', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4038, 237, 'Sucre', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4039, 237, 'Tachira', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4040, 237, 'Trujillo', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4041, 237, 'Vargas', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4042, 237, 'Yaracuy', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4043, 237, 'Zulia', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4044, 238, 'Bac Giang', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4045, 238, 'Binh Dinh', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4046, 238, 'Binh Duong', '2020-04-27 04:41:46', '2020-04-27 04:41:46', NULL),
(4047, 238, 'Da Nang', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4048, 238, 'Dong Bang Song Cuu Long', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4049, 238, 'Dong Bang Song Hong', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4050, 238, 'Dong Nai', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4051, 238, 'Dong Nam Bo', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4052, 238, 'Duyen Hai Mien Trung', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4053, 238, 'Hanoi', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4054, 238, 'Hung Yen', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4055, 238, 'Khu Bon Cu', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4056, 238, 'Long An', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4057, 238, 'Mien Nui Va Trung Du', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4058, 238, 'Thai Nguyen', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4059, 238, 'Thanh Pho Ho Chi Minh', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4060, 238, 'Thu Do Ha Noi', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4061, 238, 'Tinh Can Tho', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4062, 238, 'Tinh Da Nang', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4063, 238, 'Tinh Gia Lai', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4064, 239, 'Anegada', '2020-04-27 04:41:47', '2020-04-27 04:41:47', NULL),
(4065, 239, 'Jost van Dyke', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4066, 239, 'Tortola', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4067, 240, 'Saint Croix', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4068, 240, 'Saint John', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4069, 240, 'Saint Thomas', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4070, 241, 'Alo', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4071, 241, 'Singave', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4072, 241, 'Wallis', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4073, 242, 'Bu Jaydur', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4074, 242, 'Wad-adh-Dhahab', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4075, 242, 'al-\'\'Ayun', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4076, 242, 'as-Samarah', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4077, 243, 'Adan', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4078, 243, 'Abyan', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4079, 243, 'Dhamar', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4080, 243, 'Hadramaut', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4081, 243, 'Hajjah', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4082, 243, 'Hudaydah', '2020-04-27 04:41:48', '2020-04-27 04:41:48', NULL),
(4083, 243, 'Ibb', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4084, 243, 'Lahij', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4085, 243, 'Ma\'\'rib', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4086, 243, 'Madinat San\'\'a', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4087, 243, 'Sa\'\'dah', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4088, 243, 'Sana', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4089, 243, 'Shabwah', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4090, 243, 'Ta\'\'izz', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4091, 243, 'al-Bayda', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4092, 243, 'al-Hudaydah', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4093, 243, 'al-Jawf', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4094, 243, 'al-Mahrah', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4095, 243, 'al-Mahwit', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4096, 244, 'Central Serbia', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4097, 244, 'Kosovo and Metohija', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4098, 244, 'Montenegro', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4099, 244, 'Republic of Serbia', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4100, 244, 'Serbia', '2020-04-27 04:41:49', '2020-04-27 04:41:49', NULL),
(4101, 244, 'Vojvodina', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4102, 245, 'Central', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4103, 245, 'Copperbelt', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4104, 245, 'Eastern', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4105, 245, 'Luapala', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4106, 245, 'Lusaka', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4107, 245, 'North-Western', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4108, 245, 'Northern', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4109, 245, 'Southern', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4110, 245, 'Western', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4111, 246, 'Bulawayo', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4112, 246, 'Harare', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4113, 246, 'Manicaland', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4114, 246, 'Mashonaland Central', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4115, 246, 'Mashonaland East', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4116, 246, 'Mashonaland West', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4117, 246, 'Masvingo', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4118, 246, 'Matabeleland North', '2020-04-27 04:41:50', '2020-04-27 04:41:50', NULL),
(4119, 246, 'Matabeleland South', '2020-04-27 04:41:51', '2020-04-27 04:41:51', NULL),
(4120, 246, 'Midlands', '2020-04-27 04:41:51', '2020-04-27 04:41:51', NULL),
(4121, 214, 'Lienchiang County', '2020-04-27 04:41:15', '2020-04-27 04:41:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'AF', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(2, 'Albania', 'AL', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(3, 'Algeria', 'DZ', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(4, 'American Samoa', 'AS', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(5, 'Andorra', 'AD', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(6, 'Angola', 'AO', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(7, 'Anguilla', 'AI', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(8, 'Antarctica', 'AQ', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(9, 'Antigua And Barbuda', 'AG', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(10, 'Argentina', 'AR', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(11, 'Armenia', 'AM', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(12, 'Aruba', 'AW', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(13, 'Australia', 'AU', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(14, 'Austria', 'AT', NULL, '2020-04-27 04:29:06', '2020-04-27 04:29:06', NULL),
(15, 'Azerbaijan', 'AZ', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(16, 'Bahamas The', 'BS', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(17, 'Bahrain', 'BH', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(18, 'Bangladesh', 'BD', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(19, 'Barbados', 'BB', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(20, 'Belarus', 'BY', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(21, 'Belgium', 'BE', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(22, 'Belize', 'BZ', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(23, 'Benin', 'BJ', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(24, 'Bermuda', 'BM', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(25, 'Bhutan', 'BT', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(26, 'Bolivia', 'BO', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(27, 'Bosnia and Herzegovina', 'BA', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(28, 'Botswana', 'BW', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(29, 'Bouvet Island', 'BV', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(30, 'Brazil', 'BR', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(31, 'British Indian Ocean Territory', 'IO', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(32, 'Brunei', 'BN', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(33, 'Bulgaria', 'BG', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(34, 'Burkina Faso', 'BF', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(35, 'Burundi', 'BI', NULL, '2020-04-27 04:29:07', '2020-04-27 04:29:07', NULL),
(36, 'Cambodia', 'KH', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(37, 'Cameroon', 'CM', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(38, 'Canada', 'CA', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(39, 'Cape Verde', 'CV', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(40, 'Cayman Islands', 'KY', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(41, 'Central African Republic', 'CF', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(42, 'Chad', 'TD', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(43, 'Chile', 'CL', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(44, 'China', 'CN', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(45, 'Christmas Island', 'CX', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(46, 'Cocos (Keeling) Islands', 'CC', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(47, 'Colombia', 'CO', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(48, 'Comoros', 'KM', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(49, 'Republic Of The Congo', 'CG', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(50, 'Democratic Republic Of The Congo', 'CD', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(51, 'Cook Islands', 'CK', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(52, 'Costa Rica', 'CR', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(53, 'Cote D\'\'Ivoire (Ivory Coast)', 'CI', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(54, 'Croatia (Hrvatska)', 'HR', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(55, 'Cuba', 'CU', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(56, 'Cyprus', 'CY', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(57, 'Czech Republic', 'CZ', NULL, '2020-04-27 04:29:08', '2020-04-27 04:29:08', NULL),
(58, 'Denmark', 'DK', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(59, 'Djibouti', 'DJ', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(60, 'Dominica', 'DM', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(61, 'Dominican Republic', 'DO', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(62, 'East Timor', 'TP', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(63, 'Ecuador', 'EC', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(64, 'Egypt', 'EG', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(65, 'El Salvador', 'SV', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(66, 'Equatorial Guinea', 'GQ', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(67, 'Eritrea', 'ER', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(68, 'Estonia', 'EE', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(69, 'Ethiopia', 'ET', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(70, 'External Territories of Australia', 'XA', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(71, 'Falkland Islands', 'FK', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(72, 'Faroe Islands', 'FO', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(73, 'Fiji Islands', 'FJ', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(74, 'Finland', 'FI', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(75, 'France', 'FR', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(76, 'French Guiana', 'GF', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(77, 'French Polynesia', 'PF', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(78, 'French Southern Territories', 'TF', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(79, 'Gabon', 'GA', NULL, '2020-04-27 04:29:09', '2020-04-27 04:29:09', NULL),
(80, 'Gambia The', 'GM', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(81, 'Georgia', 'GE', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(82, 'Germany', 'DE', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(83, 'Ghana', 'GH', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(84, 'Gibraltar', 'GI', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(85, 'Greece', 'GR', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(86, 'Greenland', 'GL', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(87, 'Grenada', 'GD', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(88, 'Guadeloupe', 'GP', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(89, 'Guam', 'GU', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(90, 'Guatemala', 'GT', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(91, 'Guernsey and Alderney', 'XU', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(92, 'Guinea', 'GN', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(93, 'Guinea-Bissau', 'GW', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(94, 'Guyana', 'GY', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(95, 'Haiti', 'HT', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(96, 'Heard and McDonald Islands', 'HM', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(97, 'Honduras', 'HN', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(98, 'Hong Kong S.A.R.', 'HK', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(99, 'Hungary', 'HU', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(100, 'Iceland', 'IS', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(101, 'India', 'IN', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(102, 'Indonesia', 'ID', NULL, '2020-04-27 04:29:10', '2020-04-27 04:29:10', NULL),
(103, 'Iran', 'IR', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(104, 'Iraq', 'IQ', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(105, 'Ireland', 'IE', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(106, 'Israel', 'IL', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(107, 'Italy', 'IT', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(108, 'Jamaica', 'JM', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(109, 'Japan', 'JP', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(110, 'Jersey', 'XJ', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(111, 'Jordan', 'JO', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(112, 'Kazakhstan', 'KZ', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(113, 'Kenya', 'KE', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(114, 'Kiribati', 'KI', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(115, 'Korea North', 'KP', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(116, 'Korea South', 'KR', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(117, 'Kuwait', 'KW', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(118, 'Kyrgyzstan', 'KG', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(119, 'Laos', 'LA', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(120, 'Latvia', 'LV', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(121, 'Lebanon', 'LB', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(122, 'Lesotho', 'LS', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(123, 'Liberia', 'LR', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(124, 'Libya', 'LY', NULL, '2020-04-27 04:29:11', '2020-04-27 04:29:11', NULL),
(125, 'Liechtenstein', 'LI', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(126, 'Lithuania', 'LT', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(127, 'Luxembourg', 'LU', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(128, 'Macau S.A.R.', 'MO', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(129, 'Macedonia', 'MK', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(130, 'Madagascar', 'MG', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(131, 'Malawi', 'MW', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(132, 'Malaysia', 'MY', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(133, 'Maldives', 'MV', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(134, 'Mali', 'ML', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(135, 'Malta', 'MT', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(136, 'Man (Isle of)', 'XM', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(137, 'Marshall Islands', 'MH', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(138, 'Martinique', 'MQ', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(139, 'Mauritania', 'MR', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(140, 'Mauritius', 'MU', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(141, 'Mayotte', 'YT', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(142, 'Mexico', 'MX', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(143, 'Micronesia', 'FM', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(144, 'Moldova', 'MD', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(145, 'Monaco', 'MC', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(146, 'Mongolia', 'MN', NULL, '2020-04-27 04:29:12', '2020-04-27 04:29:12', NULL),
(147, 'Montserrat', 'MS', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(148, 'Morocco', 'MA', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(149, 'Mozambique', 'MZ', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(150, 'Myanmar', 'MM', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(151, 'Namibia', 'NA', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(152, 'Nauru', 'NR', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(153, 'Nepal', 'NP', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(154, 'Netherlands Antilles', 'AN', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(155, 'Netherlands The', 'NL', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(156, 'New Caledonia', 'NC', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(157, 'New Zealand', 'NZ', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(158, 'Nicaragua', 'NI', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(159, 'Niger', 'NE', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(160, 'Nigeria', 'NG', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(161, 'Niue', 'NU', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(162, 'Norfolk Island', 'NF', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(163, 'Northern Mariana Islands', 'MP', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(164, 'Norway', 'NO', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(165, 'Oman', 'OM', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(166, 'Pakistan', 'PK', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(167, 'Palau', 'PW', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(168, 'Palestinian Territory Occupied', 'PS', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(169, 'Panama', 'PA', NULL, '2020-04-27 04:29:13', '2020-04-27 04:29:13', NULL),
(170, 'Papua new Guinea', 'PG', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(171, 'Paraguay', 'PY', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(172, 'Peru', 'PE', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(173, 'Philippines', 'PH', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(174, 'Pitcairn Island', 'PN', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(175, 'Poland', 'PL', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(176, 'Portugal', 'PT', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(177, 'Puerto Rico', 'PR', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(178, 'Qatar', 'QA', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(179, 'Reunion', 'RE', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(180, 'Romania', 'RO', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(181, 'Russia', 'RU', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(182, 'Rwanda', 'RW', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(183, 'Saint Helena', 'SH', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(184, 'Saint Kitts And Nevis', 'KN', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(185, 'Saint Lucia', 'LC', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(186, 'Saint Pierre and Miquelon', 'PM', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(187, 'Saint Vincent And The Grenadines', 'VC', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(188, 'Samoa', 'WS', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(189, 'San Marino', 'SM', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(190, 'Sao Tome and Principe', 'ST', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(191, 'Saudi Arabia', 'SA', NULL, '2020-04-27 04:29:14', '2020-04-27 04:29:14', NULL),
(192, 'Senegal', 'SN', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(193, 'Serbia', 'RS', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(194, 'Seychelles', 'SC', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(195, 'Sierra Leone', 'SL', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(196, 'Singapore', 'SG', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(197, 'Slovakia', 'SK', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(198, 'Slovenia', 'SI', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(199, 'Smaller Territories of the UK', 'XG', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(200, 'Solomon Islands', 'SB', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(201, 'Somalia', 'SO', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(202, 'South Africa', 'ZA', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(203, 'South Georgia', 'GS', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(204, 'South Sudan', 'SS', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(205, 'Spain', 'ES', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(206, 'Sri Lanka', 'LK', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(207, 'Sudan', 'SD', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(208, 'Suriname', 'SR', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(209, 'Svalbard And Jan Mayen Islands', 'SJ', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(210, 'Swaziland', 'SZ', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(211, 'Sweden', 'SE', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(212, 'Switzerland', 'CH', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(213, 'Syria', 'SY', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(214, 'Taiwan', 'TW', NULL, '2020-04-27 04:29:15', '2020-04-27 04:29:15', NULL),
(215, 'Tajikistan', 'TJ', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(216, 'Tanzania', 'TZ', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(217, 'Thailand', 'TH', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(218, 'Togo', 'TG', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(219, 'Tokelau', 'TK', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(220, 'Tonga', 'TO', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(221, 'Trinidad And Tobago', 'TT', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(222, 'Tunisia', 'TN', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(223, 'Turkey', 'TR', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(224, 'Turkmenistan', 'TM', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(225, 'Turks And Caicos Islands', 'TC', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(226, 'Tuvalu', 'TV', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(227, 'Uganda', 'UG', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(228, 'Ukraine', 'UA', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(229, 'United Arab Emirates', 'AE', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(230, 'United Kingdom', 'GB', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(231, 'United States', 'US', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(232, 'United States Minor Outlying Islands', 'UM', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(233, 'Uruguay', 'UY', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(234, 'Uzbekistan', 'UZ', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(235, 'Vanuatu', 'VU', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(236, 'Vatican City State (Holy See)', 'VA', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(237, 'Venezuela', 'VE', NULL, '2020-04-27 04:29:16', '2020-04-27 04:29:16', NULL),
(238, 'Vietnam', 'VN', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(239, 'Virgin Islands (British)', 'VG', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(240, 'Virgin Islands (US)', 'VI', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(241, 'Wallis And Futuna Islands', 'WF', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(242, 'Western Sahara', 'EH', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(243, 'Yemen', 'YE', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(244, 'Yugoslavia', 'YU', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(245, 'Zambia', 'ZM', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL),
(246, 'Zimbabwe', 'ZW', NULL, '2020-04-27 04:29:17', '2020-04-27 04:29:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` char(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` double(8,2) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `code`, `exchange_rate`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Dollar', '$', 'USD', 1.00, 1, '2019-12-05 05:38:58', '2020-03-08 03:38:50', NULL),
(2, 'Taka', '৳', 'BDT', 100.50, 1, '2019-12-05 05:47:06', '2020-07-22 05:16:47', NULL),
(3, 'Australian Dollar', '$', 'AUD', 1.28, 1, '2020-05-15 08:11:15', '2020-05-15 08:11:47', NULL),
(4, 'Brazilian Real', 'R$', 'BRL', 3.25, 1, '2020-05-15 08:18:04', '2020-05-15 08:18:13', NULL),
(5, 'Canadian Dollar', '$', 'CAD', 1.27, 1, '2020-05-15 08:18:43', '2020-05-15 08:22:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `documentable_id` bigint(20) UNSIGNED NOT NULL,
  `documentable_type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `obscure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `format` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `documentable_id`, `documentable_type`, `name`, `obscure`, `path`, `format`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '1', 'Test', 'test', '', 'test', 100.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `user_id`, `degree`, `passing_year`, `country_id`, `school_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'ssc', 2008, 18, 'dhaka', '2022-08-23 10:54:22', '2022-09-10 03:11:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_accounts`
--

CREATE TABLE `expert_accounts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_routing_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_acc_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_accounts`
--

INSERT INTO `expert_accounts` (`id`, `user_id`, `bank_name`, `bank_account_name`, `bank_account_number`, `bank_routing_number`, `paypal_acc_name`, `paypal_email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'DBBL', 'Savings', '0100', '100', NULL, NULL, '2022-08-22 10:53:20', '2022-08-22 10:53:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_services`
--

CREATE TABLE `expert_services` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_cat_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_services`
--

INSERT INTO `expert_services` (`id`, `user_id`, `title`, `image`, `slug`, `about_service`, `project_cat_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'Test', 'test3.jpg', 'fgdh', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, '2022-06-19 11:02:33', '2022-06-19 11:02:33', NULL),
(2, 4, 'dsghfdsh', 'test3.jpg', 'dfhdg', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, '2022-06-20 12:22:56', '2022-06-20 12:22:56', NULL),
(3, 3, 'Test SErve', 'test3.jpg', 'test-serve20220910-113939', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 2, '2022-09-10 05:39:39', '2022-09-10 05:39:39', NULL),
(4, 3, 'Test3', 'test3.jpg', 'test3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 2, '2022-09-11 00:20:56', '2022-12-19 11:19:09', '2022-12-19 11:19:09'),
(5, 3, 'Tset 4', 'tset-4.jpg', 'tset-4', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 2, '2022-09-11 00:21:46', '2022-09-11 01:48:01', '2022-09-11 01:48:01'),
(6, 3, 'Test 1', 'test-1.jpg', 'test-1', 'Tset !', 2, '2022-09-12 23:38:00', '2022-09-13 00:55:15', '2022-09-13 00:55:15'),
(7, 3, 'test3', 'test3.jpg', 'test3', 'Test', 2, '2022-09-12 23:50:52', '2022-09-12 23:50:52', NULL),
(8, 3, 'Test3', 'test3.jpg', 'test3', 'Test', 1, '2022-09-12 23:56:28', '2022-09-12 23:56:28', NULL),
(9, 3, 'Test3', 'test3.png', 'test3', 'Test', 1, '2022-09-13 00:02:17', '2022-09-13 00:02:17', NULL),
(10, 3, 'Test3', 'test3.jpg', 'test3', 'Test', 1, '2022-09-13 00:03:20', '2022-09-13 00:03:20', NULL),
(11, 3, 'Test3', 'test3Test.webp', 'test3', 'Test', 1, '2022-09-13 00:04:32', '2022-09-13 00:04:32', NULL),
(12, 3, 'Test3', 'test19.webp', 'test3', 'Test', 1, '2022-09-13 00:38:50', '2022-09-13 00:38:50', NULL),
(13, 3, 'Test3', 'test51.jpg', 'test3', 'Test', 1, '2022-09-13 00:40:03', '2022-09-13 00:40:03', NULL),
(14, 40, 'Programming of Laravel', 'many-web84.jpg', 'programming-of-laravel', 'Many web applications provide a way for their users to authenticate with the application and \"login\". Implementing this feature in web applications can be a complex and potentially risky endeavor. For this reason, Laravel strives to give you the tools you need to *implement* authentication quickly, securely, and easily.\n\nAt its core, Laravel\'s authentication facilities are made up of \"guards\" and \"providers\". Guards define how users are authenticated for each request. For example, Laravel ships with a session guard which maintains state using session storage and cookies.', 2, '2022-09-19 06:45:44', '2022-09-19 06:45:44', NULL),
(15, 40, 'Test Service', 'ptest-emaboutem53.jpg', 'test-service', '<p>Test <em>About</em> <strong>Service</strong></p>', 2, '2022-09-19 07:42:49', '2022-09-19 07:42:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `expert_services_packages`
--

CREATE TABLE `expert_services_packages` (
  `id` bigint(20) NOT NULL,
  `service_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` bigint(20) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `revision_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_services_packages`
--

INSERT INTO `expert_services_packages` (`id`, `service_type`, `service_price`, `delivery_time`, `revision_limit`, `feature_description`, `service_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 100, 100, 'test', '[\"1\",\"2\",\"4\"]', 1, '2022-08-23 10:55:44', '2022-08-23 10:55:44', NULL),
(2, 'basic', 10, 10, '2', '[\"Test\"]', 3, '2022-09-10 05:39:39', '2022-09-10 05:39:39', NULL),
(3, 'standard', 20, 15, '3', '[\"Tser\"]', 3, '2022-09-10 05:39:39', '2022-09-10 05:39:39', NULL),
(4, 'premium', 100, 20, '5', '[\"Test\"]', 3, '2022-09-10 05:39:39', '2022-09-10 05:39:39', NULL),
(5, 'basic', 100, 10, '2', '[\"Test\"]', 4, '2022-09-11 00:20:56', '2022-12-19 11:19:09', '2022-12-19 11:19:09'),
(6, 'standard', 200, 15, '3', '[\"Tser\"]', 4, '2022-09-11 00:20:56', '2022-12-19 11:19:09', '2022-12-19 11:19:09'),
(7, 'premium', 300, 20, '5', '[\"Test\"]', 4, '2022-09-11 00:20:56', '2022-12-19 11:19:09', '2022-12-19 11:19:09'),
(8, 'basic', 100, 10, '2', '[\"Test\"]', 5, '2022-09-11 00:21:46', '2022-09-11 01:48:01', '2022-09-11 01:48:01'),
(9, 'standard', 200, 5, '3', '[\"Tser\"]', 5, '2022-09-11 00:21:46', '2022-09-11 01:48:01', '2022-09-11 01:48:01'),
(10, 'premium', 300, 20, '5', '[\"Test\"]', 5, '2022-09-11 00:21:46', '2022-09-11 01:48:01', '2022-09-11 01:48:01'),
(11, 'basic', 100, 10, '2', '[\"Test\"]', 6, '2022-09-12 23:38:00', '2022-09-13 00:55:15', '2022-09-13 00:55:15'),
(12, 'standard', 200, 15, '3', '[\"Tser\"]', 6, '2022-09-12 23:38:00', '2022-09-13 00:55:15', '2022-09-13 00:55:15'),
(13, 'premium', 300, 20, '5', '[\"Test\"]', 6, '2022-09-12 23:38:00', '2022-09-13 00:55:15', '2022-09-13 00:55:15'),
(14, 'basic', 100, 10, '2', '[\"Test\"]', 7, '2022-09-12 23:50:52', '2022-09-12 23:50:52', NULL),
(15, 'standard', 200, 5, '3', '[\"Tser\"]', 7, '2022-09-12 23:50:52', '2022-09-12 23:50:52', NULL),
(16, 'premium', 300, 20, '5', '[\"Test\"]', 7, '2022-09-12 23:50:52', '2022-09-12 23:50:52', NULL),
(17, 'basic', 100, 10, '2', '[\"Test\"]', 8, '2022-09-12 23:56:28', '2022-09-12 23:56:28', NULL),
(18, 'standard', 200, 15, '3', '[\"Tser\"]', 8, '2022-09-12 23:56:28', '2022-09-12 23:56:28', NULL),
(19, 'premium', 300, 20, '5', '[null]', 8, '2022-09-12 23:56:28', '2022-09-12 23:56:28', NULL),
(20, 'basic', 100, 10, '2', '[\"Test\"]', 9, '2022-09-13 00:02:17', '2022-09-13 00:02:17', NULL),
(21, 'standard', 200, 15, '3', '[\"Tser\"]', 9, '2022-09-13 00:02:17', '2022-09-13 00:02:17', NULL),
(22, 'premium', 300, 20, '5', '[\"Test\"]', 9, '2022-09-13 00:02:17', '2022-09-13 00:02:17', NULL),
(23, 'basic', 100, 10, '2', '[\"Test\"]', 10, '2022-09-13 00:03:20', '2022-09-13 00:03:20', NULL),
(24, 'standard', 200, 15, '3', '[\"Tser\"]', 10, '2022-09-13 00:03:20', '2022-09-13 00:03:20', NULL),
(25, 'premium', 300, 20, '5', '[\"Test\"]', 10, '2022-09-13 00:03:20', '2022-09-13 00:03:20', NULL),
(26, 'basic', 100, 10, '2', '[\"Test\"]', 11, '2022-09-13 00:04:32', '2022-09-13 00:04:32', NULL),
(27, 'standard', 200, 15, '3', '[\"Tser\"]', 11, '2022-09-13 00:04:32', '2022-09-13 00:04:32', NULL),
(28, 'premium', 300, 20, '5', '[\"Test\"]', 11, '2022-09-13 00:04:32', '2022-09-13 00:04:32', NULL),
(29, 'basic', 100, 10, '2', '[\"Test\"]', 12, '2022-09-13 00:38:50', '2022-09-13 00:38:50', NULL),
(30, 'standard', 200, 15, '3', '[\"Tser\"]', 12, '2022-09-13 00:38:50', '2022-09-13 00:38:50', NULL),
(31, 'premium', 300, 20, '5', '[\"Test\"]', 12, '2022-09-13 00:38:50', '2022-09-13 00:38:50', NULL),
(32, 'basic', 100, 10, '2', '[\"Test\"]', 13, '2022-09-13 00:40:03', '2022-09-13 00:40:03', NULL),
(33, 'standard', 200, 15, '3', '[\"Tser\"]', 13, '2022-09-13 00:40:03', '2022-09-13 00:40:03', NULL),
(34, 'premium', 300, 20, '5', '[\"Test\"]', 13, '2022-09-13 00:40:03', '2022-09-13 00:40:03', NULL),
(35, 'basic', 100, 10, '2', '[\"Test\"]', 14, '2022-09-19 06:45:44', '2022-09-19 06:45:44', NULL),
(36, 'standard', 200, 15, '3', '[\"Test\"]', 14, '2022-09-19 06:45:44', '2022-09-19 06:45:44', NULL),
(37, 'premium', 300, 20, '5', '[\"Test\"]', 14, '2022-09-19 06:45:44', '2022-09-19 06:45:44', NULL),
(38, 'basic', 100, 10, '2', '[\"Test\"]', 15, '2022-09-19 07:42:49', '2022-09-19 07:42:49', NULL),
(39, 'standard', 200, 15, '3', '[\"Test\"]', 15, '2022-09-19 07:42:49', '2022-09-19 07:42:49', NULL),
(40, 'premium', 300, 20, '5', '[\"Test\"]', 15, '2022-09-19 07:42:49', '2022-09-19 07:42:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hire_invitations`
--

CREATE TABLE `hire_invitations` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `sent_by_user_id` int(11) NOT NULL,
  `sent_to_user_id` int(11) NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hire_invitations`
--

INSERT INTO `hire_invitations` (`id`, `project_id`, `sent_by_user_id`, `sent_to_user_id`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'pending', '2022-08-23 10:55:56', '2022-08-23 10:55:56', NULL),
(2, 6, 4, 3, 'pending', '2022-09-12 05:41:53', '2022-09-12 05:41:53', NULL),
(3, 7, 4, 3, 'pending', '2022-09-12 05:44:22', '2022-09-12 05:44:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `rtl` int(1) NOT NULL DEFAULT 0,
  `enable` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `rtl`, `enable`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', 'en', 0, 1, '2019-12-04 22:37:02', '2020-05-14 03:40:54', NULL),
(3, 'Bangla', 'bn', 0, 1, '2019-12-04 22:43:37', '2020-05-14 03:40:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_12_01_050510_create_packages_table', 1),
(4, '2019_12_01_062458_create_currencies_table', 1),
(5, '2019_12_01_062704_create_countries_table', 1),
(6, '2019_12_01_062901_create_project_categories_table', 1),
(7, '2019_12_01_063402_create_support_categories_table', 1),
(8, '2019_12_01_063545_create_support_tickets_table', 1),
(9, '2019_12_01_064315_create_support_ticket_replies_table', 1),
(10, '2019_12_01_065123_create_addresses_table', 1),
(11, '2019_12_01_072257_create_badges_table', 1),
(12, '2019_12_01_073924_create_roles_table', 1),
(13, '2019_12_01_074110_create_user_roles_table', 1),
(14, '2019_12_01_074504_create_user_badges_table', 1),
(15, '2019_12_01_081110_create_verifications_table', 1),
(16, '2019_12_01_081900_create_work_experiences_table', 1),
(17, '2019_12_01_084801_create_projects_table', 1),
(18, '2019_12_01_084842_create_reviews_table', 1),
(19, '2019_12_01_095214_create_project_milestones_table', 1),
(20, '2019_12_01_100119_create_documents_table', 1),
(21, '2019_12_01_100532_create_project_users_table', 1),
(22, '2019_12_01_101035_create_skills_table', 1),
(23, '2019_12_01_101336_create_chat_threads_table', 1),
(24, '2019_12_01_101717_create_chats_table', 1),
(25, '2019_12_01_101959_create_project_bids_table', 1),
(26, '2019_12_01_102425_create_user_profiles_table', 1),
(27, '2019_12_01_102908_create_portfolios_table', 1),
(28, '2019_12_01_103329_create_transactions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `milestone_payments`
--

CREATE TABLE `milestone_payments` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_user_id` int(11) NOT NULL,
  `expert_user_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_status` int(11) NOT NULL DEFAULT 0,
  `client_seen` int(1) NOT NULL DEFAULT 0,
  `admin_profit` double(8,2) NOT NULL DEFAULT 0.00,
  `expert_profit` double(8,2) NOT NULL DEFAULT 0.00,
  `payment_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milestone_payments`
--

INSERT INTO `milestone_payments` (`id`, `project_id`, `client_user_id`, `expert_user_id`, `amount`, `message`, `paid_status`, `client_seen`, `admin_profit`, `expert_profit`, `payment_details`, `payment_method`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 100.00, 'trest', 1, 1, 100.00, 200.00, 'test', 'trest', '2022-08-23 10:56:25', '2022-08-23 10:56:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(9, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `notification_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sender_id` bigint(20) NOT NULL DEFAULT 0,
  `receiver_id` bigint(20) NOT NULL DEFAULT 0,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `showing_panel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seen_by_receiver` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification_type`, `sender_id`, `receiver_id`, `message`, `link`, `created_at`, `updated_at`, `showing_panel`, `seen_by_receiver`) VALUES
(1, 'testy', 1, 1, 'trest ', 'fhgfcj', '2022-08-23 10:56:49', '2022-08-23 10:56:49', 'fgjcgj', 0),
(2, 'freelancer_proposal_for_project', 4, 3, 'You have recieved a proposal for a project by', '/project/my-project-title20220912-114153', '2022-09-12 05:41:53', '2022-09-12 05:41:53', 'freelancer', 0),
(3, 'freelancer_proposal_for_project', 4, 3, 'You have recieved a proposal for a project by', '/project/my-project-title20220912-114422', '2022-09-12 05:44:22', '2022-09-12 05:44:22', 'freelancer', 0),
(4, 'package_purchased', 39, 0, 'A new package has been purchased by', '/admin/all-package-payments', '2022-09-18 10:10:36', '2022-09-18 10:10:36', 'admin', 0),
(5, 'package_purchased', 40, 0, 'A new package has been purchased by', '/admin/all-package-payments', '2022-09-19 06:27:17', '2022-09-19 06:27:17', 'admin', 0),
(6, 'package_purchased', 43, 0, 'A new package has been purchased by', '/admin/all-package-payments', '2022-09-20 04:16:45', '2022-09-20 04:16:45', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'client/freelancer',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `number_of_days` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `commission` double(8,2) DEFAULT 0.00,
  `commission_type` char(20) COLLATE utf8mb4_unicode_ci DEFAULT 'amount' COMMENT 'flat/percenage',
  `badge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_limit` int(11) DEFAULT NULL,
  `fixed_limit` int(11) DEFAULT NULL,
  `long_term_limit` int(11) DEFAULT NULL,
  `skill_add_limit` int(11) DEFAULT NULL,
  `bio_text_limit` int(11) DEFAULT NULL,
  `portfolio_add_limit` int(11) DEFAULT NULL,
  `bookmark_project_limit` int(11) DEFAULT NULL,
  `job_exp_limit` int(11) DEFAULT NULL,
  `service_limit` int(10) NOT NULL DEFAULT 0,
  `following_status` int(1) DEFAULT NULL,
  `recommended` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-inactve, 1-active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `type`, `name`, `price`, `number_of_days`, `commission`, `commission_type`, `badge`, `photo`, `hourly_limit`, `fixed_limit`, `long_term_limit`, `skill_add_limit`, `bio_text_limit`, `portfolio_add_limit`, `bookmark_project_limit`, `job_exp_limit`, `service_limit`, `following_status`, `recommended`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'expert', 'Lawyer Package', 10000.00, 365, 0.00, '', '', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2022-09-15 06:19:39', NULL, NULL),
(2, 'expert', 'Doctor  Package', 10000.00, 365, 0.00, '', '', NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, '2022-09-15 06:19:39', NULL, NULL),
(3, 'expert', 'Teacher Package', 10000.00, 365, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 0, 0, 1, '2022-06-27 04:06:08', '2022-06-27 04:06:08', NULL),
(4, 'expert', 'Individual Person Package', 10.00, 365, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 1, '2022-08-22 04:04:55', '2022-08-22 04:04:55', NULL),
(8, 'expert', 'ghcj', 2100.93, 100, 0.00, 'amount', 'E:\\Server\\tmp\\php4863.tmp', 'E:\\Server\\tmp\\php4864.tmp', NULL, 20, 100, 2, 5, 3, 2, 5, 20, 1, 1, 1, '2022-12-23 02:08:04', '2022-12-23 02:08:04', NULL),
(9, 'expert', 'ghcj', 2100.93, 100, 0.00, 'amount', 'E:\\Server\\tmp\\phpEBDF.tmp', 'E:\\Server\\tmp\\phpEBF0.tmp', NULL, 20, 100, 2, 5, 3, 2, 5, 20, 1, 1, 1, '2022-12-23 02:10:57', '2022-12-23 02:10:57', NULL),
(10, 'expert', 'ghcj', 2100.93, 100, 0.00, 'amount', 'E:\\Server\\tmp\\phpC2DA.tmp', 'E:\\Server\\tmp\\phpC2DB.tmp', NULL, 20, 100, 2, 5, 3, 2, 5, 20, 1, 1, 1, '2022-12-23 02:15:08', '2022-12-23 02:15:08', NULL),
(11, 'freelancer', 'ghcj', 2100.93, 100, 0.00, 'amount', 'E:\\Server\\tmp\\phpC7DA.tmp', 'E:\\Server\\tmp\\phpC7DB.tmp', NULL, 20, 100, 2, 5, 3, 2, 5, 20, 1, 1, 1, '2022-12-23 02:19:32', '2022-12-23 02:19:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_payments`
--

CREATE TABLE `package_payments` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `payment_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_payments`
--

INSERT INTO `package_payments` (`id`, `package_id`, `package_type`, `user_id`, `amount`, `payment_type`, `payment_method`, `payment_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 'expert', 3, 100.00, '', '', '', '2022-06-09 07:36:40', '2022-06-09 07:36:40', NULL),
(2, 4, 'client', 4, 100.00, '', '', '', '2022-06-20 10:52:54', '2022-06-20 10:52:54', NULL),
(3, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:02:32', '2022-09-18 10:02:32', NULL),
(4, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:02:50', '2022-09-18 10:02:50', NULL),
(5, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:03:58', '2022-09-18 10:03:58', NULL),
(6, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:04:33', '2022-09-18 10:04:33', NULL),
(7, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:09:49', '2022-09-18 10:09:49', NULL),
(8, 4, 'freelancer', 39, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-18 10:10:36', '2022-09-18 10:10:36', NULL),
(9, 4, 'freelancer', 40, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-19 06:27:17', '2022-09-19 06:27:17', NULL),
(10, 4, 'freelancer', 43, 10.00, 'package_payment', 'AamarPay', 'Success', '2022-09-20 04:16:45', '2022-09-20 04:16:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_image` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_description`, `keywords`, `meta_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Title', 'test', 'test', 'teetdszf', 'restdrt', 'test', 1, '2022-08-23 10:57:28', '2022-08-23 10:57:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_to_experts`
--

CREATE TABLE `pay_to_experts` (
  `id` int(11) NOT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `paid_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `payment_method` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciept` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requested_amount` double(8,2) NOT NULL DEFAULT 0.00,
  `descriptions` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_to_experts`
--

INSERT INTO `pay_to_experts` (`id`, `paid_by`, `user_id`, `paid_amount`, `payment_method`, `reciept`, `requested_amount`, `descriptions`, `paid_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 100.00, 'tersyt', 'test', 100.00, 'test', 1, '2022-08-23 10:57:52', '2022-08-23 10:57:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Show running projects', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'web design/personal/app etc...',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `user_id`, `name`, `type`, `description`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Tests etse', 'tes', 'test', 'J:\\Server\\tmp\\php399.tmp', NULL, '2022-09-15 23:02:09', NULL),
(2, 8, 'The test Title for portfolio', 'Test', 'Test Details', NULL, '2022-09-10 03:30:46', '2022-09-10 03:30:46', NULL),
(3, 3, 'The test Title for portfolio', 'Test', 'Test', 'J:\\Server\\tmp\\php732C.tmp', '2022-09-15 23:02:38', '2022-09-15 23:02:38', NULL),
(4, 3, 'The test Title for portfolio q', 'Test', 'Teast', '1663305145.jpg', '2022-09-15 23:12:26', '2022-09-15 23:12:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professional_types`
--

CREATE TABLE `professional_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professional_types`
--

INSERT INTO `professional_types` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '0', 'Admin', 1, '2020-05-26 10:43:20', '2022-02-27 18:35:28'),
(2, '4', 'Doctor', 1, '2020-05-26 10:46:12', '2020-05-26 10:46:12'),
(3, '6', 'Engineer', 1, '2020-05-26 10:46:26', '2020-05-26 11:05:49'),
(4, '2', 'EcoFin Advisor', 1, '2020-05-26 10:46:53', '2022-03-11 22:46:44'),
(5, '1', 'Consultant', 1, '2020-05-26 10:47:03', '2022-03-11 22:46:52'),
(6, '5', 'Teacher', 1, '2020-05-26 11:05:23', '2022-03-11 22:47:02'),
(7, '3', 'Lawyer', 1, '2020-05-26 11:05:23', '2022-03-11 22:47:02'),
(8, '4', 'Staff', 1, '2020-05-26 11:05:23', '2022-03-11 22:47:02'),
(9, '10', 'client', 1, '2022-10-10 04:10:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_category_id` bigint(20) UNSIGNED NOT NULL,
  `type` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'fixed/hourly/long_term',
  `client_user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `skills` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biddable` tinyint(1) NOT NULL DEFAULT 1,
  `private` tinyint(1) NOT NULL DEFAULT 0,
  `closed` tinyint(1) NOT NULL DEFAULT 0,
  `cancel_status` int(1) NOT NULL DEFAULT 0,
  `cancel_by_user_id` int(11) DEFAULT NULL,
  `project_approval` int(1) NOT NULL DEFAULT 0,
  `bids` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_category_id`, `type`, `client_user_id`, `name`, `excerpt`, `description`, `price`, `skills`, `attachment`, `biddable`, `private`, `closed`, `cancel_status`, `cancel_by_user_id`, `project_approval`, `bids`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'fixed', 1, 'Need technical writing', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing. I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 100.00, '[\"php\",\"php2\"]', NULL, 1, 0, 1, 0, NULL, 1, 1, 'test', NULL, NULL, NULL),
(2, 1, 'client', 1, 'Seo Expert Needed', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 100.00, '[\"php\",\"php2\"]', NULL, 1, 1, 0, 0, NULL, 1, 1, 'test', NULL, NULL, NULL),
(3, 1, 'client', 1, 'Need technical writing', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing. I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 'I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing. I have a long PHD documentation.Need somebody who has knowledge on philosophy and journal writing.', 100.00, '[\"php\",\"php2\"]', NULL, 1, 0, 0, 1, 1, 1, 1, 'test3', NULL, NULL, NULL),
(4, 1, 'client', 1, 'You will get social media manager and marketing per month', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 100.00, '[\"2\",\"4\"]', NULL, 1, 0, 0, 0, NULL, 1, 1, 'test4', '2022-09-05 06:50:16', NULL, NULL),
(5, 1, 'client', 1, 'You will get social media manager and marketing', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.', 250.00, '[\"3\",\"4\"]', NULL, 1, 0, 0, 0, NULL, 1, 1, 'test4', '2022-09-05 06:50:16', NULL, NULL),
(6, 2, 'Fixed', 4, 'My Project Title', 'My project Summary', 'My Project Details', 120.00, '[]', NULL, 0, 1, 0, 0, NULL, 0, 0, 'my-project-title20220912-114153', '2022-09-12 05:41:53', '2022-09-12 05:41:53', NULL),
(7, 2, 'Fixed', 4, 'My Project Title', 'My project Summary', 'My Project Details', 120.00, '[]', NULL, 0, 1, 0, 0, NULL, 0, 0, 'my-project-title20220912-114422', '2022-09-12 05:44:22', '2022-09-12 05:44:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_bids`
--

CREATE TABLE `project_bids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `bid_by_user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_bids`
--

INSERT INTO `project_bids` (`id`, `project_id`, `bid_by_user_id`, `amount`, `message`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 100.00, 'Test', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `parent_id`, `photo`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test New 1', 0, NULL, 'test-new-1-HFmZG', '2022-06-29 23:10:20', '2022-06-29 23:10:20', NULL),
(2, 'Laravel', 0, NULL, 'laravel-pIj4W', '2022-08-23 04:40:23', '2022-08-23 04:40:23', NULL),
(3, 'Test Cater', 0, NULL, 'test-cater-eLg56', '2022-09-20 05:32:05', '2022-09-20 05:32:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_users`
--

CREATE TABLE `project_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hired_at` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_users`
--

INSERT INTO `project_users` (`id`, `project_id`, `user_id`, `hired_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 100.00, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `refer_by` bigint(20) NOT NULL,
  `join_at` datetime NOT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `user_id`, `refer_by`, `join_at`, `meta`) VALUES
(1, 18, 3, '2022-08-30 13:15:52', '[]'),
(2, 19, 3, '2022-09-15 06:17:52', '[]'),
(3, 20, 3, '2022-09-16 10:47:34', '[]'),
(4, 21, 3, '2022-09-16 10:48:30', '[]'),
(5, 22, 2, '2022-09-16 10:51:28', '[]'),
(6, 43, 3, '2022-09-20 09:15:39', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `referral_codes`
--

CREATE TABLE `referral_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referral_codes`
--

INSERT INTO `referral_codes` (`id`, `user_id`, `code`, `type`, `label`, `desc`, `created_at`, `updated_at`) VALUES
(1, 3, '5e6c8eb5', '0', NULL, NULL, '2022-03-30 06:16:54', '2022-03-30 06:16:54'),
(2, 1, 'c13f5459', '0', NULL, NULL, '2022-05-16 23:52:28', '2022-05-16 23:52:28'),
(3, 18, '644aa01e', '0', NULL, NULL, '2022-08-30 07:23:17', '2022-08-30 07:23:17'),
(4, 16, '51e4fb53', '0', NULL, NULL, '2022-08-30 07:47:17', '2022-08-30 07:47:17'),
(5, 4, 'df7b17ed', '0', NULL, NULL, '2022-09-10 00:04:36', '2022-09-10 00:04:36'),
(6, 20, 'f0146dcf', '0', NULL, NULL, '2022-09-16 04:47:35', '2022-09-16 04:47:35'),
(7, 21, 'ba4a023b', '0', NULL, NULL, '2022-09-16 04:48:30', '2022-09-16 04:48:30'),
(8, 22, 'cc86a6b4', '0', NULL, NULL, '2022-09-16 04:51:28', '2022-09-16 04:51:28'),
(9, 2, 'ba804de4', '0', NULL, NULL, '2022-09-16 04:52:54', '2022-09-16 04:52:54'),
(10, 26, '6220d1e6', '0', NULL, NULL, '2022-09-17 07:35:11', '2022-09-17 07:35:11'),
(11, 27, '73e3756b', '0', NULL, NULL, '2022-09-17 07:51:38', '2022-09-17 07:51:38'),
(12, 30, '2022-09-1710000', '0', NULL, NULL, '2022-09-17 08:19:47', '2022-09-17 08:19:47'),
(13, 31, '202210000', '0', NULL, NULL, '2022-09-17 08:20:49', '2022-09-17 08:20:49'),
(14, 32, '20228378', '0', NULL, NULL, '2022-09-17 08:21:32', '2022-09-17 08:21:32'),
(15, 33, '202254264', '0', NULL, NULL, '2022-09-17 08:22:11', '2022-09-17 08:22:11'),
(16, 34, '202252752', '0', NULL, NULL, '2022-09-17 08:33:10', '2022-09-17 08:33:10'),
(17, 40, '202224196', '0', NULL, NULL, '2022-09-19 06:27:18', '2022-09-19 06:27:18'),
(18, 43, '202278687', '0', NULL, NULL, '2022-09-20 04:16:46', '2022-09-20 04:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `reviewer_user_id` bigint(20) UNSIGNED NOT NULL,
  `reviewed_user_id` int(11) NOT NULL,
  `reviewed_user_role_id` int(11) DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double(8,2) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0-not published, 1-published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `project_id`, `reviewer_user_id`, `reviewed_user_id`, `reviewed_user_role_id`, `review`, `rating`, `published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 'testy', 4.00, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'web', NULL, NULL),
(10, 'CEO', 'web', '2022-08-23 04:27:00', '2022-08-23 04:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 9),
(1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `service_payments`
--

CREATE TABLE `service_payments` (
  `id` bigint(20) NOT NULL,
  `service_package_id` bigint(20) NOT NULL,
  `service_package_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `service_owner_id` bigint(20) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `payment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'service_payment',
  `admin_profit` decimal(8,2) NOT NULL,
  `freelancer_profit` decimal(8,2) NOT NULL,
  `payment_method` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancel_status` tinyint(4) NOT NULL DEFAULT 0,
  `cancel_requested` tinyint(4) NOT NULL DEFAULT 0,
  `cancel_reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_payments`
--

INSERT INTO `service_payments` (`id`, `service_package_id`, `service_package_type`, `user_id`, `service_owner_id`, `amount`, `payment_type`, `admin_profit`, `freelancer_profit`, `payment_method`, `payment_details`, `cancel_status`, `cancel_requested`, `cancel_reason`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'fixed', 1, 3, '100', 'service_payment', '100.00', '200.00', 'dfzsg', 'test', 1, 1, 'test', '2022-08-23 10:59:10', '2022-08-23 10:59:10', NULL),
(2, 1, 'fixed', 1, 1, '100', 'service_payment', '100.00', '200.00', 'dfzsg', 'test', 1, 0, 'test', '2022-08-23 10:59:10', '2022-08-23 10:59:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`) VALUES
(1, 'site_name', 'InvestPlan', '2022-03-30 17:40:42'),
(2, 'site_email', 'admin@gmail.com', '2022-03-30 05:39:14'),
(3, 'site_copyright', ':Sitename &copy; :year. All Rights Reserved.', '2022-03-29 23:35:26'),
(4, 'site_disclaimer', '', '2022-03-29 23:35:26'),
(5, 'site_merchandise', '{\"purchase_code\":\"1a2s1d4f5c4z2a1s3d4t5r8q7e6r7y9t4h2j5\",\"name\":\"Admin\",\"email\":\"asadcse100@gmail.com\"}', '2022-03-30 05:37:45'),
(6, 'main_website', '', '2022-03-29 23:35:26'),
(7, 'front_page_enable', 'yes', '2022-03-29 23:35:26'),
(8, 'front_page_extra', 'on', '2022-03-29 23:35:26'),
(9, 'front_page_title', 'Welcome', '2022-03-29 23:35:27'),
(10, 'invest_page_enable', 'yes', '2022-03-29 23:35:27'),
(11, 'time_zone', 'Asia/Dhaka', '2022-03-29 23:35:27'),
(12, 'date_format', 'd M, Y', '2022-03-29 23:35:27'),
(13, 'time_format', 'h:i A', '2022-03-29 23:35:27'),
(14, 'decimal_fiat_display', '2', '2022-03-29 23:35:27'),
(15, 'decimal_crypto_display', '4', '2022-03-29 23:35:27'),
(16, 'decimal_fiat_calc', '2', '2022-03-29 23:35:27'),
(17, 'decimal_crypto_calc', '6', '2022-03-29 23:35:27'),
(18, 'signup_allow', 'enable', '2022-04-07 18:10:52'),
(19, 'email_verification', 'on', '2022-04-07 18:10:52'),
(20, 'batch_update', '120', '2022-03-29 23:35:27'),
(21, 'maintenance_mode', 'off', '2022-03-29 23:35:27'),
(22, 'maintenance_notice', 'We are upgrading our system. Please check after 30 minutes.', '2022-03-29 23:35:27'),
(23, 'mail_from_name', 'Investplan', '2022-03-30 18:39:55'),
(24, 'mail_from_email', 'asadcse100@gmail.com', '2022-03-30 10:44:28'),
(25, 'mail_global_footer', 'Best Regard, \r\nTeam of [[site_name]]', '2022-03-30 10:44:28'),
(26, 'mail_driver', 'smtp', '2022-03-30 10:44:28'),
(27, 'mail_smtp_host', 'smtp.gmail.com', '2022-03-30 10:44:28'),
(28, 'mail_smtp_port', '587', '2022-03-29 23:35:27'),
(29, 'mail_smtp_secure', 'tls', '2022-03-29 23:35:27'),
(30, 'mail_smtp_user', 'janifer100100@gmail.com', '2022-03-30 10:44:28'),
(31, 'mail_smtp_password', 'rony880n', '2022-03-30 10:44:28'),
(32, 'mail_recipient', 'asadcse100@gmail.com', '2022-03-30 10:44:28'),
(33, 'mail_recipient_alter', '', '2022-03-29 23:35:27'),
(34, 'youtube_link', '', '2022-03-29 23:35:27'),
(35, 'linkedin_link', '', '2022-03-29 23:35:27'),
(36, 'twitter_link', '', '2022-03-29 23:35:27'),
(37, 'facebook_link', '', '2022-03-29 23:35:27'),
(38, 'medium_link', '', '2022-03-29 23:35:27'),
(39, 'telegram_link', '', '2022-03-29 23:35:27'),
(40, 'github_link', '', '2022-03-29 23:35:27'),
(41, 'pinterest_link', '', '2022-03-29 23:35:27'),
(42, 'app_acquire', '{\"app\":\"Invest\",\"secret\":\"a12245678999ca31eeb35046d4d13a11\",\"cipher\":\"d4d13a11\",\"key\":\"245678\",\"update\":\"2537354402\"}', '2022-03-30 06:48:18'),
(43, 'exratesapi_access_key', '', '2022-03-29 23:35:27'),
(44, 'recaptcha_site_key', '', '2022-03-29 23:35:27'),
(45, 'recaptcha_secret_key', '', '2022-03-29 23:35:27'),
(46, 'custom_stylesheet', 'off', '2022-03-29 23:35:27'),
(47, 'header_code', '', '2022-03-29 23:35:27'),
(48, 'footer_code', '', '2022-03-29 23:35:27'),
(49, 'main_nav', '[1,4,5]', '2022-03-30 05:35:28'),
(50, 'main_menu', '[]', '2022-03-29 23:35:27'),
(51, 'footer_menu', '[4,6,7]', '2022-03-30 05:35:28'),
(52, 'page_terms', '6', '2022-03-30 05:35:28'),
(53, 'page_privacy', '7', '2022-03-30 05:35:28'),
(54, 'page_fee_deposit', '', '2022-03-29 23:35:27'),
(55, 'page_fee_withdraw', '', '2022-03-29 23:35:27'),
(56, 'page_contact', '5', '2022-03-30 05:35:28'),
(57, 'page_contact_form', 'on', '2022-03-29 23:35:27'),
(58, 'ui_page_skin', 'dark', '2022-03-29 23:35:27'),
(59, 'ui_auth_skin', 'dark', '2022-03-29 23:35:27'),
(60, 'ui_auth_layout', 'default', '2022-03-29 23:35:27'),
(61, 'ui_theme_mode', 'light', '2022-03-29 23:35:27'),
(62, 'ui_theme_skin', 'default', '2022-03-29 23:35:27'),
(63, 'ui_sidebar_user', 'white', '2022-03-29 23:35:27'),
(64, 'ui_sidebar_admin', 'darker', '2022-03-29 23:35:27'),
(65, 'ui_theme_mode_admin', 'light', '2022-03-29 23:35:27'),
(66, 'ui_theme_skin_admin', 'default', '2022-03-29 23:35:27'),
(67, 'payout_batch', 'a12245678999ca31eeb35046d4d13a11', '2022-03-30 05:38:43'),
(68, 'signup_bonus_allow', 'no', '2022-03-30 12:23:29'),
(69, 'signup_bonus_amount', '100', '2022-03-30 11:54:38'),
(70, 'deposit_bonus_allow', 'yes', '2022-03-30 11:54:38'),
(71, 'deposit_bonus_amount', '20', '2022-03-30 11:54:38'),
(72, 'deposit_bonus_type', 'percent', '2022-03-30 11:54:38'),
(73, 'referral_system', 'yes', '2022-03-30 11:46:25'),
(74, 'referral_invite_title', 'Refer Us & Earn', '2022-03-29 23:35:27'),
(75, 'referral_invite_text', 'Use the below link to invite your friends.', '2022-03-29 23:35:27'),
(76, 'referral_signup_user', 'no', '2022-03-30 12:22:25'),
(77, 'referral_signup_user_bonus', '0', '2022-03-29 23:35:27'),
(78, 'referral_signup_user_reward', 'no', '2022-03-29 23:35:27'),
(79, 'referral_deposit_user', 'yes', '2022-03-30 11:55:05'),
(80, 'referral_deposit_user_bonus', '10', '2022-03-30 12:21:57'),
(81, 'referral_deposit_user_type', 'percent', '2022-03-29 23:35:27'),
(82, 'referral_signup_referer', 'no', '2022-03-30 12:20:39'),
(83, 'referral_signup_referer_bonus', '0', '2022-03-29 23:35:27'),
(84, 'referral_deposit_referer', 'yes', '2022-03-30 11:55:05'),
(85, 'referral_deposit_referer_bonus', '10', '2022-03-30 12:22:41'),
(86, 'referral_deposit_referer_type', 'percent', '2022-03-29 23:35:27'),
(87, 'alert_wd_account', 'on', '2022-03-29 23:35:27'),
(88, 'alert_profile_basic', 'on', '2022-03-29 23:35:27'),
(89, 'header_notice_show', 'no', '2022-03-29 23:35:27'),
(90, 'header_notice_title', '', '2022-03-29 23:35:27'),
(91, 'header_notice_text', '', '2022-03-29 23:35:27'),
(92, 'header_notice_link', '', '2022-03-29 23:35:27'),
(93, 'system_service', 'OOO55FNKK32', '2022-04-03 14:28:08'),
(94, 'api_service', 'no', '2022-03-30 06:48:21'),
(95, 'deposit_service', 'a90c6258', '2022-03-30 05:37:47'),
(96, 'deposit_limit_request', '0', '2022-03-30 10:52:36'),
(97, 'deposit_cancel_timeout', '0', '2022-03-30 06:11:08'),
(98, 'deposit_fiat_minimum', '100', '2022-03-30 06:11:08'),
(99, 'deposit_crypto_minimum', '500', '2022-03-30 06:11:08'),
(100, 'deposit_fiat_maximum', '0', '2022-03-29 23:35:27'),
(101, 'deposit_crypto_maximum', '0', '2022-03-29 23:35:27'),
(102, 'deposit_disable_request', 'no', '2022-03-30 06:53:48'),
(103, 'deposit_disable_title', 'Temporarily unavailable!', '2022-03-29 23:35:27'),
(104, 'deposit_disable_notice', 'Sorry, we are upgrading our deposit system. Please check after sometimes. We apologize for any inconvenience.', '2022-03-29 23:35:27'),
(105, 'payout_check', '1661335050', '2022-08-24 09:27:30'),
(106, 'withdraw_service', 'a90c6258', '2022-03-30 05:37:47'),
(107, 'withdraw_limit_request', '3', '2022-03-30 06:11:00'),
(108, 'withdraw_cancel_timeout', 'yes', '2022-03-29 23:35:27'),
(109, 'withdraw_fiat_minimum', '1', '2022-03-30 10:59:03'),
(110, 'withdraw_fiat_maximum', '100', '2022-03-30 18:34:16'),
(111, 'withdraw_crypto_minimum', '500', '2022-03-30 06:11:00'),
(112, 'withdraw_crypto_maximum', '600', '2022-03-30 18:34:16'),
(113, 'withdraw_disable_request', 'no', '2022-03-30 10:59:03'),
(114, 'withdraw_disable_title', 'Temporarily unavailable!', '2022-03-29 23:35:27'),
(115, 'withdraw_disable_notice', 'Sorry, we are upgrading our withdrawal system. Please check after sometimes. We apologize for any inconvenience.', '2022-03-29 23:35:27'),
(116, 'app_queue', '0', '2022-03-29 23:35:27'),
(117, 'base_currency', 'USD', '2022-03-29 23:35:27'),
(118, 'alter_currency', 'BTC', '2022-03-30 12:15:29'),
(119, 'supported_currency', '{\"USD\":\"on\",\"EUR\":\"on\",\"GBP\":\"on\",\"CAD\":\"on\",\"AUD\":\"on\",\"TRY\":\"on\",\"RUB\":\"on\",\"INR\":\"on\",\"BRL\":\"on\",\"NGN\":\"on\",\"PKR\":\"on\",\"VND\":\"on\",\"TZS\":\"on\",\"SAR\":\"on\",\"MXN\":\"on\",\"GHS\":\"on\",\"KES\":\"on\",\"BTC\":\"on\",\"ETH\":\"on\",\"LTC\":\"on\",\"BCH\":\"on\",\"BNB\":\"on\",\"ADA\":\"on\",\"XRP\":\"on\",\"USDC\":\"on\",\"USDT\":\"on\",\"TRX\":\"on\"}', '2022-05-17 06:19:00'),
(120, 'fiat_rounded', 'up', '2022-03-29 23:35:27'),
(121, 'crypto_rounded', 'up', '2022-03-30 18:26:09'),
(122, 'exchange_method', 'manual', '2022-03-30 12:13:31'),
(123, 'exchange_auto_update', '30', '2022-03-29 23:35:27'),
(124, 'exchange_last_update', '1648618525', '2022-03-29 23:35:27'),
(125, 'manual_exchange_rate', '{\"USD\":\"1\",\"EUR\":\"0.89830\",\"GBP\":\"0\",\"CAD\":\"0\",\"BTC\":\"0.0000211476\",\"ETH\":\"0.0002944886\",\"LTC\":\"0\",\"BNB\":\"0\"}', '2022-03-30 12:13:31'),
(126, 'health_checker', '1', '2022-05-06 18:38:03'),
(127, 'top_iv_plan_x0', '3', '2022-03-30 05:35:28'),
(128, 'top_iv_plan_x1', '1', '2022-03-30 05:35:28'),
(129, 'top_iv_plan_x2', '2', '2022-03-30 05:35:28'),
(130, 'iv_plan_order', 'featured', '2022-03-29 23:35:27'),
(131, 'iv_show_plans', 'default', '2022-03-29 23:35:27'),
(132, 'iv_plan_desc_show', 'no', '2022-03-29 23:35:27'),
(133, 'iv_plan_total_percent', 'yes', '2022-03-29 23:35:27'),
(134, 'iv_plan_pg_heading', 'Investment Plans', '2022-03-29 23:35:27'),
(135, 'iv_plan_pg_title', 'Choose your favourite plan and start earning now.', '2022-03-29 23:35:27'),
(136, 'iv_plan_pg_text', 'Here is our several investment plans. You can invest daily, weekly or monthly and get higher returns in your investment.', '2022-03-29 23:35:27'),
(137, 'iv_launched_date', '03/30/2022', '2022-03-29 23:35:27'),
(138, 'iv_cancel_timeout', '15', '2022-03-29 23:35:27'),
(139, 'iv_admin_confirmtion', 'yes', '2022-03-29 23:35:27'),
(140, 'iv_disable_purchase', 'no', '2022-03-29 23:35:27'),
(141, 'iv_disable_title', 'Temporarily unavailable!', '2022-03-29 23:35:27'),
(142, 'iv_disable_notice', '', '2022-03-29 23:35:27'),
(143, 'iv_profit_payout', 'everytime', '2022-03-29 23:35:27'),
(144, 'iv_profit_payout_amount', '100', '2022-03-29 23:35:27'),
(145, 'iv_plan_fx_currencies', '[]', '2022-03-29 23:35:27'),
(146, 'iv_weekend_days', '[]', '2022-03-29 23:35:27'),
(147, 'language_default_public', 'en', '2022-03-29 23:35:29'),
(148, 'language_default_system', 'en', '2022-03-29 23:35:29'),
(149, 'language_show_as', 'default', '2022-03-29 23:35:29'),
(150, 'language_switcher', 'off', '2022-03-29 23:35:29'),
(151, 'social_auth', 'off', '2022-03-29 23:35:30'),
(152, 'gdpr_enable', 'yes', '2022-03-30 12:25:19'),
(153, 'cookie_consent_text', 'This website uses cookies. By continuing to use this website, you agree to their use. For details, please check our [[privacy]].', '2022-03-29 23:35:30'),
(154, 'referral_show_referred_users', 'yes', '2022-03-30 11:55:05'),
(155, 'referral_user_table_opts', '[\"earning\",\"compact\",null]', '2022-03-30 11:55:05'),
(156, 'referral_invite_redirect', 'register', '2022-03-29 23:35:30'),
(157, 'cookie_banner_position', 'bbox-left', '2022-03-29 23:35:30'),
(158, 'cookie_banner_background', 'light', '2022-03-29 23:35:30'),
(159, 'seo_description', '', '2022-03-29 23:35:30'),
(160, 'login_seo_title', '', '2022-03-29 23:35:30'),
(161, 'registration_seo_title', '', '2022-03-29 23:35:30'),
(162, 'og_title', '', '2022-03-29 23:35:30'),
(163, 'og_description', '', '2022-03-29 23:35:30'),
(164, 'header_notice_date', '', '2022-03-29 23:35:30'),
(165, 'deposit_amount_base', 'yes', '2022-05-17 06:12:40'),
(166, 'rates_ticker_display', 'no', '2022-03-29 23:35:30'),
(167, 'rates_ticker_from', 'base', '2022-03-29 23:35:30'),
(168, 'rates_ticker_fx', 'only', '2022-03-29 23:35:30'),
(169, 'iv_plan_capital_show', 'yes', '2022-03-29 23:35:30'),
(170, 'iv_plan_payout_show', 'no', '2022-03-29 23:35:30'),
(171, 'iv_plan_terms_show', 'no', '2022-03-29 23:35:30'),
(172, 'application_rcv', '2120115', '2022-03-29 23:35:31'),
(173, 'update_installed', '1648618531', '2022-03-29 23:35:31'),
(174, 'installed_apps', '1648618548', '2022-03-29 23:35:48'),
(175, 'baseurl_apps', 'localhost/invest', '2022-04-03 14:22:09'),
(176, 'system_super_admin', '1', '2022-03-29 23:38:36'),
(177, 'quick_setup_done', '1648618831', '2022-03-29 23:40:31'),
(178, 'exratesapi_error_msg', 'Access key was not sepecified in application.', '2022-08-24 09:27:34'),
(179, 'cache_version', '1648640701', '2022-03-30 05:45:01'),
(180, 'payout_locked_profit', NULL, '2022-03-30 05:45:01'),
(181, 'payout_locked_plan', NULL, '2022-03-30 05:45:01'),
(182, 'signup_form_fields', '{\"profile_phone\":{\"show\":\"no\",\"req\":\"no\"},\"profile_dob\":{\"show\":\"no\",\"req\":\"no\"},\"profile_country\":{\"show\":\"yes\",\"req\":\"no\"}}', '2022-04-07 18:10:08'),
(183, 'referral_deposit_user_allow', 'all', '2022-03-30 12:21:49'),
(184, 'referral_deposit_user_max', NULL, '2022-08-27 07:15:20'),
(185, 'referral_deposit_referer_allow', 'all', '2022-03-30 12:22:41'),
(186, 'referral_deposit_referer_max', NULL, '2022-08-27 07:15:20'),
(187, 'cookie_deny_btn', 'yes', '2022-03-30 06:25:19'),
(188, 'cookie_accept_btn_txt', 'I Agree', '2022-03-30 06:25:19'),
(189, 'cookie_deny_btn_txt', 'Deny', '2022-03-30 06:25:19'),
(190, 'instagram_link', '', '2022-03-30 11:40:42'),
(191, 'whatsapp_link', '', '2022-03-30 11:40:42'),
(192, 'reddit_link', '', '2022-03-30 11:40:42'),
(193, 'website_logo_dark', 'brand/6cFlEG0lzL85l4bn5LXHxabWfuYKetYuMSTjmu8S.png', '2022-03-30 11:48:52'),
(194, 'website_logo_light', 'brand/Z5ARQLaC7CxBuPg0TsDop9cEnhNvSlAG8XuoD4nk.png', '2022-03-30 11:49:00'),
(195, 'website_logo_mail', 'brand/x66qD8bnqTW31BlfMGsf8LW1CQqhXVln1GeR71Bn.png', '2022-03-30 11:49:11'),
(196, 'website_logo_dark2x', 'brand/f3tkrF271nTWLPQabKlMzPoWX87oLXrr1YODVrBC.png', '2022-03-30 11:49:18'),
(197, 'website_logo_light2x', 'brand/0lAevD8zT6spbFDkseq0BnBRkEigNCtavk5qLo5q.png', '2022-03-30 11:49:25'),
(198, 'referral__token', 'ludm9BHeRGd7l4HKq77Fes6W3fJsA4gCgW2EIWI4', '2022-08-27 01:15:20'),
(199, 'referral_form_prefix', 'referral', '2022-08-27 01:15:20'),
(200, 'referral_form_type', 'referral-settings', '2022-08-27 01:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `parent_id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Codeigniter', '2019-12-03 23:23:45', '2020-04-23 21:23:57', '2020-04-23 21:23:57'),
(2, NULL, 'PayPal API', '2019-12-03 23:28:33', '2020-04-23 21:20:27', NULL),
(3, NULL, 'eCommerce', '2019-12-03 23:28:43', '2020-04-23 21:19:58', NULL),
(4, NULL, 'CMS', '2019-12-03 23:28:54', '2020-04-23 21:19:30', NULL),
(5, NULL, 'Shopping Carts', '2019-12-03 23:29:00', '2020-04-23 21:19:11', NULL),
(6, NULL, 'AJAX', '2019-12-03 23:29:33', '2020-04-23 21:18:46', NULL),
(7, NULL, 'JavaScript', '2019-12-12 05:16:00', '2020-04-23 21:18:27', NULL),
(8, NULL, 'PHP', '2020-02-26 04:11:42', '2020-04-23 21:17:41', NULL),
(9, NULL, 'MySQL', '2020-04-23 21:23:02', '2020-04-23 21:23:02', NULL),
(10, NULL, 'HTML5', '2020-04-23 21:24:29', '2020-04-23 21:24:29', NULL),
(11, NULL, 'Codeignite', '2020-04-23 21:26:35', '2020-04-23 21:26:35', NULL),
(12, NULL, 'HTML', '2020-04-23 21:27:03', '2020-04-23 21:27:03', NULL),
(13, NULL, 'jQuery / Prototype', '2020-04-23 21:27:25', '2020-04-23 21:27:25', NULL),
(14, NULL, 'Website Management', '2020-04-23 21:27:48', '2020-04-23 21:27:48', NULL),
(15, NULL, 'Software Development', '2020-04-23 21:28:07', '2020-04-23 21:28:07', NULL),
(16, NULL, 'Stripe', '2020-04-23 21:28:34', '2020-04-23 21:28:34', NULL),
(17, NULL, 'Plugin', '2020-04-23 21:28:46', '2020-04-23 21:28:46', NULL),
(18, NULL, 'User experience design', '2020-04-23 21:31:34', '2020-04-23 21:31:34', NULL),
(19, NULL, 'ASP development', '2020-04-23 21:31:48', '2020-04-23 21:31:48', NULL),
(20, NULL, 'Shopify development', '2020-04-23 21:32:03', '2020-04-23 21:32:03', NULL),
(21, NULL, 'English proofreading', '2020-04-23 21:32:17', '2020-04-23 21:32:17', NULL),
(22, NULL, 'SEO/Content writing', '2020-04-23 21:32:34', '2020-04-23 21:32:34', NULL),
(23, NULL, 'Photography', '2020-04-23 21:32:47', '2020-04-23 21:32:47', NULL),
(24, NULL, 'Animation', '2020-04-23 21:32:56', '2020-04-23 21:32:56', NULL),
(25, NULL, 'Virtual assistant', '2020-04-23 21:33:04', '2020-04-23 21:33:04', NULL),
(26, NULL, 'Lead generation', '2020-04-23 21:33:18', '2020-04-23 21:33:18', NULL),
(27, NULL, 'Data mining', '2020-04-23 21:33:35', '2020-04-23 21:33:35', NULL),
(28, NULL, 'Social media marketing', '2020-04-23 21:34:01', '2020-04-23 21:34:01', NULL),
(29, NULL, 'Video editing', '2020-04-23 21:34:15', '2020-04-23 21:34:15', NULL),
(30, NULL, 'WordPress development', '2020-04-23 21:34:28', '2020-04-23 21:34:28', NULL),
(31, NULL, 'AngularJS development', '2020-04-23 21:34:39', '2020-04-23 21:34:39', NULL),
(32, NULL, 'Voice talent', '2020-04-23 21:34:50', '2020-04-23 21:34:50', NULL),
(33, NULL, 'Accounting', '2020-04-23 21:35:01', '2020-04-23 21:35:01', NULL),
(34, NULL, 'Android development', '2020-04-23 21:35:14', '2020-04-23 21:35:14', NULL),
(35, NULL, 'iOS development', '2020-04-23 21:35:25', '2020-04-23 21:35:25', NULL),
(36, NULL, 'Data visualization', '2020-04-23 21:35:37', '2020-04-23 21:35:37', NULL),
(37, NULL, 'AutoCAD', '2020-04-23 21:35:45', '2020-04-23 21:35:45', NULL),
(38, NULL, '3D design', '2020-04-23 21:35:53', '2020-04-23 21:35:53', NULL),
(39, NULL, 'Spreadsheets', '2020-04-23 21:36:41', '2020-04-23 21:36:41', NULL),
(40, NULL, 'Blockchain', '2020-04-23 21:36:57', '2020-04-23 21:36:57', NULL),
(41, NULL, 'Blog Writing', '2020-04-23 21:37:55', '2020-04-23 21:37:55', NULL),
(42, NULL, 'Understanding & Interpreting Analytics', '2020-04-23 21:38:07', '2020-04-23 21:38:07', NULL),
(43, NULL, 'Resume Writing', '2020-04-23 21:38:23', '2020-04-23 21:38:23', NULL),
(44, NULL, 'Content editing', '2020-04-23 21:43:10', '2020-04-23 21:43:10', NULL),
(45, NULL, 'Logo design', '2020-04-23 21:43:22', '2020-04-23 21:43:22', NULL),
(46, NULL, 'Illustration', '2020-04-23 21:43:31', '2020-04-23 21:43:31', NULL),
(47, NULL, 'Brochure, leaflet and flyer creation', '2020-04-23 21:43:52', '2020-04-23 21:43:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(29, 5, 9, '2022-08-23 04:26:26', '2022-08-23 04:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `system_configurations`
--

CREATE TABLE `system_configurations` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_configurations`
--

INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'symbol_format', '1', '2020-07-22 11:12:22', '2020-07-22 08:35:32'),
(2, 'system_default_currency', '2', '2019-12-08 06:03:10', '2020-07-22 08:35:29'),
(3, 'no_of_decimals', '2', '2019-12-12 08:04:43', '2020-07-22 08:35:32'),
(4, 'project_approval', '0', '2019-12-19 11:52:55', '2022-08-11 00:08:49'),
(5, 'paypal_activation_checkbox', '0', '2019-12-25 03:26:37', '2022-09-13 05:06:55'),
(6, 'paypal_sandbox_checkbox', '0', '2019-12-25 03:26:37', '2022-09-13 05:06:55'),
(7, 'stripe_activation_checkbox', '0', '2019-12-25 03:26:37', '2022-09-13 05:07:03'),
(8, 'google_login_activation_checkbox', '0', '2019-12-25 03:26:47', '2022-09-09 23:12:44'),
(9, 'google_analytics_activation_checkbox', '1', '2019-12-25 03:26:47', '2020-07-25 04:45:13'),
(10, 'facebook_login_activation_checkbox', '0', '2019-12-25 03:26:47', '2022-09-09 23:12:41'),
(11, 'facebook_chat_activation_checkbox', '1', '2019-12-25 03:26:47', '2020-07-25 04:45:05'),
(12, 'site_name', 'App', '2019-12-25 03:36:16', '2022-12-28 08:15:06'),
(13, 'site_motto', 'Lets Work', '2019-12-25 03:36:16', '2020-07-26 11:08:04'),
(14, 'site_address', 'In ut dolore adipisc', '2019-12-25 03:36:16', '2020-02-27 04:09:12'),
(15, 'site_phone', '+1 (918) 126-5336', '2019-12-25 03:36:16', '2020-02-27 04:09:12'),
(16, 'site_email', 'fovub@mailinator.net', '2019-12-25 03:36:16', '2020-02-27 04:09:12'),
(17, 'freelancer_policy', 'Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diﬀerences in the laws no matter where your staﬀ members are located.SPELL OUT COMPLIANCE PROCEDURES……including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATION’S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organization’s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciﬁc procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your company’s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.', '2019-12-29 06:24:20', '2019-12-29 00:59:18'),
(18, 'client_policy', '6 Tips for Creating an Effective Copyright PolicyDemonstrate respect for the copyrights of others and reduce the risk of infringementEach day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways — it’s just the normal course of doing business. But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your company’s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your company’s needs and decreases your infringement risk.SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTS……in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staﬀ,you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clients’ or business partners’ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?PROVIDE INFORMATION ON COPYRIGHT LAWYour colleagues may lack even a basic understanding of copyright law and how it aﬀects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.ADDRESS GLOBAL COPYRIGHT ISSUESIf your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diﬀerences in the laws no matter where your staﬀ members are located.SPELL OUT COMPLIANCE PROCEDURES……including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATION’S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organization’s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciﬁc procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your company’s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.', '2019-12-29 06:24:40', '2019-12-29 00:58:56'),
(19, 'privacy_policy', '<p><b>6 Tips for Creating an Effective Copyright</b></p><p>PolicyDemonstrate respect for the copyrights of others and reduce the risk of infringementEach day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways — it’s just the normal course of doing business.</p><p>But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your company’s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your company’s needs and decreases your infringement risk.SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTS……in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staﬀ,you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clients’ or business partners’ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?PROVIDE INFORMATION ON COPYRIGHT LAWYour colleagues may lack even a basic understanding of copyright law and how it aﬀects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.ADDRESS GLOBAL COPYRIGHT ISSUESIf your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diﬀerences in the laws no matter where your staﬀ members are located.SPELL OUT COMPLIANCE PROCEDURES……including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATION’S OWN COPYRIGHTED MATERIALSFor example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization?</p><p>When is it okay to distribute your organization’s own materials?ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENTEncourage employees to do the right thing, and to follow speciﬁc procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your company’s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in trainingfor existing staff.<br></p>', '2019-12-29 06:25:00', '2020-03-11 03:24:02'),
(20, 'conditions_copyright_policy', '<header class=\"entry-header\" style=\"box-sizing: inherit; font-family: &quot;Myriad W01&quot;, myriad-pro, &quot;Myriad Pro&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, sans-serif; font-size: 18px;\"><h1 class=\"entry-title page-title\" style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 3.9rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: 39px;\"><span style=\"font-family: inherit; font-size: 2.6rem; font-style: inherit;\">Demonstrate respect for the copyrights of others and reduce the risk of infringement</span><br></h1></header><div class=\"entry-content\" style=\"box-sizing: inherit; border: 0px; font-family: &quot;Myriad W01&quot;, myriad-pro, &quot;Myriad Pro&quot;, &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, sans-serif; font-size: 18px; margin: 1.5em 0px 0px; outline: 0px; padding: 0px; vertical-align: baseline;\"><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Each day employees share copyrighted content with one another in emails, in sales presentations, in response to clients and business partners and in many other ways — it’s just the normal course of doing business. But in the rush to get things done, even well-intentioned employees may unknowingly share copyrighted material without permission to do so, exposing your organization to the risk of copyright infringement.</p><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">By developing a corporate copyright policy, you can provide clear guidelines to employees around the use of published materials and demonstrate your company’s commitment to respecting the copyrights of others. Here are six steps to help you craft a policy that meets your company’s needs and decreases your infringement risk.</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">SOLICIT INPUT FROM&nbsp;COPYRIGHT EXPERTS…</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">…in your organization who may have suggestions for issues to address in your policy. Outside of library/information services, legal and compliance staﬀ,<br style=\"box-sizing: inherit;\">you might expand the group to include Marketing and Corporate Communications. For example, should you address the subject of clients’ or business partners’ requests for information? And what about guidance for Marketing and Sales teams on the use of images or video content in sales materials?</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">PROVIDE INFORMATION ON COPYRIGHT LAW</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Your colleagues may lack even a basic understanding of copyright law and how it aﬀects them. Provide foundational information on copyright law in your policy. Refer to the Copyright Basics section on copyright.com to get started. You can also make it easy for employees to get up-to-speed by including a link to the informative and fun Copyright Basics video from Copyright Clearance Center.</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">ADDRESS GLOBAL COPYRIGHT ISSUES</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">If your organization employs workers in multiple countries, provide information to ensure that employees share content responsibly both domestically and across borders. Copyright laws can vary from one country to the next; thus, it is vitally important that you acknowledge the diﬀerences in the laws no matter where your staﬀ members are located.</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">SPELL OUT COMPLIANCE PROCEDURES…</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">…including whom employees should contact within your organization with copyright questions. Explain how employees can determine if they need copyright permission and how to obtain permissions from rightsholders (publishers and authors).</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">INFORM EMPLOYEES ABOUT THE USE OF YOUR ORGANIZATION’S OWN COPYRIGHTED MATERIALS</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">For example: How should employees handle the issue of works for hire with contractors and other non-employees who produce work for your organization? When is it okay to distribute your organization’s own materials?</p><h2 style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-size: 2.6rem; font-style: inherit; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(64, 64, 64); line-height: normal;\">ADVISE EMPLOYEES ON THE PROPER HANDLING OF INFRINGEMENT</h2><p style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Encourage employees to do the right thing, and to follow speciﬁc procedures when they witness instances of copyright infringement within your organization. Also, identify procedures for how employees should handle infringement of your company’s own works that they discover online or in the marketplace.&nbsp;Once you have developed your policy, be sure to formally introduce these guidelines to employees and issue periodic reminders. You may also consider including copyright compliance in your new employee orientation as well as in training<br style=\"box-sizing: inherit;\">for existing staff.</p></div>', '2019-12-29 06:25:25', '2020-03-11 03:32:59'),
(21, 'refund_policy', NULL, '2019-12-29 06:25:42', '2019-12-29 06:25:42'),
(22, 'stripe_sandbox_checkbox', '0', '2020-02-23 01:39:29', '2022-09-13 05:07:03'),
(23, 'paystack_activation_checkbox', '0', '2020-02-23 02:05:30', '2022-09-13 05:07:13'),
(24, 'fb_pixel_activation_checkbox', '1', '2020-02-27 02:25:00', '2020-07-25 04:44:59'),
(25, 'facebook_link_of_site', '', '2020-02-27 04:53:37', '2020-02-27 04:53:37'),
(26, 'youtube_link_of_site', '', '2020-02-27 04:53:37', '2020-02-27 04:53:37'),
(27, 'support_ticket_addon', '1', '2020-03-04 10:48:36', '2020-03-04 10:48:36'),
(28, 'min_withdraw_amount', '100', '2020-03-11 10:20:30', '2022-09-08 03:54:08'),
(29, 'paypal_charge', '0', '2020-03-11 10:20:45', '2020-03-11 04:36:45'),
(30, 'bank_charge', '0', '2020-03-11 10:20:55', '2020-03-11 04:37:12'),
(31, 'slider_section_title', 'Hire expert freelancers for any job, online from anywhere', '2020-05-04 11:59:56', '2020-05-04 06:28:44'),
(32, 'slider_section_subtitle', '<font color=\"#1b1b28\" face=\"Montserrat, sans-serif\"><span style=\"font-size: 20px;\">Millions of small businesses use Freelancer to turn their ideas into reality. </span></font>', '2020-05-04 11:59:56', '2020-05-04 06:28:44'),
(33, 'sliders', '89,90,91,92', '2020-05-04 10:34:01', '2020-05-04 11:44:50'),
(34, 'client_logos', '99', '2020-05-04 11:37:58', '2020-06-06 00:44:28'),
(35, 'client_logo_show', 'on', '2020-05-04 11:43:42', '2020-05-04 11:45:32'),
(36, 'how_it_works_title', 'Step 1', '2020-05-04 11:43:42', '2020-05-04 11:45:32'),
(37, 'how_it_works_subtitle', '', '2020-05-04 11:43:42', '2020-05-04 12:10:42'),
(38, 'how_it_works_description_1', 'Step 1', '2020-05-04 11:43:42', '2020-05-04 11:45:32'),
(39, 'how_it_works_description_2', 'Step 2', '2020-05-04 11:43:42', '2020-05-04 12:50:40'),
(40, 'how_it_works_description_3', 'Step 3', '2020-05-04 11:43:42', '2020-05-04 12:50:40'),
(41, 'how_it_works_show', 'on', '2020-05-04 12:10:42', '2020-05-04 12:10:42'),
(42, 'how_it_works_banner_1', '97', '2020-05-04 12:10:42', '2020-06-06 01:00:59'),
(43, 'how_it_works_banner_2', '90', '2020-05-04 12:10:42', '2020-06-06 01:03:08'),
(44, 'how_it_works_banner_3', NULL, '2020-05-04 12:10:42', '2020-06-06 01:00:59'),
(45, 'latest_project_title', 'Browse Latest Proect', '2020-05-04 12:10:42', '2020-05-04 12:52:33'),
(46, 'latest_project_subtitle', 'Hello', '2020-05-04 12:10:42', '2020-05-04 12:52:33'),
(47, 'latest_project_show', 'on', '2020-05-04 12:52:33', '2020-05-04 12:52:33'),
(48, 'featured_category_title', 'Hello', '2020-05-04 12:10:42', '2020-05-04 12:52:33'),
(49, 'featured_category_subtitle', NULL, '2020-05-04 12:10:42', '2020-05-04 13:04:01'),
(50, 'featured_category_show', 'on', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(51, 'featured_category_list', NULL, '2020-05-04 13:04:01', '2020-06-06 01:03:16'),
(52, 'featured_category_left_banner', '88', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(53, 'featured_category_right_banner', '88', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(54, 'cta_section_title', 'Ready to get started?', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(55, 'cta_section_subtitle', 'Join Us', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(56, 'meta_title', 'Meta Title', '2020-05-04 13:04:01', '2020-05-04 13:04:01'),
(57, 'meta_description', 'Meta description', '2020-05-04 13:04:01', '2020-07-26 11:12:35'),
(58, 'meta_keywords', 'Keywords, Keywords', '2020-05-04 13:04:01', '2020-07-26 11:12:35'),
(59, 'meta_image', '97', '2020-05-04 13:23:06', '2020-07-26 11:12:35'),
(60, 'cta_section_show', 'on', '2020-05-04 13:23:06', '2020-05-05 02:10:59'),
(61, 'sslcommerz_activation_checkbox', '0', '2020-05-11 04:09:54', '2022-09-13 05:07:08'),
(62, 'sslcommerz_sandbox_checkbox', '0', '2020-05-11 04:09:54', '2022-09-13 05:07:08'),
(63, 'instamojo_activation_checkbox', '0', '2020-05-11 04:55:22', '2022-09-13 05:07:18'),
(64, 'instamojo_sandbox_checkbox', '0', '2020-05-10 23:02:33', '2022-09-13 05:07:18'),
(65, 'voguepay_activation_checkbox', '0', '2020-05-11 05:04:34', '2020-05-10 23:21:01'),
(66, 'voguepay_sandbox_checkbox', '1', '2020-05-11 05:05:22', '2020-05-10 23:20:51'),
(67, 'paytm_activation_checkbox', '0', '2020-05-11 05:26:58', '2022-09-13 05:07:25'),
(68, '', '0', '2020-05-10 23:33:25', '2020-05-10 23:33:25'),
(69, 'paytm_sandbox_checkbox', '0', '2020-05-10 23:35:08', '2020-05-10 23:35:08'),
(70, 'slider_section_show', 'on', '2020-06-06 07:06:24', '2020-06-06 01:07:34'),
(71, 'header_logo', '94', '2020-07-12 04:46:24', '2020-07-11 22:47:02'),
(72, 'header_stikcy', 'on', '2020-07-12 04:46:35', '2020-07-11 22:47:02'),
(73, 'footer_logo', '95', '2020-07-12 05:01:41', '2020-07-12 05:40:59'),
(74, 'about_description_footer', '<p>Hello</p>', '2020-07-12 11:38:23', '2020-07-12 05:41:55'),
(75, 'widget_one', 'Link Widget One', '2020-07-12 05:53:48', '2020-08-07 08:30:42'),
(76, 'widget_one_labels', NULL, '2020-07-12 05:53:48', '2020-08-07 08:30:42'),
(77, 'widget_one_links', NULL, '2020-07-12 05:53:48', '2020-08-07 08:30:42'),
(81, 'widget_two', 'About Us', '2020-07-12 05:53:48', '2020-07-27 08:02:21'),
(82, 'widget_two_labels', '[\"About Us\"]', '2020-07-12 05:53:48', '2020-07-27 08:02:21'),
(83, 'widget_two_links', '[\"#\"]', '2020-07-12 05:53:48', '2020-08-07 08:31:15'),
(84, 'social_widget_title', 'Social Widget', '2020-07-12 06:03:39', '2020-08-07 08:31:01'),
(85, 'facebook_link', 'https://localhost/zeroplus20/public', '2020-07-12 06:05:52', '2022-08-28 04:13:52'),
(86, 'twitter_link', NULL, '2020-07-12 06:05:52', '2020-08-07 08:30:48'),
(87, 'instagram_link', NULL, '2020-07-12 06:05:52', '2020-08-07 08:30:48'),
(88, 'youtube_link', NULL, '2020-07-12 06:05:52', '2020-08-07 08:30:48'),
(89, 'linkedin_link', NULL, '2020-07-12 06:05:52', '2020-08-07 08:30:48'),
(90, 'language_switcher', NULL, '2020-07-12 12:21:15', '2020-07-12 06:22:44'),
(91, 'copyright_text', '<p>Hello</p>', '2020-07-12 12:24:08', '2020-07-12 06:24:14'),
(93, 'twitter_login_activation_checkbox', '0', '2020-07-25 04:38:20', '2022-09-09 23:12:47'),
(97, 'linkedin_login_activation_checkbox', '0', '2020-07-25 10:43:44', '2022-09-09 23:12:51'),
(98, 'system_timezone', 'Pacific/Honolulu', '2020-07-26 03:43:25', '2020-07-26 03:57:36'),
(99, 'system_logo_white', '100', '2020-07-26 03:57:07', '2020-07-26 03:57:36'),
(100, 'system_logo_black', '93', '2020-07-26 03:57:07', '2020-07-26 03:57:36'),
(101, 'admin_login_background', '91', '2020-07-26 03:57:07', '2020-07-26 03:57:36'),
(102, 'timezone', 'UTC', '2020-07-26 04:00:22', '2022-06-27 00:06:27'),
(103, 'website_name', 'ZeroPlus', '2020-07-26 11:00:47', '2022-08-11 00:46:59'),
(104, 'base_color', '#377dff', '2020-07-26 11:07:19', '2020-08-07 08:31:49'),
(105, 'site_icon', '', '2020-07-27 10:29:08', '2020-07-27 10:29:08'),
(106, 'base_hov_color', '#377dff', '2020-07-27 10:29:08', '2020-08-07 08:31:44'),
(107, 'current_version', '1.6', '2020-08-27 12:53:33', '2020-08-27 12:53:33'),
(108, 'blog_section_show', '', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(109, 'google_recaptcha_activation_checkbox', '', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(110, 'fb_comment_activation_checkbox', '', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(111, 'aamarpay_store_id', NULL, '2022-06-27 11:16:52', '2022-06-27 11:16:52'),
(112, 'aamarpay_signature_key', NULL, '2022-06-27 11:16:52', '2022-06-27 11:16:52'),
(113, 'aamarpay_sandbox_checkbox', '1', '2022-06-27 06:01:14', '2022-06-27 06:36:17'),
(114, 'aamarpay_activation_checkbox', '1', '2022-06-27 12:02:26', '2022-06-27 06:06:46'),
(116, 'blog_section_title', '', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(117, 'max_blog_show_homepage', '', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(118, 'aamarpay', '1', '2022-09-13 11:06:04', '2022-09-13 11:06:04'),
(119, 'paystack_sandbox_checkbox', '0', '2022-09-13 05:07:13', '2022-09-13 05:07:13'),
(120, 'zcode', '1', '2022-09-13 11:06:04', '2022-09-13 11:06:04'),
(121, 'referral', '20', '2022-09-20 07:45:47', '2022-09-20 07:45:47'),
(122, 'service_section_show', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(123, 'cta_section_banner', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(124, 'cta_section_title_client', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(125, 'cta_section_subtitle_client', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(126, 'cta_section_title_freelancer', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(127, 'cta_section_subtitle_freelancer', '', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(128, 'widget_three', '', '2022-12-13 11:50:19', '2022-12-13 11:50:19'),
(129, 'widget_three_labels', '', '2022-12-13 11:50:19', '2022-12-13 11:50:19'),
(130, 'widget_four', '', '2022-12-13 11:50:19', '2022-12-13 11:50:19'),
(131, 'widget_four_labels', '', '2022-12-13 11:50:19', '2022-12-13 11:50:19'),
(132, 'app_link_section_show', '', '2022-12-13 11:53:14', '2022-12-13 11:53:14'),
(133, 'show_website_popup', '', '2022-12-13 11:53:14', '2022-12-13 11:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mer_txnid` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'package/milestone/withdraw/wallet in/referral',
  `amount` double(8,2) NOT NULL,
  `fees` double(8,2) NOT NULL DEFAULT 0.00,
  `method` char(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'paypal/stripe etc..',
  `trans_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_total` double(18,3) DEFAULT 0.000,
  `com_parcent` double(18,3) NOT NULL DEFAULT 0.000,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `mer_txnid`, `type`, `amount`, `fees`, `method`, `trans_details`, `trans_total`, `com_parcent`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, NULL, 'referral', 25.00, 0.00, 'paypal', NULL, 100.000, 25.000, '2', '2022-09-19 05:59:23', NULL, NULL),
(2, 43, 'Z09202022094652415200', 'package_payment', 10.00, 0.00, 'AamarPay', NULL, 0.000, 0.000, '2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `lang` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_key` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_value` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Congratulations', 'Congratulations', '2022-06-06 05:41:35', '2022-06-06 05:41:35'),
(2, 'en', 'You have successfully completed the updating process. Please Login to continue', 'You have successfully completed the updating process. Please Login to continue', '2022-06-06 05:41:35', '2022-06-06 05:41:35'),
(3, 'en', 'Go to Home', 'Go to Home', '2022-06-06 05:41:35', '2022-06-06 05:41:35'),
(4, 'en', 'Login to Admin panel', 'Login to Admin panel', '2022-06-06 05:41:35', '2022-06-06 05:41:35'),
(5, 'en', 'I want to Hire', 'I want to Hire', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(6, 'en', 'I want to Work', 'I want to Work', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(7, 'en', 'Check All Projects', 'Check All Projects', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(8, 'en', 'Join With Us', 'Join With Us', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(9, 'en', 'Freelancers', 'Freelancers', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(10, 'en', 'Projects', 'Projects', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(11, 'en', 'Services', 'Services', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(12, 'en', 'Log In', 'Log In', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(13, 'en', 'Get Started', 'Get Started', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(14, 'en', 'Home', 'Home', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(15, 'en', 'Notifications', 'Notifications', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(16, 'en', 'Messages', 'Messages', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(17, 'en', 'Account', 'Account', '2022-06-06 05:43:36', '2022-06-06 05:43:36'),
(18, 'en', '404', '404', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(19, 'en', '404', '404', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(20, 'en', 'Looks like you\'re lost', 'Looks like you\'re lost', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(21, 'en', '404', '404', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(22, 'en', 'The page you\'re looking for is not available', 'The page you\'re looking for is not available', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(23, 'en', 'Back to Homepage', 'Back to Homepage', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(24, 'en', 'Back to Homepage', 'Back to Homepage', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(25, 'en', 'Back to Homepage', 'Back to Homepage', '2022-06-06 05:43:37', '2022-06-06 05:43:37'),
(26, 'en', 'Welcome back', 'Welcome back', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(27, 'en', 'Login to manage your account', 'Login to manage your account', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(28, 'en', 'Email', 'Email', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(29, 'en', 'Password', 'Password', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(30, 'en', 'Forgot Password?', 'Forgot Password?', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(31, 'en', 'Login to your Account', 'Login to your Account', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(32, 'en', 'Don\'t have an account?', 'Don\'t have an account?', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(33, 'en', 'Create an account', 'Create an account', '2022-06-06 05:43:39', '2022-06-06 05:43:39'),
(34, 'en', 'Your session has expired', 'Your session has expired', '2022-06-06 05:49:05', '2022-06-06 05:49:05'),
(35, 'en', 'Please refresh the page', 'Please refresh the page', '2022-06-06 05:49:05', '2022-06-06 05:49:05'),
(36, 'en', 'Delete Confirmation', 'Delete Confirmation', '2022-06-06 05:49:26', '2022-06-06 05:49:26'),
(37, 'en', 'Are you sure to delete this?', 'Are you sure to delete this?', '2022-06-06 05:49:26', '2022-06-06 05:49:26'),
(38, 'en', 'Cancel', 'Cancel', '2022-06-06 05:49:26', '2022-06-06 05:49:26'),
(39, 'en', 'Delete', 'Delete', '2022-06-06 05:49:26', '2022-06-06 05:49:26'),
(40, 'en', 'Filter By', 'Filter By', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(41, 'en', 'Categories', 'Categories', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(42, 'en', 'Project Type', 'Project Type', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(43, 'en', 'Fixed Price', 'Fixed Price', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(44, 'en', 'Long Term', 'Long Term', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(45, 'en', 'Numbers of Bids', 'Numbers of Bids', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(46, 'en', 'Any Number of bids', 'Any Number of bids', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(47, 'en', '0 to 5', '0 to 5', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(48, 'en', '5 to 10', '5 to 10', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(49, 'en', '10 to 20', '10 to 20', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(50, 'en', '20 to 30', '20 to 30', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(51, 'en', '30+', '30+', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(52, 'en', 'Newest first', 'Newest first', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(53, 'en', 'Lowest budget first', 'Lowest budget first', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(54, 'en', 'Highest budget first', 'Highest budget first', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(55, 'en', 'Lowest bids first', 'Lowest bids first', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(56, 'en', 'Highest bids first', 'Highest bids first', '2022-06-06 05:51:09', '2022-06-06 05:51:09'),
(57, 'en', 'Rating', 'Rating', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(58, 'en', 'Any rating', 'Any rating', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(59, 'en', '4 star +', '4 star +', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(60, 'en', '3 to 4 star', '3 to 4 star', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(61, 'en', '2 to 3 star', '2 to 3 star', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(62, 'en', '1 to 2 star', '1 to 2 star', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(63, 'en', '0 to 1 star', '0 to 1 star', '2022-06-06 05:53:19', '2022-06-06 05:53:19'),
(64, 'en', 'Total Earnings From', 'Total Earnings From', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(65, 'en', 'Client Subscription', 'Client Subscription', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(66, 'en', 'Freelancer Subscription', 'Freelancer Subscription', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(67, 'en', 'Project Commission', 'Project Commission', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(68, 'en', 'Total Earnings of', 'Total Earnings of', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(69, 'en', 'All Time', 'All Time', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(70, 'en', 'Top Client Packages', 'Top Client Packages', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(71, 'en', 'Top Freelancer Packages', 'Top Freelancer Packages', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(72, 'en', 'Last Year Earnings', 'Last Year Earnings', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(73, 'en', 'Last 30 Days Stat', 'Last 30 Days Stat', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(74, 'en', 'New Clients', 'New Clients', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(75, 'en', 'New Freelancers', 'New Freelancers', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(76, 'en', 'Posted Projects', 'Posted Projects', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(77, 'en', 'Comppleted Projects', 'Comppleted Projects', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(78, 'en', 'Top running Projects', 'Top running Projects', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(79, 'en', 'View All', 'View All', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(80, 'en', 'Dashboard', 'Dashboard', '2022-06-06 05:53:51', '2022-06-06 05:53:51'),
(81, 'en', 'Title is required.', 'Title is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(82, 'en', 'Category is required.', 'Category is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(83, 'en', 'Standard Price is required.', 'Standard Price is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(84, 'en', 'Basic Price is required.', 'Basic Price is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(85, 'en', 'Premium Price is required.', 'Premium Price is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(86, 'en', 'Standard Price should be a number.', 'Standard Price should be a number.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(87, 'en', 'Basic price should be a number.', 'Basic price should be a number.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(88, 'en', 'Premium price should be a number.', 'Premium price should be a number.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(89, 'en', 'Basic delivery time limit field is requried.', 'Basic delivery time limit field is requried.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(90, 'en', 'Standard delivery time limit field is requried.', 'Standard delivery time limit field is requried.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(91, 'en', 'Premium delivery time limit field is requried.', 'Premium delivery time limit field is requried.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(92, 'en', 'Basic Revision limit is required.', 'Basic Revision limit is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(93, 'en', 'Standard Revision limit is required.', 'Standard Revision limit is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(94, 'en', 'Premium Revision limit is required.', 'Premium Revision limit is required.', '2022-06-08 05:52:07', '2022-06-08 05:52:07'),
(95, 'en', 'Logout', 'Logout', '2022-06-08 05:58:14', '2022-06-08 05:58:14'),
(96, 'en', 'Welcome to', 'Welcome to', '2022-06-08 05:58:18', '2022-06-08 05:58:18'),
(97, 'en', 'Login to your account.', 'Login to your account.', '2022-06-08 05:58:18', '2022-06-08 05:58:18'),
(98, 'en', 'Forgot Password', 'Forgot Password', '2022-06-08 05:58:18', '2022-06-08 05:58:18'),
(99, 'en', 'Sign In', 'Sign In', '2022-06-08 05:58:18', '2022-06-08 05:58:18'),
(100, 'en', 'Fill out the form to get started', 'Fill out the form to get started', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(101, 'en', 'Full Name', 'Full Name', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(102, 'en', 'Email address', 'Email address', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(103, 'en', 'Minimun 6 characters', 'Minimun 6 characters', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(104, 'en', 'Confirm password', 'Confirm password', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(105, 'en', 'As A Freelancer', 'As A Freelancer', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(106, 'en', 'As A Client', 'As A Client', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(107, 'en', 'By signing up you agree to our terms and conditions', 'By signing up you agree to our terms and conditions', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(108, 'en', 'Already have an account?', 'Already have an account?', '2022-06-09 00:12:55', '2022-06-09 00:12:55'),
(109, 'en', 'Choose Your Package', 'Choose Your Package', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(110, 'en', 'Select Payment Type', 'Select Payment Type', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(111, 'en', 'Payment Type', 'Payment Type', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(112, 'en', 'Select One', 'Select One', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(113, 'en', 'Online payment', 'Online payment', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(114, 'en', 'Offline payment', 'Offline payment', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(115, 'en', 'Package Purchase by Offline Payment', 'Package Purchase by Offline Payment', '2022-06-09 00:13:24', '2022-06-09 00:13:24'),
(116, 'en', 'Reviews', 'Reviews', '2022-06-09 01:25:51', '2022-06-09 01:25:51'),
(117, 'en', 'Commission', 'Commission', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(118, 'en', 'Fixed Project Bids', 'Fixed Project Bids', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(119, 'en', 'Long Term Project Bids', 'Long Term Project Bids', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(120, 'en', 'Portfolio Adding Limit', 'Portfolio Adding Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(121, 'en', 'Skills Adding Limit', 'Skills Adding Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(122, 'en', 'Project Bookmark Limit', 'Project Bookmark Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(123, 'en', 'Experience Add Limit', 'Experience Add Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(124, 'en', 'Service Add Limit', 'Service Add Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(125, 'en', 'Bio Words Limit', 'Bio Words Limit', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(126, 'en', 'Client Following', 'Client Following', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(127, 'en', 'Days', 'Days', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(128, 'en', 'Purchase This Package', 'Purchase This Package', '2022-06-09 01:39:18', '2022-06-09 01:39:18'),
(129, 'en', 'Public Profile', 'Public Profile', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(130, 'en', 'All Services', 'All Services', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(131, 'en', 'Sold Services', 'Sold Services', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(132, 'en', 'Bidded', 'Bidded', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(133, 'en', 'Running', 'Running', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(134, 'en', 'Completed', 'Completed', '2022-06-09 01:42:18', '2022-06-09 01:42:18'),
(135, 'en', 'Cancelled', 'Cancelled', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(136, 'en', 'Project Proposal', 'Project Proposal', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(137, 'en', 'Earnings', 'Earnings', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(138, 'en', 'Earnings History', 'Earnings History', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(139, 'en', 'Withdraw Request', 'Withdraw Request', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(140, 'en', 'Withdraw History', 'Withdraw History', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(141, 'en', 'Milestone Requests', 'Milestone Requests', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(142, 'en', 'Bookmarked Projects', 'Bookmarked Projects', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(143, 'en', 'Message', 'Message', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(144, 'en', 'Packages', 'Packages', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(145, 'en', 'Upgrade/Downgrade', 'Upgrade/Downgrade', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(146, 'en', 'Packages History', 'Packages History', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(147, 'en', 'Setting', 'Setting', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(148, 'en', 'Account Setting', 'Account Setting', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(149, 'en', 'Profile Setting', 'Profile Setting', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(150, 'en', 'Balance', 'Balance', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(151, 'en', 'Purchased Services', 'Purchased Services', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(152, 'en', 'List of service sold', 'List of service sold', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(153, 'en', 'Service Title', 'Service Title', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(154, 'en', 'Client Name', 'Client Name', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(155, 'en', 'Service Type', 'Service Type', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(156, 'en', 'Amount', 'Amount', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(157, 'en', 'My Earning', 'My Earning', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(158, 'en', 'Purchased At', 'Purchased At', '2022-06-09 01:42:19', '2022-06-09 01:42:19'),
(159, 'en', 'Add New Service', 'Add New Service', '2022-06-09 01:42:43', '2022-06-09 01:42:43'),
(160, 'en', 'Create new service', 'Create new service', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(161, 'en', 'Service Info', 'Service Info', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(162, 'en', 'Title of Service', 'Title of Service', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(163, 'en', 'Enter your service title', 'Enter your service title', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(164, 'en', 'Service Image', 'Service Image', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(165, 'en', 'Browse', 'Browse', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(166, 'en', 'Choose File', 'Choose File', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(167, 'en', 'About Service', 'About Service', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(168, 'en', 'Type', 'Type', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(169, 'en', 'Basic Package', 'Basic Package', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(170, 'en', 'Price', 'Price', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(171, 'en', 'Enter Price', 'Enter Price', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(172, 'en', 'Devilery Within', 'Devilery Within', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(173, 'en', 'Enter Delivery Time', 'Enter Delivery Time', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(174, 'en', 'Revision Limit', 'Revision Limit', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(175, 'en', 'Enter Revision Limit', 'Enter Revision Limit', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(176, 'en', 'What is included section', 'What is included section', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(177, 'en', 'Add New', 'Add New', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(178, 'en', 'Standard Package', 'Standard Package', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(179, 'en', 'PREMIUM Package', 'PREMIUM Package', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(180, 'en', 'Post Service', 'Post Service', '2022-06-09 01:42:46', '2022-06-09 01:42:46'),
(181, 'en', 'Your earnings history', 'Your earnings history', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(182, 'en', 'Project Name', 'Project Name', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(183, 'en', 'Paid Amount', 'Paid Amount', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(184, 'en', 'Your Earnings', 'Your Earnings', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(185, 'en', 'Paid at', 'Paid at', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(186, 'en', 'Admin Charge', 'Admin Charge', '2022-06-09 01:43:10', '2022-06-09 01:43:10'),
(187, 'en', 'Running Projects', 'Running Projects', '2022-06-09 01:43:36', '2022-06-09 01:43:36'),
(188, 'en', 'Nothing Found', 'Nothing Found', '2022-06-09 01:43:36', '2022-06-09 01:43:36'),
(189, 'en', 'Send Milestone Request', 'Send Milestone Request', '2022-06-09 01:43:36', '2022-06-09 01:43:36'),
(190, 'en', 'Bookmark Remove Confirmation', 'Bookmark Remove Confirmation', '2022-06-09 01:43:52', '2022-06-09 01:43:52'),
(191, 'en', 'Are you sure to remove from bookmark?', 'Are you sure to remove from bookmark?', '2022-06-09 01:43:52', '2022-06-09 01:43:52'),
(192, 'en', 'Confirm', 'Confirm', '2022-06-09 01:43:52', '2022-06-09 01:43:52'),
(193, 'en', 'Total Requests', 'Total Requests', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(194, 'en', 'Client', 'Client', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(195, 'en', 'Sending date', 'Sending date', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(196, 'en', 'Requested Amount', 'Requested Amount', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(197, 'en', 'Client Status', 'Client Status', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(198, 'en', 'Payment Status', 'Payment Status', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(199, 'en', 'Actions', 'Actions', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(200, 'en', 'Details', 'Details', '2022-06-09 01:44:06', '2022-06-09 01:44:06'),
(201, 'en', 'Bidded Projects', 'Bidded Projects', '2022-06-09 01:47:28', '2022-06-09 01:47:28'),
(202, 'en', 'per Hour', 'per Hour', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(203, 'en', 'Hire Me', 'Hire Me', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(204, 'en', 'Bio', 'Bio', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(205, 'en', 'Portfolio', 'Portfolio', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(206, 'en', 'Showing', 'Showing', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(207, 'en', 'Experiences', 'Experiences', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(208, 'en', 'Education', 'Education', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(209, 'en', 'Badges', 'Badges', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(210, 'en', 'Skills', 'Skills', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(211, 'en', 'Verifications', 'Verifications', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(212, 'en', 'Identity Verification', 'Identity Verification', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(213, 'en', 'Email Verified', 'Email Verified', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(214, 'en', 'Bookmark Freelancer', 'Bookmark Freelancer', '2022-06-09 01:47:32', '2022-06-09 01:47:32'),
(215, 'en', 'No Notifications', 'No Notifications', '2022-06-09 01:47:55', '2022-06-09 01:47:55'),
(216, 'en', 'View All Notifications', 'View All Notifications', '2022-06-09 01:47:55', '2022-06-09 01:47:55'),
(217, 'en', 'No New Messages', 'No New Messages', '2022-06-09 01:47:55', '2022-06-09 01:47:55'),
(218, 'en', 'View All Messages', 'View All Messages', '2022-06-09 01:47:55', '2022-06-09 01:47:55'),
(219, 'en', 'Log Out', 'Log Out', '2022-06-09 01:47:55', '2022-06-09 01:47:55'),
(220, 'en', 'Please verify your identity', 'Please verify your identity', '2022-06-09 02:03:38', '2022-06-09 02:03:38'),
(221, 'en', 'Verify Now', 'Verify Now', '2022-06-09 02:03:38', '2022-06-09 02:03:38'),
(222, 'en', 'This Month Earnings', 'This Month Earnings', '2022-06-09 02:03:38', '2022-06-09 02:03:38'),
(223, 'en', 'Total Earnings', 'Total Earnings', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(224, 'en', 'My Balance', 'My Balance', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(225, 'en', 'Total Completed Projects', 'Total Completed Projects', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(226, 'en', 'Current Package', 'Current Package', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(227, 'en', 'Remaining Fixed Projects bids', 'Remaining Fixed Projects bids', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(228, 'en', 'Remaining Long Term Projects bids', 'Remaining Long Term Projects bids', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(229, 'en', 'Remaining Service', 'Remaining Service', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(230, 'en', 'Upgrade', 'Upgrade', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(231, 'en', 'Current Package Summary', 'Current Package Summary', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(232, 'en', 'Fixed Projects bids', 'Fixed Projects bids', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(233, 'en', 'Long Term Projects bids', 'Long Term Projects bids', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(234, 'en', 'Skill Adding Limit', 'Skill Adding Limit', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(235, 'en', 'Job Experience Add Limit', 'Job Experience Add Limit', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(236, 'en', 'Bio Word Limit', 'Bio Word Limit', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(237, 'en', 'Service Limit', 'Service Limit', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(238, 'en', 'Client Following option', 'Client Following option', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(239, 'en', 'Suggested Package', 'Suggested Package', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(240, 'en', 'Suggested Projects', 'Suggested Projects', '2022-06-09 02:05:37', '2022-06-09 02:05:37'),
(241, 'en', 'Profile Settings', 'Profile Settings', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(242, 'en', 'Nid / Passport PDF', 'Nid / Passport PDF', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(243, 'en', 'Save Changes', 'Save Changes', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(244, 'en', 'Account Info', 'Account Info', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(245, 'en', 'Username', 'Username', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(246, 'en', 'Verified', 'Verified', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(247, 'en', 'New Password', 'New Password', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(248, 'en', 'Skill', 'Skill', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(249, 'en', 'Max', 'Max', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(250, 'en', 'Tell us about yourself in few sentences', 'Tell us about yourself in few sentences', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(251, 'en', 'Basic Info', 'Basic Info', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(252, 'en', 'Name', 'Name', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(253, 'en', 'Displayed on your public profile, notifications and other places', 'Displayed on your public profile, notifications and other places', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(254, 'en', 'Specialist At', 'Specialist At', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(255, 'en', 'Hourly Rate', 'Hourly Rate', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(256, 'en', 'Gender', 'Gender', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(257, 'en', 'Country', 'Country', '2022-06-09 02:06:42', '2022-06-09 02:06:42'),
(258, 'en', 'Clients', 'Clients', '2022-06-09 02:09:16', '2022-06-09 02:09:16'),
(259, 'en', 'Chats', 'Chats', '2022-06-09 02:09:16', '2022-06-09 02:09:16'),
(260, 'en', 'Select a', 'Select a', '2022-06-09 02:09:16', '2022-06-09 02:09:16'),
(261, 'en', 'to view chats', 'to view chats', '2022-06-09 02:09:16', '2022-06-09 02:09:16'),
(262, 'en', 'Completed Projects', 'Completed Projects', '2022-06-09 03:29:01', '2022-06-09 03:29:01'),
(263, 'en', 'Rate This Freelancer', 'Rate This Freelancer', '2022-06-09 03:29:01', '2022-06-09 03:29:01'),
(264, 'en', 'Comment', 'Comment', '2022-06-09 03:29:01', '2022-06-09 03:29:01'),
(265, 'en', 'Close', 'Close', '2022-06-09 03:29:01', '2022-06-09 03:29:01'),
(266, 'en', 'Rate This Client', 'Rate This Client', '2022-06-09 03:29:01', '2022-06-09 03:29:01'),
(267, 'en', 'Project Proposals', 'Project Proposals', '2022-06-09 03:29:04', '2022-06-09 03:29:04'),
(268, 'en', 'Confirm Hiring', 'Confirm Hiring', '2022-06-09 03:29:04', '2022-06-09 03:29:04'),
(269, 'en', 'Project', 'Project', '2022-06-09 03:29:04', '2022-06-09 03:29:04'),
(270, 'en', 'Make a withdrawal', 'Make a withdrawal', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(271, 'en', 'Your available balance is', 'Your available balance is', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(272, 'en', 'Minimum withdrawal amount is', 'Minimum withdrawal amount is', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(273, 'en', 'Withdrawal amount', 'Withdrawal amount', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(274, 'en', 'Payment method', 'Payment method', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(275, 'en', 'Bank', 'Bank', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(276, 'en', 'Paypal', 'Paypal', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(277, 'en', 'Any message', 'Any message', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(278, 'en', 'Request for withdraw', 'Request for withdraw', '2022-06-09 03:29:06', '2022-06-09 03:29:06'),
(279, 'en', 'Your withdrawal history', 'Your withdrawal history', '2022-06-09 03:29:16', '2022-06-09 03:29:16'),
(280, 'en', 'Date', 'Date', '2022-06-09 03:29:16', '2022-06-09 03:29:16'),
(281, 'en', 'Reciept', 'Reciept', '2022-06-09 03:29:16', '2022-06-09 03:29:16'),
(282, 'en', 'Status', 'Status', '2022-06-09 03:29:16', '2022-06-09 03:29:16'),
(283, 'en', 'Accountings', 'Accountings', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(284, 'en', 'Blog System', 'Blog System', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(285, 'en', 'Website', 'Website', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(286, 'en', 'Employee', 'Employee', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(287, 'en', 'Manage Location', 'Manage Location', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(288, 'en', 'State', 'State', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(289, 'en', 'Uploaded Files', 'Uploaded Files', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(290, 'en', 'System', 'System', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(291, 'en', 'Update', 'Update', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(292, 'en', 'Server status', 'Server status', '2022-06-13 23:29:08', '2022-06-13 23:29:08'),
(293, 'en', 'Update your system', 'Update your system', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(294, 'en', 'Current verion', 'Current verion', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(295, 'en', 'Make sure your server has matched with all requirements.', 'Make sure your server has matched with all requirements.', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(296, 'en', 'Check Here', 'Check Here', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(297, 'en', 'Download latest version from codecanyon.', 'Download latest version from codecanyon.', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(298, 'en', 'Extract downloaded zip. You will find updates.zip file in those extraced files.', 'Extract downloaded zip. You will find updates.zip file in those extraced files.', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(299, 'en', 'Upload that zip file here and click update now.', 'Upload that zip file here and click update now.', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(300, 'en', 'If you are using any addon make sure to update those addons after updating.', 'If you are using any addon make sure to update those addons after updating.', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(301, 'en', 'Update Now', 'Update Now', '2022-06-13 23:29:17', '2022-06-13 23:29:17'),
(302, 'en', 'All uploaded files', 'All uploaded files', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(303, 'en', 'Upload New File', 'Upload New File', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(304, 'en', 'All files', 'All files', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(305, 'en', 'Sort by newest', 'Sort by newest', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(306, 'en', 'Sort by oldest', 'Sort by oldest', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(307, 'en', 'Sort by smallest', 'Sort by smallest', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(308, 'en', 'Sort by largest', 'Sort by largest', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(309, 'en', 'Search your files', 'Search your files', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(310, 'en', 'Search', 'Search', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(311, 'en', 'Are you sure to delete this file?', 'Are you sure to delete this file?', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(312, 'en', 'File Info', 'File Info', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(313, 'en', 'Link copied to clipboard', 'Link copied to clipboard', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(314, 'en', 'Oops, unable to copy', 'Oops, unable to copy', '2022-06-13 23:29:22', '2022-06-13 23:29:22'),
(315, 'en', 'All Projects', 'All Projects', '2022-06-14 01:34:48', '2022-06-14 01:34:48'),
(316, 'en', 'Filter by Client', 'Filter by Client', '2022-06-14 01:34:48', '2022-06-14 01:34:48'),
(317, 'en', 'Sort by', 'Sort by', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(318, 'en', 'Time (Old > New)', 'Time (Old > New)', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(319, 'en', 'Time (New > Old)', 'Time (New > Old)', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(320, 'en', 'Price (High > Low)', 'Price (High > Low)', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(321, 'en', 'Price (Low > High)', 'Price (Low > High)', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(322, 'en', 'Title', 'Title', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(323, 'en', 'Project Category', 'Project Category', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(324, 'en', 'Budget', 'Budget', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(325, 'en', 'Posted at', 'Posted at', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(326, 'en', 'Options', 'Options', '2022-06-14 01:36:08', '2022-06-14 01:36:08'),
(327, 'en', 'Freelancer', 'Freelancer', '2022-06-14 01:51:04', '2022-06-14 01:51:04'),
(328, 'en', 'Hired at', 'Hired at', '2022-06-14 01:51:04', '2022-06-14 01:51:04'),
(329, 'en', 'Open Projects', 'Open Projects', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(330, 'en', 'Sort by options', 'Sort by options', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(331, 'en', 'Sort by Time (Old > New)', 'Sort by Time (Old > New)', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(332, 'en', 'Sort by Time (New > Old)', 'Sort by Time (New > Old)', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(333, 'en', 'Sort by Price (High > Low)', 'Sort by Price (High > Low)', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(334, 'en', 'Sort by Price (Low > High)', 'Sort by Price (Low > High)', '2022-06-14 01:51:11', '2022-06-14 01:51:11'),
(335, 'en', 'Cancelled Projects', 'Cancelled Projects', '2022-06-14 01:51:14', '2022-06-14 01:51:14'),
(336, 'en', 'Cancellation Request Projects', 'Cancellation Request Projects', '2022-06-14 01:52:43', '2022-06-14 01:52:43'),
(337, 'en', 'Request Sent By', 'Request Sent By', '2022-06-14 01:52:43', '2022-06-14 01:52:43'),
(338, 'en', 'Cancel Request', 'Cancel Request', '2022-06-14 01:52:43', '2022-06-14 01:52:43'),
(339, 'en', 'All Categories', 'All Categories', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(340, 'en', 'ID', 'ID', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(341, 'en', 'Parent', 'Parent', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(342, 'en', 'Icon', 'Icon', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(343, 'en', 'Action', 'Action', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(344, 'en', 'Add New Category', 'Add New Category', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(345, 'en', 'Category Name', 'Category Name', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(346, 'en', 'No Parent', 'No Parent', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(347, 'en', 'file recommended', 'file recommended', '2022-06-14 01:56:01', '2022-06-14 01:56:01'),
(348, 'en', 'Service Payments', 'Service Payments', '2022-06-14 01:56:03', '2022-06-14 01:56:03'),
(349, 'en', 'Service Owner', 'Service Owner', '2022-06-14 01:56:03', '2022-06-14 01:56:03'),
(350, 'en', 'Starts At', 'Starts At', '2022-06-14 01:56:03', '2022-06-14 01:56:03'),
(351, 'en', 'Service Created At', 'Service Created At', '2022-06-14 01:56:03', '2022-06-14 01:56:03'),
(352, 'en', 'Cancelled Services', 'Cancelled Services', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(353, 'en', 'Service', 'Service', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(354, 'en', 'My Earnings', 'My Earnings', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(355, 'en', 'Freelancer Earnings', 'Freelancer Earnings', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(356, 'en', 'Cancel Confirmation', 'Cancel Confirmation', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(357, 'en', 'Are you sure to cancel this?', 'Are you sure to cancel this?', '2022-06-14 01:56:05', '2022-06-14 01:56:05'),
(358, 'en', 'Service Cancelled Requests', 'Service Cancelled Requests', '2022-06-14 01:56:08', '2022-06-14 01:56:08'),
(359, 'en', 'Option', 'Option', '2022-06-14 01:56:08', '2022-06-14 01:56:08'),
(360, 'en', 'Chat Lists', 'Chat Lists', '2022-06-14 01:56:13', '2022-06-14 01:56:13'),
(361, 'en', 'Chat Status', 'Chat Status', '2022-06-14 01:56:13', '2022-06-14 01:56:13'),
(362, 'en', 'Blocked by', 'Blocked by', '2022-06-14 01:56:13', '2022-06-14 01:56:13'),
(363, 'en', 'Chat Started', 'Chat Started', '2022-06-14 01:56:13', '2022-06-14 01:56:13'),
(364, 'en', 'Verification Lists', 'Verification Lists', '2022-06-14 01:58:01', '2022-06-14 01:58:01'),
(365, 'en', 'User Type', 'User Type', '2022-06-14 01:58:01', '2022-06-14 01:58:01'),
(366, 'en', 'Verification Status', 'Verification Status', '2022-06-14 01:58:01', '2022-06-14 01:58:01'),
(367, 'en', 'Not Recieved Yet', 'Not Recieved Yet', '2022-06-14 01:58:01', '2022-06-14 01:58:01'),
(368, 'en', 'General Settings', 'General Settings', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(369, 'en', 'System Name', 'System Name', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(370, 'en', 'System Logo - White', 'System Logo - White', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(371, 'en', 'Choose Files', 'Choose Files', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(372, 'en', 'Will be used in admin panel side menu', 'Will be used in admin panel side menu', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(373, 'en', 'System Logo - Black', 'System Logo - Black', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(374, 'en', 'Will be used in admin panel topbar in mobile + Admin login page', 'Will be used in admin panel topbar in mobile + Admin login page', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(375, 'en', 'System Timezone', 'System Timezone', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(376, 'en', 'Admin login page background', 'Admin login page background', '2022-06-14 01:58:22', '2022-06-14 01:58:22'),
(377, 'en', 'Reset Password', 'Reset Password', '2022-06-14 04:08:48', '2022-06-14 04:08:48'),
(378, 'en', 'As A Expert', 'As A Expert', '2022-06-14 04:44:49', '2022-06-14 04:44:49'),
(379, 'en', 'View Details', 'View Details', '2022-06-14 06:58:47', '2022-06-14 06:58:47'),
(380, 'en', 'Verification Details', 'Verification Details', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(381, 'en', 'Verification', 'Verification', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(382, 'en', 'Email Verification', 'Email Verification', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(383, 'en', 'Account Information', 'Account Information', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(384, 'en', 'Mobile', 'Mobile', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(385, 'en', 'Location', 'Location', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(386, 'en', 'Postal Code', 'Postal Code', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(387, 'en', 'Running Package', 'Running Package', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(388, 'en', 'Package has been deleted.', 'Package has been deleted.', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(389, 'en', 'Wallet Balance', 'Wallet Balance', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(390, 'en', 'Verification Information', 'Verification Information', '2022-06-14 06:58:50', '2022-06-14 06:58:50'),
(391, 'en', 'Freelancer Lists', 'Freelancer Lists', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(392, 'en', 'Balance (High > Low)', 'Balance (High > Low)', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(393, 'en', 'Balance (Low > High)', 'Balance (Low > High)', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(394, 'en', 'Package', 'Package', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(395, 'en', 'Package Removed', 'Package Removed', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(396, 'en', 'Ban', 'Ban', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(397, 'en', 'Ban Confirmation', 'Ban Confirmation', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(398, 'en', 'Are you sure to ban this user?', 'Are you sure to ban this user?', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(399, 'en', 'Unban Confirmation', 'Unban Confirmation', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(400, 'en', 'Are you sure to unban this user?', 'Are you sure to unban this user?', '2022-06-19 04:14:19', '2022-06-19 04:14:19'),
(401, 'en', 'Staff', 'Staff', '2022-06-19 04:38:50', '2022-06-19 04:38:50'),
(402, 'en', 'Role', 'Role', '2022-06-19 04:38:50', '2022-06-19 04:38:50'),
(403, 'en', 'Project Payments', 'Project Payments', '2022-06-19 04:41:11', '2022-06-19 04:41:11'),
(404, 'en', 'Following Clients', 'Following Clients', '2022-06-19 05:21:21', '2022-06-19 05:21:21'),
(405, 'en', 'Unfollow Confirmation', 'Unfollow Confirmation', '2022-06-19 05:21:21', '2022-06-19 05:21:21'),
(406, 'en', 'Are you sure to unfollow?', 'Are you sure to unfollow?', '2022-06-19 05:21:21', '2022-06-19 05:21:21'),
(407, 'en', 'Package Payment History', 'Package Payment History', '2022-06-20 01:31:07', '2022-06-20 01:31:07'),
(408, 'en', 'Package Payment History:', 'Package Payment History:', '2022-06-20 01:31:07', '2022-06-20 01:31:07'),
(409, 'en', 'Package Name', 'Package Name', '2022-06-20 01:31:07', '2022-06-20 01:31:07'),
(410, 'en', 'Purchase Date', 'Purchase Date', '2022-06-20 01:31:07', '2022-06-20 01:31:07'),
(411, 'en', 'Service Cancel Requests', 'Service Cancel Requests', '2022-06-20 02:43:14', '2022-06-20 02:43:14'),
(412, 'en', 'Milestone Request', 'Milestone Request', '2022-06-20 02:43:14', '2022-06-20 02:43:14'),
(413, 'en', 'All Roles', 'All Roles', '2022-06-20 03:29:23', '2022-06-20 03:29:23'),
(414, 'en', 'Edit', 'Edit', '2022-06-20 03:29:23', '2022-06-20 03:29:23'),
(415, 'en', 'Create new Role', 'Create new Role', '2022-06-20 03:29:27', '2022-06-20 03:29:27'),
(416, 'en', 'Role Name', 'Role Name', '2022-06-20 03:29:27', '2022-06-20 03:29:27'),
(417, 'en', 'Permissions', 'Permissions', '2022-06-20 03:29:27', '2022-06-20 03:29:27'),
(418, 'en', 'Save', 'Save', '2022-06-20 03:29:27', '2022-06-20 03:29:27'),
(419, 'en', 'Recommended', 'Recommended', '2022-06-20 04:40:53', '2022-06-20 04:40:53'),
(420, 'en', 'Fixed Projects', 'Fixed Projects', '2022-06-20 04:40:53', '2022-06-20 04:40:53'),
(421, 'en', 'Long Term Projects', 'Long Term Projects', '2022-06-20 04:40:53', '2022-06-20 04:40:53'),
(422, 'en', 'Freelancer Following', 'Freelancer Following', '2022-06-20 04:40:53', '2022-06-20 04:40:53'),
(423, 'en', 'Payment System', 'Payment System', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(424, 'en', 'Stripe', 'Stripe', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(425, 'en', 'SSlcommerz', 'SSlcommerz', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(426, 'en', 'PayStack', 'PayStack', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(427, 'en', 'Instamojo', 'Instamojo', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(428, 'en', 'Paytm', 'Paytm', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(429, 'en', 'Pay', 'Pay', '2022-06-20 05:13:35', '2022-06-20 05:13:35'),
(430, 'en', 'Please renew/upgrade your package. Your current package will expire soon', 'Please renew/upgrade your package. Your current package will expire soon', '2022-06-26 23:17:55', '2022-06-26 23:17:55'),
(431, 'en', 'Upgrade Now', 'Upgrade Now', '2022-06-26 23:17:55', '2022-06-26 23:17:55'),
(432, 'en', 'Client Lists', 'Client Lists', '2022-06-27 00:00:05', '2022-06-27 00:00:05'),
(433, 'en', 'All blog posts', 'All blog posts', '2022-06-27 00:00:19', '2022-06-27 00:00:19'),
(434, 'en', 'General Activation', 'General Activation', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(435, 'en', 'Project Approval', 'Project Approval', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(436, 'en', 'Enable project approval feature?', 'Enable project approval feature?', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(437, 'en', 'If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.', 'If you enable this feature all client projects will be pending after adding by clients. You need to approve each project to make those projects public for bidding.', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(438, 'en', 'Force HTTPS', 'Force HTTPS', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(439, 'en', 'Enable Force HTTPS feature?', 'Enable Force HTTPS feature?', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(440, 'en', 'If you enable this feature all requests will be redirect via https.', 'If you enable this feature all requests will be redirect via https.', '2022-06-27 00:06:34', '2022-06-27 00:06:34'),
(441, 'en', 'Name is required', 'Name is required', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(442, 'en', 'Name must be unique', 'Name must be unique', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(443, 'en', 'Name must less than :max characters', 'Name must less than :max characters', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(444, 'en', 'Code is required', 'Code is required', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(445, 'en', 'Code must be unique', 'Code must be unique', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(446, 'en', 'Code must less than :max characters', 'Code must less than :max characters', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(447, 'en', 'System Language', 'System Language', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(448, 'en', 'All Languages', 'All Languages', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(449, 'en', 'Code', 'Code', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(450, 'en', 'RTL', 'RTL', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(451, 'en', 'Enabled', 'Enabled', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(452, 'en', 'Off', 'Off', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(453, 'en', 'Translate', 'Translate', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(454, 'en', 'Create New Language', 'Create New Language', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(455, 'en', 'Eg. English', 'Eg. English', '2022-06-27 00:06:52', '2022-06-27 00:06:52'),
(456, 'en', 'Currency List', 'Currency List', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(457, 'en', 'Add New Currency', 'Add New Currency', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(458, 'en', 'System Default Currency', 'System Default Currency', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(459, 'en', 'Currency Formats', 'Currency Formats', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(460, 'en', 'All Currencies', 'All Currencies', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(461, 'en', 'Currency name', 'Currency name', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(462, 'en', 'Currency symbol', 'Currency symbol', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(463, 'en', 'Currency code', 'Currency code', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(464, 'en', 'Exchange rate', 'Exchange rate', '2022-06-27 00:07:07', '2022-06-27 00:07:07'),
(465, 'en', 'Edit Configuration', 'Edit Configuration', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(466, 'en', 'MAIL DRIVER', 'MAIL DRIVER', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(467, 'en', 'Select sendmail if you do not have smtp', 'Select sendmail if you do not have smtp', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(468, 'en', 'Select mail driver', 'Select mail driver', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(469, 'en', 'Sendmail', 'Sendmail', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(470, 'en', 'SMTP', 'SMTP', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(471, 'en', 'MAIL HOST', 'MAIL HOST', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(472, 'en', 'MAIL PORT', 'MAIL PORT', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(473, 'en', 'MAIL USERNAME', 'MAIL USERNAME', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(474, 'en', 'MAIL PASSWORD', 'MAIL PASSWORD', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(475, 'en', 'MAIL FROM ADDRESS', 'MAIL FROM ADDRESS', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(476, 'en', 'MAIL FROM NAME', 'MAIL FROM NAME', '2022-06-27 00:07:22', '2022-06-27 00:07:22'),
(477, 'en', 'Minimum Amount For Withdraw Request', 'Minimum Amount For Withdraw Request', '2022-06-27 00:10:37', '2022-06-27 00:10:37'),
(478, 'en', 'Minimum Amount', 'Minimum Amount', '2022-06-27 00:10:37', '2022-06-27 00:10:37'),
(479, 'en', 'Freelancer need to have minimum this amount of balance in his account to make a withdrawal request.', 'Freelancer need to have minimum this amount of balance in his account to make a withdrawal request.', '2022-06-27 00:10:37', '2022-06-27 00:10:37'),
(480, 'en', 'Paypal Payment Charge', 'Paypal Payment Charge', '2022-06-27 00:10:37', '2022-06-27 00:10:37'),
(481, 'en', 'Bank Payment Charge', 'Bank Payment Charge', '2022-06-27 00:10:37', '2022-06-27 00:10:37'),
(482, 'en', 'Social Media & Other 3rd Party Configuration', 'Social Media & Other 3rd Party Configuration', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(483, 'en', 'Facebook Login', 'Facebook Login', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(484, 'en', 'Activation', 'Activation', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(485, 'en', 'APP ID', 'APP ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(486, 'en', 'APP SECRET', 'APP SECRET', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(487, 'en', 'Google Login', 'Google Login', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(488, 'en', 'GOOGLE CLIENT ID', 'GOOGLE CLIENT ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(489, 'en', 'GOOGLE CLIENT SECRET', 'GOOGLE CLIENT SECRET', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(490, 'en', 'Twitter Login', 'Twitter Login', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(491, 'en', 'TWITTER CLIENT ID', 'TWITTER CLIENT ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(492, 'en', 'TWITTER CLIENT SECRET', 'TWITTER CLIENT SECRET', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(493, 'en', 'LinkedIn Login', 'LinkedIn Login', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(494, 'en', 'LINKEDIN CLIENT ID', 'LINKEDIN CLIENT ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(495, 'en', 'LINKEDIN CLIENT SECRET', 'LINKEDIN CLIENT SECRET', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(496, 'en', 'Google Analytics', 'Google Analytics', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(497, 'en', 'TRACKING ID', 'TRACKING ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(498, 'en', 'Google reCAPTCHA', 'Google reCAPTCHA', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(499, 'en', 'Site KEY', 'Site KEY', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(500, 'en', 'Facebook Chat', 'Facebook Chat', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(501, 'en', 'Facebook Chat Setting', 'Facebook Chat Setting', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(502, 'en', 'FACEBOOK PAGE ID', 'FACEBOOK PAGE ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(503, 'en', 'Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.', 'Please be carefull when you are configuring Facebook chat. For incorrect configuration you will not get messenger icon on your user-end site.', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(504, 'en', 'Login into your facebook page', 'Login into your facebook page', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(505, 'en', 'Find the About option of your facebook page', 'Find the About option of your facebook page', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(506, 'en', 'At the very bottom, you can find the \\“Facebook Page ID\\”', 'At the very bottom, you can find the \\“Facebook Page ID\\”', '2022-06-27 00:10:47', '2022-06-27 00:10:47');
INSERT INTO `translations` (`id`, `lang`, `lang_key`, `lang_value`, `created_at`, `updated_at`) VALUES
(507, 'en', 'Go to Settings of your page and find the option of \\\"Advance Messaging\\\"', 'Go to Settings of your page and find the option of \\\"Advance Messaging\\\"', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(508, 'en', 'Scroll down that page and you will get \\\"white listed domain\\\"', 'Scroll down that page and you will get \\\"white listed domain\\\"', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(509, 'en', 'Set your website domain name', 'Set your website domain name', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(510, 'en', 'Facebook Pixel', 'Facebook Pixel', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(511, 'en', 'Facebook Pixel Setting', 'Facebook Pixel Setting', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(512, 'en', 'Pixel ID', 'Pixel ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(513, 'en', 'Please be carefull when you are configuring Facebook pixel.', 'Please be carefull when you are configuring Facebook pixel.', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(514, 'en', 'Log in to Facebook and go to your Ads Manager account', 'Log in to Facebook and go to your Ads Manager account', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(515, 'en', 'Open the Navigation Bar and select Events Manager', 'Open the Navigation Bar and select Events Manager', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(516, 'en', 'Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field', 'Copy your Pixel ID from underneath your Site Name and paste the number into Facebook Pixel ID field', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(517, 'en', 'Facebook Comment', 'Facebook Comment', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(518, 'en', 'Facebook Comment Setting', 'Facebook Comment Setting', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(519, 'en', 'Facebook App ID', 'Facebook App ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(520, 'en', 'Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.', 'Please be carefull when you are configuring Facebook Comment. For incorrect configuration you will not get comment section on your user-end site.', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(521, 'en', 'After then go to this URL https://developers.facebook.com/apps/', 'After then go to this URL https://developers.facebook.com/apps/', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(522, 'en', 'Create Your App', 'Create Your App', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(523, 'en', 'In Dashboard page you will get your App ID', 'In Dashboard page you will get your App ID', '2022-06-27 00:10:47', '2022-06-27 00:10:47'),
(524, 'en', 'City', 'City', '2022-06-27 01:15:33', '2022-06-27 01:15:33'),
(525, 'en', 'Eg. 1203', 'Eg. 1203', '2022-06-27 01:15:33', '2022-06-27 01:15:33'),
(526, 'en', 'Address', 'Address', '2022-06-27 01:15:33', '2022-06-27 01:15:33'),
(527, 'en', 'Contact', 'Contact', '2022-06-27 01:15:33', '2022-06-27 01:15:33'),
(528, 'en', 'Nationality', 'Nationality', '2022-06-27 01:15:33', '2022-06-27 01:15:33'),
(529, 'en', 'List of srevices purchased', 'List of srevices purchased', '2022-06-27 02:46:45', '2022-06-27 02:46:45'),
(530, 'en', 'Bought At', 'Bought At', '2022-06-27 02:46:45', '2022-06-27 02:46:45'),
(531, 'en', 'List of srevices requested for cancellation', 'List of srevices requested for cancellation', '2022-06-27 02:46:52', '2022-06-27 02:46:52'),
(532, 'en', 'Add New Project', 'Add New Project', '2022-06-27 02:47:08', '2022-06-27 02:47:08'),
(533, 'en', 'Complete Confirmation', 'Complete Confirmation', '2022-06-27 02:47:08', '2022-06-27 02:47:08'),
(534, 'en', 'Are you sure to complete this project?', 'Are you sure to complete this project?', '2022-06-27 02:47:08', '2022-06-27 02:47:08'),
(535, 'en', 'Only a-z, numbers, hypen allowed', 'Only a-z, numbers, hypen allowed', '2022-06-27 02:47:51', '2022-06-27 02:47:51'),
(536, 'en', 'Phone', 'Phone', '2022-06-27 02:47:51', '2022-06-27 02:47:51'),
(537, 'en', 'This Month Expense', 'This Month Expense', '2022-06-27 03:29:29', '2022-06-27 03:29:29'),
(538, 'en', 'Profile Images', 'Profile Images', '2022-06-27 03:40:00', '2022-06-27 03:40:00'),
(539, 'en', 'Profile Image', 'Profile Image', '2022-06-27 03:40:00', '2022-06-27 03:40:00'),
(540, 'en', 'Cover Image', 'Cover Image', '2022-06-27 03:40:00', '2022-06-27 03:40:00'),
(541, 'en', 'Total Expense', 'Total Expense', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(542, 'en', 'Total Projects', 'Total Projects', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(543, 'en', 'Remaining Fixed Projects', 'Remaining Fixed Projects', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(544, 'en', 'Remaining Long Term Projects', 'Remaining Long Term Projects', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(545, 'en', 'Freelancer Bookmark option', 'Freelancer Bookmark option', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(546, 'en', 'Suggested Freelancers', 'Suggested Freelancers', '2022-06-27 03:48:38', '2022-06-27 03:48:38'),
(547, 'en', 'Skill list', 'Skill list', '2022-06-27 03:57:55', '2022-06-27 03:57:55'),
(548, 'en', ' Add New Skill', ' Add New Skill', '2022-06-27 03:57:55', '2022-06-27 03:57:55'),
(549, 'en', 'Eg. wordpress', 'Eg. wordpress', '2022-06-27 03:57:55', '2022-06-27 03:57:55'),
(550, 'en', 'Add New Skill', 'Add New Skill', '2022-06-27 03:57:55', '2022-06-27 03:57:55'),
(551, 'en', 'Freelnacer Packages', 'Freelnacer Packages', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(552, 'en', 'Create New Package', 'Create New Package', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(553, 'en', 'times', 'times', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(554, 'en', 'badge', 'badge', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(555, 'en', 'Not Recommended', 'Not Recommended', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(556, 'en', 'Active', 'Active', '2022-06-27 03:58:23', '2022-06-27 03:58:23'),
(557, 'en', 'Badges list', 'Badges list', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(558, 'en', 'Min number', 'Min number', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(559, 'en', 'Add New Badge', 'Add New Badge', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(560, 'en', 'Eg. Completed 100+ projects', 'Eg. Completed 100+ projects', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(561, 'en', 'Badge Type', 'Badge Type', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(562, 'en', 'Project Badge', 'Project Badge', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(563, 'en', 'Earning Badge', 'Earning Badge', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(564, 'en', 'Membership Badge', 'Membership Badge', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(565, 'en', 'Min number of ', 'Min number of ', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(566, 'en', 'account age - in days', 'account age - in days', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(567, 'en', 'Eg. 100', 'Eg. 100', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(568, 'en', 'Badge Icon', 'Badge Icon', '2022-06-27 03:59:55', '2022-06-27 03:59:55'),
(569, 'en', 'Eg. Bronze Package', 'Eg. Bronze Package', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(570, 'en', 'Eg. 25', 'Eg. 25', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(571, 'en', 'Use 0 for free package', 'Use 0 for free package', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(572, 'en', 'Validate For', 'Validate For', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(573, 'en', 'Eg. 30', 'Eg. 30', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(574, 'en', 'Number in days. Use 0 for life time', 'Number in days. Use 0 for life time', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(575, 'en', 'Commision', 'Commision', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(576, 'en', 'Eg. 5', 'Eg. 5', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(577, 'en', 'Amount will be deducted from project payment. Use 0 for no deduction', 'Amount will be deducted from project payment. Use 0 for no deduction', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(578, 'en', 'Commision Type', 'Commision Type', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(579, 'en', 'Percent', 'Percent', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(580, 'en', 'Flat Rate', 'Flat Rate', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(581, 'en', 'Bid Limitation for Fixed Projects', 'Bid Limitation for Fixed Projects', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(582, 'en', 'Eg. 10', 'Eg. 10', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(583, 'en', 'Bid Limitation for Long Term Projects', 'Bid Limitation for Long Term Projects', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(584, 'en', 'Eg. 120', 'Eg. 120', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(585, 'en', 'Eg. 8', 'Eg. 8', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(586, 'en', 'Job Experience Limit', 'Job Experience Limit', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(587, 'en', 'Eg. 2', 'Eg. 2', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(588, 'en', 'Enable Client Following ?', 'Enable Client Following ?', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(589, 'en', 'Recommended ?', 'Recommended ?', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(590, 'en', 'Publish Package?', 'Publish Package?', '2022-06-27 04:03:21', '2022-06-27 04:03:21'),
(591, 'en', 'Edit Currency', 'Edit Currency', '2022-06-27 04:11:11', '2022-06-27 04:11:11'),
(592, 'en', 'Update Currency', 'Update Currency', '2022-06-27 04:11:11', '2022-06-27 04:11:11'),
(593, 'en', 'Create New Currency', 'Create New Currency', '2022-06-27 04:11:18', '2022-06-27 04:11:18'),
(594, 'en', 'Website Header', 'Website Header', '2022-06-27 04:13:44', '2022-06-27 04:13:44'),
(595, 'en', 'Header Setting', 'Header Setting', '2022-06-27 04:13:44', '2022-06-27 04:13:44'),
(596, 'en', 'Header Logo', 'Header Logo', '2022-06-27 04:13:44', '2022-06-27 04:13:44'),
(597, 'en', 'Enable stikcy header?', 'Enable stikcy header?', '2022-06-27 04:13:44', '2022-06-27 04:13:44'),
(598, 'en', 'Website Footer', 'Website Footer', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(599, 'en', 'Footer Widget', 'Footer Widget', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(600, 'en', 'About Widget', 'About Widget', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(601, 'en', 'Footer Logo', 'Footer Logo', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(602, 'en', 'About description', 'About description', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(603, 'en', 'Link Widget One', 'Link Widget One', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(604, 'en', 'Links', 'Links', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(605, 'en', 'Link Widget Two', 'Link Widget Two', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(606, 'en', 'Social Widget', 'Social Widget', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(607, 'en', 'Social Links', 'Social Links', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(608, 'en', 'Footer Bottom', 'Footer Bottom', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(609, 'en', 'Show Language Switcher?', 'Show Language Switcher?', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(610, 'en', 'Copyright Text', 'Copyright Text', '2022-06-27 04:13:53', '2022-06-27 04:13:53'),
(611, 'en', 'Website Pages', 'Website Pages', '2022-06-27 04:14:13', '2022-06-27 04:14:13'),
(612, 'en', 'All Pages', 'All Pages', '2022-06-27 04:14:13', '2022-06-27 04:14:13'),
(613, 'en', 'Add New Page', 'Add New Page', '2022-06-27 04:14:13', '2022-06-27 04:14:13'),
(614, 'en', 'URL', 'URL', '2022-06-27 04:14:13', '2022-06-27 04:14:13'),
(615, 'en', 'Home Page', 'Home Page', '2022-06-27 04:14:13', '2022-06-27 04:14:13'),
(616, 'en', 'General', 'General', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(617, 'en', 'Frontend Website Name', 'Frontend Website Name', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(618, 'en', 'Site Motto', 'Site Motto', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(619, 'en', 'Site Icon', 'Site Icon', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(620, 'en', 'Website favicon. 32x32 .png', 'Website favicon. 32x32 .png', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(621, 'en', 'Website Base Color', 'Website Base Color', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(622, 'en', 'Hex Color Code', 'Hex Color Code', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(623, 'en', 'Website Base Hover Color', 'Website Base Hover Color', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(624, 'en', 'Global Seo', 'Global Seo', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(625, 'en', 'Meta Title', 'Meta Title', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(626, 'en', 'Meta description', 'Meta description', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(627, 'en', 'Keywords', 'Keywords', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(628, 'en', 'Separate with coma', 'Separate with coma', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(629, 'en', 'Meta Image', 'Meta Image', '2022-06-27 04:14:22', '2022-06-27 04:14:22'),
(630, 'en', 'All Blog Categories', 'All Blog Categories', '2022-06-27 04:25:13', '2022-06-27 04:25:13'),
(631, 'en', 'Blog Categories', 'Blog Categories', '2022-06-27 04:25:13', '2022-06-27 04:25:13'),
(632, 'en', 'Type name & Enter', 'Type name & Enter', '2022-06-27 04:25:13', '2022-06-27 04:25:13'),
(633, 'en', 'Save New Category', 'Save New Category', '2022-06-27 04:25:13', '2022-06-27 04:25:13'),
(634, 'en', 'All Staffs', 'All Staffs', '2022-06-27 04:37:09', '2022-06-27 04:37:09'),
(635, 'en', 'Paypal Configuration', 'Paypal Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(636, 'en', 'PAYPAL CLIENT ID', 'PAYPAL CLIENT ID', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(637, 'en', 'PAYPAL CLIENT SECRET', 'PAYPAL CLIENT SECRET', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(638, 'en', 'Sandbox Activation', 'Sandbox Activation', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(639, 'en', 'Stripe Configuration', 'Stripe Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(640, 'en', 'STRIPE KEY', 'STRIPE KEY', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(641, 'en', 'STRIPE SECRET', 'STRIPE SECRET', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(642, 'en', 'SSlcommerz Configuration', 'SSlcommerz Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(643, 'en', 'Sslcz Store Id', 'Sslcz Store Id', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(644, 'en', 'Sslcz store password', 'Sslcz store password', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(645, 'en', 'Sslcommerz Sandbox Mode', 'Sslcommerz Sandbox Mode', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(646, 'en', 'PayStack Configuration', 'PayStack Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(647, 'en', 'Public Key', 'Public Key', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(648, 'en', 'Secret Key', 'Secret Key', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(649, 'en', 'Merchant Key', 'Merchant Key', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(650, 'en', 'Instamojo Configuration', 'Instamojo Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(651, 'en', 'API Key', 'API Key', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(652, 'en', 'Auth Token', 'Auth Token', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(653, 'en', 'Paytm Configuration', 'Paytm Configuration', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(654, 'en', 'Environment', 'Environment', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(655, 'en', 'Merchant ID', 'Merchant ID', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(656, 'en', 'Merchant Website', 'Merchant Website', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(657, 'en', 'Paytm Channel', 'Paytm Channel', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(658, 'en', 'Industry Type', 'Industry Type', '2022-06-27 04:44:08', '2022-06-27 04:44:08'),
(659, 'en', 'Aamar Pay Configuration', 'Aamar Pay Configuration', '2022-06-27 04:58:57', '2022-06-27 04:58:57'),
(660, 'en', 'New Category has been added successfully!', 'New Category has been added successfully!', '2022-06-29 23:10:20', '2022-06-29 23:10:20'),
(661, 'en', 'Select Category', 'Select Category', '2022-06-29 23:16:42', '2022-06-29 23:16:42'),
(662, 'en', 'Please select a category.', 'Please select a category.', '2022-06-29 23:16:42', '2022-06-29 23:16:42'),
(663, 'en', 'Update Service', 'Update Service', '2022-06-29 23:16:42', '2022-06-29 23:16:42'),
(664, 'en', 'Cancel Purchased Services', 'Cancel Purchased Services', '2022-06-30 02:55:50', '2022-06-30 02:55:50'),
(665, 'en', 'Website Home', 'Website Home', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(666, 'en', 'Sliders Section', 'Sliders Section', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(667, 'en', 'Slider Images', 'Slider Images', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(668, 'en', 'Recommended size', 'Recommended size', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(669, 'en', 'Clients Section', 'Clients Section', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(670, 'en', 'Clients Logos', 'Clients Logos', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(671, 'en', 'How it Works Section', 'How it Works Section', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(672, 'en', 'Sub title', 'Sub title', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(673, 'en', 'Type..', 'Type..', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(674, 'en', 'Step 1', 'Step 1', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(675, 'en', 'Image', 'Image', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(676, 'en', 'Step 2', 'Step 2', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(677, 'en', 'Step 3', 'Step 3', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(678, 'en', 'Latest Project Section', 'Latest Project Section', '2022-06-30 04:22:41', '2022-06-30 04:22:41'),
(679, 'en', 'Featured Category Section', 'Featured Category Section', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(680, 'en', 'Select Categories', 'Select Categories', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(681, 'en', 'Left Banner', 'Left Banner', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(682, 'en', 'Right Banner', 'Right Banner', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(683, 'en', 'CTA Section', 'CTA Section', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(684, 'en', 'Blog Section', 'Blog Section', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(685, 'en', 'Max Blog Show', 'Max Blog Show', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(686, 'en', 'Seo Fields', 'Seo Fields', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(687, 'en', 'Description', 'Description', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(688, 'en', 'Keyword, Keyword', 'Keyword, Keyword', '2022-06-30 04:22:42', '2022-06-30 04:22:42'),
(689, 'en', 'Experts Lists', 'Experts Lists', '2022-07-16 22:09:45', '2022-07-16 22:09:45'),
(690, 'en', 'Work experiences', 'Work experiences', '2022-07-16 22:09:47', '2022-07-16 22:09:47'),
(691, 'en', 'Freelnacer Payments', 'Freelnacer Payments', '2022-08-11 00:08:31', '2022-08-11 00:08:31'),
(692, 'en', 'Paid by', 'Paid by', '2022-08-14 03:44:50', '2022-08-14 03:44:50'),
(693, 'en', 'Freelancer Reviews by Clients', 'Freelancer Reviews by Clients', '2022-08-14 03:47:50', '2022-08-14 03:47:50'),
(694, 'en', 'Post A New Project', 'Post A New Project', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(695, 'en', 'Project title', 'Project title', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(696, 'en', 'Your fixed type project post limit is over.', 'Your fixed type project post limit is over.', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(697, 'en', 'Your long term project post limit is over.', 'Your long term project post limit is over.', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(698, 'en', 'Project budget', 'Project budget', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(699, 'en', 'Project summary', 'Project summary', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(700, 'en', 'Skills required', 'Skills required', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(701, 'en', 'Project Details', 'Project Details', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(702, 'en', 'File attachment', 'File attachment', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(703, 'en', 'Upgrade your Package.', 'Upgrade your Package.', '2022-08-22 03:57:22', '2022-08-22 03:57:22'),
(704, 'en', 'Client Packages', 'Client Packages', '2022-08-22 04:03:51', '2022-08-22 04:03:51'),
(705, 'en', 'Enable Freelancer Following ?', 'Enable Freelancer Following ?', '2022-08-22 04:03:53', '2022-08-22 04:03:53'),
(706, 'en', 'Your verification file has been sent successfully', 'Your verification file has been sent successfully', '2022-08-22 23:59:32', '2022-08-22 23:59:32'),
(707, 'en', 'Your info has been updated successfully', 'Your info has been updated successfully', '2022-08-23 00:32:52', '2022-08-23 00:32:52'),
(708, 'en', 'Your identity verification has not been approved yet.', 'Your identity verification has not been approved yet.', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(709, 'en', 'Category', 'Category', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(710, 'en', 'Add Portfolio', 'Add Portfolio', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(711, 'en', 'Work Experience', 'Work Experience', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(712, 'en', 'Company Name', 'Company Name', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(713, 'en', 'Joining date', 'Joining date', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(714, 'en', 'currently working here', 'currently working here', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(715, 'en', 'Leaving date', 'Leaving date', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(716, 'en', 'Company Website', 'Company Website', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(717, 'en', 'Designation', 'Designation', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(718, 'en', 'Company Location', 'Company Location', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(719, 'en', 'Add Work Experience', 'Add Work Experience', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(720, 'en', 'Education Information', 'Education Information', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(721, 'en', 'School Name', 'School Name', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(722, 'en', 'Degree', 'Degree', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(723, 'en', 'Passing Year', 'Passing Year', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(724, 'en', 'Add Education Information', 'Add Education Information', '2022-08-23 00:32:53', '2022-08-23 00:32:53'),
(725, 'en', 'Create Employee', 'Create Employee', '2022-08-23 04:26:01', '2022-08-23 04:26:01'),
(726, 'en', 'Employee Name', 'Employee Name', '2022-08-23 04:26:01', '2022-08-23 04:26:01'),
(727, 'en', 'Staff has been inserted successfully', 'Staff has been inserted successfully', '2022-08-23 04:26:26', '2022-08-23 04:26:26'),
(728, 'en', 'Create Roles', 'Create Roles', '2022-08-23 04:26:40', '2022-08-23 04:26:40'),
(729, 'en', 'Role has been inserted successfully', 'Role has been inserted successfully', '2022-08-23 04:27:00', '2022-08-23 04:27:00'),
(730, 'en', 'Pending', 'Pending', '2022-08-23 04:44:56', '2022-08-23 04:44:56'),
(731, 'en', 'Show', 'Show', '2022-08-23 04:44:56', '2022-08-23 04:44:56'),
(732, 'en', 'Paid via', 'Paid via', '2022-08-23 05:03:04', '2022-08-23 05:03:04'),
(733, 'en', 'New Request', 'New Request', '2022-08-23 05:04:29', '2022-08-23 05:04:29'),
(734, 'en', 'Accept', 'Accept', '2022-08-23 05:04:50', '2022-08-23 05:04:50'),
(735, 'en', 'Reject', 'Reject', '2022-08-23 05:04:50', '2022-08-23 05:04:50'),
(736, 'en', 'Chats Between', 'Chats Between', '2022-08-23 05:05:20', '2022-08-23 05:05:20'),
(737, 'en', 'Load More', 'Load More', '2022-08-23 05:05:20', '2022-08-23 05:05:20'),
(738, 'en', 'Bank Name', 'Bank Name', '2022-08-23 05:05:47', '2022-08-23 05:05:47'),
(739, 'en', 'Bank Account Name', 'Bank Account Name', '2022-08-23 05:05:47', '2022-08-23 05:05:47'),
(740, 'en', 'Bank Account Number', 'Bank Account Number', '2022-08-23 05:05:47', '2022-08-23 05:05:47'),
(741, 'en', 'Paypal Account', 'Paypal Account', '2022-08-23 05:05:47', '2022-08-23 05:05:47'),
(742, 'en', 'Paypal Email', 'Paypal Email', '2022-08-23 05:05:47', '2022-08-23 05:05:47'),
(743, 'en', 'Edit Package', 'Edit Package', '2022-08-23 05:06:39', '2022-08-23 05:06:39'),
(744, 'en', 'Publish Package ?', 'Publish Package ?', '2022-08-23 05:06:39', '2022-08-23 05:06:39'),
(745, 'en', 'Update Package', 'Update Package', '2022-08-23 05:06:39', '2022-08-23 05:06:39'),
(746, 'en', 'Total Spent', 'Total Spent', '2022-08-23 05:09:08', '2022-08-23 05:09:08'),
(747, 'en', 'Client Badges list', 'Client Badges list', '2022-08-23 05:09:20', '2022-08-23 05:09:20'),
(748, 'en', 'Spent Badge', 'Spent Badge', '2022-08-23 05:09:20', '2022-08-23 05:09:20'),
(749, 'en', 'Update New Package', 'Update New Package', '2022-08-23 05:09:26', '2022-08-23 05:09:26'),
(750, 'en', 'Client Reviews by Freelancers', 'Client Reviews by Freelancers', '2022-08-23 05:10:22', '2022-08-23 05:10:22'),
(751, 'en', 'Withdraw Requests list', 'Withdraw Requests list', '2022-08-23 05:10:39', '2022-08-23 05:10:39'),
(752, 'en', 'Paid', 'Paid', '2022-08-23 05:10:40', '2022-08-23 05:10:40'),
(753, 'en', 'Show Reciept', 'Show Reciept', '2022-08-23 05:10:40', '2022-08-23 05:10:40'),
(754, 'en', 'Add New Post', 'Add New Post', '2022-08-23 05:13:38', '2022-08-23 05:13:38'),
(755, 'en', 'Blog category has been created successfully', 'Blog category has been created successfully', '2022-08-23 05:14:05', '2022-08-23 05:14:05'),
(756, 'en', 'New Badge has been updated successfully!', 'New Badge has been updated successfully!', '2022-08-23 05:14:53', '2022-08-23 05:14:53'),
(757, 'en', 'Update Badge', 'Update Badge', '2022-08-23 05:23:02', '2022-08-23 05:23:02'),
(758, 'en', 'Page Content', 'Page Content', '2022-08-23 05:27:30', '2022-08-23 05:27:30'),
(759, 'en', 'Link', 'Link', '2022-08-23 05:27:30', '2022-08-23 05:27:30'),
(760, 'en', 'Use character, number, hypen only', 'Use character, number, hypen only', '2022-08-23 05:27:30', '2022-08-23 05:27:30'),
(761, 'en', 'Add Content', 'Add Content', '2022-08-23 05:27:30', '2022-08-23 05:27:30'),
(762, 'en', 'Update Page', 'Update Page', '2022-08-23 05:27:30', '2022-08-23 05:27:30'),
(763, 'en', 'Total', 'Total', '2022-08-29 03:24:19', '2022-08-29 03:24:19'),
(764, 'en', 'freelancers found for', 'freelancers found for', '2022-08-29 03:24:19', '2022-08-29 03:24:19'),
(765, 'en', 'Please verify your Email', 'Please verify your Email', '2022-08-30 05:12:34', '2022-08-30 05:12:34'),
(766, 'en', 'Slug', 'Slug', '2022-08-30 23:46:55', '2022-08-30 23:46:55'),
(767, 'en', 'Identity Verified', 'Identity Verified', '2022-08-31 06:44:57', '2022-08-31 06:44:57'),
(768, 'en', 'About This Service', 'About This Service', '2022-09-02 22:46:16', '2022-09-02 22:46:16'),
(769, 'en', 'Days Delivery', 'Days Delivery', '2022-09-02 22:46:16', '2022-09-02 22:46:16'),
(770, 'en', 'Revisions', 'Revisions', '2022-09-02 22:46:16', '2022-09-02 22:46:16'),
(771, 'en', 'Whats Included', 'Whats Included', '2022-09-02 22:46:16', '2022-09-02 22:46:16'),
(772, 'en', 'Join to order this service', 'Join to order this service', '2022-09-02 22:52:34', '2022-09-02 22:52:34'),
(773, 'en', 'STANDARD Package - Recommended', 'STANDARD Package - Recommended', '2022-09-02 22:52:34', '2022-09-02 22:52:34'),
(774, 'en', 'Continue', 'Continue', '2022-09-02 22:53:26', '2022-09-02 22:53:26'),
(775, 'en', 'PREMIUM Package - Must for PRO', 'PREMIUM Package - Must for PRO', '2022-09-02 22:53:26', '2022-09-02 22:53:26'),
(776, 'en', 'Select a payment option', 'Select a payment option', '2022-09-02 22:53:40', '2022-09-02 22:53:40'),
(777, 'en', 'Service Package Purchase by Offline Payment', 'Service Package Purchase by Offline Payment', '2022-09-02 22:53:40', '2022-09-02 22:53:40'),
(778, 'en', 'Attachments', 'Attachments', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(779, 'en', 'No attachment', 'No attachment', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(780, 'en', 'You need to login as a freelancer to bid the project.', 'You need to login as a freelancer to bid the project.', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(781, 'en', 'Posted', 'Posted', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(782, 'en', 'Posted in', 'Posted in', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(783, 'en', 'About This Client', 'About This Client', '2022-09-02 23:17:56', '2022-09-02 23:17:56'),
(784, 'en', 'jobs posted', 'jobs posted', '2022-09-02 23:41:43', '2022-09-02 23:41:43'),
(785, 'en', 'Bookmark Project', 'Bookmark Project', '2022-09-02 23:41:43', '2022-09-02 23:41:43'),
(786, 'en', 'Similar Projects', 'Similar Projects', '2022-09-02 23:41:43', '2022-09-02 23:41:43'),
(787, 'en', 'Total Bids', 'Total Bids', '2022-09-02 23:41:43', '2022-09-02 23:41:43'),
(788, 'en', 'Bid For Project', 'Bid For Project', '2022-09-02 23:41:43', '2022-09-02 23:41:43'),
(789, 'en', 'Follow', 'Follow', '2022-09-02 23:55:57', '2022-09-02 23:55:57'),
(790, 'en', 'You need be a client to order services', 'You need be a client to order services', '2022-09-05 20:57:33', '2022-09-05 20:57:33'),
(791, 'en', 'Place Bid', 'Place Bid', '2022-09-05 20:57:49', '2022-09-05 20:57:49'),
(792, 'en', 'Place Bid Price', 'Place Bid Price', '2022-09-06 01:51:47', '2022-09-06 01:51:47'),
(793, 'en', 'Cover Letter', 'Cover Letter', '2022-09-06 01:51:47', '2022-09-06 01:51:47'),
(794, 'en', 'Submit', 'Submit', '2022-09-06 01:51:47', '2022-09-06 01:51:47'),
(795, 'en', 'Remove Bookmark', 'Remove Bookmark', '2022-09-08 00:06:11', '2022-09-08 00:06:11'),
(796, 'en', 'Your identity verifed successfully.', 'Your identity verifed successfully.', '2022-09-08 03:30:14', '2022-09-08 03:30:14'),
(797, 'en', 'Package Removed.', 'Package Removed.', '2022-09-08 03:43:46', '2022-09-08 03:43:46'),
(798, 'en', 'Add Page', 'Add Page', '2022-09-08 03:49:08', '2022-09-08 03:49:08'),
(799, 'en', 'Is this language RTL?', 'Is this language RTL?', '2022-09-08 03:50:12', '2022-09-08 03:50:12'),
(800, 'en', 'Create', 'Create', '2022-09-08 03:50:12', '2022-09-08 03:50:12'),
(801, 'en', 'Set Default Language for System', 'Set Default Language for System', '2022-09-08 03:50:12', '2022-09-08 03:50:12'),
(802, 'en', 'Default Language', 'Default Language', '2022-09-08 03:50:12', '2022-09-08 03:50:12'),
(803, 'en', 'Save Default Language', 'Save Default Language', '2022-09-08 03:50:12', '2022-09-08 03:50:12'),
(804, 'en', 'Work Experience Edit', 'Work Experience Edit', '2022-09-10 01:29:24', '2022-09-10 01:29:24'),
(805, 'en', 'Update Work Experience', 'Update Work Experience', '2022-09-10 01:29:24', '2022-09-10 01:29:24'),
(806, 'en', 'New work experience has been added successfully', 'New work experience has been added successfully', '2022-09-10 03:02:58', '2022-09-10 03:02:58'),
(807, 'en', 'Present', 'Present', '2022-09-10 03:04:10', '2022-09-10 03:04:10'),
(808, 'en', 'Pasing Year', 'Pasing Year', '2022-09-10 03:09:40', '2022-09-10 03:09:40'),
(809, 'en', 'Education Details Edit', 'Education Details Edit', '2022-09-10 03:11:03', '2022-09-10 03:11:03'),
(810, 'en', 'Education Details', 'Education Details', '2022-09-10 03:11:03', '2022-09-10 03:11:03'),
(811, 'en', 'Education Info has been updated successfully', 'Education Info has been updated successfully', '2022-09-10 03:11:13', '2022-09-10 03:11:13'),
(812, 'en', 'Your Portfolio has been added successfully', 'Your Portfolio has been added successfully', '2022-09-10 03:30:46', '2022-09-10 03:30:46'),
(813, 'en', 'Service saved successfully', 'Service saved successfully', '2022-09-10 05:39:39', '2022-09-10 05:39:39'),
(814, 'en', 'BASIC Package - Popular', 'BASIC Package - Popular', '2022-09-10 06:26:27', '2022-09-10 06:26:27'),
(815, 'en', 'Service successfully deleted.', 'Service successfully deleted.', '2022-09-11 01:48:01', '2022-09-11 01:48:01'),
(816, 'en', 'Edit Service', 'Edit Service', '2022-09-11 01:48:03', '2022-09-11 01:48:03'),
(817, 'en', 'Send invitation for a private project', 'Send invitation for a private project', '2022-09-12 00:52:41', '2022-09-12 00:52:41'),
(818, 'en', 'About the project', 'About the project', '2022-09-12 01:20:58', '2022-09-12 01:20:58'),
(819, 'en', 'You have recieved a proposal for a project by', 'You have recieved a proposal for a project by', '2022-09-12 05:41:53', '2022-09-12 05:41:53'),
(820, 'en', 'Go to link', 'Go to link', '2022-09-12 05:44:24', '2022-09-12 05:44:24'),
(821, 'en', 'New', 'New', '2022-09-13 01:57:32', '2022-09-13 01:57:32'),
(822, 'en', 'AamarPay', 'AamarPay', '2022-09-13 05:06:12', '2022-09-13 05:06:12'),
(823, 'en', 'Your Portfolio has been updated successfully', 'Your Portfolio has been updated successfully', '2022-09-15 23:02:09', '2022-09-15 23:02:09'),
(824, 'en', 'Z Code', 'Z Code', '2022-09-17 03:47:46', '2022-09-17 03:47:46'),
(825, 'en', 'A new package has been purchased by', 'A new package has been purchased by', '2022-09-18 10:10:36', '2022-09-18 10:10:36'),
(826, 'en', 'Sorry! Your service creation limit is over.', 'Sorry! Your service creation limit is over.', '2022-09-19 06:38:12', '2022-09-19 06:38:12'),
(827, 'en', 'Edit Category', 'Edit Category', '2022-09-20 05:30:14', '2022-09-20 05:30:14'),
(828, 'en', 'Expert', 'Expert', '2022-10-20 19:14:00', '2022-10-20 19:14:00'),
(829, 'en', 'Update Employee Information', 'Update Employee Information', '2022-10-25 10:42:33', '2022-10-25 10:42:33'),
(830, 'en', 'Browse More Categories', 'Browse More Categories', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(831, 'en', 'Already a Client', 'Already a Client', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(832, 'en', 'Login to Get Started', 'Login to Get Started', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(833, 'en', 'Or, Create an Account to Get Started', 'Or, Create an Account to Get Started', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(834, 'en', 'Already a Freelancer', 'Already a Freelancer', '2022-12-13 11:48:17', '2022-12-13 11:48:17'),
(835, 'en', 'Nothing selected', 'Nothing selected', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(836, 'en', 'File selected', 'File selected', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(837, 'en', 'Files selected', 'Files selected', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(838, 'en', 'Items selected', 'Items selected', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(839, 'en', 'Add more files', 'Add more files', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(840, 'en', 'Adding more files', 'Adding more files', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(841, 'en', 'Drop files here, paste or', 'Drop files here, paste or', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(842, 'en', 'Upload complete', 'Upload complete', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(843, 'en', 'Upload paused', 'Upload paused', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(844, 'en', 'Resume upload', 'Resume upload', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(845, 'en', 'Pause upload', 'Pause upload', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(846, 'en', 'Retry upload', 'Retry upload', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(847, 'en', 'Cancel upload', 'Cancel upload', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(848, 'en', 'Uploading', 'Uploading', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(849, 'en', 'Processing', 'Processing', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(850, 'en', 'Complete', 'Complete', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(851, 'en', 'File', 'File', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(852, 'en', 'Files', 'Files', '2022-12-13 11:49:44', '2022-12-13 11:49:44'),
(853, 'en', 'I am looking for', 'I am looking for', '2022-12-13 11:50:18', '2022-12-13 11:50:18'),
(854, 'en', 'Subscription', 'Subscription', '2022-12-13 11:50:19', '2022-12-13 11:50:19'),
(855, 'en', 'Your Email Address', 'Your Email Address', '2022-12-13 11:53:14', '2022-12-13 11:53:14'),
(856, 'en', 'Subscribe', 'Subscribe', '2022-12-13 11:53:14', '2022-12-13 11:53:14'),
(857, 'en', 'Expert Earnings', 'Expert Earnings', '2022-12-17 12:20:13', '2022-12-17 12:20:13'),
(858, 'en', 'Password Update', 'Password Update', '2022-12-19 11:03:19', '2022-12-19 11:03:19'),
(859, 'en', 'Add', 'Add', '2022-12-19 11:03:19', '2022-12-19 11:03:19'),
(860, 'en', 'Sorry! Something went wrong.', 'Sorry! Something went wrong.', '2022-12-19 11:03:28', '2022-12-19 11:03:28'),
(861, 'en', 'Rate This expert', 'Rate This expert', '2022-12-19 11:26:58', '2022-12-19 11:26:58'),
(862, 'en', 'Refund Amount', 'Refund Amount', '2022-12-20 11:21:37', '2022-12-20 11:21:37'),
(863, 'en', 'Reason for cancellation', 'Reason for cancellation', '2022-12-20 11:26:44', '2022-12-20 11:26:44'),
(864, 'en', 'Approve This Request', 'Approve This Request', '2022-12-20 11:26:44', '2022-12-20 11:26:44'),
(865, 'en', 'Recharge Wallet', 'Recharge Wallet', '2022-12-20 12:14:49', '2022-12-20 12:14:49'),
(866, 'en', 'New Package has been inserted successfully', 'New Package has been inserted successfully', '2022-12-23 02:08:04', '2022-12-23 02:08:04'),
(867, 'en', 'Eg. skill', 'Eg. skill', '2022-12-23 02:53:51', '2022-12-23 02:53:51'),
(868, 'en', 'photo', 'photo', '2022-12-23 02:59:42', '2022-12-23 02:59:42'),
(869, 'en', 'Enable expert Following ?', 'Enable expert Following ?', '2022-12-23 02:59:55', '2022-12-23 02:59:55'),
(870, 'en', 'Expert Reviews by Clients', 'Expert Reviews by Clients', '2022-12-23 03:00:32', '2022-12-23 03:00:32'),
(871, 'en', 'Client Reviews by Experts', 'Client Reviews by Experts', '2022-12-23 03:00:38', '2022-12-23 03:00:38'),
(872, 'en', 'Total Earnings From Client Subscription', 'Total Earnings From Client Subscription', '2022-12-27 09:56:15', '2022-12-27 09:56:15'),
(873, 'en', 'Total Earnings From Expert Subscription', 'Total Earnings From Expert Subscription', '2022-12-27 10:00:13', '2022-12-27 10:00:13'),
(874, 'en', 'Total Earnings From Project Commission', 'Total Earnings From Project Commission', '2022-12-27 10:06:25', '2022-12-27 10:06:25'),
(875, 'en', 'Total Earnings of All Time', 'Total Earnings of All Time', '2022-12-27 10:06:25', '2022-12-27 10:06:25'),
(876, 'en', 'Freelancer Packages', 'Freelancer Packages', '2022-12-27 10:06:25', '2022-12-27 10:06:25'),
(877, 'en', 'Last 30 Days', 'Last 30 Days', '2022-12-27 10:10:23', '2022-12-27 10:10:23'),
(878, 'en', 'Refer Us & Earn', 'Refer Us & Earn', '2022-12-27 23:02:20', '2022-12-27 23:02:20'),
(879, 'en', 'referral_invite_text', 'referral_invite_text', '2022-12-27 23:02:20', '2022-12-27 23:02:20'),
(880, 'en', 'Use the below link to invite your friends.', 'Use the below link to invite your friends.', '2022-12-27 23:02:20', '2022-12-27 23:02:20'),
(881, 'en', 'Expert Bookmark option', 'Expert Bookmark option', '2022-12-28 00:26:51', '2022-12-28 00:26:51'),
(882, 'en', 'Suggested Experts', 'Suggested Experts', '2022-12-28 00:26:51', '2022-12-28 00:26:51'),
(883, 'en', 'Referral Systems', 'Referral Systems', '2022-12-28 07:50:27', '2022-12-28 07:50:27'),
(884, 'en', 'Email Configuration', 'Email Configuration', '2022-12-28 07:51:52', '2022-12-28 07:51:52'),
(885, 'en', 'Expert need to have minimum this amount of balance in his account to make a withdrawal request.', 'Expert need to have minimum this amount of balance in his account to make a withdrawal request.', '2022-12-28 08:10:24', '2022-12-28 08:10:24'),
(886, 'en', 'Add Wallet Balance', 'Add Wallet Balance', '2022-12-28 08:44:12', '2022-12-28 08:44:12'),
(887, 'en', 'Login as expert', 'Login as expert', '2022-12-28 09:19:04', '2022-12-28 09:19:04'),
(888, 'en', 'Package-Select', 'Package-Select', '2022-12-28 09:19:26', '2022-12-28 09:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file_original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `extension` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file_original_name`, `file_name`, `user_id`, `file_size`, `extension`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', 'test', 1, 1, 'txt', 'fixed', '2022-08-23 11:00:30', '2022-08-23 11:00:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_code` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banned` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `provider_id`, `user_type`, `name`, `user_name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `photo`, `cover_photo`, `verification_code`, `refer`, `banned`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'admin', 'Admin', 'admin', 'admin@gmail.com', NULL, '2020-08-07 08:28:41', '$2y$10$fqrbVOWZ8twvNg3LIvGUJ.OQarXJ5FnPGq..gMZFFOJ1ZW264Medi', NULL, NULL, NULL, NULL, NULL, 0, '2022-06-08 06:42:22', '2020-08-07 08:28:41', NULL),
(2, NULL, 'expert', 'Expert 1', 'expert-120220609-061323', 'expert@gmail.com', NULL, '2022-06-09 06:15:25', '$2y$10$.v/Fbm8wk4FFiQOMXtQGneuE1O9hhMIXflYpAkn0v5X5HHr1MpFoe', NULL, NULL, NULL, NULL, NULL, 0, '2022-06-09 00:13:23', '2022-06-09 00:13:23', NULL),
(3, NULL, 'expert', 'Asad Expert', 'expert-120220609-0613', 'asadex@gmail.com', '0163571442', '2022-06-09 07:09:40', '$2y$10$.v/Fbm8wk4FFiQOMXtQGneuE1O9hhMIXflYpAkn0v5X5HHr1MpFoe', 'Vfzd5bG1AAj20hqZ2xxtIiyhjXSn4S1leUHnsd3EqBS2gTGHnnQ2dqzffxwF', '1663243093.jpg', NULL, NULL, NULL, 0, '2022-06-09 01:06:45', '2022-09-15 05:58:13', NULL),
(4, NULL, 'client', 'Asad Cl', 'asad-cl20220609-071027', 'asadcl@gmail.com', '01633571454', '2022-06-20 08:42:51', '$2y$10$cW2UiZ/XFvly.QHqYXq2KOZfTjUxE8iunsHequ1YB4Wc7i0JrWI3m', NULL, NULL, NULL, NULL, NULL, 0, '2022-06-09 01:10:27', '2022-06-09 01:10:27', NULL),
(5, NULL, 'staff', 'Asad 2', NULL, 'asad2@gmail.com', NULL, NULL, '$2y$10$a/iVpefUma2nPqX.7MrUJO8QsgbU0JtfAuEOp4efvbdE/b56nteMO', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-23 04:26:26', '2022-08-23 04:26:26', NULL),
(6, NULL, 'expert', 'Asad', 'asad20220830-111234', 'asad1213@gmail.com', NULL, NULL, '$2y$10$OjjLujWZb8wFeumunoiOa.5MrMXRN0u/RrdcbQhyUgjaaoJDr2F82', 'bhubEQ4px4HQ7RXFIMgToy9p9M5SIYjAzOJSX60yaevDd8c2S2LZ972Qlwo7', NULL, NULL, NULL, NULL, 0, '2022-08-30 05:12:34', '2022-08-30 05:12:34', NULL),
(7, NULL, 'client', 'Test New 100', 'test-new-10020220830-120206', 'asad100@gmail.com', NULL, NULL, '$2y$10$k43C.kjr9GFJqKcgNt67zeJ71Foc0i1Tcvhfjw5yxlnaJU4x4.z5W', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:02:06', '2022-08-30 06:02:06', NULL),
(8, NULL, 'freelancer', 'Asad101', 'asad10120220830-121257', 'asad101@gmail.com', NULL, NULL, '$2y$10$a.prRiQzXMnx00j9vdfy3eGBb2qfaturTDuI5WWm.H4/2W2t/KqR6', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:12:57', '2022-08-30 06:12:57', NULL),
(9, NULL, 'freelancer', 'Asad102', 'asad10220220830-122012', 'asad102@gmail.com', NULL, NULL, '$2y$10$NyH6gU9sX2EdFae4mDTHQemFg6Dmbt6gDFqc7c2ZssUxVdYGKEk7W', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:20:12', '2022-08-30 06:20:12', NULL),
(10, NULL, 'freelancer', 'Asad104', 'asad10420220830-122352', 'asad104@gmail.com', NULL, NULL, '$2y$10$65grELOcTcnpr1RHXzvhmOn80XCtSBtkR3LzEMOAEDloSgwLKM.YC', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:23:52', '2022-08-30 06:23:52', NULL),
(11, NULL, 'freelancer', 'Asad105', 'asad10520220830-122623', 'asad105@gmail.com', NULL, NULL, '$2y$10$w4jILrCZrZNnFkUNX8dV7eAo7g2Zr1D8LVjSAzDjXDZTqzEa8LjOu', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:26:23', '2022-08-30 06:26:23', NULL),
(12, NULL, 'freelancer', 'Asad106', 'asad10620220830-122841', 'asad106@gmail.com', NULL, NULL, '$2y$10$KYOJ4uZYT32WYQjInSbqNOR6e6R/LGJIAUsvcQENtp6USZRxk6cYW', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 06:28:41', '2022-08-30 06:28:41', NULL),
(13, NULL, 'freelancer', 'Asad1001', 'asad100120220830-010456', 'asad1001@gmail.com', NULL, NULL, '$2y$10$TE.YB1Ij8mlXXZYwURFWd.NL5UhbdQtrFwjeuOme/dDMWZuqa4HhW', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:04:56', '2022-08-30 07:04:56', NULL),
(14, NULL, 'freelancer', 'Asad1002', 'asad100220220830-010735', 'Asad1002@gmail.com', NULL, NULL, '$2y$10$0o6l9SdbuRw95MrkFxPGVOPUboZ6ORdGybAkcxtHf371PYpzAN3Z.', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:07:35', '2022-08-30 07:07:35', NULL),
(15, NULL, 'freelancer', 'Asad10001', 'asad1000120220830-010857', 'asad10001@gmail.com', NULL, NULL, '$2y$10$EIh7kw8HbszPzj/VasloM.8xocS2zPJrXVXeH/bTb9/aOfs94uyn.', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:08:57', '2022-08-30 07:08:57', NULL),
(16, NULL, 'freelancer', 'asad201@gmail.com', 'asad201-at-gmailcom20220830-011118', 'asad2011@gmail.com', NULL, NULL, '$2y$10$XieH4.czud9oRnJhpKs9S.sXyHLwPAQSWQY1UeQtB7Bh0Rp5iMuwa', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:11:18', '2022-08-30 07:11:18', NULL),
(17, NULL, 'freelancer', 'Asad102', 'asad10220220830-011517', '10000asad@gmail.com', NULL, NULL, '$2y$10$wNohhAnGKwpoOCjI2fXhyuzMrfx6OIzX5La1B1hm8q4Rmzm66F2vy', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:15:18', '2022-08-30 07:15:18', NULL),
(18, NULL, 'freelancer', 'Asad', 'asad20220830-011552', 'asdad212@gmail.com', NULL, NULL, '$2y$10$7QktdT2oaEWDoVKuDCRpVOc/y9MQSvfm4J3rMEU3pXXVsYkF9jEUO', NULL, NULL, NULL, NULL, NULL, 0, '2022-08-30 07:15:52', '2022-08-30 07:15:52', NULL),
(19, NULL, 'freelancer', 'Asad ex2', 'asad-ex220220915-061752', 'asadex2@gmail.com', NULL, NULL, '$2y$10$g5eXcP2YiBkdUOm0wU8UpOCp.onnyzxoJxrwQYNS2hhs78M4p4UjG', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-15 00:17:52', '2022-09-15 00:17:52', NULL),
(20, NULL, 'freelancer', 'Asad4', 'asad420220916-104734', 'asad4@gmail.com', NULL, NULL, '$2y$10$eKdRxlqM0wfbwozvLJEEd.AMreulJdVPCEL1UD69YbgYOn2zyJTge', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-16 04:47:34', '2022-09-16 04:47:34', NULL),
(21, NULL, 'freelancer', 'Asad5', 'asad520220916-104830', 'asad5@gmail.com', NULL, NULL, '$2y$10$yq9.e24mivz5oQvoEAICVu9VDQYAaK.rdS.AC3sMdSFDEaCviinre', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-16 04:48:30', '2022-09-16 04:48:30', NULL),
(22, NULL, 'freelancer', 'Asad6', 'asad620220916-105128', 'asad6@gmail.com', NULL, NULL, '$2y$10$WSiFxUzkw1MzBwKHmp0YTOYljOaVumQnjjf91dZZM0tTOhG5ucWbK', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-16 04:51:28', '2022-09-16 04:51:28', NULL),
(23, NULL, 'freelancer', 'Asad43', 'asad4320220917-053350', 'asad43@gmail.com', NULL, NULL, '$2y$10$owZDvGhcvBPKdp0QRRVrq.CWG/RaN87Q9D3YY5PBWrKKeItkMuha2', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-16 23:33:50', '2022-09-16 23:33:50', NULL),
(24, NULL, 'freelancer', 'Asad Q', 'asad-q20220917-012456', 'asadexqwqe@gmail.com', NULL, NULL, '$2y$10$lRVfkoYZsewX1iCiYT6O7.N6WmKypt//HdmsNTly3aupnj9GOEA9S', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 07:24:56', '2022-09-17 07:24:56', NULL),
(25, NULL, 'freelancer', 'Asad Q', 'asad-q20220917-013317', 'asadecsx@gmail.com', NULL, NULL, '$2y$10$a6mnuw9k7qhwxB15yqUx7OBeUXYIeJeyhxs7or7BsNWprCzzcdf4C', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 07:33:18', '2022-09-17 07:33:18', NULL),
(26, NULL, 'freelancer', 'Asad Q', 'asad-q20220917-013510', 'asadexczxxz@gmail.com', NULL, NULL, '$2y$10$Q.R6TCwaZbbChSvGOlgSXOkZhEmMwAe4i5xuSSOJwKW5.XvH8bR3a', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 07:35:10', '2022-09-17 07:35:10', NULL),
(27, NULL, 'freelancer', 'Asad Q test', 'asad-q-test20220917-015138', 'asasdq@gmail.com', NULL, NULL, '$2y$10$i0EUQhj0oQf4y1wUWIhrTOrVYpT1wTpZkyiBR3tmpWZAkRzH.8sSq', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 07:51:38', '2022-09-17 07:51:38', NULL),
(28, NULL, NULL, 'Asad10', 'asad1020220917-021631', 'asad10101@gmail.com', NULL, NULL, '$2y$10$WfviX2LXVGD/D/SrT3hWRe6grodwJ3CQcrlYWmad70JKllNGYarFW', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:16:31', '2022-09-17 08:16:31', NULL),
(29, NULL, NULL, 'Asad Q Test', 'asad-q-test20220917-021819', 'asadtest102@gmail.com', NULL, NULL, '$2y$10$RY7ofqa.mrhwWWin9C9//u0oUXjpFoiWJlcV1ud9.QchQqCVh4O9G', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:18:19', '2022-09-17 08:18:19', NULL),
(30, NULL, 'freelancer', 'Asad Q1254', 'asad-q125420220917-021946', 'asad123554dsf@gmail.com', NULL, NULL, '$2y$10$o3kAfZJFPnsb.eewGb00p.GL1Z4QkC2EpVyUU5AzwwWd03thxbYR6', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:19:46', '2022-09-17 08:19:46', NULL),
(31, NULL, 'freelancer', 'Asad25', 'asad2520220917-022049', 'asad12054@gmail.com', NULL, NULL, '$2y$10$2lbAZUp147VhNUZYMPfpquAvHaHiwc9np1F6o4htScoWBzhiO.L4m', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:20:49', '2022-09-17 08:20:49', NULL),
(32, NULL, 'freelancer', 'asadewwr', 'asadewwr20220917-022132', 'asadvd@gmail.com', NULL, NULL, '$2y$10$3zQc1J4MyaqCvF3JZRweruJaUprOqqAtvJlSGouDXjRYky7E9Eb2y', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:21:32', '2022-09-17 08:21:32', NULL),
(33, NULL, 'freelancer', 'asdsaf', 'asdsaf20220917-022211', 'safsdgsdf@gmail.com', NULL, NULL, '$2y$10$ZAkrLnGuvep8I8qPkLeAN.CETbZUg7emoo3undKnVxZAi/oX2YX8m', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:22:11', '2022-09-17 08:22:11', NULL),
(34, NULL, 'freelancer', 'Asad Q Test ok', 'asad-q-test-ok20220917-023255', 'aadtestok@gmail.com', NULL, NULL, '$2y$10$.tyZ1bp8JW47zKASvB4KXeK03QiXsLgyxAwhLlvMS8ICGvXlNnOSe', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-17 08:32:55', '2022-09-17 08:32:55', NULL),
(35, NULL, 'freelancer', 'Aadsafdsfgds', 'aadsafdsfgds20220918-061145', 'asfdsfsdg@gmail.com', NULL, NULL, '$2y$10$ECXnbyu8Pi/9e520dUy.7uyEZ7guG9bAbK4.6ruwmnPYd5Xb/zSK.', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-18 00:11:45', '2022-09-18 00:11:45', NULL),
(36, NULL, 'freelancer', 'Asadasx', 'asadasx20220918-061221', 'asafsadfds@gmail.com', NULL, NULL, '$2y$10$gXMPjmAT2Tq2er9cl595ruPZUPzlV7PAatB48jrLGoGoB10LjWRBy', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-18 00:12:21', '2022-09-18 00:12:21', NULL),
(37, NULL, 'freelancer', 'Asadxxz', 'asadxxz20220918-100423', 'asadavvc12@gmail.com', '0163571448', NULL, '$2y$10$xtkiz4utjuzG8/mAojEOCuwR6Q2wyJ7zmuHjYIid/vTs9ghQgOBmO', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-18 04:04:23', '2022-09-18 04:04:23', NULL),
(38, NULL, 'freelancer', 'Asad Ali', 'asad-ali20220918-101432', 'asadali@gmail.com', '01725652448', NULL, '$2y$10$S6/1yiLpZWRzxrpsP.Ukze99UbYpO4R0msvWSkN6.Eo7KJwdAGWTy', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-18 04:14:32', '2022-09-18 04:14:32', NULL),
(39, NULL, 'freelancer', 'Mr Asad', 'mr-asad20220918-033649', 'Asadmr@gmail.com', '01633571440', NULL, '$2y$10$Tkvf/K7NfvodmJIkQCKt2.cMAo1rHHkkLQjiGiCX0DWQE4n4gjVNG', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-18 09:36:49', '2022-09-18 09:36:49', NULL),
(40, NULL, 'freelancer', 'Sayduzzaman', 'sayduzzaman20220919-113037', 'sayduzzaman@gmail.com', '01916100302', NULL, '$2y$10$z/p6dNH6.oBXR2XRnDOZPO7P5jojob3pidn96od8eVBnlvStG.era', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-19 05:30:37', '2022-09-19 05:30:37', NULL),
(41, NULL, 'freelancer', 'Mr. Ornab', 'mr-ornab20220920-062004', 'ornab@gmail.com', '0162325645', NULL, '$2y$10$Rgag26i1keAZArc67LBGiunTstMHelRyrO5PEUnhrU2Vc7f85s0Ca', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-20 00:20:04', '2022-09-20 00:20:04', NULL),
(42, NULL, 'freelancer', 'Asad New Reffer', 'asad-new-reffer20220920-090848', 'asadnewreffer@gmail.com', '0163571454', NULL, '$2y$10$i06fEDrADnD2NW0JScgMS.zExfpwPGjo1L.bEa8dvGD1K/8fqCTZC', NULL, NULL, NULL, NULL, NULL, 0, '2022-09-20 03:08:48', '2022-09-20 03:08:48', NULL),
(43, NULL, 'freelancer', 'Asadref', 'asadref20220920-091539', 'asadref@gmail.com', '01649574751', NULL, '$2y$10$TDizpLD0BLeDynWPU/wIOOcWmqVP4Tp2mO.ofzwAdvzSztGxil6Wi', NULL, NULL, NULL, NULL, '3', 0, '2022-09-20 03:15:39', '2022-09-20 03:15:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_badges`
--

CREATE TABLE `user_badges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'project/earning/membership',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `badge_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_badges`
--

INSERT INTO `user_badges` (`id`, `type`, `user_id`, `badge_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fixed', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE `user_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', 'Lawyer', 1, '2020-05-26 16:43:20', '2022-02-28 00:35:28'),
(2, '4', 'Doctor', 1, '2020-05-26 16:46:12', '2020-05-26 16:46:12'),
(3, '6', 'Engineer', 1, '2020-05-26 16:46:26', '2020-05-26 17:05:49'),
(4, '2', 'EcoFin Advisor', 1, '2020-05-26 16:46:53', '2022-03-12 04:46:44'),
(5, '1', 'Consultant', 1, '2020-05-26 16:47:03', '2022-03-12 04:46:52'),
(6, '5', 'Teacher', 1, '2020-05-26 17:05:23', '2022-03-12 04:47:02'),
(7, '', 'Admin', 1, '2020-05-26 17:05:23', '2022-03-12 04:47:02'),
(8, '', 'Staff', 1, '2020-05-26 17:05:23', '2022-03-12 04:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_invalid_at` date DEFAULT NULL,
  `number_of_days` int(10) UNSIGNED DEFAULT NULL,
  `hourly_limit` int(11) DEFAULT NULL,
  `fixed_limit` int(11) DEFAULT NULL,
  `long_term_limit` int(11) DEFAULT NULL,
  `skill_add_limit` int(11) DEFAULT NULL,
  `bio_text_limit` int(11) DEFAULT NULL,
  `portfolio_add_limit` int(11) DEFAULT NULL,
  `bookmark_project_limit` int(11) DEFAULT NULL,
  `job_exp_limit` int(11) DEFAULT NULL,
  `service_limit` int(10) NOT NULL DEFAULT 0,
  `following_status` int(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `user_id`, `package_id`, `package_invalid_at`, `number_of_days`, `hourly_limit`, `fixed_limit`, `long_term_limit`, `skill_add_limit`, `bio_text_limit`, `portfolio_add_limit`, `bookmark_project_limit`, `job_exp_limit`, `service_limit`, `following_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, '2024-06-13', 20, 5, 10, 10, 10, 300, 10, 9, 365, 100, 1, NULL, '2022-09-08 00:06:10', NULL),
(2, 4, 2, '2025-06-20', 1000, 10, 20, 30, 20, 500, 20, 10, 10, 100, 1, '2022-09-01 11:40:12', NULL, NULL),
(3, 39, 4, '2023-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-18 10:04:33', '2022-09-18 10:04:33', NULL),
(4, 39, 4, '2023-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-18 10:09:49', '2022-09-18 10:09:49', NULL),
(5, 39, 4, '2023-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-18 10:10:36', '2022-09-18 10:10:36', NULL),
(6, 40, 4, '2023-09-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-19 06:27:17', '2022-09-19 06:27:17', NULL),
(7, 43, 4, '2023-09-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2022-09-20 04:16:45', '2022-09-20 04:16:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_role_id` int(11) DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tweeter` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hourly_rate` double(8,2) DEFAULT NULL,
  `balance` double(10,2) NOT NULL DEFAULT 0.00,
  `rating` float(4,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `user_role_id`, `gender`, `nationality`, `specialist`, `bio`, `github`, `facebook`, `tweeter`, `linkedin`, `skills`, `languages`, `hourly_rate`, `balance`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-06-09 00:13:23', '2022-06-09 00:13:23', NULL),
(2, 3, NULL, 'male', 'au', '2', 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', NULL, 'facebook', 'Asadtweet', 'linkedin', '[\"value:1, name:Codeigniter\"]', NULL, 20.00, 55.00, 0.00, '2022-06-09 01:06:45', '2022-09-10 01:09:50', NULL),
(3, 4, NULL, 'male', 'ba', NULL, 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', 'github', 'facebook', 'tweeter', 'linkedin', NULL, NULL, NULL, 0.00, 0.00, '2022-06-09 01:10:27', '2022-08-24 00:57:11', NULL),
(4, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 05:12:34', '2022-08-30 05:12:34', NULL),
(5, 7, NULL, NULL, NULL, NULL, 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 06:02:06', '2022-08-30 06:02:06', NULL),
(6, 8, NULL, NULL, NULL, NULL, 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', NULL, NULL, NULL, NULL, NULL, NULL, 50.00, 0.00, 0.00, '2022-08-30 06:12:57', '2022-08-30 06:12:57', NULL),
(7, 9, NULL, NULL, NULL, NULL, 'Hi, my name is Mr. Freelancer and I head a software house in the United Kingdom. I\'ve built many large-scale web application projects from the ground up, including a powerful hotel booking management system, various bespoke CMS and support ticketing systems and more. I take great pride in my work. Lets discuss your project. Here\'s what I can build for you Beautiful, simple and modern front-end design with a powerful back-end engine below the hood to enable full and dynamic functionality.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 06:20:12', '2022-08-30 06:20:12', NULL),
(8, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 06:23:52', '2022-08-30 06:23:52', NULL),
(9, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 06:26:23', '2022-08-30 06:26:23', NULL),
(10, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 06:28:41', '2022-08-30 06:28:41', NULL),
(11, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:04:56', '2022-08-30 07:04:56', NULL),
(12, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:07:35', '2022-08-30 07:07:35', NULL),
(13, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:08:57', '2022-08-30 07:08:57', NULL),
(14, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:11:18', '2022-08-30 07:11:18', NULL),
(15, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:15:18', '2022-08-30 07:15:18', NULL),
(16, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-08-30 07:15:52', '2022-08-30 07:15:52', NULL),
(17, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-16 04:47:34', '2022-09-16 04:47:34', NULL),
(18, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-16 04:48:30', '2022-09-16 04:48:30', NULL),
(19, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-16 04:51:28', '2022-09-16 04:51:28', NULL),
(20, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-16 23:33:50', '2022-09-16 23:33:50', NULL),
(21, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 07:24:56', '2022-09-17 07:24:56', NULL),
(22, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 07:33:18', '2022-09-17 07:33:18', NULL),
(23, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 07:35:10', '2022-09-17 07:35:10', NULL),
(24, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 07:51:38', '2022-09-17 07:51:38', NULL),
(25, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:16:31', '2022-09-17 08:16:31', NULL),
(26, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:18:19', '2022-09-17 08:18:19', NULL),
(27, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:19:46', '2022-09-17 08:19:46', NULL),
(28, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:20:49', '2022-09-17 08:20:49', NULL),
(29, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:21:32', '2022-09-17 08:21:32', NULL),
(30, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:22:11', '2022-09-17 08:22:11', NULL),
(31, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-17 08:32:55', '2022-09-17 08:32:55', NULL),
(32, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-18 00:11:45', '2022-09-18 00:11:45', NULL),
(33, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-18 00:12:21', '2022-09-18 00:12:21', NULL),
(34, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-18 04:04:23', '2022-09-18 04:04:23', NULL),
(35, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-18 04:14:32', '2022-09-18 04:14:32', NULL),
(36, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-18 09:36:49', '2022-09-18 09:36:49', NULL),
(37, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-19 05:30:37', '2022-09-19 05:30:37', NULL),
(38, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-20 00:20:04', '2022-09-20 00:20:04', NULL),
(39, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-20 03:08:48', '2022-09-20 03:08:48', NULL),
(40, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.00, 0.00, '2022-09-20 03:15:39', '2022-09-20 03:15:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permissions` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `permissions`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\",\"18\",\"19\",\"20\",\"21\",\"22\",\"23\",\"24\",\"25\",\"26\",\"27\",\"28\",\"29\",\"30\",\"31\",\"32\",\"33\",\"34\",\"35\",\"36\",\"37\",\"38\",\"39\",\"40\",\"41\",\"42\",\"43\",\"44\",\"45\",\"46\",\"47\",\"48\",\"49\",\"50\",\"51\",\"52\",\"53\",\"54\",\"55\",\"56\",\"57\",\"58\",\"59\",\"60\",\"61\",\"62\",\"63\",\"64\",\"65\",\"66\",\"67\",\"68\",\"69\",\"70\",\"71\",\"72\",\"73\",\"74\",\"75\",\"76\",\"77\",\"78\",\"79\",\"80\",\"81\",\"82\",\"83\",\"84\",\"85\",\"86\",\"87\",\"88\",\"89\",\"90\",\"91\",\"92\"]', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifications`
--

CREATE TABLE `verifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'email/phone/identity/payment',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-not verified, 1-verified',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verifications`
--

INSERT INTO `verifications` (`id`, `type`, `user_id`, `role_id`, `attachment`, `verified`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'identity_verification', 3, NULL, NULL, 1, '2022-08-22 23:59:32', '2022-08-23 05:08:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallet_payments`
--

CREATE TABLE `wallet_payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `payment_method` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallet_payments`
--

INSERT INTO `wallet_payments` (`id`, `user_id`, `amount`, `payment_method`, `payment_details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 100.00, 'payment', 'test', '2022-08-23 11:01:07', '2022-08-23 11:01:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date DEFAULT NULL,
  `present` tinyint(1) NOT NULL DEFAULT 0,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`id`, `user_id`, `company_name`, `company_website`, `designation`, `start`, `end`, `present`, `location`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'Bd', 'test', 'test', '2022-08-23', '2022-08-24', 50, 'Dhaka', NULL, NULL, NULL),
(2, 3, 'Zero Plus1', 'www.zeroplus1.com', 'Sr. Software Engineer', '2022-06-08', '2022-09-15', 0, 'Dhaka', '2022-09-10 03:02:58', '2022-09-10 03:02:58', NULL),
(3, 3, 'AB Infotech', 'www.abinfotect.com', 'Sr. Software Engineer', '2022-09-01', NULL, 1, 'Dhaka', '2022-09-10 03:04:10', '2022-09-10 03:04:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_country_id_foreign` (`country_id`);

--
-- Indexes for table `badges`
--
ALTER TABLE `badges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarked_clients`
--
ALTER TABLE `bookmarked_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarked_experts`
--
ALTER TABLE `bookmarked_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookmarked_projects`
--
ALTER TABLE `bookmarked_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel_projects`
--
ALTER TABLE `cancel_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chats_chat_thread_id_foreign` (`chat_thread_id`),
  ADD KEY `chats_sender_user_id_foreign` (`sender_user_id`);

--
-- Indexes for table `chat_threads`
--
ALTER TABLE `chat_threads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_threads_sender_user_id_foreign` (`sender_user_id`),
  ADD KEY `chat_threads_receiver_user_id_foreign` (`receiver_user_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_accounts`
--
ALTER TABLE `expert_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_services`
--
ALTER TABLE `expert_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_services_packages`
--
ALTER TABLE `expert_services_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_invitations`
--
ALTER TABLE `hire_invitations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestone_payments`
--
ALTER TABLE `milestone_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_payments`
--
ALTER TABLE `package_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_to_experts`
--
ALTER TABLE `pay_to_experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_user_id_foreign` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_client_user_id_foreign` (`client_user_id`),
  ADD KEY `projects_project_category_id_foreign` (`project_category_id`);

--
-- Indexes for table `project_bids`
--
ALTER TABLE `project_bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_bids_bid_by_user_id_foreign` (`bid_by_user_id`),
  ADD KEY `project_bids_project_id_foreign` (`project_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_users`
--
ALTER TABLE `project_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_users_project_id_foreign` (`project_id`),
  ADD KEY `project_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_codes`
--
ALTER TABLE `referral_codes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `referral_codes_code_unique` (`code`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_project_id_foreign` (`project_id`),
  ADD KEY `reviews_reviewer_user_id_foreign` (`reviewer_user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `service_payments`
--
ALTER TABLE `service_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_configurations`
--
ALTER TABLE `system_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_badges`
--
ALTER TABLE `user_badges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_badges_user_id_foreign` (`user_id`),
  ADD KEY `user_badges_badge_id_foreign` (`badge_id`);

--
-- Indexes for table `user_categories`
--
ALTER TABLE `user_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- Indexes for table `verifications`
--
ALTER TABLE `verifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `wallet_payments`
--
ALTER TABLE `wallet_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_experiences_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `badges`
--
ALTER TABLE `badges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookmarked_clients`
--
ALTER TABLE `bookmarked_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookmarked_experts`
--
ALTER TABLE `bookmarked_experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookmarked_projects`
--
ALTER TABLE `bookmarked_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cancel_projects`
--
ALTER TABLE `cancel_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat_threads`
--
ALTER TABLE `chat_threads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4122;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expert_accounts`
--
ALTER TABLE `expert_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expert_services`
--
ALTER TABLE `expert_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `expert_services_packages`
--
ALTER TABLE `expert_services_packages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `hire_invitations`
--
ALTER TABLE `hire_invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `milestone_payments`
--
ALTER TABLE `milestone_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package_payments`
--
ALTER TABLE `package_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pay_to_experts`
--
ALTER TABLE `pay_to_experts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_bids`
--
ALTER TABLE `project_bids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_users`
--
ALTER TABLE `project_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `referral_codes`
--
ALTER TABLE `referral_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_payments`
--
ALTER TABLE `service_payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `system_configurations`
--
ALTER TABLE `system_configurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `user_badges`
--
ALTER TABLE `user_badges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_categories`
--
ALTER TABLE `user_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `verifications`
--
ALTER TABLE `verifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet_payments`
--
ALTER TABLE `wallet_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_chat_thread_id_foreign` FOREIGN KEY (`chat_thread_id`) REFERENCES `chat_threads` (`id`),
  ADD CONSTRAINT `chats_sender_user_id_foreign` FOREIGN KEY (`sender_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `chat_threads`
--
ALTER TABLE `chat_threads`
  ADD CONSTRAINT `chat_threads_receiver_user_id_foreign` FOREIGN KEY (`receiver_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `chat_threads_sender_user_id_foreign` FOREIGN KEY (`sender_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_client_user_id_foreign` FOREIGN KEY (`client_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `projects_project_category_id_foreign` FOREIGN KEY (`project_category_id`) REFERENCES `project_categories` (`id`);

--
-- Constraints for table `project_bids`
--
ALTER TABLE `project_bids`
  ADD CONSTRAINT `project_bids_bid_by_user_id_foreign` FOREIGN KEY (`bid_by_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `project_bids_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `project_users`
--
ALTER TABLE `project_users`
  ADD CONSTRAINT `project_users_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;