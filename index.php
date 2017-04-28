<?php

require 'autoload.php';

if (isset($_GET['page'])) {
    $class_name = $_GET['page'];

    $page = 'App\Controllers\\' . $class_name;

    $page = new $page;
    $page->getArticle();
    } else {
    $news = new App\Controllers\News();
    $news->getNews();


    $t = new \App\Tests\Tests();
    $r = $t->ins();
    var_dump($r);
    }
