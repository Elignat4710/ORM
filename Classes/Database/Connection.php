<?php

namespace App\Classes\Database;

use App\Interfaces\Database\ConnectionInterface;

class Connection extends ConnectionInterface
{
    public function __construct($pdo)
    {
    }
}
