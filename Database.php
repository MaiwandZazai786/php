<?php

class database
{

    public $connection;

    public function __construct()
    {
        $dsn = 'mysql:host=localhost;port=3306;dbname=php_project;user=root;charset=utf8mb4;';

        $this->connection = new PDO(
            $dsn
        );
    }
    public function query($query)
    {
        $statment = $this->connection->prepare($query);
        $statment->execute();

        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }
}
