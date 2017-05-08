<?php
class ArticleController extends Controller{
  public function showArt(){
    $art=Factory::M('Article');
    $data=$art->get_art();

    $this->assign('data',$data);
    
    $this->display('showArt.html');
  }
}
