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
// function
require 'function.php';
// classes*
require 'task.php';
// output
require 'index.view.php';



