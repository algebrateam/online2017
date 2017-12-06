<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo "<h1>1. zadatak</h1><br>";

function hr_mjesec()
{
   switch (date('n')):
   case '1': $mjesec='siječanj'; break;
   case '2': $mjesec='veljača'; break;
   case '3': $mjesec='ožujak'; break;
   case '4': $mjesec='travanj'; break;
   case '5': $mjesec='svibanj'; break;
   case '6': $mjesec='lipanj'; break;
   case '7': $mjesec='srpanj'; break;
   case '8': $mjesec='kolovoz'; break;
   case '9': $mjesec='rujan'; break;
   case '10': $mjesec='listopad'; break;
   case '11': $mjesec='studeni'; break;
   case '12': $mjesec='prosinac'; break;
   endswitch;
   echo "Trenutačni mjesec je: ".$mjesec."<br><hr>";
}

hr_mjesec();

echo "<h1>2. zadatak</h1><br>";

function ispis_imena_ucenika($imena)
{
    echo '<table border="1" width="500">';
    
    foreach($imena as $key => $ime)
    {
        echo '<tr><td>'.$key.'</td>'
                . '<td>'.$ime.'</td></tr>';
    }
    echo '</table>';
}

$ucenici = array('Sheldon Cooper','Leonard Hofstadter','Rajesh Koothrappali','Howard Wolowitz');
ispis_imena_ucenika($ucenici);
echo "<hr>";

echo "<h1>3. zadatak</h1><br>";

function zbrajanje($a,$b)
{
    $zbroj = $a+$b;
    return $zbroj;
}

function razlika($a,$b)
{
    $razlika = $a-$b;
    return $razlika;
}

function umnozak($a,$b)
{
    $umnozak = $a*$b;
    return $umnozak;
}

function dijeljenje($a,$b)
{
    $dijeljenje = $a/$b;
    return $dijeljenje;
}



function sve_funkcije(){
    $x=5;
    $y=10;
    echo "Zbrajanje: ".zbrajanje($x,$y)."<br>";
    echo "Razlika: ".razlika($x,$y)."<br>";
    echo "Umnožak: ".umnozak($x,$y)."<br>";
    echo "Dijeljenje: ".dijeljenje($x,$y)."<br>";
}

sve_funkcije();
echo "<hr>";

echo "<h1>4. zadatak</h1><br>";

function parametri()
{
    $parametri = func_get_args();
    
    foreach ($parametri as $parametar)
    {
        if (is_int($parametar))
        {
            echo "Parametar ".$parametar. " je broj<br>";
        }
        else 
        {
            echo "Parametar ".$parametar. " je string<br>";
        }
    }
}

echo parametri('Atlantis', 3, 'Aurora', 5);

