<?php
class StudentModel extends Model{
  public function show(){
    $this->check();
    $empty='empty'.$this->getweekth();
    $reg=$this->getReg();
    $sql="select * from  $empty  where name regexp  '$reg'";    
    return $this->select($sql);
    
  }
  protected function check(){
    if(!empty($_POST['date'])){
      $s=date('d',strtotime($_POST['date']));
      $t=date('d',time());
      if($s<=$t){
        echo "<script>alert('请选择正确的日期');location.href='index.php';</script>";
      }
    }else{
        echo "<script>alert('日期不能为空');location.href='index.php';</script>";
    }
  }
}
  