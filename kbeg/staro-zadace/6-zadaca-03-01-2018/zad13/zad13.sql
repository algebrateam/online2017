-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 10:23 PM
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
-- Database: `zad13`
--

-- --------------------------------------------------------

--
-- Table structure for table `cjenik`
--

CREATE TABLE `cjenik` (
  `sifra_cjenika` int(11) NOT NULL,
  `kategorija` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cijena` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clan`
--

CREATE TABLE `clan` (
  `clanski_broj` int(11) NOT NULL,
  `ime_clana` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `sifra_filma` int(11) NOT NULL,
  `naziv_filma` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sifra_zanra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posudba`
--

CREATE TABLE `posudba` (
  `clanski_broj` int(11) NOT NULL,
  `sifra_filma` int(11) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `datum_povrata` date NOT NULL,
  `sifra_cjenika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `sifra_zanra` int(11) NOT NULL,
  `naziv_zanra` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cjenik`
--
ALTER TABLE `cjenik`
  ADD PRIMARY KEY (`sifra_cjenika`);

--
-- Indexes for table `clan`
--
ALTER TABLE `clan`
  ADD PRIMARY KEY (`clanski_broj`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`sifra_filma`),
  ADD KEY `sifra_zanra` (`sifra_zanra`);

--
-- Indexes for table `posudba`
--
ALTER TABLE `posudba`
  ADD KEY `clanski_broj` (`clanski_broj`),
  ADD KEY `sifra_filma` (`sifra_filma`),
  ADD KEY `sifra_cjenika` (`sifra_cjenika`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`sifra_zanra`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cjenik`
--
ALTER TABLE `cjenik`
  MODIFY `sifra_cjenika` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clan`
--
ALTER TABLE `clan`
  MODIFY `clanski_broj` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `sifra_filma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `sifra_zanra` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`sifra_zanra`) REFERENCES `zanr` (`sifra_zanra`) ON UPDATE CASCADE;

--
-- Constraints for table `posudba`
--
ALTER TABLE `posudba`
  ADD CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`sifra_cjenika`) REFERENCES `cjenik` (`sifra_cjenika`) ON UPDATE CASCADE,
  ADD CONSTRAINT `posudba_ibfk_2` FOREIGN KEY (`clanski_broj`) REFERENCES `clan` (`clanski_broj`) ON UPDATE CASCADE,
  ADD CONSTRAINT `posudba_ibfk_3` FOREIGN KEY (`sifra_filma`) REFERENCES `film` (`sifra_filma`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
