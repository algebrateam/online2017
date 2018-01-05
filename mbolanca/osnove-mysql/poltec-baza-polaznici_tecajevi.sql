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


-- Dumping database structure for poltec
CREATE DATABASE IF NOT EXISTS `poltec` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `poltec`;

-- Dumping structure for table poltec.polaznici
CREATE TABLE IF NOT EXISTS `polaznici` (
  `sifra` int(5) NOT NULL,
  `ime` varchar(50) NOT NULL,
  `mj_stan` varchar(20) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table poltec.polaznici_tecajevi
CREATE TABLE IF NOT EXISTS `polaznici_tecajevi` (
  `sifra_pol` int(5) NOT NULL,
  `sifra_tec` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra_pol`,`sifra_tec`),
  KEY `sifra_tec` (`sifra_tec`),
  CONSTRAINT `polaznici_tecajevi_ibfk_1` FOREIGN KEY (`sifra_pol`) REFERENCES `polaznici` (`sifra`),
  CONSTRAINT `polaznici_tecajevi_ibfk_2` FOREIGN KEY (`sifra_tec`) REFERENCES `tecajevi` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table poltec.tecajevi
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `sifra` varchar(3) NOT NULL,
  `naziv` varchar(120) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
