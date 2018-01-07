CREATE DATABASE zaposlenici;

CREATE TABLE zaposlenici(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
ime varchar(255) NOT NULL,
prezime varchar(255) NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;


CREATE TABLE odjeli(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
ime varchar(255) NOT NULL,
lokacija varchar(255) NOT NULL
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE sefovi(
zaposlenik_id int UNSIGNED NOT NULL,
odjel_id int UNSIGNED NOT NULL,
PRIMARY KEY(zaposlenik_id, odjel_id), 
FOREIGN KEY (zaposlenik_id) REFERENCES zaposlenici(id),
FOREIGN KEY (odjel_id) REFERENCES odjeli(id)
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE zaposlenici_u_odjelu(
zaposlenik_id int UNSIGNED NOT NULL,
odjel_id int uNSIGNED NOT NULL,
PRIMARY KEY(zaposlenik_id, odjel_id),
FOREIGN KEY (zaposlenik_id) REFERENCES zaposlenici(id),
FOREIGN KEY (odjel_id) REFERENCES odjeli(id)
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;