-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 07:36 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(3, 'Chicken Nugget', 'C.jpg', 160.00),
(2, 'Beef Burger', 'B.png', 150.00),
(4, 'Sandwitch', '4.jpg', 120.00),
(1, 'Chicken Burger', 'A.jpg', 120.00),
(6, 'Combo Package 2', '6.jpg', 220.00),
(5, 'Combo Package 1', 'E.jpg', 220.00),
(7, 'Pizza', '7.jpg', 250.00),
(8, 'Combo Package 3', '8.png', 260.00),
(9, 'French Fry', '9.jpg', 100.00),
(10, 'Ice Cream', '10.jpg', 130.00),
(11, 'Cold Coffee', '11.jpg', 80.00),
(12, 'Milk Shake', '12.jpg', 100.00),
(13, 'Faluda', '13.jpg', 120.00),
(14, 'Soft Drinks ', '14.jpg', 50.00),
(15, 'Desert', '15.jpg', 160.00),
(16, 'Special Coffee', '16.jpg', 50.00),
(17, 'Students Platter', '17.jpg', 250.00),
(18, 'Burger & French Fry', '18.jpg', 220.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
