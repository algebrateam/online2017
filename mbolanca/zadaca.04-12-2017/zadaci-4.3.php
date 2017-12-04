<?php

echo "<h1>1. zadatak</h1>";

$a = " % ";
$b = " && ";
$c = " . ";

echo "Koji je od navedenih operatora aritmetički operator?<br>";
echo "a) $a <br>b) $b <br>c) $c<br>";
echo "<br>";

if (($a == " + ") || ($a == " - ") || ($a == " * ") || ($a == " / ") || 
        ($a == " % ")) {
    echo "Operator" . $a . "je aritmetički operator.<br>";
} else {
    echo "Operator" . $a . "nije aritmetički operator.<br>";
}

if (($b == " + ") || ($b == " - ") || ($b == " * ") || ($b == " / ") || 
        ($b == " % ")) {
    echo "Operator" . $b . "je aritmetički operator.<br>";
} else {
    echo "Operator" . $b . "nije aritmetički operator.<br>";
}

if (($c == " + ") || ($c == " - ") || ($c == " * ") || ($c == " / ") || 
        ($c == " % ")) {
    echo "Operator" . $c . "je aritmetički operator.<br>";
} else {
    echo "Operator" . $c . "nije aritmetički operator.<br>";
}
echo "<hr>";

echo "<h1>2. zadatak</h1>";
echo 'Definirajte dvije varijable, $ime i $prezime, u koje ćete upisati vaše '
. 'ime i prezime.'
. ' Ispišite te dvije varijable koristeći se operatorom za nastavljanje nizova.'
. '<br><br>';

$ime= "Martin";
$prezime="Bolanča";
echo "Moje ime je ".$ime." ".$prezime.".<br>";

echo "<hr>";

echo "<h1>3. zadatak</h1>";
echo 'Postavite vrijednost varijable $a na 5. '
. 'Korištenjem operatora automatskog povećavanja i smanjivanja '
. 'najprije povećajte vrijednost varijable $a te ispišite, a nakon toga '
. 'smanjite vrijednost i ispišite.<br><br>';

$a= 5;
echo 'Vrijednost varijable $a je: '.$a.'.<br>';
$a++;
echo 'Povećana vrijednost varijable $a je: '.$a.'.<br>';
$a--;
echo 'Smanjena vrijednost varijable $a je: '.$a.'.<br>';

echo "<hr>";

echo "<h1>4. zadatak</h1>";
echo 'Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj'
. ' s pomičnim zarezom (float) i ispišite na ekran.<br><br>';

$a=(float)$a;
echo 'Varijabla $a pretvorena u (float) iznosi: '.$a.'.';

echo "<hr>";

echo "<h1>5. zadatak</h1>";
echo 'Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s '
. 'operacijom uvećajte za 5.<br><br>';
$a += 5;
echo 'Varijabla $a uvećana za 5 operacijom dodjeljivanja iznosi: '.$a.'.<br>';

echo "<hr>";

echo "<h1>6. zadatak</h1>";
echo 'Napravite PHP stranicu s dvije varijable $a = 7 i $b = 3. Zatim na ekranu'
. ' ispišite rezultate aritmetičkih operacija na sljedeći način:<br>';
$a= 7;
$b= 3;
echo "a) ".$a." + ".$b." = ".($a+$b)."<br>";
echo "b) ".$a." - ".$b." = ".($a-$b)."<br>";
echo "c) ".$a." * ".$b." = ".($a*$b)."<br>";
echo "d) ".$a." / ".$b." = ".($a/$b)."<br>";
echo "e) ".$a." % ".$b." = ".($a%$b)."<br><br>";

echo $a." + ".$b." = ".($a+$b)."<br>";
echo $a." - ".$b." = ".($a-$b)."<br>";
echo $a." * ".$b." = ".($a*$b)."<br>";
echo $a." / ".$b." = ".($a/$b)."<br>";
echo $a." % ".$b." = ".($a%$b)."<br>";

echo "<hr>";

echo "<h1>7. zadatak</h1>";
echo 'Postavite sada vrijednost varijabla $a i $b iz prethodnog zadatka '
. 'na vrijednosti 4 i 2 i ponovno učitajte stranicu.<br><br>';
$a= 4;
$b= 2;

echo $a." + ".$b." = ".($a+$b)."<br>";
echo $a." - ".$b." = ".($a-$b)."<br>";
echo $a." * ".$b." = ".($a*$b)."<br>";
echo $a." / ".$b." = ".($a/$b)."<br>";
echo $a." % ".$b." = ".($a%$b)."<br>";
