<?php

$greeting = 'Hello World';
$own = isset($_GET['my']);

$names = [
        'jefrey', 'John', 'Mary'
];

$person = [
    'age' => 31, 'hair_color' => 'brown',
    'sex' => 'female', 'name' => 'karl',
    'carrer' => 'web developer'
];

$person['character'] = 'lucky';


# display content
include 'function.php';
require 'index.view.php';
