<?php

require_once __DIR__ . '/../protected/autoload.php';





$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$controllerName = $parts[1] ?: 'News';
$controllerName = '\\App\\Controllers\\' . $controllerName;
$actionName = $parts[2] ?: 'default';


$controller = new $controllerName;




try {
    $controller->action($actionName);
}

catch (App\Exceptions\DBRequestException $e) {
    $controller = new \App\Controllers\Errors;
    $controller->action('DBRequestException');
}

catch (App\Exceptions\DBConnectException $e) {

    $controller = new \App\Controllers\Errors;
    $controller->action('DBConnectError');
}

catch (App\Exceptions\NotFoundException $e) {
    $controller = new \App\Controllers\Errors;
    $controller->action('404');
}
