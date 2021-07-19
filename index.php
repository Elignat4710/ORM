<?php

use App\Classes\Models\UserModel;

require './vendor/autoload.php';

$modelUser = new UserModel;

var_dump($modelUser->where(['name', '=', 'test1'])->delete());
// var_dump($modelUser->select('id, name')->where([['name', '=', 'test1']])->get());

// Delete users where id = 1
// select * from users where name = test1
