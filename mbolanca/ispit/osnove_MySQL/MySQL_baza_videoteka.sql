-- --------------------------------------------------------
-- Poslužitelj:                  127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Verzija:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for ispit_videoteka
DROP DATABASE IF EXISTS `ispit_videoteka`;
CREATE DATABASE IF NOT EXISTS `ispit_videoteka` /*!40100 DEFAULT CHARACTER SET latin2 COLLATE latin2_croatian_ci */;
USE `ispit_videoteka`;

-- Dumping structure for table ispit_videoteka.clanovi
DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id_clan` int(5) NOT NULL,
  `ime` char(20) COLLATE latin2_croatian_ci NOT NULL,
  `prezime` char(20) COLLATE latin2_croatian_ci NOT NULL,
  `kontakt` varchar(20) COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`id_clan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

-- Dumping data for table ispit_videoteka.clanovi: ~4 rows (approximately)
/*!40000 ALTER TABLE `clanovi` DISABLE KEYS */;
INSERT INTO `clanovi` (`id_clan`, `ime`, `prezime`, `kontakt`) VALUES
	(1, 'Ante', 'Antić', '+38591111111'),
	(2, 'Iva', 'Ivić', '0955556664'),
	(3, 'Ana', 'Anić', '+38511112211'),
	(4, 'Mijo', 'Mijić', '+3875556666');
/*!40000 ALTER TABLE `clanovi` ENABLE KEYS */;

-- Dumping structure for table ispit_videoteka.filmovi
DROP TABLE IF EXISTS `filmovi`;
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id_film` int(5) NOT NULL,
  `naziv` varchar(50) COLLATE latin2_croatian_ci NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

-- Dumping data for table ispit_videoteka.filmovi: ~5 rows (approximately)
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
INSERT INTO `filmovi` (`id_film`, `naziv`) VALUES
	(1, 'Matrix'),
	(2, 'Pulp Fiction'),
	(3, 'Dr. Strangelove'),
	(4, 'The Big Lebowski'),
	(5, 'The Truman Show');
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table ispit_videoteka.posudba
DROP TABLE IF EXISTS `posudba`;
CREATE TABLE IF NOT EXISTS `posudba` (
  `id_clan` int(5) NOT NULL,
  `id_film` int(5) NOT NULL,
  `dat_posudbe` datetime NOT NULL,
  `dat_povrata` datetime DEFAULT NULL,
  PRIMARY KEY (`id_clan`,`id_film`,`dat_posudbe`),
  KEY `FK_posudba_filmovi` (`id_film`),
  CONSTRAINT `FK_posudba_clanovi` FOREIGN KEY (`id_clan`) REFERENCES `clanovi` (`id_clan`),
  CONSTRAINT `FK_posudba_filmovi` FOREIGN KEY (`id_film`) REFERENCES `filmovi` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2 COLLATE=latin2_croatian_ci;

-- Dumping data for table ispit_videoteka.posudba: ~4 rows (approximately)
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
INSERT INTO `posudba` (`id_clan`, `id_film`, `dat_posudbe`, `dat_povrata`) VALUES
	(1, 3, '2018-01-10 00:00:00', NULL),
	(2, 5, '2018-01-10 00:00:00', NULL),
	(3, 2, '2018-01-09 00:00:00', '2018-01-10 00:00:00'),
	(4, 4, '2018-01-09 00:00:00', NULL);
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
