<?php
require_once "bootstrap.php";
$title="Просмотр информации";
$post=$newPost->getWanPosts($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}
require_once "App/Views/Posts/ShowPost.view.php";