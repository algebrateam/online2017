<?php

#1. zadatak
echo "<h1>1. zadatak</h1><br>";

$a=4; $b=2;

echo "varijabla a=".$a."<br>";
echo "varijabla b=".$b."<br>";

if ($a>$b) 
    {
    echo "varijabla a je veća od varijable b";
}
else {
    echo "varijabla a je manja ili jednaka varijabli b";
}
echo "<hr>";

#2. zadatak
echo "<h1>2. zadatak</h1><br>";

$a=2; $b=3;

if ($a>$b) 
{
    $a++;
}
else {
    $a--;
}

echo "vrijednost varijable a je".$a."<br>";
echo "vrijednost varijable b je".$b."<br>";
echo "<hr>";

#3. zadatak
echo "<h1>3. zadatak</h1><br>";

$i=1;

while ($i<=50)
{
    echo $i."<br>";
    $i++;
}
echo"<hr>";

#4. zadatak
echo "<h1>4. zadatak</h1><br>";

$zbroj=0;

for ($i=20; $i<=30; $i++)
{
    $zbroj +=$i;
}

echo "zbroj brojeva od 20 do 30 je ".$zbroj;



    