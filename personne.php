<?php
// Recuperer les input du formulaire ... //

$name = htmlspecialchars($_POST['name']);
$firstname = htmlspecialchars($_POST['firstname']);
$age = htmlspecialchars($_POST['age']);
$gender = htmlspecialchars($_POST['gender']);
$email = htmlspecialchars($_POST['email']);
$region = htmlspecialchars($_POST['region']);


class Personne {
    // Mettre proprietes de la personne//
    
    private $name;
    private $firstname;
    private $age;
    private $gender;
    private $email;
    private $region;
            
    function getName() {
        return $this->name;
    }

    function getFirstname() {
        return $this->firstname;
    }

    function getAge() {
        return $this->age;
    }

    function getGender() {
        return $this->gender;
    }

    function getEmail() {
        return $this->email;
    }

    function getRegion() {
        return $this->region;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setRegion($region) {
        $this->region = $region;
    }

    function __construct($name, $firstname, $age, $gender, $email, $region) {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->age = $age;
        $this->gender = $gender;
        $this->email = $email;
        $this->region = $region;
    }

}
    
    
    
    
    
/* 
 * 
 * 
 * 
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

