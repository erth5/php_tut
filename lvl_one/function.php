<?php

function dump_thinks($one, $another){
    var_dump($one, $another);
}

function swap_thinks($second, $first){
    $tmp = $second;
    $second = $first;
    $first = $tmp;
    var_dump($second, $first);
}

function own(){
    return (htmlspecialchars(isset($_GET['my'])));
}


function connectToDB(){
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
    }catch (PDOException $e){
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from test');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
