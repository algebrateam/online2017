<?php

echo "<h1>1. zadatak</h1>";
echo 'Koji je od navedenih operatora aritmetički operator?<br>'
. 'a) %<br>b) &&<br>c) .<br>';

$a='%';
$b='&&';
$c='.';

echo "<br>";

$op_zbrajanja='+';
$op_oduzimanja='-';
$op_mnozenja='*';
$op_dijeljenja='/';
$modul='%';

if(($a==$op_zbrajanja) || ($a==$op_oduzimanja) || ($a==$op_mnozenja) || ($a==$op_dijeljenja) || ($a==$modul))
{
    echo "Operator ".$a." je aritmetički operator.<br>";
}else
{
    echo "Operator ".$a." nije aritmetički operator.<br>";
}

if(($b==$op_zbrajanja) || ($b==$op_oduzimanja) || ($b==$op_mnozenja) || ($b==$op_dijeljenja) || ($b==$modul))
{
    echo "Operator ".$b." je aritmetički operator.<br>";
}else
{
    echo "Operator ".$b." nije aritmetički operator.<br>";
}

if(($c==$op_zbrajanja) || ($c==$op_oduzimanja) || ($c==$op_mnozenja) || ($c==$op_dijeljenja) || ($c==$modul))
{
    echo "Operator ".$c." je aritmetički operator.<br>";
}else
{
    echo "Operator ".$c." nije aritmetički operator.<br>";
}

echo "<hr>";

echo "<h1>2. zadatak</h1>";
echo 'Definirajte dvije varijable, $ime i $prezime, u koje ćete upisati vaše ime i prezime.'
. ' Ispišite te dvije varijable koristeći se operatorom za nastavljanje nizova.<br>';

$ime='Kristina';
$prezime='Beg';
echo "Zovem se ".$ime." ".$prezime.".<br>";
echo "<hr>";

echo "<h1>3. zadatak</h1>";
echo 'Postavite vrijednost varijable $a na 5. Korištenjem operatora automatskog povećavanja'
. ' i smanjivanja najprije povećajte vrijednost varijable $a te ispišite, a nakon toga'
        . ' smanjite vrijednost i ispišite.<br>';

$a=5;
echo "Vrijednost varijable a je ".$a.".<br>";
echo "Povećana vrijednost varijable iznosi ".++$a.".<br>";
echo "Umanjena vrijednost varijable iznosi ".--$a.".<br>";
echo "<hr>";

echo "<h1>4. zadatak</h1>";
echo 'Varijablu $a iz prethodnog zadatka operatorom pretvorbe pretvorite u broj'
. ' s pomičnim zarezom (float) i ispišite na ekran.<br>';

$b=(float)$a;
echo "Varijabla a pretvorena u float iznosi ".$b." i tipa je ".gettype($b).".<br>";
echo "<hr>";

echo "<h1>5. zadatak</h1>";
echo 'Varijablu $a iz prethodnog zadatka operatorom dodjeljivanja s operacijom uvećajte za 5.<br>';
$a += 5;
echo "Varijabla a uvećana za 5 operacijom dodjeljivanja iznosi: ".$a.".<br>";
echo "<hr>";


