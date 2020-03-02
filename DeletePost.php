<?php

require_once "bootstrap.php";
if(!isset($_GET['id'])||empty($_GET['id'])){
    exit;
}
$post=$newPost->getWanPosts($_GET['id']);
if(!$post){
    header("Location: /");
    exit;
}

if(isset($_POST['btnPost'])){
    $_POST['id']=$_GET['id'];
    $newPost->deletePost($_GET['id']);
    header("Location: /");
    exit;
}
//if($newPost->deletePost($_GET['id'])){header("Location: index.php"); exit;}
require_once "App/Views/Posts/DeletePost.view.php";