<?php
class CategoryController extends Controller{
		public function index(){		
		$cate=Factory::M('Category');		
		$data=$cate->get_cate();		
		$this->assign('data',$data);		
		$this->display('showCate.html');
		
	}
	
}

