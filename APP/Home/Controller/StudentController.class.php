<?php
class StudentController extends Controller{
  public function StudentList(){
    // include_once 'StudentModel.class.php';
    $stu=Factory::M('Student');
    $data=$stu->getStudents();

  $this->assign('data',$data);
  $this->display('studentList.html');
    // include_once 'student_v.html'; 
  }
  public function add(){
    $this->display('add.html');
  }
  public function studentDel(){
    // $this->display('add.html');
    echo "Del ------OK";
  }
  
}


?>
