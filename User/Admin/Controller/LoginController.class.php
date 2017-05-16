<?php
class LoginController extends Controller{
  public function index(){    
    $this->display('login.html');
  }
  public function Handle(){
     $lo=Factory::M('Login');
     if($lo->check()){
       $this->success('登陆成功','?u=Adimn&c=Admin');
     }else{
       $this->error('登陆失败','?u=Amin&c=Login');
     }
     
  }

}
?>
