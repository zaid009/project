-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 05:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shoppping_cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Id`, `Name`, `Email`, `Password`) VALUES
(2, 'admin', 'admin@gmail.com', '$2y$10$H73za6MZFFhldY.uTAbfZObN8LrY6WxvEADUskPtDkWbIP07VuRTO'),
(3, 'Rabi', 'Rabi@gmail.com', '$2y$10$vsn0T3pQBO.Ji9nmk5G.POR6Q33ovE7cmQnlbT73nriUsml6/XUrK'),
(5, 'Hamza', 'Hamza@gmail.com', '$2y$10$HVZTMoYKzoqD.gs65Y5xIOcC4141d10ocWfqs8OwJuWmPgIC2RhsO'),
(6, 'Abdullah', 'Abdullah@gmail.com', '$2y$10$GxOzzP3VuDx0rpqkDB38uONMeGN8p4T0qb2KpNEGLCsYslZ8p.Y6i');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(2, 'Saad', 'Saad@gmail.com', 'oidsrdgtfrldsgtil', 'oeierithpoidrsshtidgtfoisfpoisdhlgfishlf');

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE `product_detail` (
  `Id` int(11) NOT NULL,
  `Product_id` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `pdetails` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_detail`
--

INSERT INTO `product_detail` (`Id`, `Product_id`, `pname`, `pimage`, `pprice`, `pdetails`) VALUES
(1, '0735887', 'Stationary Box', 'stationarybox.jpg', 'PKR: 1500', 'We have one of the best complete stationary box which includes pencils ,eraser, sharpner ,scale and markers. '),
(2, '0745043', 'Leather Wallet ', 'wallet.jpg', 'PKR: 999', 'Pure leather wallet with wide range of shades.You can order us via our website.'),
(3, '0745370', 'Barbie Doll', 'doll.jpg', 'PKR: 500', 'A cute barbie doll for baby girls. You can order us for your once.'),
(4, '0757434', 'Pure Leather Purse', 'purse.jpg', 'PKR: 1200', 'Genuine 100% leather purse for ladies.\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`Id`, `Name`, `Email`, `Password`, `Cpassword`) VALUES
(1, 'Rabi', 'rabi@gmail.com', '$2y$10$30rdjhcanic4tDJo4hkdFuHMcbk1m2Lr1AC3eg9SLqmbvvZ3xV.4e', '$2y$10$60RjwyZ/K7.jCiZ4A.2dyOI1lFjndPCppTfgZb6iqdL3U632KzVUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product_detail`
--
ALTER TABLE `product_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_detail`
--
ALTER TABLE `product_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
