-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 08:05 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maxyum`
--

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_order`
--

INSERT INTO `place_order` (`id`, `name`, `price`) VALUES
(3, 'ROAST BREAKFAST', 400),
(4, 'SEAFOOD STEW', 400),
(5, 'SMOKED CHICKEN CROQUETTE', 300),
(6, 'JERK CHICKEN SANDWICH', 320),
(7, 'PULLED PORK BURGER', 320),
(8, 'SEAFOOD RISOTTO', 420),
(9, 'HUEVOS RANCHEROS', 350),
(10, 'SLOW ROASTED FRIED CHICKEN', 480),
(11, 'CROQUE MONSIEUR', 350),
(12, 'CHOCOLATE NUTELLA TART', 280),
(13, 'BANANA PANCAKES', 320),
(14, 'S\'MORES CUSTARD CAKE', 270),
(15, 'ROASTED ICE TEA', 120),
(16, 'PINK LEMONADE', 120),
(17, 'FRESH ORANGE JUICE', 120),
(18, 'CHOCOLATE SHAKE', 190),
(19, 'AVOCADO MANGO CHIA', 220),
(20, 'MINERAL WATER', 40);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `mobile`, `address`, `username`, `password`) VALUES
(3, 'Vaman', 'nothing@gmail.com', 2147483647, 'Vasco', 'vaman', '764e43bf1870c1e0c8d117495fc609f1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
