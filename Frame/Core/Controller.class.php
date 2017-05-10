<?php
class Controller{
  public $smarty;
  public function __construct(){
    include_once FRAME_DIR.'Smarty/Smarty.class.php';
    $this->smarty=new Smarty();
    //设置模板目录
    $this->smarty->setTemplateDir(VIEW_PATH.C);
    // echo VIEW_PATH;
    //设置编译目录
    $this->smarty->setCompileDir(USER_PATH.'Runtime');
  }
  //重写assign方法
  public function assign($k,$v){
    $this->smarty->assign($k,$v);
  }
  //重写display方法
  public function display($template){
    $this->smarty->display($template);
  }
}
?>
