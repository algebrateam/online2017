<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>1. zadatak</h1><br>";

$filename='neka_datoteka.txt';

$handle=fopen($filename,'r');
$contents=fread($handle,filesize($filename));
fclose($handle);

echo $contents."<br>";


