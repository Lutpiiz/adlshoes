-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 02:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`, `no_telepon`, `alamat`) VALUES
(1, 'Luthfi', 'luthfi@gmail.com', '123', '085802705913', 'Bantul, Yogyakarta'),
(2, 'Lupyyy', 'zainiluthfi.lz@gmail.com', 'admin', '085802705913', 'Mbwantull');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `email_customer` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tanggal_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email_customer`, `password`, `no_telepon`, `alamat`, `tanggal_daftar`) VALUES
(1, 'Arif Nur Rohman', 'arif@amikom.ac.id', '8cb2237d0679ca88db6464eac60da96345513964', '081234567890', 'Kalasan, Sleman', '2024-11-30 07:41:19'),
(2, 'Budi Arie Setiadi', 'budi@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '084646464646', 'Jakarta', '2024-11-30 08:49:42'),
(3, 'Uchiha Itachi', 'itachi@gmail.com', 'ee9e3307d98c01699b4aa24e429a3725d79e19e1', '089999999999', 'Konoha Kidul RT 05', '2024-11-30 11:22:26'),
(13, 'Paijo', 'paijo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '081234567890', 'Condongcatur', '2024-12-09 22:51:14'),
(14, 'Lupi', 'lupi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '085802705913', 'Yogyakarta', '2024-12-13 16:48:54'),
(15, 'Lupi', 'zainiluthfi.lz@gmail.com', '056eafe7cf52220de2df36845b8ed170c67e23e3', '085802705913', 'Wakanda', '2024-12-14 08:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL,
  `deskripsi_layanan` text NOT NULL,
  `harga_layanan` int(11) NOT NULL,
  `estimasi_layanan` int(11) NOT NULL,
  `foto_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `deskripsi_layanan`, `harga_layanan`, `estimasi_layanan`, `foto_layanan`) VALUES
(6, 'Express Deep Cleaning', 'Cuci keseluruhan sepatu dengan penyelesaian cepat', 40000, 1, 'express.jpg'),
(7, 'Reguler Deep Cleaning', 'Cuci keseluruhan sepatu', 25000, 3, 'deep-cleaning.jpg'),
(10, 'Unyellowing', 'Menghilangkan noda kuning di sepatu', 55000, 4, 'unyellowing.png'),
(11, 'Tes Layanan', 'aklsjdhfakajklsdfh aksjdfhaksjdfh  adsfjkhakjsdf adfjhdf akjfhakjdfs hfhfhfeiuf hfeuifhe fiuhefuhef', 1750000, 3, 'sepatu-anak.jpg'),
(12, 'xxx', 'xxx', 123, 123, 'leather1.jpg'),
(13, 'asd', 'asd', 123, 123, 'recoloring.png'),
(14, 'qwe', 'qweq', 123, 123, 'express1.jpg'),
(15, 'qwe', 'asd', 12, 23, 'reglue.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `alamat_pemesan` varchar(255) NOT NULL,
  `id_layanan` int(11) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `metode_pembayaran` varchar(50) NOT NULL,
  `tanggal_pesan` datetime NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `status_transaksi` enum('dipesan','dibayar','diproses','selesai','dibatalkan') DEFAULT 'dipesan',
  `total_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_customer`, `nama_pemesan`, `alamat_pemesan`, `id_layanan`, `jumlah_pesan`, `metode_pembayaran`, `tanggal_pesan`, `id_admin`, `status_transaksi`, `total_transaksi`) VALUES
(1, 2, 'Yanto Kopling', 'Jakarta', 10, 3, 'qris', '2024-12-13 10:45:13', NULL, 'dipesan', NULL),
(2, 2, 'Budi', 'Jakarta', 6, 4, 'transfer', '2024-12-13 11:18:21', NULL, 'dipesan', 160000),
(3, 2, 'Budi Arie Setiadi', 'Jakarta', 7, 2, 'transfer', '2024-12-13 11:19:10', NULL, 'dipesan', 50000),
(4, 2, 'Budi Arie Setiadi', 'Jakarta', 9, 3, 'cod', '2024-12-13 11:22:18', NULL, 'dipesan', 60000),
(5, 14, 'Lupi', 'Bantul', 7, 500, 'shopeepay', '2024-12-13 16:49:28', NULL, 'dipesan', 12500000),
(6, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 7, 4, 'transfer', '2024-12-14 14:53:34', NULL, 'dibayar', 100000),
(7, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 10, 6, 'transfer', '2024-12-14 14:53:50', NULL, 'dibayar', 330000),
(8, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 11, 6, 'dana', '2024-12-14 21:38:34', NULL, 'dibayar', 10500000),
(9, 15, 'Arel', 'Klaten', 7, 5, 'shopeepay', '2024-12-16 19:02:17', NULL, 'dibayar', 125000),
(10, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 6, 1, 'qris', '2024-12-17 14:11:14', NULL, 'dipesan', 40000),
(11, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 10, 3, 'transfer', '2024-12-18 07:24:36', NULL, 'dibayar', 165000),
(12, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 7, 4, 'transfer', '2024-12-18 07:31:53', NULL, 'dibayar', 100000),
(13, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 6, 2, 'transfer', '2024-12-18 07:33:27', NULL, 'dibayar', 80000),
(14, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 10, 1, 'transfer', '2024-12-18 07:34:35', NULL, 'dibayar', 55000),
(15, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 10, 1, 'transfer', '2024-12-18 08:18:37', NULL, 'dipesan', 55000),
(16, 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', 7, 2, 'cashless', '2024-12-18 08:21:38', NULL, 'dibayar', 50000),
(17, 15, 'Lupi', 'Wakanda', 7, 3, 'cashless', '2024-12-18 19:20:29', NULL, 'dibayar', 75000),
(18, 15, 'Lupi', 'Wakanda', 10, 3, 'cashless', '2024-12-23 20:01:10', NULL, 'dibayar', 165000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
