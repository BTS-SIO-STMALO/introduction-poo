<?php

// Une classe c'est une usine, un plan de fabrication d'objets. C'est un modèle qui définit la structure d'un objet (ses propriétés/attributs et ses méthodes)

class PersonPrivate {

    private $name = 'Lucie' ; // Ceci est un exemple d'assignation d'une valeur par défaut
    private $age = 18 ; // Ceci est un exemple d'assignation d'une valeur par défaut
    private $birthday;
    private $gender;
    private $size;

    // https://www.php.net/manual/fr/language.oop5.decon.php
    function __construct(string $newBirthday, string $newGender, int $newSize, string $newName = 'Lolo', int $newAge = 18) {
        $this->name = $newName;
        $this->age =$newAge;
        $this->birthday =$newBirthday;
        $this->gender =$newGender;
        $this->size =$newSize;        
    }

    function presentPerson() {
        echo 'Salut, je suis '.$this->name.'<br/>';
        if ($this->gender == 'man'){
            echo 'Je suis né le '.$this->birthday.'<br/>';
        } else {
            echo 'Je suis née le ' .$this->birthday .'<br/>';
        }
        echo 'Je mesure '. $this->size.'cm';
    }

    // Ceci est un getter j'en ai besoin car la propriété name est privée. Un getter me permet de lire la valeur contenue dans la propriété
    function getName(){
        return $this->name;
    }

    // Ceci est un setter, cette méthode/fonction me permet de modifier la valeur de ma propriété. La méthode a donc besoin d'un argument correspondant à la nouvelle valeur.
    function setName($newName){
        $this->name = $newName;
    }

    function getAge(){
        return $this->age;
    }
    
    function setAge($newAge){
        $this->age = $newAge;
    }

}