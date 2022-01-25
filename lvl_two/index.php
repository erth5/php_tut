<?php

$query = require 'bootstrap.php';
require 'function.php';

// Selector an der DB
$task = $query->selectAll('test');

require 'index.view.php';

