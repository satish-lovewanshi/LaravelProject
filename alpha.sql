-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2021 at 09:19 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2a$04$Gs4nkZWUU5VjN0F8z462meDzjScHFfWWKlX4fjLtmNdxZIl1D9b7a', '2021-02-24 13:12:01', '2021-02-25 06:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MainTable', 'lovewanshi@123', 'dmmmdmd', '2021-03-03 03:18:30', '2021-03-03 03:18:30'),
(2, 'SATISH', 'satishlovewanshi1900@gmail.com', 'JJJ', '2021-03-03 03:24:45', '2021-03-03 03:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(256) NOT NULL,
  `section_title` varchar(256) NOT NULL,
  `data` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `section_title`, `data`, `created_at`, `updated_at`) VALUES
(22, 'Services', 'third_title', 'Our unique approaches for you', '2021-03-02 11:26:55', '2021-03-03 05:14:17'),
(20, 'Company', 'banner_image', '03032021161476801161.jpg', '2021-03-02 05:36:58', '2021-03-03 05:10:11'),
(19, 'Company', 'forth_title', 'Our Team Members', '2021-03-02 05:36:58', '2021-03-03 05:10:11'),
(18, 'Company', 'third_title', 'Our Background and Environment', '2021-03-02 05:36:58', '2021-03-03 05:10:11'),
(21, 'Services', 'second_title', 'Our Digital Services', '2021-03-02 11:26:55', '2021-03-03 05:14:17'),
(17, 'Company', 'second_title', 'About Our Company', '2021-03-02 05:36:58', '2021-03-03 05:10:11'),
(16, 'Home', 'banner_image', '03032021161476931212.jpg', '2021-03-02 05:35:37', '2021-03-03 05:31:52'),
(14, 'Home', 'third_title', 'third section title', '2021-03-02 05:35:37', '2021-03-03 05:31:52'),
(13, 'Home', 'second_title', 'Welcome to New Vision', '2021-03-02 05:35:37', '2021-03-03 05:31:52'),
(15, 'Home', 'forth_title', 'Featured Carousel Items', '2021-03-02 05:35:37', '2021-03-03 05:31:52'),
(23, 'Services', 'forth_title', 'Our Strategic Partners', '2021-03-02 11:26:55', '2021-03-03 05:14:17'),
(24, 'Services', 'banner_image', '03032021161476825772.jpg', '2021-03-02 11:26:55', '2021-03-03 05:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(256) NOT NULL,
  `section_title` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `page_title`, `section_title`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(19, 'home', 'second_section', 'MOST UNIQUE IDEA EVER MADE', 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas. Hover #09F', '03032021161476886168.jpg', '2021-03-02 22:54:44', '2021-03-03 05:24:21'),
(20, 'home', 'second_section', 'SIMPLE TOUCH', 'Please tell your friends about TemplateMo website. Thank you. Title / Text #666', '03032021161476982564.jpg', '2021-03-02 22:55:26', '2021-03-03 05:40:25'),
(18, 'home', 'second_section', 'NEW DESIGN FOR YOUR WEBSITE', 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem at nisl malesuada, quis.', '03032021161476939817.jpg', '2021-03-02 22:52:53', '2021-03-03 05:33:18'),
(17, 'home', 'second_section', 'BEST COLLECTION', 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat. Maecenas pretium sem.', '03032021161476936285.jpg', '2021-03-02 22:51:07', '2021-03-03 05:32:42'),
(23, 'home', 'third_section', 'TEMPLATE USAGE', 'You can feel free to edit and use New Vision template for your commercial websites. Title color is #333', '', '2021-03-02 23:16:57', '2021-03-02 23:16:57'),
(24, 'home', 'third_section', 'NEW VISION', 'New Vision comes with 4 different HTML pages and provided free of charge by TemplateMo. You can add more pages if you need. Text color is #666', '', '2021-03-02 23:17:56', '2021-03-02 23:17:56'),
(25, 'home', 'third_section', 'DOWNLOAD SITES', 'Do not re-distribute our template ZIP file on your website. Or contact us first. Button color is #C99', '', '2021-03-02 23:19:22', '2021-03-02 23:19:22'),
(26, 'home', 'forth_section', 'Welcome', NULL, '030320211614747651100.jpg', '2021-03-02 23:30:51', '2021-03-02 23:30:51'),
(27, 'home', 'forth_section', 'To My', NULL, '03032021161474769642.jpg', '2021-03-02 23:31:36', '2021-03-02 23:31:36'),
(28, 'home', 'forth_section', 'Alpha', NULL, '03032021161474773984.jpg', '2021-03-02 23:32:19', '2021-03-02 23:32:19'),
(29, 'home', 'forth_section', 'World', NULL, '03032021161474776916.jpg', '2021-03-02 23:32:49', '2021-03-02 23:32:49'),
(30, 'home', 'forth_section', 'New India', NULL, '03032021161474792341.jpg', '2021-03-02 23:35:24', '2021-03-02 23:35:24'),
(31, 'home', 'forth_section', 'Laravel', NULL, '03032021161474796117.jpg', '2021-03-02 23:36:01', '2021-03-02 23:36:01'),
(32, 'company', 'second_section', '<i class=\"fab fa-5x fa-accusoft tm-about-icon\"></i>', 'New Vision HTML Template is provided by TemplateMo for 100% free of charge. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst', '', '2021-03-02 23:54:43', '2021-03-03 00:05:32'),
(33, 'company', 'second_section', '<i class=\"fas fa-5x fa-air-freshener tm-about-icon\"></i>', 'Curabitur et viverra purus, in ornare sem. Donec eu imperdiet felis, sed interdum leo. Mauris nisl mi, bibendum eu venenatis at, condimentum et dui. Proin mi enim, dapibus at metus semper, hendrerit faucibus nisi.', '', '2021-03-02 23:55:44', '2021-03-03 00:05:54'),
(34, 'company', 'second_section', '<i class=\"fas fa-5x fa-fire-alt tm-about-icon\"></i>', 'Duis accumsan dolor feugiat dapibus ultrices. Vestibulum consectetur urna augue, in sagittis mi sodales ut. Maecenas at quam et ligula vulputate commodo. Integer tempor nec velit ut pulvinar. In hac habitasse platea dictumst.', '', '2021-03-02 23:56:25', '2021-03-03 00:06:14'),
(35, 'company', 'third_section', 'Phasellus blandit tortor vel odio hendrerit, eleifend ultricies odio temport. Etiam euismod, lectus convallis efficitur convallis, risus orci auctor orci.', 'Cras imperdiet in ligula sit amet fringilla. Morbi posuere mattis ornare. Nunc iaculis porta ipsum. Aliquam vehicula egestas diam auctor ornare.', '03032021161475032332.jpg', '2021-03-03 00:15:23', '2021-03-03 00:15:48'),
(36, 'company', 'third_section', 'Quisque sed tortor sed metus vehicula pulvinar vel dictum tortor. Nivamus eu posuere arcu. Vivamus vel urna id mi congue convallis at sed augue.', 'Praesent venenatis risus aliquet semper porta. Maecenas mollis nisi non hendrerit finibus. Ut eu convallis massa. Sed imperdiet arcu non egestas elementum.', '03032021161475038696.jpg', '2021-03-03 00:16:26', '2021-03-03 00:17:06'),
(37, 'company', 'forth_section', 'Laravel', NULL, '03032021161474796117.jpg', '2021-03-02 23:36:01', '2021-03-02 23:36:01'),
(38, 'company', 'forth_section', 'New India', NULL, '03032021161474792341.jpg', '2021-03-02 23:35:24', '2021-03-02 23:35:24'),
(39, 'company', 'forth_section', 'World', NULL, '03032021161474776916.jpg', '2021-03-02 23:32:49', '2021-03-02 23:32:49'),
(40, 'company', 'forth_section', 'Alpha', NULL, '03032021161474773984.jpg', '2021-03-02 23:32:19', '2021-03-02 23:32:19'),
(41, 'company', 'forth_section', 'To My', NULL, '03032021161474769642.jpg', '2021-03-02 23:31:36', '2021-03-02 23:31:36'),
(42, 'company', 'forth_section', 'Welcome', NULL, '030320211614747651100.jpg', '2021-03-02 23:30:51', '2021-03-02 23:30:51'),
(43, 'services', 'second_section', 'Business Strategy', NULL, '03032021161475193731.jpg', '2021-03-03 00:42:17', '2021-03-03 00:42:17'),
(44, 'services', 'second_section', 'Digital Marketing', NULL, '03032021161475198044.jpg', '2021-03-03 00:43:00', '2021-03-03 00:43:00'),
(45, 'services', 'second_section', 'Social Platforms', NULL, '03032021161475202184.jpg', '2021-03-03 00:43:41', '2021-03-03 00:43:41'),
(46, 'services', 'second_section', 'New Media', NULL, '03032021161475205536.jpg', '2021-03-03 00:44:15', '2021-03-03 00:52:01'),
(47, 'services', 'third_section', '<i class=\"fab fa-4x fa-acquisitions-incorporated tm-service-icon\"></i>', 'New Vision Template is provided by TemplateMo website for 100% free of charge. You can use this CSS template for any purpose.', '', '2021-03-03 00:55:54', '2021-03-03 00:55:54'),
(48, 'services', 'third_section', '<i class=\"fas fa-4x fa-certificate tm-service-icon\"></i>', 'Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.', '', '2021-03-03 00:56:48', '2021-03-03 00:56:48'),
(49, 'services', 'third_section', '<i class=\"fas fa-4x fa-chart-pie tm-service-icon\"></i>', 'Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.', '', '2021-03-03 00:57:47', '2021-03-03 00:57:47'),
(50, 'services', 'third_section', '<i class=\"fas fa-4x fa-anchor tm-service-icon\"></i>', 'Nam condimentum tortor id dui maximus, quis faucibus lacus faucibus. Sed urna est, vulputate quis efficitur et, laoreet nec mi.', '', '2021-03-03 00:58:24', '2021-03-03 00:59:00'),
(51, 'contact', 'forth_section', 'FUSCE CONSECTETUR JUSTO URNA', 'Phasellus scelerisque, leo id dictum consectetur, dui felis ultrices ligula, at tristique sem elit ac eros.\r\n\r\nEtiam varius faucibus elit, id ultrices\r\nNam condimentum tortor id dui\r\nQuis faucibus lacus faucibus\r\nSed urna est, vulputate quis efficitur', '', '2021-03-03 03:31:15', '2021-03-03 03:31:15'),
(52, 'contact', 'forth_section', 'NULLA EUISMOD NISI IN LIGULA', 'Etiam iaculis urna finibus ante pharetra eleifend. Nulla euismod nisi in ligula feugiat, in gravida erat tempus. Nullam velit ante, semper in rhoncus non, fringilla vel erat. In gravida dapibus massa non laoreet.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', '', '2021-03-03 03:31:46', '2021-03-03 03:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
