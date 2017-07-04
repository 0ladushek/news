<?php


namespace App;


class View
{
    use MagicTrait;

    public function display($path)
    {
        $path = str_replace('\\', '/', $path);
        $arr = explode('/', $path);
        $template = array_pop($arr);
        $folder = implode('/', $arr);

        $loader = new \Twig_Loader_Filesystem($folder);
        $twig = new \Twig_Environment($loader);
        echo $twig->render($template, $this->data);

    }

}