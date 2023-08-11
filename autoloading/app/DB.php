<?php

// Example of a singleton class pattern
namespace App;

class DB
{
    public static ?DB $instance = null;

    private function __construct(public array $config)
    {
        // Singleton means this class will be instantiated only once no matter how many objects are created
        // For this class constructor cannot be used to create an instance
        echo 'Intance Created <br />';
    }

    public static function getInstance(array $config): DB
    {
        // This function is used to get the single instance of this class.
        if (self::$instance === null) {
            self::$instance = new DB($config);
        }

        return self::$instance;
    }
}
