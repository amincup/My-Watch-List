-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 12:16 PM
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
-- Database: `animedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `studio` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `judul`, `slug`, `genre`, `studio`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Violet Evergarden', 'violet-evergarden', 'Drama, Fantasy', 'Kyoto Animation', 'ayangku.jpg', '2023-08-06 01:38:59', '2023-08-06 01:38:59'),
(2, 'One Piece', 'one-piece', 'Action, Adventure, Fantasy', 'Toei Animation', 'ayangg.png', '2023-08-06 01:38:59', '2023-08-06 01:38:59'),
(3, 'Charlotte', 'charlotte', 'School, Super Power', 'P.A. Works', 'a', '2023-08-07 09:07:57', '2023-08-07 09:07:57'),
(4, 'Watashi ni Tenshi ga Maiorita!', 'watashi-ni-tenshi-ga-maiorita', 'Comedy, Girls Love', 'Doga Kobo', 'chibi.png', '2023-08-07 09:27:14', '2023-08-07 09:27:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
