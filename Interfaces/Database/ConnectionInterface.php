<?php

namespace App\Interfaces\Database;

interface ConnectionInterface
{
    public function select($options);

    public function insert($query, $attributes);
}
