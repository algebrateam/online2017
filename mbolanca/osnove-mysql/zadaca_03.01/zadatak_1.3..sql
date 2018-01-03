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


-- Dumping database structure for videoteka
CREATE DATABASE IF NOT EXISTS `videoteka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `videoteka`;

-- Dumping structure for table videoteka.cjenik
CREATE TABLE IF NOT EXISTS `cjenik` (
  `sifra` int(3) NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `cijena` decimal(10,0) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table videoteka.clanovi
CREATE TABLE IF NOT EXISTS `clanovi` (
  `sifra` int(9) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `kontakt` int(20) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table videoteka.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `sifra` int(5) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  `sifra_zanr` int(3) NOT NULL,
  PRIMARY KEY (`sifra`),
  KEY `sifra_zanr` (`sifra_zanr`),
  CONSTRAINT `filmovi_ibfk_1` FOREIGN KEY (`sifra_zanr`) REFERENCES `zanr` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table videoteka.posudba
CREATE TABLE IF NOT EXISTS `posudba` (
  `sifra_clan` int(9) NOT NULL,
  `sifra_filma` int(5) NOT NULL,
  `datum_posudbe` date NOT NULL,
  `datum_povrata` date DEFAULT NULL,
  `sifra_cjenika` int(3) NOT NULL,
  PRIMARY KEY (`sifra_clan`,`sifra_filma`,`datum_posudbe`) USING BTREE,
  KEY `sifra_filma` (`sifra_filma`),
  KEY `sifra_cjenika` (`sifra_cjenika`),
  CONSTRAINT `posudba_ibfk_1` FOREIGN KEY (`sifra_clan`) REFERENCES `clanovi` (`sifra`),
  CONSTRAINT `posudba_ibfk_2` FOREIGN KEY (`sifra_filma`) REFERENCES `filmovi` (`sifra`),
  CONSTRAINT `posudba_ibfk_3` FOREIGN KEY (`sifra_cjenika`) REFERENCES `cjenik` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table videoteka.zanr
CREATE TABLE IF NOT EXISTS `zanr` (
  `sifra` int(3) NOT NULL,
  `naziv` varchar(20) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
