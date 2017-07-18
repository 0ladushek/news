<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\NotFoundException;
use App\Models\Article;

class User extends Controller
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
                throw new NotFoundException;
            }
            $this->view->article = $data;
            $this->view->display(__DIR__ . '/../../templates/article.php');
        }
        else {
            throw new \Exception('Не передан get параметр');
        }
    }

}