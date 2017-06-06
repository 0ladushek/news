<?php

namespace Models;


class Article extends Model
{
    public $id;
    public $title;
    public $text;
    public $date;
    public $author_id;

    const TABLE = 'News';

    public function getNewsList()
    {
        $db = new \Db;
        $sql = 'SELECT id, title, date FROM ' . static::TABLE . ' ORDER BY date DESC LIMIT 3';
        return $db->query($sql);
    }
}