<?php
namespace App\Models;
use App\db\components\QueryHelper;

class PostData
{
 protected  $db;
 public function  __construct(QueryHelper $db)
 {
     $this->db=$db;
 }
 public function getAllPosts(){
     $posts=$this->db->getAll("posts","datePublication");
     require_once __DIR__."/../Views/Posts/Index.view.php";
 }
 public function getOne($id){
     return $this->db->getOne("posts", $id);
 }
 public function store($data){
     $temp["datePublication"]=date("Y-m-d");
     $temp["title"]=$data["title"];
     $temp["description"]=$data["description"];
     $temp["photo"]=$data["photo"];
     $temp["id_user"]=rand(1,2);

     $this->db->store("posts",$temp);
 }
}