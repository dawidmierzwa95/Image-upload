<?php
require __DIR__.'/vendor/autoload.php';

$routes = require __DIR__.'/App/routes.php';
$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

use App\Engine\View;
use App\Engine\DB;

try {
    DB::init();

    if(isset($routes[$query]))
    {
        $explode = explode('::', $routes[$query]['controller']);
        $address = 'App\Controller\\'.$explode[0];
        $ref = new $address();

        $render = $ref->{$explode[1]}();
    }else{
        $render = View::render('404');
    }

    echo $render;
} catch (Exception $e) {
   // print_r($e->getMessage());
    //Render error page: $e->getMessage()
}
