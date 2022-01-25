<?php

// function
require 'db/Connect.php';   // Connection

// class
require 'db/QueryBuild.php';// Query Builder

$config = require 'config.php';

/* Lang
// Verbindung herstellen
$pdo = Connect::make();
// Query Abfrage
$query = new QueryBuild($pdo);
*/

// Kurz
//$query = new QueryBuild(Connection::make());

// smart
return new QueryBuild(
    Connect::make($config['database'])
);
