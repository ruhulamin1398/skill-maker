-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 06:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_images`
--

CREATE TABLE `additional_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dimension` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additional_images`
--

INSERT INTO `additional_images` (`id`, `page`, `dimension`, `title`, `link`, `created_at`, `updated_at`) VALUES
(1, 'home', '', 'footer', '/images/banner2.jpg', NULL, NULL),
(2, 'About Us', '', 'Breadcrum', '/theme/frontend/assets/img/about-us.jpg', NULL, NULL),
(3, 'Officals', '', 'Breadcrum', '/theme/frontend/assets/img/office.jpg', NULL, NULL),
(4, 'Services', '', 'Breadcrum', '/theme/frontend/assets/img/services-1.jpg', NULL, NULL),
(5, 'Traning', '', 'Breadcrum', '/theme/frontend/assets/img/training-1.jpg', NULL, NULL),
(6, 'Seminar', '', 'Breadcrum', '/theme/frontend/assets/img/seminar.jpg', NULL, NULL),
(7, 'Support', '', 'Breadcrum', '/theme/frontend/assets/img/support.jpg', NULL, NULL),
(8, 'Marketplace', '', 'Headings', '/theme/frontend/assets/img/marketplace.jpg', NULL, NULL),
(9, 'home', '600*400', 'seminar', '/theme/frontend/assets/img/marketplace.jpg', NULL, NULL),
(10, 'About', '600*400', 'Our Scope of work for the people to be engaged', 'images/1640991103.jpg', NULL, '2021-12-31 16:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `additional_settings`
--

CREATE TABLE `additional_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additional_settings`
--

INSERT INTO `additional_settings` (`id`, `page`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'home', 'about-us', 'skillmaker is an e-learning and services platform established in 2020. We offer a wide variety of e-learning and services through e-learning courses and services based on current market trend particularly in the US-UK-EU-Canada-UAE markets.', NULL, NULL),
(2, 'home', 'marketplace', 'Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip', NULL, NULL),
(3, 'home', '\r\nSeller Deshboard', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', NULL, NULL),
(4, 'home', 'Investment Group', 'Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere', NULL, NULL),
(5, 'home', 'skillmaker Trainings', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, asperiores? Molestiae amet blanditiis voluptatum eos voluptatibus impedit suscipit, cupiditate soluta illum quidem atque nisi porro, animi fugit. Ut, laudantium distinctio!', NULL, NULL),
(6, 'home', 'skillmaker Services', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur, asperiores? Molestiae amet blanditiis voluptatum eos voluptatibus impedit suscipit, cupiditate soluta illum quidem atque nisi porro, animi fugit. Ut, laudantium distinctio!', NULL, NULL),
(7, 'home', 'UPCOMING SEMINAR SCHEDULE', 'All seminars will be scheduled as per government regulations. Keep visiting the site for the latest updates.', NULL, NULL),
(8, 'Support', 'Headings text', 'Please select the relevant option to get quick support from Skillmaker.', NULL, NULL),
(9, 'facebook', 'https://www.facebook.com/skillmaker.org', '&nbsp;', NULL, '2021-12-31 17:06:24'),
(10, 'Instagram', 'https://www.instagram.com/skillmaker.organization/', '<p>&nbsp;</p>', NULL, '2021-12-31 17:07:10'),
(11, 'linkedin', '#', '<p>&nbsp;</p>', NULL, '2021-12-31 17:07:10'),
(12, 'number 1', '+1 516 410 4922', ' ', NULL, NULL),
(13, 'number 2', '+880 1783175455', ' ', NULL, NULL),
(14, 'number 3', '+880 1974775455', ' ', NULL, NULL),
(15, 'address', '405 RxR Plaza, Uniondale, NY 11553', ' ', NULL, NULL),
(16, 'email', 'contact@skillmaker.org', '  ', NULL, NULL),
(17, 'whatsapp', '+1(516)410-4922', ' ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batch_perticipates`
--

CREATE TABLE `batch_perticipates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `participator_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `enroll_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `batch_trainers`
--

CREATE TABLE `batch_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buycourses`
--

CREATE TABLE `buycourses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `course_id` bigint(20) NOT NULL,
  `assign_id` bigint(20) NOT NULL,
  `price` double(10,2) NOT NULL,
  `status` bigint(20) NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial` int(11) NOT NULL DEFAULT 1,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `chat_id` bigint(20) UNSIGNED NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breadcrumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `introduction_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `serial` int(11) NOT NULL DEFAULT 999,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'training',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_title`, `image`, `breadcrumb_image`, `introduction_video`, `description`, `price`, `serial`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Amazon FBA-Private Label', '1624981475.jpg', NULL, '1624981475.mp4', '<br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 Months Course</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A to Z know how on Amazon FBA Private Label selling</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">One time free access on tools for Product Research for one month</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Extended hours of Mentor Support through group conversation</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Access to Facebook dedicated group</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Opportunities to get Product approval&nbsp;&nbsp;</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Course Overview and Objective:</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA Private Label is a very popular method for businessmen to sell their products on Amazon’s fulfillment centers. All a businessman has to do is to store their products in the fulfillment centers and Amazon does the rest of the tasks e.g. pick, pack, ship and provides customer service for these products. Sounds very lucrative? But to avail this sort of advantage as a business man, you need to be an expert on Amazon A to Z like product research, sourcing, shipment, listing etc.</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">After doing the Amazon FBA Private Label course you will be able to:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">An expert on Amazon Product Research Tools, Sourcing, Listing &amp; Shipment.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Run a profitable Amazon FBA business successfully.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Work as Virtual Assistant on Amazon FBA Private Label expertise.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do business or work from anywhere in the world.</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Enroll NOW: PRICE&gt;&gt;&gt;&gt;&gt;</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Table of Contents/Course Outline/Course Information/Course Lesson Plan</span></p><br><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Introduction to E-commerce</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Overview on Amazon</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Business Models—</span><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffff00;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA/FBM---Amazon PL/Wholesale</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Information about Virtual Assistant</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Research Tools &amp; techniques</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Patent Check and Trademark</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Seller Central Account Creation (US-Canada-UK-EU-UAE-KSA)&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Sourcing &amp; Create Dummy Listing&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Listing &amp; Shipment on Amazon</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Launch and Ranking</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Profitability Calculation</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Inventory Management</span></p></li></ol>', 1200.00, 999, 'training', '2021-06-28 15:28:31', '2021-12-19 03:22:28'),
(2, 'Amazon FBA Wholesale', '1624982669.jpg', NULL, '1624982669.mp4', '<p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" id=\"docs-internal-guid-4ff52f0d-7fff-dab3-2f61-58ffd375d7ef\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"></span><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features:</span><br></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 Months Course</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A to Z know how on Amazon FBA Wholesale</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">One time free access on tools for Product Research for one month</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Extended Mentor Support through group conversation</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Access to Facebook dedicated group</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Opportunities to get Product approval</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Course Overview and Objective:</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA Wholesale Business is nothing but to sell on Amazon without Private Labeling. Amazon FBA Wholesale is one of the easiest ways of earning money online. All you need to do is to buy brand name products from authorized suppliers and resell those on Amazon.&nbsp;</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">After doing the Amazon FBA Wholesale course you will be able to:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">An expert on Amazon A to Z of Amazon Business Models.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">An expert on Amazon Product Research Tools.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Techniques to find the very best suppliers and best practices for Amazon Wholesale Business that will set you apart from other sellers.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Run a profitable Amazon FBA business successfully.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Work as Virtual Assistant on Amazon FBA Wholesale expertise.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do business or work from anywhere in the world.</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Enroll NOW: PRICE&gt;&gt;&gt;&gt;&gt;</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Table of Contents/Course Outline/Course Information/Course Lesson Plan</span></p><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Introduction to E-commerce</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Overview on Amazon</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Business Models—</span><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffff00;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA/FBM---Amazon PL/Wholesale</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA Wholesale requirements</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Business Account Creation requirements</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Research Methods &amp; tools.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Sourcing</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Wholesale Shipment</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Launch and Buy Box Strategies</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Profitability Calculation</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Inventory Management</span></p></li></ol><br><br><br>', 500.00, 999, 'training', '2021-06-28 16:04:29', '2021-12-19 03:23:34'),
(3, 'Amazon FBM', '1624982774.jpg', NULL, '1624982774.mp4', '<p>Description</p>', 1000.00, 999, 'training', '2021-06-28 16:06:14', '2021-06-28 16:06:14'),
(4, 'Amazon Affiliate Marketing', '1624982854.jpg', NULL, '1624982854.mp4', '<p>Description</p>', 5555.00, 999, 'training', '2021-06-28 16:07:35', '2021-06-28 16:07:35'),
(5, 'Become a Virtual Assistant', '1624982934.jpg', NULL, '1624982934.mp4', '<p>Description</p>', 1000.00, 999, 'training', '2021-06-28 16:08:54', '2021-06-28 16:08:54'),
(6, 'Sourcing from China', '1624983003.jpg', NULL, '1624983003.mp4', '<p>Description</p>', 1000.00, 999, 'training', '2021-06-28 16:10:03', '2021-06-28 16:10:03');
INSERT INTO `courses` (`id`, `course_title`, `image`, `breadcrumb_image`, `introduction_video`, `description`, `price`, `serial`, `type`, `created_at`, `updated_at`) VALUES
(7, 'AWS/DevOps', '1624983111.jpg', NULL, '1624983111.mp4', '<p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" id=\"docs-internal-guid-9256b9a5-7fff-12bd-d258-1505034eb6d3\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA-Private Label</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 Months Course</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">A to Z know how on Amazon FBA Private Label selling</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">One time free access on tools for Product Research for one month</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Extended hours of Mentor Support through group conversation</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Access to Facebook dedicated group</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Opportunities to get Product approval&nbsp;&nbsp;</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Course Overview and Objective:</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA Private Label is a very popular method for businessmen to sell their products on Amazon’s fulfillment centers. All a businessman has to do is to store their products in the fulfillment centers and Amazon does the rest of the tasks e.g. pick, pack, ship and provides customer service for these products. Sounds very lucrative? But to avail this sort of advantage as a business man, you need to be an expert on Amazon A to Z like product research, sourcing, shipment, listing etc.</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">After doing the Amazon FBA Private Label course you will be able to:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">An expert on Amazon Product Research Tools, Sourcing, Listing &amp; Shipment.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Run a profitable Amazon FBA business successfully.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Work as Virtual Assistant on Amazon FBA Private Label expertise.</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do business or work from anywhere in the world.</span></p></li></ul><br><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Enroll NOW: PRICE&gt;&gt;&gt;&gt;&gt;</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Table of Contents/Course Outline/Course Information/Course Lesson Plan</span></p><br><ol style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Introduction to E-commerce</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Overview on Amazon</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Business Models—</span><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:#ffff00;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon FBA/FBM---Amazon PL/Wholesale</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Information about Virtual Assistant</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Research Tools &amp; techniques</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Patent Check and Trademark</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Seller Central Account Creation (US-Canada-UK-EU-UAE-KSA)&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Sourcing &amp; Create Dummy Listing&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Listing &amp; Shipment on Amazon</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Launch and Ranking</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Profitability Calculation</span></p></li><li dir=\"ltr\" style=\"list-style-type:decimal;font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Inventory Management</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br><br></span></p></li></ol>', 300.00, 999, 'training', '2021-06-28 10:11:51', '2021-12-02 16:55:28'),
(9, 'SEO', '1624983226.jpg', NULL, '1624983226.mp4', '<p>Description</p>', 1000.00, 999, 'training', '2021-06-28 10:13:46', '2021-06-28 10:13:46'),
(10, 'Digital Marketing', '1624983260.jpg', NULL, '1624983260.mp4', '<p>Description</p>', 5000.00, 999, 'training', '2021-06-28 10:14:20', '2021-06-28 10:14:20'),
(11, 'Graphic Design (Video Editing, Cinematography)', '1624983297.jpg', NULL, '1624983297.mp4', '<p>Description</p><p><br></p>', 2345.00, 999, 'training', '2021-06-28 10:14:57', '2021-06-28 10:14:57'),
(12, 'Graphic Design (Logo Design, T shirt Design)', '1624983341.jpg', NULL, '1624983341.mp4', '<p>Description</p>', 5000.00, 999, 'training', '2021-06-28 10:15:41', '2021-06-28 10:15:41'),
(13, 'Advance Level Photography', '1624983386.jpg', NULL, '1624983386.mp4', '<p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" id=\"docs-internal-guid-3bcbe17d-7fff-87fd-9c8d-a2ffbbea6e0e\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Basic and Advance Level Photography</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features:</span></p><br><ul style=\"margin-top:0;margin-bottom:0;paddi', 5000.00, 999, 'training', '2021-06-28 10:16:26', '2021-12-02 15:06:05'),
(14, 'Sell On Daraz', '1624983418.jpg', NULL, '1624983418.mp4', '<p>Description</p>', 500.00, 999, 'training', '2021-06-28 10:16:58', '2021-06-28 10:16:58'),
(15, 'Web Design & Development', '1624983452.jpg', NULL, '1624983452.mp4', '<p dir=\"ltr\" style=\"line-height:1.2;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" id=\"docs-internal-guid-1c17bfbd-7fff-407a-0b83-08822afe9fe1\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Web Design and Development in wordpress platform</span></p><br><p dir=\"ltr\" style=\"line-height:1.2;text-indent: 18pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:13pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Key Features:</span></p><br><ul style=\"margin-top:0;margin-b', 500.00, 999, 'training', '2021-06-28 10:17:32', '2021-12-02 15:07:03'),
(16, 'ECL (English as a Vocational Language)', '1624983483.jpg', NULL, '1624983483.mp4', '<p>Description</p>', 5000.00, 999, 'training', '2021-06-28 10:18:03', '2021-06-28 10:18:03'),
(17, 'Sell in KSA', '1624983520.jpg', NULL, '1624983520.mp4', '<p>Description</p>', 5000.00, 999, 'training', '2021-06-28 10:18:40', '2021-06-28 10:18:40'),
(18, 'Sell in Amazon UAE', '1624983571.jpg', NULL, '1624983571.mp4', '<p>Description</p>', 6000.00, 999, 'training', '2021-06-28 10:19:31', '2021-06-28 10:19:31'),
(20, 'UK LTD Formation', 'UK_LTD_Formation1640430755image.png', 'UK_LTD_Formation1640430755breadcrumb_image.png', NULL, '<br id=\"docs-internal-guid-e1ab260f-7fff-98d3-82c9-98c2ecbefd5a\"><p dir=\"ltr\" style=\"line-height:1.5456735134124755;text-indent: 0.6091156005859375pt;margin-top:15.35565185546875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Get the true existence and legality of your UK LTD. formation. </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">We assist you in getting:&nbsp;</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2309884548187255;margin-right: 56.649658203125pt;margin-top:1.66241455078125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Company Number including the formation date.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2309884548187255;margin-right: 56.649658203125pt;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Certificate of Incorporation.&nbsp;</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.6220779418945312pt;margin-top:8.0609130859375pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Required Documents:&nbsp;</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:5.42578125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Date of Birth&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Town of Birth</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Mother’s Maiden Name</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Father’s First Name</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Telephone Number</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">National Insurance Number</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Passport Number</span></p></li></ul>', 100.00, 2, 'service', '2021-12-24 23:12:35', '2021-12-24 23:38:35'),
(21, 'UK Physical Address', 'UK_Physical_Address1640430792image.png', 'UK_Physical_Address1640430792breadcrumb_image.png', NULL, '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.12960052490234375pt;margin-right: 0.3609619140625pt;text-indent: 0.155517578125pt;margin-top:5.03564453125pt;margin-bottom:0pt;\" id=\"docs-internal-guid-912cfce0-7fff-5f10-459b-22d1c2480cb1\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Build trust among your Clients/Customers with a positive impression by having a&nbsp; </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Registered Office Address now!</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.0518341064453125pt;text-indent: 0.23328399658203125pt;margin-top:15.62078857421875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do your Business in UK with </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Registered Office Address </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">and fulfill your legal&nbsp; requirement.&nbsp;</span></p>', 120.00, 3, 'service', '2021-12-24 23:13:12', '2021-12-24 23:51:57');
INSERT INTO `courses` (`id`, `course_title`, `image`, `breadcrumb_image`, `introduction_video`, `description`, `price`, `serial`, `type`, `created_at`, `updated_at`) VALUES
(22, 'VPS', 'VPS1640430832image.png', 'VPS1640430832breadcrumb_image.png', NULL, '<br id=\"docs-internal-guid-dd5df8d0-7fff-6f0c-a845-71e6ac5fb69a\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.171348571777344pt;margin-right: 2.41845703125pt;text-indent: 0.23328399658203125pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Pull in our VPS hosting services dedicated for you! Instant access of Remote&nbsp; Desktop, SSD volume, and root admin access enables you to operate your business&nbsp; in a dedicated hosting environment.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.391670227050781pt;margin-top:6.26080322265625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Our Price and Plans (will be in a filter mode/category in the website)</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.391670227050781pt;margin-top:6.26080322265625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.719970703125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$17&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.37872314453125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Monthly</span></p></td></tr><tr style=\"height:15.84002685546875pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$28&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.37872314453125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Monthly</span></p></td></tr></tbody></table></div><br><br><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.75pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$90&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.45648193359375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">6 Months</span></p></td></tr><tr style=\"height:15.719940185546875pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$125&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.45648193359375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">6 Months</span></p></td></tr></tbody></table></div><br><br><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.839996337890625pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$175&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.767547607421875pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1 Year</span></p></td></tr><tr style=\"height:15.719970703125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$235&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.767547607421875pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1 year</span></p></td></tr></tbody></table></div><br><br><br>', 120.00, 4, 'service', '2021-12-24 23:13:52', '2021-12-24 23:22:30'),
(23, 'UK VAT Registration', 'UK_VAT_Registration1640430891image.png', 'UK_VAT_Registration1640430891breadcrumb_image.png', NULL, '<span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\" id=\"docs-internal-guid-e1e3161f-7fff-75c3-b944-e80b70136948\">The complexities of Taxes are not easy to handle. But for an expert it is easy to&nbsp; handle. Take our expert assistance and guidance and do your business worry-free&nbsp; </span>', 12.00, 5, 'service', '2021-12-24 23:14:51', '2021-12-24 23:14:51'),
(24, 'UK Trademark', 'UK_Trademark1640430925image.png', 'UK_Trademark1640430925breadcrumb_image.png', NULL, '<p dir=\"ltr\" style=\"line-height:1.2;text-indent: 0.5831985473632812pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\" id=\"docs-internal-guid-df9a7a53-7fff-36ef-1e79-582c61c6c000\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Differentiate your product in the market from others! We do UK trademark related&nbsp; activities with a very competitive service charge. Our services include appealing&nbsp; word, phrase, symbol, creating unique design etc. that you may require for your&nbsp; Business Trademark and make your own Brand.&nbsp;&nbsp;</span></p>', 120.00, 6, 'service', '2021-12-24 23:15:25', '2021-12-24 23:40:36'),
(25, 'Content Writing', 'Content_Writing1640430959image.png', 'Content_Writing1640430959breadcrumb_image.png', NULL, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Whether you are a Small Business or a Large Enterprise, Enablers have got you covered whatever your content needs are. Being one of the best content writing service providers, we excel at delivering unique and compelling content to professionals as well as businesses that help them in boosting their growth and help them to establish a strong online presence. We undertake content development projects of all sizes.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our team of professional and brilliant writers provide proper content writing assistance and help in building brand value. Content writers at Enablers create content by doing complete market research and analysis. Along with writers, our qualified SEO experts provide organic SEO solutions to ensure that your website maintains high ranking, allowing you to generate higher returns on your investment.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the original, high-quality content crafted with engaging dialect and headlines that pop in the content. With Enablers, you can enjoy the following top-notch content writing services:</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Article Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the high-quality and original content that is SEO optimized as well as verified for being original.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Blog Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Drive website traffic, enhance your conversions as well as sales with our superb blog writing services.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Website Content</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Give your website a completely new makeover with the superb content with our website content writing services.</p>', 120.00, 999, 'service', '2021-12-24 23:15:59', '2021-12-24 23:15:59'),
(26, 'Logo Design', 'Logo_Design1640430994image.png', 'Logo_Design1640430994breadcrumb_image.png', NULL, '<br id=\"docs-internal-guid-5989743b-7fff-aa86-e107-27d02527d5ca\"><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3199872970581055;margin-right: 0.346435546875pt;text-align: justify;margin-top:12.8953857421875pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">skillmaker provides Logo Design services that entail your sophistication.&nbsp; Hire our skilled and experienced logo designers to portray your products and&nbsp; services. Build trust and confidence among your customers!&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3199894428253174;margin-right: 0.17816162109375pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Give your details, thought process is ours! Spare your time effectively and&nbsp; efficiently. We design logos compatible with the products and services and&nbsp; that’s our key strength!&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3242610931396483;margin-top:1.65142822265625pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Create your first impression gorgeous by choosing our best professional&nbsp; designers! </span></p></li></ul>', 1000.00, 8, 'service', '2021-12-24 23:16:34', '2021-12-24 23:41:26'),
(27, 'Writing', 'Writing1640432390image.png', 'Writing1640432390breadcrumb_image.png', NULL, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Whether you are a Small Business or a Large Enterprise, Enablers have got you covered whatever your content needs are. Being one of the best content writing service providers, we excel at delivering unique and compelling content to professionals as well as businesses that help them in boosting their growth and help them to establish a strong online presence. We undertake content development projects of all sizes.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our team of professional and brilliant writers provide proper content writing assistance and help in building brand value. Content writers at Enablers create content by doing complete market research and analysis. Along with writers, our qualified SEO experts provide organic SEO solutions to ensure that your website maintains high ranking, allowing you to generate higher returns on your investment.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the original, high-quality content crafted with engaging dialect and headlines that pop in the content. With Enablers, you can enjoy the following top-notch content writing services:</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Article Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the high-quality and original content that is SEO optimized as well as verified for being original.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Blog Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Drive website traffic, enhance your conversions as well as sales with our superb blog writing services.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Website Content</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Give your website a completely new makeover with the superb content with our website content writing services.</p>', 1200.00, 7, 'service', '2021-12-24 23:39:50', '2021-12-24 23:39:50'),
(28, 'Amazon A to Z VA Services', 'Amazon_A_to_Z_VA_Services1640433495image.png', 'Amazon_A_to_Z_VA_Services1640433495image.png', NULL, '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.5054397583007812pt;margin-right: 0.130859375pt;text-indent: 0.2980804443359375pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\" id=\"docs-internal-guid-040b055e-7fff-8b78-1562-6ce383b5a529\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Business on Amazon Store requires some exceptional skills and services. We provide those skills and services through our Virtual Assistants (VA), who are very much competitive in pursuit of </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">AMAZON A to Z </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">i.e. —&nbsp;</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0.98077392578125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Hunting&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Sourcing and Dummy Listing&nbsp;&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Shipment/Logistics&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Listing Creation and Optimization&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Launching and PPC Ranking&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Account Management&nbsp;</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.6220779418945312pt;text-indent: 0.0259246826171875pt;margin-top:20.1856689453125pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Hire our Skilled VA @ $250.00 per Month* till Product Launch (Minimum 2&nbsp; Months to Maximum of 4 Months)&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.36287689208984375pt;margin-right: 0.18548583984375pt;text-indent: 0.7257614135742188pt;margin-top:15.620758056640625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:700;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">*For Amazon Account Management Services, it is negotiable and on contract&nbsp; basis.&nbsp;</span></p>', 120.00, 1, 'service', '2021-12-24 23:52:57', '2021-12-24 23:52:57');

-- --------------------------------------------------------

--
-- Table structure for table `course_videos`
--

CREATE TABLE `course_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `chapter_id` bigint(20) UNSIGNED NOT NULL,
  `video_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 999,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `participator_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `seminar_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_Comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_due` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_assigned` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answere` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_managers`
--

CREATE TABLE `file_managers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freelancers`
--

CREATE TABLE `freelancers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `freelancers`
--

INSERT INTO `freelancers` (`id`, `name`, `location`, `image`, `language`, `skills`, `description`, `created_at`, `updated_at`) VALUES
(1, 'John', 'dhaka', '1625043877.jpg', 'bangla,english', 'php,laravel', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.', '2021-06-29 04:24:00', '2021-06-29 21:04:37'),
(2, 'Jonathon De Silva', 'Comilla', '1625043914.jpg', 'bangla,english', 'WordPress', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.', '2021-06-29 04:24:00', '2021-06-29 21:05:14'),
(3, 'Alon Finch', 'Chittagong', '1625043974.jpg', 'Bangla, English', 'Javascript', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:06:14', '2021-06-29 21:06:14'),
(4, 'Maria Jr', 'Sylhet', '1625044046.jpg', 'Bangla, English', 'Jquery', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:07:26', '2021-06-29 21:07:26'),
(5, 'Chris Moris', 'Hobigonj', '1625044132.jpg', 'Bangla, English', 'Web Design', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:08:52', '2021-06-29 21:08:52'),
(6, 'Maxweal', 'Borishal', '1625044197.jpg', 'Bangla, English', 'Python', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:09:57', '2021-06-29 21:09:57'),
(7, 'Ben Stocks', 'Moulvibazar', '1625044240.jpg', 'Bangla, English', 'Graphics Design', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:10:40', '2021-06-29 21:10:40'),
(8, 'Kumar Sangakara', 'Rajsahi', '1625044321.jpg', 'Bangla, English', 'Java', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.<br></p>', '2021-06-29 21:12:01', '2021-06-29 21:12:01');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2021_06_04_064043_create_sessions_table', 1),
(10, '2021_06_14_173653_create_services_table', 1),
(11, '2021_06_15_095415_create_success_stories_table', 1),
(12, '2021_06_15_131541_create_offices_table', 1),
(13, '2021_06_15_133457_create_seminars_table', 1),
(14, '2021_06_16_054506_create_faqs_table', 1),
(15, '2021_06_16_134241_create_perticipators_table', 1),
(16, '2021_06_20_121547_create_trainers_table', 1),
(17, '2021_06_21_110418_create_buycourses_table', 1),
(18, '2021_06_21_131953_create_supports_table', 1),
(19, '2021_06_24_063859_create_chats_table', 1),
(20, '2021_06_24_145152_create_chat_messages_table', 1),
(21, '2021_06_26_054339_create_courses_table', 1),
(22, '2021_06_26_085023_create_course_videos_table', 1),
(23, '2021_06_28_090344_create_freelancers_table', 1),
(24, '2021_06_28_110525_create_permission_tables', 1),
(25, '2021_06_30_093218_create_seminar_trainers_table', 1),
(26, '2021_07_01_131708_create_batches_table', 1),
(27, '2021_07_01_133327_create_batch_perticipates_table', 1),
(28, '2021_07_02_080548_create_batch_trainers_table', 1),
(29, '2021_12_18_071402_create_file_managers_table', 1),
(30, '2021_12_18_135555_create_our_teams_table', 1),
(31, '2021_12_22_051640_create_chapters_table', 1),
(32, '2021_12_24_193942_create_branches_table', 1),
(33, '2021_12_24_200432_create_seminar_participators_table', 1),
(34, '2021_12_25_103624_create_enrolls_table', 1),
(35, '2021_12_30_084504_create_video_players_table', 1),
(36, '2021_12_31_070104_create_additional_settings_table', 1),
(37, '2021_12_31_074516_create_additional_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `country`, `location`, `description`, `map_link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'USA', 'OFFICE: 405 RXR PLAZA, UNIONDALE, NY 11553. Contact: info@skillmaker.org/917 402 1320', '<p>Description Here</p>', 'Null', '1624979661.jpg', '2021-06-29 03:14:21', '2021-06-29 03:14:21'),
(2, 'Canada', 'East York, Ontatio, Canada. info@skillmaker.org', '<p>Description Here</p>', 'Null', '1624979738.jpg', '2021-06-29 03:15:38', '2021-06-29 03:15:38'),
(3, 'UK OFFICE', 'Bradford, West Yorkshire, UK. info@skillmaker.org', '<p>Description Here</p>', 'Null', '1624979806.jpg', '2021-06-29 03:16:46', '2021-06-29 03:16:46'),
(4, 'UK City Office', 'Barkingside High Street, Ilford, London, United Kingdom. info@skillmaker.org', '<p>Description Here</p><p><br></p>', 'Null', '1624979904.jpg', '2021-06-29 03:18:24', '2021-06-29 03:18:24'),
(5, '- France Office', 'Rue Du Coq Frances, 93260 Les Lilas, France. info@skillmaker.org', '<p>Description Here</p>', 'Null', '1624979968.jpg', '2021-06-29 03:19:28', '2021-06-29 03:19:28'),
(6, 'Saudi Arabia', 'Abu Al Mu’alla Al Farisi Street, Al Khadiyah District, Al Madina Al Munawwarah, Kingdom of Saudi Arabia. info@skillmaker.org', '<p>Description Here</p>', 'Null', '1624980007.jpg', '2021-06-29 03:20:07', '2021-06-29 03:20:07'),
(7, 'UAE', 'Khalifa Street, Abu Dhabi, UAE info@skillmaker.org', '<p>Description Here</p>', 'Null', '1624980047.jpg', '2021-06-29 03:20:47', '2021-06-29 03:20:47'),
(8, 'Pakistan', 'Sindh, Karachi, Pakistan. info@skillmaker.org', '<p>Description Here</p><p><br></p>', 'Null', '1624980093.jpg', '2021-06-29 03:21:33', '2021-06-29 03:21:33'),
(9, 'Bangladesh', '11 Abash, Jail Road, Sylhet 3100. info@skillmaker.org/', '<p>Description Here</p>', 'Null', '1624980192.jpg', '2021-06-29 03:23:12', '2021-06-29 03:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `our_teams`
--

CREATE TABLE `our_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `serial` int(11) NOT NULL DEFAULT 999,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'branch_admin', 'web', NULL, NULL),
(3, 'student', 'web', NULL, NULL),
(4, 'trainer', 'web', NULL, NULL),
(5, 'freelancer', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perticipators`
--

CREATE TABLE `perticipators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pasport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occopation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enablers` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'branch_admin', 'web', NULL, NULL),
(3, 'student', 'web', NULL, NULL),
(4, 'trainer', 'web', NULL, NULL),
(5, 'freelancer', 'web', NULL, NULL);

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
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breadcrumb_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `title`, `location`, `breadcrumb_image`, `venue`, `date`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'New protal', 'Sylhet', NULL, 'Sylhet', '2021-08-28', 5000.00, NULL, 0, '2021-06-23 03:07:42', '2021-06-28 16:16:34'),
(2, 'Agile seminar', 'Sunamgonj', NULL, 'Sunamgonj', '2021-09-18', 5500.00, NULL, 0, '2021-06-23 03:10:08', '2021-06-28 16:18:21'),
(3, 'Hobigonj', 'Hobigonj', NULL, 'Hobigonj', '2021-10-02', 5000.00, NULL, 0, '2021-06-28 16:25:36', '2021-06-28 16:25:36'),
(4, 'Moulvibazar', 'Moulvibazar', NULL, 'Moulvibazar', '2021-10-16', 5000.00, NULL, 0, '2021-06-28 16:26:18', '2021-06-28 16:26:18');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_participators`
--

CREATE TABLE `seminar_participators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seminar_id` bigint(20) UNSIGNED NOT NULL,
  `participator_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seminar_trainers`
--

CREATE TABLE `seminar_trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `seminer_id` bigint(20) UNSIGNED NOT NULL,
  `trainer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ' ',
  `price` double(8,2) NOT NULL DEFAULT 0.00,
  `service_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `sub_title`, `description`, `price`, `service_image`, `created_at`, `updated_at`) VALUES
(1, 'Amazon A to Z VA Services:', 'Amazon A to Z VA Services', '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.5054397583007812pt;margin-right: 0.130859375pt;text-indent: 0.2980804443359375pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\" id=\"docs-internal-guid-040b055e-7fff-8b78-1562-6ce383b5a529\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Business on Amazon Store requires some exceptional skills and services. We provide those skills and services through our Virtual Assistants (VA), who are very much competitive in pursuit of </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">AMAZON A to Z </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">i.e. —&nbsp;</span></p><br><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0.98077392578125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Hunting&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Sourcing and Dummy Listing&nbsp;&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Shipment/Logistics&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Listing Creation and Optimization&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Product Launching and PPC Ranking&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Amazon Account Management&nbsp;</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.6220779418945312pt;text-indent: 0.0259246826171875pt;margin-top:20.1856689453125pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Hire our Skilled VA @ $250.00 per Month* till Product Launch (Minimum 2&nbsp; Months to Maximum of 4 Months)&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.36287689208984375pt;margin-right: 0.18548583984375pt;text-indent: 0.7257614135742188pt;margin-top:15.620758056640625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:700;font-style:italic;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">*For Amazon Account Management Services, it is negotiable and on contract&nbsp; basis.&nbsp;</span></p>', 250.00, '1635127801.jpg', '2021-06-22 02:45:56', '2021-12-16 05:44:16'),
(2, 'UK LTD Formation', 'Form your own company in UK!', '<br id=\"docs-internal-guid-e1ab260f-7fff-98d3-82c9-98c2ecbefd5a\"><p dir=\"ltr\" style=\"line-height:1.5456735134124755;text-indent: 0.6091156005859375pt;margin-top:15.35565185546875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Get the true existence and legality of your UK LTD. formation. </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">We assist you in getting:&nbsp;</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2309884548187255;margin-right: 56.649658203125pt;margin-top:1.66241455078125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Company Number including the formation date.&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2309884548187255;margin-right: 56.649658203125pt;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Certificate of Incorporation.&nbsp;</span></p></li></ul><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.6220779418945312pt;margin-top:8.0609130859375pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Required Documents:&nbsp;</span></p><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:5.42578125pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Date of Birth&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Town of Birth</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Mother’s Maiden Name</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Father’s First Name</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Telephone Number</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">National Insurance Number</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.2;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Passport Number</span></p></li></ul>', 80.00, '1635127849.jpg', '2021-06-22 02:48:50', '2021-12-16 05:43:01'),
(3, 'UK Physical Address', 'UK Physical Address', '<p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.12960052490234375pt;margin-right: 0.3609619140625pt;text-indent: 0.155517578125pt;margin-top:5.03564453125pt;margin-bottom:0pt;\" id=\"docs-internal-guid-912cfce0-7fff-5f10-459b-22d1c2480cb1\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Build trust among your Clients/Customers with a positive impression by having a&nbsp; </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Registered Office Address now!</span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 0.0518341064453125pt;text-indent: 0.23328399658203125pt;margin-top:15.62078857421875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Do your Business in UK with </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#002060;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:underline;-webkit-text-decoration-skip:none;text-decoration-skip-ink:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Registered Office Address </span><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">and fulfill your legal&nbsp; requirement.&nbsp;</span></p>', 220.00, '1635127867.jpg', '2021-06-22 02:50:32', '2021-12-16 05:45:23'),
(4, 'VPS', 'VPS', '<br id=\"docs-internal-guid-dd5df8d0-7fff-6f0c-a845-71e6ac5fb69a\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.171348571777344pt;margin-right: 2.41845703125pt;text-indent: 0.23328399658203125pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Pull in our VPS hosting services dedicated for you! Instant access of Remote&nbsp; Desktop, SSD volume, and root admin access enables you to operate your business&nbsp; in a dedicated hosting environment.&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.391670227050781pt;margin-top:6.26080322265625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Our Price and Plans (will be in a filter mode/category in the website)</span></p><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.391670227050781pt;margin-top:6.26080322265625pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><br></span></p><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.719970703125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$17&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.37872314453125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Monthly</span></p></td></tr><tr style=\"height:15.84002685546875pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$28&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.37872314453125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Monthly</span></p></td></tr></tbody></table></div><br><br><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.75pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$90&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.45648193359375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">6 Months</span></p></td></tr><tr style=\"height:15.719940185546875pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$125&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.45648193359375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">6 Months</span></p></td></tr></tbody></table></div><br><br><div dir=\"ltr\" style=\"margin-left:0pt;\" align=\"left\"><table style=\"border:none;border-collapse:collapse;\"><colgroup><col width=\"213\"><col width=\"213\"><col width=\"213\"></colgroup><tbody><tr style=\"height:15.839996337890625pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 5.76959228515625pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Volume&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491302490234375pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Price&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.2491455078125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Period</span></p></td></tr><tr style=\"height:15.72003173828125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.456474304199219pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">2 GB&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$175&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.767547607421875pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1 Year</span></p></td></tr><tr style=\"height:15.719970703125pt\"><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.132469177246094pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">4 Gb&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.352813720703125pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">$235&nbsp;</span></p></td><td style=\"border-left:solid #000000 1pt;border-right:solid #000000 1pt;border-bottom:solid #000000 1pt;border-top:solid #000000 1pt;vertical-align:top;padding:5pt 5pt 5pt 5pt;overflow:hidden;overflow-wrap:break-word;\"><p dir=\"ltr\" style=\"line-height:1.2;margin-left: 6.767547607421875pt;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#ff0000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">1 year</span></p></td></tr></tbody></table></div><br><br><br>', 17.00, '1635127909.jpg', '2021-06-26 21:12:27', '2021-12-16 05:47:13'),
(5, 'UK VAT Registration', 'UK VAT Registration', '<span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\" id=\"docs-internal-guid-e1e3161f-7fff-75c3-b944-e80b70136948\">The complexities of Taxes are not easy to handle. But for an expert it is easy to&nbsp; handle. Take our expert assistance and guidance and do your business worry-free&nbsp; </span>', 110.00, '1635127889.jpg', '2021-06-26 21:13:11', '2021-12-16 05:41:02'),
(6, 'UK Trademark', 'UK Trademark', '<p dir=\"ltr\" style=\"line-height:1.2;text-indent: 0.5831985473632812pt;text-align: justify;margin-top:4.795654296875pt;margin-bottom:0pt;\" id=\"docs-internal-guid-df9a7a53-7fff-36ef-1e79-582c61c6c000\"><span style=\"font-size:18pt;font-family:Cambria,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Differentiate your product in the market from others! We do UK trademark related&nbsp; activities with a very competitive service charge. Our services include appealing&nbsp; word, phrase, symbol, creating unique design etc. that you may require for your&nbsp; Business Trademark and make your own Brand.&nbsp;&nbsp;</span></p>', 150.00, '1635127929.png', '2021-06-26 21:13:40', '2021-12-16 05:46:26'),
(7, 'Content Writing', 'Content Writing', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Whether you are a Small Business or a Large Enterprise, Enablers have got you covered whatever your content needs are. Being one of the best content writing service providers, we excel at delivering unique and compelling content to professionals as well as businesses that help them in boosting their growth and help them to establish a strong online presence. We undertake content development projects of all sizes.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Our team of professional and brilliant writers provide proper content writing assistance and help in building brand value. Content writers at Enablers create content by doing complete market research and analysis. Along with writers, our qualified SEO experts provide organic SEO solutions to ensure that your website maintains high ranking, allowing you to generate higher returns on your investment.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the original, high-quality content crafted with engaging dialect and headlines that pop in the content. With Enablers, you can enjoy the following top-notch content writing services:</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Article Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Get the high-quality and original content that is SEO optimized as well as verified for being original.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Blog Writing</span></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Drive website traffic, enhance your conversions as well as sales with our superb blog writing services.</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\"><span style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; font-variant: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; font-family: inherit; font-size: 25px; font-style: inherit; font-weight: 700;\">Website Content</span></p><p style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 40px; border: 0px; outline: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 32px; vertical-align: baseline; font-family: Poppins; font-size: 22px; color: rgb(0, 0, 0);\">Give your website a completely new makeover with the superb content with our website content writing services.</p>', 0.00, '1635129182.jpg', '2021-06-26 21:14:53', '2021-10-23 20:33:02'),
(8, 'Logo Design', 'Logo Design', '<br id=\"docs-internal-guid-5989743b-7fff-aa86-e107-27d02527d5ca\"><ul style=\"margin-top:0;margin-bottom:0;padding-inline-start:48px;\"><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3199872970581055;margin-right: 0.346435546875pt;text-align: justify;margin-top:12.8953857421875pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:\'Noto Sans Symbols\',sans-serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">skillmaker provides Logo Design services that entail your sophistication.&nbsp; Hire our skilled and experienced logo designers to portray your products and&nbsp; services. Build trust and confidence among your customers!&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3199894428253174;margin-right: 0.17816162109375pt;text-align: justify;margin-top:0pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Give your details, thought process is ours! Spare your time effectively and&nbsp; efficiently. We design logos compatible with the products and services and&nbsp; that’s our key strength!&nbsp;</span></p></li><li dir=\"ltr\" style=\"list-style-type:disc;font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;\" aria-level=\"1\"><p dir=\"ltr\" style=\"line-height:1.3242610931396483;margin-top:1.65142822265625pt;margin-bottom:0pt;\" role=\"presentation\"><span style=\"font-size:18pt;font-family:Times,serif;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Create your first impression gorgeous by choosing our best professional&nbsp; designers! </span></p></li></ul>', 0.00, '1635129360.jpg', '2021-06-26 21:16:30', '2021-12-15 21:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desctiption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`id`, `name`, `location`, `short_desctiption`, `long_description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Shaki Al Hasan', 'Dhaka', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiisLorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiisLorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiisLorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis<br></p>', '1625046044.jpg', '2021-06-29 21:40:44', '2021-06-29 21:40:44'),
(2, 'Mashrafi Mortoza', 'Norail', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.</span><br></p>', '1625046119.jpg', '2021-06-29 21:41:59', '2021-06-29 21:41:59'),
(3, 'Mushfiqur Rahim', 'Dhaka', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.</span><br></p>', '1625046157.jpg', '2021-06-29 21:42:37', '2021-06-29 21:42:37'),
(4, 'Mohammad Mahmudulla', 'Khulna', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.</span><br></p>', '1625046200.jpg', '2021-06-29 21:43:20', '2021-06-29 21:43:20'),
(5, 'Tamim Iqbal', 'Dhaka', 'Lorem ipsum dolor sit amet consectetuex repellendus adipis', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.</span><br></p>', '1625046244.jpg', '2021-06-29 21:44:04', '2021-06-29 21:44:04'),
(6, 'Mustafizur Rahman', 'Shathkhira', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.', '<p><span style=\"color: rgb(68, 68, 68); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, ut quaerat praesentium ipsum vel ex repellendus adipisci nisi explicabo maiores. Accusamus beatae sequi placeat deleniti voluptate facere, blanditiis eius ab.</span><br></p>', '1625046294.jpg', '2021-06-29 21:44:54', '2021-06-29 21:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `title`, `phone`, `facebook`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 'General Complaint', '00000000000', 'facebook.com/example', 'info@example.com', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p>', '2021-06-29 01:57:24', '2021-06-29 01:57:24'),
(2, 'Training Related Query/Concern', '00000000000', 'facebook.com/example', 'info@example.com', '<p>Hello World</p>', '2021-06-29 01:59:10', '2021-06-29 01:59:10'),
(3, 'Video Series Concern', '00000000000', 'facebook.com/example', 'info@example.com', '<p>Hello World</p>', '2021-06-29 02:01:29', '2021-06-29 02:02:00'),
(4, 'Payment Related Concern', '00000000000', 'facebook.com/example', 'info@aymansohag.com', '<p>Hello World</p><p><br></p>', '2021-06-29 02:05:52', '2021-06-29 02:05:52'),
(5, 'Mentor Related Concern', '00000000000', 'facebook.com/example', 'info@example.com', '<p>Hello World</p><p><br></p>', '2021-06-29 02:07:32', '2021-06-29 02:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_education` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_work` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desctiption` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@abasas.tech', NULL, '$2y$10$h/gK/pMxH/qENZjwTcjx7eT2.mDUv7DdWlxcT2u6Yv8KTLk1KT9gW', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'branch Admin', 'branchadmin@gmail.com', NULL, '$2y$10$uVOjlqbWra6j3mpdCJp2m.JmPAiM.MPkbXqLbagPXoRAwV9devko6', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'student', 'student@abasas.tech', NULL, '$2y$10$q1Jat5vMZUHzZwXIidetM.CoDoH45zUn7NO4LJR9wX8syhWJjLBjC', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'trainer', 'trainer@abasas.tech', NULL, '$2y$10$36cGHpdv4Lg5tWozTEqYruspUpGgQ/OhoQj1bPp53Gzf7//.Vq5UC', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'freelancer', 'freelancer@abasas.tech', NULL, '$2y$10$maENH4ZO4rKvM5OHQKbUA.Z3hUwXOzKahaoxEqx6xgecSmVUdcAzG', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_players`
--

CREATE TABLE `video_players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_images`
--
ALTER TABLE `additional_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `additional_settings`
--
ALTER TABLE `additional_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_perticipates`
--
ALTER TABLE `batch_perticipates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_trainers`
--
ALTER TABLE `batch_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buycourses`
--
ALTER TABLE `buycourses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_videos`
--
ALTER TABLE `course_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_managers`
--
ALTER TABLE `file_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelancers`
--
ALTER TABLE `freelancers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_teams`
--
ALTER TABLE `our_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perticipators`
--
ALTER TABLE `perticipators`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar_participators`
--
ALTER TABLE `seminar_participators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seminar_trainers`
--
ALTER TABLE `seminar_trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_players`
--
ALTER TABLE `video_players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_images`
--
ALTER TABLE `additional_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `additional_settings`
--
ALTER TABLE `additional_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch_perticipates`
--
ALTER TABLE `batch_perticipates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batch_trainers`
--
ALTER TABLE `batch_trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buycourses`
--
ALTER TABLE `buycourses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `course_videos`
--
ALTER TABLE `course_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_managers`
--
ALTER TABLE `file_managers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freelancers`
--
ALTER TABLE `freelancers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `our_teams`
--
ALTER TABLE `our_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perticipators`
--
ALTER TABLE `perticipators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seminar_participators`
--
ALTER TABLE `seminar_participators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seminar_trainers`
--
ALTER TABLE `seminar_trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `success_stories`
--
ALTER TABLE `success_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_players`
--
ALTER TABLE `video_players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
