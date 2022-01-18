<?php

$greeting = 'Hello World';
$own = htmlspecialchars($_GET['my']);

$names = [
        'jefrey', 'John', 'Mary'
];


# display content
require 'index.view.php';

