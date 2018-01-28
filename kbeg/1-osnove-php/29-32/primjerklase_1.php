<?php

include "covjek.php";
/**
* 
*/
/**
* 
*/

// $z1=new zivotinja();  // abstraktne klase se ne mogu instancirati
//
$l1=new Lav();
$l1->glasanje();

$v1=new Vepar();
$v1->glasanje();



$c1=new Covjek('Ivica');
$c1->set_ime('Marko');
echo "dobra dan zovem se ".$c1->get_ime();

class Baseokvir
{
	var $c1;

	var $bojatexta;
	function __construct(covjek $c1)
	{
		$this->c1=$c1;
	}
	function bojatexta($boja){
		$this->bojatexta=$boja;
	}
}

// $k1=new Ikupac();   // Ne možemo INSTANCIRATI interface

$b1=new Baseokvir(new covjek('Ljubica'));
echo $b1->c1->get_ime();

class Okvir extends Baseokvir
{
	var $height=100;
	var $width=100;
	var $position='absolute';
	var $top=100;
	var $left=100;
	var $bojaokvira='#4F8FDF';
    var $unutarnji_text="neki text";
	
	function __construct($boja,$top)
	{
		$this->bojaokvira=$boja;
		$this->top=$top;
	}

	function crtaj(){
		echo "<div 
		id='okvir'
		style='background-color:$this->bojaokvira; 
		width:$this->width; 
		height:$this->height; 
		position:$this->position; 
		top:$this->top;
		left:$this->left'>
		$this->unutarnji_text</div>";
	}
}


$d1=new Okvir('#4F8FDF',100);
$d1->crtaj();

$d2=new Okvir('green',150);
$d2->crtaj();

for($i=0;$i<10;$i++){
(new okvir('green',150*$i))->crtaj();

}

$nasarray= array($d1,$d2);

foreach ($nasarray as $key => $value) {
	$value->bojaokvira="yellow";
	$value->unutarnji_text="xxxxxxxxx";
	$value->left=250;
	$value->crtaj();
}

?>

<div>lksjdfkljhaws</div>