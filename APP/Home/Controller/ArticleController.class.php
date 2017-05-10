<?php
class ArticleController extends Controller{
  public function show(){
    $art=Factory::M('Article');
    $data=$art->goabi();
    // var_dump($data);
    // die();

    $this->assign('val',$data);
    $this->display('art.html');
  }
}
