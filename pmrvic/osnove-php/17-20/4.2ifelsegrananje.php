<?php

$naziv="alg";
if(strlen($naziv)>=5){

echo "Odlično!";
}
elseif(strlen($naziv)>=3 &&  strlen($naziv)<=4){
	echo "Ajde ok je";
}
else {
	echo "ništa od igrica";
}


echo "<hr>Skraceni oblici<br>";
//   (true|false)?true:false;

$a=6;
$b=($a<5)?"ispunjen uvjet":"nije ispunjen"; 
//<uvijet>?TRUE:FALSE
echo $b;

$boja="zlatna";

switch ($boja){
 case "plava": echo "Boja je plava"; break;  
 case "crvena": echo "Boja je crvena"; break;
 case "crna": echo "Boja je crna"; break;
 case "zlatna":
 case "zuta": echo "Boja je zutaaa"; break;
 case "svjetlo crna": echo "Boja je scrna"; break;
 default: echo "nisam nasao boju"; break;   
    
}



?>