<?php

//Kreiramo funkciju sa definironom greškom
function checkNum($number) {
  if($number>1) {
    throw new Exception("Vrijednos mora biti manja ili jednaka 1");
  }
  return true;
}

// namjerno radimo gresku
checkNum(2);
