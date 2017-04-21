<?php

namespace App;

use App\Db;

abstract class ModelAbstract
{
    const TABLE = '';

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
            );

    }

    public static function findById($id)
    {
        $db = new Db();
        $data =  $db->query(
            'SELECT * FROM ' . static::TABLE . ' WHERE id=:id',
            static::class,
            [':id' => $id]
        );
        if (!empty($data)) {
            return $data;
        }
        return false;
    }
}