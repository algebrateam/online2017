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

/*
 * [0] => Spock [ime5]
 * [1] => Kirk  [ime4]
 * [2] => Uhura [ime3]
 * [3] => Scott [ime2]
 * [4] => Sulu  [ime1]
 */

$imena = array(   
	'ime5' => 'Spock',  
	'ime4' => 'Kirk',
	'ime3' => 'Uhura',
	'ime2' => 'Scott',
	'ime1' => 'Sulu'  
 );

echo "<pre>";
print_r($imena);
echo "</pre>";

echo "<hr>";

echo "<h1>3. zadatak</h1>";
echo 'Posložite imena u polju iz prvog zadatka abecednim redom i ispišite vrijednosti elemenata'
. ' uz pomoć petlje <i>for</i>.<br>';

sort($imena);
for ($i=0; $i <=count($imena)-1; $i++)
{
    echo "<pre>";
    echo $imena[$i];
    echo "</pre>";
}
echo "<hr>";

echo "<h1>4. zadatak</h1>";
echo 'Posložite ključeve u polju abecednim redom i ispišite vrijednosti elemenata zajedno s'
. ' pripadajućim ključevima s pomoću petlje <i>foreach</i>.<br>';

$imena = array(   
	'ime5' => 'Spock',  
	'ime4' => 'Kirk',
	'ime3' => 'Uhura',
	'ime2' => 'Scott',
	'ime1' => 'Sulu'  
 );
ksort($imena);

foreach($imena as $key => $ime)
{
    echo "<pre>";
    echo "Element s ključem ".$key. " ima vrijednost ".$ime.".";
    echo "</pre>";
}
echo "<hr>";

echo "<h1>5. zadatak</h1>";
echo 'Napišite program koji će s pomoću petlje <i>for</i> automatski stvoriti polje brojeva'
. ' od 1 do 100 te s petljom <i>foreach</i> ispisati sadržaj polja.<br>';

$max = 100;
$numbers = range(0, $max);

    for ($i=0; $i <=count($numbers)-1; $i++)
    {
    $numbers[$i];
    }

foreach($numbers as $key => $val)
{
    echo "<pre>";
    echo $key. " => ".$val;
    echo "</pre>";
}
echo "<hr>";