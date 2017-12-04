<?php


$a=10;
echo $a." <br>";

if(($a<5 || $a>=10) && $a%2==0){
	echo "Dobitak!";
}
else{
    echo "Nije dobitni";
}

//////////////////////


$naziv='Algedv';

// PRVI NAČIN UGNJEŽDENI
if (strlen($naziv)>10){

	echo "naziv ima više od 10 znakova";
}
else
{
	if(strlen($naziv)>=5 && strlen($naziv)<=10){
		echo "Dužina naziva je u zadanom nizu";
	}
	else{
		echo "naziv je prekratak";
	}
}

// DRUGI NAČIN SERIJA
echo "<br>Drugi način:<br>";
if (strlen($naziv)>10){

	echo "naziv ima više od 10 znakova";
}
elseif(strlen($naziv)>=5 && strlen($naziv)<=10){
		echo "Dužina naziva je u zadanom nizu";
}
else{
		echo "naziv je prekratak";
}

///// Kratki način "if-else"
echo "<br>";

$broj=3;

$b=($broj>5)?-1:1; //  (uvijet)?true:false;// Postavi b za sve veće od 5

echo $b

/// Switch-case









?>