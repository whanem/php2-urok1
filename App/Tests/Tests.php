<?php

namespace App\Tests;

use App\Db;
use App\ModelAbstract;

class Tests
    extends ModelAbstract
{
    const TABLE = 'News';

    /*public $title;
    public $content;
    public $autor;
    */
    public $id = 12;
    public $title = 'Сурикаты вперееееееееееедддд';
    public $content = 'Сом мом том ком пом ром';
    public $autor = 'Автор интертейнмент';

    public function ins()
    {
        $test = new \App\Tests\Controll();
        return $test->insert();
    }
}

class Controll
{
    public function insert()
    {
        $tests = new Tests();
        $tests->delete();
        return $tests->id;
    }
}