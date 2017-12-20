<?php


echo "<h4>ZADATAK 1</h4>";

$imena = ['Danijel', 'Ana', 'Marta', 'Roza', 'Dunja'];

foreach ($imena as $ime) {
    echo $ime . "<br/>";
}

//unset($imena);

echo "<h4>ZADATAK 2</h4>";

$imena['ime5'] = 'Danijel';
$imena['ime4'] = 'Ana';
$imena['ime3'] = 'Marta';
$imena['ime2'] = 'Roza';
$imena['ime1'] = 'Dunja';

foreach ($imena as $key => $ime) {
    echo $key . "=>" . $ime . "<br/>";
}

echo "<h4>ZADATAK 3</h4>";

$imena = [];

$imena[] = 'Danijel';
$imena[] = 'Ana';
$imena[] = 'Marta';
$imena[] = 'Roza';
$imena[] = 'Dunja';

sort($imena);

for ($i = 0; $i <= count($imena)-1; $i++) {
    echo $imena[$i] . "<br/>";
}
echo "<h4>ZADATAK 4</h4>";

$imena= [];

$imena['ime5'] = 'Danijel';
$imena['ime4'] = 'Ana';
$imena['ime3'] = 'Marta';
$imena['ime2'] = 'Roza';
$imena['ime1'] = 'Dunja';

ksort($imena);

foreach ($imena as $key => $value) {
    echo $key . "<br/>";
}
echo "<h4>ZADATAK 4</h4>";

$brojevi = [];

for ($i = 1; $i <= 100; $i++) {
   $brojevi[] = $i;  
}

foreach ($brojevi as $broj) {
       echo $broj . " ";
   }
echo "<h4>ZADATAK 5</h4>";



