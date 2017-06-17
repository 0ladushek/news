<?php

require_once __DIR__ . '/../protected/autoload.php';

//?ctr=News&act=Default



$controllerName = '\\App\\Controllers\\' . $_GET['ctr'];
$actionName     = $_GET['act'] ?? 'Default';

$controller = new $controllerName;
$controller->action($actionName);