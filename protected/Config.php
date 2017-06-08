<?php

class Config
{
    public $data;
    public function __construct()
    {
        $this->data = ['db' => 'news', 'host' => '121.0.0.1'];
    }
}