-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 12:42 PM
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
-- Database: `cakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Birthday'),
(2, 'Weeding'),
(3, 'Custom');

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `divisi` varchar(45) NOT NULL,
  `telp` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`id`, `name`, `divisi`, `telp`, `email`, `address`, `image`) VALUES
(1, 'Kaylo Ardian Arkanda', 'Designer', '085748372635', 'admin@example.com', '                                                                                                        Jl. Kasturi Raya                                                                                                ', '1472204646_images3.jpg'),
(5, 'Fatih Nuurhalimah', 'Designer', '085771026214', 'secor.ristik21@gmail.com', '                                                                                                                                                            Jl. Cokrominoto                                                                                                                                                ', '1432228777_profil3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `chef_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `size` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `chef_id`, `categories_id`, `name`, `size`, `description`, `price`, `image`) VALUES
(1, 5, 1, 'Black Forest', 'Sedang', 'Lorem Ipsum is simply dummy text of the print', '150000', '1882253222_hbd2.jpeg'),
(3, 1, 1, 'Cakesty', 'Sedang', 'Lorem Ipsum is simply dummy text of the print', '350000', '787283074_hbd4.jpeg'),
(4, 5, 1, 'Cakes one', 'Besar', 'Lorem Ipsum is simply dummy text of the print', '150000', '673948375_hbd5.jpeg'),
(5, 1, 2, 'Cakes Edd', 'Sedang', 'Lorem Ipsum is simply dummy text of the print', '350000', '2021009275_wedding3.jpeg'),
(6, 1, 2, 'Cakes Air', 'Sedang', 'Lorem Ipsum is simply dummy text of the print', '255000', '1050608698_wedding5.jpeg'),
(7, 5, 2, 'Cake two', 'Sedang', 'Lorem Ipsum is simply dummy text of the print', '450000', '347472186_wedding1.jpeg'),
(8, 5, 3, 'Cake Character', 'Kecil', 'Lorem Ipsum is simply dummy text of the print', '450000', '787269824_cs4.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_chef1` (`chef_id`),
  ADD KEY `fk_product_categories1` (`categories_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_categories1` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_chef1` FOREIGN KEY (`chef_id`) REFERENCES `chef` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
