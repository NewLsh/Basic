<?php

class Model extends DB{
  private $pdo=null;
  public function __construct(){
    // include_once 'Db.class.php';
    $db= DB::getDB();
    $this->pdo=$db->pdo;
  }
  public function add($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
          // echo ':'.$key,$val;
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    if( $stmt->execute()){
      return $this->pdo->lastInsertId();
    }else{
      return false;
    }
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function save($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);               
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    if( $stmt->execute()){
      // echo $sql;
      return $stmt->rowCount();
    }else{
      return false;
    }
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function delete($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
        }else{
          $stmt->bindValue($key+1,$val);
          // var_dump($params);
        }
      }
    }   
    if($stmt->execute()){
      return $stmt->rowCount();
    }else{
      return false;
    }
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function select($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    $stmt->execute();
    $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function find($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    $stmt->execute();
    $data= $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function fetField($sql,$params = array(),$columnNum){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    $stmt->execute();
    $data= $stmt->fetchColumn($columnNum);
    return $data;
    }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  public function getcount($sql,$params = array()){
    try{
    $stmt=$this->pdo->prepare($sql);
    if($params){
      foreach($params as $key=>$val){
        if(is_string($key)){
          $stmt->bindValue(':'.$key,$val);
        }else{
          $stmt->bindValue($key+1,$val);
        }
      }
    }   
    $stmt->execute();
    return $stmt->fetchColumn();
      }catch(PDOException $e){
      $this->getERR($e);
    }
  }
  //日期改格式post
  public function getWeekth(){
     // 计算当前第几周
    static $s_start="2017-02-04";
    //开学时间转化为秒数,取天数
    $scday=date('z',strtotime($s_start));
    //传入的时间转化为秒数,去天数    
    $today=date('z',strtotime($post['date']));
    //向上取整为所选周数
    $weekth=ceil(($today-$scday)/7);
    return $weekth;
  }
  public function autoWeekth(){
     // 计算当日第几周
    static $s_start="2017-02-04";
    //开学时间转化为秒数,取天数
    $scday=date('z',strtotime($s_start));
    //传入的时间转化为秒数,去天数    
    $today=date('z',time());
    //向上取整为所选周数
    $weekth=ceil(($today-$scday)/7);
    return $weekth;
  }
  public function getReg(){
    switch($_POST['floor']){
      case 0:
        $floor="";break;
      case 1:
        $floor="勤政楼";break;
      case 2:
        $floor="计科楼";break;
      case 3:
        $floor="物理南楼";break;
      case 4:
        $floor="化学北楼";break;
    }
    $weekth=$this->getWeekth();
    $week=date('w',strtotime($post['date']));
    $reg="$floor".'.*'.$week.'#'.$post['course'];
    return $reg;

  }
  protected function getERR($e){
    echo "<br>错误信息:",$e->getMessage();
    echo "<br>错误代码:",$e->getCode();
    echo "<br>错误文件:",$e->getFile();
    echo "<br>错误行数:",$e->getLine();
  }
  

}

?>
