<?php

// Une classe c'est une usine, un plan de fabrication d'objets. C'est un modèle qui définit la structure d'un objet (ses propriétés/attributs et ses méthodes)

class PersonPrivate {

    private $name;
    private $age; 
    private $birthday;
    private $gender;
    private $size;

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