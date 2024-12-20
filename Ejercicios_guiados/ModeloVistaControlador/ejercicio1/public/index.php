<?php
require_once "../app/Config/config.php";
require_once "../vendor/autoload.php";

use App\Core\Router;
use App\Controllers\IndexController;

$router = new Router();
$router->add(array(
    'name'=>'home',
    'path'=>'/^\/$/',
    'action'=>[IndexController::class, 'IndexAction']
));

$router = new Router();
$router->add(array(
    'name'=>'home',
    'path' => '/^\/saludo\/([a-zA-ZáéíóúÁÉÍÓÚñÑ0-9_-]+)$/',
    'action'=>[IndexController::class, 'saludoAction']
));

$request = str_replace(DIRBASEURL,'',$_SERVER['REQUEST_URI']);
$route = $router->match($request);

if ($route) {
    $controllerName = $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller->$actionName($request);
}else{
    echo "No route";
}

?>