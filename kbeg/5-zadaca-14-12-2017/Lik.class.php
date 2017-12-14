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
    private $a; // stranica kvadrata
    function __construct($a) {
    }

    public function opseg() {
        // vrati opseg
        // return 
    }

    public function povrsina() {
        // vrati povrsinu
        //return
    }
}

class Krug extends Lik {
    private $r; // polumjer kruga
    function __construct($r) {
// postavi svojstvo polumjera
        $this->r = $r;
    }

    public function opseg() {
        // vrati opseg
        return 2 * $this->r * 3.14;
    }

    public function povrsina() {
        // vrati povrsinu
        //return
    }
}

// kreiraj krug polumjera 5
$k1 = new Krug(5);

// ispiši opseg
echo $k1->opseg();

// ispiši opis klase
$k1->toString();

// postavi i ispiši boju kruga
// ?
// postavi i ispiši koordinatu središta kruga
// ?
// kreiraj kvadrat stranice 5
$k2 = new Kvadrat(5);

// ispiši opseg
echo $k2->opseg();

// ispiši opis klase
$k2->toString();

// ispiši broj stranica kvadrata
// ?
