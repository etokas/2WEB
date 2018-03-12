<?php

$dictionary = [
    'A' => 'Y', 'B' => 'P','C' => 'L', 'D' => 'T', 'E' => 'A', 'F' => 'V', 'G' => 'K', 'H' => 'R', 'I' => 'E', 'J' => 'Z', 
    'K' => 'G', 'L' => 'M', 'M' => 'S', 'N' => 'H', 'O' => 'U', 'P' => 'B', 'Q' => 'X', 'R' => 'N',
    'S' => 'C', 'T' => 'D', 'U' => 'I', 'V' => 'J', 'W' => 'F', 'X' => 'Q', 'Y' => 'O', 'Z' => 'W',
];

$name = $_POST['text'];

$exploded = str_split($name);
$resultat = [];

foreach ($exploded as $value) {
	$resultat[] = $dictionary[strtoupper($value)];
}

$return = implode("", $resultat);

echo $return;
