START TRANSACTION;

SAVEPOINT ime1;
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (44444, 'vvv', 4444);
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (88888, 'bbb', 8888);

SAVEPOINT ime2;
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (6666, 'nnn', 9999);
INSERT INTO `fakultet`.`mjesto1` (`pbr`, `nazMjesto`, `sifZupanija`) 
VALUES (77777, 'mmm', 12121);

SELECT mjesto1.nazMjesto
INTO @mojvar 
FROM mjesto1 
WHERE mjesto1.pbr=77777 LIMIT 1;

SELECT * FROM mjesto1;
ROLLBACK TO ime2;

SELECT * FROM mjesto1;
ROLLBACK;
SELECT * FROM mjesto1;
COMMIT;
