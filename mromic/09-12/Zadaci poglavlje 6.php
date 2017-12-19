<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Odgovor na zadatak broj 1. je :';

$imena = array('Iva','Ema','Anja','Vanja','Sanja');
        
        foreach($imena as $ime)       
{
    echo "<br>". $ime;
}
echo "<hr>";

echo 'Odgovor na zadatak broj 2. je: ';

echo "<br>";

krsort($imena);
print_r($imena);

echo "<hr>";

echo 'Odgovor na zadatak broj 3. je: ';
echo "<br>";

sort($imena);

for ($i = 0; $i <= count($imena)-1; $i++) {
    echo $imena[$i] . "<br/>";
}

echo "<hr>";

echo 'Odgovor na zadatak broj 4. je: ';

echo "<br>";


$imena = array("e" => 'Iva', "d" => 'Ema', "c" => 'Anja', "b" => 'Vanja', "a"=>'Sanja');


print_r($imena);

ksort($imena);

foreach ($imena as $key => $ime)
{    echo "<br>". $key;
}

echo "<hr>";

echo 'Odgovor na zadatak broj 5. je: ';

echo "<br>";


for ($i = 1; $i <= 100; $i++)

foreach (array($i) as &$lista) {
    echo  $lista;

}

