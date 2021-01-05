<?php

$personJulien = [
    'name' => 'Julien',
    'age' => 33,
    'birthday' => '1987-10-15',
    'gender' => 'man',
    'size' => 171
];

$personChadia = [
    'name' => 'Chadia',
    'age' => 24,
    'birthday' => '1996-02-14',
    'gender' => 'woman',
    'size' => 170
];

$personMathilde = [
    'name' => 'Mathilde',
    'age' => 34,
    'birthday' => '1986-11-03',
    'gender' => 'woman',
    'size' => 160
];

// Je voudrais une fonction qui s'appelerait presentPerson() qui me me présente la personne sous la forme suivante : 'Salut, je suis [nomdelapersonne].' 
// et si c'est une femme 'Je suis née le [datedenaissance]'
// si c'est un homme 'Je suis né le [datedenaissance]
// Je mesure [taille de la personne] cm.