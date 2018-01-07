<?php

echo "<h4>ZADATAK 1</h4>";

function hrMjeseci($mj)
{
    $mjeseci = [];
    $mjeseci[1] = "sijecanj";
    $mjeseci[2] = "veljaca";
    $mjeseci[3] = "ozujak";
    $mjeseci[4] = "travanj";
    $mjeseci[5] = "svibanj";
    $mjeseci[6] = "lipanj";
    $mjeseci[7] = "srpanj";
    $mjeseci[8] = "kolovoz";
    $mjeseci[9] = "rujan";
    $mjeseci[10] = "listopad";
    $mjeseci[11] = "studeni";
    $mjeseci[12] = "prosinac";
    return $mjeseci[$mj];   
}

$mj = date("n");
echo hrMjeseci($mj);

echo "<h4>ZADATAK 2</h4>";

function HTML_Table($imena)
{
    echo  "<table border='4'>"
    . "<tr>"
            . "<th>Ime</th>"
            . "<th>Prezime</th>"
    . "</tr>";
    
    foreach ($imena as $key => $value){
    $new_imena = explode(" ", $value);
    echo
    "<tr>"
            . "<th>" . $new_imena[0] . "</th>"
            . "<th>" . $new_imena[1] . "</th>"
    . "</tr>";
   
    }
    echo "</table>";
}
$imena = ["Danijel Kelava", "Ana Nenadic", "Ana Anci"];
HTML_Table($imena);

echo "<h4>ZADATAK 3</h4>";

function zbroj($a, $b)
{
    return $a + $b;
}
function razlika($a, $b)
{
    return $a - $b;
}
function umnozak($a, $b)
{
    return $a * $b;
}
function dijeljenje($a, $b)
{
    return $a / $b;
}

function aritmeticke_operacije($a, $b)
{
    echo zbroj($a, $b) . "</br>";
    echo razlika($a, $b) . "</br>";
    echo umnozak($a, $b) . "</br>";
    echo dijeljenje($a, $b) . "</br>";
}

aritmeticke_operacije(3, 5);

echo "<h4>ZADATAK 4</h4>";

function parameters()
{
    $params = func_get_args();
    
    foreach ($params as $param) {
        if (is_int($param)){
            echo "Parametar $param je broj</br>";
        }else{
            echo "Parametar $param je string</br>";
        }
    }
}

echo parameters(2, 3, "Ana", "Danijel");