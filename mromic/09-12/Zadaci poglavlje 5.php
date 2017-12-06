<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Zadatak broj 1:<br>';
$a=4; 
$b=2; 
if($a<$b){ 

    echo"$a je manje od $b"; 
}elseif($a==$b){ 

    echo("Jednaki su"); 
}else{ 

    echo"$b je manje od $a"; 
};

echo "<hr>Zadatak broj 2:<br> ";
    
$a = 10;
$b = 9;

if ($a<$b){
    $a++;
}
   
    
else {
    $b--;
}  
echo "a=".$a ;
echo"<br>b=$b";
            
echo '<hr>Zadatak broj 3.<br>';

$broj = 1;

while ( $broj <= 50 ) {
  print "$broj<br />";
  $broj += 1;
}

echo '<hr> Zadatak broj 4: <br>';

$zbroj = 0;

for ($i = 20; $i <= 30; $i++) {
   $zbroj += $i;
}

echo 'Zbroj brojeva od 20 do 30 je: ' . $zbroj;