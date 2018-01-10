/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 10, 2018
 */

create database Videoteka;

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
FOREIGN KEY(Sifra_zanra) REFERENCES Zanr(id) ON DELETE SET NULL
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
FOREIGN KEY(Sifra_cjenika) REFERENCES Cjenik(id) ON DELETE SET NULL
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

insert into Clanovi values 
(null,'John','Doe','Adresa 1','Telefon 1',now()),
(null,'Jane','Fonda','Adresa 2','Telefon 2',now()),
(null,'Steve','Smith','Adresa 3','Telefon 3',now());

insert into Zanr values
(null, 'SCI FI'),
(null, 'Action'),
(null, 'Triler');

insert into Cjenik values
(null, 'Novi filmovi DVD', 19.99),
(null, 'Stari filmovi DVD', 15.99),
(null, 'Novi filmovi VHS', 10.99),
(null, 'Stari filmovi VHS', 7.99);

insert into Film values
(null, 'Star wars - New hope', 'George Lucas', 'Harrison Ford, Mark Hamill, Carrie Fisher', 1978, 10, 15, 1),
(null, 'Bijeg iz alcatraza', 'Don Siegel', 'Clint Eastwood', 1979, 10, 15, 3),
(null, 'Orlovo gnijezdo', 'Brian G. Hutton', 'Richard Burton, Clint Eastwood', 1968, 6, 10, 2);

create table Posudba values
(1, 1, 1, now(), null);

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