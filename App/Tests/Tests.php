<?php

namespace App\Tests;

use App\Db;

class Tests
{
    const TABLE = 'Article';

    public function getAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }
}