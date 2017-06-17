<?php

namespace  App;

class Config
{
    use Singleton;

    public $data;
    public function __construct()
    {
        $this->data = ['db' => 'news', 'host' => '121.0.0.1'];
    }
}