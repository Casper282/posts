<form action="" method="POST" enctype="multipart/form-data">
    <div class="form-group mt-3">
        <label for="post_date">Дата публикации:
            <?=$post->datePublication ?
                date_format(new DateTime($post->datePublication), 'd.m.Y')
                : date('d.m.Y') ?>
        </label>
    </div>
    <div class="form-group mt-5" >
        <label for="title" class="mb-3">Название:</label>
        <input type="text" class="form-control" id="title"
               name="title" required <?= $dis?? ""?>
               value="<?=$post->title ?? '' ?>"
        >
    </div>
    <div class="form-group" >
        <label for="description" class="mb-3">Введите текст:</label>
        <textarea class="form-control" id="description"
                  name="description" rows="5" cols="50"  required <?= $dis?? ""?>>
            <?=$post->description ?? '' ?>
        </textarea>
    </div>
    <div class="form-group">
        <input type="file" name="photo" value="Загрузить файл" class="mt-3">
    </div>
    <div class="row mt-3">
        <button type="submit" name="btnPost"
                class="btn btn-outline-primary ml-3" >
            <?=$btnText ?>
        </button>
        <a href="/index.php" class="btn btn-outline-info ml-3">
            Назад
        </a>
        <!--        <a href="/index.php" class="btn btn-outline-info ml-3">-->
        <!--            Выберите файл-->
        <!--        </a>-->
    </div>
    <div class="form-group">
        <img src="<?=$post->photo ? 'upLoads/' . $post->photo : '' ?>" alt="" class="img">
    </div>
</form>
<!--        <button type="submit" name="btnPost"-->
<!--    class="btn btn-success" >-->
<!--        --><?//=$btnText ?>
<!--    </button>-->
<!--</form>-->