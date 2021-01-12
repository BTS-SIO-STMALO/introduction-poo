<?php

// Une classe c'est une usine, un plan de fabrication d'objets. C'est un modèle qui définit la structure d'un objet (ses propriétés/attributs et ses méthodes)

class Person {
    // ici je commence par définir toutes les propriétés de ma classe
    public $name;
    public $age; 
    public $birthday;
    public $gender;
    public $size;
    
    // Je n'ai pas mis bankAccount dans les attributs de ma classe car clairement avoir un compte bancaire n'est pas consubstancielle à une personne (plus de gens dans le monde n'ont pas de compte bancaire ce sont pourtant des personnes)

    // Qu'est-ce que c'est que cette variable $this qu'on voit partout ici c'est à dire dans ma classe ? 
    // C'est une variable accessible dans le contexte de la classe, qui fait référence à l'objet courant lui-même.

    function presentPerson() {
        echo 'Salut, je suis '.$this->name.'<br/>';
        if ($this->gender == 'man'){
            echo 'Je suis né le '.$this->birthday.'<br/>';
        } else {
            echo 'Je suis née le ' .$this->birthday .'<br/>';
        }
        echo 'Je mesure '. $this->size.'cm';
    }
}