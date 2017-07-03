<?php

namespace App\Controllers;

use App\AdminDataTable;
use App\Controller;
use App\Models\Article;

class Admin extends Controller
{
    protected function actionDefault()
    {
//        $data = Article::findAll();
//        $this->view->news = $data;
//        $this->view->display('admin.php');

        $article = Article::findAll();
        $table = new AdminDataTable($article, ['getId', 'getTitle', 'getText', 'getAuthor']);
        $this->view->data = $table->render();;

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
        if(!empty($_POST['id'])) {
            $article = Article::findById((int) $_POST['id']);
        }
        else {
            $article = new Article;
        }

        $article->fill($_POST);
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