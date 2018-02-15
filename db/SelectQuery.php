<?php


class SelectQuery
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getData($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();

        return $statement->fetchAll();
    }

}
