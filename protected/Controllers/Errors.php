<?php


namespace App\Controllers;


use App\Controller;

class Errors extends Controller
{
    protected function action404()
    {
        $this->view->display('404.php');
    }

    protected function actionDBConnectError()
    {
        $this->view->display('DBConnectError.php');
    }

    protected function actionDBRequestException()
    {
        $this->view->display('DBRequestException.php');
    }

}