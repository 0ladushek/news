<?php

require_once __DIR__ . '/../protected/autoload.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $data = App\Models\Article::findById($id);
}

$view = new App\View;
$view->article = $data;
$view->display(__DIR__ . '/../templates/article.php');

