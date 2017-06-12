<?php

require_once __DIR__ . '/../protected/Models/Model.php';
require_once __DIR__ . '/../protected/Models/Article.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $data = \Models\Article::findById($id);
}
include __DIR__ . '/views/Article.php';
