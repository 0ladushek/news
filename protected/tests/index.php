<?php


require_once __DIR__ . '/../autoload.php';

//$db = new Db();

//var_dump(\Models\Product::findAll());
//var_dump(\Models\Product::findById(2));
//
//$model = new \Models\Article;
//$ret = $model->getNewsList();
//var_dump($ret);

$article = new App\Models\Article;

$article->id = 2;
//$article->title = 'A2LEX';
//$article->text = 'lOREM';
//var_dump($article);
//var_dump($article->update());

var_dump( $article->delete());