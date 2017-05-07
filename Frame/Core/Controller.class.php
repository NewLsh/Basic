<?php
class Controller{
  public $smarty;
  public function __construct(){
    include_once FRAME_DIR.'Smarty/Smarty.class.php';
    $this->smarty = new Smarty();

    //设置面板目录
    $this->smarty->setTemplateDir(VIEW_PATH.C);
    //设置编译目录
    $this->smarty->setCompileDir(APP_PATH.'Runtime');
  }
  //重写Smarty的assign方法
  public function assign($k,$v){
    $this->smarty->assign($k,$v);
  }
  public function display($k){
    $this->smarty->display($k);
  }

}
?>
