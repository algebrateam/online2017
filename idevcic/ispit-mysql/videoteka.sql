-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2018 at 11:04 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Kreiranje baze: `videoteka`
--
CREATE DATABASE IF NOT EXISTS `videoteka` DEFAULT CHARACTER SET latin2 COLLATE latin2_croatian_ci;
USE `videoteka`;

-- --------------------------------------------------------

--
-- Kreiranje tablice `clanovi`
--

DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE `clanovi` (
  `sifra` int(11) NOT NULL,
  `ime` varchar(300) COLLATE latin2_croatian_ci NOT NULL,
  `prezime` varchar(300) COLLATE latin2_croatian_ci NOT NULL,
  `email` varchar(500) COLLATE latin2_croatian_ci NOT NULL,
  `telefon` varchar(300) COLLATE latin2_croatian_ci NOT NULL,
  `datum_registracije` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- Dodavanje sadrzaja u tablicu `clanovi`
--

INSERT INTO `clanovi` (`sifra`, `ime`, `prezime`, `email`, `telefon`, `datum_registracije`) VALUES
(1, 'Mišo', 'Mišić', 'm.misic@gmail.com', '0955523422', '2017-10-12 08:06:00'),
(2, 'Lana', 'Agić', 'agic.lana@fer.hr', '099453234', '2017-08-09 10:32:13'),
(3, 'Saša', 'Lovrak', 'sweets97@yahoo.com', '01322782', '2017-05-22 15:23:43');

-- --------------------------------------------------------

--
-- Kreiranje tablice `filmovi`
--

DROP TABLE IF EXISTS `filmovi`;
CREATE TABLE `filmovi` (
  `sifra_filma` int(11) NOT NULL,
  `naslov` varchar(300) COLLATE latin2_croatian_ci NOT NULL,
  `godina` int(4) COLLATE latin2_croatian_ci NOT NULL,
  `medij` varchar(300) COLLATE latin2_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- Dodavanje sadrzaja u tablicu `filmovi`
--

INSERT INTO `filmovi` (`sifra_filma`, `naslov`, `godina`, `medij`) VALUES
(1, 'The Prestige', 2006, 'DVD'),
(2, 'Tinker Tailor Soldier Spy', 2011, 'DVD'),
(3, 'Footloose', 1984, 'VHS');

-- --------------------------------------------------------

--
-- Kreiranje tablice `evidencija`
--

DROP TABLE IF EXISTS `evidencija`;
CREATE TABLE `evidencija` (
  `sifra` int(11) NOT NULL,
  `sifra_filma` int(11) NOT NULL,
  `posudjen` datetime NOT NULL,
  `vracen` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

--
-- RELATIONS FOR TABLE `evidencija`:
--   `sifra_filma`
--       `filmovi` -> `sifra_filma`
--   `sifra`
--       `clanovi` -> `sifra`
--

--
-- Dodavanje sadrzaja u tablicu `evidencija`
--

INSERT INTO `evidencija` (`sifra`, `sifra_filma`, `posudjen`, `vracen`) VALUES
(1, 2, '2018-01-08 13:39:26', NULL),
(2, 3, '2018-01-03 16:51:35', NULL),
(3, 2, '2017-12-12 13:50:35', '2017-12-28 14:42:43');

--
-- Definiranje primarnog kljuca za tablicu `clanovi`
--
ALTER TABLE `clanovi`
  ADD PRIMARY KEY (`sifra`);

--
-- Definiranje primarnog kljuca za tablicu `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`sifra_filma`);

--
-- Definiranje visestrukog primarnog kljuca za tablicu `evidencija`
--
ALTER TABLE `evidencija`
  ADD PRIMARY KEY (`sifra`,`sifra_filma`,`posudjen`),
  ADD KEY `sifra_filma` (`sifra_filma`);

--
-- Postavljanje ogranicenja - stranih kljuceva - za tablicu `evidencija`
--
ALTER TABLE `evidencija`
  ADD CONSTRAINT `evidencija_ibfk_1` FOREIGN KEY (`sifra_filma`) REFERENCES `filmovi` (`sifra_filma`),
  ADD CONSTRAINT `evidencija_ibfk_2` FOREIGN KEY (`sifra`) REFERENCES `clanovi` (`sifra`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
