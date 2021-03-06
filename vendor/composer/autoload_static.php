<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitac8da7c83baacffe8cac5a07ec06c12c
{
    public static $classMap = array (
        'App\\Classes\\Database\\Builder' => __DIR__ . '/../..' . '/Classes/Database/Builder.php',
        'App\\Classes\\Database\\Connection' => __DIR__ . '/../..' . '/Classes/Database/Connection.php',
        'App\\Classes\\Database\\Database' => __DIR__ . '/../..' . '/Classes/Database/Database.php',
        'App\\Classes\\Models\\Model' => __DIR__ . '/../..' . '/Classes/Models/Model.php',
        'App\\Classes\\Models\\PostModel' => __DIR__ . '/../..' . '/Classes/Models/PostModel.php',
        'App\\Classes\\Models\\UserModel' => __DIR__ . '/../..' . '/Classes/Models/UserModel.php',
        'App\\Interfaces\\Database\\ConnectionInterface' => __DIR__ . '/../..' . '/Interfaces/Database/ConnectionInterface.php',
        'App\\Interfaces\\Database\\DatabaseInterface' => __DIR__ . '/../..' . '/Interfaces/Database/DatabaseInterface.php',
        'ComposerAutoloaderInitac8da7c83baacffe8cac5a07ec06c12c' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitac8da7c83baacffe8cac5a07ec06c12c' => __DIR__ . '/..' . '/composer/autoload_static.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitac8da7c83baacffe8cac5a07ec06c12c::$classMap;

        }, null, ClassLoader::class);
    }
}
