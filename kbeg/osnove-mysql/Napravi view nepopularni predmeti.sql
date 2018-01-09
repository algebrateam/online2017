DROP VIEW IF EXISTS `nepopularnipredmeti`;
CREATE VIEW `nepopularnipredmeti` AS 
SELECT 
pred.nazPred,
pred.sifPred
FROM pred
WHERE pred.sifPred NOT IN (
SELECT
DISTINCT ispit.sifPred
FROM ispit);