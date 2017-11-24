<?php
/**
12
Prikazati kolekcije (array). Prikazati načine inicijalizacije
kolekcije. Prikazati kako dodavati elemente u kolekcije.
Objasniti pridruživanje u kolekciju s tekstualnim i brojčanim
ključem. Prikazati višedimenzionalna polja i rad s njima.
Obraditi print_r() funkciju.
*/

/*
// Indeksirani array
$polje = array('tesla','bell','edison' );
echo "polje sa indeksom 0 ima vrijednost: "
.$polje[2];

echo "<pre>";
print_r($polje);
echo "</pre>";

array_push($polje, 'Volta');


echo "<pre>";
print_r($polje);
echo "</pre>";

// asocijativno polje
echo "asocijativno polje<br>";
$week = array(   //dekl & deff 
	'pon' => 'mon',  // ovo cu pregaziti
	'uto' => 'tue',
	'sri' => 'wed',
	'thu',
	'pon' => 'mon0',  // sa novom vrijednošću
    'neka vrijednost sa indexom 1'
	//'uto' => 'tue0',
	//'sri' => 'wed0',
	//'thu'
 );

echo "<pre>";
print_r($week);
echo "</pre>";

// pojedinačni ispis asocijativnog niza
echo $week['sri']."<br>";
echo $week['uto'];

echo "<pre>";
print_r($week);
echo "</pre>";

echo $week[3];
//die();

$polje=array();  //deklaracija
$polje['b1']='plava';   //definicije
$polje['b2']="crvena";
$polje["b3"]=12345;

echo "<pre>";
print_r($polje);
echo "</pre>";

echo "<hr>"; // horizontal line

Echo '<br>foreach $key->$value<br>';

foreach ($polje as $key => $value) {
    echo "boja pod sifrom "
    . $key
    . " je "
    . $value
    . "<br>";
}

echo "<table border='1'>";
echo "<tr><th>Šifre</th><th>Boje</th></tr>\n";
foreach ($polje as $sifre => $boje) {
    if ($sifre=="b2"){continue;}
echo "<tr><td>".$sifre."</td><td>".$boje."</td></tr>\n";
}
echo "</table>";
*/
echo "<hr>";


$p1=array();

array_push($p1, 'golf1');
array_push($p1, 'golf2');
array_push($p1, 'golf3');
array_push($p1, 'golf4');


for ($i=0; $i <=2 ; $i++) { 
	echo $p1[$i];
        // isto kao echo $p1[0].$p1[1].$p1[2];
}
echo "<hr>ispis golfova unatrag:<br>";
for ($i=count($p1)-1; $i >=0 ; $i--) { 
	echo $p1[$i];
}
echo "<hr>";

echo "ispis golfova prema naprijed:<br>";
for ($i=0; $i<=count($p1)-1 ; $i++) { 
	echo $p1[$i];
}
echo "<hr>";

echo "ispis golfova prema naprijed isto kao primjer gore:<br>";
for ($i=0; $i<count($p1); $i++) { 
	echo $p1[$i];
}
echo "<hr>";

// jednostavan ispis, već sortirano polje, bez indeksa i asocijcija
echo "<ol>";
foreach ($p1 as $auto) {
	echo "<li>".$auto."</li>";
}
echo "</ol>";

// VIŠEDIMENZIONALNA POLJA
$elem1 = array(1,3,4 );
$elem2 = array(5,88,44 );
$elem3 = array(41, array(77,66,55),42 );

$polje = array($elem1,$elem2,$elem3 );

array_push($elem3, 999);

array_push($elem3[1],88);

$polje = array($elem1,$elem2,$elem3 );

echo "<pre>";
print_r($polje);
echo "</pre>";


echo "<pre>";
foreach ($polje as $value) {
	foreach ($value as $broj) {
		if(gettype($broj)=="array"){
			print_r($broj);
		}
		else{
		echo " ".$broj." ";	
		}
		
	
 }
}
echo "</pre>";

$polja = array('xyz','1'=>'Tesla','2'=>'Edison' );

//echo $polja[1];

//// ispis pomoću for petlje

for($i=0;$i<=2;$i++){
	echo "--- ".$polja[$i];
}


// ovdje ne moram znati broj polja niti početni index
foreach ($polja as $value) {
	echo " ".$value;
	echo "-*-*-*-*-*-*-*-*-*-*-*-*";
}

//
echo "<br>polje1:<br>";
$polje1=array('Tesla','ime'=>'Edison','Bell');
foreach ($polje1 as $value) {
	echo " ".$value;
}
echo "<br>polje1 pomoću print_r():<br>";
echo "<pre>";
print_r($polje1);
echo "</pre>";
//echo " ".$polje1['ime'];


//// ispis pomoću for petlje
$polje2=array('Tesla','Edison','Bell');
echo "<br>ispis pomoću count():<br>";

echo "ukupan broj elemenata arraya polje2 je:<b>".count($polje2)."</b><br>";

for($i=0;$i<count($polje2);$i++){
	echo " ".$polje2[$i];
}

//// ispis pomoću foreach uz key=>value
echo "<br><hr>ispis pomoću foreach uz key=>value:<br>";
foreach ($polje2 as $key => $value) {
	echo "moj ključ \"$key\" daje vrijednost $value<br>";
}

echo "<pre>";

foreach ($polje2 as $key => $value) {
	echo "moj ključ \n\t\t$key \t $value\n";
}
echo "</pre>";

echo "<pre><br><br><br>";






echo "</pre>";
?>