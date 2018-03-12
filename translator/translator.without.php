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


function translator($word, &$dictionary) {

    $exploded =  str_split(strtoupper($word));

    $transleted = [];

    foreach ($exploded as $letter) {

        $transleted[] =  $dictionary[$letter];

    }

    return implode("", $transleted);
}

echo "<h1>" . translator("apricot", $dictionary) . "</h1>";
