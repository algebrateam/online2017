<?php
echo "<h4>ZADATAK 1</h4>";
$a = 2;
$b = 2;

if ($a > $b){
   echo "$a je vece od $b";
}elseif($a < $b){
    echo "$a je manje od $b";
}else{
    echo "$a je jednako $b";
}

echo "<h4>ZADATAK 2</h4>";

$a = 5;
$b = 4;

if($a > $b){
   $a++; 
}elseif ($a < $b) {
   $b--;
}else{
   echo "OK"; 
}

echo $a . "</br>" . $b;

echo "<h4>ZADATAK 3</h4>";

$number = 1;
while ($number <= 50){
    echo $number . "</br>";
    $number++;
}

echo "<h4>ZADATAK 4</h4>";

$result = 0;
for ($i = 20; $i <= 30; $i++) {
    $result+= $i;
}
echo $result;
