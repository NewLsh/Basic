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
  public function insert(){
    echo'<pre>';
    $sql="insert into article (title,category_id,author,content,ptime,hits,`order`) values (:title,:category_id,:author,:content,:ptime,:hits,:'order')";
    $_POST['hits']=mt_rand(0,10000);
    print_r($_POST);
     return $this->add($sql,$_POST);    
  }
}
