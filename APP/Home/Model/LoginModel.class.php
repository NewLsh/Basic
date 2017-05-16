<?php
class LoginModel extends Model{
  public function reHandle(){
    $user=Factory::M('User');
    $res=$user->reg();
    if($res){
      $this->success('注册成功','index.php?c=Login&a=Login');
    }else{
      $this->error('注册失败','index.php?c=Login&a=register');      
    }
  }


}
?>
