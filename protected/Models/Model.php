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

    public function insert()
    {
        $rows = $values = [];
        foreach ($this as $key => $val) {
            if($key == 'id') {
                continue;
            }
            $rows[] = $key;
            $values[$key] = $val;
        }
        $sql = 'INSERT INTO ' . static::TABLE . ' (' .  implode(', ', $rows) . ') ' .
            'VALUES ' . '(:' . implode(', :', $rows) . ')';
        $db = new \Db;
        $db->execute($sql, $values);
        $this->id = $db->lastInsertId();
        return $sql;
    }
}