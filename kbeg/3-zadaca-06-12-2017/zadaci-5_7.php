<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>1. zadatak</h1><br>";

$a=4;
$b=2;

if ($a>$b)
{
    echo "Varijabla a (".$a.") je veća od varijable b (".$b.").";
}   
else
{
    echo "Varijabla b (".$b.") je veća od varijable a (".$a.").";
}
echo "<hr>";

echo "<h1>2. zadatak</h1><br>";

$a=5;
$b=10;

if ($a>$b)
{
    $a++;
}
else
{
    $a--;
}

echo "Vrijednost varijable a iznosi ".$a."<br>";
echo "Vrijednost varijable b iznosi ".$b."<br><hr>";

echo "<h1>3. zadatak</h1><br>";

$i=0;
while ($i<50)
{
    $i++;
    echo $i." ";
}
echo "<br><hr>";

echo "<h1>4. zadatak</h1><br>";

$zbroj=0;
for ($i=20; $i<=30; $i++)
{
    $zbroj +=$i;
}
echo "Zbroj brojeva od 20 do 30 iznosi ".$zbroj."<br><hr>";