<?php
class CategoryModel extends Model{ 
  public function get_cate(){
    $sql = " select * from category";
    $data=$this->select($sql);
    return $this->sortCate($data);
  }
  public function sortCate($data,$parent_id=0,$level=0){
    static $arr=array();
    foreach ($data as $key => $value) {
      # code.
      if($value['parent_id'] == $parent_id){
        $value['level']=$level;
        $arr[]=$value;
        $this->sortCate($data,$value['id'],$level+1);
      }
    }
    return $arr;
  }
  public function Insert(){
    $sql="insert into category (name,parent_id) values (:name,:parent_id)";
    // $arr=$_POST;
    // print_r($arr);
    return $this->add($sql,$_POST);
  }
  public function gocbi(){
    $sql="select * from category where id = ?";
    return $this->find($sql,array($_GET['id']));
  }
  public function u_cate(){
    $sql="update category set name=:name,parent_id=:parent_id where id=:id";
    $_POST['id']=$_GET['id'];
    // die();
    return $this->save($sql,$_POST);
  }
  public function del(){
    try{
    $sql="delete from category where id = ?";
    //get所有cate,传入delcate中
    $data=$this->get_cate();
    $arr=$this->delcate($data,$_GET['id']);
    $arr[]=$_GET;
    //添加传入的id
    // echo'<pre>';
    // var_dump($arr);
    foreach($arr as $val){
      $this->delete($sql,array($arr['id']));
    }
    return true;
    }catch(PDOException $e){
      $this->getERR($e);
    } 
  }
  //遍历要删除的子集
  public function delcate($data,$id){
     static $arr=array();
    foreach($data as $key=>$val){
    if($val['parent_id'] == $id){
      $arr[] = $val;
      //寻找子集
      $this->delCate($data,$val['id']);
    }
  }
    return $arr; //返回子集

  }

}
?>
