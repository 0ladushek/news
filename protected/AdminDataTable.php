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
        $ret = '<table>';
        foreach ($this->models as $model) {
            $ret .= '<tr>';
            foreach ($this->functions as $method) {
                $ret .= '<td>' . $model->$method() . '<td>';
            }
            $ret .= '</tr>';
        }
        $ret .= '</table>';
        return $ret;
    }



}