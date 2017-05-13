<?php
class CategoryModel extends Model{
  public function get_cates(){
    $sql="select * from category";
    return $this->select($sql);
    ;
  }
  public function sortCate($data,$parent_id=0){
    static $arr=array();
    foreach ($data as $key => $value) {
      # code.
      if($value['parent_id'] == $parent_id){
        $arr[]=$value;
        $this->sortCate($data,$value['id']);
      }
    }
    return $arr;
  }
}
