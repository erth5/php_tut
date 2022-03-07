<?php

//Task class
require 'task.php';


$a_variable = 'I`m a variable';

$array = [true, 2,];
$array[] = ('el3');

// status_of_boolean ? 'is_true_output : is_false_output

// Database
$query = require 'bootstrap.php';
require 'function.php';

// Selector on DB
$task = $query->selectAll('test');

require 'index.view.php';

