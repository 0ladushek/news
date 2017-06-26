<?php

namespace App;

use App\Exceptions\NotFoundException;
use App\Exceptions\DBConnectException;
use App\Exceptions\DBRequestException;

class Db
{
    protected $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
        } catch (\PDOException $e) {
            Throw new DBConnectException;
        }
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function execute($sql, $params = [])
    {
        try {
            $sth = $this->dbh->prepare($sql);
        } catch (\PDOException $e) {
            Throw new DBRequestException;
        }
        return $sth->execute($params);
    }

    public function query($sql, $className = 'stdClass', $prepare = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($prepare);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        if(empty($data)) {
            Throw new NotFoundException;
        }
        return $data;
    }
}