<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lik
 *
 * @author Kristina
 */
//Enter your code here, enjoy

abstract class Lik {                    
    public abstract function opseg();   
    public abstract function povrsina();
    public function toString() {        
        //echo "\nJa sam objekt ".get_class($this).", a nastao sam iz klase ".CLASS;
        echo "\nJa sam objekt ".get_class($this).", a nastao sam iz klase Lik<br>";     //editirano
    }
}

interface ILik {
    public function boja();
}

interface IKrug extends ILik {
    public function srediste();
}

interface IKvadrat {
    public function brojstranica();
}
//Class Kvadrat contains 1 abstract method and must therefore be declared abstract or implement the 
//remaining methods (IKvadrat::brojstranica)
class Kvadrat extends Lik implements IKvadrat {
    public $a; // stranica kvadrata     // <-- public umjesto private
    function __construct($a) {
        $this->a = $a;                      // <-- dodano
    }
    
    public function opseg() {
        // vrati opseg
        // return 
        return 4 * $this->a;                // <-- dodano
    }

    public function povrsina() {
        // vrati povrsinu
        //return
        return $this->a * $this->a;         // <-- dodano
    }
    
    public function brojstranica() {    // <-- dodano
        return 4;
    }
}

class Krug extends Lik implements ILik{
    private $r; // polumjer kruga
    private $boja='crvena';
    function __construct($r) {
    // postavi svojstvo polumjera
        $this->r = $r;
    }

    public function opseg() {
        // vrati opseg
        return 2 * $this->r * 3.14;
    }

    public function povrsina() {
        // vrati povrsinu (r*r*pi)
        //return
        return $this->r * $this->r * 3.14;
    }
    
    public function boja(){
       return $this->boja; 
    }
}

// kreiraj krug polumjera 5
$k1 = new Krug(5);

// ispiši opseg
echo "Opseg kruga iznosi: ";              // <-- dodano
echo $k1->opseg();
echo "<br>";

echo "Površina kruga iznosi: ";              // <-- dodano
echo $k1->povrsina();
echo "<br>";

// ispiši opis klase
echo "Opis klase: ";
$k1->toString();
echo "<br>";

echo "Boja kruga: ";
$k1->boja();
echo "<br>";
// postavi i ispiši boju kruga
// ?
// postavi i ispiši koordinatu središta kruga
// ?
// kreiraj kvadrat stranice 5
$k2 = new Kvadrat(5);

// ispiši opseg
echo "Opseg kvadrata: ";
echo $k2->opseg();
echo "<br>";

// ispiši opis klase
echo "Opis klase: ";
$k2->toString();
echo "<br>";

// ispiši broj stranica kvadrata
// ?
