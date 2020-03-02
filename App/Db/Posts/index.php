<?php
use App\Models\PostData;
use App\Db\Components\QueryHelper;

$postData=new PostData(new QueryHelper());
$postData->getAllPosts();