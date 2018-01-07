-- 4.1
USE upisi;
UPDATE tecajevi
SET naziv_tecaja='Osnove obrade teksta - MS Word'
WHERE naziv_tecaja='Microsoft Word';
#  or rjesenje-2
# WHERE sifra_tecaja='P02;'

-- 4.2
USE data_base;
UPDATE upisi
SET sifra_tecaja='O03'
WHERE sifra_polaznika=6;

-- 4.3
USE data_base;
DELETE FROM upisi 
WHERE sifra_tecaja='P01';



