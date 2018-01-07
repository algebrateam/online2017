<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Odogovor na zadatak broj 1. je "a."';

$ime = "Miroslav";
$prezime = "Romic";

echo "<hr> Odgovor na zadatak broj 2. je " .$ime.' '.$prezime;

$a = 5;
$a++;

echo "<hr> Odgovor na zadatak broj 3. je:";
echo "<br> Povećanje vrijednosti varijable = "; echo $a;


$a = 5;
$a--;

echo "<br> Smanjivanje vrijednosti varijable = "; echo $a;
        
$b = floatval($a);
var_dump($b);


echo "<hr> Odgovor na zadatak broj 4. je: " .$b;

$a += 5;
echo "<hr> Odgovor na zadatak broj 5. je: " .$a;

$a = 7;
$b = 3;
        
echo '<hr> Odgovor na zadatak broj 6. je: ';
echo "<br> a. $a + $b" ." = " ;
echo $a + $b;

echo "<br> b. $a - $b" ." = " ;
echo $a - $b;

echo "<br> c. $a * $b" ." = " ;
echo $a * $b;

echo "<br> d. $a / $b" ." = " ;
echo $a / $b;

echo "<br> e. $a % $b" ." = " ;
echo $a % $b;

$a = 4;
$b = 2;
        
echo '<hr> Odgovor na zadatak broj 7. je: ';
echo "<br> a. $a + $b" ." = " ;
echo $a + $b;

echo "<br> b. $a - $b" ." = " ;
echo $a - $b;

echo "<br> c. $a * $b" ." = " ;
echo $a * $b;

echo "<br> d. $a / $b" ." = " ;
echo $a / $b;

echo "<br> e. $a % $b" ." = " ;
echo $a % $b; 