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
<?php ?>
    <p style="font: 700 20px sans-serif;">
        <?php echo $Article->title; ?>
    </p>
    <p><?php echo $Article->content; ?></p>
    <p style="font: 700 20px sans-serif; color: #ccc">
        <?php echo $Article->autor; ?>
    </p>
</body>
</html>