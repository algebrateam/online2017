<?php

$imena=array();

$imena[] = "Marko";
$imena[] = "Darko";
$imena[] = "Luka";
$imena[] = "Ivan";
$imena[] = "Mario";

sort($imena);
for($i=0;$i<=4;$i++) 
{
echo $imena[$i]."<br>";
}
?>