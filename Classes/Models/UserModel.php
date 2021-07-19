<?php

namespace App\Classes\Models;

class UserModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email'
    ];
}
