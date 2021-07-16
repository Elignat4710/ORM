<?php

use App\Classes\Database\MySQLDatabase;

require './vendor/autoload.php';

var_dump(MySQLDatabase::getConnection());
