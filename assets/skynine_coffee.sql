-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 04:24 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `active` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`, `nama`, `active`) VALUES
(4, 'kodokloncat', '123456', 'guencyguen@gmail.com', 'guency', '0'),
(5, 'kodokloncat', '123456', 'guencyguen@gmail.com', '555', '0'),
(6, 'kodokloncat', 'dfhh', 'guencyguen@gmail.com', '555', '0'),
(7, 'kodokloncat', 'bgfcbhh,f', 'guencyguen@gmail.com', '555', '0'),
(8, 'kodokloncat1', '123456', 'guencyguen@gmail.com', '555', '0'),
(9, 'kodokloncat12', '123456', 'guencyguen@gmail.com', '555', '0');

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
  `nama_pr` varchar(19) NOT NULL,
  `tipe_pr` varchar(10) NOT NULL,
  `harga_pr` int(9) NOT NULL,
  `stock_pr` int(3) NOT NULL,
  `decs_pr` text NOT NULL,
  `img_pr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pr`, `nama_pr`, `tipe_pr`, `harga_pr`, `stock_pr`, `decs_pr`, `img_pr`) VALUES
(1, 'Bali Honey', 'Kopi', 75000, 450, 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'balihoney.png'),
(2, 'Bali Natural', 'Kopi', 75000, 643, 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'balinatural.png'),
(3, 'Balok Sari', 'Kopi', 70000, 119, 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari.png'),
(4, 'Ethiopia', 'Kopi', 90000, 50, 'CitrusFruit, Foral, Sugarcane, Smooth & Clean finish\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 2\r\nSweetness: 4', 'ethiopia.png'),
(5, 'Garut', 'Kopi', 80000, 76, 'Orange Mouthfeel, Clean Aftertaste & Tamarind\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'garut.png'),
(6, 'Gayo', 'Kopi', 75000, 840, 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo.png'),
(7, 'Kerinci', 'Kopi', 75000, 460, 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci.png'),
(8, 'Kopsus(1kg)', 'Kopi_1kg', 180000, 999, 'Black Tea, Peanut Butter, Brown Sugarlike\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 2\r\nBody: 3\r\nSweetness: 3', 'kopsus_1kg.jpeg'),
(9, 'Luna', 'Kopi', 78000, 167, 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna.png'),
(10, 'Puncak Sari', 'Kopi', 60000, 460, 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari.png'),
(11, 'Smooth Operator', 'Kopi', 78000, 466, 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth.png'),
(12, 'Toraja', 'Kopi', 75000, 168, 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja.png'),
(13, 'Kenya', 'Kopi', 90000, 568, 'Orange Mouthfeel, Clean After Taste & Brown Sugar\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'kenya.jpeg'),
(14, 'Colombia', 'Kopi', 90000, 100, 'Chocolate, Honey like, Orange like. Medium Body, Medium Acidity, High Sweetness\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'colombia.jpeg'),
(15, 'Bali Kintamani-50kg', 'Biji_Kopi', 6000000, 200, 'Natural\r\nType: Arabica', 'balikintamani.jpeg'),
(16, 'Paper Filter 100W', 'Filter', 85000, 200, 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper1.jpg'),
(17, 'Paper Filter 100M', 'Filter', 85000, 200, 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper.jpg'),
(18, 'V-60 coffee grinder', 'Alat_Seduh', 3300000, 200, 'Brand: Hario\r\nPower: AC 220V\r\nPower Consumption: 150W\r\nHopper Capacity: Maximum 8oz(240g)\r\nDimensi: 30x13.5x39cm\r\nCable Length: 1.3m\r\nConial: Stainless steel\r\nWeight: 2.4kg', 'v60.jpg'),
(19, 'Vd-02w dripper', 'Filter', 100000, 200, 'Material: Japan Plastic\r\nBrand: Hario\r\nDimensi: 13.5x11.5x10cm', 'dripper.jpg'),
(20, 'Dripper v-60', 'Filter', 450000, 200, 'Material: Japan Plastic\r\nBrand: Hario\r\nSendok kopi plastik ukuran 12gr', 'dripper1.jpg'),
(21, 'Aeropress', 'Alat_Seduh', 590000, 200, 'Material BPA free, food grade\r\nMade in USA', 'aeropress.jpg'),
(22, 'Abledisk filter', 'Filter', 220000, 200, 'Brand: Able\r\nType: Standard\r\nMaterial: Stainless Stell\r\nDiameter: 6.3cm\r\nMade In USA', 'disk.jpg'),
(23, 'Dripscale vst-2000b', 'Alat_Seduh', 1200000, 200, 'Brand: Hario\r\nType: Coffee Drip Scale\r\nMaterial: ABS Resin\r\nDimensi: 19x12x2.85\r\nBattery: 2pcs AAA\r\nAuto-off after 5 minutes', 'scale.jpg'),
(24, 'Puncak Sari(1kg)', 'Kopi_1kg', 220000, 200, 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari_1kg.jpg'),
(25, 'Luna(1kg)', 'Kopi_1kg', 300000, 200, 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna_1kg.jpg'),
(26, 'Balok sari(1kg)', 'Kopi_1kg', 265000, 200, 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari_1kg.jpg'),
(27, 'Smooth Op(1kg)', 'Kopi_1kg', 300000, 200, 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth_1kg.jpg'),
(28, 'Toraja(1kg)', 'Kopi_1kg', 280000, 200, 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja_1kg.jpg'),
(29, 'Solok(1kg)', 'Kopi_1kg', 280000, 200, 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok_1kg.jpeg'),
(30, 'Solok', 'Kopi', 280000, 200, 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok.png'),
(31, 'Kerinci(1kg)', 'Kopi_1kg', 275000, 200, 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci_1kg.jpg'),
(32, 'Gayo(1kg)', 'Kopi_1kg', 285000, 200, 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo_1kg.jpg'),
(33, 'Bali Natural(1kg)', 'Kopi_1kg', 290000, 200, 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'bali_natural_1kg.jpg'),
(34, 'Bali Honey(1kg)', 'Kopi_1kg', 280000, 200, 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'bali_honey_1kg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(16) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_title` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` int(9) NOT NULL,
  `pro_stock` int(3) NOT NULL,
  `pro_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_title`, `pro_description`, `pro_price`, `pro_stock`, `pro_image`) VALUES
(1, 'PC', 'Dell', 'Dell INSPIRON N5111\r\nRAM 2GB\r\nCORE i5\r\nAVG 1Gb\r\nCPU 3000', 25000, 3, 'Dell_Computer.jpg'),
(2, 'Laptop', 'Toshiba', 'RAM 1GB\r\nCORE i7\r\nAVG 2Gb\r\nCPU 3500', 50000, 5, 'prod_satA205-OFTWH_300-01.jpg'),
(3, 'PC', 'HP', 'HP 300 \r\nram 2 gb\r\navg 2\r\ncpu 3500\r\ndvd\r\ncam 16 px\r\n', 75000, 1, 'images.jpg'),
(4, 'Mobile', 'HTC sensation XL', 'htc', 45000, 1, 'htc_sensation_xl_28.jpg'),
(5, 'Mobile', 'Iphone 6', 'Iphone 6', 46000, 1, 'aabffb1c6425f95fd26db8595ee28c0e_png.jpg');

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
(20, 'bayu.tirta', '12345678', 'bayu.tirta', NULL, NULL, 'tejotejoejo@gmail.com', NULL, '089514055817', 0);

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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

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
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_pho` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id_us` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
