SELECT
sifra
, ime
, prosjek
, ukupno
FROM(
SELECT
fakultet.nastavnik.sifNastavnik as sifra
,CONCAT(fakultet.nastavnik.imeNastavnik," ",fakultet.nastavnik.prezNastavnik) AS ime
, AVG(fakultet.ispit.ocjena) AS prosjek
, sum(fakultet.ispit.ocjena) AS ukupno
FROM fakultet.ispit inner join fakultet.nastavnik ON fakultet.ispit.sifNastavnik=fakultet.nastavnik.sifNastavnik
GROUP BY
fakultet.nastavnik.sifNastavnik, fakultet.nastavnik.imeNastavnik, fakultet.nastavnik.prezNastavnik
) AS prva
WHERE ukupno > 30 #ne broje se oni koji su dali manje od 10 petica
ORDER BY prosjek DESC
LIMIT 1