SELECT 
polaznici.sifra,
polaznici.ime,
polaznici.mj_stan,
tecajevi.sifra,
tecajevi.naziv 
FROM 
polaznici
 LEFT JOIN polaznici_tecajevi2 ON (polaznici.sifra=polaznici_tecajevi2.sifra_pol)
  LEFT JOIN tecajevi ON (polaznici_tecajevi2.sifra_tec=tecajevi.sifra);