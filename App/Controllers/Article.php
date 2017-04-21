<?php

namespace App\Controllers;

use App\Models\Article as ArticleModel;

class Article
{
    protected $id;

    public function __construct()
    {
        $this->id = $_GET['id'];
    }

    public function getArticle()
    {
        $art = new ArticleModel();
        return $art->findById($this->id)[0];
    }
}