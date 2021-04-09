-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 04:20 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zakat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
('1199', '171011400421', '110299');

-- --------------------------------------------------------

--
-- Table structure for table `zakat`
--

CREATE TABLE `zakat` (
  `no` varchar(10) NOT NULL,
  `jenis_zakat` varchar(30) NOT NULL,
  `nominal` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zakat`
--

INSERT INTO `zakat` (`no`, `jenis_zakat`, `nominal`, `nama`, `no_hp`, `email`, `nama_bank`, `no_rekening`) VALUES
('01', 'Zakat Maal', '10000000', 'febryan', '08931034808', 'febryanboncos11@gmail.com', 'bca', '400421');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zakat`
--
ALTER TABLE `zakat`
  ADD PRIMARY KEY (`no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
