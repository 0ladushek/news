<?php


namespace App;


trait MagicTrait
{
    protected $data = [];

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __set($key, $val)
    {
        return $this->data[$key] = $val;
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }
}