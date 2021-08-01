-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 07:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boxes`
--

CREATE TABLE `boxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `box` int(11) DEFAULT NULL,
  `kondisi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ukuran` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boxes`
--

INSERT INTO `boxes` (`id`, `box`, `kondisi`, `created_at`, `updated_at`, `ukuran`, `harga`) VALUES
(1, 1, 1, '2021-06-20 10:45:42', '2021-06-20 16:12:50', 'Kecil', 3000000),
(2, 2, 2, '2021-06-20 10:48:59', '2021-06-27 08:40:20', 'Kecil', 3000000),
(3, 3, 1, '2021-06-20 10:48:59', '2021-06-20 16:16:35', 'Kecil', 3000000),
(4, 4, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Kecil', 3000000),
(5, 5, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Kecil', 3000000),
(6, 6, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Kecil', 3000000),
(7, 7, 2, '2021-06-20 10:48:59', '2021-06-28 13:47:47', 'Kecil', 3000000),
(8, 8, 2, '2021-06-20 10:48:59', '2021-06-21 16:39:06', 'Sedang', 6000000),
(9, 9, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Sedang', 6000000),
(10, 10, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Sedang', 6000000),
(11, 11, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Sedang', 6000000),
(12, 12, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Sedang', 6000000),
(13, 13, 3, '2021-06-20 10:48:59', '2021-06-20 10:48:59', 'Sedang', 6000000),
(14, 14, 3, '2021-06-20 10:57:08', '2021-06-20 10:57:08', 'Sedang', 6000000),
(15, 15, 2, '2021-06-20 10:57:08', '2021-06-30 16:41:03', 'Besar', 9000000),
(16, 16, 3, '2021-06-20 10:57:08', '2021-06-20 10:57:08', 'Besar', 9000000),
(17, 17, 3, '2021-06-20 10:57:08', '2021-06-20 10:57:08', 'Besar', 9000000),
(18, 18, 3, '2021-06-20 10:57:08', '2021-06-20 10:57:08', 'Besar', 9000000),
(19, 19, 3, '2021-06-20 10:57:08', '2021-06-20 10:57:08', 'Besar', 9000000),
(20, 20, 3, '2021-06-20 11:07:34', '2021-06-20 11:07:34', 'Besar', 9000000),
(21, 21, 3, '2021-06-20 11:07:34', '2021-06-20 11:07:34', 'Besar', 9000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxes`
--
ALTER TABLE `boxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
