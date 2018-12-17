-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 07:44 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contoh_program`
--

CREATE TABLE `contoh_program` (
  `id` int(3) NOT NULL,
  `nilai` int(4) NOT NULL,
  `karakter` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contoh_program`
--

INSERT INTO `contoh_program` (`id`, `nilai`, `karakter`, `keterangan`) VALUES
(2, 200, '****************************************************************************************************', 'Besar'),
(3, 20, '****************************************', 'Kecil'),
(5, 7, '*******', 'Kecil'),
(6, 2, '**', 'Kecil'),
(7, 2, '**', 'Kecil'),
(8, 190, '**', 'Kecil'),
(9, 2, '**', 'Kecil'),
(10, 2, '**', 'Kecil'),
(11, 2, '**', 'Kecil'),
(12, 2, '**', 'Kecil'),
(13, 2, '**', 'Kecil'),
(14, 2, '**', 'Kecil'),
(16, 4, '****', 'Kecil'),
(17, 2, '**', 'Kecil'),
(18, 2, '**', 'Kecil'),
(19, 4, '****', 'Kecil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contoh_program`
--
ALTER TABLE `contoh_program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contoh_program`
--
ALTER TABLE `contoh_program`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
