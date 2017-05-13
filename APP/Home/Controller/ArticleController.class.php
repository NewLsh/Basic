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
  public function artList(){
    $art=Factory::M('Article');
    $data=$art->artList();
    $this->assign('data',$data);
    $this->display('artList.html');
  }
}
