-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
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

-- Dumping data for table poltec.polaznici: ~3 rows (approximately)
/*!40000 ALTER TABLE `polaznici` DISABLE KEYS */;
INSERT INTO `polaznici` (`sifra`, `ime`, `mj_stan`) VALUES
	(1, 'Ana Milic', 'Zagreb'),
	(2, 'Sanja Tarak', 'Split'),
	(3, 'Mladen Gork', 'Osijek'),
	(4, 'Ivana Matkic', 'Split');
/*!40000 ALTER TABLE `polaznici` ENABLE KEYS */;

-- Dumping structure for table poltec.polaznici_tecajevi
CREATE TABLE IF NOT EXISTS `polaznici_tecajevi` (
  `sifra_pol` int(5) NOT NULL,
  `sifra_tec` varchar(3) NOT NULL,
  PRIMARY KEY (`sifra_pol`,`sifra_tec`),
  KEY `sifra_tec` (`sifra_tec`),
  CONSTRAINT `polaznici_tecajevi_ibfk_1` FOREIGN KEY (`sifra_pol`) REFERENCES `polaznici` (`sifra`),
  CONSTRAINT `polaznici_tecajevi_ibfk_2` FOREIGN KEY (`sifra_tec`) REFERENCES `tecajevi` (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table poltec.polaznici_tecajevi: ~3 rows (approximately)
/*!40000 ALTER TABLE `polaznici_tecajevi` DISABLE KEYS */;
INSERT INTO `polaznici_tecajevi` (`sifra_pol`, `sifra_tec`) VALUES
	(1, 'P01'),
	(2, 'P02'),
	(3, 'D01');
/*!40000 ALTER TABLE `polaznici_tecajevi` ENABLE KEYS */;

-- Dumping structure for table poltec.tecajevi
CREATE TABLE IF NOT EXISTS `tecajevi` (
  `sifra` varchar(3) NOT NULL,
  `naziv` varchar(120) NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table poltec.tecajevi: ~4 rows (approximately)
/*!40000 ALTER TABLE `tecajevi` DISABLE KEYS */;
INSERT INTO `tecajevi` (`sifra`, `naziv`) VALUES
	('D01', 'SQL Osnove'),
	('D05', 'Osnove i teorija C++'),
	('P01', 'Osnove rada na PC racunalu'),
	('P02', 'Microsoft WOrd');
/*!40000 ALTER TABLE `tecajevi` ENABLE KEYS */;

-- Dumping structure for view poltec.v_polaznici_tecajevi
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `v_polaznici_tecajevi` (
	`polaznik_sifra` INT(5) NOT NULL,
	`ime` VARCHAR(50) NOT NULL COLLATE 'latin1_swedish_ci',
	`mj_stan` VARCHAR(20) NOT NULL COLLATE 'latin1_swedish_ci',
	`sifra` VARCHAR(3) NULL COLLATE 'latin1_swedish_ci',
	`naziv` VARCHAR(120) NULL COLLATE 'latin1_swedish_ci'
) ENGINE=MyISAM;

-- Dumping structure for view poltec.v_polaznici_tecajevi
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `v_polaznici_tecajevi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` VIEW `v_polaznici_tecajevi` AS SELECT 
polaznici.sifra AS polaznik_sifra, 
polaznici.ime, 
polaznici.mj_stan, 
tecajevi.sifra, 
tecajevi.naziv 
FROM
polaznici 
LEFT JOIN polaznici_tecajevi ON (polaznici.sifra= polaznici_tecajevi.sifra_pol)
LEFT JOIN tecajevi ON (polaznici_tecajevi.sifra_tec=tecajevi.sifra) ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
