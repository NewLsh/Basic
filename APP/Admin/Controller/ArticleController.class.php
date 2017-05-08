<?php
class ArticleController extends Controller{
  public function showArt(){
    $art=Factory::M('Article');
    $data=$art->get_art();

    $this->assign('data',$data);
    
    $this->display('showArt.html');
  }
  public function add(){
    $cate=Factory::M('Category');
    $data=$cate->get_cate();
    $this->assign('data',$data);

    $this->display('add.html');
  }
  public function addHandle(){
    $art=Factory::M('Article');
    $res=$art->insert();
    if($res){
      $this->success('添加成功','?m=Admin&c=Article&a=showArt');
    }else{
      $this->error('添加失败','?m=Admin&c=Article&a=add');
    }
  }
}
