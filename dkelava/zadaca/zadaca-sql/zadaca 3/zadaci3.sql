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
SELECT stud.imeStud, stud.prezStud, ispit.ocjena FROM stud JOIN ispit
ON stud.mbrStud=ispit.mbrStud WHERE ocjena=3;

/*ZADATAK 3.9*/
SELECT pred.nazPred FROM pred WHERE pred.upisanoStud=0;

/*ZADATAK 3.10 */
