<?php
class StudentController extends Controller{
  public function index(){
    $this->display('index.html');
  }
  public function show(){
    $stu=Factory::M('Student');
    $data=$stu->select();
    $this->assign('data',$data);
    
    $this->display('index');
  }
}

?>
