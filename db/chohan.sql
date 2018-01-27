-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2017 at 08:08 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `title`, `description`, `status`, `path`, `created_at`, `updated_at`) VALUES
(1, '1', 'Title new', 'Description update', 1, 'Title\\16426229_827186630756054_5462652350921436797_n.jpg', '2017-12-20 04:24:28', '2017-12-21 03:36:34'),
(3, '1', 'new title', 'new Descriptionamdsnbambfha', 1, 'new title\\IMG_7288.JPG', '2017-12-20 04:24:28', '2017-12-21 06:49:40'),
(4, '1', 'dlksnfkjl', 'upatdf,msd f', 1, 'dlksnfkjl\\logo_pdf.png', '2017-12-21 00:32:56', '2017-12-21 01:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `blogphotos`
--

CREATE TABLE `blogphotos` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(10) UNSIGNED NOT NULL,
  `built_in_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parking_space` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `double_glazed_window` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `central_air_conditioning` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `central_heating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flooring_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity_backup_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waste_disposal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_number_of_floors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_main_feature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furnished` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lobby_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_floor_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_elevators_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_elevators_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_parking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `underground_parking` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elevator_or_lift` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_units` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broadband_internet_access` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satellite_or_cable_tv_ready` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intercom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_business_and_communication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_center_or_media_room_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confrence_room_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atm_and_machine_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_bedrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_bathrooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_servant_quaters` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drawing_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_kitchens` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prayer_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `powder_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steaming_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_of_store_rooms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lounge_or_sitting_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_room` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_schools` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_hospitals` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_shopping_malls` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_restaurants` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance_from_airport_kms` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_nearby_places` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nearby_public_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lawn_or_garden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimming_pool` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sauna` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jacuzzi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_health_and_recreational` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenance_staff` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_staff` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities_for_disabled` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_facilities` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laundry_or_dry_cleaning_facilities` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `communal_or_shared_kitchen_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pet_policies` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cctv_security_installed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cafeteria_or_canteen_in_building` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pet_policy_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `possesion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `corner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `park_facing` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disputed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balloted` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sewerage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_supply` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sui_gas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boundry_wall` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_plot_features` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `property_id`, `built_in_year`, `view`, `parking_space`, `double_glazed_window`, `central_air_conditioning`, `central_heating`, `flooring_type`, `electricity_backup_type`, `waste_disposal`, `total_number_of_floors`, `other_main_feature`, `furnished`, `lobby_in_building`, `floor`, `total_floor_building`, `number_of_elevators_in_building`, `service_elevators_in_building`, `public_parking`, `underground_parking`, `elevator_or_lift`, `number_of_units`, `broadband_internet_access`, `satellite_or_cable_tv_ready`, `intercom`, `other_business_and_communication`, `facilities`, `business_center_or_media_room_building`, `confrence_room_in_building`, `atm_and_machine_in_building`, `number_of_bedrooms`, `number_of_bathrooms`, `number_of_servant_quaters`, `drawing_room`, `dining_room`, `number_of_kitchens`, `study_room`, `prayer_room`, `powder_room`, `gym_room`, `steaming_room`, `number_of_store_rooms`, `lounge_or_sitting_room`, `laundry_room`, `other_room`, `nearby_schools`, `nearby_hospitals`, `nearby_shopping_malls`, `nearby_restaurants`, `distance_from_airport_kms`, `other_nearby_places`, `nearby_public_transport`, `lawn_or_garden`, `swimming_pool`, `sauna`, `jacuzzi`, `other_health_and_recreational`, `maintenance_staff`, `security_staff`, `facilities_for_disabled`, `other_facilities`, `laundry_or_dry_cleaning_facilities`, `communal_or_shared_kitchen_in_building`, `pet_policies`, `cctv_security_installed`, `cafeteria_or_canteen_in_building`, `pet_policy_type`, `possesion`, `corner`, `park_facing`, `disputed`, `file`, `balloted`, `sewerage`, `electricity`, `water_supply`, `sui_gas`, `boundry_wall`, `other_plot_features`, `created_at`, `updated_at`) VALUES
(1, 1, '2003', NULL, '0', 'on', NULL, 'on', 'Flooring_None', 'Electricity_Backup_None', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-14 04:11:26', '2017-12-22 05:41:57'),
(2, 3, '2008', NULL, '0', 'on', 'on', 'on', 'Flooring_None', 'Electricity_Backup_None', 'on', NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-14 05:32:46', '2017-12-22 05:45:16'),
(3, 4, '2008', NULL, '0', 'on', 'on', 'on', 'Flooring_None', 'Electricity_Backup_Generator', NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, '2', '0', NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '20', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-12-15 06:44:37', '2017-12-15 06:44:37');

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
(40, '2014_10_12_000000_create_users_table', 1),
(41, '2014_10_12_100000_create_password_resets_table', 1),
(42, '2017_11_27_064102_create_property_table', 1),
(43, '2017_11_28_093320_create_feature_table', 1),
(44, '2017_12_13_092015_create_photos_table', 1),
(45, '2017_12_19_062335_create_blog_table', 2),
(46, '2017_12_19_065558_create_blog_photos_table', 3);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `property_id` int(11) NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `property_id`, `path`, `rank`, `created_at`, `updated_at`) VALUES
(1, 1, 'dha house\\logo_pdf.png', '1', '2017-12-14 04:11:26', '2017-12-14 04:11:26'),
(2, 1, 'dha house\\16426229_827186630756054_5462652350921436797_n.jpg', NULL, '2017-12-14 04:11:26', '2017-12-14 04:11:26'),
(3, 1, 'dha house\\SOCIAL NETWORKING.jpg', NULL, '2017-12-14 04:11:26', '2017-12-14 04:11:26'),
(4, 5, 'dfaafd adf\\42275.jpg', '1', '2017-12-14 05:32:46', '2017-12-14 05:32:46'),
(5, 3, 'dfaafd adf\\41985.jpg', NULL, '2017-12-14 05:32:46', '2017-12-14 05:32:46'),
(6, 3, 'dfaafd adf\\42271.jpg', NULL, '2017-12-14 05:32:46', '2017-12-14 05:32:46'),
(7, 3, 'dfaafd adf\\16426229_827186630756054_5462652350921436797_n.jpg', NULL, '2017-12-14 05:32:46', '2017-12-14 05:32:46'),
(8, 3, 'dfaafd adf\\20171211_140122.jpg', NULL, '2017-12-14 05:32:46', '2017-12-14 05:32:46'),
(9, 4, 'Dora House\\Aventador-wallpaper-10597253.jpg', NULL, '2017-12-15 06:44:37', '2017-12-15 06:44:37'),
(10, 4, 'Dora House\\Bmw_M3-wallpaper-10912517.jpg', '1', '2017-12-15 06:44:37', '2017-12-15 06:44:37'),
(11, 4, 'Dora House\\BMW_M3-wallpaper-10915233.jpg', NULL, '2017-12-15 06:44:37', '2017-12-15 06:44:37');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `hot` tinyint(4) NOT NULL DEFAULT '0',
  `superhot` tinyint(4) NOT NULL DEFAULT '0',
  `ad_status` tinyint(4) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `purpose` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` double DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `status`, `hot`, `superhot`, `ad_status`, `user_id`, `purpose`, `property_type`, `description`, `price`, `city`, `address`, `unit_type`, `unit_size`, `position`, `body`, `created_at`, `updated_at`) VALUES
