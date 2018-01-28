SELECT 
mjesto.nazMjesto,
CONCAT(stud.imeStud,' ',stud.prezStud) AS ime_i_prezime,
v_top_studenti_2003.RANK 
FROM 
v_top_studenti_2003 INNER JOIN stud ON v_top_studenti_2003.mbrStud=stud.mbrStud
INNER JOIN mjesto ON stud.pbrStan = mjesto.pbr
;