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
          $stmt->bindValue($key,$val);
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
      return $this->pdo->rowCountws();
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
        }
      }
    }   
    if( $stmt->execute()){
      return $this->pdo->rowCountws();
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
          $stmt->bindValue($key,$val);
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
          $stmt->bindValue($key,$val);
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
          $stmt->bindValue($key,$val);
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
          $stmt->bindValue($key,$val);
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
   private function getERR($E){
    echo "错误信息:",$e->getMessage();
    echo "错误代码:",$e->getCode();
    echo "错误文件:",$e->getFile();
    echo "错误行数:",$e->getLine();
  }
  

}

?>
