<?php

if(!is_numeric($_GET['broj_fileova'])){
    header("Location: upload.php");
}

$upload_forma = "";
$upload_forma .= "<form method='post' enctype='multipart/form-data'>";
for ($i = 0; $i < $_GET['broj_fileova']; $i++) {
    $upload_forma .= "<input type='file' name='file[]' multiple><br/>";
}
$upload_forma .= "<input type='submit' name='upload' value='upload'>";
$upload_forma .= "</form>";

echo $upload_forma;

if (isset($_POST['upload'])) {
    print_r($_FILES);
    echo "<br/>";
    foreach ($_FILES['file']['name'] as $key => $value) {
    echo $_FILES['file']['name'][$key];
    echo "<br>";
    move_uploaded_file($_FILES['file']['tmp_name'][$key], "test/" . $_FILES['file']['name'][$key]);
    }
}

