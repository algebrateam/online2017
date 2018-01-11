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
Godina_izdavanja char(4) not null,
Kolicina_DVD int not null,
Kolicina_VHS int not null,
Sifra_zanra int unsigned not null,
FOREIGN KEY(Sifra_zanra) REFERENCES Zanr(id) ON UPDATE CASCADE
)DEFAULT CHARACTER SET utf8 ENGINE=INNODB;

create table Posudba(
Clan_id int unsigned not null,
Film_id int unsigned not null,
Sifra_cjenika int unsigned not null,
Datum_posudbe datetime not null,
Datum_vracanja datetime null,
FOREIGN KEY(Clan_id) REFERENCES Clanovi(id) ON DELETE RESTRICT,
FOREIGN KEY(Film_id) REFERENCES Film(id) ON DELETE RESTRICT,
FOREIGN KEY(Sifra_cjenika) REFERENCES Cjenik(id) ON DELETE RESTRICT ON UPDATE CASCADE,
PRIMARY KEY(Clan_id, Film_id, Datum_posudbe)
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
(null, 'Star wars - New hope', 'George Lucas', 'Harrison Ford, Mark Hamill, Carrie Fisher', '1978', 10, 15, 1),
(null, 'Bijeg iz alcatraza', 'Don Siegel', 'Clint Eastwood', '1979', 10, 15, 3),
(null, 'Orlovo gnijezdo', 'Brian G. Hutton', 'Richard Burton, Clint Eastwood', '1968', 6, 10, 2);

insert into Posudba values
(1, 1, 1, now(), null),
(2, 2, 2, now(), null),
(3, 3, 3, now(), null);

-- naredba koja unese promjenu da je clan vratio neki film
update Posudba set Datum_vracanja=now() where Clan_id=2;

-- naredbe za upit o clanovima koji nisu vratili film 
select distinct
Clanovi.Ime,
Clanovi.Prezime
from Clanovi
join Posudba on Clanovi.id=Posudba.Clan_id
where Datum_vracanja is null;

-- naredba vrati koliko je filmova clan posudio
select distinct
Clanovi.Ime,
Clanovi.Prezime,
count(*) as 'Posudio filmova'
from Clanovi
join Posudba on Clanovi.id=Posudba.Clan_id
where Datum_vracanja is null
group by Posudba.Clan_id;

-- naredba koja vraca naziv filma kojeg clan nije vratio
select
Clanovi.Ime,
Clanovi.Prezime,
Posudba.Datum_posudbe,
Film.Ime_filma as 'Posudio film'
from Clanovi
join Posudba on Clanovi.id=Posudba.Clan_id
join Film on Film.id=Posudba.Film_id
where Posudba.Datum_vracanja is null;


-- JOS NEKE NAREDBE

-- naredba koja ukljuci i ime zanra
select
Clanovi.Ime,
Clanovi.Prezime,
Posudba.Datum_posudbe,
Film.Ime_filma as 'Posudio film',
Zanr.Ime_zanra as Zanr
from Clanovi
join Posudba on Clanovi.id=posudba.Clan_id
join Film on Film.id=Posudba.Film_id
join Zanr on Film.Sifra_zanra=Zanr.id
where Posudba.Datum_vracanja is null;

-- provjera koliko je puta neki film trenutno posudjen
select
Film.Ime_filma,
count(*) as'Ukupno posudjen'
from Posudba
join Film on Posudba.Film_id=Film.id
group by Posudba.Film_id;

