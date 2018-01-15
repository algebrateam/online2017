-- U datoteci "videoteka-kbeg.sql" nalazi se:
-- Kreiranje baze podataka i unos podataka
-- SQL upit koji daje popis imena i prezimena svih članova koji nisu vratili film
-- Proširen SQL upit tako da uz imena i prezimena članova vrati i naziv filma koji nije vraćen

-- --------------------------------------------------------
-- Poslužitelj:                  127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Verzija:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for videoteka
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `videoteka`;

-- Dumping structure for table videoteka.clan
CREATE TABLE IF NOT EXISTS `clan` (
  `sifra_clana` int(11) NOT NULL AUTO_INCREMENT,
  `ime_clana` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezime_clana` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra_clana`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.clan: ~0 rows (approximately)
/*!40000 ALTER TABLE `clan` DISABLE KEYS */;
INSERT INTO `clan` (`sifra_clana`, `ime_clana`, `prezime_clana`) VALUES
	(1, 'Ana', 'Anic'),
	(2, 'Luka', 'Lukic'),
	(3, 'Iva', 'Ivic');
/*!40000 ALTER TABLE `clan` ENABLE KEYS */;

-- Dumping structure for table videoteka.film
CREATE TABLE IF NOT EXISTS `film` (
  `sifra_filma` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_filma` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra_filma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.film: ~0 rows (approximately)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`sifra_filma`, `naziv_filma`) VALUES
	(1, 'The Godfather'),
	(2, 'The Shawshank Redemption'),
	(3, 'Forrest Gump');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Dumping structure for table videoteka.posudba
CREATE TABLE IF NOT EXISTS `posudba` (
  `sifra_posudbe` int(11) NOT NULL AUTO_INCREMENT,
  `sifra_filma` int(11) NOT NULL,
  `sifra_clana` int(11) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `povrat` enum('DA','NE') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sifra_posudbe`),
  UNIQUE KEY `sifra_filma` (`sifra_filma`),
  KEY `sifra_clana` (`sifra_clana`),
  CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`sifra_clana`) REFERENCES `clan` (`sifra_clana`) ON UPDATE CASCADE,
  CONSTRAINT `posudba_ibfk_2` FOREIGN KEY (`sifra_filma`) REFERENCES `film` (`sifra_filma`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table videoteka.posudba: ~0 rows (approximately)
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
INSERT INTO `posudba` (`sifra_posudbe`, `sifra_filma`, `sifra_clana`, `datum_posudbe`, `povrat`) VALUES
	(1, 1, 1, '2018-01-10', 'NE'),
	(2, 2, 2, '2018-01-10', 'NE'),
	(3, 3, 3, '2018-01-09', 'DA');
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;


---------------------------------------------------------------------------------------------
-- SQL upit koji daje popis imena i prezimena svih članova koji nisu vratili film
SELECT CONCAT(clan.ime_clana," ",clan.prezime_clana) AS "Ime i prezime"
FROM clan
INNER JOIN posudba ON clan.sifra_clana=posudba.sifra_clana
WHERE povrat="NE";

-- Proširen SQL upit tako da uz imena i prezimena članova vrati i naziv filma koji nije vraćen
SELECT 
CONCAT(clan.ime_clana," ",clan.prezime_clana) AS "Ime i prezime",
film.naziv_filma AS "Naziv filma koji nije vraćen"
FROM clan
INNER JOIN posudba ON clan.sifra_clana=posudba.sifra_clana
INNER JOIN film ON film.sifra_filma=posudba.sifra_filma
WHERE posudba.povrat="NE";
