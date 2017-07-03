<?php

namespace App;




class AdminDataTable extends View
{
    protected $models;
    protected $functions;

    public function __construct(array $models, array $functions)
    {
        $this->models = $models;
        $this->functions = $functions;
    }


    public function render()
    {

        $ret = [];
        foreach ($this->models as $model) {
            $arr = [];
            foreach ($this->functions as $method) {
                $arr[] = $model->$method();
            }
            $ret[] = $arr;
        }

        return $ret;
    }

}