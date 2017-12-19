<?php
        //Enter your code here, enjoy
        
abstract class Lik{
    public abstract function opseg();
    public abstract function povrsina();
    public function toString(){
        echo "<br>Ja sam objekt sam tipa ".get_class($this).", a nastao sam iz klase ".__CLASS__;
    }
}
interface ILik{
    public function boja();
}
interface IKrug extends ILik{
    public function srediste();
}
interface IKvadrat{
    public function brojstranica();
}

class Kvadrat extends Lik implements IKvadrat{
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
class Krug extends Lik implements IKrug{
    private $r; // polumjer kruga
    private $boja;
    function __construct($r){
        // postavi svojstvo polumjera
        $this->r=$r;
        
    }
    public function opseg(){
        // vrati opseg
        return 2*$this->r*3.14;
    }
    public function povrsina(){
        // vrati povrsinu
        return $this->r*$this->r*3.14;
    }

    public function setboja($boja) {
        $this->boja=$boja;
    }
       public function boja() {
        return $this->boja;
    }

    public function srediste() {
        
    }



}

// kreiraj krug polumjera 5
$k1=new Krug(5);

// ispiši opseg
echo "<br>Opseg kruga je:".$k1->opseg();

// ispiši opis klase
$k1->toString();

// postavi i ispiši boju kruga
$k1->setboja("plava");
echo "<br>boja kruga je:".$k1->boja();

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
