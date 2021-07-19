<?php

namespace App\Classes\Database;

use App\Interfaces\Database\ConnectionInterface;
use Exception;

class Connection implements ConnectionInterface
{
    protected $pdo;
    
    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function select($query)
    {
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            $data = $statement->fetchAll();
            return $data;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }

    public function insert($query, $attributes)
    {
        try {
            $statement = $this->pdo->prepare($query);
            $statement->execute($attributes);
            return $this->pdo->lastInsertId();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}
