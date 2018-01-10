/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 10, 2018
 */

create database videoteka;

create table Clanovi(
id int unsigned not null auto_increment primary key,
Ime varchar(30) not null,
Prezime varchar(30) not null,
Adresa varchar(60) not null,
Telefon varchar(20) not null,
Datum_clanstva datetime not null
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

create table Zanr(
id int unsigned not null auto_increment primary key,
Ime_zanra varchar(30) not null
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

create table Cjenik(
id int unsigned not null auto_increment primary key,
Kategorija varchar(30) not null,
Cijena float not null
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

create table Film(
id int unsigned not null auto_increment primary key,
Ime_filma varchar(30) not null,
Reziser varchar(60) not null,
Glavni_glumci varchar(255) not null,
Godina_izdavanja int not null,
Kolicina_DVD int not null,
Kolicina_VHS int not null,
Sifra_zanra int unsigned not null,
FOREIGN KEY(Sifra_zanra) REFERENCES Zanr(id)
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

create table Posudba(
Clan_id int unsigned not null,
Film_id int unsigned not null,
Sifra_cjenika int unsigned not null,
Datum_posudbe datetime not null,
Datum_vracanja datetime null,
PRIMARY KEY(Clan_id, Film_id, Datum_posudbe),
FOREIGN KEY(Clan_id) REFERENCES Clanovi(id),
FOREIGN KEY(Film_id) REFERENCES Film(id),
FOREIGN KEY(Sifra_cjenika) REFERENCES Cjenik(id)
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

select * from clanovi
join posudba on clanovi.id=posudba.Clan_id
where Datum_vracanja is not null;

select
clanovi.Ime,
clanovi.Prezime,
posudba.Datum_posudbe, 
posudba.Datum_vracanja,
film.Ime_filma as 'Posudio film'
from clanovi
join posudba on clanovi.id=posudba.Clan_id
join film on film.id=posudba.Film_id
where Datum_vracanja is not null;