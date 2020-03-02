<?php
$title="Добавление поста";
require_once __DIR__ . "/../../../Parts/Header.php";
?>
    <h2 class="offset-3">Работа с постом</h2>
    <div class="card mt-3 col-8 offset-2">
        <img src="<?=$post->Photo ? 'uploads/' . $post->Photo: '' ?>"
             class="card-img-top img-big" alt="Фото">
        <div class="card-body">
            <h5 class="card-title"><?=$post->title ?></h5>
            <p class="card-text">
                <?=date_format(new DateTime($post->datePublication),
                    'd.m.Y') ?></p>
            <a class="btn btn-outline-danger "
               href='/../../../DeletePost.php?id=<?=$post->id; ?>'>
                Удалить </a>
            <a class="btn btn-outline-primary "
               href='/../../../UpdatePost.php?id=<?=$post->id; ?>'>
                Изменить</a>
            <a class="btn btn-outline-info "
               href='/../../../Index.php'>
                Назад</a>
        </div>
    </div>
<?php require_once __DIR__ . "/../../../Parts/Footer.php" ?>