 SELECT ispit.ocjena, 
-- FUNKCIJE MATH

 SQRT(ispit.ocjena) AS korijen, 
 POWER(ispit.ocjena,2) AS kvadrat, 
FLOOR(20+RAND()*26) randomni  -- od 20->45  razlika je 25, a niz počinje od 20 

 FROM ispit;
 
 -- FUNKCIJE TEXT

 SELECT nastavnik.prezNastavnik, 
LENGTH(nastavnik.prezNastavnik),
REPLACE(
  CONCAT(
    LEFT(nastavnik.imeNastavnik,1), 
	 LEFT(nastavnik.prezNastavnik,1)),'Ž','Z')
	 AS Inicijal 
FROM nastavnik;

-- Funkcije datum

SELECT ispit.datIspit, 
MONTH(ispit.datIspit) AS Mjesec,
DATE_ADD(ispit.datIspit, INTERVAL -3 MINUTE) ExtraMinute,
DATE_ADD(ispit.datIspit, INTERVAL 1 WEEK) ExtraWeek,
DATE_FORMAT(ispit.datIspit,'%Y**%M  a dan je %j')
 from ispit;
 
 -- zadatak 5.7 starna 72
SELECT 
nastavnik.imeNastavnik,
nastavnik.prezNastavnik,
nastavnik.pbrStan,
stud.imeStud,
stud.prezStud,
mjesto.nazMjesto
FROM nastavnik INNER JOIN ispit on ispit.sifNastavnik=nastavnik.sifNastavnik
INNER JOIN stud on ispit.mbrStud= stud.mbrStud
INNER JOIN mjesto on mjesto.pbr=stud.pbrRod
WHERE MONTH(ispit.datIspit)=6
LIMIT 5;
 