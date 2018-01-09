SELECT * FROM polaznici;
SELECT * FROM tecajevi;
SELECT * FROM polaznici_tecajevi;
SELECT 
polaznici.sifra, 
polaznici.ime, 
polaznici.mj_stan, 
tecajevi.sifra, 
tecajevi.naziv 
FROM
polaznici RIGHT JOIN polaznici_tecajevi ON (polaznici.sifra= polaznici_tecajevi.sifra_pol)
RIGHT JOIN tecajevi ON (polaznici_tecajevi.sifra_tec=tecajevi.sifra);
