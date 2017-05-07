<?php
class DB{
  private static $ins=null;
  private $pdo;
  private $smarty;
  private function __construct(){
    $this->conn();
    $this->smarty();
  }
  private function __clone(){}

  public function __get($name){
    if(isset($this->$name)){
      return $this->$name;
    }
    return null;
  }
  public static function getDB(){
    if(self::$ins == null){
      self::$ins = new self;
    }
    return self::$ins;
  }
  private function conn(){
    try{
      $dsn = "mysql:host=localhost;dbname=query;charset=utf8";
      $this->pdo = new PDO($dsn,'root','9539',array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    }catch(PDOException $e){
      $this->getMessage($e);
      exit();
    }
  }
  private function smarty(){
    include_once './smarty/Smarty.class.php';
    $this->smarty=new smarty();
  }
  public function assign($k,$v){
    $this->smarty->assign($k,$v);
  }
  public function display($k){
    $this->smarty->display($k);
  }
  
}
