<?php
define('DIM', 12);

echo "spirala";

function ispis($p){
	echo "<table border='1'>";
	foreach ($p as $key => $v1) {
		echo "<tr>";	
		foreach ($v1 as $key => $v2) {
			echo "<td>";
			echo "&nbsp;".$v2."&nbsp;";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

//E1,S1,W2,N2,E3,S3,W5,N5
function E($n){
	global $p;
	global $broj; 
	global $Tx;
	global $Ty;

	while ($n>0 ) {
		$Ty++;
		$n--;
		$p[$Tx][$Ty]=$broj;
		$broj++;
	}
}

function S($n){
	global $p,$broj,$Tx,$Ty;
	while ($n>0 ) {
		$Tx++;
		$n--;
		$p[$Tx][$Ty]=$broj;
		$broj++;
	}
}

function W($n){
	global $p,$broj,$Tx,$Ty;
	while ($n>0 && $Ty>=0) {
		$Ty--;
		$n--;
		$p[$Tx][$Ty]=$broj;
		$broj++;
	}
}

function N($n){
	global $p,$broj,$Tx,$Ty;
	while ($n>0 && $Tx>0) {
		$Tx--;
		$n--;
		$p[$Tx][$Ty]=$broj;
		$broj++;
	}
}


$Tx=(int)(DIM/2-1);
$Ty=(int)(DIM/2-1);
$broj=1;

$p = array(array());

for ($i=0; $i < DIM; $i++) { 
	for ($j=0; $j <DIM ; $j++) { 
		$p[$i][$j]=$i.$j;
	}
}
ispis($p);



//E1,S1,W2,N2,E3,S3,W5,N5
$p[$Tx][$Ty]=$broj;
$broj++;
$a=1;
while($a<DIM && $Tx>-1 && $Ty>-1){
	E($a);
	S($a); 
	W($a+1); 
	N($a+1);
	$a+=2;
}
/*
ispis($p);
echo "<pre>";
print_r($p);
echo "</pre>";
*/

ispis($p);
for ($i=0; $i <DIM ; $i++) { 
	array_pop($p[$i]);
}

ispis($p);
echo "<pre>";
//print_r($p);
echo "</pre>";
?>