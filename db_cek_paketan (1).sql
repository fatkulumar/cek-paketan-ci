-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2021 pada 01.49
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cek_paketan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(255) NOT NULL,
  `id_santri` int(225) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `jenis_kirim` varchar(8) NOT NULL DEFAULT 'Langsung',
  `tgl_terima` varchar(20) DEFAULT NULL,
  `tgl_ambil` varchar(20) DEFAULT NULL,
  `pengambil` varchar(50) NOT NULL,
  `status_ambil` varchar(20) DEFAULT NULL,
  `hp` varchar(13) NOT NULL,
  `hhp_penerima` varchar(13) NOT NULL,
  `creat_at` varchar(20) DEFAULT NULL,
  `modified_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_santri`, `nama_paket`, `penerima`, `jenis_kirim`, `tgl_terima`, `tgl_ambil`, `pengambil`, `status_ambil`, `hp`, `hhp_penerima`, `creat_at`, `modified_at`) VALUES
(16, 0, 'umar', 'Gasmul', 'COD', '25-01-2021 04:25:40', '25-01-2021 05:03:01', '', NULL, '085872951848', '', '25-01-2021 04:25:40', '25-01-2021 05:03:01'),
(17, 0, 'Pasha', 'Gasmul', 'Langsung', '25-01-2021 04:50:21', NULL, '', NULL, '085872951848', '', '25-01-2021 04:50:21', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_santri`
--

CREATE TABLE `tb_santri` (
  `id_santri` int(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `creat_at` timestamp NULL DEFAULT NULL,
  `last_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_santri`
--

INSERT INTO `tb_santri` (`id_santri`, `nama_lengkap`, `hp`, `creat_at`, `last_modified`) VALUES
(1, 'Pasha', '085876545671', '2021-01-01 01:08:11', '2021-01-02 01:08:11'),
(2, 'Wahib', '085876545671', '2021-01-01 01:08:11', '2021-01-02 01:08:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`id_santri`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  MODIFY `id_santri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
