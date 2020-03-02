<?php
require_once "vendor/autoload.php";
require_once "App/Db/Posts/index.php";
use App\Models\PostData;
use App\Db\Components\QueryHelper;

$postData=new PostData(new QueryHelper());
$postData->getAllPosts();

require_once "App/Views/Posts/Index.view.php";
