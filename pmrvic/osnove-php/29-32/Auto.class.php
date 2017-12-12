<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Auto
 *
 * @author pmrvic
 */
include 'IAuto.class.php';

abstract class Auto implements IAuto{
    /**
     * Unutar klase kombinacija 
     * lijevi alt+insert -> generate getters and setters
     * @var type 
     */
    
    private $brojvrata=5;
    private $kilovata=100;
    private $boja="crna";
    
    public function getBrojvrata() {
        return $this->brojvrata;
    }

    public function getKilovata() {
        return $this->kilovata;
    }

    public function getBoja() {
        return $this->boja;
    }

    public function setBrojvrata($brojvrata) {
        $this->brojvrata = $brojvrata;
    }

    public function setKilovata($kilovata) {
        $this->kilovata = $kilovata;
    }

    public function setBoja($boja) {
        $this->boja = $boja;
    }
    public function gazi() {
        echo "<br>Gazim!";
    }

    public function skreni() {
        echo "<br>skrećem!";
    }

    public function stani() {
        echo "<br>stajem!";
    }

    public function vozi() {
        echo "<br>vozim!";
    }
    public function pali() {
        // makar bila prazna
    }
}
// NE MOŽE SE INSTANCIRATI ABSTRAKTNA KLASA
// MORA SE PRIJE NASLIJEDITI
//$a1=new Auto();