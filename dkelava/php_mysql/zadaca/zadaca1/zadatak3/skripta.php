<?php

function writeLinks($num)
{
    for ($i = 0; $i < $num; $i++) {
    echo "<a href='skripta.php?broj=".$i."'>Link ".$i."</a><br/>";
    }
}
writeLinks(5);
if(isset($_GET['broj'])){
    echo "Odabrali ste broj " . $_GET['broj'];
}
