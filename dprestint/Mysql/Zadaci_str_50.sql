-- 3.2 - Ispišite matične brojeve te imena i prezimena svih studenata.Ime i prezime treba ispisati zajedno.
SELECT mbrStud,CONCAT(imeStud,' ', prezStud) FROM stud ;
-- 3.3 - Ipišite sva imena studenata tako da se ni jedno ne pojavi dva puta.Sortirajte imena silazno po abecedi.
SELECT DISTINCT imeStud FROM stud
ORDER BY imeStud DESC;
-- 3.4 - Ispišite matične brojeve studenata koji su položili ispit iz predmeta sa šifrom 146.
SELECT mbrStud FROM ispit
WHERE sifPred = 146;
 -- 3.5 - Ispišite imena i prezimena nastavnika te njihovu plaću dobivenu formulom: (koef + 0.4) * 800
 SELECT  imeNastavnik , prezNastavnik,(koef + 0.4) * 800 FROM nastavnik ;
 -- 3.6 - Ispišite imena i prezimenanastavnika iz prethodnog zadatka koji imaju plaću manju od 3,500 kn ili veću od 8000kn
SELECT  imeNastavnik , prezNastavnik,(koef + 0.4) * 800 FROM nastavnik WHERE ((koef + 0.4) * 800<3500) OR ((koef + 0.4) * 800>8000) ;
-- 3.7 - Ispišite imena i prezimena sudenata koji su barem jednom pali na ispitu iz predmeta sa šiframa od 220 do 240
SELECT imeStud,prezStud FROM stud,ispit WHERE stud.mbrStud = ispit.mbrStud AND ocjena = 1 AND (sifPred BETWEEN 220 AND 240) ;
-- 3.8 Ispišite imena i prezimena studenata koji su na nekom ispitu dobili 3
SELECT imeStud,prezStud FROM stud,ispit WHERE stud.mbrStud = ispit.mbrStud and ocjena  = 3 ;
-- 3.9 Ispišite nazive predmeta na koje nije izašao niti jedan student.
SELECT nazPred FROM pred LEFT JOIN ispit ON pred.sifPred = ispit.sifPred WHERE datIspit is NULL ;
-- 3.10 Ispišite nazive predmeta na koje je izašao barem jedan student .
SELECT DISTINCT nazPred FROM pred JOIN ispit ON ispit.sifPred = pred.sifPred ;
-- 3.11 - Ispiši sve podatke o studentima cije ime pocinje i zavrsava sa samoglasnikom 
SELECT * FROM stud WHERE  LEFT (imeStud,1) IN ('a','e','i','o','u') AND RIGHT (imeStud,1) IN ('a','e','i','o','u');
-- 3.12 Ispiši sve podatke o studentima cije ime pocinje i zavrsava bilo kojim znakom osim samoglasnikom
SELECT * FROM stud WHERE  LEFT (imeStud,1) NOT IN ('a','e','i','o','u') AND RIGHT (imeStud,1) NOT IN ('a','e','i','o','u');
-- 3.13 Ispiši sve podatke o studentima cije ime pocinje ili zavrsava samoglasnikom 
SELECT * FROM stud WHERE  LEFT (imeStud,1) IN ('a','e','i','o','u') OR RIGHT (imeStud,1) IN ('a','e','i','o','u');



 
  