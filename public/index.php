<?php

require_once __DIR__ . '/../protected/autoload.php';


$data = App\Models\Article::getNewsList();

$view = new App\View;
$view->news = $data;
var_dump($view->news);
$view->display(__DIR__ . '/../templates/index.php');