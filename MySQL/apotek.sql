-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2024 at 04:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int NOT NULL,
  `id_produk` int NOT NULL,
  `id_transaksi` int NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_produk`, `id_transaksi`, `harga`) VALUES
(1, 1, 1, 25000),
(2, 2, 2, 30000),
(3, 3, 3, 16000),
(4, 4, 4, 20000),
(5, 5, 5, 42000),
(6, 6, 6, 12000),
(7, 7, 7, 70000),
(8, 8, 8, 42000),
(9, 9, 9, 18000),
(10, 10, 10, 22000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int NOT NULL,
  `nama_jenis` varchar(144) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama_jenis`) VALUES
(1, 'Vitamin'),
(2, 'Antibiotik'),
(3, 'Analgesik'),
(4, 'Obat Batuk'),
(5, 'Antasida'),
(6, 'Antipiretik'),
(7, 'Antihipertensi'),
(8, 'Antiaritmia'),
(10, 'Antidepresan'),
(11, 'Antipsikotik');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama_produk` varchar(36) NOT NULL,
  `harga` double NOT NULL,
  `qty` int NOT NULL,
  `id_jenis` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `qty`, `id_jenis`) VALUES
(1, 'Vitamin C+', 2000, 30, 1),
(2, 'Amoxcillin', 10000, 12, 2),
(3, 'Aspirin', 8000, 5, 3),
(4, 'Siladex', 4000, 42, 4),
(5, 'Aluminium Hidroksida', 6000, 23, 5),
(6, 'Parasetamol', 12000, 25, 6),
(7, 'Benazepril', 10000, 33, 7),
(8, 'Propranolol', 21000, 20, 8),
(9, 'Amitriptyline HCl', 18000, 22, 10),
(10, 'Haloperidol', 11000, 44, 11);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `nama_role` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`) VALUES
(1, 'Member'),
(2, 'Admin'),
(3, 'Non-Member');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int NOT NULL,
  `tanggal_pembelian` datetime NOT NULL,
  `qty` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal_pembelian`, `qty`, `id_user`) VALUES
(1, '2024-03-20 21:34:47', 7, 1),
(2, '2024-03-20 21:34:47', 3, 3),
(3, '2024-03-20 21:34:47', 2, 4),
(4, '2024-03-20 21:34:47', 5, 5),
(5, '2024-03-20 21:34:47', 7, 6),
(6, '2024-03-20 21:34:47', 1, 7),
(7, '2024-03-20 21:34:47', 6, 8),
(8, '2024-03-20 21:34:47', 2, 9),
(9, '2024-03-20 14:34:38', 1, 10),
(10, '2024-03-20 21:41:41', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `id_role`) VALUES
(1, 'Rizqy', 'rizqy', '123', 1),
(2, 'Admin', 'admin', '123', 2),
(3, 'andre', 'andre', '123', 3),
(4, 'ila', 'ila', '123', 1),
(5, 'ade', 'ade', '123', 3),
(6, 'resa', 'resa', '123', 1),
(7, 'fares', 'fares', '123', 1),
(8, 'safa', 'safa', '123', 1),
(9, 'rendra', 'rendra', '123', 3),
(10, 'tesar', 'tesar', '123', 1),
(11, 'feda', 'feda', '123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi` (`id_transaksi`),
  ADD KEY `fk_produk` (`id_produk`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jenis` (`id_jenis`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksiuser` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_produk` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksiuser` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
