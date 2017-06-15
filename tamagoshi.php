<?php
/* faire une classe tamagoshi 
 * avec 4 proprietes 
 * jouer , laver dormir et nourrir .
 * 
 */

class Tamagoshi {
    private $faim; /* On peut mettre les valeur ici par default mais on ne pourra pas 
     * les modifier eg : private $faim = 10; cette maniere peut etre utilisee 
     * dans certains cas ou on ne veut pas que les valeurs puissent etre modifiees.
     */
    private $joie;
    private $sommeil;
    private $hygiene;
    
  /*diff fonctions  avec score en moins sur les proprietes */
    
    public function jouer(){
        /* propriete hygiene perd deux points quand fonction jouer appellee */
        
        $this->hygiene -= 2;
        $this->joie += 2;
        $this->sommeil -= 2;
    }
    
    public function laver(){
        $this->hygiene += 3;
        $this->joie -= 1;
        
    }
    
    public function dormir(){
        $this->sommeil += 5;
        $this->faim += 4;
        $this->joie += 2;
    }
    
    public function nourrir(){
        $this->hygiene -= 2;
        $this->joie += 2;
        $this->sommeil += 3;
        $this->faim -= 5;
    }
    /* fonction construct utilisee pour assigner les valeurs  d proprietes*/
    /* voir page tamagoshitest.php */ /*lAISSER la possibilite de redefinir les valeur
     */
    
    function __construct($faim, $joie, $sommeil, $hygiene) {
        $this->faim = $faim;
        $this->joie = $joie;
        $this->sommeil = $sommeil;
        $this->hygiene = $hygiene;
    }
    
    
/* fonction qui affiche letat du tamagoshi */
    
    public function etat(){
        /* soit echo soit return des functions: il est preferable d'utiliser 
         * le return et le Echo mais pas seulement le echo.
         */
        echo $this->faim.'</br>';
        
        echo $this->hygiene.'</br>';
       
        echo $this->joie.'</br>';
        
        echo $this ->sommeil.'</br>';
        
        
    } 
}