<?php

$routes = require_once 'route.php';

$requestUri = $_SERVER['REQUEST_URI'];
$routeFound = false;

foreach ($routes as $route => $handler) {
    if ($route === $requestUri) {
        list($controller, $method) = explode('@', $handler);
        require_once "controllers/$controller.php";
        $controllerInstance = new $controller();
        $controllerInstance->$method();
        $routeFound = true;
        break;
    }
}

if (!$routeFound) {
    header("HTTP/1.0 404 Not Found");
    echo '404 Not Found';
}
