<?php
/* Установка локали и даты */
setlocale(LC_ALL, "russian");  // получить имя месяца по-русски (LC_ALL, "russian" - все нижеперечисленное по-русски / кодировка будет 1251)
$day = strftime('%d'); // число
$mon = strftime('%B'); // месяц. возвращает в кодировке windows-1251 (а html здесь в UTF-8)
$mon = iconv('windows-1251', 'utf-8', $mon); // преобразовать из 1251 в UTF-8 (если код html в UTF-8) / переприсвоить переменной $mon значение в utf-8
$year = strftime('%Y');

/* Приветствие */
$hour = (int) strftime('%H'); // (int) - приводит строку в целое число
$welcome = '';

if ($hour > 0 && $hour < 6) {
    $welcome = 'Доброй ночи';
}
elseif ($hour >= 6 && $hour < 12) {
    $welcome = 'Доброе утро';
}
elseif ($hour >= 12 && $hour < 18) {
    $welcome = 'Добрый день';
}
elseif ($hour >= 18 && $hour < 23) {
    $welcome = 'Добрый вечер';
}
else {
    $welcome = 'Доброй ночи';
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title><?=$title?></title>

</head>
<header>
    <nav role="navigation">
        <ul>
            <li>
                <a href="/index.php">
                    <div>
                        Home
                        <span>there's no place like it</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="/insertPost.php">
                    <div>
                        Add post
                        <span>the best posts in the world</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="">
                    <div>
                        To come in
                        <span>receive notifications of new posts</span>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
</header>

<body>
<center><div id="content">
        <h1><?=$welcome?></h1>
        <blockquote>
            <?
            echo "Сегодня {$day} {$mon} {$year} года";
            ?>
        </blockquote>
    </div></center>
<div class="container">