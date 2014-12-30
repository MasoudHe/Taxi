-- phpMyAdmin SQL Dump
-- version 4.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2014 at 12:49 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_info`
--

CREATE TABLE IF NOT EXISTS `cars_info` (
  `id` int(10) unsigned NOT NULL,
  `car_name_id` int(10) unsigned NOT NULL,
  `car_usage_id` int(10) unsigned NOT NULL,
  `car_type_id` int(10) unsigned NOT NULL,
  `car_model` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `car_pelak_1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `car_pelak_2` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `car_pelak_3` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `car_pelak_4` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `car_fuel_id` int(10) unsigned NOT NULL,
  `car_motor_number` text COLLATE utf8_unicode_ci NOT NULL,
  `car_frame_number` text COLLATE utf8_unicode_ci NOT NULL,
  `car_body_color` int(10) unsigned NOT NULL,
  `car_roof_color` int(10) unsigned NOT NULL,
  `car_strip_color` int(10) unsigned NOT NULL,
  `car_logo_id` int(10) unsigned NOT NULL,
  `car_vin_number` int(11) NOT NULL,
  `car_fuelcard_number` text COLLATE utf8_unicode_ci NOT NULL,
  `car_fueling_type` int(10) unsigned NOT NULL,
  `car_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_logo_sys`
--

CREATE TABLE IF NOT EXISTS `car_logo_sys` (
  `car_logo_id` int(10) unsigned NOT NULL,
  `car_logo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_name_sys`
--

CREATE TABLE IF NOT EXISTS `car_name_sys` (
  `car_name_id` int(10) unsigned NOT NULL,
  `car_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `car_motor_cylinder` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `car_differential` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `car_capacity` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_type_sys`
--

CREATE TABLE IF NOT EXISTS `car_type_sys` (
  `car_type_id` int(10) unsigned NOT NULL,
  `car_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_usage_sys`
--

CREATE TABLE IF NOT EXISTS `car_usage_sys` (
  `car_usage_id` int(10) unsigned NOT NULL,
  `car_usage` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `color_sys`
--

CREATE TABLE IF NOT EXISTS `color_sys` (
  `color_id` int(10) unsigned NOT NULL,
  `color` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fueling_type_sys`
--

CREATE TABLE IF NOT EXISTS `fueling_type_sys` (
  `fueling_type_id` int(10) unsigned NOT NULL,
  `fueling` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fuel_type_sys`
--

CREATE TABLE IF NOT EXISTS `fuel_type_sys` (
  `fuel_id` int(10) unsigned NOT NULL,
  `fuel` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_09_171351_create_users_table', 1),
('2014_12_23_165741_create_car_info_table', 1),
('2014_12_23_171107_create_car_logo_sys_table', 1),
('2014_12_23_171309_create_car_name_sys_table', 1),
('2014_12_23_171600_create_type_sys_table', 1),
('2014_12_23_171838_create_color_sys_table', 1),
('2014_12_23_171951_create_fueling_type_sys_table', 1),
('2014_12_23_172043_create_fuel_type_sys_table', 1),
('2014_12_23_172859_create_car_usage_sys_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_info`
--
ALTER TABLE `cars_info`
  ADD PRIMARY KEY (`id`), ADD KEY `car_name_id` (`car_name_id`), ADD KEY `car_logo_id` (`car_logo_id`), ADD KEY `car_type_id` (`car_type_id`), ADD KEY `car_usage_id` (`car_usage_id`), ADD KEY `car_fuel_id` (`car_fuel_id`), ADD KEY `car_fueling_type` (`car_fueling_type`), ADD KEY `car_body_color` (`car_body_color`), ADD KEY `car_roof_color` (`car_roof_color`), ADD KEY `car_strip_color` (`car_strip_color`);

--
-- Indexes for table `car_logo_sys`
--
ALTER TABLE `car_logo_sys`
  ADD PRIMARY KEY (`car_logo_id`), ADD KEY `car_logo_id` (`car_logo_id`);

--
-- Indexes for table `car_name_sys`
--
ALTER TABLE `car_name_sys`
  ADD PRIMARY KEY (`car_name_id`), ADD KEY `car_name_id` (`car_name_id`);

--
-- Indexes for table `car_type_sys`
--
ALTER TABLE `car_type_sys`
  ADD PRIMARY KEY (`car_type_id`), ADD KEY `car_type_id` (`car_type_id`);

--
-- Indexes for table `car_usage_sys`
--
ALTER TABLE `car_usage_sys`
  ADD PRIMARY KEY (`car_usage_id`), ADD KEY `car_usage_id` (`car_usage_id`);

--
-- Indexes for table `color_sys`
--
ALTER TABLE `color_sys`
  ADD PRIMARY KEY (`color_id`), ADD KEY `color_id` (`color_id`);

--
-- Indexes for table `fueling_type_sys`
--
ALTER TABLE `fueling_type_sys`
  ADD PRIMARY KEY (`fueling_type_id`), ADD KEY `fueling_type_id` (`fueling_type_id`);

--
-- Indexes for table `fuel_type_sys`
--
ALTER TABLE `fuel_type_sys`
  ADD PRIMARY KEY (`fuel_id`), ADD KEY `fuel_id` (`fuel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_info`
--
ALTER TABLE `cars_info`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_logo_sys`
--
ALTER TABLE `car_logo_sys`
  MODIFY `car_logo_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_name_sys`
--
ALTER TABLE `car_name_sys`
  MODIFY `car_name_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_type_sys`
--
ALTER TABLE `car_type_sys`
  MODIFY `car_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_usage_sys`
--
ALTER TABLE `car_usage_sys`
  MODIFY `car_usage_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `color_sys`
--
ALTER TABLE `color_sys`
  MODIFY `color_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fueling_type_sys`
--
ALTER TABLE `fueling_type_sys`
  MODIFY `fueling_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fuel_type_sys`
--
ALTER TABLE `fuel_type_sys`
  MODIFY `fuel_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars_info`
--
ALTER TABLE `cars_info`
ADD CONSTRAINT `cars_info_ibfk_1` FOREIGN KEY (`car_name_id`) REFERENCES `car_name_sys` (`car_name_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_2` FOREIGN KEY (`car_logo_id`) REFERENCES `car_logo_sys` (`car_logo_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_3` FOREIGN KEY (`car_type_id`) REFERENCES `car_type_sys` (`car_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_4` FOREIGN KEY (`car_usage_id`) REFERENCES `car_usage_sys` (`car_usage_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_5` FOREIGN KEY (`car_fuel_id`) REFERENCES `fuel_type_sys` (`fuel_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_6` FOREIGN KEY (`car_fueling_type`) REFERENCES `fueling_type_sys` (`fueling_type_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_7` FOREIGN KEY (`car_body_color`) REFERENCES `color_sys` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_8` FOREIGN KEY (`car_roof_color`) REFERENCES `color_sys` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `cars_info_ibfk_9` FOREIGN KEY (`car_strip_color`) REFERENCES `color_sys` (`color_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
