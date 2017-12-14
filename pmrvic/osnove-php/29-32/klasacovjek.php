<?php

echo "Klase i objekti<br>";

class covjek{
    // var $ime="moje defaoultno ime";
protected $ime;
//private $ime;

function __construct($novoime='John Doe'){
    //provjera($novoime);
    if (gettype($novoime)!='string'){
            echo "alo brale ime mora nbiti string";
            exit;
    }
    else{
    $this->ime=ucfirst($novoime);	
    }

}
// ovo se naziva SETTER

    public function set_ime($ime){
        // dodan MODIFIKATOR koji prvo slovo prevara u veliko
            $this->ime=ucfirst($ime);
    }

    // ovo se naziva GETTER
    function get_ime(){
            return $this->ime;
    }

    function __destruct(){
    echo "<br> ".$this->ime." je gecrk";
    // npr fclose($handle); //file pisanje
    //mysqli_close($link); //zatvori DB conn
    }


}

$c1=new covjek();
//echo "ispis public imena: +++++ ".$c1->ime;

echo "<br>Kreiran je covjek:".$c1->get_ime();
echo "<br>";

$c1->set_ime("marko");
echo "<br>Moje ime je ".$c1->get_ime();

$c1->set_ime("Dalibor");
echo "<br>Moje ime je ".$c1->get_ime();

$c2=new covjek('Ljilja');
echo "<br>c2 se zove: ".$c2->get_ime();

$c4=$c1;
//$c1=NULL;  // ubijamo $c1
unset($c1);

$c3=new covjek('Marijan');
echo "<br>c2 se zove: ".$c3->get_ime();

$ljudi=array();
array_push($ljudi, $c4);
array_push($ljudi, $c2);
array_push($ljudi, $c3);
echo "<pre>";
var_dump($ljudi);
echo "</pre>";

//////////KLASA KUPAC///////////////
class kupac extends covjek implements Ikupac{
var $id_kupca;
private $potroseni_iznos;

public function set_potroseni_iznos($lova=0){
    if(is_numeric ( $lova )){
    $this->potroseni_iznos=$lova;
    }
    else {
        echo "<br><b style='color:red'>IZNOS MORA BITI BROJ</b>";
    }
}

function __construct($novo_ime){
parent::__construct($novo_ime);
$this->id_kupca=1234;
}
function ispis(){

    echo "<br>+++++ ".$this->ime." ima id:".$this->id_kupca." a potrosio je:<i>".$this->potroseni_iznos."</i>";

}

    public function ime_obratno() {
        return strrev ($this->get_ime());
    }

}

$k1=new kupac('12345');
// 
// Ispisi ime, ID, te potrošeni iznos
//
$k1->ispis();
$k1->set_potroseni_iznos('xxy');
$k1->set_potroseni_iznos(123.45);
$k1->ispis();

echo "<br>---- ime kupca je ",$k1->get_ime();
echo "<br>---- obrnuto ime kupca je: ",$k1->ime_obratno();


$k2=new kupac('Jane Doe');
$k2->set_potroseni_iznos(2978.99);
$k2->ispis();
echo "<br>---- obrnuto ime Jane je: ",$k2->ime_obratno();  
//.$k1->ime;  // ovo ne koristimo jer je ime private

interface Ikupac{
    function ispis();
    function ime_obratno();
}



?>