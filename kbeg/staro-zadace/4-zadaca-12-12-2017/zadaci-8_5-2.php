<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>2. zadatak</h1><br>";

echo '<form method="POST" action="">'
. 'Unos teksta: <input type="text" name="txt" value"" /><br><br>'
. '<input type="submit" name="btn" value="Spremi"/>'
. '</form>';

if(isset($_POST["btn"]))
{
    $filename='datoteka_zad2.txt';
    $handle=fopen($filename,'a+');
    fwrite($handle,$_POST["txt"]);
    fclose($handle);
}

