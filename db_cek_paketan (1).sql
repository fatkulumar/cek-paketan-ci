-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2021 pada 16.27
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
-- Struktur dari tabel `tb_other`
--

CREATE TABLE `tb_other` (
  `id_other` int(11) NOT NULL,
  `warning` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_other`
--

INSERT INTO `tb_other` (`id_other`, `warning`) VALUES
(1, 'Gasek Multimedia atau yang biasa disebut gasmul ini adalah badan otonom yang menangani bidang multimedia, komunikasi, informasi dan dokumentasi. Selain itu Gasmul juga melayani Peminjaman Barang, Penyediaan Jasa, serta Printing. Gasek multimedia ini beranggotakan dari santriwan santriwati Pondok Pesantren Sabilurrosyad. Gasek Multimedia mempunyai 6 divisi dengan beberapa jobdisk. Gasek Multimedia terdiri dari Divisi Web, Divisi Content Creator, Divisi Teknisi, Divisi Fotografi, Divisi Desain, Divisi Teknisi2.');

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
(41, 0, 'umar', 'Gasmul', 'Langsung', '27-01-2021 09:24:26', NULL, '', NULL, '085872951848', '', '27-01-2021 09:24:26', NULL),
(42, 0, 'ana', 'Gasmul', 'COD', '27-01-2021 09:24:38', NULL, '', NULL, '085872951848', '', '27-01-2021 09:24:38', NULL),
(43, 0, 'umar', 'Gasmul', 'Langsung', '27-01-2021 09:24:48', NULL, '', NULL, '085872951848', '', '27-01-2021 09:24:48', NULL),
(44, 0, 'umar', 'Gasmul', 'Langsung', '27-01-2021 09:24:57', NULL, '', NULL, '085872951848', '', '27-01-2021 09:24:57', NULL),
(45, 0, 'umar', 'Gasmul', 'Langsung', '27-01-2021 09:25:04', NULL, '', NULL, '085872951848', '', '27-01-2021 09:25:04', NULL),
(46, 0, 'umar', 'Gasmul', 'Langsung', '27-01-2021 09:25:11', NULL, '', NULL, '085872951848', '', '27-01-2021 09:25:11', NULL),
(47, 0, 'ana', 'Gasmul', 'Langsung', '27-01-2021 09:25:22', NULL, '', NULL, '085872951848', '', '27-01-2021 09:25:22', NULL),
(48, 1, 'pasha', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(49, 1, 'pasha', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(50, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(51, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(52, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(53, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(54, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(55, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(56, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(57, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(58, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(59, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(60, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(61, 1, 'fatkul', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(62, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(63, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(64, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(65, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(66, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(67, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(68, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(69, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(70, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(71, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(72, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(73, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(74, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(75, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(76, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(77, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(78, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(79, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(80, 1, 'angel', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(81, 1, 'desi', '1', 'Langsung', '2021-01-20 04:08:11', '2021-01-20 04:08:11', 'indra', '2021-01-26 04:08:11', '85876545671', '', '2021-01-01 08:08:11', '2021-01-13 04:08:11'),
(82, 0, 'angel', 'Gasmul', 'COD', '29-01-2021 11:41:56', NULL, '', NULL, '085872951848', '', '29-01-2021 11:41:56', NULL);

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
-- Indeks untuk tabel `tb_other`
--
ALTER TABLE `tb_other`
  ADD PRIMARY KEY (`id_other`);

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
-- AUTO_INCREMENT untuk tabel `tb_other`
--
ALTER TABLE `tb_other`
  MODIFY `id_other` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  MODIFY `id_santri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
