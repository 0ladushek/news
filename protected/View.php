<?php


namespace App;


class View
{
    use MagicTrait;

    public function display($template)
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../templates/');
        $twig = new \Twig_Environment($loader);

        echo $twig->render($template, $this->data);
    }

}