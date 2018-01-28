<?php
/**
22.
Prikazati rad s while petljom. Prikazati obije verzije sintakse.
Prikazati do
-while petlju. Prikazati rad s for petljom.
Prikazati obije verzije sintakse. 


*/



// Nađi i kod kojeg 
// je ukupan zbroj <= 100.000


$zbroj=0;
$i=1;  

while($i<=1000){

	$zbroj+=$i;
	if($zbroj>=100000){
		break;
	}
	$i++;
}
/*
while($zbroj<=100000){
	$i++;
	$zbroj+=$i;
}
*/
echo $zbroj." <br>";
echo "stali smo kod broja ".$i." <br>";

////

$x=0;$y=0;

while($x<10){
  $x++;
  echo "x:$x ";
  while($y<=10){
  	echo "<br>y:$y ";
   if($y==5){
   	continue 2;
   }
   $y++;
  }
}

echo "<br> x je $x y je $y";


?>