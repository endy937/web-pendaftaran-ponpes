-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 18.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesantren`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pen_santri`
--

CREATE TABLE `pen_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pen_santri`
--

INSERT INTO `pen_santri` (`id`, `nama`, `ttl`, `tgl_masuk`, `jk`, `alamat`) VALUES
(1, 'Endi Rahman Muhamad', 'Ciamis, 01 Agustus 2002', '0000-00-00', 'perempuan', 'Desa. Harumandala Kec. Cigugur Kab. Pangandaran');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pen_santri`
--
ALTER TABLE `pen_santri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pen_santri`
--
ALTER TABLE `pen_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
