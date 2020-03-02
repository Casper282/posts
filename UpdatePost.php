<?php
require_once "bootstrap.php";
if ((!isset($_GET['id']) || empty($_GET['id']) && (!isset($_GET['title']) || empty($_GET['title'])))) {
    exit;
}
$post=$newPost->getWanPosts($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}

if(isset($_POST['btnPost'])){
    $_POST['id']=$_GET['id'];
    $newPost->updatePost($_POST);
    header("Location: /");
    exit;
}

require_once "App/Views/Posts/UpdatePost.view.php";