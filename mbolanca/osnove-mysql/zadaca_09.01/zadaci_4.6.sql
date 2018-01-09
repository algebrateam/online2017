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
USE fakultet;
CREATE TABLE predmetiDvorane (
  sifPred INT(10) UNSIGNED NOT NULL,
  nazPred CHAR(60) NOT NULL COLLATE 'utf8_unicode_ci',
  sifDvor CHAR(5) NOT NULL COLLATE 'utf8_unicode_ci',
  satnica DATETIME(6) NOT NULL,
FOREIGN KEY (sifPred) REFERENCES pred(sifPred),  
FOREIGN KEY (nazPred) REFERENCES pred(nazPred),
FOREIGN KEY (sifDvor) REFERENCES dvorana(oznDvorana),
PRIMARY KEY (nazPred,sifDvor,satnica)); 
  
-- 4.5
USE fakultet;
CREATE VIEW v_nastavnici AS
SELECT 
CONCAT(nastavnik.imeNastavnik,' ',nastavnik.prezNastavnik) AS 'Ime i prezime', 
mjesto.nazMjesto
FROM nastavnik
INNER JOIN mjesto on nastavnik.pbrStan=mjesto.pbr;

-- 4.6
USE fakultet;
CREATE VIEW v_studentiOcjene AS 
SELECT 
CONCAT(stud.imeStud,' ',stud.prezStud) AS 'Student',
pred.nazPred,
ispit.ocjena,
CONCAT(nastavnik.imeNastavnik,' ',nastavnik.prezNastavnik) AS 'Profesor'
FROM ispit
INNER JOIN stud ON stud.mbrStud=ispit.mbrStud
INNER JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik
INNER JOIN pred ON ispit.sifPred=pred.sifPred;





