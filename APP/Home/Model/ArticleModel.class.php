<?php
class ArticleModel extends Model{
  public function get_five_arts(){
    $sql="select a.*,C.name from article a join category c on a.category_id = c.id order by hits desc limit 5";
    return $this->select($sql);
  }
  public function goabi(){
    $id=$_GET['id'];
    $sql="select a.*,C.name from article a join category c on a.category_id = c.id where a.id =$id";
    return $this->find($sql);
  }
}
