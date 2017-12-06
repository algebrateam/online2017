<?php

function nekafunk(){

foreach ($var = func_get_args() as $key => $value) {
	if(gettype($value)=="array"){
     echo "<br>kljuc:$key vrijednost:<b>";
     print_r($value);
     echo "</b> tip:<b>".gettype($value)."</b>";
	}
	else{
	 echo "<br>kljuc:$key vrijednost:<b>$value</b> tip:<b>".gettype($value)."</b>";		
	}

}

}

nekafunk(1,3.14,NULL,"Heloo everyone!",'a',array('sa','df','bv'));


// Definicije funkcija sum() i avg()
function sum(){echo "<br>pokreni sum()<br>";}
function avg(){echo "<br>pokreni avg()<br>";}


$func_name='sum';
$func_name();

$func_name='avg';
$func_name();


//$func_name='nestotrece';
//$func_name();
/*
switch($func_name){

case 'sum':
sum();
break;

case 'avg()':
avg();
break;


}*/

//$func_name();
?><a href="http://www.w3schools.com/php/showphp.asp?filename=demo_global_server">linmk</a>