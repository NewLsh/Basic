<?php
class LoginModel extends Model{
  public function check(){
    $this->yzm();
    $sql="select * from admin where id=?";
    $arr=$this->find($sql,array($_POST['admin']));
    if($arr === false){
      return false;
    }
    if($arr['pwd']==md5($_POST['pwd'])){
       $_SESSION['adminid']=$_POST['admin'];
       $_SESSION['adminname']=$arr['name'];
      return true;
    }else{
      return false;
    }
  }
  public function yzm(){
    if(!$_POST['admin'] || !$_POST['pwd']){
      return false;
    }
    if($_SESSION['yzm'] == $_POST['yzm']){
      return true;
    }else{
      echo"<script>alert('验证码错误');location.href='?u=Teacher&c=Login';</script>";
    }
  }
}
