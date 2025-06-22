-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2025 at 03:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basea`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_a`
--

CREATE TABLE `tb_a` (
  `id_a` int(12) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_a`
--

INSERT INTO `tb_a` (`id_a`, `nama`, `gambar`) VALUES
(3, 'RIZKIE aja 1', 'luaran 2.png'),
(4, 'ganggang', 'IMG 311304.jpg'),
(5, 'gambar', 'ut.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sesi`
--

CREATE TABLE `tb_sesi` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sesi`
--

INSERT INTO `tb_sesi` (`nama`, `email`, `password`) VALUES
('abiem', 'abiemlord@gmail.com', '123'),
('nizell', 'nizelnaga@yahoo.com', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_a`
--
ALTER TABLE `tb_a`
  ADD PRIMARY KEY (`id_a`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_a`
--
ALTER TABLE `tb_a`
  MODIFY `id_a` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
