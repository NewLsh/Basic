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
}
