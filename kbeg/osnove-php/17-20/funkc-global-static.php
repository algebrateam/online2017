<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "globalne  static varijable<br>";

//$a=10;
echo "<br>varijabla a: ".$a;
echo "<br>broj a uvećan za 1 je: ".inc_a();
echo "<br>varijabla a: ".$a;

echo "<br>broj a uvećan za 1 je: ".inc_a();
echo "<br>varijabla a: ".$a;

echo "<br>broj a uvećan za 1 je: ".inc_a();
echo "<br>varijabla a: ".$a;


function inc_a(){
    global $a;
    return ++$a;
}

$aa=5;
function inc_aa(){
    static $aa=0;
    return ++$aa;
}
echo "<br>broj aa uvećan za 1 je: ".inc_aa();
echo "<br>varijabla aa: ".$aa;