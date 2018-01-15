-- 1.upit o članovima koji nisu vratili film
SELECT 
CONCAT(clanovi.ime,' ',clanovi.prezime) AS 'Ime i Prezime'
FROM clanovi
INNER JOIN posudba ON clanovi.id_clan=posudba.id_clan
WHERE posudba.dat_povrata IS NULL;

-- 2.upit o članovima koji nisu vratili film
SELECT 
CONCAT(clanovi.ime,' ',clanovi.prezime) AS 'Ime i Prezime',
filmovi.naziv AS 'Naziv filma'
FROM clanovi
INNER JOIN posudba ON clanovi.id_clan=posudba.id_clan
INNER JOIN filmovi ON filmovi.id_film=posudba.id_film
WHERE posudba.dat_povrata IS NULL;