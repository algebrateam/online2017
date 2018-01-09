/*
INSERT INTO stud (imeStud,prezstud,pbrStan,slikaStud) VALUES ('xxxxyyyy','qqqqqwwwwww',31000,0);


DELETE FROM stud WHERE stud.mbrStud=1537;

*/
USE fakultet;
CREATE TABLE studmjesto
SELECT 
stud.mbrStud,
stud.imeStud,
stud.prezStud,
stud.pbrStan, 
mjesto.nazMjesto, 
mjesto.created_at,
mjesto.sifZupanija
FROM stud INNER JOIN mjesto
ON stud.pbrStan = mjesto.pbr
WHERE mjesto.sifZupanija=21
ORDER BY  stud.imeStud ASC,stud.pbrStan DESC
/*LIMIT 5,7*/;
