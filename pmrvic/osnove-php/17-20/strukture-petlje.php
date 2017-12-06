
<?php

$a = 7;
echo $a . " <br>";

if ($a > 10) {
    echo "a je veće od 10";
} else if ($a >= 8) {
    echo "a je jednak ili manji od 10 ali veći od 8";
} else {
    echo "a je manji od 8";
}


echo "<hr>";

# varijabla mora biti manja od 5 ili veća od 10
# <bes -> 5> [10 ->  bes>
#
unset($a);
$a = 4;
if (($a < 5 || $a >= 10) && $a % 2 == 0) {
    echo "Dobitak!<br>";
} else {
    echo "Nije dobitni<br>";
}

//////////////////////


$naziv = 'Algedv12345';

// PRVI NAČIN UGNJEŽDENI
if (strlen($naziv) > 10) {
    echo "naziv ima više od 10 znakova";
} else {
    if (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
        echo "Dužina naziva je u zadanom nizu";
    } else {
        echo "naziv je prekratak";
    }
}

// DRUGI NAČIN SERIJA
echo "<br>Drugi način:<br>";
if (strlen($naziv) > 10) {
    echo "naziv ima više od 10 znakova";
} elseif (strlen($naziv) >= 5 && strlen($naziv) <= 10) {
    echo "Dužina naziva je u zadanom nizu";
} else {
    echo "naziv je prekratak";
}

///// Kratki način "if-else"
echo "<br>";

$broj = 3;

$b = ($broj > 5) ? -1 : 1; //  (uvijet)?true:false;// Postavi b za sve veće od 5

echo $b;

($broj%2==0) ? $c= "broj je paran" : $c= "broj je neparan";
echo $c;      
        
/// Switch-case
?>