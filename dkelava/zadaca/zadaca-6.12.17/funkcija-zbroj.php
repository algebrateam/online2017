<?php

function zbroj($x,$y=0){
    /*echo "parametri su:";
    echo "<pre>";
    print_r(func_get_args());
    echo "<pre>";*/
    $args = func_get_args();

    if(func_num_args()>3){
        // pozovemo nasu funkciju i spremimo 
        $callback = zbroj($args);
        return array_map($callback, func_get_args());

    }   
    return $x + $y;
}

echo "<br> Rješenje je: ";
var_dump(zbroj(5,7,99,1));


