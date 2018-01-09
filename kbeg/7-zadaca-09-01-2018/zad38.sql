SELECT DISTINCT stud.imeStud, stud.prezStud, ispit.ocjena FROM stud JOIN ispit
ON stud.mbrStud=ispit.mbrStud WHERE ocjena=3;