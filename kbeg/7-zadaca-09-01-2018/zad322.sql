SELECT DISTINCT nastavnik.imeNastavnik, nastavnik.prezNastavnik 
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik=nastavnik.sifNastavnik
JOIN stud ON ispit.mbrStud=stud.mbrStud
JOIN mjesto m1 ON m1.pbr=stud.pbrStan
JOIN mjesto m2 ON m2.pbr=nastavnik.pbrStan
WHERE m1.sifZupanija=m2.sifZupanija;