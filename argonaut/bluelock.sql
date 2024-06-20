-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 07.21
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
-- Database: `bluelock`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterbarang`
--

CREATE TABLE `masterbarang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masterbarang`
--

INSERT INTO `masterbarang` (`id`, `nama`, `harga`, `satuan`) VALUES
(1, 'Converse Chuck Taylor 70s High Black and White', '899000', 'Unit'),
(2, 'Nike Air Force 1 Low Triple White', '1599000', 'Unit'),
(3, 'Vans Sk8 Hi Classics BnW High', '899000', 'Unit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `masterpelanggan`
--

CREATE TABLE `masterpelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `masterpelanggan`
--

INSERT INTO `masterpelanggan` (`id`, `nama`, `alamat`, `kota`) VALUES
(1, 'Seishiro Nagi', 'Kitami', 'Hokkaido');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mastersupplier`
--

CREATE TABLE `mastersupplier` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mastersupplier`
--

INSERT INTO `mastersupplier` (`id`, `nama`, `alamat`, `kota`) VALUES
(1, 'Nike Osaka', 'Shinsaibashisuji', 'Osaka');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masterbarang`
--
ALTER TABLE `masterbarang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `masterpelanggan`
--
ALTER TABLE `masterpelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mastersupplier`
--
ALTER TABLE `mastersupplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `masterbarang`
--
ALTER TABLE `masterbarang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `masterpelanggan`
--
ALTER TABLE `masterpelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mastersupplier`
--
ALTER TABLE `mastersupplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
