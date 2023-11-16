-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2023 pada 15.59
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa_pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `stok_barang` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `stok_barang`, `gambar`, `created_at`) VALUES
(29, 'Ornamen natal', 75000, 2, '2023-10-25 Ornamen-natal.jpeg', '2023-10-25 09:39:22'),
(30, 'Pohon Natal', 23000, 4, '2023-11-16 Pohon-Natal.jpeg', '2023-11-16 13:40:13'),
(31, 'Bantal', 15000, 13, '2023-11-16 Bantal.jpeg', '2023-11-16 13:40:54'),
(32, 'Gelas', 34000, 5, '2023-11-16 Gelas.jpg', '2023-11-16 13:41:18'),
(33, 'Lilin', 15000, 18, '2023-11-16 Lilin.jpg', '2023-11-16 13:41:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'mahasiswa', '$2y$10$2vyg5C5Eo9f50rUpacfDbuAX8ZpwTILyjOW38Kh5CyDwe9aPK7Oaq', 0),
(2, 'admin', '$2y$10$pLQ3Pgk1NpVpUtM50fzO4.39SQIY6W0coCqf/4CZTECL5QMqFDowS', 1),
(12, 'lisa', '$2y$10$/T6nnBQkwnQTIPk1rGib4upC4pJNfoxcDvr4uT/KkwahKg81OtFj6', 0),
(13, 'syalom cantik', '$2y$10$q7O3ApuT8hOSVxv8mv.3Vub3O3ttZlaMFJdVjRxU3krgxXfITJ/aO', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
