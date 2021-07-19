<?php

namespace App\Classes\Database;

class Builder
{
    private $query;

    protected $connection;

    public function select($options = '*', string $table)
    {
        $this->query = sprintf(
            'SELECT %s FROM %s',
            $options,
            $table
        );

        return $this;
    }

    public function get()
    {
        var_dump($this->query);
        
        return $this->getConnection()->select($this->query);
    }

    public function create(array $attributes, string $table)
    {
        $this->query = sprintf(
            'INSERT INTO %s (%s) value (%s)',
            $table,
            implode(', ', array_keys($attributes)),
            ':' . implode(', :', array_keys($attributes))
        );

        return $this->getConnection()->insert($this->query, $attributes);
    }

    public function where(array $params, string $table = null)
    {
        //     if (!$this->query) {
        //         $this->query .=  sprintf(
        //             'SELECT * FROM %s',
        //             $table
        //         );
        //     }

        $this->query .= ' WHERE ';
        
        foreach ($params as $param) {
            $this->query .= $param[0] . $param[1] . "'$param[2]'";

            if ($param == end($params)) {
                break;
            }

            $this->query .= ' AND ';
        }

        return $this;
    }

    public function delete()
    {
        var_dump('DELETE users ' . $this->query);
    }

    public function first()
    {
        $this->query .= ' LIMIT 1';
        
        return $this->getConnection()->select($this->query);
    }

    private function getConnection() : Connection
    {
        if (!empty($this->connection)) {
            return $this->connection;
        }

        return $this->connection = new Connection;
    }
}
