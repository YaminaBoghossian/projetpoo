<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        /* on include le fichier petitchien
         * puis on nomme chaque objet du chien 
         * puis boucle for each pour parcourir tableau avec clef ou sans 
        *puis echo de la clef et puis des proprietes inclues dans variable 
        *description*/
      
      include_once './PetitChien.php';
      $chien1 = new PetitChien();
      $chien1 -> name = 'toto';
      $chien1 -> race = 'shiba';
      $chien1 -> color = 'beige';
      $chien1 -> age = '3';
      foreach($chien1 as $clef => $description){
          echo $clef.' : '.$description.'<br/>';
      }
      
      $chien1 ->bark();
      echo $chien1;
      
      
        ?>
    </body>
</html>
