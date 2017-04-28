<?php

namespace App;

use App\Db;

abstract class ModelAbstract
{
    const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
            );

    }

    public static function findOneById($id)
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

    public function  isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];

        foreach($this as $key => $value) {
            if ($key == 'id') {
                continue;
            }
            $columns[] = $key;
            $values[':' . $key] = $value;
        }

        $sql =
            'INSERT INTO ' . static::TABLE . ' 
            (' . implode(',', $columns) . ') ' .
            'VALUES' . ' 
            (' . implode(',', array_keys($values)) . ')
        ';


        $db = new Db();
        $db->execute(
            $sql,
            $values
        );

        $this->id = $db->query(
            'SELECT id FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT 1',
            static::class
        )[0]->id;
    }

    public function update()
    {
        if ($this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];

        foreach($this as $key => $value) {
            if ($key == 'id') {
                continue;
            }

            $columns[] = $key . ' = :' . $key;
            $values[':' . $key] = $value;
        }

        $values[':id'] = $this->id;
        $sql = 'UPDATE ' . static::TABLE . ' SET ' .
            implode(',', $columns) . ' WHERE id=:id';
        ;

        $db = new Db;
        $db->execute($sql, $values);
    }

    public function save()
    {
        if ($this->isNew()) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    public function delete()
    {
        if ($this->isNew()) {
            return;
        }

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';

        $db = new Db;
        $db->execute($sql, [':id' => $this->id]);
    }
}