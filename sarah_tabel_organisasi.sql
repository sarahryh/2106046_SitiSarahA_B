-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2106046_sitisarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `sarah_tabel_organisasi`
--

CREATE TABLE `sarah_tabel_organisasi` (
  `id_daftar` int(11) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tanggal_pendirian` datetime NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `nama_pendiri` varchar(50) NOT NULL,
  `jumlah_divisi` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sarah_tabel_organisasi`
--

INSERT INTO `sarah_tabel_organisasi` (`id_daftar`, `nama_organisasi`, `alamat`, `tanggal_pendirian`, `tujuan`, `nama_pendiri`, `jumlah_divisi`) VALUES
(2, 'HimaITG', 'Garut', '2023-11-24 00:00:00', 'Mencapai tujuan bersama', 'Annashriyah', 8),
(5, 'HimaITG', 'Garut', '2023-11-24 00:00:00', 'Mencapai tujuan bersama', 'Percobaan', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sarah_tabel_organisasi`
--
ALTER TABLE `sarah_tabel_organisasi`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sarah_tabel_organisasi`
--
ALTER TABLE `sarah_tabel_organisasi`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
