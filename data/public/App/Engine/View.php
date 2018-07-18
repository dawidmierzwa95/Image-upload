<?php

namespace App\Engine;

class View
{
    public static function render (string $path)
    {
        return include(__DIR__.'/../Views/'.$path.'.php');
    }
}