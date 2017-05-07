<?php
// include_once 'Model.class.php';
//类继承model
class StudentModel extends Model{
  //获取所有学生
  public function getStudents(){
  // include_once 'Db.class.php';
  // $db=DB::getDB();
  $sql="select * from student where id<:x and id>:y";
  $data=$this->select($sql,array(':x'=>20,':y'=>10));
  return $data;
 }
 //删除的方法
 public function deleteStument(){
   $id=$_GET['id'];
   $sql="delete from student where id=?";
   $res = $this->delete($sql,array($id));
   return $res;
 }
 public function addStudent(){
   //调用Model 中的add方法
 }
 
}






?>
