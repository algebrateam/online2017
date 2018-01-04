DROP VIEW IF EXISTS `nastavnice`;
CREATE  VIEW `nastavnice` AS 
SELECT mjesto.pbr, mjesto.nazMjesto, nastavnik.*  
FROM mjesto INNER JOIN nastavnik 
ON mjesto.pbr=nastavnik.pbrStan 
WHERE RIGHT(nastavnik.imeNastavnik,1) LIKE 'a'
ORDER BY mjesto.pbr ASC LIMIT 15 ;