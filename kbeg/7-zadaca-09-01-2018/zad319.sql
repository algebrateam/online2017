SELECT DISTINCT mjesto.nazMjesto 
FROM mjesto
JOIN stud ON stud.pbrStan=mjesto.pbr
WHERE stud.pbrStan=stud.pbrRod;