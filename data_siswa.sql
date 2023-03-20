-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Mar 2023 pada 13.53
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `nisn` int(8) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `kompetensi` varchar(191) NOT NULL,
  `alamat` varchar(191) NOT NULL,
  `telepon` varchar(191) NOT NULL,
  `hobi` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`nisn`, `nama`, `kompetensi`, `alamat`, `telepon`, `hobi`) VALUES
(2106817980, 'Dzaky Raditya Setyaji', 'SIJA', 'Jalan Borobudur 8', '08192919281', 'Main Mobel Lejen'),
(2106817981, 'Evandra Raditya Fauzan', 'SIJA', 'Jalan Mangga Manis', '081226747723', 'Bernyanyi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `nisn` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2106817982;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
