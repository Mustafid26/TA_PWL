-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2023 pada 17.09
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
-- Database: `db_transaksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `handphone`
--

CREATE TABLE `handphone` (
  `id_hp` int(11) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `harga_hp` int(11) NOT NULL,
  `spesifikasi` varchar(256) NOT NULL,
  `kondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `handphone`
--

INSERT INTO `handphone` (`id_hp`, `merk`, `harga_hp`, `spesifikasi`, `kondisi`) VALUES
(32, 'Samsung S12', 1000000, 'RAM 3GB', 'Mulus'),
(33, 'iPhone XR', 3000000, 'RAM 3GB', 'Mulus'),
(34, 'iPhone XS', 3000000, 'RAM 3GB', 'Minus'),
(36, 'iPhone 14', 20000000, 'RAM 10GB', 'Mulus'),
(37, 'Samsung A53', 30000000, 'RAM 3GB', 'Minus'),
(39, 'Samsung J2', 30000000, 'RAM 3GB', 'Mulus'),
(40, 'Xiaomi Redmi', 4000000, 'RAM 10GB', 'Mulus'),
(41, 'iPhone 14', 25000000, 'RAM 10GB', 'normal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(20) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `no_hp`) VALUES
(11, 'Dhia', 'Ambarawa', '812345678'),
(12, 'Daiyan', 'Banyumanik', '812345678'),
(13, 'Sandi', 'Bawen', '812345678'),
(14, 'Mustafid', 'Salatiga', '214748345'),
(15, 'Dhia', 'Bawen', '81234569991'),
(16, 'Kevin', 'Bawen', '+62131323131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`, `id_pembeli`, `id_hp`) VALUES
(38, '2023-04-05', 12, 33),
(40, '2023-04-12', 13, 34),
(42, '2023-04-06', 11, 32);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_ibfk_1` (`id_pembeli`),
  ADD KEY `transaksi_ibfk_2` (`id_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_hp`) REFERENCES `handphone` (`id_hp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
