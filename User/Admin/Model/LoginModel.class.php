<?php
class LoginModel extends Model{
  public function check(){
    $this->yzm();
    $sql="select * from teachers where id=?";
    $arr=$this->find($sql,array($_POST['userid']));
    if($arr === false){
      return false;
    }
    if($arr['pwd']==$_POST['pwd']){
       $_SESSION['userid']=$_POST['userid'];
       $_SESSION['username']=$arr['name'];
      return true;
    }else{
      return false;
    }
  }
  public function yzm(){
    if(!$_POST['userid'] || !$_POST['pwd']){
      return false;
    }
    if($_SESSION['yzm'] == $_POST['yzm']){
      return true;
    }else{
      echo"<script>alert('验证码错误');location.href='?u=Teacher&c=Login';</script>";
    }
  }
}
