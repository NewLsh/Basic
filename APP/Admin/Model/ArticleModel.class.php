<?php
class ArticleModel extends Model{
  public function get_art(){
    if(isset($_GET['cid'])){
    $sql="select * from article where category_id={$_GET['cid']}";
    return $this->select($sql);
    }else{
    $sql="select * from article";
    return $this->select($sql);
    }
    // echo $sql;
  }
}
