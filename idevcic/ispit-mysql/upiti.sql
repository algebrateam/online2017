
-- SQL upit koji ispisuje popis imena i prezimena svih članova koji nisu vratili film.


USE videoteka;
SELECT CONCAT(ime, '  ', prezime) AS 'Ime i prezime' FROM clanovi 
JOIN evidencija ON clanovi.sifra=evidencija.sifra
WHERE vracen IS NULL
ORDER BY prezime;

-- SQL upit koji uz imena i prezimena članova vraća i naziv filma koji nisu vratili.


USE videoteka;
SELECT CONCAT(ime, '  ', prezime) AS 'Ime i prezime', CONCAT(naslov, ' - ', godina) AS 'Naziv filma' FROM clanovi 
JOIN evidencija ON clanovi.sifra=evidencija.sifra JOIN filmovi ON filmovi.sifra_filma=evidencija.sifra_filma
WHERE vracen IS NULL
ORDER BY prezime;