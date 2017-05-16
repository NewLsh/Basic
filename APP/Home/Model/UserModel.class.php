<?php
class UserModel extends Model{
  public function reg($face){
    $sql="insert into user(username,pwd,tel,email,face) values (:username,:pwd,:tel,:email,:face)";
    $arr=array(
      'username'=> $_POST['username'],
      'pwd'=> $_POST['pwd'],
      'tel'=> $_POST['tel'],
      'email'=> $_POST['email'],
      'face'=> $face,
    );
    return $this->add($sql,$arr);
  }
  public function loginCheck(){
    $sql="select * from user where username=?";
    $row=$this->find($sql,array($_POST['username']));
    if($row){
      if(md5($_POST['pwd']) == $row['pwd']){
        return $row;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  
}
?>
