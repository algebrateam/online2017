<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "Uskrs pada nakon " . easter_days(2018). ". dana nakon 21.3.<br/>";
//echo "Uskrs za 2018 je " . date_format(easter_date(2018), "Y/m/d");
//TODO rijesi datum

echo "Uskrs je " . date("d.m.Y", easter_date(2018)) . ".<br/>";

$myName = "Danijel Kelava";
echo "Moje ime je " . $myName . ".<br/>";

/**
 * 
 * 
 * Rezervirano za dokumentaciju
 * /
 */

$a = 3;
$b = 7;
$c = $a + $b;

$ispis = "Zbroj brojeva " . $a . " i " . $b . " je " . $c . ".";
echo $ispis;

