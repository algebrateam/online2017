-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 09:35 PM
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
-- Database: `zad12`
--

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id_proizvoda` int(11) NOT NULL,
  `naziv_proizvoda` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_skladista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id_proizvoda`, `naziv_proizvoda`, `id_skladista`) VALUES
(1, 'Proizvod 1', 1),
(2, 'Proizvod 2', 2);

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
-- Table structure for table `skladiste`
--

CREATE TABLE `skladiste` (
  `id_skladista` int(11) NOT NULL,
  `naziv_skladista` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skladiste`
--

INSERT INTO `skladiste` (`id_skladista`, `naziv_skladista`) VALUES
(1, 'skladiste 1'),
(2, 'skladiste 2');

-- --------------------------------------------------------

--
-- Table structure for table `voditelj`
--

CREATE TABLE `voditelj` (
  `id_skladista` int(11) NOT NULL,
  `id_radnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `voditelj`
--

INSERT INTO `voditelj` (`id_skladista`, `id_radnika`) VALUES
(1, 1),
(2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id_proizvoda`),
  ADD KEY `id_skladista` (`id_skladista`);

--
-- Indexes for table `radnik`
--
ALTER TABLE `radnik`
  ADD PRIMARY KEY (`id_radnika`);

--
-- Indexes for table `skladiste`
--
ALTER TABLE `skladiste`
  ADD PRIMARY KEY (`id_skladista`);

--
-- Indexes for table `voditelj`
--
ALTER TABLE `voditelj`
  ADD KEY `id_skladista` (`id_skladista`),
  ADD KEY `id_radnika` (`id_radnika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id_proizvoda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radnik`
--
ALTER TABLE `radnik`
  MODIFY `id_radnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skladiste`
--
ALTER TABLE `skladiste`
  MODIFY `id_skladista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD CONSTRAINT `proizvod_ibfk_1` FOREIGN KEY (`id_skladista`) REFERENCES `skladiste` (`id_skladista`) ON UPDATE CASCADE;

--
-- Constraints for table `voditelj`
--
ALTER TABLE `voditelj`
  ADD CONSTRAINT `voditelj_ibfk_1` FOREIGN KEY (`id_skladista`) REFERENCES `skladiste` (`id_skladista`) ON UPDATE CASCADE,
  ADD CONSTRAINT `voditelj_ibfk_2` FOREIGN KEY (`id_radnika`) REFERENCES `radnik` (`id_radnika`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
