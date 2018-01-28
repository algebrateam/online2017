<?php

$polje_brojeva=array();

function show_polje(){
    global $polje_brojeva;
    
    $polje_brojeva[]=11;
    $polje_brojeva[]=100;
    $polje_brojeva[]=111;
    print_r($polje_brojeva);
}

    $polje_brojeva[]=22;
    $polje_brojeva[]=200;
    $polje_brojeva[]=211;

show_polje();
print_r($polje_brojeva);