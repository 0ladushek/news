<?php

require_once __DIR__ . '/../protected/Db.php';
require_once __DIR__ . '/../protected/Models/Article.php';

$model = new \Models\Article;
$data = $model->getNewsList();

include __DIR__ . '/../public/views/index.php';
