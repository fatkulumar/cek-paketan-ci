-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Feb 2021 pada 04.48
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
  `warning` mediumtext NOT NULL,
  `info` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_other`
--

INSERT INTO `tb_other` (`id_other`, `warning`, `info`) VALUES
(1, 'Gasek Multimedia atau yang biasa disebut gasmul ini adalah badan otonom yang menangani bidang multimedia, komunikasi, informasi dan dokumentasi. Selain itu Gasmul juga melayani Peminjaman Barang, Penyediaan Jasa, serta Printing. Gasek multimedia ini beranggotakan dari santriwan santriwati Pondok Pesantren Sabilurrosyad. Gasek Multimedia mempunyai 6 divisi dengan beberapa jobdisk. Gasek Multimedia terdiri dari Divisi Web, Divisi Content Creator, Divisi Teknisi, Divisi Fotografi, Divisi Desain, Divisi Teknisi2.', 'nama saya simpas gasek');

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
  `creat_at` varchar(20) DEFAULT NULL,
  `modified_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_santri`, `nama_paket`, `penerima`, `jenis_kirim`, `tgl_terima`, `tgl_ambil`, `pengambil`, `status_ambil`, `hp`, `creat_at`, `modified_at`) VALUES
(132, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(133, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(135, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(136, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(137, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(138, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(139, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(140, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(141, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(142, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(143, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(144, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(145, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(146, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(147, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(148, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(149, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(150, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(151, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(152, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(153, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(154, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(155, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(156, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(157, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(158, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(159, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(160, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(161, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(162, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(163, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(164, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(165, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(166, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(167, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(168, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(169, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(170, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(171, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(172, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(173, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(174, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(175, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(176, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(177, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(178, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(179, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(180, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12'),
(181, 2, 'umang', 'rou', 'Langsung', '01-01-2021 12:12:12', '01-01-2021 12:12:12', 'anis', '1', '085872951848', '01-01-2021 12:12:12', '01-01-2021 12:12:12');

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
  MODIFY `id_paket` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT untuk tabel `tb_santri`
--
ALTER TABLE `tb_santri`
  MODIFY `id_santri` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
