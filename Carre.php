<?php

class Carre {
    private $taille;
    private $couleur;
    
    
   //Depuis PHP 7 on peut optionnellement typer les arguments d'une fonction//
    
   
public function __construct(int $taille, string $couleur) {
    $this->couleur=$couleur;
    $this->taille=$taille;
}

 
 public function afficherSuperficie():int{
     return $this->taille * $this->taille;
     
     
 }
 public function afficher():string{
     $style= 'width:' .$this->taille .'px;'.'height:' .$this->taille .'px;'.'background-color:' .$this->couleur;
           
            
     return '<div style=" ' .$style. ' "></div>';
     
 }
 
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

