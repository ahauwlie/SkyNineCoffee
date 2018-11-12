-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2018 at 04:39 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skynine_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_ad` int(5) NOT NULL,
  `username_ad` varchar(32) NOT NULL,
  `password_ad` varchar(16) NOT NULL,
  `full_name_ad` varchar(100) NOT NULL,
  `job_position_ad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `disc`
--

CREATE TABLE `disc` (
  `id_disc` int(5) NOT NULL,
  `nama_disc` varchar(100) NOT NULL,
  `desc_disc` varchar(255) NOT NULL,
  `jum_disc` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_pho` int(5) NOT NULL,
  `url_pho` varchar(300) NOT NULL,
  `id_pr` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_pr` int(5) NOT NULL,
  `nama_pr` varchar(50) NOT NULL,
  `tipe_pr` varchar(50) NOT NULL,
  `harga_pr` varchar(9) NOT NULL,
  `stock_pr` varchar(4) NOT NULL,
  `decs_pr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tr` int(5) NOT NULL,
  `date_tr` date NOT NULL,
  `id_us` int(5) NOT NULL,
  `id_pr` int(5) NOT NULL,
  `id_disc` int(5) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_detail`
--

CREATE TABLE `trans_detail` (
  `id_td` int(5) NOT NULL,
  `id_pr` int(5) NOT NULL,
  `id_tr` int(5) NOT NULL,
  `nama_pr` varchar(50) NOT NULL,
  `harga_pr` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_us` int(5) NOT NULL,
  `username_us` varchar(32) NOT NULL,
  `password_us` varchar(16) NOT NULL,
  `full_name_us` varchar(100) NOT NULL,
  `img_us` varchar(255) DEFAULT NULL,
  `date_birth_us` date DEFAULT NULL,
  `email_us` varchar(200) NOT NULL,
  `address_us` varchar(300) DEFAULT NULL,
  `phone_num_us` varchar(14) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_us`, `username_us`, `password_us`, `full_name_us`, `img_us`, `date_birth_us`, `email_us`, `address_us`, `phone_num_us`, `active`) VALUES
(5, 'kejut', '12345', 'core5', NULL, NULL, 'guencyguen@gmail.com', NULL, '089519556457', 1),
(7, 'tayokaget', '12345678', 'haytayo', NULL, NULL, 'guencyguen@gmail.com', NULL, '089519556457', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(150) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `active` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `active`) VALUES
(4, 'linglung', 'arunaadmin', '1234', 'guencyguen@gmail.com', '1234123412', '1'),
(6, 'lelekuda', 'tayo', '1234', 'ahauwlie@gmail.com', '1234123412', '0'),
(7, 'gfdxjfmk', 'test', '12345', 'guencyguen@gmail.com', '1234123412', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`id_disc`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_pho`),
  ADD UNIQUE KEY `FK_pr` (`id_pr`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pr`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_tr`),
  ADD KEY `fk_id_user` (`id_us`),
  ADD KEY `fk_id_product` (`id_pr`),
  ADD KEY `fk_id_diskon` (`id_disc`);

--
-- Indexes for table `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD PRIMARY KEY (`id_td`),
  ADD KEY `fk_id_product` (`id_pr`),
  ADD KEY `fk_id_transaksi` (`id_tr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_us`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_ad` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disc`
--
ALTER TABLE `disc`
  MODIFY `id_disc` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_pho` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pr` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tr` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_detail`
--
ALTER TABLE `trans_detail`
  MODIFY `id_td` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_us` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
