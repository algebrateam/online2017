-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 09:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zad11`
--

-- --------------------------------------------------------

--
-- Table structure for table `odjel`
--

CREATE TABLE `odjel` (
  `id_odjela` int(11) NOT NULL,
  `naziv_odjela` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `odjel`
--

INSERT INTO `odjel` (`id_odjela`, `naziv_odjela`) VALUES
(1, 'Odjel 1'),
(2, 'Odjel 2');

-- --------------------------------------------------------

--
-- Table structure for table `radnik`
--

CREATE TABLE `radnik` (
  `id_radnika` int(11) NOT NULL,
  `ime_prezime` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `radnik`
--

INSERT INTO `radnik` (`id_radnika`, `ime_prezime`) VALUES
(1, 'Ana Anic'),
(2, 'Luka Lukic');

-- --------------------------------------------------------

--
-- Table structure for table `voditelj`
--

CREATE TABLE `voditelj` (
  `id_odjela` int(11) NOT NULL,
  `id_radnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voditelj`
--

INSERT INTO `voditelj` (`id_odjela`, `id_radnika`) VALUES
(1, 1),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `odjel`
--
ALTER TABLE `odjel`
  ADD PRIMARY KEY (`id_odjela`);

--
-- Indexes for table `radnik`
--
ALTER TABLE `radnik`
  ADD PRIMARY KEY (`id_radnika`);

--
-- Indexes for table `voditelj`
--
ALTER TABLE `voditelj`
  ADD KEY `id_odjela` (`id_odjela`),
  ADD KEY `id_radnika` (`id_radnika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odjel`
--
ALTER TABLE `odjel`
  MODIFY `id_odjela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radnik`
--
ALTER TABLE `radnik`
  MODIFY `id_radnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voditelj`
--
ALTER TABLE `voditelj`
  ADD CONSTRAINT `voditelj_ibfk_1` FOREIGN KEY (`id_odjela`) REFERENCES `odjel` (`id_odjela`) ON UPDATE CASCADE,
  ADD CONSTRAINT `voditelj_ibfk_2` FOREIGN KEY (`id_radnika`) REFERENCES `radnik` (`id_radnika`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
