<?php
class AdminModel extends Model{
  public function index(){
    $week='week'.$this->autoWeekth();
    $sql="select * from $week where teacherid=$_SESSION[userid]";
    return $this->select($sql);
  }
  public function gocbi(){
    $week='week'.$this->autoWeekth();
    $sql="select * from $week where roomid = $_GET[id]";    
    return $this->find($sql);
  }

  //调课处理
  public function upHandle(){
    if(isset($_COOKIE['uid'])){
      $_POST['uid']=$_COOKIE['uid'];
    
      
      $week='week'.$this->getWeekth();
      $sweek='week'.$this->autoWeekth();
    try{
      $sql="select * from $sweek where roomid=$_POST[roomid]";
      $arr=$this->find($sql);
     
      $sql="insert into $week values ($arr[teacherid],'$arr[name]','$arr[room]','$arr[class_name]',$_POST[uid])";
      // echo "<pre>";
      // var_dump($sql);
      // die();
      
      $this->add($sql);
      $sql="delete from $sweek where roomid=$_POST[roomid]";
      $this->delete($sql);
      return true;
    }catch(PDOExpetion $e){
      return false;
    }
    }
    
  }

  public function show(){
    $sql="select * from teachers";
    return $this->select($sql);    
  }
  protected function check(){
    if(!empty($_POST['date'])){
      $s=date('d',strtotime($_POST['date']));
      $t=date('d',time());
      //session 保存date
      $_SESSION['date']=$_POST['date'];
      if($s<=$t){
        echo "<script>alert('请选择正确的日期');history.back(2);</script>";
      }
    }else{
        echo "<script>alert('日期不能为空');history.back(2);</script>";
    }
    return true;
  }
  public function info(){
    $sql="select * from teachers where id = $_SESSION[userid]";
    return $this->find($sql);
  }
  public function addtc(){
     $sql="insert into teachers (name,sex,age,tel) values (:name,:sex,:age,:tel)";
     
    return $this->add($sql,$_POST);
  }
  public function edittc(){
    $sql="update teachers set name=:name,sex=:sex,age=:age,tel=:tel where id=$_GET[id]";
    return $this->save($sql,$_POST);
  }
} 
