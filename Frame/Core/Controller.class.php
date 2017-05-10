<?php
class Controller{	
	public $smarty;	
	public function __construct(){		
		include_once FRAME_DIR.'Smarty/Smarty.class.php';		
		$this->smarty = new Smarty();		
		//设		置面板目录
		$this->smarty->setTemplateDir(VIEW_PATH.C);		
		//设		置编译目录
		$this->smarty->setCompileDir(APP_PATH.'Runtime');	
	}	
	//重	写Smarty的assign方法
	public function assign($k,$v){		
		$this->smarty->assign($k,$v);			
	}
	
	
	public function display($k){	
		$this->smarty->display($k);			
	}	
	public function success($msg,$url,$time=2){		
		header('content:text/html;charset=utf8;');		
		echo "<h1>^_^ || ^_^</h1>
          $msg";
		header("refresh:$time;url=$url");	
	}
	
	
	public function error($msg,$url,$time=2){			
		header('content:text/html;charset=utf8;');
		echo "<h1>*_*</h1>
         <h3> $msg</h3>";		
		header("refresh:$time;url=$url");		
	}
	
	
	
}


?>
