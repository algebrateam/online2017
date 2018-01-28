<html>
    
    <body>
        
        <form>
            <input type="text" id="ime" name="ime">
            <input type="submit">
        </form>
        
    </body>
</html>


<?php

if(isset($_GET['ime'])){
    $filename = 'upisIzForme.txt';
    $handle = fopen($filename, 'a');  // mogli smo i w
    fwrite($handle, $_GET['ime']);  //filter_input()
    fclose($handle);
}
