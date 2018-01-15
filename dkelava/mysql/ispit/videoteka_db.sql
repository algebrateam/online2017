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
DROP DATABASE IF EXISTS `videoteka`;
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `videoteka`;

-- Dumping structure for table videoteka.cjenik
DROP TABLE IF EXISTS `cjenik`;
CREATE TABLE IF NOT EXISTS `cjenik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Kategorija` varchar(30) NOT NULL,
  `Cijena` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.cjenik: ~4 rows (approximately)
/*!40000 ALTER TABLE `cjenik` DISABLE KEYS */;
INSERT INTO `cjenik` (`id`, `Kategorija`, `Cijena`) VALUES
	(1, 'Novi filmovi DVD', 19.99),
	(2, 'Stari filmovi DVD', 15.99),
	(3, 'Novi filmovi VHS', 10.99),
	(4, 'Stari filmovi VHS', 7.99);
/*!40000 ALTER TABLE `cjenik` ENABLE KEYS */;

-- Dumping structure for table videoteka.clanovi
DROP TABLE IF EXISTS `clanovi`;
CREATE TABLE IF NOT EXISTS `clanovi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ime` varchar(30) NOT NULL,
  `Prezime` varchar(30) NOT NULL,
  `Adresa` varchar(60) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Datum_clanstva` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.clanovi: ~3 rows (approximately)
/*!40000 ALTER TABLE `clanovi` DISABLE KEYS */;
INSERT INTO `clanovi` (`id`, `Ime`, `Prezime`, `Adresa`, `Telefon`, `Datum_clanstva`) VALUES
	(1, 'John', 'Doe', 'Adresa 1', 'Telefon 1', '2018-01-11 14:17:03'),
	(2, 'Jane', 'Fonda', 'Adresa 2', 'Telefon 2', '2018-01-11 14:17:03'),
	(3, 'Steve', 'Smith', 'Adresa 3', 'Telefon 3', '2018-01-11 14:17:03');
/*!40000 ALTER TABLE `clanovi` ENABLE KEYS */;

-- Dumping structure for table videoteka.film
DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ime_filma` varchar(30) NOT NULL,
  `Reziser` varchar(60) NOT NULL,
  `Glavni_glumci` varchar(255) NOT NULL,
  `Godina_izdavanja` char(4) NOT NULL,
  `Kolicina_DVD` int(11) NOT NULL,
  `Kolicina_VHS` int(11) NOT NULL,
  `Sifra_zanra` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Sifra_zanra` (`Sifra_zanra`),
  CONSTRAINT `film_ibfk_1` FOREIGN KEY (`Sifra_zanra`) REFERENCES `zanr` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.film: ~3 rows (approximately)
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` (`id`, `Ime_filma`, `Reziser`, `Glavni_glumci`, `Godina_izdavanja`, `Kolicina_DVD`, `Kolicina_VHS`, `Sifra_zanra`) VALUES
	(1, 'Star wars - New hope', 'George Lucas', 'Harrison Ford, Mark Hamill, Carrie Fisher', '1978', 10, 15, 1),
	(2, 'Bijeg iz alcatraza', 'Don Siegel', 'Clint Eastwood', '1979', 10, 15, 3),
	(3, 'Orlovo gnijezdo', 'Brian G. Hutton', 'Richard Burton, Clint Eastwood', '1968', 6, 10, 2);
/*!40000 ALTER TABLE `film` ENABLE KEYS */;

-- Dumping structure for table videoteka.posudba
DROP TABLE IF EXISTS `posudba`;
CREATE TABLE IF NOT EXISTS `posudba` (
  `Clan_id` int(10) unsigned NOT NULL,
  `Film_id` int(10) unsigned NOT NULL,
  `Sifra_cjenika` int(10) unsigned NOT NULL,
  `Datum_posudbe` datetime NOT NULL,
  `Datum_vracanja` datetime DEFAULT NULL,
  PRIMARY KEY (`Clan_id`,`Film_id`,`Datum_posudbe`),
  KEY `Film_id` (`Film_id`),
  KEY `Sifra_cjenika` (`Sifra_cjenika`),
  CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`Clan_id`) REFERENCES `clanovi` (`id`),
  CONSTRAINT `posudba_ibfk_2` FOREIGN KEY (`Film_id`) REFERENCES `film` (`id`),
  CONSTRAINT `posudba_ibfk_3` FOREIGN KEY (`Sifra_cjenika`) REFERENCES `cjenik` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.posudba: ~3 rows (approximately)
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
INSERT INTO `posudba` (`Clan_id`, `Film_id`, `Sifra_cjenika`, `Datum_posudbe`, `Datum_vracanja`) VALUES
	(1, 1, 1, '2018-01-11 14:17:27', NULL),
	(2, 2, 2, '2018-01-11 14:17:27', '2018-01-11 14:17:40'),
	(3, 3, 3, '2018-01-11 14:17:27', NULL);
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

-- Dumping structure for table videoteka.zanr
DROP TABLE IF EXISTS `zanr`;
CREATE TABLE IF NOT EXISTS `zanr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Ime_zanra` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table videoteka.zanr: ~3 rows (approximately)
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
INSERT INTO `zanr` (`id`, `Ime_zanra`) VALUES
	(1, 'SCI FI'),
	(2, 'Action'),
	(3, 'Triler');
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
