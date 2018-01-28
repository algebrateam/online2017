SELECT imeNastavnik,prezNastavnik,
(koef+0.4)*800 AS `Placa`
FROM nastavnik
WHERE
((koef+0.4)*800<3500) OR ((koef+0.4)*800>8000);