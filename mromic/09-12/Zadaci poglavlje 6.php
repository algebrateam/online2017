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
    echo $ime;
}
echo "<hr>";

echo 'Odgovor na zadatak broj 2. je: ';

echo "<br>";

krsort($imena);
print_r($imena);

echo "<hr>";

echo 'Odgovor na zadatak broj 3. je: ';
echo "<br>";

asort($imena);

for($i=0; $i<=4; $i++)
{
     echo $imena[$i];
}








