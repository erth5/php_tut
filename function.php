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
