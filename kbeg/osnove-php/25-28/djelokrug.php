<?php


// ključna riječ global
$a=2;


function inc_a($a){  // increase funkcija neka naša....
   global $a;
	$a++;
}

echo "<br> broj prije inc_a() ".$a;


inc_a($a);


echo "<br> broj poslije inc_a() ".$a;


// ključna riječ static
echo "<br>ključna riječ static<br>";

$b=2;

function inc_b($b){  // increase funkcija neka naša....
   static $b;
   $b++;
	echo "<br><b>Varijabla b unutar funkcije: ".$b."</b>";
}

echo "<br> broj prije inc_b() ".$b;
inc_b($b);
echo "<br> broj poslije inc_b() ".$b;
inc_b($b);
inc_b($b);
echo "<br> broj poslije 3 x inc_b() ".$b;


////////  GLOBALNE VARIJABLE
echo "<pre>";
print_r($GLOBALS['_GET']);
print_r($_GET);
echo "</pre>";
?>