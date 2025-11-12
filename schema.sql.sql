-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2025 at 10:00 AM
-- Server version: 8.0.41
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `angkatan` varchar(10) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `prodi`, `angkatan`, `foto`, `status`) VALUES
(1, 'Mangtra', '123456', 'Sistem Informasi', '2024', 'mangtra.jpg', 'aktif'),
(2, 'Adit Santoso', '123456', 'Informatika', '2023', 'adit.jpg', 'Aktif'),
(3, 'Anggun Aminah', '123457', 'Sistem Informasi', '2022', 'anggun.jpg', 'Aktif'),
(4, 'Agus Suputra', '123458', 'Informatika', '2023', 'agus.jpg', 'Cuti'),
(5, 'agus suputra', '123458', 'informatika', '2023', '89f346ff-d32b-4f80-a1e0-4bb2ad236759.jpg', 'Cuti'),
(6, 'Ucup Mahendra', '123458', 'informatika', '2023', '89f346ff-d32b-4f80-a1e0-4bb2ad236759.jpg', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
