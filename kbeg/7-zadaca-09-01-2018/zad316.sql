SELECT stud.imeStud, stud.prezStud,
m1.nazMjesto AS 'Mjesto rodjenja',
z1.nazZupanija AS 'Zupanija rodjenja',
m2.nazMjesto AS 'Mjesto boravka',
z2.nazZupanija AS 'Zupanija boravka'
FROM stud
JOIN mjesto m1 ON stud.pbrRod=m1.pbr
JOIN zupanija z1 ON m1.sifZupanija=z1.sifZupanija
JOIN mjesto m2 ON stud.pbrStan=m2.pbr
JOIN zupanija z2 ON m2.sifZupanija=z2.sifZupanija;