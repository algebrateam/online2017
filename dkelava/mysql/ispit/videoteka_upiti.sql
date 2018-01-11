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
