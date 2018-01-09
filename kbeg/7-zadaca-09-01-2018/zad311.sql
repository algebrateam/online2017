SELECT * FROM stud 
WHERE LEFT(imeStud,1) IN ('a','e','i','o','u')
AND RIGHT(imeStud,1) IN ('a','e','i','o','u');