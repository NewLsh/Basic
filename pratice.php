<?php
class root{
  private $link=null;
  static $instance = null; //唯一实例
  private $user='root';
  private $host='localhost';
  private $pwd='9539';
  private function __construct($conf){
    
    $this->link=mysql_connect("{$conf['host']}:{$conf['port']}","{$conf['user']}","{$conf['pwd']}") or die('connect failed');
    mysql_query("set names {$conf['charset']}",$this->link);
    mysql_query("use {$conf['dbname']}",$this->link);
  }
  private function __clone(){}
  public static function GetDB($conf){
    if(empty(static::$instance)){
      static::$instance = new static($conf);
    }
    return static::$instance;
  }
  //
  function exec($sql){
    $result=mysqli_query($sql,$this->link);
    if($result === false){
      echo "<p>非常抱歉,语句执行失败,错误信息如下:";
      echo "<br>错误提示:".mysql_error();
      echo "<br>错误代号:".mysql_errno();
      echo "<br>错误语句:".$sql;
      echo "</p>";
      die();
    }
    return $result;
  }
  //
  function GetRows($sql){
    $result =mysql_query($sql,$this->link);
    if($result === false){
      echo "<p>非常抱歉,语句执行失败,错误信息如下:";
      echo "<br>错误提示:".mysql_error();
      echo "<br>错误代号:".mysql_errno();
      echo "<br>错误语句:".$sql;
      echo "</p>";
      die();
      //
    }//成功的时候,$result是一个资源类型的结果集
    $arr=array();
    while($row=mysql_fetch_assoc($result)){
      $arr[]=$row; //把数组放进数组,组成二维数组
  }
  return $arr;
}











?>
