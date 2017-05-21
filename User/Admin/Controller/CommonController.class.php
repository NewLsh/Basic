<?php
class CommonController extends Controller {
    //检测方法
    public function jiance(){
        if(!isset($_SESSION['adminid'])){
            $this->error('无权访问', '?u=Admin&c=Login');
            die();
        }
    }
}

?>
