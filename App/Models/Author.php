<?php

namespace App\Models;

use App\ModelAbstract;

class Author
    extends ModelAbstract
{
    const TABLE = 'Authors';

    public $id;
    public $autor;

    
}