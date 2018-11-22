-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2018 at 03:36 AM
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
(8, 'Kopsus-1kg', 'Kopi', 180000, 999, 'Black Tea, Peanut Butter, Brown Sugarlike\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 2\r\nBody: 3\r\nSweetness: 3', 'kopsus.png'),
(9, 'Luna', 'Kopi', 78000, 167, 'Nutty, Choco, Tobacco\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'luna.png'),
(10, 'Puncak Sari', 'Kopi', 60000, 460, 'Roasted, Peanut, Dark Cocoa\r\nProcess: Natural\r\nType: Robusta\r\nAcidity: 2\r\nBody: 4\r\nSweetness: 3', 'puncaksari.png'),
(11, 'Smooth Operator', 'Kopi', 78000, 466, 'Caramel, Sweet Brown, Orange Peel Like\r\nProcess: Mixed\r\nType: Blend\r\nAcidity: 4\r\nBody: 2\r\nSweetness: 3', 'smooth.png'),
(12, 'Toraja', 'Kopi', 75000, 168, 'Chocolate, Yellow Watermelon\r\nProcess: Semiwash\r\nType: Arabica\r\nAcidity: 1\r\nBody: 4\r\nSweetness: 3', 'toraja.png'),
(13, 'Kenya', 'Kopi', 90000, 568, 'Orange Mouthfeel, Clean After Taste & Brown Sugar\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'kenya.jpeg'),
(14, 'Columbia', 'Kopi', 90000, 100, 'Chocolate, Honey like, Orange like. Medium Body, Medium Acidity, High Sweetness\r\nProcess: Fullwash\r\nType: Arabica\r\nAcidity: 3\r\nBody: 4\r\nSweetness: 3', 'colombia.jpeg'),
(15, 'Bali Kintamani-50kg', 'Biji_Kopi', 6000000, 200, 'Natural\r\nType: Arabica', 'balikintamani.jpeg'),
(16, 'Paper Filter 100W', 'Alat_Seduh', 85000, 200, 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper1.jpg'),
(17, 'Paper Filter 100M', 'Alat_Seduh', 85000, 200, 'Spesifikasi Produk:\r\n- Cocok untuk Hario/Tiamo V60 01\r\n- Kapasitas 1-2 cups\r\n- Isi per bungkus : 100 lembar\r\n- Made in Japan', 'hariopaper.jpg'),
(18, 'V-60 coffee grinder', 'Alat_Seduh', 3300000, 200, 'Brand: Hario\r\nPower: AC 220V\r\nPower Consumption: 150W\r\nHopper Capacity: Maximum 8oz(240g)\r\nDimensi: 30x13.5x39cm\r\nCable Length: 1.3m\r\nConial: Stainless steel\r\nWeight: 2.4kg', 'v60.jpg'),
(19, 'vd-02w dripper', 'Alat_Seduh', 100000, 200, 'Material: Japan Plastic\r\nBrand: Hario\r\nDimensi: 13.5x11.5x10cm', 'dripper.jpg'),
(20, 'dripper v-60', 'Alat_Seduh', 450000, 200, 'Material: Japan Plastic\r\nBrand: Hario\r\nSendok kopi plastik ukuran 12gr', 'dripper1.jpg'),
(21, 'Aeropress', 'Alat_Seduh', 590000, 200, 'Material BPA free, food grade\r\nMade in USA', 'aeropress.jpg'),
(22, 'abledisk filter', 'Alat_Seduh', 220000, 200, 'Brand: Able\r\nType: Standard\r\nMaterial: Stainless Stell\r\nDiameter: 6.3cm\r\nMade In USA', 'disk.jpg'),
(23, 'dripscale vst-2000b', 'Alat_Seduh', 1200000, 200, 'Brand: Hario\r\nType: Coffee Drip Scale\r\nMaterial: ABS Resin\r\nDimensi: 19x12x2.85\r\nBattery: 2pcs AAA\r\nAuto-off after 5 minutes', 'scale.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_pr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_pr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
