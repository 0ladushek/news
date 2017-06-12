<?php

require_once __DIR__ . '/../protected/Db.php';
require_once __DIR__ . '/../protected/Models/Article.php';


$data = \Models\Article::getNewsList();

include __DIR__ . '/../public/views/index.php';
