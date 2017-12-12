<?php



abstract class zivotinja{
function glasanje(){
	echo "roar";
}
}
class lav extends zivotinja{

}
class Vepar extends zivotinja{
function glasanje(){
	echo "ghgrgrgh";
}
}


class covjek{
	// var $ime="moje defaoultno ime";
    var $ime;

    function __construct($novoime){
    	$this->ime=$novoime;
    }

	function set_ime($ime){
		$this->ime=$ime;
	}
	function get_ime(){
		return $this->ime;
	}
	function __destruct(){
	//	 echo "<br>nema više objekta zvanog ".$this->ime;
	}


}


interface Ikupac{
	function ispis();
}

//////////KLASA KUPAC///////////////
class kupac extends covjek implements Ikupac{
//svojstva kupca
var $id_kupca;
var $potroseni_iznos;

// overridamo base/parent __constuct()
function __construct($novo_ime){
  parent::__construct($novo_ime);
  $this->id_kupca=1234;
}
function ispis(){

	echo "<br>+++++ ".$this->ime." ima id:".$this->id_kupca." a potrosio je:".$this->potroseni_iznos;

}
}
?>