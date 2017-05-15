<?php
class Frame{
  public static function run(){
    Frame::starsession();
    Frame::getParams();
    Frame::setConst();
    Frame::autoload();
    Frame::dispath();
  }
  private static function starsession(){
    session_start();
  }
  private static function getParams(){
    $u=isset($_GET['u'])?  $_GET['u'] : 'Student';
    $c=isset($_GET['c'])?  $_GET['c'] : 'Student';
    $a=isset($_GET['a'])?  $_GET['a'] : 'index';
    define('U',$u); //用户
    define('C',$c); //控制器
    define('A',$a); //操作,动作
  }
  //设置USER目录
  private static function setConst(){
    // echo __DIR__;
    $dir=str_replace('\\','/',__DIR__);
    $dir=str_replace('Core','',$dir);
    define('FRAME_DIR',$dir);
    // echo FRAME_DIR;
    define('CORE_DIR',FRAME_DIR.'CORE/');
    define('CONTROLLER_PATH',USER_PATH.U.'/CONTROLLER/');
    define('MODEL_PATH',USER_PATH.U.'/Model/');
    define('VIEW_PATH',USER_PATH.U.'/View/');
  }
  //自动加载模块
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
  //分发(操作)管理
  public static function dispath(){
    $controller=C.'Controller';
    $c=new $controller;
    $action=A;
    $c->$action();
  }
}
