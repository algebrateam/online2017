<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// naredba define

define("PDV", 25);
define("IME", "Danijel Kelava");
echo "PDV je " . PDV . "%.<br/>";
echo "Moje ime je " . IME . ".<br/>";
$broj = 6;
$decimalni_broj = 7.5;
$bool = false;


echo gettype($broj) . "<br/>";
echo gettype($decimalni_broj) . "<br/>";
echo gettype($bool) . "<br/>";

  if($bool){echo "true";}
else{echo "false";}  