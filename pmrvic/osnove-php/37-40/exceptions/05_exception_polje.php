<?php
set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }
}


$polje=[5,55,555,555,555,555,555,66];

try{
for ($i=0; $i<8; $i++){
    echo $polje[$i]."<br>";
}

    
}
 catch (Exception $e){
     echo "<hr> dragi klijente imaš greškicu ali ti sve oprastam jer me plaćaš... <br>";
 }

echo "<hr>Hvala na suradnji!";
