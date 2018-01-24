<?php

if(!is_numeric($_GET['broj_fileova'])){
    header("Location: upload.php");
}

$upload_forma = "";
$upload_forma .= "<form method='post' enctype='multipart/form-data'>";
for ($i = 0; $i < $_GET['broj_fileova']; $i++) {
    $upload_forma .= "<input type='file' name='file'><br/>";
}
$upload_forma .= "</form>";

echo $upload_forma;