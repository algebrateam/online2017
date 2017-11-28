<?php
/**

16. Operatori – aritmetički
Obratiti osnovne aritmetičke operatore (+,-, *, /). Obraditi
operatore inkrementa i dekrementa (++, --). Prikazati
razliku između $a++ i ++$a.
*/



$broj1=14;
$broj2=14.;
$broj3="15";
$rezmodulo=$broj1%$broj2;

echo "Modulo rezultat je: ".$rezmodulo;
echo "<br>";

if($broj1%2!=0){

	echo "broj ".$broj1 ." je neparan";
}
else{

	echo "broj ".$broj1 ." je paran";
}

echo $broj1.$broj2;

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
echo "<br> var";
echo $var;


if ($broj1===$broj2){

	echo "dva broja su indentična";
}
else{

	echo "dva broja su neindentičnaS";
}

echo "<br> veći jednak <br> ";
echo "broj1 :".$broj1." broj2:".$broj2."<br>";

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
if ($broj1>$broj2 || $broj1==$broj2 && $broj1>=$broj3){

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
$broj3=2;

if ($broj1>$broj2 || $broj1<$broj3){

	echo "broj 1 se nalazi između broja2 i broja3";
}
else
{

	echo "broj 1 se ne nalazi između broja2 i broja3";
}

?>