<?php

class Task

{
    public $description;

    public $completed = false;

    public $test;

    public function __construct($description){
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete(){
        return $this->completed;
    }
}

$tasks = [
    new Task('Go To Store'),
    new Task('do homework'),
    new Task('go shopping')];

// TODO Complete the task when click button


