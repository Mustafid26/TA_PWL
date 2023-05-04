-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2023 pada 15.41
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
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(32, 'Samsung S12', 18000000, 'OS Android 10\r\nChipset Mediatek MT6762D Helio A25 (12 nm)\r\nCPU Octa-core (4x1.8 GHz Cortex-A53 & 4x1.5 GHz Cortex-A53)\r\nGPU PowerVR GE8320\r\n\r\n', 'Mulus'),
(33, 'iPhone XR', 3000000, 'iOS 12, upgradable to iOS 16.4.1\r\nChipset Apple A12 Bionic (7 nm)\r\nCPU Hexa-core (2x2.5 GHz Vortex + 4x1.6 GHz Tempest)\r\nGPU Apple GPU (4-core graphics)', 'Mulus'),
(34, 'iPhone XS', 3000000, 'OS Android 10\r\nChipset Mediatek MT6762D Helio A25 (12 nm)\r\nCPU Octa-core (4x1.8 GHz Cortex-A53 & 4x1.5 GHz Cortex-A53)\r\nGPU PowerVR GE8320', 'Minus'),
(36, 'iPhone 14', 14000000, 'OS	iOS 16, upgradable to iOS 16.4.1\r\nChipset	Apple A15 Bionic (5 nm)\r\nCPU	Hexa-core (2x3.23 GHz Avalanche + 4x1.82 GHz Blizzard)\r\nGPU	Apple GPU (5-core graphics)', 'Mulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `bank` varchar(25) NOT NULL,
  `pembayaran` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `metodepembayaran`
--

INSERT INTO `metodepembayaran` (`id_pembayaran`, `bank`, `pembayaran`) VALUES
(1, 'BCA', '11310001'),
(2, 'DANA', '0813213451');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'Menunggu Pembayaran',
  `id_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pembeli`, `alamat`, `tanggal`, `status`, `id_hp`) VALUES
(89, 'Dhia', 'Bawen', '2023-05-04', 'Menunggu Pembayaran', 32),
(90, 'Dhia', 'Bawen', '2023-05-04', 'Menunggu Pembayaran', 32),
(91, 'Dhia', 'Bawen', '2023-05-04', 'Menunggu Pembayaran', 32);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_pembayaran` (`id_pembayaran`);

--
-- Indeks untuk tabel `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indeks untuk tabel `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_hp` (`id_hp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bayar`
--
ALTER TABLE `bayar`
  MODIFY `id_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id_hp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD CONSTRAINT `bayar_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `metodepembayaran` (`id_pembayaran`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_hp`) REFERENCES `handphone` (`id_hp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
