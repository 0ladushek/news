<?php

function __autoload($class)
{
    require_once __DIR__  . '/' . str_replace('\\', '/', substr($class, 4)) . '.php';
}