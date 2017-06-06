<?php

namespace Models;
require_once __DIR__ . '/../Db.php';

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new \Db;
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $db = new \Db;
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $data = $db->query($sql, static::class, ['id' => $id]);

        if (empty($data)) {
            return false;
        }

        return $data[0];
    }
}