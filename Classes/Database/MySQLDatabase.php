<?php

namespace App\Classes\Database;

use App\Interfaces\Database\DatabaseInterface;
use Exception;
use PDO;

class MySQLDatabase implements DatabaseInterface
{
    private static $pdo;
    
    public static function getConnection() : PDO
    {
        if (!empty(self::$pdo)) {
            return self::$pdo;
        }


        try {
            $config = include './config.php';

            self::$pdo = new PDO(
                $config['connection'],
                $config['username'],
                $config['password'],
                $config['options']
            );

            return self::$pdo;
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
}
