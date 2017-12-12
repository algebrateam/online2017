<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>3. zadatak</h1><br>";

$filename='datoteka_zad3.txt';

echo '<form method="POST" action="">'
. 'Unesi tekst: '
. '<textarea name="txt">';

$datoteka=file($filename);

foreach ($datoteka as $key => $value)
{
    echo $value."\n";
}

echo '</textarea><br><br>
<input type="submit" name="btn" value="Spremi"/></form>';

if(isset($_POST["btn"]))
{
    $handle=fopen($filename,'a+');
    fwrite($handle,$_POST["txt"]);
    fclose($handle);
}