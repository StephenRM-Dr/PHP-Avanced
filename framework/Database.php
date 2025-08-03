<?php

class Database {
    private $connection;
    private $statement; // sentencia

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=webpersonal;charset=utf8mb4';

        $this->connection = new PDO($dsn, 'root', '');

    }

    public function query($sql, $params = [])
    {
        $this->statement = $this->connection->prepare($sql);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function firstOrFail()
    {
        $result = $this->statement->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            exit('No results found');
        }
        return $result;
    }

}