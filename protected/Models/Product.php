<?php

namespace Models;
require_once __DIR__ . '/Model.php';

class Product extends Model
{
    const TABLE = 'product';

    public $id;
    public $title;
    public $prace;
    public $img;
    public $desc;
}