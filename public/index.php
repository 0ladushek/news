<?php

require_once __DIR__ . '/../protected/autoload.php';


$data = App\Models\Article::getNewsList();

include __DIR__ . '/../public/views/index.php';
