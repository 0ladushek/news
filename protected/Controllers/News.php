<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\NotFoundException;
use App\Models\Article;

class News extends Controller
{
    protected function actionDefault()
    {
        $data = Article::findAll();
        $this->view->news = $data;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionOne()
    {
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];

            $data = Article::findById($id);
            if(empty($data)) {
                Throw new NotFoundException;
            }
            $this->view->article = $data;
            $this->view->display(__DIR__ . '/../../templates/article.php');
        }
        else {
            Throw new \Exception('Не передан get параметр');
        }
    }

}