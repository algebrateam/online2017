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


-- Dumping database structure for trgovina
CREATE DATABASE IF NOT EXISTS `trgovina` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `trgovina`;

-- Dumping structure for table trgovina.proizvodi
CREATE TABLE IF NOT EXISTS `proizvodi` (
  `sifra` int(3) NOT NULL,
  `naziv` varchar(120) NOT NULL,
  `sifra_skl` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra`),
  KEY `sifra_skl` (`sifra_skl`),
  CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`sifra_skl`) REFERENCES `skladista` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table trgovina.radnici
CREATE TABLE IF NOT EXISTS `radnici` (
  `sifra` int(3) NOT NULL,
  `ime` varchar(120) NOT NULL,
  `sifra_skl` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra`),
  KEY `sifra_skl` (`sifra_skl`),
  CONSTRAINT `radnici_ibfk_1` FOREIGN KEY (`sifra_skl`) REFERENCES `skladista` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table trgovina.skladista
CREATE TABLE IF NOT EXISTS `skladista` (
  `sifra` varchar(3) NOT NULL,
  `naziv` varchar(120) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table trgovina.voditelji
CREATE TABLE IF NOT EXISTS `voditelji` (
  `sifra_radnika` int(3) NOT NULL,
  `sifra_skl` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra_radnika`,`sifra_skl`),
  KEY `sifra_skl` (`sifra_skl`),
  CONSTRAINT `voditelji_ibfk_1` FOREIGN KEY (`sifra_radnika`) REFERENCES `radnici` (`sifra`),
  CONSTRAINT `voditelji_ibfk_2` FOREIGN KEY (`sifra_skl`) REFERENCES `skladista` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
