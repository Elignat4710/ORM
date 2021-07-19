<?php

namespace App\Classes\Models;

use App\Classes\Database\Builder;

abstract class Model
{
    public $attributes;
    
    protected $table;

    protected $fillable;

    private $builder;

    public function __construct()
    {
        $this->builder = $this->getBuilder();
    }

    public function select($options = '*')
    {
        return $this->builder->select($options, $this->table);
    }

    public function fill(array $attributes)
    {
        foreach (array_intersect_key($attributes, array_flip($this->fillable)) as $key => $value) {
            $this->attributes[$key] = $value;
        }
        
        return $this;
    }

    public function create()
    {
        return $this->builder->create($this->attributes, $this->table);
    }

    public function where(array ...$param)
    {
        return $this->builder->where($param, $this->table);
    }

    // public static function find($id)
    // {
    //     return (new static)->builder->where([['id', '=', $id]], (new static)->table)->get()[0];
    // }

    protected function getBuilder()
    {
        return new Builder;
    }
}
