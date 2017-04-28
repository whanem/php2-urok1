<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>АДМИН ПАНЕЛЬ: <a href="?page=admin">ВОЙТИ</a></p>
    <?php foreach($news as $article) { ?>
    <p style="font: 700 20px sans-serif">
        <a href="?page=News&id=<?php echo $article->id; ?>">
            <?php echo $article->title; ?>
        </a>
    </p>
    <p><?php echo $article->content; ?></p>
    <p style="font: 700 16px sans-serif">
        <?php echo $article->autor; ?>
    </p>
        <hr>
    <?php } ?>
</body>
</html>