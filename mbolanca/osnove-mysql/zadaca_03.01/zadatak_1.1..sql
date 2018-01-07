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


-- Dumping database structure for tvrtka
CREATE DATABASE IF NOT EXISTS `tvrtka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tvrtka`;

-- Dumping structure for table tvrtka.odjeli
CREATE TABLE IF NOT EXISTS `odjeli` (
  `sifra` varchar(3) NOT NULL,
  `naziv` varchar(120) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table tvrtka.sefovi
CREATE TABLE IF NOT EXISTS `sefovi` (
  `sifra_odjela` varchar(3) NOT NULL,
  `sifra_djel` int(3) NOT NULL,
  PRIMARY KEY (`sifra_odjela`,`sifra_djel`),
  KEY `sifra_djel` (`sifra_djel`),
  CONSTRAINT `sefovi_ibfk_1` FOREIGN KEY (`sifra_odjela`) REFERENCES `odjeli` (`sifra`),
  CONSTRAINT `sefovi_ibfk_2` FOREIGN KEY (`sifra_djel`) REFERENCES `zaposlenici` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table tvrtka.zaposlenici
CREATE TABLE IF NOT EXISTS `zaposlenici` (
  `sifra` int(5) NOT NULL,
  `ime` varchar(120) NOT NULL,
  `sifra_odjela` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
