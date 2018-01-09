<?php


echo "<h4>ZADATAK 1</h4>";


$filename = "ucenici.txt";
$datoteka = file($filename);

foreach ($datoteka as $line_num => $line) {
    echo "<b>$line_num</b>$line</br>";
}

echo "<h4>ZADATAK 2</h4>";

echo "
<form method='POST' action=''>
    <input type='text' name='txt'/></br>
    <input type='submit' name='btn' value='salji'/>
</form>";

if (isset($_POST['btn']))
{ 
    $filename = "ucenici.txt";
    $handle = fopen($filename, "a+" );
    fwrite($handle, $_POST['txt'] . "\n");
    fclose($handle);
}