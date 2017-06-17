<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '' );
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function query($sql, $className = 'stdClass', $prepare = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($prepare);
        $data = $sth->fetchAll(\PDO::FETCH_CLASS, $className);
        return $data;
    }
}