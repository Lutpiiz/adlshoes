-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 01:24 AM
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
(3, 'Uchiha Itachi', 'itachi@gmail.com', 'ee9e3307d98c01699b4aa24e429a3725d79e19e1', '089999999999', 'Konoha Kidul RT 05', '2024-11-30 11:22:26'),
(13, 'Paijo', 'paijo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '081234567890', 'Condongcatur', '2024-12-09 22:51:14'),
(14, 'Lupi', 'lupi@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '085802705913', 'Yogyakarta', '2024-12-13 16:48:54'),
(15, 'Lupi', 'zainiluthfi.lz@gmail.com', '056eafe7cf52220de2df36845b8ed170c67e23e3', '085802705913', 'Wakanda', '2024-12-14 08:13:56'),
(16, 'Arel', 'arel@gmail.com', 'b1c7123dbdf59c0145f7185a7fad16236193aad9', '081234567890', 'Klaten', '2024-12-26 09:55:56'),
(17, 'Dhila', 'dhila@gmail.com', '87fb7280378ff87cbc1b40698cd254fb3c5c0811', '080987654321', 'Gunung Kidul', '2024-12-26 09:56:25'),
(18, 'Asep', 'asep@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0800000000', 'Yogyakarta', '2024-12-29 23:39:04'),
(19, 'Paijo', 'paijo99@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '01230123909', 'sleman', '2024-12-29 23:51:04'),
(20, 'Haris', 'haris@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0812345678', 'Kretek, Bantul, DIY', '2025-05-20 18:22:40');

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
(16, 'Whitening', 'Memutihkan sepatu seperti baru', 60000, 5, 'whitening.png'),
(17, 'Repaint', 'Mewarnai sepatu sesuai selera', 90000, 7, 'repaint1.jpg'),
(18, 'Kids Shoes', 'Cuci sepatu anak-anak', 20000, 3, 'sepatu-anak1.jpg'),
(19, 'Women Shoes', 'Cuci sepatu wanita', 20000, 3, 'sepatu-wanita1.jpg'),
(20, 'Reglue', 'Pengeleman pada sol sepatu', 25000, 7, 'reglue1.png'),
(21, 'Sewing', 'Jahit sepatu', 45000, 7, 'sewing.png'),
(25, 'Cuci Kilat', 'Cuci sangat kilat', 35000, 1, 'Screenshot_(28).png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `link_alamat` varchar(255) NOT NULL,
  `patokan` varchar(255) NOT NULL,
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

INSERT INTO `transaksi` (`id_transaksi`, `kode_transaksi`, `id_customer`, `nama_pemesan`, `link_alamat`, `patokan`, `id_layanan`, `jumlah_pesan`, `metode_pembayaran`, `tanggal_pesan`, `id_admin`, `status_transaksi`, `total_transaksi`) VALUES
(1, '', 2, 'Yanto Kopling', 'Jakarta', '', 10, 3, 'qris', '2024-12-13 10:45:13', NULL, 'dipesan', NULL),
(2, '', 2, 'Budi', 'Jakarta', '', 6, 4, 'transfer', '2024-12-13 11:18:21', NULL, 'dipesan', 160000),
(3, '', 2, 'Budi Arie Setiadi', 'Jakarta', '', 7, 2, 'transfer', '2024-12-13 11:19:10', NULL, 'dipesan', 50000),
(6, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 7, 4, 'transfer', '2024-12-14 14:53:34', NULL, 'dibayar', 100000),
(7, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 10, 6, 'transfer', '2024-12-14 14:53:50', NULL, 'dibayar', 330000),
(9, '', 15, 'Arel', 'Klaten', '', 7, 5, 'shopeepay', '2024-12-16 19:02:17', NULL, 'dibayar', 125000),
(10, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 6, 1, 'qris', '2024-12-17 14:11:14', NULL, 'dibatalkan', 40000),
(11, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 10, 3, 'transfer', '2024-12-18 07:24:36', NULL, 'dibayar', 165000),
(12, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 7, 4, 'transfer', '2024-12-18 07:31:53', NULL, 'selesai', 100000),
(13, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 6, 2, 'transfer', '2024-12-18 07:33:27', NULL, 'dibatalkan', 80000),
(14, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 10, 1, 'transfer', '2024-12-18 07:34:35', NULL, 'dibayar', 55000),
(15, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 10, 1, 'transfer', '2024-12-18 08:18:37', NULL, 'selesai', 55000),
(16, '', 15, 'Lupi', 'Bakulan RT 03, Trirenggo, Bantul', '', 7, 2, 'cashless', '2024-12-18 08:21:38', NULL, 'dibatalkan', 50000),
(17, '', 15, 'Lupi', 'Wakanda', '', 7, 3, 'cashless', '2024-12-18 19:20:29', NULL, 'dibatalkan', 75000),
(18, '', 15, 'Lupi', 'Wakanda', '', 10, 3, 'cashless', '2024-12-23 20:01:10', NULL, 'dibatalkan', 165000),
(19, '', 15, 'Lupi', 'Wakanda', '', 6, 2, 'cashless', '2024-12-24 23:15:54', NULL, 'selesai', 80000),
(20, '', 15, 'Lupi', 'Wakanda', '', 22, 2, 'cashless', '2024-12-26 15:52:06', NULL, 'selesai', 70000),
(21, '', 15, 'Lupi', 'Wakanda', '', 18, 1, 'cashless', '2024-12-26 15:52:59', NULL, 'dibatalkan', 20000),
(22, '', 16, 'Arel', 'Klaten', '', 20, 4, 'cashless', '2024-12-27 13:36:29', NULL, 'selesai', 100000),
(23, '', 16, 'Arel', 'Klaten', '', 16, 3, 'cashless', '2024-12-27 16:52:29', NULL, 'selesai', 180000),
(24, '', 16, 'Arel', 'Klaten', '', 7, 1, 'cashless', '2024-12-27 16:54:13', NULL, 'dibatalkan', 25000),
(25, '', 16, 'Arel', 'Klaten', '', 17, 1, 'cashless', '2024-12-27 17:33:45', NULL, 'dibayar', 90000),
(26, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'Rumah warna hijau selatan jalan', 7, 2, 'cashless', '2024-12-29 22:51:27', NULL, 'dibayar', 50000),
(27, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'qweqweqeqweqww', 10, 1, 'cod', '2024-12-29 23:35:01', NULL, 'dibayar', 55000),
(28, '', 18, 'Daffa', 'https://maps.app.goo.gl/SL1ird4yysECBLV76', 'rumah warna hijau pagar hitam', 7, 2, 'cod', '2024-12-29 23:42:51', NULL, 'dibatalkan', 50000),
(29, '', 18, 'Asep', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'qweqeqeqw', 7, 1, 'cashless', '2024-12-29 23:43:24', NULL, 'selesai', 25000),
(30, '', 19, 'Paijo', 'https://maps.app.goo.gl/SL1ird4yysECBLV76', 'rumah warna hijau pagar hitam', 7, 2, 'cod', '2024-12-29 23:52:43', NULL, 'dibatalkan', 50000),
(31, '', 19, 'Paijo', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'qweqeqwe', 7, 1, 'cashless', '2024-12-29 23:53:01', NULL, 'selesai', 25000),
(32, '', 15, 'Radit', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'rumah warna coklat', 6, 5, 'cashless', '2024-12-30 20:21:20', NULL, 'selesai', 200000),
(33, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'rumah warna abu-abu pagar putih', 6, 1, 'cashless', '2025-01-02 00:28:07', NULL, 'dibatalkan', 40000),
(34, '', 15, 'Lupi', 'https://maps.app.goo.gl/SL1ird4yysECBLV76', 'Rumah gede', 6, 1, 'cod', '2025-01-06 16:13:57', NULL, 'selesai', 40000),
(35, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'Rumah warna pink', 7, 2, 'cashless', '2025-01-16 20:51:42', NULL, 'dibayar', 50000),
(36, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'Rumah warna kelap-kelip', 6, 1, 'cashless', '2025-01-16 20:52:55', NULL, 'selesai', 40000),
(37, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'lkashdfalkjsd', 7, 2, 'cashless', '2025-01-16 21:54:39', NULL, 'dibayar', 50000),
(38, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'lakshdalksjd', 17, 1, 'cashless', '2025-01-16 23:08:07', NULL, 'dipesan', 90000),
(39, '', 15, 'Lupi', 'https://maps.app.goo.gl/SL1ird4yysECBLV76', 'kjkjhkjhk', 6, 1, 'cashless', '2025-01-16 23:10:20', NULL, 'dibayar', 40000),
(40, '', 15, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'qweqweqwe', 6, 1, 'cashless', '2025-01-16 23:13:16', NULL, 'dipesan', 40000),
(41, '', 14, 'Lupi', 'blablabla', 'blablabla', 20, 1, 'cod', '2025-01-24 00:19:33', NULL, 'dibayar', 25000),
(42, '', 14, 'Lupi', 'https://maps.app.goo.gl/GYHV5pLpAfVNF6UD9', 'bangjo bakulan', 6, 2, 'cashless', '2025-05-21 15:39:32', NULL, 'dibayar', 80000),
(43, '', 14, 'Lupi', 'www', 'eqw', 16, 2, 'cashless', '2025-07-06 22:18:11', NULL, 'dipesan', 120000),
(44, '20250707011305222', 14, 'Lupi', 'jflakdjflaksf', 'qweqweq', 7, 5, 'cashless', '2025-07-07 01:13:05', NULL, 'dibayar', 125000);

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
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
