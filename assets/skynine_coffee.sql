-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 03:45 PM
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
-- Table structure for table `disc`
--

CREATE TABLE `disc` (
  `id_disc` int(5) NOT NULL,
  `jenis_disc` varchar(100) NOT NULL,
  `jum_disc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disc`
--

INSERT INTO `disc` (`id_disc`, `jenis_disc`, `jum_disc`) VALUES
(1, 'diskon 25%\r\nselamat ulang tahun :)', 0.75),
(2, 'diskon 50%\r\nulang tahun SkyNineCoffee', 0.5),
(3, 'diskon 15%', 0.85),
(4, 'diskon 35%\r\nkamu telah berbelanja lebih dari 2,500k', 0.65),
(5, 'nggak ada diskon', 1);

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
  `tag_pr` varchar(25) NOT NULL,
  `decs_pr` text NOT NULL,
  `img_pr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_pr`, `nama_pr`, `tipe_pr`, `harga_pr`, `stock_pr`, `tag_pr`, `decs_pr`, `img_pr`) VALUES
(1, 'Bali Honey', 'Kopi', 75000, 450, 'kopi_indo', 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'balihoney.png'),
(2, 'Bali Natural', 'Kopi', 75000, 643, 'kopi_indo', 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'balinatural.png'),
(3, 'Balok Sari', 'Kopi', 70000, 119, 'kopi_indo', 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari.png'),
(4, 'Ethiopia', 'Kopi', 90000, 50, 'sruput_coffee', 'CitrusFruit, Foral, Sugarcane, Smooth & Clean finish\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 2\r\nSweetness: 4', 'ethiopia.png'),
(5, 'Garut', 'Kopi', 80000, 76, 'kopi_indo', 'Orange Mouthfeel, Clean Aftertaste & Tamarind\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'garut.png'),
(6, 'Gayo', 'Kopi', 75000, 840, 'kopi_indo', 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo.png'),
(7, 'Kerinci', 'Kopi', 75000, 460, 'kopi_indo', 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci.png'),
(8, 'Kopsus(1kg)', 'Kopi_1kg', 180000, 999, 'kopi_luar_kiloan', 'Black Tea, Peanut Butter, Brown Sugarlike\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 2\r\nBody: 3\r\nSweetness: 3', 'kopsus_1kg.jpeg'),
(9, 'Luna', 'Kopi', 78000, 167, 'sruput_coffee', 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna.png'),
(10, 'Puncak Sari', 'Kopi', 60000, 460, 'kopi_indo', 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari.png'),
(11, 'Smooth Operator', 'Kopi', 78000, 466, 'kopikelas', 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth.png'),
(12, 'Toraja', 'Kopi', 75000, 168, 'kopi_indo', 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja.png'),
(13, 'Kenya', 'Kopi', 90000, 568, 'kopikelas', 'Orange Mouthfeel, Clean After Taste & Brown Sugar\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'kenya.jpeg'),
(14, 'Colombia', 'Kopi', 90000, 100, 'kopikelas', 'Chocolate, Honey like, Orange like. Medium Body, Medium Acidity, High Sweetness\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'colombia.jpeg'),
(15, 'Bali Kintamani-50kg', 'Biji_Kopi', 6000000, 200, 'biji_kopi_berkualitas', 'Natural\r\nType: Arabica', 'balikintamani.jpeg'),
(16, 'Paper Filter 100W', 'Filter', 85000, 200, 'filterdulubosq', 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper1.jpg'),
(17, 'Paper Filter 100M', 'Filter', 85000, 200, 'filterdulubosq', 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper.jpg'),
(18, 'V-60 coffee grinder', 'Alat_Seduh', 3300000, 200, 'bikin_kopi', 'Brand: Hario\r\nPower: AC 220V\r\nPower Consumption: 150W\r\nHopper Capacity: Maximum 8oz(240g)\r\nDimensi: 30x13.5x39cm\r\nCable Length: 1.3m\r\nConial: Stainless steel\r\nWeight: 2.4kg', 'v60.jpg'),
(19, 'Vd-02w dripper', 'Filter', 100000, 200, 'filterdulubosq', 'Material: Japan Plastic\r\nBrand: Hario\r\nDimensi: 13.5x11.5x10cm', 'dripper.jpg'),
(20, 'Dripper v-60', 'Filter', 450000, 200, 'filterdulubosq', 'Material: Japan Plastic\r\nBrand: Hario\r\nSendok kopi plastik ukuran 12gr', 'dripper1.jpg'),
(21, 'Aeropress', 'Alat_Seduh', 590000, 200, 'bikin_kopi', 'Material BPA free, food grade\r\nMade in USA', 'aeropress.jpg'),
(22, 'Abledisk filter', 'Filter', 220000, 200, 'filterdulubosq', 'Brand: Able\r\nType: Standard\r\nMaterial: Stainless Stell\r\nDiameter: 6.3cm\r\nMade In USA', 'disk.jpg'),
(23, 'Dripscale vst-2000b', 'Alat_Seduh', 1200000, 200, 'bikin_kopi', 'Brand: Hario\r\nType: Coffee Drip Scale\r\nMaterial: ABS Resin\r\nDimensi: 19x12x2.85\r\nBattery: 2pcs AAA\r\nAuto-off after 5 minutes', 'scale.jpg'),
(24, 'Puncak Sari(1kg)', 'Kopi_1kg', 220000, 200, 'kopi_kiloan_indo', 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari_1kg.jpg'),
(25, 'Luna(1kg)', 'Kopi_1kg', 300000, 200, 'kopi_luar_kiloan', 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna_1kg.jpg'),
(26, 'Balok sari(1kg)', 'Kopi_1kg', 265000, 200, 'kopi_kiloan_indo', 'Cocoa, Foral, Sugar Browning\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 3', 'baloksari_1kg.jpg'),
(27, 'Smooth Op(1kg)', 'Kopi_1kg', 300000, 200, 'kopi_luar_kiloan', 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth_1kg.jpg'),
(28, 'Toraja(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja_1kg.jpg'),
(29, 'Solok(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok_1kg.jpeg'),
(30, 'Solok', 'Kopi', 280000, 200, 'kopi_indo', 'Chocolate\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'solok.png'),
(31, 'Kerinci(1kg)', 'Kopi_1kg', 275000, 200, 'kopi_kiloan_indo', 'Green Aple, Medium Body, Long Aftertaste\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 4\r\nBody: 3\r\nSweetness: 4', 'kerinci_1kg.jpg'),
(32, 'Gayo(1kg)', 'Kopi_1kg', 285000, 200, 'kopi_kiloan_indo', 'Hazelnut, Musty, Foral\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 2', 'gayo_1kg.jpg'),
(33, 'Bali Natural(1kg)', 'Kopi_1kg', 290000, 200, 'kopi_kiloan_indo', 'Pineapple, Chocolate, Orange peel\r\nProcess: Natural\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 5', 'bali_natural_1kg.jpg'),
(34, 'Bali Honey(1kg)', 'Kopi_1kg', 280000, 200, 'kopi_kiloan_indo', 'Sweet Aromatics, Lemon, Black Tea\r\nProcess: Honey\r\nType: Arabica\r\nAcidity: 3\r\nBody: 3\r\nSweetness: 5', 'bali_honey_1kg.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_tr` int(5) NOT NULL,
  `id_us` int(5) NOT NULL,
  `id_disc` int(5) NOT NULL,
  `date_tr` datetime NOT NULL,
  `total_tr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_detail`
--

CREATE TABLE `trans_detail` (
  `id_td` int(5) NOT NULL,
  `id_tr` int(5) NOT NULL,
  `id_pr` int(5) NOT NULL,
  `nama_pr` varchar(19) NOT NULL,
  `harga_td` int(10) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_us` int(5) NOT NULL,
  `username_us` varchar(32) NOT NULL,
  `password_us` varchar(255) NOT NULL,
  `full_name_us` varchar(100) NOT NULL,
  `email_us` varchar(150) NOT NULL,
  `phone_num_us` varchar(14) NOT NULL,
  `img_us` text,
  `date_birth_us` date DEFAULT NULL,
  `address_us` varchar(255) DEFAULT NULL,
  `active` int(1) NOT NULL,
  `id_ug` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_us`, `username_us`, `password_us`, `full_name_us`, `email_us`, `phone_num_us`, `img_us`, `date_birth_us`, `address_us`, `active`, `id_ug`) VALUES
(3, 'skynine', 'skynine', 'skyninecoffee', 'skynine.coffee.id@gmail.com', '081517980622', 'S__5152788.jpg', '2018-08-17', 'Komplek BSD Sektor XI Ruko Boulevard Tekno Block A Nomer 3 Kota Tanggerang Selatan 15314, Setu, South Tangerang City, Banten 15310', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_ug` int(5) NOT NULL,
  `jenis_ug` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_ug`, `jenis_ug`) VALUES
(1, 'admin manager'),
(2, 'admin marketing'),
(3, 'admin pembukuan'),
(4, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disc`
--
ALTER TABLE `disc`
  ADD PRIMARY KEY (`id_disc`);

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
  ADD KEY `fk_id_us` (`id_us`),
  ADD KEY `fk_id_disc` (`id_disc`);

--
-- Indexes for table `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD PRIMARY KEY (`id_td`),
  ADD KEY `fk_id_tr` (`id_tr`),
  ADD KEY `fk_id_pr` (`id_pr`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_us`),
  ADD KEY `fk_id_ug` (`id_ug`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_ug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disc`
--
ALTER TABLE `disc`
  MODIFY `id_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_tr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trans_detail`
--
ALTER TABLE `trans_detail`
  MODIFY `id_td` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_us` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_ug` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_id_disc` FOREIGN KEY (`id_disc`) REFERENCES `disc` (`id_disc`),
  ADD CONSTRAINT `fk_id_us` FOREIGN KEY (`id_us`) REFERENCES `user` (`id_us`);

--
-- Constraints for table `trans_detail`
--
ALTER TABLE `trans_detail`
  ADD CONSTRAINT `fk_id_pr` FOREIGN KEY (`id_pr`) REFERENCES `product` (`id_pr`),
  ADD CONSTRAINT `fk_id_tr` FOREIGN KEY (`id_tr`) REFERENCES `transaksi` (`id_tr`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_ug` FOREIGN KEY (`id_ug`) REFERENCES `user_group` (`id_ug`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
