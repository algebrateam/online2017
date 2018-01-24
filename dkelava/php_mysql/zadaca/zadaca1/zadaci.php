<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<h4>ZADATAK 1</h4>";

$forma = "";
$forma .= "<form method='post'>";
    for ($i = 0; $i < 5; $i++) {
        $forma .= "<input placeholder='ime_".$i."' name='ime_".$i."'>";
        $forma .= "<input placeholder='prezime_".$i."' name='prezime_".$i."'><br/>";
    }
$forma .= "<input type='submit' name='submit' value='salji'>";
$forma .= "</form>";

echo $forma;

if(isset($_POST['submit'])){
    $rezultat = $_POST;
    for ($i = 0; $i < 5; $i++) {
    echo $rezultat["ime_".$i] . " " . $rezultat["prezime_".$i] . "<br/>";
    }
}

echo "<h4>ZADATAK 2</h4>";

$forma2 = "";
$forma2 .= "<form method='post' action='forma2.php'>";
$forma2 .= "<input type='number' name='broj_polja'>";
$forma2 .= "<input type='submit' value='Push'>";
$forma2 .= "</form>";

echo $forma2;

