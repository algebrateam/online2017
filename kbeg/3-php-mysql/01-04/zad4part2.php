<!DOCTYPE html>
<html>
    <head>
        <title>Str 13 zad 2</title>
    </head>
    <body>

        <?php
        echo $_SERVER['DOCUMENT_ROOT'];
        if (isset($_GET['fileno'])) {

            $num = $_GET['fileno'] > 5 ? die("Can't be over 5 ( $_GET[fileno] )") : $_GET['fileno'];

            if ($num !== null) {
                echo "<form method='POST' action='' enctype='multipart/form-data'>";
                echo "<pre>";
                for ($i = 1; $i <= $num; $i++) {

                    echo "<p>File num $i</p><input type='file' name='file[]' multiple>"; //file$i
                    echo "<br/>";
                }
                echo "</pre>";
                echo "<button name='files' type='submit'>Upload</button>";
                echo "</form>";
            }
        }
        ?>

    </body>

    <style type="text/css">

        a {
            display: block;
            width: 50px;
            height: 50px;
        }
    </style>

</html>


<?php
if (isset($_POST['files'])) {
    print_r($_POST['files']);
    foreach ($_FILES['file']["name"] as $file => $key) {
    echo $_FILES['file']["name"][$file];
    echo "<br>";
    move_uploaded_file($_FILES['file']['tmp_name'][$file]
            , "files/" . $_FILES['file']['name'][$file]);
    }
}
?>