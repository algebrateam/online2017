<?php

$forma = "";
$forma .= "<form method='get' action='upload_files.php'>";
$forma .= "<input type='number' name='broj_fileova' min='1' max='5'><br/>";
$forma .= "<input type='submit' value='Push'>";
$forma .= "</form>";

echo $forma;
