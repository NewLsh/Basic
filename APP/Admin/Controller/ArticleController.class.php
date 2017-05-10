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
    //img路径上传
    echo'<pre>';
    var_dump($_FILES);
    $up=new Upload();
    $img=$up->upload();
    // die();
    //insert,参数为img路径
    $art=Factory::M('Article');
    $res=$art->insert($img);
    if($res){
      $this->success('添加成功','?m=Admin&c=Article&a=showArt');
    }else{
      $this->error('添加失败','?m=Admin&c=Article&a=add');
    }
  }
  public function Edit(){
    $art=Factory::M('Article');
    $row=$art->getArtById();
    // var_dump($row);
    $this->assign('row',$row);

    $cate=Factory::M('Category');
    $this->assign('data',$cate->get_cate());

    $this->display('edit.html');
  }
  public function editHandle(){
    $art=Factory::M('Article');
    $res=$art->up_Art();
    if($res === false){
      $this->success('修改失败','?m=Admin&c=Article&a=edit&id='.$_GET['id']);
    }else{
      $this->error('修改成功','?m=Admin&c=Article&a=showArt');
    }    
  }
  public function Del(){
    $art=Factory::M('Article');
    $res=$art->del();
    if($res === false){
      $this->success('删除失败','?m=Admin&c=Article&a=edit&id='.$_GET['id']);
    }else{
      $this->error('删除成功','?m=Admin&c=Article&a=showArt');
    }    
  }
  public function delAll(){
    $art=Factory::M('Article');
    $res=$art->del_all();
    if($res){
      $this->success('删除成功','?m=Admin&c=Article&a=showArt');
    }else{
      $this->success('删除失败','?m=Admin&c=Article&a=showArt');
    }
  }
}
