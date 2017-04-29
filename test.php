<?php
require_once 'php/pratice.php';
require_once 'function.js';
session_start();
echo'<pre>';
$s=$_SESSION;
 //echo $_SESSION['userid'];
 //echo $_COOKIE['uid'];
$arr=array('id' => "$_COOKIE[id]");
foreach($s as $k=>$v){
  $$k=$v;
  $arr[$k]=$v;
}
if(isset($_COOKIE['uid'])){
  $uid=$_COOKIE['uid'];
  $arr['uid']=$uid;
}
// var_dump($weeke);
// var_dump($arr);
$a=new teacher();
$i=$a->insert($arr);
$d=$a->delete($arr);
if($i && $d){
  echo "<script>alert('修改成功');</script>";
  
}else{
  die('修改失败');
}

?>
