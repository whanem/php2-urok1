<?php

namespace App\Controllers;

use App\Models\Article;

class News
{
    protected $id;
    protected $last_news_count = 3;

    public function __construct()
    {
        $this->id = $_GET['id'];
    }

    public function getNews()
    {
        $news = Article::findAll();

        include __DIR__ . '/../Views/index.php';
    }

    public function getArticle()
    {
        $article = Article::findOneById($this->id)[0];

        include __DIR__ . '/../Views/article.php';
    }

}