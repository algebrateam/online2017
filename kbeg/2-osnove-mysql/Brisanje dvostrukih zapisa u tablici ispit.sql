/*
Tablica ispit je imala NEKE dvostruke zapise redova
Da bi smo to rješili napravli smo novu tablicu ispit2
ispit2 sada ima podatke ali je izgubio kljuceve referencijalnog integriteta
sada brišemo podatke iz tablice ispit (prethidno backup!)
Nakon toga pretočimo podatke iz ispit2 u ispit
Nakon toga obrisemo tablicu ispit2
*/

SELECT * FROM stud INNER JOIN ispit ON stud.mbrStud=ispit.mbrStud;

SELECT * FROM stud WHERE mbrStud IN (SELECT DISTINCT mbrStud FROM ispit);

/*
Selektiranje samo studenata koji su grupirani mbrStud>sifPred>ocjena
*/
SELECT * FROM ispit GROUP BY mbrStud, sifPred, ocjena;

/*
Kreiranje nove tablice ispit2 sa svim dobrim podacima ali bez kljuceva
*/
CREATE TABLE ispit2 (SELECT * FROM ispit GROUP BY mbrStud, sifPred, ocjena);

/*
pretakanje podataka iz ispit2 u ispit
*/
INSERT INTO ispit (SELECT * FROM ispit2);