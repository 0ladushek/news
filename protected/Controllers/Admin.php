<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Article;

class Admin extends Controller
{
    protected function actionDefault()
    {
        $data = Article::findAll();

        $this->view->news = $data;
        $this->view->display('admin.php');
    }

    protected function actionEdit()
    {
        if (isset($_GET['id'])) {
            $id = (int)$_GET['id'];

            $data = Article::findById($id);
            $this->view->article = $data;
            $this->view->display('edit.php');
        }
    }

    protected function actionSave()
    {
        if(!empty($_POST('id'))) {
            $article = Article::findById((int) $_POST('id'));
        }
        else {
            $article = new Article;
        }

        foreach ($article as $k => $v) {
            $article->$k = $_POST[$k] ?? null;
        }

        $article->save();

        header('Location: /admin');
        die;
    }

    protected function actionDelete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $article = new Article;
            $article->id = $id;
            $article->delete();
        }

        header('Location: /admin');
        die;
    }
}