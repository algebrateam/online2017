<?php
/**

16. Operatori – aritmetički
Obratiti osnovne aritmetičke operatore (+,-, *, /). Obraditi
operatore inkrementa i dekrementa (++, --). Prikazati
razliku između $a++ i ++$a.
*/



$broj1=10;
$broj2=10.0;
$broj3="15";

$rezulatzbroja=($broj1+$broj2)*$broj2;
echo "zbroj je: ".$rezulatzbroja."<br>";


$rezmodulo=$broj1%$broj2;

echo "Modulo rezultat je: ".$rezmodulo;
echo "<br>";

if($broj1 % 2 == 0){

	echo "broj ".$broj1 ." je paran";
}
else{

	echo "broj ".$broj1 ." je neparan";
}

echo "<br>Ispis brojeva kao text:".$broj1.$broj2;

//////////////////////////////
//// 3.2.3
echo "<br>";

$var=12;

echo "<br> ++var";
echo ++$var;
echo "<br> var";
echo $var;
echo "<br> var++";
echo $var++;
echo "<br> var:".$var."<br>";
echo "konacna vrijednost:".$var."<br>";

# 10 == 10.0  TRUE
# 10 === 10.0 FALSE  zato jer je INT != od DOUBLE
if ($broj1==$broj2){

	echo "<br>dva broja imaju istu vrijednost";
}
else{

	echo "<br>dva broja nema ju istu vrijednost";
}
if ($broj1===$broj2){
#Isti su po tipu i vrijednosti
	echo "<br>dva broja su INDENTIČNA";
}
else{

	echo "<br>dva broja nisu indentična";
}
echo "<br>broj1 je tip:".gettype($broj1);
echo "<br>broj2 je tip:".gettype($broj2);
echo "<br> veći jednak <br> ";
echo "broj1 :".$broj1." broj2:".$broj2."<br>";

Echo "<hr> operatori usporedbe:<br>";
if ($broj1>=$broj2){

	echo "broj 1 je veći ili jednak broju2.<br>";
}
else if($broj1==$broj2){

	echo "broj1 je jednak broj2 <br>";
}
else
{

	echo "broj1 je manji od broj2";
}

echo "<h3>Logički operatori</h3>";
///////////// LOGIČKI OPERATORI ( ||)  //////////////
if ($broj1>$broj2 && ($broj1==$broj2 || $broj1>=$broj2)){

	echo "broj 1 je veći ili jednak broju2 ++-*//";
}
else
{

	echo "broj1 je manji od broj2";
}

///////////// LOGIČKI OPERATORI (&&)  //////////////
echo "<br>*********";
$broj1=15;
$broj2=10;
$broj3="20";

if ($broj1>$broj2 && $broj1<$broj3){

	echo "broj 1 se nalazi između broja2 i broja3";
}
else
{

	echo "broj 1 se ne nalazi između broja2 i broja3";
}
echo "<br>zbroj 10 i 20 je jednak:";
echo $broj2+$broj3;
?>