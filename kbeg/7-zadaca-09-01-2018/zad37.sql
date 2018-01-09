SELECT stud.imeStud, stud.prezStud FROM stud 
JOIN ispit ON stud.mbrStud=ispit.mbrStud
WHERE ocjena=1 AND sifPred BETWEEN 220 AND 240;