<?php

/**

*/


// usporedba vrijednosti

$a=4; $b=5;
if($a!=$b){
	Echo "brojevi su razliciti ".$a." ".$b;
}
else
{

	Echo "brojevi su jednaki ".$a." ".$b;
}
echo "<hr>usporedba tipova i vrijednosti<br>";
// usporedba tipova i vrijednosti

$a=4; $b="5";
if($a===$b){

	Echo "brojevi su jednaki ".$a." ".$b;
	echo '<br>tip $a:'.gettype($a);
	echo '<br>tip $b:'.gettype($b);
}
else
{
	Echo "brojevi su razliciti ".$a." ".$b;

		echo '<br>tip $a:'.gettype($a);
	echo '<br>tip $b:'.gettype($b);
}


if(gettype($a)!=gettype($b)){
echo "<br>GREŠKA !!! tipovi podataka su razliciti!";
}

echo "<hr>";
$a=6; $b="5";
if($a<
	$b){

	Echo "a je manje ili jednako od b";
}
else
{
	Echo "a je veće od b";
}


echo "<hr> Logički operatori<br>";

$a=10;

if($a>0 && $a<=10){
	echo "var je ok";
}
else{
	echo "not ok"; // nok
}

echo "<hr> operatori pretvorbe<br>";

$a=4; 
$b="4";
$b=(double)$b;

if($a===$b){

	Echo "brojevi su jednaki ".$a." ".$b;
	echo '<br>tip $a:'.gettype($a);
	echo '<br>tip $b:'.gettype($b);
}
else{
	echo "greska<br>";
		echo '<br>tip $a:'.gettype($a);
	echo '<br>tip $b:'.gettype($b);
}
echo "<hr> operator modulo<br>";

$a=11;
$b=5;

echo 'var $a='.
$a.
' $b='.
$b. 
' modulo $a%$b=';

echo $a%$b;

?>