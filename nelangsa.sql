-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2018 at 04:44 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `stok` varchar(11) NOT NULL,
  `terakhir_diubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `satuan`, `stok`, `terakhir_diubah`) VALUES
('AS476', 'Daging Super', '24000', '24', '2018-05-21 16:13:43'),
('AS477', 'Daging Biasa', '150000', '15', '2018-05-21 16:13:43'),
('pry', 'super', '12000', '13000', '2018-05-22 16:00:16'),
('12yuyw', 'aihiashd', '12', '120', '2018-05-22 16:14:29'),
('ts', 'bijaksana', '2,000', '10', '2018-05-22 16:42:20');

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
-- Table structure for table `transaksi_keluar`
--

CREATE TABLE `transaksi_keluar` (
  `id_keluar` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `jumlah_barang_keluar` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `id_masuk` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `kode_barang` varchar(11) NOT NULL,
  `biaya` float NOT NULL,
  `jumlah_barang_masuk` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
