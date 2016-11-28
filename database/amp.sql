-- phpMyAdmin SQL Dump
-- version 4.7.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 12:17 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amp`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '---',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `code`, `name`, `location_id`, `created_at`, `updated_at`, `asset_type_id`, `site_id`) VALUES
(17, 'ITK-001', 'INTAKE PUMP 1', '9', '2016-11-10 17:16:54', '2016-11-15 17:50:44', 2, 1),
(18, 'ITK-002', 'INTAKE PUMP 2', '9', '2016-11-10 17:39:25', '2016-11-10 17:39:25', 2, 1),
(19, 'ITK-003', 'INTAKE PUMP 3', '9', '2016-11-10 17:41:35', '2016-11-10 17:41:35', 2, 1),
(20, 'ITK-004', 'INTAKE PUMP 4', '9', '2016-11-10 17:44:22', '2016-11-10 17:44:22', 2, 1),
(21, 'ITK-005', 'Genset Intake', '9', '2016-11-10 17:45:48', '2016-11-10 17:45:48', 2, 1),
(22, 'ITK-006', 'TRANSFOMATOR', '9', '2016-11-10 17:47:15', '2016-11-10 17:47:15', 2, 1),
(23, 'WTP-001', 'TWPS A', '10', '2016-11-10 18:40:43', '2016-11-10 18:40:43', 2, 1),
(24, 'WTP-002', 'TWPS B', '10', '2016-11-10 18:42:33', '2016-11-10 18:42:33', 2, 1),
(25, 'WTP-003', 'TWPS C', '10', '2016-11-10 18:44:41', '2016-11-10 18:44:41', 2, 1),
(26, 'WTP-004', 'TWPS D', '10', '2016-11-10 18:46:37', '2016-11-10 18:46:37', 2, 1),
(27, 'WTP-005', 'TWPS E', '10', '2016-11-10 18:48:08', '2016-11-10 18:48:08', 2, 1),
(28, 'WTP-006', 'TWPS F', '10', '2016-11-10 18:49:55', '2016-11-10 18:49:55', 2, 1),
(29, 'WTP-007', 'Genset WTP', '10', '2016-11-10 18:51:19', '2016-11-10 18:51:19', 2, 1),
(30, 'WTP-008', 'TRANSFOMATOR', '10', '2016-11-10 18:53:18', '2016-11-10 18:53:18', 2, 1),
(37, '324234234', 'asdfasdfasdf', '20', '2016-11-27 21:18:18', '2016-11-27 21:18:18', 4, 1),
(38, 'SCADA011', 'TEST SCADA', '8', '2016-11-27 21:24:54', '2016-11-27 21:24:54', 7, 1),
(39, 'np001', 'TEST NETWORK PIPE', '35', '2016-11-27 21:28:57', '2016-11-27 21:28:57', 6, 1),
(40, 'xxxxx', 'xxxx', '36', '2016-11-27 21:37:01', '2016-11-27 21:37:01', 6, 1),
(41, 'te3', 'te2', '35', '2016-11-27 21:39:37', '2016-11-27 21:39:37', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `asset_bills`
--

CREATE TABLE `asset_bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `tariff_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `water_usage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bill_amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_civil_details`
--

CREATE TABLE `asset_civil_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `specification` text COLLATE utf8_unicode_ci,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `construction_date` date DEFAULT NULL,
  `function` text COLLATE utf8_unicode_ci,
  `asset_performance_id` int(11) NOT NULL DEFAULT '0',
  `performance_detail` text COLLATE utf8_unicode_ci,
  `asset_condition_id` int(11) NOT NULL DEFAULT '0',
  `condition_detail` text COLLATE utf8_unicode_ci,
  `reservoir_capacity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_conditions`
--

CREATE TABLE `asset_conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_conditions`
--

