-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 12:59 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nelangsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `terakhir_diubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `stok`, `terakhir_diubah`) VALUES
('kaget', 'tidak kaget', '1091', 180, '2018-05-24 22:52:44'),
('TST2', 'Test 2', '19900', 110, '2018-05-24 22:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(5) NOT NULL,
  `nama_event` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_barang` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `nama_event`, `tanggal`, `username`, `kode_barang`, `jumlah`) VALUES
(4, 'Menambahkan Barang', '2018-05-24 22:26:12', '', 'TST', 18),
(5, 'Menambahkan Barang', '2018-05-24 22:28:28', 'admin', 'TST2', 10),
(6, 'Menghapus Barang', '2018-05-24 22:30:58', 'admin', 'TST', 0),
(7, 'Mengedit Barang', '2018-05-24 22:38:42', 'admin', 'kaget', 200),
(8, 'Transaksi keluar', '2018-05-24 22:40:37', 'admin', 'kaget', 300),
(9, 'Transaksi keluar', '2018-05-24 22:41:23', 'admin', 'kaget', -700),
(10, 'Transaksi keluar', '2018-05-24 22:46:52', 'admin', 'kaget', -10),
(11, 'Transaksi masuk', '2018-05-24 22:47:56', 'admin', 'TST2', 100),
(12, 'Transaksi keluar', '2018-05-24 22:48:58', 'admin', 'TST2', -100),
(13, 'Transaksi masuk', '2018-05-24 22:50:38', 'admin', 'kaget', 100),
(14, 'Transaksi masuk', '2018-05-24 22:51:01', 'admin', 'TST2', 100),
(15, 'Transaksi keluar', '2018-05-24 22:52:44', 'admin', 'kaget', -10),
(16, 'Mengedit Barang', '2018-05-24 22:53:23', 'admin', 'TST2', 10),
(17, 'Transaksi masuk', '2018-05-24 22:53:40', 'admin', 'TST2', 100);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `username`, `kode_barang`, `jumlah_barang`, `tanggal`) VALUES
(1, 'admin', 'kaget', -1090, '2018-05-24 17:41:28'),
(2, 'admin', 'kaget', -1000, '2018-05-24 17:41:38'),
(3, 'admin', 'kaget', -1000, '2018-05-24 17:41:51'),
(6, 'admin', 'kaget', 2000, '2018-05-24 17:45:48'),
(7, 'admin', 'kaget', -109, '2018-05-24 17:57:24'),
(8, 'admin', 'kaget', -10, '2018-05-24 17:59:23'),
(9, 'admin', 'kaget', -10, '2018-05-24 18:00:22'),
(10, 'admin', 'kaget', 100, '2018-05-24 18:01:28'),
(11, 'admin', 'kaget', 1000, '2018-05-24 18:03:32'),
(12, 'admin', 'kaget', 100, '2018-05-24 18:03:42'),
(13, 'admin', 'kaget', -10, '2018-05-24 18:04:01'),
(14, 'admin', 'kaget', 100, '2018-05-24 18:05:33'),
(15, 'admin', 'kaget', 1000, '2018-05-24 18:07:04'),
(16, 'admin', 'kaget', 67, '2018-05-24 18:08:46'),
(17, 'admin', 'kaget', 10, '2018-05-24 18:11:38'),
(18, 'admin', 'kaget', 10, '2018-05-24 18:12:11'),
(19, 'admin', 'kaget', 100, '2018-05-24 18:12:58'),
(20, 'admin', 'kaget', 200, '2018-05-24 18:13:36'),
(21, 'admin', 'kaget', 200, '2018-05-24 18:15:28'),
(22, 'admin', 'kaget', 199, '2018-05-24 18:17:29'),
(23, 'admin', 'kaget', 10000, '2018-05-24 18:19:04'),
(24, 'admin', 'kaget', 100, '2018-05-24 18:19:14'),
(25, 'admin', 'kaget', 100, '2018-05-24 18:19:51'),
(26, 'admin', 'kaget', 200, '2018-05-24 18:20:41'),
(27, 'admin', 'kaget', 1000, '2018-05-24 18:22:46'),
(28, 'admin', 'kaget', 100, '2018-05-24 18:22:52'),
(29, 'admin', 'kaget', 1000, '2018-05-24 18:23:33'),
(30, 'admin', 'kaget', 10, '2018-05-24 18:23:38'),
(31, 'admin', 'kaget', 1000, '2018-05-24 18:24:21'),
(32, 'admin', 'kaget', 100, '2018-05-24 18:30:17'),
(33, 'admin', 'kaget', 100, '2018-05-24 18:30:45'),
(34, 'admin', 'kaget', 100, '2018-05-24 18:31:14'),
(35, 'admin', 'kaget', 100, '2018-05-24 18:32:18'),
(36, 'admin', 'kaget', 200, '2018-05-24 18:32:28'),
(37, 'admin', 'kaget', 2000, '2018-05-24 18:32:38'),
(38, 'admin', 'kaget', 2000, '2018-05-24 18:33:53'),
(39, 'admin', 'kaget', 2000, '2018-05-24 18:35:01'),
(40, 'admin', 'kaget', 4000, '2018-05-24 18:35:11'),
(41, 'admin', 'kaget', -8000, '2018-05-24 18:35:41'),
(42, 'admin', 'kaget', 100, '2018-05-24 18:35:47'),
(43, 'admin', 'kaget', 100, '2018-05-24 18:38:25'),
(44, 'admin', 'kaget', 300, '2018-05-24 22:39:12'),
(45, 'admin', 'kaget', 300, '2018-05-24 22:40:37'),
(46, 'admin', 'kaget', -700, '2018-05-24 22:41:23'),
(47, 'admin', 'kaget', -10, '2018-05-24 22:46:52'),
(48, 'admin', 'TST2', 100, '2018-05-24 22:47:56'),
(49, 'admin', 'TST2', -100, '2018-05-24 22:48:58'),
(50, 'admin', 'kaget', 100, '2018-05-24 22:50:38'),
(51, 'admin', 'TST2', 100, '2018-05-24 22:51:01'),
(52, 'admin', 'kaget', -10, '2018-05-24 22:52:44'),
(53, 'admin', 'TST2', 100, '2018-05-24 22:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `alamat_user` varchar(62) NOT NULL,
  `telp_user` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama_user`, `alamat_user`, `telp_user`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', '00001'),
('qw', '006d2143154327a64d86a264aea225f3', 'qw', 'qw', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
