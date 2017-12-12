<?php
$filename = 'ucenici.txt' ;
$handle = fopen($filename,'r');
$contents = fread($handle,filesize($filename));
fclose($handle);
echo $contents;



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

