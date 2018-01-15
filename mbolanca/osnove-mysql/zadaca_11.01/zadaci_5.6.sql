-- 5.1
SELECT 
CONCAT(stud.imeStud,' ',stud.prezStud) AS 'Student',
mjesto.nazMjesto
FROM stud
INNER JOIN mjesto on stud.pbrRod=mjesto.pbr
WHERE LEFT(stud.imeStud,1) IN ('f');

-- 5.2
SELECT 
CONCAT(nastavnik.imeNastavnik,' ',nastavnik.prezNastavnik) AS 'Profesor',
mjesto.nazMjesto
FROM nastavnik 
INNER JOIN mjesto ON nastavnik.pbrStan=mjesto.pbr
WHERE SUBSTRING(mjesto.nazMjesto,3,1) = ('z');

-- 5.3
SELECT 
CONCAT(stud.imeStud,' ',stud.prezStud) AS 'Student',
CONCAT(nastavnik.imeNastavnik,' ',nastavnik.prezNastavnik) AS 'Profesor'
FROM stud
INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud
INNER JOIN nastavnik ON ispit.sifNastavnik=nastavnik.sifNastavnik
WHERE SUBSTRING(stud.imeStud,5,1)=SUBSTRING(nastavnik.imeNastavnik,5,1) 
AND CHAR_LENGTH(stud.imeStud)>=5;

-- 5.4
SELECT *,
zupanija.nazZupanija
FROM zupanija
WHERE CHAR_LENGTH(zupanija.nazZupanija) BETWEEN 13 AND 20
HAVING zupanija.sifZupanija>0;

-- 5.5
SELECT 
CONCAT(stud.imeStud,' ',stud.prezStud) AS 'Studenti rodjeni u Svibnju'
FROM stud
WHERE MONTH(stud.datRodStud)=5;

-- 5.6
SELECT 
stud.imeStud,
stud.prezStud
FROM stud INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE DAY(ispit.datIspit) BETWEEN 10 AND 20;

-- 5.7
SELECT 
CONCAT(nastavnik.imeNastavnik,' ',nastavnik.prezNastavnik) AS 'Profesor',
m1.nazMjesto AS mjStanProf,
CONCAT(stud.imeStud,' ',stud.prezStud) AS 'Student',
m2.nazMjesto AS mjRodStud,
FROM nastavnik INNER JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
INNER JOIN mjesto m1 ON nastavnik.pbrStan=m1.pbr
INNER JOIN stud ON ispit.mbrStud=stud.mbrStud
INNER JOIN mjesto m2 ON stud.pbrRod=m2.pbr
WHERE MONTH(ispit.datIspit)=6 
AND stud.pbrRod=nastavnik.pbrStan;





