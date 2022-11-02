-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 10.56
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playlist`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_playlist`
--

CREATE TABLE `daftar_playlist` (
  `id` int(8) NOT NULL,
  `nama_playlist` varchar(255) NOT NULL,
  `nama_lagu` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `gendre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_playlist`
--

INSERT INTO `daftar_playlist` (`id`, `nama_playlist`, `nama_lagu`, `artist`, `gendre`) VALUES
(3, 'a', 'a', 'a', 'RAP'),
(4, 'b', 'b', 'b', 'JAZZ'),
(5, '', '', '', 'JAZZ'),
(6, 'a', 'b', 'c', 'JAZZ'),
(7, '123', '123', '123', 'LAINNYA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'friska', '123'),
(2, 'fris', '$2y$10$u5LhsPt6FuDrDLht2G6PPuWJ.3pvUcTEoxvK36uzTEKuEvY5R6nVu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_playlist`
--
ALTER TABLE `daftar_playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_playlist`
--
ALTER TABLE `daftar_playlist`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
