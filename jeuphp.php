<?php

//creer classe personnage pour jeu  PHP //

class character {
    private $name;
    private $score;
    private $energy;
    private $strength;



public function attack(character $ennemy){
    $this-> energy -= 1;
    $this-> score += 3;
    $ennemy-> energy -=2;
    $ennemy-> score -=3;
   
       
}

public function recharge(){
    $this-> energy +=3;
    $this-> strength += 2;
  
    
}

public function defend(character $ennemy){
    $this-> energy -= 3;
    
    $this-> score +=1;
    $ennemy-> energy -=1;
    $ennemy->score -=1;
    
    
}

function __construct($name, $score, $energy, $strength) {
        $this->name = $name;
        $this->score = $score;
        $this->energy = $energy;
        $this->strength = $strength;
    }

    
function genererHTML(){
    return '<p> name: '.$this->name.'</p></br>'.
            '<p> energy:'.$this->energy.'</p></br>'.
            '<p> score: '.$this->score.'</p></br>'.
            '<p> strength:'.$this->strength.'</p></br>';
   
   
} 

}


       