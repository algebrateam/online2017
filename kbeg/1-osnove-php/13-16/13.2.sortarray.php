<?php

/**
13. PODACI- RAD SA KOLEKCIJAMA

Obraditi funkcije za sortiranje kolekcija (sort(), ksort(),
rsort(), krsort(), asort(), arsort()). Obraditi ostale korisne
funkcije za rad s poljima (is_array(), explode(), implode(),
split(), count(), end(), array_search(), in_array()).

*/

// sortranje arraya
# sort()

$fruits = array('0'=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka' );
echo "<pre>";
print_r($fruits);
echo "</pre>";

sort($fruits);

echo "sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";

# rsort()
echo "<br>";
rsort($fruits);
echo "rsort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
// ubijam varijablu jer sam sortiranjem 
// izgubio kljuceve 
unset($fruits); 

$fruits = array(0=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka',
    44=>"broj2",
    55=>"broj1",
    66=>"broj20",
    77=>"broj3",
	            2=>'grejp' );

echo "<pre>";
print_r($fruits);
echo "</pre>";
#asort()
echo "<br>";
asort($fruits,0);
echo "asort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
#arsort()
echo "<br>";
arsort($fruits);
echo "arsort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<hr>";
unset($fruits); 

$fruits = array(0=> 'limun', 
	            'a'=> 'naranca', 
	             1 => 'banana',
	            'b'=> 'jabuka',
	            2=>'grejp' );


echo "<pre>";
print_r($fruits);
echo "</pre>";
#-------------------------------------
#ksort()
echo "<br>";
ksort($fruits,0);
echo "ksort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
ksort($fruits,1);
echo "ksort() sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";
ksort($fruits,1);
echo "ksort(1) sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";

ksort($fruits,2);
echo "ksort(2) sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";


#krsort()
echo "<br>";
ksort($fruits,3);
echo "ksort(3) sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
ksort($fruits,4);
echo "ksort(4) sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>";
ksort($fruits,5);
echo "ksort(5) sortirano<br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";

phpinfo();
?>