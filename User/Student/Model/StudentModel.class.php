<?php
class StudentModel extends Model{
  public function show(){
    $sql="select * from ? where room regexp ?";
    $empty='empty'.$this->getweekth();
    $reg=$this->getReg();
    return $this->select($sql,array($empty,$reg));
    
  }
  protected function check($post){
    if(!empty($post['date'])){
      $s=date('d',strtotime($post['date']));
      $t=date('d',time());
      if($s<=$t){
        echo "<script>alert('选择合理的日期');location.href='index.html';</script>";
      }
    }else{
        echo "<script>alert('日期不能为空');location.href='index.html';</script>";
    }
  }
}
  