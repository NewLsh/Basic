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
	
}

