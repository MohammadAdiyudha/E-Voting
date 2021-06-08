-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2021 at 05:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evoting`
--
CREATE DATABASE IF NOT EXISTS `evoting` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `evoting`;

-- --------------------------------------------------------

--
-- Table structure for table `datapemilih`
--

CREATE TABLE `datapemilih` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(50) NOT NULL,
  `pilihan` varchar(50) NOT NULL,
  `waktupilih` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapemilih`
--

INSERT INTO `datapemilih` (`id`, `nama`, `nik`, `pilihan`, `waktupilih`) VALUES
(5, 'sasas', 1212, 'Suthanos', '2021-06-08 19:21:31'),
(6, 'qwqwqw', 121212, 'Suthanos', '2021-06-08 19:40:47'),
(8, 'sasas', 211212, '', NULL),
(18, 'tika', 97777, 'Tony Sutorak', '2021-06-08 19:23:32'),
(19, 'ayam', 125125, 'Tony Sutorak', '2021-06-08 22:11:17'),
(20, 'adiyudha', 123456789, '', NULL),
(21, 'duoe', 3333, 'Tony Sutorak', '2021-06-08 21:14:21'),
(23, 'cobaan', 9999, 'Tony Sutorak', '2021-06-08 21:13:38'),
(24, 'coba lagi', 129481925, '', NULL),
(25, 'yudha', 18102238, 'Hulak', '2021-06-08 21:53:45'),
(29, 'cobalagi', 10101010, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`id_admin`, `username`, `password`) VALUES
(1, 'satriagalangs', '12345'),
(2, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapemilih`
--
ALTER TABLE `datapemilih`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapemilih`
--
ALTER TABLE `datapemilih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
