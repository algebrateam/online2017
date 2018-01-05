<?php

function ispis ($brPonavljanja, $tekst)
{
	echo str_repeat($tekst, $brPonavljanja);
}
ispis (5,'nesto  ');

function usporedi ($arr1,$arr2)
{
	$x = array();
	$x1 = array_diff($arr1, $arr2);
	$x2 = array_diff($arr2, $arr1);
	$x = array_merge($x1,$x2);
	return $x;

}
$p1 = array(1,2,4,5);
$p2 = array(1,2,7,8);
echo '<pre>';
print_r (usporedi($p1,$p2));
echo '</pre>';



?>