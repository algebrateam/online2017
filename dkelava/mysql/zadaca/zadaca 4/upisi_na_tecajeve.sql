/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 9, 2018
 */

CREATE DATABASE Upisi_na_tecajeve;

CREATE TABLE Polaznici(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Ime varchar(30) NOT NULL,
Prezime varchar(30) NOT NULL,
Mjesto_stanovanja varchar(30) NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE Tecajevi(
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
Ime_tecaja varchar(30) NOT NULL
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

CREATE TABLE Upisi(
Polaznik_id int UNSIGNED NOT NULL,
Tecaj_id int UNSIGNED NOT NULL,
PRIMARY KEY(Polaznik_id, Tecaj_id),
FOREIGN KEY(Polaznik_id) REFERENCES Polaznici(id),
FOREIGN KEY(Tecaj_id) REFERENCES Tecajevi(id)
) DEFAULT CHARACTER SET utf8 ENGINE=INNODB;


