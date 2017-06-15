<?php

/*La classe Point


1) Créer une nouvelle classe Point qui possèdera une propriété top et une propriété left


2) Faire une méthode afficher() qui générera du html pour l'afficher (comme pour la classe Carre)


3) Faire une méthode distanceFrom(Point p) qui acceptera en argument un autre point et calculera la distance entre les 2 

 */

/**
 * Description of Point
 *
 * @author simplon
 */
class Point {
    private $top;
    private $left;
    
    public function __construct(int $top, int $left) {
        $this->top = $top;
        $this->left = $left;
    }
    
    public function afficher():string {
        $style = 'width:2px;'
                . 'height:2px;'
                . 'background-color:black;'
                . 'position:absolute;'
                . 'top:' . $this->top . 'px;'
                . 'left:' . $this->left . 'px';
        
        return '<div style="' . $style . '"></div>';
    }
    /**
     * Méthode calculant la distance entre ce Point et 
     * un autre Point
     * @param Point $point l'instance de point dont on 
     * va calculer la distance depuis celui où l'on se trouve
     */
    //Ici, on type la variable d'entrée pour signifier
    //que cette méthode n'acceptera qu'une instance de
    //la classe Point comme paramètre.
    public function distanceFrom(Point $point): float {
        return sqrt(pow($point->top-$this->top, 2) 
                + pow($point->left-$this->left, 2));
    }
    
    function getTop() {
        return $this->top;
    }
    function getLeft() {
        return $this->left;
    }
       
}

