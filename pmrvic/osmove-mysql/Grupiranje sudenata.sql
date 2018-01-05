SELECT * FROM fakultet.stud ORDER BY stud.pbrStan DESC;

SELECT * FROM fakultet.stud GROUP BY pbrStan ORDER BY stud.pbrStan DESC;
-- 3.2
SELECT count(stud.imeStud), stud.pbrStan AS Broj_studenata_u_mjestu 
FROM fakultet.stud GROUP BY pbrStan ORDER BY stud.pbrStan DESC;

/* 3.2 */
SELECT MIN(stud.mbrStud), stud.pbrStan AS Broj_studenata_u_mjestu 
FROM fakultet.stud GROUP BY pbrStan ORDER BY stud.pbrStan DESC;

# 3.2
SELECT MIN(stud.mbrStud), stud.pbrStan AS Broj_studenata_u_mjestu 
FROM fakultet.stud GROUP BY pbrStan ORDER BY stud.pbrStan DESC LIMIT 2,3 ;