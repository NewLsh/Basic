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
  public function artList(){
    $cate=Factory::M('Category');
    $data=$cate->get_cates();
    $id=$_GET['id'];
    $list=$cate->sortCate($data,$id);
    $arr=array();
   foreach($list as $val){
     $arr[]=$val['id'];
   }
   $arr[]=$id;
    //  echo "<pre>";
    // var_dump($arr);
    // die();
    $list=implode(',',$arr);
    $sql="select a.*,c.name from article a join category c on a.category_id=c.id where a.category_id in ($list)";
    return $this->select($sql);    
  }
}


?>
