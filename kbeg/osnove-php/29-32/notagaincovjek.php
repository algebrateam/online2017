<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'Covjek.class.php';

$c1=new Covjek('ivica');
$c1->set_ime('marko');
echo "dobra dan zovem se ".$c1->get_ime();

$c2 = new Covjek();
echo "dobra dan zovem se ".$c2->get_ime();
$c2->set_ime('marija');

echo "<br>dobra dan zovem se ".$c2->get_ime();
//unset($c2);
$c2->ime="ružica";
//$c2->set_prezime("Getto");  // zabranjujem pristup, mora se definirati u klasi

echo "<br>dobra dan zovem se "
        .$c2->ime
        ." a prezivam "
        .$c2->get_prezime();

$k1=new Kupac('Ljubica');
echo "<br>ja sam kupac i zovem se:" .$k1->get_ime();

$k1->ispis();