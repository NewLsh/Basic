<?php
class TeacherController extends Controller{
  public function index(){
    $tc=Factory::M('Teacher');
    $data=$tc->index();
    $this->assign('data',$data);
    $this->display('teacher.html');
  }
  public function change(){
    $tc=Factory::M('Teacher');
    $data=$tc->gocbi();
    $this->assign('data',$data);
    // $_SESSION['sdate']=$_POST;
    
    //查询结果的显示
    if(isset($_POST['date'])){
     $tc=Factory::M('Teacher');
     $res=$tc->show();

     $this->assign('res',$res); 
    }
    $this->display('change.html');
  }
  public function upHandle(){
    $tc=Factory::M('Teacher');
    // $tc->upHandle();
    $tc->upHandle()? $this->success('修改成功','?u=Teacher&c=Teacher') : $this->error('修改失败','?u=Teacher&c=Teacher');    
  }
  public function info(){
    $tc=Factory::M('Teacher');
    $data=$tc->info();
    $this->assign('val',$data);
    $this->display('info.html');
    
  }
}
