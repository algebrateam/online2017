<?php

/**
11.
PODACI PRIMITIVNI TIPOVI
Obraditi primitivne tipove. Objasniti cjelobrojni tip
(integers). Objasniti decimalni tip (float). Objasniti bool tip.
Objasniti tekstualni tip (strings).
*/

$a=4488999;
echo $a;

$a="Neko ime";
echo $a;

$naziv_var='iznos';
$$naziv_var=35;

echo "<br>".$iznos;


echo "<hr>";

$aa='Algebra';
$b=&$aa;

echo $b;

$aa='KraAlgebra';
echo $b;

echo "<hr>";
$aa='Neka druga škola';
echo $b;

define('PI',3.14);

echo PI;

if(is_double(PI)){

	echo "<br>PI je double!";
}
else{

	echo "PI nije double?";
}

echo "<br>DVOSTRUKI: PI  Naša škola je $aa";
echo '<br>JEDNOSTRUKI:'.PI.' Naša škola je '.$aa;
echo '<br>JEDNOSTRUKI: Naša škola je $aa -- ne parsira';


// POLJA;
$mojnekiarra = array('kfranic' => 'loz1','mbaric'=>'loz2' );
$mojdrugi=array('loz3','loz4','sdfwsf');

echo "Koja je lozinka od Marka Barića? Lozinka je:".$mojnekiarra['mbaric'];
echo "<br>";
print_r ($mojnekiarra);

echo "<hr>";
print_r($mojdrugi);
        
echo "<br>";
echo "Koja je lozinka od Marka Barića? Lozinka je:".$mojdrugi[2];

///
// 1.
echo "<hr>";
$broj1=2;
$broj2=2.4353;
echo $broj1;


$a=NULL;
$a="10.9";
$a=(double)$a;

echo "pokušamo castati (int) a ".$a;
 //unset($a);
echo "pokušamo castati (int) a ".$a;
//if(isset($a)){
if(FALSE){

	echo 'postavljena je vrijednost varijable $a<br>';
}
else{
		echo 'nije postavljena vrijednost varijable $a<br>';
}

if(is_float($a)){
	echo "var je float";
}
else if(is_int($a)){
	echo "var je int";
}
else
{


}

 echo "<hr>";
echo "var je??? ".gettype($a).var_dump($a);
echo "<br>varijabla : ".$a;

echo "<hr><b>polja:</b><br>";
$polje=array('prvi',
	'drugi',
	'treci',
	'cetvrti',
	'peti');

echo $polje[1];

$a=3;
$b=5;
$pom=NULL;

echo "<br>a=".$a." b=".$b."<br>";

$pom=$a;
$a=$b;
$b=$pom;
echo "a=".$a." b=".$b."<br>";

?>