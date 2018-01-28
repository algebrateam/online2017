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

function skreniDesno(){
	global $smjer; 
	switch($smjer){
    	case 'N': $smjer='E'; break;
    	case 'E': $smjer='S'; break;
    	case 'S': $smjer='W'; break;
    	case 'W': $smjer='N'; break;
    }
}
function skrenilijevo(){
	global $smjer; 
	switch($smjer){
    	case 'N': $smjer='W'; break;
    	case 'E': $smjer='N'; break;
    	case 'S': $smjer='E'; break;
    	case 'W': $smjer='S'; break;
    }
}
function idiNaprijed(){
	global $p;
	switch($smjer){
    	case 'N': $Ty--; break;
    	case 'E': $Tx++; break;
    	case 'S': $Ty++; break;
    	case 'W': $Tx--; break;
    }
    $p[$Tx][$Ty]=1;
}
/**
mogućnosti:
0. slobodno
1. zauzeto
2. ne postoji
*/
function provjeriVrijednostIducegPolja(){
    global $smjer, $p;
    switch($smjer){
    	case 'N': $x=$Tx  ; $y=$Ty-1; break;
    	case 'E': $x=$Tx+1; $y=$Ty; break;
    	case 'S': $x=$Tx  ; $y=$Ty+1; break;
    	case 'W': $x=$Tx-1; $y=$Ty; break;
    }
    if(!isset($p[$x][$y])){
    	return 2; // 2. ne postoji
    }
    else if($p[$x][$y]==0){
    	return 0; // 0. slobodno
    }
    else return 1; // 1. zauzeto
}


$Tx=(int)(DIM/2-1);
$Ty=(int)(DIM/2-1);
$broj=1;
$smjer='E';  // 'N','E','S','W'
$p = array(array());

for ($i=0; $i < DIM; $i++) { 
	for ($j=0; $j <DIM ; $j++) { 
		$p[$j][$i]=$i."x ".$j."y";
	}
}
echo $Tx." ".$Ty." ".$smjer." <br>";
ispis($p);

$p[$x][$y]=1;

if(provjeriVrijednostIducegPolja()==0){
	
}


/*
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

*/
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