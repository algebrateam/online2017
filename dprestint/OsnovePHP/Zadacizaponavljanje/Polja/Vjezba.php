<?php

$imena = array("Marko","Darko","Luka","Ivan","Mario");
foreach($imena as $ime)
{ 
    echo $ime. "<br>";
}
"<br>" ;

$imena["ime5"] = "Marko";
$imena["ime4"] = "Darko";
$imena["ime3"] = "Luka";
$imena["ime2"] = "Ivan";
$imena["ime1"] = "Mario";

foreach($imena as $key => $ime)
{ 
    echo $key."=> ".$ime."<br>";
    
}


?>

