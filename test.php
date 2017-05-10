<?php
$data=array(
  array('id'=>1, 'name'=>'中国', 'parent_id'=>0),
  array('id'=>2,'name'=>'美国','parent_id'=>0),
  array('id'=>3,'name'=>'河北省','parent_id'=>1),
  array('id'=>4,'name'=>'河南省','parent_id'=>1),
  array('id'=>5,'name'=>'纽约','parent_id'=>2),
  array('id'=>6,'name'=>'石家庄','parent_id'=>3),
  array('id'=>7,'name'=>'保定','parent_id'=>6),
  array('id'=>8,'name'=>'郑州','parent_id'=>4),
  array('id'=>9,'name'=>'雄安','parent_id'=>6)
);
function delCate($data,$id){
  static $arr=array();
  foreach($data as $key=>$val){
    if($val['parent_id'] == $id){
      $arr[] = $val;
      //寻找子集
      delCate($data,$val['id']);
    }
  }
  return $arr;
}
$arr=delCate($data,2);
echo'<pre>';
print_r($arr);
?>

<a href="http://192.168.89.40/0508/index.php?m=Admin&c=Article&a=showart">崔</a>

