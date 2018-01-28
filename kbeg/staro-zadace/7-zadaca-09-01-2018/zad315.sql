SELECT imeStud, prezStud, ocjena, i.sifPred, nazPred
FROM ispit i
JOIN stud s ON i.mbrStud=s.mbrStud
JOIN pred p ON p.sifPred=i.sifPred;