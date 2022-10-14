-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shub-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `SNo` int(11) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PDetail` varchar(255) DEFAULT NULL,
  `PImage` varchar(255) DEFAULT NULL,
  `Mrp` decimal(65,2) DEFAULT NULL,
  `Price` decimal(65,2) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Unit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PId` int(11) NOT NULL,
  `PName` varchar(255) NOT NULL,
  `PDetail` varchar(255) DEFAULT NULL,
  `PImage` varchar(255) DEFAULT NULL,
  `Mrp` decimal(65,2) DEFAULT NULL,
  `Price` decimal(65,2) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `PName`, `PDetail`, `PImage`, `Mrp`, `Price`, `Category`, `Quantity`) VALUES
(1, 'Apple iPhone 12 (128GB) - Blue', '15 cm (6.1-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras', 'img/Product/iphon12/1.jpg', '70900.00', '54490.00', 'Mobile', 1000),
(2, 'Apple iPhone 13 Pro (128GB) - Graphite', '15 cm (6.1-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; ', 'img/Product/iphon13/1.jpg', '119900.00', '106900.00', 'Mobile', 1000),
(3, 'Apple MacBook Pro 2022 with M2 chip', 'SUPERCHARGED BY M2 – The 13-inch MacBook Pro laptop is a portable powerhouse. Get more done faster with a next-generation 8-core CPU, 10-core GPU and up to 24GB of unified memory.\r\nUP TO 20 HOURS OF BATTERY LIFE – Go all day and into the night, thanks to ', 'img/Product/AppleMacBookPro/1.jpg', '149900.00', '140000.00', 'Laptop', 2000),
(4, 'ASUS ROG Strix G17 (2022)', 'Processor: AMD Ryzen 7 6800H Mobile Processor, 8-core, 16-thread, 20MB cache, Up to 4.7 GHz max boost\r\nPlay over 100 high-quality PC games, plus new and upcoming blockbusters on day one like Halo Infinite, Forza Horizon 5, and Age of Empires IV with your ', 'img/Product/ASUSROGStrixG17/1.jpg', '131990.00', '113203.00', 'Laptop', 2000),
(5, 'Red Tape Men s Cotton Crew Neck Sweatshirt', 'Sizes : S, M, L, XL, 2XL, 3XL, 4XL', 'img/Product/RedTapeMensCottonCrewNeckSweatshirt/1.jpg', '2799.00', '839.00', 'Fashion', 500),
(6, 'Wrangler Men Polo Shirt', 'Sizes : S, M, L, XL, 2XL, 3XL, 4XL', 'img/Product/WranglerMenPoloShirt/1.jpg', '1999.00', '599.00', 'Fashion', 20),
(7, 'Redmi Note 11 Pro + 5G', 'Superior performance with Snapdragon 695 5G. With 7 5G bands making the device future-ready.\r\n16.94cm(6.67) Super AMOLED display with 120Hz Refresh Rate protected by Corning Gorilla Glass 5\r\n67W in-box charger powers massive 5000mAh battery for full day’s', 'img/Product/RedmiNote11ProPlus5G/1.jpg', '24999.00', '19999.00', 'Mobile', 500),
(8, 'Mi Notebook Pro QHD', 'Processor: 11th Gen Intel Tiger Lake Core i5-11300H processor| Speed: 3.1 GHz(base) - 4.4 GHz(max) | 4 cores | 8 Threads | 8 MB Cache\r\nDisplay - 35.56 centimetres IPS QHD+ resolution (2560x1600) |16:10 aspect ratio, 100% sRGB,215 PPI, 1000:1 contrast rati', 'img/Product/MiNotebookPro/1.jpg', '69999.00', '54990.00', 'Laptop', 2000),
(9, 'OM SAI LATEST CREATION Women', 'Sizes : S, M, L, XL, 2XL, 3XL, 4XL', 'https://m.media-amazon.com/images/I/71p0J0qnydL._UL1500_.jpg', '399.00', '349.00', 'Fashion', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `grup`) VALUES
('shubham', '123456789', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
