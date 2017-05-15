<?php
class LoginController extends Controller{
  public function index(){
    $this->display('login.html');
  }
  public function signHandle(){
    $sn=Factory::M('Login');
    if($sn->check()){
    $this->success('登陆成功','?u=Teacher&c=Teacher');   
    } else{
    $this->error('登陆失败','?u=Teacher&c=Login');
    }
  
    
  }
}

?>
