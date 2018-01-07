<?php
$timestamp = time();
echo $timestamp;

echo "<hr>";


$naziv ="algebra";
$br_znakova = strlen($naziv);
echo "Naziv ". $naziv. " ima ". $br_znakova. " znakova.";

echo "<hr>";

$polje = array ("tesla", "edison", "bell");

if(is_array($polje))
{
    foreach ($polje as $ime)
    {
        echo $ime;
        
    }
}
else
{        echo 'nije polje';
}

echo "<hr>";

echo 'Danas je mjesec '.date('f'). ", a datum " .date( "d.m.y");
echo "<hr>";
echo str_repeat("?", 10);

echo "<hr>";

function hr_day()
{
    switch (date("w")):
        case "0":
            $day = "nedjelja";
            
        break;
        
        case "1":
            $day = "ponedjeljak";
            
        break;
        case "2":
            $day = "utorak";
            
        break;
        case "3":
            $day = "srijeda";
            break;
        case "4":
            $day = "četvrtak";
            break;
        case "5":
            $day = "petak";
            break;
        case "6":
            $day = "subota";
            
            break;
    endswitch;
    
    echo $day;
}

hr_day();

echo "<hr>";


function ispis_imena($imena)
{
    echo '<table border="1" width="500">';
    
    foreach($imena as $key => $ime)
       
    {

echo "
    <tr>
    <td> ".$key." </td>
        <td> ".$ime."</td>
            
</tr>";
    }
    
    echo "<table>";
    
}

$ucenici = array("Ivan", "Ante", "Petar");
ispis_imena($ucenici);

echo "<hr>";

function sumiraj($a, $b)
{$sum=$a+$b;
return $sum;
}

$x=1;
$y = 2;

echo sumiraj ($x, $y);


echo "<hr>";

$a = 2;

function inc_a()
{
    global $a;
    
    $a++;
    echo $a;
}

inc_a();
echo $a;

echo "<hr>";



