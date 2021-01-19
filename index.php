<?php

//include('data.php');
include('Person.php');
require('PersonPrivate.php');
require('Point.php');

// Je voudrais une fonction qui s'appelerait presentPerson() qui me me présente la personne sous la forme suivante : 'Salut, je suis [nomdelapersonne].' 
// et si c'est une femme 'Je suis née le [datedenaissance]'
// si c'est un homme 'Je suis né le [datedenaissance]
// Je mesure [taille de la personne] cm.

// Dans le passé, j'utilisais un tableau pour stocker les informations de mes personnes. Maintenant je vais utiliser des objets dont la classe intègre une méthode presentPerson() donc je n'ai plus besoin du code ci-dessous. Je le mets en commentaire.
/*
function presentPerson(array $personData) {
    echo 'Salut, je suis '.$personData['name'] .'<br/>';
    if ($personData['gender'] == 'man'){
        echo 'Je suis né le '.$personData['birthday'] .'<br/>';
    } else {
        echo 'Je suis née le ' .$personData['birthday'] .'<br/>';
    }
    echo 'Je mesure '. $personData['size'] .'cm';
}

//  presentPerson($personJulien);
?>
<br/>
<?php
//presentPerson($personMathilde);
*/

// Je voudrais une nouvelle fonction qui s'appelerait endOfMonth() qui calcule le montant de le compte bancaire + 1000 et qui dit : 'C'est la fin du mois, vous avez XXXX euros sur votre compte bancaire'
/*
function endOfMonth(array $personData) {
    $newCredit = $personData['bankAccount']+=1000;
    echo 'C\'est la fin du mois, vous avez '.$newCredit .' euros sur votre compte bancaire';
}
*/

//endOfMonth($personChadia);

/* Je veux une page html ayant pour title Personne et affichant dans un tableau :
Nom, Genre, Date de naissance les données des différentes personnes
*/

$personLisa = new Person;

//var_dump($personLisa);

//$personLisa->name= 'Lisa';
$personLisa->name = 'Lisa';
$personLisa->age = 25;
$personLisa->birthday = '1986-03-11';
$personLisa->gender = 'woman';
$personLisa->size = 160;

var_dump($personLisa);

$personMarc = new Person;
$personMarc->name = 'Marc';
$personMarc->age = 58;
$personMarc->birthday = '1945-03-11';
$personMarc->gender = 'man';
$personMarc->size = 189;

//var_dump($personMarc);

//$personMarc->name = 'Raoul';

//var_dump($personMarc);

$personMarc->presentPerson();

/*
$personSecrete = new PersonPrivate;

var_dump($personSecrete);

$personSecrete->setName('Micheline');
$personSecrete->setAge(85);

echo $personSecrete->getName();
echo $personSecrete->getAge();
*/

//$personBelle = new PersonPrivate('Bella', 47, '1974-04-01', 'woman', 175);

$personTest = new PersonPrivate('2020-15-02', 'woman', 15);

var_dump($personTest);


// Pass both parameters.
$p1 = new Point(4, 5);
var_dump($p1);
// Pass only the required parameter. $y will take its default value of 0.
$p2 = new Point(4);
var_dump($p2);
// With named parameters (as of PHP 8.0):
//$p3 = new Point(y: 5, x: 4);
?>

?>