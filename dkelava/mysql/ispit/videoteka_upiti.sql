/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Danijel
 * Created: Jan 10, 2018
 */


-- naredba koja unese promjenu da je clan vratio neki film
update Posudba set Datum_vracanja=now() where Clan_id=2;

-- naredbe za upit o clanovima koji nisu vratili film 
select distinct
Clanovi.Ime,
Clanovi.Prezime
from Clanovi
inner join Posudba on Clanovi.id=Posudba.Clan_id
where Datum_vracanja is null;

-- naredba koja vraca naziv filma kojeg clan nije vratio
select
Clanovi.Ime,
Clanovi.Prezime,
Posudba.Datum_posudbe,
Film.Ime_filma as 'Posudio film'
from Clanovi
inner join Posudba on Clanovi.id=Posudba.Clan_id
inner join Film on Film.id=Posudba.Film_id
where Posudba.Datum_vracanja is null;


-- JOS NEKE NAREDBE

-- naredba vrati koliko je filmova clan posudio
select distinct
Clanovi.Ime,
Clanovi.Prezime,
count(*) as 'Posudio filmova'
from Clanovi
inner join Posudba on Clanovi.id=Posudba.Clan_id
where Datum_vracanja is null
group by Posudba.Clan_id;

-- naredba koja ukljuci i ime zanra
select
Clanovi.Ime,
Clanovi.Prezime,
Posudba.Datum_posudbe,
Film.Ime_filma as 'Posudio film',
Zanr.Ime_zanra as Zanr
from Clanovi
inner join Posudba on Clanovi.id=posudba.Clan_id
inner join Film on Film.id=Posudba.Film_id
inner join Zanr on Film.Sifra_zanra=Zanr.id
where Posudba.Datum_vracanja is null;

-- provjera koliko je puta neki film trenutno posudjen
select
Film.Ime_filma,
count(*) as'Ukupno posudjen'
from Posudba
inner join Film on Posudba.Film_id=Film.id
group by Posudba.Film_id;

