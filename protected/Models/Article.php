<?php

namespace App\Models;


class Article extends Model
{
    public $id;
    public $title;
    public $text;
    public $date;
    public $author_id;

    const TABLE = 'news';

    public static function getNewsList()
    {
        $db = new \App\Db;
        $sql = 'SELECT id, title, date FROM ' . static::TABLE . ' ORDER BY date DESC LIMIT 3';
        return $db->query($sql);
    }
}