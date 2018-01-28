SELECT * FROM stud 
WHERE LEFT(imeStud,1) IN ('a','e','i','o','u')
OR RIGHT(imeStud,1) IN ('a','e','i','o','u');