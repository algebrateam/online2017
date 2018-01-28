SELECT 
ispit.mbrStud, 
count(*) broj_izlazaka, 
avg(ispit.ocjena) as prosjek ,
(0.8*avg(ispit.ocjena) + count(*)*0.2) AS RANK,
YEAR(ispit.datIspit) AS godina
FROM ispit 
WHERE ispit.ocjena>1
AND YEAR(ispit.datIspit)=2003
GROUP BY mbrstud
ORDER BY RANK DESC 
LIMIT 5 