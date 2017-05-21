<?php
class AdminController extends CommonController{
  // public function __construct(){
  //   $this->jiance();
  // }
  public function index(){    
    $this->display('index.html');
  }
  public function manage(){
    $ad=Factory::M('Admin');
    $data=$ad->show();
    
    $this->assign('data',$data);
    $this->display('manage.html');
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
  public function del(){
    $tc=Factory::M('Teacher');
    // die();
    if($tc->del() !== false){
    $this->success('修改成功','?u=Admin&c=Admin&a=manage');
    } else{
     $this->error('修改失败','?u=Admin&c=Admin&a=manage');  

    }
  }
  public function add(){
    $this->display('add.html');
  }
  public function addhandle(){
   $tc=Factory::M('Admin');
   
   if($tc->addtc()){
     $this->success('添加成功','?u=Admin&c=Admin&a=manage');
    } else{
     $this->error('添加失败','?u=Admin&c=Admin&a=manage');  

    }
  }
  public function edit(){
    $tc=Factory::M('Teacher');
    $data=$tc->info();
    $this->assign('val',$data);
    $this->display('edit.html');
  }
  public function edithd(){
    $tc=Factory::M('Admin');
   if($tc->edittc() !== false){
    $this->success('修改成功','?u=Admin&c=Admin&a=manage');
    } else{
     $this->error('修改失败','?u=Admin&c=Admin&a=manage');  

    }    
  }
}