INSERT INTO `asset_conditions` (`id`, `name`, `description`, `site_id`) VALUES
(1, 'New', '', 2),
(2, 'Perfect', '', 2),
(3, 'Minor Defect', NULL, 2),
(4, 'Backlog Maintenance', NULL, 2),
(5, 'Requires Major Renewal', NULL, 2),
(6, 'Almost Unserviceable', NULL, 2),
(7, 'DIST - New (3 - 8 Months)', NULL, 2),
(8, 'DIST - Good (9 Months - 3 Years)', NULL, 2),
(9, 'DIST - Average (3 - 10 Years)', NULL, 2),
(10, 'DIST - Minor (10 - 25 Years)', NULL, 2),
(11, 'DIST - Require Renewal ( > 25 years)', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `asset_details`
--

CREATE TABLE `asset_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(11) NOT NULL,
  `specification` text COLLATE utf8_unicode_ci,
  `serial_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `function` text COLLATE utf8_unicode_ci,
  `asset_condition_id` int(11) NOT NULL DEFAULT '0',
  `asset_performance_id` int(11) NOT NULL DEFAULT '0',
  `install_date` date DEFAULT NULL,
  `construction_date` date DEFAULT NULL,
  `condition_detail` text COLLATE utf8_unicode_ci,
  `performance_detail` text COLLATE utf8_unicode_ci,
  `reservoir_capacity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operational_date` date DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `number_of_pipe` double NOT NULL DEFAULT '0',
  `number_of_valve` double NOT NULL DEFAULT '0',
  `number_of_pipe_bridge` double NOT NULL DEFAULT '0',
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length_per_pipe_diameter` double NOT NULL DEFAULT '0',
  `meter_digit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_details`
--

INSERT INTO `asset_details` (`id`, `asset_id`, `specification`, `serial_number`, `function`, `asset_condition_id`, `asset_performance_id`, `install_date`, `construction_date`, `condition_detail`, `performance_detail`, `reservoir_capacity`, `contractor`, `contract`, `operational_date`, `description`, `number_of_pipe`, `number_of_valve`, `number_of_pipe_bridge`, `location`, `location_2`, `length_per_pipe_diameter`, `meter_digit`) VALUES
(12, 17, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 2, 8, '2011-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(13, 18, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 2, 8, '2011-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(14, 19, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 2, 8, '2012-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(15, 20, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 2, 8, '2012-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian. Sedang menunggu jadwal ', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(16, 21, 'Generator Set. 1000kVA, 400/230V, 1500 rpm', 'FGWPST01CP0A02269', 'Pembangkit listrik untuk backup power pada saat PLN mati', 1, 9, '2011-01-01', NULL, 'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman', 'Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis ', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(17, 22, 'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 1000 kVA, Cooling type ONAN (mineral Oil)', '', 'Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV', 1, 9, '2011-01-01', NULL, 'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual', 'Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(18, 23, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-489', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2011-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(19, 24, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-490', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2011-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(20, 25, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-491', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2011-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(21, 26, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-492', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2012-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(22, 27, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-493', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2012-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(23, 28, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-494', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 2, 8, '2012-01-01', NULL, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.', 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(24, 29, 'Generator Set. 2000kVA, 400/230V, 1500 rpm', 'FGWPST03PROA01087', 'Pembangkit listrik untuk backup power pada saat PLN mati', 1, 9, '2011-01-01', NULL, 'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman', 'Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis berkala sesuai rekomendasi manufaktur', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(25, 30, 'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 2000 kVA, Cooling type ONAN (mineral Oil)', '', 'Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV', 1, 9, '2011-01-01', NULL, 'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual', 'Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor', NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(26, 37, 'asdf', NULL, 'asdf', 1, 8, NULL, '2016-11-16', 'asdf', 'asdf', 'asdf', 'asdfasdf', NULL, NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL),
(27, 39, NULL, NULL, NULL, 1, 0, NULL, NULL, 'TEST', NULL, NULL, 'TEST', 'TEST', '2016-11-30', 'TEST', 123, 34, 345, 'TEST', 'TEST', 123, NULL),
(28, 40, NULL, NULL, NULL, 1, 0, NULL, NULL, 'xxx', NULL, NULL, 'xxx', 'xxx', '2016-11-23', 'xxx', 123, 123, 234, 'xx', 'xxx', 123, NULL),
(29, 41, NULL, NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, 0, 0, 0, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `asset_images`
--

CREATE TABLE `asset_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_images`
--

INSERT INTO `asset_images` (`id`, `asset_id`, `title`, `path`) VALUES
(5, 1, 'under the sea.jpg', 'under the sea.jpg'),
(7, 2, 'about-header.jpg', 'about-header.jpg'),
(9, 2, 'bg-section-sight.png', 'bg-section-sight.png'),
(10, 2, 'head-sample-03.jpg', 'head-sample-03.jpg'),
(11, 3, 'head-sample-01.jpg', 'head-sample-01.jpg'),
(12, 3, 'head-sample-02.jpg', 'head-sample-02.jpg'),
(20, 12, 'banner-ticket.png', 'banner-ticket.png'),
(21, 16, 'banner-ticket.png', 'banner-ticket.png');

-- --------------------------------------------------------

--
-- Table structure for table `asset_mechanical_details`
--

CREATE TABLE `asset_mechanical_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `specification` text COLLATE utf8_unicode_ci,
  `serial_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `install_date` date DEFAULT NULL,
  `function` text COLLATE utf8_unicode_ci,
  `asset_performance_id` int(11) NOT NULL DEFAULT '0',
  `performance_detail` text COLLATE utf8_unicode_ci,
  `asset_condition_id` int(11) NOT NULL DEFAULT '0',
  `condition_detail` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_mechanical_details`
--

INSERT INTO `asset_mechanical_details` (`id`, `asset_id`, `specification`, `serial_number`, `install_date`, `function`, `asset_performance_id`, `performance_detail`, `asset_condition_id`, `condition_detail`) VALUES
(1, 17, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', '2011-01-01', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(2, 18, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', '2011-01-01', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(3, 19, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', '2012-01-01', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(4, 20, 'Submersible Pump, 186 kW 400V 50Hz, Qmax = 330 LPS at 45 m header pipe', 'S2.100.300.1750.4.72M.S.441.GND', '2012-01-01', 'Pompa Untuk Mentransfer Air Baku dari Intake ke WTP', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian. Sedang menunggu jadwal ', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(5, 21, 'Generator Set. 1000kVA, 400/230V, 1500 rpm', 'FGWPST01CP0A02269', '2011-01-01', 'Pembangkit listrik untuk backup power pada saat PLN mati', 9, 'Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis ', 1, 'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman'),
(6, 22, 'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 1000 kVA, Cooling type ONAN (mineral Oil)', '', '2011-01-01', 'Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV', 9, 'Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor', 1, 'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual'),
(7, 23, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-489', '2011-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(8, 24, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-490', '2011-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan ', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(9, 25, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-491', '2011-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(10, 26, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-492', '2012-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(11, 27, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-493', '2012-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(12, 28, 'Horizontal Split Pump, 250 kW, 1490 rpm, 860 m³/h, Head 70 m', 'Grundfos HS 300-200-494', '2012-01-01', 'Pompa Untuk Distribusi air terolah ke Pelanggan', 8, 'Pompa masih dapat berfungsi dengan baik walaupun kinerjanya sedikit menurun karena umur pakainya, di operasikan secara bergantian dan juga di lakukan perawatan overhoul secara berkala sesuai dengan rekomendasi manufaktur.', 2, 'Kondisi pompa masih cukup bagus, semua dapat di operasikan dan terpelihara dengan baik. Secara visual belum teradapat tanda tanda kerusakan.'),
(13, 29, 'Generator Set. 2000kVA, 400/230V, 1500 rpm', 'FGWPST03PROA01087', '2011-01-01', 'Pembangkit listrik untuk backup power pada saat PLN mati', 9, 'Mesin Genset masih berfungsi dengan baik sebagai backup listrik pada saat PLN mati. Dilakukan pemanasan berkala satu kali tiap minggunnya  dan juga dilakukan servis berkala sesuai rekomendasi manufaktur', 1, 'Kondisi Genset sangat baik, selalu dilakukan perawatan kebersihan bagian dalam dan luar engine serta memastikan kondisi bahan bakar pada level aman'),
(14, 30, 'Transformartor Step Down 20 kV to 0,4 kV, Kapasitas 2000 kVA, Cooling type ONAN (mineral Oil)', '', '2011-01-01', 'Merubah tegangan listrik dari PLN 20 kV, menjadi tegangan 0,4 kV', 9, 'Trafo Masih berfungsi dengan baik, selalu dilakukan perawatan berkala dan tes performace pertahun oleh vendor', 1, 'Kondisi trafo masih baik selalu rutin pengecekan dan tidak terdapat tanda kerusakan secara visual'),
(18, 38, 'TEST', 'TEST', '2016-11-16', 'TEST', 8, 'TEST', 1, 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `asset_network_pipe_details`
--

CREATE TABLE `asset_network_pipe_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `contract` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contractor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operational_date` date DEFAULT NULL,
  `length_per_pipe_diameter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `asset_condition_id` int(11) NOT NULL DEFAULT '0',
  `condition_detail` text COLLATE utf8_unicode_ci,
  `number_of_pipe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_valve` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_pipe_bridge` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_performances`
--

CREATE TABLE `asset_performances` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `site_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_performances`
--

INSERT INTO `asset_performances` (`id`, `name`, `description`, `site_id`) VALUES
(6, 'Fair', 'Working well', 1),
(7, 'Bad', '', 1),
(8, 'Perfect', '', 2),
(9, 'Good', '', 2),
(10, 'Average', '', 2),
(11, 'Bad', '', 2),
(12, 'Poor', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `asset_types`
--

CREATE TABLE `asset_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `class_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `asset_types`
--

INSERT INTO `asset_types` (`id`, `name`, `description`, `class_name`, `site_id`) VALUES
(2, 'M/E', 'Mechanical Engineering', 'MechanicalAsset', 2),
(3, 'Electrical', 'Electrical', 'ElectricalAsset', 2),
(4, 'Civil', '', 'CivilAsset', 2),
(6, 'Network Pipe', '', 'NetworkPipeAsset', 2),
(7, 'Scada', NULL, 'ScadaAsset', 2);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `site_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `image_path`, `parent_id`, `site_id`) VALUES
(8, 'Production', '', NULL, 0, 2),
(9, 'Intake', '', NULL, 8, 2),
(10, 'WTP', '', NULL, 8, 2),
(11, 'Distribution', NULL, NULL, 0, 2),
(12, 'Kanal Intake', NULL, NULL, 9, 2),
(13, 'Pumping Pit dan Electrical Room', NULL, NULL, 9, 2),
(14, 'Genset Buiding', NULL, NULL, 9, 2),
(15, 'Transformer House', NULL, NULL, 9, 2),
(16, 'Water hammer Chamber', NULL, NULL, 9, 2),
(17, 'Aerator', NULL, NULL, 10, 2),
(18, 'Grit Chamber', NULL, NULL, 10, 2),
(19, 'Mixing Chamber', NULL, NULL, 10, 2),
(20, 'Pulsatube', NULL, NULL, 10, 2),
(21, 'Aquazur V Filter', NULL, NULL, 10, 2),
(22, 'Filter Galery', NULL, NULL, 10, 2),
(23, 'Backwash Equipment Room', NULL, NULL, 10, 2),
(24, 'TWPS Building', NULL, NULL, 10, 2),
(25, 'Reservoir', NULL, NULL, 10, 2),
(26, 'SHT', NULL, NULL, 10, 2),
(27, 'Backwash Recycle Tank', NULL, NULL, 10, 2),
(28, 'Chemical Building', NULL, NULL, 10, 2),
(29, 'Chlorine Building', NULL, NULL, 10, 2),
(30, 'Electrical Room', NULL, NULL, 10, 2),
(31, 'Genset Buiding', NULL, NULL, 10, 2),
(32, 'Operation Building', NULL, NULL, 10, 2),
(33, 'Sludge Drying Bed', NULL, NULL, 10, 2),
(34, 'Water Hammer', NULL, NULL, 10, 2),
(35, 'Distribution', '', NULL, 11, 2),
(36, 'Booster Pump', '', NULL, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `location_has_asset_types`
--

CREATE TABLE `location_has_asset_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `asset_type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `location_has_asset_types`
--

INSERT INTO `location_has_asset_types` (`id`, `location_id`, `asset_type_id`) VALUES
(1, 11, 2),
(2, 11, 4),
(3, 11, 6),
(4, 8, 2),
(5, 8, 4),
(6, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` int(10) UNSIGNED NOT NULL,
  `asset_id` int(10) UNSIGNED NOT NULL,
  `maintenance_type_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `performance` text COLLATE utf8_unicode_ci,
  `maintenance_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maintenances`
--

INSERT INTO `maintenances` (`id`, `asset_id`, `maintenance_type_id`, `description`, `performance`, `maintenance_date`, `created_at`, `updated_at`) VALUES
(8, 17, 3, 'Penggantian Bellmut dan Mechanical seal garansi grundfos akibat pompa terjatuh saat Pengecekan. ', '', '2013-12-01', '2016-11-10 17:17:31', '2016-11-17 16:31:56'),
(11, 18, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2014-01-11', '2016-11-10 17:39:56', '2016-11-10 17:39:56'),
(12, 19, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2015-11-01', '2016-11-10 17:43:13', '2016-11-10 18:33:36'),
(13, 21, 1, 'Perbaikan kebocoran cover silinder head oleh vendor. ', '', '2014-06-01', '2016-11-10 17:46:09', '2016-11-10 18:34:18'),
(14, 22, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.', '', '2014-04-01', '2016-11-10 17:48:04', '2016-11-10 17:50:27'),
(15, 22, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.', '', '2015-04-01', '2016-11-10 17:48:25', '2016-11-10 17:50:39'),
(16, 17, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2014-12-01', '2016-11-10 17:51:21', '2016-11-10 17:51:21'),
(17, 21, 1, 'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, air filter, fuel filter dll.', '', '2015-05-01', '2016-11-10 18:34:31', '2016-11-10 18:34:31'),
(18, 21, 1, 'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, fuel filter dll.', '', '2016-10-01', '2016-11-10 18:35:17', '2016-11-10 18:35:17'),
(19, 22, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.', '', '2016-10-01', '2016-11-10 18:36:38', '2016-11-10 18:36:38'),
(20, 23, 1, 'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal, kopling kit dan juga perbaikan impeler yang sudah korosi.', '', '2014-05-01', '2016-11-10 18:41:16', '2016-11-10 18:41:16'),
(21, 23, 1, 'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal,  dan juga Penggantian Impeller karena impeler yang lama sudah mengalami kerusakan cukup berat', '', '2016-07-01', '2016-11-10 18:41:33', '2016-11-10 18:41:33'),
(22, 24, 1, 'Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime seperti bearing, seal, kopling kit, dll. Jul-16 Service berkala 2 tahunan dan penggantian part yang sudah masuk lifetime sepe', '', '2014-09-01', '2016-11-10 18:43:04', '2016-11-10 18:43:04'),
(23, 25, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2015-11-01', '2016-11-10 18:45:03', '2016-11-10 18:45:03'),
(24, 26, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2015-06-01', '2016-11-10 18:47:02', '2016-11-10 18:47:02'),
(25, 27, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2015-04-01', '2016-11-10 18:48:42', '2016-11-10 18:48:42'),
(26, 28, 1, 'Service Overhoul dan pengantian part 2 tahunan By Vendor', '', '2015-09-01', '2016-11-10 18:50:22', '2016-11-10 18:50:22'),
(27, 29, 1, 'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, air filter, fuel filter dll', '', '2015-06-01', '2016-11-10 18:51:49', '2016-11-10 18:51:49'),
(28, 29, 1, 'Servis berkala tahunan oleh vendor dengan penggantian oli, oil filter, fuel filter dll.', '', '2016-10-01', '2016-11-10 18:52:02', '2016-11-10 18:52:02'),
(29, 30, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor. ', '', '2014-04-01', '2016-11-10 18:53:46', '2016-11-10 18:54:25'),
(30, 30, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.', '', '2015-04-01', '2016-11-10 18:54:11', '2016-11-10 18:54:11'),
(31, 30, 1, 'Treatment oli trafo, cleaning dan pengujian transformator oleh vendor.', '', '2016-10-01', '2016-11-10 18:54:40', '2016-11-10 18:54:40'),
(32, 39, 1, 'asdfasdf', 'asdfasdf', '2016-11-25', '2016-11-27 21:30:22', '2016-11-27 21:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_images`
--

CREATE TABLE `maintenance_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `maintenance_id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maintenance_images`
--

INSERT INTO `maintenance_images` (`id`, `maintenance_id`, `file_name`, `description`) VALUES
(9, 8, 'blank.png', ''),
(10, 32, 'about-header.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_types`
--

CREATE TABLE `maintenance_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maintenance_types`
--

INSERT INTO `maintenance_types` (`id`, `title`, `description`) VALUES
(1, 'Preventive', NULL),
(2, 'Predictive', NULL),
(3, 'Corrective', NULL),
(4, 'Breakdown', NULL),
(5, 'DIST - Minor Tertiary', NULL),
(6, 'DIST - Major Tertiary', NULL),
(7, 'DIST - Intermediate Secondary', NULL),
(8, 'DIST - Heavy Primary', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `permission` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `display`, `link`, `parent_id`, `permission`, `icon_class`, `description`, `created_at`, `updated_at`, `order`) VALUES
(1, 'asset-management', 'Assets', '', 0, 'dashboard', 'fa fa-building', NULL, NULL, '2016-09-19 13:41:23', 200),
(2, 'setting', 'Settings', 'setting', 0, 'add.menu', 'fa fa-wrench', NULL, NULL, '2016-09-19 13:41:33', 900),
(4, 'menu-management', 'Menu Management', 'menu', 2, 'add.menu', NULL, NULL, NULL, NULL, 30),
(5, 'user-management', 'User Management', 'user', 2, 'add.user', NULL, NULL, NULL, NULL, 10),
(7, 'site-management', 'Site Management', 'site', 2, 'add.user', NULL, NULL, NULL, NULL, 20),
(8, 'dashboard', 'Dashboard', 'dashboard', 0, 'dashboard', 'icon-home', NULL, NULL, NULL, 100),
(13, 'asset.condition', 'Condition', 'asset-condition', 19, 'setting', '', NULL, '2016-09-19 14:07:20', '2016-11-13 14:31:22', 500),
(14, 'asset.performance', 'Performance', 'asset-performance', 19, 'setting', '', NULL, '2016-09-19 14:07:46', '2016-11-13 14:31:17', 600),
(15, 'asset-type', 'Asset Type', 'asset-type', 19, 'setting', '', NULL, '2016-09-19 18:13:35', '2016-11-13 14:31:15', 700),
(16, 'asset.location', 'Location', 'asset-location', 19, 'setting', '', NULL, '2016-09-20 16:14:44', '2016-11-13 14:31:13', 800),
(17, 'asset.add', 'Add Asset', 'asset/add', 1, 'asset.all.add', '', NULL, '2016-09-21 17:00:43', '2016-11-13 14:29:49', 150),
(18, 'asset.list', 'Asset List', 'asset', 1, 'asset.all', '', NULL, '2016-09-27 17:20:37', '2016-11-13 14:29:45', 100),
(19, 'asset.setting', 'Asset Settings', 'javascript:;', 2, 'setting', '', NULL, '2016-11-13 14:30:39', '2016-11-13 14:30:39', 50),
(20, 'asset.distribution.list', 'Distribution', 'asset-by-group/distribution', 1, 'asset.distribution', NULL, NULL, NULL, NULL, 100),
(21, 'asset.production.list', 'Production', 'asset-by-group/production', 1, 'asset.production', '', NULL, NULL, '2016-11-17 17:39:08', 50),
(22, 'asset.commercial.list', 'Commercial', 'asset-by-group/commercial', 1, 'asset.commercial', NULL, NULL, NULL, NULL, 300),
(23, 'asset.ict.list', 'ICT', 'asset-by-group/ict', 1, 'asset.ict', NULL, NULL, NULL, NULL, 400),
(24, 'asset.ga.list', 'GA', 'asset-by-group/ga', 1, 'asset.ga', NULL, NULL, NULL, NULL, 500);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_05_050820_create_sessions_table', 1),
('2016_09_05_082643_create_permission_tables', 2),
('2016_09_06_035234_create_menus_table', 3),
('2016_09_13_031658_create_sites_table', 4),
('2016_09_13_031624_create_user_sites_table', 5),
('2016_09_13_031240_create_assets_table', 6),
('2016_09_15_114940_add_order_on_menus', 7),
('2016_09_16_033136_create_user_has_sites_table', 8),
('2016_09_20_034715_create_asset_conditions_table', 9),
('2016_09_20_034732_create_asset_performances_table', 9),
('2016_09_20_071129_create_asset_types_table', 10),
('2016_09_21_044018_create_locations_table', 11),
('2016_09_21_074414_add_type_on_assets', 12),
('2016_09_22_040427_create_asset_details_table', 13),
('2016_09_24_060757_add_class_name_on_asset_types', 14),
('2016_09_26_074218_add_performance_and_condition_details_on_asset_details', 15),
('2016_09_27_004528_add_site_on_locations', 16),
('2016_09_27_004655_add_site_on_asset_types', 17),
('2016_09_27_010639_add_site_on_assets', 18),
('2016_09_27_035830_add_site_on_asset_performances', 19),
('2016_09_27_040320_add_site_on_asset_conditions', 20),
('2016_09_29_041121_create_user_details_table', 21),
('2016_10_19_050313_create_asset_images_table', 22),
('2016_10_31_043410_create_maintenance_types_table', 23),
('2016_10_31_060957_create_maintenances_table', 24),
('2016_11_02_032116_add_network_fields_on_asset_details', 25),
('2016_11_22_040223_add_network_asset_details', 26),
('2016_11_24_062114_create_asset_bills', 27),
('2016_11_24_062405_alter_asset_detail_for_commercial', 27),
('2016_11_28_010429_create_location_has_asset_types', 28),
('2016_11_28_021615_create_asset_mechanical_details', 29),
('2016_11_28_021640_create_asset_civil_details', 29),
('2016_11_28_021723_create_asset_network_pipe_details', 29);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'setting', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(2, 'add.menu', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(3, 'edit.menu', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(4, 'delete.menu', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(5, 'add.permission', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(6, 'edit.permission', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(7, 'delete.permission', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(8, 'add.user', NULL, NULL),
(9, 'dashboard', NULL, NULL),
(10, 'asset.add', NULL, NULL),
(11, 'asset.edit', NULL, NULL),
(12, 'asset.delete', NULL, NULL),
(13, 'maintenance', NULL, NULL),
(14, 'asset.distribution', NULL, NULL),
(15, 'asset.distribution.add', NULL, NULL),
(16, 'asset.distribution.edit', NULL, NULL),
(17, 'asset.distribution.delete', NULL, NULL),
(18, 'asset.production', NULL, NULL),
(19, 'asset.production.add', NULL, NULL),
(20, 'asset.production.edit', NULL, NULL),
(21, 'asset.production.delete', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'Administrator', '2016-09-12 12:17:16', '2016-09-12 12:17:16'),
(5, 'Tester', NULL, NULL),
(6, 'Production Team', NULL, NULL),
(7, 'Distribution Team', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(21, 4),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5),
(6, 5),
(7, 5),
(8, 5),
(9, 5),
(9, 6),
(18, 6),
(19, 6),
(20, 6),
(21, 6),
(9, 7),
(14, 7),
(15, 7),
(16, 7),
(18, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KaRwty58HuvIdvRxDzxuopZDTFnw3eV8TEwZYHqT', NULL, '172.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', 'YTo0OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovLzIwMi4xNTMuMjMyLjg2L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6InhlQ294YzczcGJCUmtleFBYNkc5SjNiRU5JYUlKZ0NuQ1dnTTFVWUYiO3M6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDgwMzA4MDcwO3M6MToiYyI7aToxNDgwMzA3OTMwO3M6MToibCI7czoxOiIwIjt9fQ==', 1480308070),
('LvqxGIPnIFBcEYxjMoxEbS9k1aeAtzEbRIZDU9Dv', 1, '192.168.10.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', 'YTo3OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NToiaHR0cDovL2Fzc2V0LmxvY2FsL2Fzc2V0LWJ5LWdyb3VwL2Zhdmljb24uaWNvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6Inc2SE9aZFcxc3M4S0xQOHRXdjhKUkZsdldaS2ViTjhnZDJYZXZqTVEiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODAzMDc0MzE7czoxOiJjIjtpOjE0ODAyOTQ2MzE7czoxOiJsIjtzOjE6IjAiO319', 1480307431),
('s6Q0EPOZCsj82CU8ZWAMsBsTiGVj3xLgzWpnVpJ5', 6, '172.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoicXlwSG4wdzd1RnJWRjBxM1ZsMzJXbDJGSVg3S1RaUUcyVTZjVGlheiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly8yMDIuMTUzLjIzMi44Ni9hc3NldC1ieS1ncm91cC9wcm9kdWN0aW9uL2FkZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODAzMDc5ODg7czoxOiJjIjtpOjE0ODAzMDc5MzA7czoxOiJsIjtzOjE6IjAiO319', 1480307988),
('Yf3QazwOTEDOzK1fjmfuQDC46aO5uqQn3BC1ueD2', 1, '172.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:50.0) Gecko/20100101 Firefox/50.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiQ2xJOWI1aDV0dlpROVE2U3puWWJpeTRCcVdTSzlCMHd3VUNCOFU2ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDk6Imh0dHA6Ly8yMDIuMTUzLjIzMi44Ni9hc3NldC1ieS1ncm91cC9kaXN0cmlidXRpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NToiZ1NpdGUiO2k6MjtzOjk6ImdTaXRlTmFtZSI7czozOiJBQVQiO3M6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDgwMzEwMjM5O3M6MToiYyI7aToxNDgwMzA3NzMwO3M6MToibCI7czoxOiIwIjt9fQ==', 1480310239),
('yovkWCEDmyDDG6zmCsva2jrd7EuKZZp8SBlOBOFH', 6, '172.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.99 Safari/537.36', 'YTo3OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MToiaHR0cDovLzIwMi4xNTMuMjMyLjg2L2Fzc2V0LWJ5LWdyb3VwL3Byb2R1Y3Rpb24vYWRkIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6Im5SWWh2VlVsR2xhYkxteWxJd3M1SE5qOVBKaW53bHNEOTZFS0RBUUwiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czo1OiJnU2l0ZSI7aToyO3M6OToiZ1NpdGVOYW1lIjtzOjM6IkFBVCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0ODAzMDgwNjc7czoxOiJjIjtpOjE0ODAzMDc5MzA7czoxOiJsIjtzOjE6IjAiO319', 1480308067);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`, `description`) VALUES
(1, 'AAI', 'Acuatico Air Indonesia'),
(2, 'AAT', 'Aetra Air Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pasha Mahardika', 'me@pashamahardika.com', '$2y$10$jHaudbpE7P4OryKpRHEDheyTO62AziKX17urZtNI2ZqrS9zeuvoQe', 'wDcmoejIGN1d0diCRWxSO9D48HFbLjYK6Ea7LrYYtZ0FAayu1Mp3fT4psQFD', '2016-09-12 12:17:16', '2016-11-27 18:26:14'),
(3, 'Addie Priwibowo', 'addie.priwibowo@acuatico.co.id', '$2y$10$HpKkHa9TdxbG6P2jp12AZu5AoUMl6sUXhA.rFWdHWMhHZYOcrlUU.', NULL, '2016-09-18 16:05:25', '2016-09-18 16:05:25'),
(4, 'Erikasandi', 'erik@erik.com', '$2y$10$w2m6FgGWCdTgTVIj3OuOQ.3Xf9bdKtWgHYYdU5fyHTdJD7oivsvkS', 'w3gmwZAbvY4Nn3Xu1aJbDNfl4HkpmojBwis98Ovw93XORdyz1udfYDGLojqx', '2016-09-26 12:23:39', '2016-09-26 12:24:44'),
(5, 'Aryo', 'aryo.kusumo@aat.co.id', '$2y$10$RXYpi2jAywFybYIVjdErnO3R.j7wTs//2dJjR7ubbrNVXC3SDZDRm', 'bciNN13AbDw5B2hcYAjaPGP0HOC2sn3mu0qEE0Korysj3lLRN5M5LLt2hyBq', '2016-11-16 13:58:24', '2016-11-17 16:50:44'),
(6, 'Asa Ardian', 'asa.ardian@acuatico.co.id', '$2y$10$y5AYobw.8SLPAS7pvst5UOJsYK.KrRwGI25r5IL9E7gyJVR94c4yW', '7CfiQWnfzRG8WvPC4o8MgtBxnPEg9LeYBOelArwJ8zSCvCdrn4TSM1KgBBIZ', '2016-11-22 00:34:05', '2016-11-27 21:41:10'),
(7, 'Yusli Meirino', 'yusli.meirino@aat.co.id', '$2y$10$XRGZamffT4ds3ox0jUheSuvX1ZTkizj00uiu4uGFpXHzzIljMuZLu', NULL, '2016-11-27 22:14:09', '2016-11-27 22:14:09'),
(8, 'Insan Kamil', 'insan.kamil@aat.co.id', '$2y$10$mrpw9/rUymWSa2CSv.QeGup8T64KQFcMBleCPwBqOcwWLntRa.kPa', NULL, '2016-11-27 22:14:32', '2016-11-27 22:14:32'),
(9, 'Wedar', 'wedar@aat.co.id', '$2y$10$TzItZXVLcYESu2p1Wk76v.8fZi2iCdbo4MQv5EhQ95lZI/rg0DzPa', NULL, '2016-11-27 22:14:52', '2016-11-27 22:14:52'),
(10, 'Hasanudin', 'hasannudin@aat.co.id', '$2y$10$tHtDxk3Zi1xvnydM6qCMCexc4TGnMO5JCrJQFf8x9Ru7u2l5IWTUe', NULL, '2016-11-27 22:15:09', '2016-11-27 22:15:09'),
(11, 'Ghofur Arifin', 'ghofar.arifin@aat.co.id', '$2y$10$DVbHzsbEVgIk4NOwbcfgxeGshm87kvh0SHUvarzWfcRpI2kRU97yS', NULL, '2016-11-27 22:15:32', '2016-11-27 22:15:32'),
(12, 'Andy Setiawan', 'andi.setyawan@aat.co.id', '$2y$10$0N/iZua.V3XRnzqEArwZhea3Qevjo9Udh75Cfx6UAAf57gNBjOF/2', NULL, '2016-11-27 22:15:49', '2016-11-27 22:15:49'),
(13, 'Febri Fernando', 'febri.fernando@aat.co.id', '$2y$10$SClW7QkYp81FkkLsOWzR8.aP1k7nxYpNh3ETQm44t6ZyjRp0nKNsa', NULL, '2016-11-27 22:16:09', '2016-11-27 22:16:09'),
(14, 'Azhar Effendi', 'azhar.effendi@aat.co.id', '$2y$10$3h/Am/ZsEEnrTLHcef31IeR2GSUjzOAYEDjtdbHTfB5oQh88X8UUi', NULL, '2016-11-27 22:16:24', '2016-11-27 22:16:24'),
(15, 'Anggara', 'anggara@aat.co.id', '$2y$10$MYfl4lCjsZoDrVk/C32/ZuWAAHd1uorVlTXTI6ep4RDPTaJDz8b9W', NULL, '2016-11-27 22:16:40', '2016-11-27 22:16:40'),
(16, 'Wahyudi', 'wahyudi.santoso@aat.co.id', '$2y$10$FTnPeKHus3OipjkHWzGhsuL58LGcS9PuNTnapUhcQ6I2KvUrCCAe6', NULL, '2016-11-27 22:17:00', '2016-11-27 22:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar_thumbnail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `avatar`, `avatar_thumbnail`, `mobile_phone`) VALUES
(1, 1, 'avatar-1.jpeg', NULL, '081808325756');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_has_roles`
--

INSERT INTO `user_has_roles` (`role_id`, `user_id`) VALUES
(4, 1),
(5, 1),
(4, 3),
(5, 3),
(4, 4),
(5, 4),
(6, 5),
(6, 6),
(7, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(7, 12),
(7, 13),
(7, 14),
(7, 15),
(7, 16);

-- --------------------------------------------------------

--
-- Table structure for table `user_has_sites`
--

CREATE TABLE `user_has_sites` (
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_has_sites`
--

INSERT INTO `user_has_sites` (`user_id`, `site_id`) VALUES
(1, 1),
(1, 2),
(3, 1),
(3, 2),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_sites`
--

CREATE TABLE `user_sites` (
  `user_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_sites`
--

INSERT INTO `user_sites` (`user_id`, `site_id`) VALUES
(1, 4),
(12, 4),
(13, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_bills`
--
ALTER TABLE `asset_bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_civil_details`
--
ALTER TABLE `asset_civil_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_civil_details_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `asset_conditions`
--
ALTER TABLE `asset_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_details`
--
ALTER TABLE `asset_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_images`
--
ALTER TABLE `asset_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_mechanical_details`
--
ALTER TABLE `asset_mechanical_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_mechanical_details_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `asset_network_pipe_details`
--
ALTER TABLE `asset_network_pipe_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_network_pipe_details_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `asset_performances`
--
ALTER TABLE `asset_performances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_types`
--
ALTER TABLE `asset_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_has_asset_types`
--
ALTER TABLE `location_has_asset_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_has_asset_types_location_id_foreign` (`location_id`),
  ADD KEY `location_has_asset_types_asset_type_id_foreign` (`asset_type_id`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenances_asset_id_foreign` (`asset_id`);

--
-- Indexes for table `maintenance_images`
--
ALTER TABLE `maintenance_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maintenance_images_maintenance_id_foreign` (`maintenance_id`);

--
-- Indexes for table `maintenance_types`
--
ALTER TABLE `maintenance_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_has_sites`
--
ALTER TABLE `user_has_sites`
  ADD PRIMARY KEY (`user_id`,`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `asset_bills`
--
ALTER TABLE `asset_bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asset_civil_details`
--
ALTER TABLE `asset_civil_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asset_conditions`
--
ALTER TABLE `asset_conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `asset_details`
--
ALTER TABLE `asset_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `asset_images`
--
ALTER TABLE `asset_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `asset_mechanical_details`
--
ALTER TABLE `asset_mechanical_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `asset_network_pipe_details`
--
ALTER TABLE `asset_network_pipe_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `asset_performances`
--
ALTER TABLE `asset_performances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `asset_types`
--
ALTER TABLE `asset_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `location_has_asset_types`
--
ALTER TABLE `location_has_asset_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `maintenance_images`
--
ALTER TABLE `maintenance_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `maintenance_types`
--
ALTER TABLE `maintenance_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `asset_civil_details`
--
ALTER TABLE `asset_civil_details`
  ADD CONSTRAINT `asset_civil_details_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `asset_mechanical_details`
--
ALTER TABLE `asset_mechanical_details`
  ADD CONSTRAINT `asset_mechanical_details_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `asset_network_pipe_details`
--
ALTER TABLE `asset_network_pipe_details`
  ADD CONSTRAINT `asset_network_pipe_details_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `location_has_asset_types`
--
ALTER TABLE `location_has_asset_types`
  ADD CONSTRAINT `location_has_asset_types_asset_type_id_foreign` FOREIGN KEY (`asset_type_id`) REFERENCES `asset_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `location_has_asset_types_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `maintenances_asset_id_foreign` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maintenance_images`
--
ALTER TABLE `maintenance_images`
  ADD CONSTRAINT `maintenance_images_maintenance_id_foreign` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenances` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
