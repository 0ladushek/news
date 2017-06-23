<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class News extends Controller
{
    protected function actionDefault()
    {
        $data = Article::getNewsList();
        $this->view->news = $data;
        $this->view->display(__DIR__ . '/../../templates/index.php');
    }

    protected function actionOne()
    {
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];

            $data = Article::findById($id);
            $this->view->article = $data;
            $this->view->display(__DIR__ . '/../../templates/article.php');
        }
    }

    protected function actionAdmin()
    {
        $data = Article::findAll();

        $this->view->news = $data;
        $this->view->display(__DIR__ . '/../../templates/admin.php');
    }
}