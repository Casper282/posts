<?php
$title="Главная страница";
require_once  __DIR__ . "/../../../Parts/Header.php";
?>
<h2>Посты</h2>
<div class="row">
    <?php
    $i=1;
    foreach ($posts as $post): ?>
        <div class="card mt-3 p-2 col-md-4 col-sm-6">
            <img src="<?= $post->Photo ? '../upLoads/'.$post->Photo : ''?>"
                 class="card-img-top img-small" alt="Фото">
            <div class="card-body">
                <h5 class="card-title"><?=$post->title ?></h5>
                <p class="card-text">
                    <?=date_format(new DateTime($post->datePublication),
                        'd.m.Y') ?></p>
                <a class="btn btn-info p-2" style="width: 100%;"
                   href='/../../../ShowPost.php?id=<?=$post->id; ?>'>
                    Подробно </a>
            </div>
        </div>
    <?php endforeach; ?>
    <?php require_once __DIR__ . "/../../../Parts/Footer.php" ?>
