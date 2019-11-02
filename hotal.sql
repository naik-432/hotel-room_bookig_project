-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 05:35 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotal`
--

-- --------------------------------------------------------

--
-- Table structure for table `addroom`
--

CREATE TABLE `addroom` (
  `addroom_id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `discription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addroom`
--

INSERT INTO `addroom` (`addroom_id`, `category`, `image`, `image1`, `image2`, `price`, `discription`) VALUES
(1, 1, 'banners/57172.jpeg', 'banners/57120.jpg', 'banners/89400.jpeg', '200', 'hello every one how are you?'),
(2, 1, 'banners/74121.jpg', 'banners/55359.jpg', 'banners/22656.jpg', '120', 'hello every one how are you?'),
(3, 1, 'banners/96577.jpg', 'banners/95569.jpg', 'banners/18041.jpg', '200', 'hello every one how are you?'),
(4, 1, 'banners/62385.jpg', 'banners/48776.jpg', 'banners/54579.png', '120', 'hello every one how are you?'),
(5, 2, 'banners/22008.png', 'banners/19659.jpeg', 'banners/32285.png', '200', 'hello every one how are you?'),
(6, 2, 'banners/42983.jpg', 'banners/37723.png', 'banners/98634.png', '200', 'hello every one how are you?'),
(7, 2, 'banners/99008.jpg', 'banners/27237.jpg', 'banners/72174.jpg', '200', 'hello every one how are you?'),
(8, 2, 'banners/90631.png', 'banners/50698.jpg', 'banners/44768.jpg', '120', 'hello every one');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `email`, `username`, `password`, `phone`) VALUES
(1, 'muhammad Aleem', 'mian.aleem151@gmail.com', 'admin', 'admin', '03071517293');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `categoryname`) VALUES
(1, 'single'),
(2, 'FAMILY ROOM'),
(3, 'STANDARD ROOM'),
(7, 'STANDARD ROOM'),
(8, 'LUXURYs ROOM'),
(9, 'DELUXE ROOM'),
(10, 'LUXURY ROOM');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` int(11) NOT NULL,
  `check1` date NOT NULL,
  `check2` varchar(50) NOT NULL,
  `totalday` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tprice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `check1`, `check2`, `totalday`, `id`, `tprice`) VALUES
(1, '2019-05-15', '2019-05-18', 3, 3, '600'),
(2, '2019-05-16', '2019-05-18', 2, 3, '400'),
(3, '2019-05-16', '2019-05-18', 2, 3, '400'),
(4, '2019-05-18', '2019-05-20', 2, 4, '240'),
(5, '2019-05-18', '2019-05-18', 0, 4, '0'),
(6, '2019-05-18', '2019-05-18', 0, 4, '0'),
(7, '2019-05-18', '2019-05-16', 2, 4, '240'),
(8, '0000-00-00', '', 0, 4, '0'),
(9, '2019-05-18', '2019-05-20', 2, 2, '240'),
(10, '2019-05-18', '2019-05-23', 5, 2, '600'),
(11, '2019-05-18', '2019-05-19', 1, 2, '120'),
(12, '2019-05-18', '2019-05-19', 1, 2, '120'),
(13, '2019-05-18', '2019-05-24', 6, 1, '1200'),
(14, '2019-05-21', '2019-05-25', 4, 5, '800');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addroom`
--
ALTER TABLE `addroom`
  ADD PRIMARY KEY (`addroom_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addroom`
--
ALTER TABLE `addroom`
  MODIFY `addroom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
