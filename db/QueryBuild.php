<?php

/* AufgabenVerteilung Beispiel
class Contractor{
    public function __construct($electrician, $plumber, $designer){
        $this->$electrician = $electrician;
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
    // who will create the (PDO $pdo) object must pass in the right object
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
