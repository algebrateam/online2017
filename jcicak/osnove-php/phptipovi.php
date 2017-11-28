<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// naredba define
// osnovni tipovi
//
define("ORIGIN","https://github.com/CicakJure/online2017");
define("UPSTREAM","https://github.com/algebrateam/online2017");
define("MASTER","master"); // ime master brancha

define("PDV" ,25);
echo "PDV u HR je".PDV."%";

echo "<br>procedura rada s gitom:<br>";
echo "git pull ".UPSTREAM." " .MASTER;


echo "<br> tipovi:.";

$broj5=5;
echo "<br>ja sam int broj ".$broj5. " ";

$decimalni=5.6;
echo "<br>ja sam decimalni broj ".$decimalni. " ";

echo "<br>ja sam ".gettype($broj5)." tip ". "i moja vrijednost je " .$broj5;
echo "<br>ja sam ".gettype($decimalni)." tip ". "i moja vrijednost je " .$decimalni;


$bool=true;
echo "<br>ja sam ".gettype($bool)." tip ". "i moja vrijednost je ";
if(! $bool){echo "false";}
else {echo "true";}


