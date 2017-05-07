<?php

class LoginController extends Controller{
  public function login(){
    $this->display('login.html');
  }
  public function loginCheck(){
    // echo'<pre>';
    // print_r($_POST);
    if(strtolower($_SESSION['yzm']) != strtolower($_POST['yzm']) ){
      echo "<script>alert('验证码错误');history.back();</script>";
      return;
    }

    $login=Factory::M('Login'); //new LoginModel()
    if($login->check()){
      echo "<script>alert('登陆成功');location.href='index.php?m=Admin';</script>";      
    }else{
      echo "<script>alert('登陆失败');history.back();</script>";
    }
    
  }
  public function pryzm(){
    Verify::yzm();
  }
}
