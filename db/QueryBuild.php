<?php

/* Umständliche Variante
class Contractor{
    public function __construct($electrician, $plumber, $designer){
        $this->electrian = $electrician;
        $this->plumber = $plumber;
        $this->designer = $designer;
    }

    public function performWork(){
        // $electrician
        // $plumber
        // $designer
    }
}
*/

class QueryBuild{
    protected $pdo;

    public function __construct($pdo){
        // Automatically triggered on instantiation
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        // $this->>pdo is from Constructor
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}

// using constructor
$pdo = 'test';
$queryBuilder = new QueryBuild($pdo);
