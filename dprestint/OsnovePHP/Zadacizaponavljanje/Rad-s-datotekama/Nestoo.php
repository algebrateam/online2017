
<?php

$filename = 'Zadatak3.txt' ;
$handle = fopen($filename,'a+');
fwrite($handle, ' - Author ' ) ;
fclose ($handle) ;
echo file_get_contents("Zadatak3.txt");
?>

