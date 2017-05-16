<?php
class LoginController extends Controller{
  public function register(){
    $this->display('register.html');
  }
  public function registerHandle(){
    $reg=Factory::M('Register');
    $this->display('artlist.html');
  }
  public function login(){
    $this->display('login.html');
  }
}
