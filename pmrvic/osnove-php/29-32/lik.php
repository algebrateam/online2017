<?php

interface Ilik{
function povrsina();
function opseg();
}

abstract class lik implements Ilik 
{
	private $a;
	function povrsina()
	{
		return $this->a*$this->a/2;  // ovo je istostraničan trokut
	}
}

class kvadrat extends lik{
	function __construct($a){
		$this->a=$a;
	}
	function povrsina()
	{
		return $this->a*$this->a;
	}
	function opseg(){}
}

class krug extends lik{
private $blue="<br>++++++ 10  +++++<br>";
	function __construct($a){
		$this->a=$a;
	}
		function povrsina()
	{
		return $this->a*$this->a*M_PI;
	}
		function opseg(){

		}
	
	public function getBlue(){
		return $this->blue;
	}
}


$krug1=new krug(5);
echo "<br>Krug polumjera ".
     $krug1->a.
     " ima površinu ".
     $krug1->povrsina();
     // echo $krug1->blue;  // ne može jer je $blue private
     echo $krug1->getBlue();

$kvadrat1=new kvadrat(5);
echo "<br>Kvadrat stranice ".
     $kvadrat1->a.
     " ima površinu ".
     $kvadrat1->povrsina();


?>