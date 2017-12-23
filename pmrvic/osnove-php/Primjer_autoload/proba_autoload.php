<?php

namespace pets;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'autoload.php';

use Macke as feline;
use Psi as canine;
Use \Macke\Cat as maca;

echo \Macke\Cat::says(). "<br />\n";
echo \Psi\Dog::says(). "<br />\n";


// Dohvacanje kroz instancu klase (bez static)
$c1= new \Macke\Cat();
echo " <hr>";
echo $c1->says();
echo $c1->prede();
echo " ovo je od instancirane klase (objekt Cat)<br>";

// Pomoću alijasa
echo feline\Cat::says(), "<br />\n";
echo canine\Dog::says(), "<br />\n";

echo maca::says();
$m1=new maca();
echo $m1->prede();

echo "<hr> proba sa exceptionima<br>";
try {
  $m1 = new maca();
  echo $m1->prede(5);
} catch (Exception $e) {

  echo "Message: " . $e->getMessage() . "\n\n";
  echo "File: " . $e->getFile() . "\n\n";
  echo "Line: " . $e->getLine() . "\n\n";
  echo "Trace: \n" . $e->getTraceAsString() . "\n\n";
}
echo "<hr> nastavak iza exceptiona<br>";
  
  