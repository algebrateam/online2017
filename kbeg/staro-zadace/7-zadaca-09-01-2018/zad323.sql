SELECT imeStud,prezStud
FROM stud
JOIN mjesto m1 on stud.pbrRod = m1.pbr
JOIN mjesto m2 on stud.pbrStan = m2.pbr
WHERE stud.pbrRod <> stud.pbrStan
AND m1.sifZupanija = m2.sifZupanija;