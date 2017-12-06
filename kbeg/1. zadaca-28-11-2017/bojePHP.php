<?php

echo "<h1>Zadatak: Boje i polja</h1>";
echo 'U privitku vam je varijabla $boja iz koje trebate napraviti polje i ispisati. 
          Postupak je da u svom direktoriju napravite novi php file i istražite funkciju 
          explode(), print_r() te ispis uz pomoć foreach() slika sa rezultatom vam je u 
          privitku.<br>';

$input=    
'air_force_blue_raf,"Air Force Blue (Raf)",5d8aa8,93,138,168
air_force_blue_usaf,"Air Force Blue (Usaf)",00308f,0,48,143
air_superiority_blue,"Air Superiority Blue",72a0c1,114,160,193
alabama_crimson,"Alabama Crimson",a32638,163,38,56
alice_blue,"Alice Blue",f0f8ff,240,248,255
alizarin_crimson,"Alizarin Crimson",e32636,227,38,54
alloy_orange,"Alloy Orange",c46210,196,98,16
almond,"Almond",efdecd,239,222,205';

echo "<br>Ispis nakon prebacivanja u array:<br>";

echo "<pre>";
$d = (explode("\n",$input));
print_r ($d);
echo "</pre>";

/*
 * Dobili smo:
 * Array
(
    [0] => air_force_blue_raf,"Air Force Blue (Raf)",5d8aa8,93,138,168
    [1] => air_force_blue_usaf,"Air Force Blue (Usaf)",00308f,0,48,143
    [2] => air_superiority_blue,"Air Superiority Blue",72a0c1,114,160,193
    [3] => alabama_crimson,"Alabama Crimson",a32638,163,38,56
)
 * Želimo dobiti:
 * [5d8aad] => Air Force Blue (Raf)
 * explode(), print_r() te ispis uz pomoć foreach()
 */

echo "<br>Ispis nakon pročišćavanja nepotrebnog:<br>";   

$new_array=array();
foreach($d as $k => $v)
{
    $d2 = explode(',',$input);
    for($i = 1; $i < count($d2); $i +=5){
    $new_array[$d2[$i+1]] = $d2[$i];
    //$new_array[$d2[2]] = $d2[1];
    //$new_array[$d2[7]] = $d2[6];
    //$new_array[$d2[12]] = $d2[11];
    }
}

    echo "<pre>";
    //echo ord('"'); //34
    $newest_array = str_replace(chr(34),"", $new_array);
    print_r($newest_array);
    echo "</pre>";
    
echo "<br>Ispis boja:<br>";

foreach($newest_array as $key => $value){ 
    echo "<pre>";
    //echo $value; 
    echo "<p style='border-radius:10px;margin-right:500px;background-color:#".$key."';>".$value."</p>";
    echo "</pre>";
}




   

   
    


