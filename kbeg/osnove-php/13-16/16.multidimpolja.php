<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>multidim polje</h1>";

$p1 = array(1, 2, 3);
$p2 = array(4, 5, 6);
$p3 = array(7, 8, 9);
$m1 = array($p1, $p2, $p3);

function pp(&$polje) {
    echo "<pre>";
    print_r($polje);
    echo "</pre>";
}

// tražimo broj 6
echo "Ovo je drugi član iz prvog polja: " . $m1[1][2];
$p4 = [10, 11, 12];
array_push($m1, $p4);
//pp($m1);
echo "<br>";

function pmp(&$m1) {
    for ($i = 0; $i < count($m1); $i++) {
        for ($j = 0; $j < count($m1[$i]); $j++) {
            echo $m1[$i][$j] . " ";
        }
        echo "<hr>";
    }
}
pmp($m1);

function foric(&$m1) {
    foreach ($m1 as $key => $value) {
        foreach ($value as $key => $v) {
            echo $v." ";
        }
        echo "<br>";
    }
}

foric($m1);
//pp($m1);
//pp($p2);







