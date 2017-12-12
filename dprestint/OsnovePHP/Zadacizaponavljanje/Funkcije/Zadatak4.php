<?php

function tip_parametra() 

{
    $parametri= func_get_args();
    foreach($parametri as $tip_parametra)
    {
        echo gettype($tip_parametra), "<br>";
    }
        
}
echo tip_parametra("Marko",3,7.3,"Darko",987);

?>


