-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql310.epizy.com
-- Generation Time: Nov 09, 2022 at 05:40 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32945545_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `total_price` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_wa` int(14) NOT NULL,
  `method` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `total_products` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `total_price`, `name`, `no_wa`, `method`, `alamat`, `pesan`, `total_products`) VALUES
(137, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Secepatnya', ''),
(138, '300', 'siapjagoan2', 2147483647, 'Cash On Delivery', 'Jln Marsma R Iswahyudi No 92', 'Hi', ''),
(139, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Secepatnya', ''),
(140, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Secepatnya', ''),
(141, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Secepatnya', ''),
(142, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Secepatnya', ''),
(143, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Cash On Delivery', 'Jln Manggar Sari No 49', 'Hi', ''),
(144, '600', 'Kevin Pierre Rafael Sabran', 2147483647, 'Transfer Bank - Mandiri', 'Jln Marsma R Iswahyudi No 92', 'Secepatnya', ''),
(145, '950', 'dheni hidayat', 2147483647, 'Cash On Delivery', 'Batalan', 'Cod', ''),
(146, '602', 'ZephyrGtx', 81111111, 'Transfer Bank - Mandiri', 'oi', 'oi', ''),
(147, '300', 'Kevin Pierre Rafael Sabran', 2147483647, 'Transfer Bank - Mandiri', 'Jln Manggar Sari No 49', 'Hi', ''),
(148, '300', '', 0, 'Cash On Delivery', '', '', ''),
(149, '0', '', 0, 'Cash On Delivery', '', '', ''),
(150, '850', '', 0, 'Cash On Delivery', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(6, 'Seagram Vodka', '300.000', 'v1.png'),
(9, 'Imperial Black Whisky', '300.000', 'v2.png'),
(10, 'Chivas Regal 12', '850.000', 'v3.png'),
(11, 'Vibe Black Tea', '300.000', 'v5.png'),
(12, 'Vibe Lychee', '300.000', 'v6.png'),
(13, 'Black Label Whisky', '850.000', 'v8.png'),
(14, 'Red Label Whisky', '750.000', 'v9.png'),
(15, 'Wine Lambrusco Sababay', '350.000', 'v10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
