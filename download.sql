-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2017 at 04:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `download`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_download`
--

CREATE TABLE `file_download` (
  `id_file` varchar(100) NOT NULL,
  `url_file` text NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `preview_file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_download`
--

INSERT INTO `file_download` (`id_file`, `url_file`, `nama_file`, `preview_file`) VALUES
('fdgfd', '0', 'dfgfd', ''),
('x123', 'https://github.com/wahyudev/bagikelompok/archive/master.zip', 'Aplikasi Bagi kelompok', 'aplikasi sederhanan untuk bagi kelompok secara acak');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `ip_address`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1'),
(24, '::1'),
(25, '::1'),
(26, '::1'),
(27, '::1'),
(28, '::1'),
(29, '::1'),
(30, '::1'),
(31, '::1'),
(32, '::1'),
(33, '::1'),
(34, '::1'),
(35, '::1'),
(36, '::1'),
(37, '::1'),
(38, '::1'),
(39, '::1'),
(40, '::1'),
(41, '::1'),
(42, '::1'),
(43, '::1'),
(44, '::1'),
(45, '::1'),
(46, '::1'),
(47, '::1'),
(48, '::1'),
(49, '::1'),
(50, '::1'),
(51, '::1'),
(52, '::1'),
(53, '::1'),
(54, '::1'),
(55, '::1'),
(56, '::1'),
(57, '::1'),
(58, '::1'),
(59, '::1'),
(60, '::1'),
(61, '::1'),
(62, '::1'),
(63, '::1'),
(64, '::1'),
(65, '::1'),
(66, '::1'),
(67, '::1'),
(68, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `pendownload`
--

CREATE TABLE `pendownload` (
  `id` int(11) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `file_download` varchar(40) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendownload`
--

INSERT INTO `pendownload` (`id`, `ip`, `file_download`, `ket`) VALUES
(1, '::1', 'x123', ''),
(2, '::1', 'x123', ''),
(3, '::1', 'x123', ''),
(4, '::1', 'x123', ''),
(5, '::1', 'x123', ''),
(6, '::1', 'x123', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_download`
--
ALTER TABLE `file_download`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendownload`
--
ALTER TABLE `pendownload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `pendownload`
--
ALTER TABLE `pendownload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
