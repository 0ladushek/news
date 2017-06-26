<?php


namespace App\Controllers;


use App\Controller;

class Errors extends Controller
{
    protected function action404()
    {
        $this->view->display(__DIR__ . '/../../templates/404.php');
    }

    protected function actionDBConnectError()
    {
        $this->view->display(__DIR__ . '/../../templates/DBConnectError.php');
    }

    protected function actionDBRequestException()
    {
        $this->view->display(__DIR__ . '/../../templates/DBRequestException.php');
    }

}