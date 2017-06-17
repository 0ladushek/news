<?php

namespace App\Models;

/**
 * Class Article
 * @package App\Models
 * @property $id;
 * @property $name;
 */
class Autor extends Model
{
    const TABLE = 'authors';
    public $id;
    public $name;
}