<?php
class Frame{
  public static function run(){
    Frame::startsession();
    Frame::getParams();
    Frame::setConst();
    Frame::autoload();
    Frame::dispatch();
  }
  private static function startsession(){
    session_start();
  }
  private static function getParams(){
    $m=isset($_GET['m'])? $_GET['m'] : 'Admin';
    $c=isset($_GET['c'])? $_GET['c'] : 'Index';
    $a=isset($_GET['a'])? $_GET['a'] : 'index';
    define('M',$m);  //模块 平台 分组
    define('C',$c);   //控制器
    define('A',$a);   //actation 动态,操作,方法
  }
  public static function setConst(){
    //echo __DIR__;//E:\mvc\v16\Frame\Core
    $dir=str_replace('\\','/',__DIR__);
    //echo $dir; //E:/mvc/v16/Frame/Core
    $dir = str_replace('Core','',$dir); 
    define('FRAME_DIR',$dir);
    define('CORE_DIR',FRAME_DIR.'CORE/');
    
    //定义自定义控制器目录
    define('CONTROLLER_PATH',APP_PATH.M.'/Controller/');
    define('MODEL_PATH',APP_PATH.M.'/Model/');
    define('VIEW_PATH',APP_PATH.M.'/View/');
  }
  //自动加载
  public static function autoload(){
    spl_autoload_register(function ($class_name){
      //加载Core目录中的文件
      $file = CORE_DIR . $class_name .'.class.php';
      if(file_exists($file)) include_once $file;
      //加载Controller目录中的文件    
      $file =CONTROLLER_PATH .$class_name.'.class.php';
      if(file_exists($file)) include_once $file;
      //加载Model目录中的文件
      $file =MODEL_PATH .$class_name.'.class.php';
      if(file_exists($file)) include_once $file;
    });
  }
  public static function dispatch(){
    $controller=C.'Controller';
    $s=new $controller();
    $action=A;
    $s->$action();
  }
  
}

?>
