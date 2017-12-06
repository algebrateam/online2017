<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$vrijeme= time();
echo $vrijeme;
$mjeseci=[
    'sjec',
    'velja',
    'ozu',
    'trv',
    'svib',
    'lip',
];
echo "danas je: ".$mjeseci[date('n')-1]." mjesec";


echo "Ovo je neki probni timestamp:".date('l dS \o\f F Y h:i:s A',strtotime('25-12-1978'));


function kvadrat($x){
    return $x*$x;
}
echo kvadrat(kvadrat(5));

function zbroj($x,$y=0){
    if(func_num_args()>2){
       return $x+$y+func_get_arg(2); 
    }
    else{
       return $x+$y;
    }
}

echo "<br>";
echo zbroj(5);
echo "<br>";
echo zbroj(5,7);
echo "<br>";
echo zbroj(5,7,99);
