<?php

$greeting = 'Hello World';

# Nicht das was es Aussagen soll
#function own($my, $def_val = 0){
#    return $_GET['my'] ? $_GET['my'] : $def_val;
#}
#$own = htmlspecialchars(isset($_GET['my'])) ? htmlspecialchars($_GET['my']) : FALSE;

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
require 'index.view.php';

