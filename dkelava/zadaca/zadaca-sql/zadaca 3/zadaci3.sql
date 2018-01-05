/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 5, 2018
 */


/*ZADATAK 3.2*/
SELECT stud.mbrStud, CONCAT(stud.imeStud, ' ', stud.prezStud) AS Ime_i_prezime FROM stud;

/*ZADATAK 3.3*/
SELECT DISTINCT stud.imeStud FROM stud ORDER BY stud.imeStud DESC;

/*ZADATAK 3.4*/
SELECT ispit.mbrStud FROM ispit WHERE sifPred = 146;

/*ZADATAK 3.5*/
SELECT nastavnik.imeNastavnik, nastavnik.prezNastavnik, (nastavnik.koef + 0.4)*800 AS placa FROM nastavnik;

/*ZADATAK 3.6*/
SELECT nastavnik.imeNastavnik, nastavnik.prezNastavnik, (nastavnik.koef + 0.4)*800 AS placa FROM nastavnik 
WHERE (nastavnik.koef + 0.4)*800<3500 OR (nastavnik.koef + 0.4)*800>8000;

/*ZADATAK 3.7*/
SELECT stud.imeStud, stud.prezStud FROM stud 
JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE ocjena=1 AND sifPred BETWEEN 220 AND 240;

/*ZADATAK 3.8*/
SELECT DISTINCT stud.imeStud, stud.prezStud, ispit.ocjena FROM stud JOIN ispit
ON stud.mbrStud=ispit.mbrStud WHERE ocjena=3;

/*ZADATAK 3.9*/
SELECT nazPred FROM pred
LEFT JOIN ispit ON pred.sifPred=ispit.sifPred
WHERE datIspit IS NULL ORDER BY nazPred;

/*ZADATAK 3.10 */
SELECT DISTINCT nazPred FROM pred
JOIN ispit ON pred.sifPred=ispit.sifPred;

/*ZADATAK 3.11*/
SELECT * FROM stud WHERE LEFT(imeStud,1) 
IN ('a','e','i','o','u')
AND RIGHT(imeStud,1) IN ('a','e','i','o','u');

/*ZADATAK 3.12*/
SELECT * FROM stud WHERE 
LEFT(imeStud,1) NOT IN ('a','e','i','o','u')
OR RIGHT(imeStud,1) NOT IN ('a','e','i','o','u');

/*ZADATAK 3.13*/
SELECT * FROM stud WHERE LEFT(imeStud,1) 
IN ('a','e','i','o','u')
OR RIGHT(imeStud,1) IN ('a','e','i','o','u');

/*ZADATAK 3.14*/
SELECT * FROM stud WHERE imeStud LIKE '%nk%'
OR prezStud LIKE '%nk%';

/*ZADATAK 3.15*/
SELECT imeStud, prezStud, ocjena, i.sifPred, nazPred
FROM ispit i
JOIN stud s ON i.mbrStud=s.mbrStud
JOIN pred p ON p.sifPred=i.sifPred;

/*ZADATAK 3.16*/
SELECT stud.imeStud, stud.prezStud,
m1.nazMjesto AS 'Mjesto rodjenja',
z1.nazZupanija AS 'Zupanija rodjenja',
m2.nazMjesto AS 'Mjesto boravka',
z2.nazZupanija AS 'Zupanija boravka'
FROM stud
JOIN mjesto m1 ON stud.pbrRod=m1.pbr
JOIN zupanija z1 ON m1.sifZupanija=z1.sifZupanija
JOIN mjesto m2 ON stud.pbrStan=m2.pbr
JOIN zupanija z2 ON m2.sifZupanija=z2.sifZupanija;

/*ZADATAK 3.17*/
SELECT pred.nazPred, orgjed.nazOrgjed FROM pred
JOIN orgjed ON pred.sifOrgjed=orgjed.sifOrgjed
WHERE pred.upisanoStud > 20;

/*ZADATAK 3.18*/
SELECT DISTINCT mjesto.nazMjesto FROM mjesto
JOIN stud ON stud.pbrStan=mjesto.pbr;

/*ZADATAK 3.19*/
SELECT DISTINCT mjesto.nazMjesto FROM mjesto
JOIN stud ON stud.pbrStan=mjesto.pbr
WHERE stud.pbrStan=stud.pbrRod;

/*ZADATAK 3.20*/
/* NE POSTOJI TABLICA PO KOJOJ SU POVEZANI KOLEGIJI I DVORANE*/
