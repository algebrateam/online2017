select * from fakultet.stud order by pbrStan desc;
select * from fakultet.stud group by pbrStan order by pbrStan desc;
select count(stud.imeStud), stud.pbrStan AS broj_studenata_u_mjestu from fakultet.stud 
group by pbrStan order by pbrStan desc;

select max(stud.mbrStud), stud.pbrStan AS broj_studenata_u_mjestu from fakultet.stud 
group by pbrStan order by pbrStan desc limit 3;