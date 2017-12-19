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

echo \Macke\Cat::says(), "<br />\n";
echo \Psi\Dog::says(), "<br />\n";


// Pomoću alijasa
echo feline\Cat::says(), "<br />\n";
echo canine\Dog::says(), "<br />\n";

echo maca::says();


try {
  $m1 = new maca();
  $m1->prede();
} catch (Exception $e) {

  echo "Message: " . $e->getMessage() . "\n\n";
  echo "File: " . $e->getFile() . "\n\n";
  echo "Line: " . $e->getLine() . "\n\n";
  echo "Trace: \n" . $e->getTraceAsString() . "\n\n";
}
  
  