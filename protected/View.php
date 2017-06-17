<?php


namespace App;


class View
{
    use MagicTrait;

    public function display($template)
    {
        include $template;
    }

}