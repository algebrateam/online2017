<?php
        //Enter your code here, enjoy
        
abstract class ALik{
    const PI = 3.14;
    public abstract function opseg();
    public abstract function povrsina();
    public function toString(){
        echo "<br>Ja sam objekt sam tipa "
        .get_class($this)
        .", a nastao sam iz klase "
        .__CLASS__;
    }
}
interface ILik{
    public function getboja();
}
interface IKrug extends ILik{
    public function srediste();
}
interface IKvadrat{
    public function brojstranica();
}

class Kvadrat extends ALik implements IKvadrat{
    private $a; // stranica kvadrata
    function __construct($a){
        $this->a=$a;
    }
    public function opseg(){
        // vrati opseg
       return 4*$this->a; 
    }
    public function povrsina(){
        // vrati povrsinu
        return $this->a*$this->a;
    }

    public function brojstranica() {
        return 4;
    }

}
class Krug extends ALik implements IKrug{
    private $r; // polumjer kruga
    private $boja;
    function __construct($r){
        // postavi svojstvo polumjera
        $this->r=$r;
        
    }
    public function opseg(){
        // vrati opseg
         
        // MOŽE OVAKO PUTEM ZADANE KONSTANTE:
        // return 2*$this->r* ALik::PI;
        
        // Ili puna vrijednost konstante pi
       return 2*$this->r* pi(); 
    }
    public function povrsina(){
        // vrati povrsinu
        return $this->r*$this->r* parent::PI;
    }

    public function setboja($boja) {
        $this->boja=$boja;
    }
    public function getboja() {
        return $this->boja;
    }
    public function srediste() {
        return $this->r/2;
    }

    public function boja() {
        
    }

}

// kreiraj krug polumjera 5
$k1=new Krug(5);

// ispiši opseg
echo "<br>Opseg kruga je:".$k1->opseg();
echo "<br>Koordinata X središta kruga je:".$k1->srediste();
echo "<br>Povrsina kruga je:".$k1->povrsina();

// ispiši opis klase
$k1->toString();

// postavi i ispiši boju kruga
$k1->setboja("plava");
echo "<br>boja kruga je:".$k1->getboja();

// postavi i ispiši koordinatu središta kruga
// ?

// kreiraj kvadrat stranice 5
$k2=new Kvadrat(5);

// ispiši opis klase
$k2->toString();

// ispiši opseg
echo "<br>Opseg kvadrata je:".$k2->opseg();

// ispiši broj stranica kvadrata
echo "<br>broj stranica kvadrata je:".$k2->brojstranica();
