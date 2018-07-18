<?php

namespace App\Engine;

class DB
{
    private static $connect = [];

    public static function init ()
    {
        //self::$connect = new \PDO('mysql:host=localhost;dbname=task', 'task', 'Task54556');
    }

    public static function query (string $query)
    {
        //return include(__DIR__.'/../Views/'.$path.'.php');
    }
}