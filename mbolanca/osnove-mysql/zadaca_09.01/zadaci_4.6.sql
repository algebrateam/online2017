-- 4.1
USE upisi;
UPDATE tecajevi
SET naziv_tecaja='Osnove obrade teksta - MS Word'
WHERE naziv_tecaja='Microsoft Word';
#  or rjesenje-2
# WHERE sifra_tecaja='P02;'

-- 4.2
USE data_base;
UPDATE upisi
SET sifra_tecaja='O03'
WHERE sifra_polaznika=6;

-- 4.3
USE data_base;
DELETE FROM upisi 
WHERE sifra_tecaja='P01';

-- 4.4
CREATE DATABASE IF NOT EXISTS `fakultet`;
USE `fakultet`;
CREATE TABLE IF NOT EXISTS `predmetidvorane` (
  `sifPred` int(10) unsigned NOT NULL,
  `nazPred` char(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sifDvor` char(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `satnica` datetime(6) NOT NULL,
  PRIMARY KEY (`sifPred`,`nazPred`,`sifDvor`,`satnica`),
  KEY `FK_PredmetiDvorane_dvorana` (`sifDvor`),
  CONSTRAINT `FK_PredmetiDvorane_dvorana` FOREIGN KEY (`sifDvor`) REFERENCES `dvorana` (`oznDvorana`),
  CONSTRAINT `FK_PredmetiDvorane_pred` FOREIGN KEY (`sifPred`) REFERENCES `pred` (`sifPred`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;





