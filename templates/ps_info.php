<?php
include_once 'class.php';
$smarty= DB::getDB();
$teacher=new teacher();
$info=$teacher->show();
// var_dump($info);
$smarty->assign('info',$info);

$smarty->display('ps_info.html');
?>
