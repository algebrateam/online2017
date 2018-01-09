SELECT * FROM stud WHERE 
LEFT(imeStud,1) NOT IN ('a','e','i','o','u')
AND RIGHT(imeStud,1) NOT IN ('a','e','i','o','u');