(1, 'dha house updated', 0, 0, 1, 1, 1, NULL, 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Lahore', 'DHA Phase 3, Lahore, Punjab, Pakistan', NULL, NULL, NULL, NULL, NULL, '2017-12-22 05:41:57'),
(3, 'DHA KARACHI updated', 0, 0, 0, 1, 1, NULL, 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Karachi', 'DHA Phase 3, Lahore, Punjab, Pakistan', NULL, NULL, NULL, NULL, NULL, '2017-12-22 04:12:17'),
(4, 'Dora House', 0, 0, 0, 1, 1, NULL, 'Lower-Portions', 'Beautiful', 10000000, '1', 'DHA Phase 4, Lahore, Punjab, Pakistan', NULL, NULL, NULL, NULL, NULL, '2017-12-22 05:45:16'),
(5, 'dha house', 0, 0, 1, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Lahore', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '10', NULL, NULL, NULL, NULL),
(6, 'DHA KARACHI', 0, 0, 1, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Karachi', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '5', NULL, NULL, NULL, NULL),
(7, 'Dora House', 0, 0, 1, 1, 1, 'Sale', 'Upper-Portions', 'Beautiful', 10000000, '1', 'DHA Phase 4, Lahore, Punjab, Pakistan', NULL, NULL, NULL, '', NULL, NULL),
(8, 'dha house', 0, 0, 1, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Lahore', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '10', NULL, NULL, NULL, NULL),
(9, 'DHA KARACHI', 0, 0, 0, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Karachi', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '5', NULL, NULL, NULL, NULL),
(10, 'Dora House', 0, 0, 0, 1, 1, 'Sale', 'Upper-Portions', 'Beautiful', 10000000, '1', 'DHA Phase 4, Lahore, Punjab, Pakistan', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'dha house', 0, 0, 1, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Lahore', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '10', NULL, NULL, NULL, NULL),
(12, 'DHA KARACHI', 0, 0, 1, 1, 1, 'Sale', 'Houses', 'nmf v fnmv hjf vajs vjasdvasvj jasvbahjvb', 123456, 'Karachi', 'DHA Phase 3, Lahore, Punjab, Pakistan', 'Marla', '5', NULL, NULL, NULL, NULL),
(13, 'mdvbsdhbdsh', 0, 0, 1, 0, 1, 'Sale', 'Upper-Portions', 'Beautiful', 10000000, '1', 'DHA Phase 4, Lahore, Punjab, Pakistan', NULL, NULL, NULL, NULL, NULL, '2017-12-18 05:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(11) DEFAULT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `address`, `city`, `password`, `zip`, `path`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Afif Rao', '923359132', 'afif.rao.9@gmail.com', 'johar town, faisal town', 'Lahore', '$2y$10$Tvge7FxXmJvM/wRbtgHyCOOntZE9TDbKDXpwqB53xkJS3owLssIX.', 64000, 'Afif Rao\\16426229_827186630756054_5462652350921436797_n.jpg', 'eiVf3pCZ9Qdfm3612PgHLfgkq23L4dGz3IHq2wUbNCu5M5I0YCkzcXJQvPFZ', '2017-12-14 02:57:53', '2017-12-21 04:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogphotos`
--
ALTER TABLE `blogphotos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_number_unique` (`number`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blogphotos`
--
ALTER TABLE `blogphotos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
