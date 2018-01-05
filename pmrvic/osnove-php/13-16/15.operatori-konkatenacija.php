<?php
/**
15 Operatori- pridruživanje i konkatenacija
Obraditi operator pridruživanja (=). Obraditi operator
konkatenacije (.). Prikazati nekoliko primjera.

*/


$text="što bilo";

echo $text;

$text=$text." je bilo";


echo $text;

// jednako kao $text=$text." ovo je dodatek!"
$text.=" ovo je dodatek!";
echo $text;
$text.="<br>";
$text.="ovo je novi red";
$text.=" ";
$text.="ovo je iza razmaka";

echo $text;

echo "<hr>";

// automatsko povećavanje


$brojA=15;

$brojA++;

echo $brojA;

$brojA=$brojA+1;

$brojA+=7;

echo $brojA;

echo "<hr>";

// automatsko povećavanje

$a=1;
$a++;
$b=$a;

echo 'a='.$a.', b='.$b;

echo "<hr>";



?>