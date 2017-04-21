<?php

namespace App;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO(
            'mysql:host=localhost; dbname=BlogSite',
            'root',
            ''
        );
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }

    public function query($sql, $class, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);

        if (false != $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}