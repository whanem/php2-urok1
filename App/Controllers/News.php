<?php

namespace App\Controllers;

use App\Models\News as NewsModel;

class News
{
    protected $last_news_count = 3;

    public function getNews()
    {
        $data = NewsModel::findLastNews($this->last_news_count);
        return $data;

    }

}