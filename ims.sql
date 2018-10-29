-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 06:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `contact`, `comment`) VALUES
('aeshita', 2147483647, 'great management');

-- --------------------------------------------------------

--
-- Table structure for table `invinf`
--

CREATE TABLE `invinf` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `shipped` int(2) NOT NULL,
  `confirmed` int(2) NOT NULL,
  `remain` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invinf`
--

INSERT INTO `invinf` (`sno`, `name`, `shipped`, `confirmed`, `remain`) VALUES
(1, 'hoodie', 5, 8, 3),
(2, 'watch', 6, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sno`, `name`, `descr`, `image`) VALUES
(1, 'hoodie', 'A trendy hoodie to try on this winter . The best selection of soft fleece Hoodies', 'https://cdn.shopify.com/s/files/1/0714/1079/products/Tanacon_Orange_Hoodie_Front_Mockup_2048x.jpg?v=1525287221'),
(2, 'watch', ' The architects of time. TAG Heuer, luxury swiss watches', 'https://www.rolex.com/content/dam/rolex/catalog/watch-grid/m1/262/33/m126233-0018.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `stats` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`sno`, `name`, `comments`, `stats`) VALUES
(1, 'hoodie', 'A trendy hoodie to try on this winter . The best selection of soft fleece Hoodies', 'https://www.savespendsplurge.com/wp-content/uploads/Wardrobe-Pie-Percentage-Chart-Closet-Clothes.png'),
(2, 'watch', 'The architects of time. TAG Heuer, luxury swiss watches', 'https://assets.bwbx.io/images/users/iqjWHBFdfxIU/irZFk0WjJRHo/v1/-1x-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `name`, `price`) VALUES
(1, 'hoodie', 800),
(2, 'watch', 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`contact`);

--
-- Indexes for table `invinf`
--
ALTER TABLE `invinf`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `contact` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;

--
-- AUTO_INCREMENT for table `invinf`
--
ALTER TABLE `invinf`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invinf`
--
ALTER TABLE `invinf`
  ADD CONSTRAINT `invinf_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `product` (`sno`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `invinf` (`sno`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `product` (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
