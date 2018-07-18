<?php

namespace App\Engine;

class Response
{
    public static function json (array $json)
    {
        header('Content-type:application/json;charset=utf-8');

        return json_encode($json);
    }
}