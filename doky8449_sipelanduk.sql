-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 07:29 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipelanduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `angka`
--

CREATE TABLE `angka` (
  `id_angka` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `lk` int(11) DEFAULT NULL,
  `pr` int(11) DEFAULT NULL,
  `jumlah_angka` int(11) NOT NULL,
  `tanggal_angka` date NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angka`
--

INSERT INTO `angka` (`id_angka`, `id_kota`, `id_layanan`, `lk`, `pr`, `jumlah_angka`, `tanggal_angka`, `tanggal_update`) VALUES
(10, 3, 5, NULL, NULL, 100, '2019-06-20', '2019-06-11 12:41:51'),
(11, 3, 3, NULL, NULL, 205, '2019-06-19', '2019-06-11 12:41:51'),
(12, 3, 6, NULL, NULL, 200, '2019-06-05', '2019-06-11 12:41:51'),
(13, 3, 6, NULL, NULL, 200, '2019-06-06', '2019-06-11 12:41:51'),
(14, 3, 7, NULL, NULL, 100, '2019-06-08', '2019-06-11 12:41:51'),
(15, 3, 4, NULL, NULL, 20, '2019-06-06', '2019-06-11 12:41:51'),
(16, 3, 3, NULL, NULL, 300, '2019-06-06', '2019-06-11 12:41:51'),
(17, 3, 7, NULL, NULL, 10, '2019-06-06', '2019-06-11 12:41:51'),
(18, 3, 9, NULL, NULL, 50, '2019-06-06', '2019-06-11 12:41:51'),
(19, 2, 3, NULL, NULL, 100, '2019-06-06', '2019-06-11 12:41:51'),
(20, 2, 3, NULL, NULL, 50, '2019-06-07', '2019-06-11 12:41:51'),
(21, 3, 9, NULL, NULL, 20, '2019-06-09', '2019-06-11 12:41:51'),
(22, 3, 11, NULL, NULL, 50, '2019-06-14', '2019-06-11 12:41:51'),
(23, 6, 11, NULL, NULL, 20, '2019-06-11', '2019-06-11 12:43:54'),
(24, 6, 25, NULL, NULL, 300, '2019-06-12', '2019-06-12 10:36:55'),
(25, 6, 25, NULL, NULL, 50, '2019-06-11', '2019-06-12 10:37:33'),
(26, 6, 26, NULL, NULL, 15, '1970-01-01', '2019-06-13 10:59:04'),
(27, 6, 26, 20, 40, 60, '2019-06-13', '2019-06-13 14:07:40'),
(28, 6, 25, 0, 0, 60, '2019-06-06', '2019-06-13 13:12:56'),
(29, 6, 25, 20, 10, 30, '2019-06-13', '2019-06-13 17:21:39'),
(30, 6, 20, 30, 10, 40, '2019-06-13', '2019-06-13 14:08:10'),
(31, 6, 9, 40, 0, 40, '2019-06-13', '2019-06-13 14:23:33'),
(32, 6, 8, 0, 70, 70, '2019-06-14', '2019-06-13 17:04:33'),
(33, 6, 25, 20, 40, 60, '2019-06-14', '2019-06-13 17:17:02');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `namaweb` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `metatext` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `namaweb`, `email`, `website`, `keywords`, `logo`, `telepon`, `deskripsi`, `alamat`, `metatext`, `tanggal`) VALUES
(1, 'sipelanduk', '', 'https://sipelanduk.com', '', 'Logo-Kementerian_DDN.png', '', 'Sistem Pelayanan Penduduk', 'Provinsi Kepulauan Riau', '', '2019-06-03 14:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `slug_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `slug_kota`) VALUES
(1, 'Kota Batam', 'kota-batam'),
(2, 'Bintan', 'bintan'),
(3, 'Karimun', 'karimun'),
(4, 'Lingga', 'lingga'),
(5, 'Natuna', 'natuna'),
(6, 'Kota Tanjungpinang', 'kota-tanjungpinang');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `slug_layanan` varchar(50) NOT NULL,
  `kategori_layanan` int(2) NOT NULL,
  `status_layanan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `slug_layanan`, `kategori_layanan`, `status_layanan`) VALUES
(1, 'Penerbitan KK', 'penerbitan-kk', 1, 1),
(3, 'PENERBITAN NIK OA', 'penerbitan-nik-oa', 1, 2),
(4, 'Penerbitan NIK WNI', 'penerbitan-nik-wni', 1, 2),
(5, 'Kartu Identitas Anak', 'kartu-identitas-anak', 1, 2),
(6, 'Akta Kelahiran', 'akta-kelahiran', 2, 2),
(7, 'Akta Kematian', 'akta-kematian', 2, 2),
(8, 'Perekaman KTP-EL', 'perekaman-ktp-el', 1, 2),
(9, 'Pencetakan KTP-EL', 'pencetakan-ktp-el', 1, 2),
(10, 'Perpindahan', 'perpindahan', 1, 1),
(11, 'Kedatangan', 'kedatangan', 1, 1),
(12, 'Akta Perkawinan', 'akta-perkawinan', 2, 1),
(13, 'Pembatalan Akta Perkawinan', 'pembatalan-akta-perkawinan', 2, 1),
(14, 'Akta Perceraian', 'akta-perceraian', 2, 1),
(15, 'Pembatalan Akta Perceraian', 'pembatalan-akta-perceraian', 2, 1),
(16, 'Perubahan WNI - WNA', 'perubahan-wni-wna', 2, 2),
(17, 'Perubahan WNA - WNI', 'perubahan-wna-wni', 2, 2),
(18, 'Pengesahan Anak', 'pengesahan-anak', 2, 2),
(19, 'Pengangkatan Anak', 'pengangkatan-anak', 2, 2),
(20, 'Pengakuan Anak', 'pengakuan-anak', 2, 2),
(21, 'Pembatalan Akta', 'pembatalan-akta', 2, 2),
(22, 'Pembetulan Akta', 'pembetulan-akta', 2, 2),
(23, 'Perubahan Nama', 'perubahan-nama', 2, 2),
(24, 'Perubahan Jenis Kelamin', 'perubahan-jenis-kelamin', 2, 2),
(25, 'Kedatangan (Berdasarkan Anggota)', 'kedatangan-(berdasarkan-anggota)', 1, 2),
(26, 'Perpindahan (Berdasarkan Anggota)', 'perpindahan-(berdasarkan-anggota)', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `akses_level` int(2) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nomor_telepon` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `akses_level`, `id_kota`, `nomor_telepon`, `email`, `tanggal_daftar`) VALUES
(5, 'Pekanbaru', 'erizal', '2b8104c2b304b6b2a42013a44ed21a2a25d4038b', 21, 3, '', '', '2019-06-04 06:03:38'),
(11, 'devwell', 'masterdata', '3adee998f01627aaa1433d67969f0d69a9b2ac95', 21, 4, '081266096662', 'berthoerizal21@gmail.com', '2019-06-08 09:07:30'),
(12, 'sipelanduk', 'sipelanduk', '3adee998f01627aaa1433d67969f0d69a9b2ac95', 21, 3, NULL, NULL, '2019-06-08 10:05:36'),
(13, 'tanjungpinang', 'tanjungpinang', '3adee998f01627aaa1433d67969f0d69a9b2ac95', 10, 6, '', '', '2019-06-08 10:07:21'),
(14, 'edo lorenza', 'edo lorenza', '6e77b6137655c2a444173c05c5e76b6d96e5bd4d', 21, 1, NULL, NULL, '2019-06-10 13:13:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angka`
--
ALTER TABLE `angka`
  ADD PRIMARY KEY (`id_angka`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `angka`
--
ALTER TABLE `angka`
  MODIFY `id_angka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
