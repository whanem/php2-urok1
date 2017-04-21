<?php

require 'autoload.php';

if (isset($_GET['page'])) {
    $class_name = $_GET['page'];
    $namespace = 'App\Controllers\\' . $class_name;

    $class = new $namespace();
    $func = 'get' . $class_name;
    $$class_name = $class->$func();

    include __DIR__ . '/App/Views/' . $class_name . '.php';
} else {
    $news = new App\Controllers\News();
    $news = $news->getNews();
    include __DIR__ . '/App/Views/index.php';
}
?>
