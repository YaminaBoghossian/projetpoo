<?php

/* 
 La classe cercle

 
1) Créer une nouvelle classe Cercle qui possèdera une propriété rayon et une propriété point


Le point sera une instance de la classe Point créée précédemment et sera le centre du cercle


2) Faire une méthode afficher() qui génèrera le html du cercle qui fera la taille de 2 fois son rayon
 */



class Cercle {
    private $rayon;
    private $centre;
    /*
     * Ici, notre cercle possède en propriété une
     * variable de type Point. Il faudra donc que
     * le centre soit une instance de la classe Point
     */
    public function __construct(int $rayon, 
                                Point $centre) {
        $this->centre = $centre;
        $this->rayon = $rayon;
    }
    
    public function afficher():string {
        $diametre = $this->rayon*2;
        $top = $this->centre->getTop() - $this->rayon;
        $left = $this->centre->getLeft() - $this->rayon;
        
        $style = 'position:absolute;border-radius:100%;'
                . 'background-color:blue;'
                . 'top:' . $top . 'px;'
                . 'left:' . $left . 'px;'
                . 'width:' . $diametre . 'px;'
                . 'height:' . $diametre . 'px;';
        
        return '<div style="' . $style . '"></div>';
    }
}
