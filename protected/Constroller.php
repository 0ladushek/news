<?php

namespace App;

use \App\View;

abstract class Constroller
{
    protected $view;

    public function  __construct()
    {
        $this->view = new View;
    }

    protected function access()
    {
        return true;
    }

    public function action($name)
    {
        $methodName = 'action'. $name;
        if ($this->access()) {
            return $this->$methodName();
        }
        else {
            die('Доступ закрыт');
        }
    }
}