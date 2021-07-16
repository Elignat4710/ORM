<?php

namespace App\Interfaces\Database;

use PDO;

interface DatabaseInterface
{
    public static function getConnection() : PDO;
}
