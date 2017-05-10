<?php
class IndexController extends Controller{
  public function index(){
    $art=Factory::M('Article');
    $data= $art->get_five_arts();
    $this->assign('data',$data);
    
    $this->display('index.html');
  }
}
