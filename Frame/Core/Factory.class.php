<?php
class Factory{
  // 返回一个模型类的唯一对象
  public static function M($class_name){
     static $objArr = array();
     $class=$class_name.'Model';
     if(!isset($objArr[$class])){
       $objArr[$class]=new $class();

     }
     return $objArr[$class];
  }
 
}
