<?php

// Own Route Definition
require 'routes.php';
require 'Router.php';
$router = new Router();
try {
    require $router->direct('contact');
} catch (Exception $e) {
}

//Task class
require 'task.php';

// example variables
$a_variable = 'I`m a variable';
$array = [true, 2,];
$array[] = ('el3');
// status_of_boolean ? 'is_true_output : is_false_output

// Database
$query = require 'bootstrap.php';
require 'function.php';

// Selector on DB
$task = $query->selectAll('test');

// own Request
//require Router::load('routes.php')

//    ->direct(Request::uri());


//after this logic display thinks:
require 'views/index.view.php';

