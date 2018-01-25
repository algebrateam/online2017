<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$filename = "ucenici.txt";

$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));//sav sadrzaj je u jednoj varijabli

fclose($handle);

echo $contents;

echo "<br/>";

$datoteka = file($filename);//mozemo citati redak po redak

foreach ($datoteka as $line_num => $line) {
    echo "Red " . $line_num . " " . $line . "<br/>";
    
    //PISANJE U DATOTEKU
    
    /*$handle = fopen($filename, "a");
    fwrite($handle, "Mara Maric");
    
    fclose($handle);*/
    
    if(is_dir($filename)){
      echo "yes";  
    }
    
    
    
}