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
    $sql="insert into article(title,category_id,author,content,ptime,hits,`order`) values (:title,:category_id,:author,:content,:ptime,:hits,:order)";
    $_POST['hits']=mt_rand(0,1000);
    echo'<pre>';
    var_dump($_POST);
     return $this->add($sql,$_POST);    
  }
  public function getArtById(){
    $sql="select * from article where id=?";
    // var_dump($_GET['id']) ;
    return $this->find($sql,array($_GET['id']));
  }
  public function up_Art(){
    $sql="update article set title=:title,category_id=:category_id,author=:author,content=:content,ptime=:ptime,`order`=:order where id=:id";
    $_POST['id']=$_GET['id'];
    // var_dump($_POST);
    return $this->save($sql,$_POST);
  }
  public function del(){
    $sql="delete from article where id=?";
    // var_dump($_GET);
    return $this->delete($sql,array($_GET['id']));
  }
}
?>
