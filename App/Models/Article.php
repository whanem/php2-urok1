<?php

namespace App\Models;

use App\ModelAbstract;

class Article
    extends ModelAbstract
{
    const TABLE = 'News';

    public $authors_id;
    public $title;
    public $content;

}