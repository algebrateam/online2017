SELECT 
concat(scumbag.Ime," ", scumbag.Prezime) AS scum,
DATEDIFF(NOW(),greskaizmladosti.datumposudbe) AS brojimdane,
naziv
FROM
albumi 
INNER JOIN greskaizmladosti ON albumi.ID                 =greskaizmladosti.sifAlbuma
INNER JOIN scumbag          ON greskaizmladosti.sifKolege=scumbag.ID
WHERE greskaizmladosti.datumvracanja IS NULL ;


UPDATE greskaizmladosti
SET greskaizmladosti.datumvracanja = NOW() 
WHERE greskaizmladosti.datumvracanja IS NULL;
