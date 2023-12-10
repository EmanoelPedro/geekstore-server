<?php

use CoffeeCode\Router\Router;

use Core\Library\dotEnv;

require __DIR__ . "/core/library/dotEnv.php";
(new dotEnv())->load();
require __DIR__ . "/vendor/autoload.php";

$router = new Router(getenv('CONF_URL_BASE'),'@');

$router->namespace("App\Http\Controllers");

$router->get('/products','productController@index');
$router->get('/products/{id}','productController@index');

$router->post('/product/store','productController@store');

$router->namespace("App\Http\Controllers\Admin");

$router->get('/admin','adminController@login');
$router->post('/dashboard','dashboardController@index');

$router->dispatch();

if ($router->error()) {
    // $router->redirect("/{$router->error()}");
    var_dump($router->error());
}