SELECT
fakultet.nastavnik.sifNastavnik
,CONCAT(fakultet.nastavnik.imeNastavnik," ",fakultet.nastavnik.prezNastavnik)
, AVG(fakultet.ispit.ocjena) AS prosjek
, sum(fakultet.ispit.ocjena) AS ukupno
FROM fakultet.ispit inner join fakultet.nastavnik
ON fakultet.ispit.sifNastavnik=fakultet.nastavnik.sifNastavnik
GROUP BY sifNastavnik
HAVING ukupno > 30
ORDER BY prosjek DESC;
