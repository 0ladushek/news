<?php

namespace App\Models;
use App\Exceptions\Validate_TitleException;
use App\MagicTrait;
use App\MultiException;


/**
 * Class Article
 * @package App\Models
 * @property $id;
 * @property $title;
 * @property $text;
 * @property $date;
 * @property $author_id;
 */
class Article extends Model
{
//    public $id;
//    public $title;
//    public $text;
//    public $date;
//    public $author_id;

    const TABLE = 'news';

    public function getTitle()
    {
        return $this->title;
    }

    public function __get($key)
    {
        if ($key == 'author' && !empty($this->author_id)) {
            $author_name = Autor::findById($this->author_id)->name;
            return $author_name;
        }
        else {
            return $this->data[$key];
        }
    }

    public static function getNewsList()
    {
        $db = new \App\Db;
        $sql = 'SELECT id, title, author_id, date FROM ' . static::TABLE . ' ORDER BY date DESC LIMIT 3';
        return $db->query($sql, self::class);
    }

    public  function validate_title ($title) {
        $errors = new MultiException;
        if (strlen($title) < 5) {
            $errors->add(new Validate_TitleException('Слишком короткое название.'));
        }
        elseif (strlen($title) > 10 ) {
            $errors->add(new Validate_TitleException('Слишком длинное название.'));
        }
        if (!$errors->empty()) {
            throw $errors;
        }
    }
}