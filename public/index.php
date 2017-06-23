<?php

require_once __DIR__ . '/../protected/autoload.php';


$uri = $_SERVER['REQUEST_URI'];
$parts = explode('/', $uri);

$controllerName = $parts[1] ?: 'News';
$controllerName = '\\App\\Controllers\\' . $controllerName;
$actionName = $parts[2] ?: 'default';


$controller = new $controllerName;
$controller->action($actionName);