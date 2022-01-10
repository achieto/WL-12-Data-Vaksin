-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2021 pada 09.24
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaksin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_vaksin`
--

CREATE TABLE `data_vaksin` (
  `no_batch` int(11) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` int(3) NOT NULL,
  `dosis` int(11) NOT NULL,
  `jenis_vaksin` varchar(50) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_vaksin`
--

INSERT INTO `data_vaksin` (`no_batch`, `nik`, `nama`, `jenis_kelamin`, `usia`, `dosis`, `jenis_vaksin`, `update_at`) VALUES
(1, 3, 'a', 'Laki-laki', 2, 0, 'a', '2021-11-02 21:25:43'),
(2, 1, 'd', 'Perempuan', 6, 0, 'z', '2021-11-02 21:23:20'),
(3, 3, 'b', 'Laki-laki', 3, 0, 'b', '2021-11-02 21:26:12'),
(5, 7, 'pril', 'Perempuan', 8, 0, 'Ilmu Komputer', '2021-11-02 21:23:20'),
(11, 14, 'dwi', 'Laki-laki', 21, 0, '', '2021-11-02 21:23:20'),
(15, 2, 'bb', 'Perempuan', 99, 0, 'dk', '2021-11-02 21:23:20'),
(12345678, 1234567890098765, 'princess', 'perempuan', 20, 0, '', '2021-11-02 21:23:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `admin` varchar(35) NOT NULL,
  `role` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `admin`, `role`) VALUES
('admin', 'admin123', 'aprila', 'AdminModel', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginsuper`
--

CREATE TABLE `loginsuper` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `loginsuper`
--

INSERT INTO `loginsuper` (`username`, `password`, `nama`) VALUES
('superadmin', 'super123', 'aprila');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(20, '2021-11-14-103519', 'App\\Database\\Migrations\\Vaksinasi', 'default', 'App', 1639636628, 1),
(21, '2021-11-18-060135', 'App\\Database\\Migrations\\Login', 'default', 'App', 1639636628, 1),
(22, '2021-11-18-060207', 'App\\Database\\Migrations\\SuperAdmin', 'default', 'App', 1639636628, 1),
(23, '2021-12-15-134431', 'App\\Database\\Migrations\\ValidatorAdmin', 'default', 'App', 1639636628, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `vaksinasi`
--

CREATE TABLE `vaksinasi` (
  `no_batch` varchar(11) NOT NULL,
  `wilayah` varchar(1) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `usia` int(3) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `dosis` int(1) NOT NULL,
  `jenis_vaksin` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `validatoradmin`
--

CREATE TABLE `validatoradmin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `admin` varchar(35) NOT NULL,
  `role` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_vaksin`
--
ALTER TABLE `data_vaksin`
  ADD PRIMARY KEY (`no_batch`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `loginsuper`
--
ALTER TABLE `loginsuper`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vaksinasi`
--
ALTER TABLE `vaksinasi`
  ADD PRIMARY KEY (`no_batch`);

--
-- Indeks untuk tabel `validatoradmin`
--
ALTER TABLE `validatoradmin`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
