<?php

include('data.php');

// Je voudrais une fonction qui s'appelerait presentPerson() qui me me présente la personne sous la forme suivante : 'Salut, je suis [nomdelapersonne].' 
// et si c'est une femme 'Je suis née le [datedenaissance]'
// si c'est un homme 'Je suis né le [datedenaissance]
// Je mesure [taille de la personne] cm.

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

// Je voudrais une nouvelle fonction qui s'appelerait endOfMonth() qui calcule le montant de le compte bancaire + 1000 et qui dit : 'C'est la fin du mois, vous avez XXXX euros sur votre compte bancaire'

function endOfMonth(array $personData) {
    $newCredit = $personData['bankAccount']+=1000;
    echo 'C\'est la fin du mois, vous avez '.$newCredit .' euros sur votre compte bancaire';
}

//endOfMonth($personChadia);

/* Je veux une page html ayant pour title Personne et affichant dans un tableau :
Nom, Genre, Date de naissance les données des différentes personnes
*/

?>