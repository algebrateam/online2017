-- 3.2
select mbrStud, concat(imeStud,' ',prezStud) as 'Ime i prezime' from stud;

-- 3.3
select distinct imeStud from stud order by imeStud desc;

-- 3.4
select mbrStud from ispit where sifPred=146 and ocjena>1;

-- 3.5
select imeNastavnik, prezNastavnik, (koef+0.4)*800 as 'Placa' from nastavnik;

-- 3.6
select imeNastavnik, prezNastavnik, (koef+0.4)*800 as 'Placa' from nastavnik
where ((koef+0.4)*800<3500) or ((koef+0.4)*800>8000);

-- 3.7
select imeStud, prezStud from stud join ispit on stud.mbrStud=ispit.mbrStud 
where (sifPred between 220 and 240) and ocjena=1;

-- 3.8
select distinct imeStud, prezStud from stud join ispit on stud.mbrStud=ispit.mbrStud
where ocjena=3;

-- 3.9
select nazPred from pred join ispit on pred.sifPred=ispit.sifPred
where datIspit = NULL;

-- 3.10
select distinct nazPred from pred join ispit on pred.sifPred=ispit.sifPred
where datIspit is not NULL;

-- 3.11
select * from stud where left(imeStud,1) in ('a','e','i','o','u')
and right(imeStud,1) in ('a','e','i','o','u');

-- 3.12
select * from stud where left(imeStud,1) not in ('a','e','i','o','u')
and right(imeStud,1) not in ('a','e','i','o','u');

-- 3.13
select * from stud where left(imeStud,1) in ('a','e','i','o','u')
or right(imeStud,1) in ('a','e','i','o','u');

-- 3.14
select * from stud where imeStud like '%nk%' 
or prezStud like '%nk%';

-- 3.15
select imeStud, prezStud, nazPred, ocjena from 
ispit i
join stud s on i.mbrStud=s.mbrStud
join pred p on p.sifPred=i.sifPred;

-- 3.16
select imeStud, prezStud, 
m.nazMjesto as 'Mjesto rodenja', 
z.nazZupanija as 'Zupanija rodenja',
m2.nazMjesto as 'Mjesto stanovanja',
z2.nazZupanija as 'Zupanija stanovanja'
from
stud s
join mjesto m on m.pbr=s.pbrRod
join zupanija z on z.sifZupanija=m.sifZupanija
join mjesto m2 on s.pbrStan=m2.pbr
join zupanija z2 on z2.sifZupanija=m2.sifZupanija;

-- 3.17
select nazPred as 'Predmet', nazOrgjed as 'Organizacijska jedinica', upisanoStud as 'Upisano studenata'
from pred p join orgjed o on p.sifOrgjed=o.sifOrgjed
where upisanoStud>20;

-- 3.18
select distinct nazMjesto as 'Mjesta stanovanja studenata'
from mjesto m join stud s on m.pbr=s.pbrStan;

-- 3.19
select distinct nazMjesto as 'Mjesta u kojima je student roden i stanuje' 
from stud s join mjesto m on s.pbrRod=m.pbr
where s.pbrRod=s.pbrStan;

-- 3.20
# ne postoji veza izmedju tablice dvorana i tablice predmeti 

-- 3.21
# ne postoji veza izmedju tablice dvorana i tablice predmeti

-- 3.22
select distinct imeNastavnik, prezNastavnik
 from nastavnik 
join ispit on ispit.sifNastavnik=nastavnik.sifNastavnik
join stud  on stud.mbrStud=ispit.mbrStud
join mjesto m1 on m1.pbr=stud.pbrStan
join mjesto m2 on m2.pbr=nastavnik.pbrStan
where m1.sifZupanija=m2.sifZupanija; 

-- 3.23
select imeStud, prezStud 
from stud
join mjesto m1 on m1.pbr=stud.pbrStan
join mjesto m2 on m2.pbr=stud.pbrRod
where stud.pbrRod <> stud.pbrStan
and m1.sifZupanija=m2.sifZupanija;

-- 3.24
select 
imeStud, 
prezStud,
imeNastavnik,
prezNastavnik
from stud, nastavnik
where stud.prezStud=nastavnik.prezNastavnik;

-- 3.25
select distinct
imeStud,
prezStud,
nazMjesto
from stud
join mjesto on stud.pbrStan=mjesto.pbr
join ispit on ispit.mbrStud=stud.mbrStud
join pred on pred.sifPred=ispit.sifPred
where pred.nazPred='Osnove baza podataka'
and ispit.ocjena=1;

-- 3.26
select distinct
imeNastavnik,
prezNastavnik,
nazMjesto,
nazZupanija,
nazPred
from nastavnik
join mjesto on mjesto.pbr=nastavnik.pbrStan
join zupanija on zupanija.sifZupanija=mjesto.sifZupanija
join ispit on ispit.sifNastavnik=nastavnik.sifNastavnik
join pred on pred.sifPred=ispit.sifPred
where ispit.ocjena=2 or ispit.ocjena=3
order by pred.nazPred asc;
