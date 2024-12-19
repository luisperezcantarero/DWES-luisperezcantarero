<?php
// requerrimos el bootstrap y el autoload
require_once("../bootstrap/boostrap.php");
require_once("../vendor/autoload.php");
require_once("../app/conf/conf.php");

use App\Core\Route;
use App\Controllers\PerrosController;

$route = new Route();

$route->add(array(
    "name"=> "primera",
    "path"=> '/^\/$/',
    "action" => [PerrosController::class, 'IndexAction']
));

$request = str_replace(DIRBASEURL, '', $_SERVER['REQUEST_URI']);
$route = $route->match($request);

if ($route) {
    $controllerName = new $route['action'][0];
    $actionName = $route['action'][1];
    $controller = new $controllerName;
    $controller-> $actionName($resquest);
} else {
    echo "No rute";
}
?>