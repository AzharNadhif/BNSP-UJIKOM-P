-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 08:12 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan`
--

CREATE TABLE `tbl_pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nik` int(11) NOT NULL,
  `nohp` int(20) NOT NULL,
  `tiketwisata` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(10) NOT NULL,
  `anak` int(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `potongan` int(20) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesan`
--

INSERT INTO `tbl_pemesan` (`id`, `nama`, `nik`, `nohp`, `tiketwisata`, `tanggal`, `jumlah`, `anak`, `harga`, `potongan`, `total`) VALUES
(8, 'heri', 32045673, 89523415, 'Museum Perjuangan', '2022-03-29', 3, 1, 25000, 25000, 50000),
(9, 'herci', 32045673, 891214214, 'Kebun Raya', '2022-02-16', 3, 1, 20000, 10000, 40000),
(11, 'udin', 32010042, 89631546, 'Museum Perjuangan', '2022-03-09', 4, 1, 25000, 25000, 75000),
(12, 'hehe', 34566812, 865214214, 'Museum Zoologi', '2022-03-07', 4, 1, 10000, 10000, 30000),
(13, 'sudung', 32010092, 8912147, 'Museum Zoologi', '2022-03-22', 3, 1, 10000, 10000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `id` int(11) NOT NULL,
  `tiketwisata` varchar(150) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tiket`
--

INSERT INTO `tbl_tiket` (`id`, `tiketwisata`, `harga`) VALUES
(1, 'Kebun Raya', 20000),
(2, 'Museum Zoologi', 10000),
(3, 'Museum Perjuangan', 25000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pemesan`
--
ALTER TABLE `tbl_pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
