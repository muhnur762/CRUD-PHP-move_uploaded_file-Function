-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2023 pada 02.24
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `kode_buku` char(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `penerbit` varchar(30) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `jml_halaman` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`kode_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `jml_halaman`, `harga`, `stok`, `cover`) VALUES
('01', 'Filosofi Teras         ', 'Henry Manampiring         ', 'Kompas         ', 2019, 347, 80000, 21, 'ID_FITE2018MTH12 (1).jpg'),
('02', 'Laut Berbicara      ', 'Leila S.Chudori      ', 'Kepustakaan Populer Gramedia  ', 2017, 379, 100000, 40, 'laut-bercerita (1).jpg'),
('03', 'Sebuah Seni untuk Bersikap Bodo Amat       ', 'Mark Manson           ', 'PT.Gramedia Widia           ', 2018, 246, 120000, 14, '2.jpg'),
('04', 'Bicara itu Ada Seninya      ', 'Hyang Oh Su      ', 'Bhuana Ilmu Populer      ', 2019, 240, 50000, 10, 'download (1).jpg'),
('05', 'Kamu Terlalu Banyak Bercanda', 'Marchella FP', 'PT. Kebahagiaan Itu Sederhana', 2019, 194, 80000, 5, '114261_f (1).jpg'),
('06', 'Bumi ', 'Tere Liye', 'Gramedia Pustaka Utama', 2014, 440, 120000, 9, 'download.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
