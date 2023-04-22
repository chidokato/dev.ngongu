-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 22, 2023 lúc 07:38 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ngongu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `sort_by` varchar(10) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `status`, `sort_by`, `view`, `icon`, `slug`, `created_at`, `updated_at`) VALUES
(38, 1, 'true', 'Page', NULL, NULL, 'about', '2023-04-12 02:52:25', '2023-04-12 02:52:25'),
(39, 1, 'true', 'Product', 2, NULL, 'project', '2023-04-12 03:18:49', '2023-04-12 03:18:49'),
(40, 1, 'true', 'News', 3, NULL, 'news', '2023-04-12 03:19:20', '2023-04-12 03:19:20'),
(41, 1, 'true', 'News', 4, NULL, 'recruitment', '2023-04-12 03:20:03', '2023-04-12 03:20:03'),
(42, 1, 'true', 'Page', 5, NULL, 'contact', '2023-04-12 03:20:32', '2023-04-12 03:20:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_translations`
--

CREATE TABLE `category_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `locale` varchar(20) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category_translations`
--

INSERT INTO `category_translations` (`id`, `name`, `content`, `category_id`, `locale`, `parent`, `title`, `description`, `created_at`, `updated_at`) VALUES
(98, 'About', NULL, 38, 'en', 0, NULL, NULL, '2023-04-12 02:52:25', '2023-04-12 02:52:25'),
(99, 'Giới thiệu', NULL, 38, 'vi', 0, NULL, NULL, '2023-04-12 02:52:25', '2023-04-12 02:52:25'),
(100, '關於', NULL, 38, 'cn', 0, NULL, NULL, '2023-04-12 02:52:25', '2023-04-12 02:52:25'),
(101, 'Project', NULL, 39, 'en', 0, NULL, NULL, '2023-04-12 03:18:49', '2023-04-12 03:18:49'),
(102, 'Dự án', NULL, 39, 'vi', 0, NULL, NULL, '2023-04-12 03:18:49', '2023-04-12 03:18:49'),
(103, '項目', NULL, 39, 'cn', 0, NULL, NULL, '2023-04-12 03:18:49', '2023-04-12 03:18:49'),
(104, 'News', NULL, 40, 'en', 0, NULL, NULL, '2023-04-12 03:19:20', '2023-04-12 03:19:20'),
(105, 'Tin tức', NULL, 40, 'vi', 0, NULL, NULL, '2023-04-12 03:19:20', '2023-04-12 03:19:20'),
(106, '消息', NULL, 40, 'cn', 0, NULL, NULL, '2023-04-12 03:19:20', '2023-04-12 03:19:20'),
(107, 'Recruitment', NULL, 41, 'en', 0, NULL, NULL, '2023-04-12 03:20:03', '2023-04-12 03:20:03'),
(108, 'Tuyển dụng', NULL, 41, 'vi', 0, NULL, NULL, '2023-04-12 03:20:03', '2023-04-12 03:20:03'),
(109, '招聘', NULL, 41, 'cn', 0, NULL, NULL, '2023-04-12 03:20:03', '2023-04-12 03:20:03'),
(110, 'Contact', NULL, 42, 'en', 0, NULL, NULL, '2023-04-12 03:20:32', '2023-04-12 03:20:32'),
(111, 'Liên hệ', NULL, 42, 'vi', 0, NULL, NULL, '2023-04-12 03:20:32', '2023-04-12 03:20:32'),
(112, '接觸', NULL, 42, 'cn', 0, NULL, NULL, '2023-04-12 03:20:32', '2023-04-12 03:20:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(10, 1, 'true', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(11, 1, 'true', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(12, 1, 'true', '2023-04-13 19:30:30', '2023-04-13 19:30:30'),
(13, 1, 'true', '2023-04-13 20:48:20', '2023-04-13 20:48:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district_translations`
--

CREATE TABLE `district_translations` (
  `id` int(11) NOT NULL,
  `district_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `district_translations`
--

INSERT INTO `district_translations` (`id`, `district_id`, `province_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(28, 10, 16, 'Thanh Xuan', 'en', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(29, 10, 17, 'Thanh Xuân', 'vi', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(30, 10, 18, '青年', 'cn', '2023-04-13 19:14:08', '2023-04-13 19:14:08'),
(31, 11, 19, 'Quan 1', 'en', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(32, 11, 20, 'Quận 1', 'vi', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(33, 11, 21, '1區', 'cn', '2023-04-13 19:14:38', '2023-04-13 19:14:38'),
(37, 13, 19, 'sdfsdfs 1', 'en', '2023-04-13 20:48:20', '2023-04-13 20:57:16'),
(38, 13, 20, 'sfsfsdf 2 1', 'vi', '2023-04-13 20:48:20', '2023-04-14 00:48:12'),
(39, 13, 21, 'fsfsdf 4', 'cn', '2023-04-13 20:48:20', '2023-04-13 20:57:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `note` varchar(10) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_04_13_035737_create_images_table', 2),
(10, '2023_04_13_084106_create_provinces_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL,
  `sort_by` varchar(10) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `post` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `status`, `sort_by`, `slug`, `post`, `img`) VALUES
(58, 1, 'true', 'News', 'phoi-canh-toa-can-ho-moonlight-iphoi-canh-toa-can-ho-moonlight-i', NULL, 'Anlac-01.jpg'),
(68, 1, 'true', 'Product', 'sdfsdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post_translations`
--

CREATE TABLE `post_translations` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `category_tras_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `locale` varchar(50) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `category_tras_id`, `province_id`, `district_id`, `ward_id`, `name`, `detail`, `content`, `price`, `unit`, `address`, `locale`, `title`, `description`, `created_at`, `updated_at`) VALUES
(170, 58, 104, NULL, NULL, NULL, 'Perspective of Moonlight apartment building Perspective of Moonlight apartment building I', 'Phối cảnh tòa căn hộ Moonlight IPhối cảnh tòa căn hộ Moonlight I', '<p>Phối cảnh t&ograve;a căn hộ Moonlight IPhối cảnh t&ograve;a căn hộ Moonlight I</p>', NULL, NULL, NULL, 'en', 'Phối cảnh tòa căn hộ Moonlight IPhối cảnh tòa căn hộ Moonlight I', 'Phối cảnh Phối cảnh tòa căn hộ Moonlight Icăn hộ Moonlight I', '2023-04-18 03:31:37', '2023-04-17 20:31:37'),
(171, 58, 105, NULL, NULL, NULL, 'Phối cảnh tòa căn hộ Moonlight IPhối cảnh tòa căn hộ Moonlight I', 'Phối cảnh tòa căn hộ Moonlight I', '<p><em>Phối cảnh t&ograve;a căn hộ Moonlight I</em></p>', NULL, NULL, NULL, 'vi', NULL, NULL, '2023-04-18 03:31:05', '2023-04-17 20:31:05'),
(172, 58, 106, NULL, NULL, NULL, '月光公寓樓透視 月光公寓樓透視I', '月光公寓樓透視 月光公寓樓透視I', '<p>月光公寓樓透視 月光公寓樓透視I</p>', NULL, NULL, NULL, 'cn', 'âsdasdsad', 'âsdasdsad', '2023-04-18 03:31:37', '2023-04-17 20:31:37'),
(200, 68, 101, NULL, NULL, 19, NULL, NULL, NULL, NULL, 'Tỷ', NULL, 'en', NULL, NULL, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(201, 68, 102, NULL, NULL, 20, 'sdfsdf', NULL, NULL, NULL, 'Tỷ', 'sdfsdf', 'vi', NULL, NULL, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(202, 68, 103, NULL, NULL, 21, NULL, NULL, NULL, NULL, 'Tỷ', NULL, 'cn', NULL, NULL, '2023-04-21 21:00:48', '2023-04-21 21:00:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `provinces`
--

INSERT INTO `provinces` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 'true', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(7, 1, 'true', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(8, 1, 'true', '2023-04-13 19:13:36', '2023-04-13 19:13:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province_translations`
--

CREATE TABLE `province_translations` (
  `id` int(11) NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `province_translations`
--

INSERT INTO `province_translations` (`id`, `province_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(16, 6, 'Ha Noi', 'en', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(17, 6, 'Hà Nội', 'vi', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(18, 6, '河內', 'cn', '2023-04-13 19:12:22', '2023-04-13 19:12:22'),
(19, 7, 'Ho Chi Minh', 'en', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(20, 7, 'Hồ Chí Minh', 'vi', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(21, 7, '胡志明', 'cn', '2023-04-13 19:13:13', '2023-04-13 19:13:13'),
(22, 8, 'Quang Ninh', 'en', '2023-04-13 19:13:36', '2023-04-13 19:52:55'),
(23, 8, 'Quảng Ninh', 'vi', '2023-04-13 19:13:36', '2023-04-13 19:52:55'),
(24, 8, '廣寧', 'cn', '2023-04-13 19:13:36', '2023-04-13 19:52:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sections`
--

INSERT INTO `sections` (`id`, `user_id`, `status`) VALUES
(31, 1, NULL),
(32, 1, NULL),
(33, 1, NULL),
(34, 1, NULL),
(35, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `section_translations`
--

CREATE TABLE `section_translations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `section_translations`
--

INSERT INTO `section_translations` (`id`, `name`, `content`, `img`, `locale`, `view`, `section_id`, `post_id`, `created_at`, `updated_at`) VALUES
(91, 'Tổng quan', NULL, NULL, 'vi', 1, 31, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(92, 'Overview', NULL, NULL, 'en', 1, 31, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(93, '概述', NULL, NULL, 'cn', 1, 31, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(94, 'Vị trí', NULL, NULL, 'vi', 2, 32, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(95, 'Location', NULL, NULL, 'en', 2, 32, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(96, '地點', NULL, NULL, 'cn', 2, 32, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(97, 'Liên kết vùng', NULL, NULL, 'vi', 3, 33, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(98, 'Regional link', NULL, NULL, 'en', 3, 33, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(99, '區域鏈接', NULL, NULL, 'cn', 3, 33, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(100, 'Tiện ích', NULL, NULL, 'vi', 4, 34, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(101, 'Utilities', NULL, NULL, 'en', 4, 34, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(102, '公用事業', NULL, NULL, 'cn', 4, 34, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(103, 'Mặt bằng', NULL, NULL, 'vi', 5, 35, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(104, 'Ground', NULL, NULL, 'en', 5, 35, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48'),
(105, '地面', NULL, NULL, 'cn', 5, 35, 68, '2023-04-21 21:00:48', '2023-04-21 21:00:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `permission` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `permission`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'tuan.pn92@gmail.com', 1, NULL, '$2y$10$9fz78ri8PAvBIbSerrENiuTjo5WlAXRXdfCtkh.40ByOcTeSNYCsO', NULL, '2023-03-20 09:17:19', '2023-03-20 09:17:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wards`
--

CREATE TABLE `wards` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wards`
--

INSERT INTO `wards` (`id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 'true', '2023-04-14 00:38:07', '2023-04-14 00:38:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward_translations`
--

CREATE TABLE `ward_translations` (
  `id` int(11) NOT NULL,
  `ward_id` int(11) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `locale` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ward_translations`
--

INSERT INTO `ward_translations` (`id`, `ward_id`, `province_id`, `district_id`, `name`, `locale`, `created_at`, `updated_at`) VALUES
(19, 7, 16, 28, 'Nhan hoa', 'en', '2023-04-14 00:38:07', '2023-04-14 00:38:07'),
(20, 7, 17, 29, 'Nhân Hòa', 'vi', '2023-04-14 00:38:07', '2023-04-14 00:38:07'),
(21, 7, 18, 30, 'nhanhoa', 'cn', '2023-04-14 00:38:07', '2023-04-14 00:38:07');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `district_translations`
--
ALTER TABLE `district_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `province_translations`
--
ALTER TABLE `province_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `section_translations`
--
ALTER TABLE `section_translations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ward_translations`
--
ALTER TABLE `ward_translations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `district_translations`
--
ALTER TABLE `district_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT cho bảng `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `province_translations`
--
ALTER TABLE `province_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `section_translations`
--
ALTER TABLE `section_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `ward_translations`
--
ALTER TABLE `ward_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
