

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
    $handle = fopen($filename, 'a');  
    fwrite($handle, $_GET['ime']);  
    fclose($handle);
}




