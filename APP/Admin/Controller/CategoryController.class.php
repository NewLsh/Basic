<?php
class CategoryController extends Controller{

	public function index(){		
		$cate=Factory::M('Category');		
		$data=$cate->get_cate();		
		$this->assign('data',$data);		
		$this->display('showCate.html');		
	}
  public function add(){
    $cate=Factory::M('Category'); //new Category
    $this->assign('cate',$cate->get_cate()); //分配变量    
    $this->display('add.html');
  }
  public function addHandle(){
    $cate=Factory::M('Category'); //new Category
    $this->assign('cate',$cate->get_cate()); //分配变量 
    $res=$cate->insert();
    if($res){
     $this->success('添加成功',"?m=Admin&c=Category");
    }else{
     $this->error('添加失败',"?m=admin&c=Category");
    }
  }
  public function edit(){
    $cate=Factory::M('Category');
    $row=$cate->gocbi();
    $this->assign('row',$row);

    // $data=$cate->get_cate();
    $this->assign('data',$cate->get_cate());
    $this->display('edit.html');
  }
  public function editHandle(){
    $cate=Factory::M('Category');
    $res=$cate->u_cate();
    if($res){
      $this->success('修改成功','?m=Admin&c=Category');
    }else{
      $this->error('修改失败','?m=Admin&c=Category');
    }
  }
  public function del(){
    $cate=Factory::M('Category');
    $res=$cate->del();
    die();
    if($res){
      $this->success('删除成功','?m=Admin&c=Category');
    }else{
      $this->error('删除失败','?m=Admin&c=Category');
    }
  }
	
}

