<?php

namespace App\Models;

use App\ModelAbstract;
use App\Db;

class News extends ModelAbstract
{
    const TABLE = 'News';

    public $id;
    public $title;
    public $content;
    public $autor;

    public static function findLastNews(int $news_count)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC' . ' LIMIT ' . $news_count;
        $data = $db->query(
            $sql,
            static::class
        );
        return $data;
    }
}