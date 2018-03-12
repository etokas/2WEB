<?php

// Exercice 1/4
$dictionary = [
    'A' => 'Y',
    'B' => 'P',
    'C' => 'L',
    'D' => 'T',
    'E' => 'A',
    'F' => 'V',
    'G' => 'K',
    'H' => 'R',
    'I' => 'E',
    'J' => 'Z',
    'K' => 'G',
    'L' => 'M',
    'M' => 'S',
    'N' => 'H',
    'O' => 'U',
    'P' => 'B',
    'Q' => 'X',
    'R' => 'N',
    'S' => 'C',
    'T' => 'D',
    'U' => 'I',
    'V' => 'J',
    'W' => 'F',
    'X' => 'Q',
    'Y' => 'O',
    'Z' => 'W',
];

// Première methode

function translator($word, &$dictionary) {

    $exploded = explode('.', strtoupper($word));

    $trans = [];

    foreach ($exploded as $letter) {

        $trans[] =  $dictionary[$letter];

    }

    return implode("", $trans);
}

echo "<h1>" . translator("a.p.r.i.c.o.t", $dictionary) . "</h1>";


// Deuxième méthode

echo implode("", array_map(function ($value) use ($dictionary){
    return $dictionary[strtoupper($value)];
}, explode(".", "a.p.r.i.c.o.t")));



