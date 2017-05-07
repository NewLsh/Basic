<?php
class LoginModel extends Model{
  public function check(){
    
    $user=$_POST['user'];  // 'or 1;#
    $pwd=md5($_POST['pwd']);
    //select * from admin where name='' or 1;#' and '$pwd'

    $sql="select * from admin where name=? and pwd=?";
    //sql查询结果为true的话即 帐号密码正确
    if($row=$this->find($sql)){
      if($pwd == $row['pwd']){
        return $row;
      }else{
        return false;
      }    
    }else{
    return false;
    }
  }
}
