<?php

class Example
{
public static function factory($type){
	if(include_once 'Drivers/'.$type.'.php'){
		$classname='Driver_'.$type;
		return new $classname;
	}
	else{
		throw new Exception("<br>Driver nije pronadjen", 1);
		
	}
}
}

$pro = Example::factory('proba');
$pro->pozdravi();

?>