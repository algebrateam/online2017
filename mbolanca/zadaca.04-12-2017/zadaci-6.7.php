<?php

echo "<h1>1. zadatak</h1>";
echo 'Napišite program koji upisuje pet imena u polje $imena i ispisuje ih '
. 's pomoću petlje "foreach".<br><br>';

$imena=array("Brian","Keith","Mick","Charlie","Ron");

foreach($imena as $ime)
{
    echo $ime."<br>";
}

echo "<hr>";

echo "<h1>2. zadatak</h1>";
echo 'Polju iz prethodnog zadatka promijenite ključeve tako da umjesto '
. 'ključa "1" piše "ime5", umjesto ključa "2" "ime4" itd.<br><br>';

$imena=array();

$imena["ime5"]= "Brian";
$imena["ime4"]= "Keith";
$imena["ime3"]= "Mick";
$imena["ime2"]= "Charlie";
$imena["ime1"]= "Ron";

foreach($imena as $key=>$ime)
{
    echo $key." = ".$ime."<br>";
}

echo "<hr>";

echo "<h1>3. zadatak</h1>";
echo 'Posložite imena u polju iz prvog zadatka abecednim redom '
. 'i ispišite vrijednosti elemenata uz pomoć petlje "for".<br><br>';

$imena=array("Brian","Keith","Mick","Charlie","Ron");

sort($imena);

for($i=0;$i<count($imena);$i++)
{
    echo $imena[$i]."<br>";
}

echo "<hr>";




