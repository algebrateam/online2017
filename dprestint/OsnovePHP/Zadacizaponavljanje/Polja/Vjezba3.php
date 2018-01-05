<?php

$imena = array();

$imena["ime5"] = "Marko";
$imena["ime4"] = "Darko";
$imena["ime3"] = "Luka";
$imena["ime2"] = "Ivan";
$imena["ime1"] = "Mario";

sort($imena) ;

foreach($imena as $key =>$ime)
{
    echo $key."=> ".$ime."<br>";
}

?>

