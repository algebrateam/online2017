<?php
/**
13. PODACI- RAD SA KOLEKCIJAMA

Obraditi funkcije za sortiranje kolekcija (sort(), ksort(),
rsort(), krsort(), asort(), arsort()). Obraditi ostale korisne
funkcije za rad s poljima (is_array(), explode(), implode(),
split(), count(), end(), array_search(), in_array()).

*/
unset($fruits);
$fruits = array(0=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka',
	            7  => 'banana',
                    "divlja"  => 'jagoda',
	            2  => 'grejp' );

echo "polje fruits ima ".count($fruits)." članova<br>";

$brojelemenata=0;

foreach ($fruits as $key => $value) {
	$brojelemenata++;
}

echo "<ol>";
foreach ($fruits as $key => $value) {
    Echo "<li>ključ je: <b>".$key."</b> a value je : <b>".$value."</b> </li>";
}
echo "</ol>";

echo "<hr>Ispis sveg voća<br>";
foreach ($fruits as $voce) {
    echo $voce." ";
}

Echo "<br>jagoda je pod key elementom 'divlja' : ".$fruits['divlja'];

echo "<pre>";
print_r($fruits);
echo "<pre>";


echo '<br>broj elemenata u polju je $brojelemenata: ';

echo count($fruits);


echo "<hr> zadnji element pomoću iteracije";

foreach ($fruits as $key => $value) {
}
echo "<br>zadnji element je:".$value;
echo "<hr>";

// Na sljedeći način preskačemo zadane elemente arraya
$brojelemenata = 0;
foreach ($fruits as $key => $value) {
    $brojelemenata++;
    if ($brojelemenata == 4 || $brojelemenata == 3) {
        continue;
    } else {
        echo "<br>el" . $brojelemenata . ":" . $value;
    }
}

echo "<br>treće polje sa ključem $key ima vrijednost: ".$value;

echo "<br>zadnji element polja je ".end($fruits);


/// Pretraživanje polja

foreach ($fruits as $kljuc => $vrijednost) {
	if($vrijednost=='jabuka'){
		break;
	}
}
echo "<br>jabuka se nalazi pod ključem ".$kljuc;


// array map primjer
echo "<hr><h3>primjer array map</h3>";
function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
$a=array_map("myfunction",$a);
print_r($a);
$a=array_map("myfunction",$a);
print_r($a);


$key=array_search('banana', $fruits);
echo "Našao sam bananu:".$key;

unset($fruits[$key]);

print_r($fruits);
$key=array_search('banana', $fruits);
echo "Našao sam bananu:".$key;

if(in_array('banana', $fruits)){

	echo "banana je nadjena!";
}

unset($fruits[7]);  // izbacimo element pod kljucem 7

if(in_array('banana', $fruits)){

	echo "banana je nadjena!";
}
else{ 
	echo "nema banane :( ";
}
foreach ($fruits as $value) {
	echo $value;
}






?>