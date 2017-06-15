<?php



include_once './jeuphp.php';
$char1 = new character('Roger', 0, 100, 100);
$char2 = new character('Herman', 0, 100, 100);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$char1->attack($char2);
echo $char1-> genererHTML();
echo $char2->genererHTML();
$char2 ->defend($char1);
echo $char1-> genererHTML();
echo $char2-> genererHTML();
$char1-> recharge();




