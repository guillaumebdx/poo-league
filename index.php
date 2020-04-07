<?php

require_once 'Character.php';
require_once 'Arena.php';

$lolCharacters = [
    'Wukong' => [
        'life'   => 140,
        'name'   => 'wukong',
        'attack' => 7,
    ],
    'Lux' => [
        'life'   => 100,
        'name'   => 'Lux',
        'attack' => 4,
    ],
    'Teemo' => [
        'life'   => 100,
        'name'   => 'Teemo',
        'attack' => 50,
    ],
    'Garen' => [
        'life'   => 100,
        'name'   => 'Garen',
        'attack' => 98,
    ],
];


$characters = [];

foreach ($lolCharacters as $name => $characterData) {
    $character = new Character();
    $character
        ->setLife($characterData['life'])
        ->setName($characterData['name'])
        ->setAttack($characterData['attack']);
    $characters[] = $character;
}

$arena = new Arena($characters[rand(0, count($lolCharacters) -1)], $characters[rand(0, count($lolCharacters) -1)]);

echo '<pre>';
var_dump($arena);
echo '<hr>';
$arena->fight();
var_dump($arena);
echo '</pre>';
