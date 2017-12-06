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
    'srp',
    'kolovoz',
    'rujan',
    'list',
    'stud',
    'prosinac'
];
echo "<br>danas je: ".$mjeseci[date('n')-1]." mjesec";


echo "<br>Ovo je neki probni timestamp:".date('l dS \o\f F Y h:i:s A',strtotime('06-12-2017'));


echo "<hr>";

# ovako kreiramo svoju funkciju kvadrat
function kvadrat($x){
    return $x*$x;
}
echo "ispis funkcije (2^2)^2=".kvadrat(kvadrat(2));

echo "<hr>";

# zbroj() prima 1 do dva parametra s time da ako drugi nije zadan
# njegova default vrijednost je 0
function zbroj($x,$y=0){
    echo "parametri su:";
    echo "<pre>";
    print_r(func_get_args());
    echo "<pre>";
    
   
    if(func_num_args()>3){
        
        #  nagradni zadatak za + 
        # $zbroj+= array_map("zbroj",func_get_args());
        $zbroj=0;
        foreach (func_get_args() as $value) {
            $zbroj+=$value;
        }
        return $zbroj;
        # jedan od načina je koristiti gotovu aray_sum funkciju
       # return array_sum(func_get_args()); 
    }
    
    if(func_num_args()==3){
       return $x+$y+func_get_arg(2); 
    }
    else{
       return $x+$y;
    }
}

echo "<br> Rješenje je: ";
echo zbroj(5);
echo "<br> Rješenje je: ";
echo zbroj(5,7);
echo "<br> Rješenje je: ";
echo zbroj(5,7,99);
echo "<br> Rješenje je: ";
echo zbroj(5,7,99,1);
echo "<br> Rješenje je: ";
echo zbroj(2,2,2,2,2,2,2,2,2);