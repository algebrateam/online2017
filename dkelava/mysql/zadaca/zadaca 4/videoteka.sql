/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 9, 2018
 */

CREATE DATABASE Videoteka;

CREATE TABLE Clanovi(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Ime varchar(30) NOT NULL,
Prezime varchar(30) NOT NULL,
Adresa varchar(30) NOT NULL,
Telefon varchar(30) NOT NULL,
Datum_clanstva DATETIME NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE Zanr (
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Ime_zanra varchar(30) NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE Filmovi(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Naziv varchar(60) NOT NULL,
Reziser varchar(60) NOT NULL,
Glavni_glumci varchar(255) NOT NULL,
Godina_izdavanja int NOT NULL,
Kolicina_DVD int NOT NULL,
Kolicina_VHS int NOT NULL,
Slika_naslovnice BLOB NOT NULL,
Sifra_zanra int UNSIGNED NOT NULL,
FOREIGN KEY(Sifra_zanra) REFERENCES zanr(id)
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;
