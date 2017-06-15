<?php

require_once __DIR__ . '\..\Db.php';
require_once __DIR__ . '\..\Models\Product.php';
require_once __DIR__ . '\..\Models\Article.php';


//$db = new Db();

//var_dump(\Models\Product::findAll());
//var_dump(\Models\Product::findById(2));
//
//$model = new \Models\Article;
//$ret = $model->getNewsList();
//var_dump($ret);

$article = new \Models\Article;

$article->id = 7;
$article->title = 'A2LEX';
$article->text = 'lOREM';
var_dump($article);
var_dump($article->update());