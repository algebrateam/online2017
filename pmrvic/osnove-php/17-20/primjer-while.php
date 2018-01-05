<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

#Primjer beskonačne petlje
/*
while(true){
    echo "Printajjjjjjj";
}
*/
$a=true;
$b=0;
/*
while($a){
    echo "Printajjjjjjj ".$b."<br>";
    $b+=3;
   $a=($b%176==0) ? false : true;   
}
*/
/*
while($a){
    echo "Printajjjjjjj ".$b."<br>";
    $b+=5;
   if($b%176==0)break;   
}
*/
/*
while($a){
    $b+=3;
    if($b%5==0)continue;
    
     echo "Printajjjjjjj ".$b."<br>"; 
     
   if($b%176==0)break;   
}*/

## koristiti unificirane brojače
# $i, $j, $k
for($pocetni=0;$pocetni<=100;$pocetni+=3){
    echo " ".$pocetni;
}
for($i=0;$i<=100;$i+=3){
    echo " ".$i;
}
for($ii=0;$ii<=100;$ii+=3){
    echo " ".$i;
}
