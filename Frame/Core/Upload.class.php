<?php

class Upload {
  private $info;//存放上传的文件信息
  private $error='';//存放文件错误信息
  private $size=5; //允许上传文件的大小
  private $ext=array('jpg','png','gif','jpeg'); //允许的文件格式
  public $rootPath='./Public/Uploads/';
  //构造函数获取上传文件基本信息
  public function __construct(){
    // echo '<pre>';
    $arr=array_values($_FILES);
    // var_dump($_POST);
    // var_dump($arr);
    $this->info=$arr[0];
  }

  //上传处理方法
  public function upload(){
    if(!$this->getERR() || !$this->checkSize()  || !$this->checkExt()){
      die($this->error);
    }
    //设置新的文件属性
    //新文件名
    $newFileName=time().mt_rand(000,999).'.'.$this->getExt();
    //设置文件上传路径
    //根目录为./Public/Uploads
    //子目录为当天的日期
    //组合路径
    $filePath=$this->rootPath.date('Y-m-d');
    //自动创建目录
    if(!file_exists($filePath)){
      mkdir($filePath,0777,true);
    }
    //前面都没问题,上传文件
    if(move_uploaded_file($this->info['tmp_name'],$filePath.'/'.$newFileName)){
      return $filePath.'/'.$newFileName;
    }else{
      exit('上传失败');
    }
  }
  //上传错误err的数组
  public function getERR(){
    $err=array(
      1=>'',
      2=>'',
      3=>'',
      4=>'',
      6=>'',
      7=>'',
      8=>''
    );
    if(array_key_exists($this->info['error'],$err)){
      $this->error=$err[$this->info['error']];
      return false;
    }else{
      return true;
    }
  }

  //检查文件大小
  public function checkSize(){
    if($this->info['size'] > $this->size*1024*1024){
      echo '上传文件太大了,上传限制在'.$this->size.'M';
      return false;
    }
    return true;
  }

  //获取图片格式
  public function getExt(){
    $ext=strrchr($this->info['name'],'.');
    $ext=ltrim($ext,'.');//去掉左边的 .
    // echo $ext;
    return $ext;
  }
  //图片格式检查
  public function checkExt(){
    $ext=$this->getExt();
    $ext=strtolower($ext);
    if(!in_array($ext,$this->ext)){
      //记录错误
      $this->error='错误的文件格式,只支持jpg,jpeg,gif,png格式';
    }else{
      return true;
    }
  }  
}
