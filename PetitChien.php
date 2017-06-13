<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author boghossian
 */
class PetitChien {
    /* mettre les propriétes du chien: nom race ... */
    
    public $name;
    public $race;
    public $age;
    public $color;
    public function bark(){
        echo 'waaf waaf';
    }
    public function __toString() {
        return 'my name is '.$this -> name.' I am '.$this -> age.' I am a '.$this -> color.' '.$this->race;
        
    }

    public function __construct($name, $race, $age, $color) {
    $this->color = $color;
    $this->age = $age;
    $this->race = $race;
    $this->name = $name;
}
}




