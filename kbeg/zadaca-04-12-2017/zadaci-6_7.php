<?php

echo "<h1>1. zadatak</h1>";
echo 'Napišite program koji upisuje pet imena u polje $imena i ispisuje ih s pomoću petlje <i>foreach</i>.<br>';

$imena=array('Spock','Kirk','Uhura','Scott','Sulu');

foreach($imena as $key => $ime)
{
    echo "<pre>";
    echo "Element broj ".$key. " ima vrijednost ".$ime.".";
    echo "</pre>";
}
echo "<hr>";

echo "<h1>2. zadatak</h1>";
echo 'Polju iz prethodnog zadatka promijenite ključeve tako da umjesto ključa 1 piše ime5,'
. ' umjesto ključa 2 ime4 itd.<br>';
