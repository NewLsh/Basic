<?php
include_once 'class.php';
$smarty= DB::getDB();
$teacher=new teacher();
$data=$teacher->run();
// var_dump ($data);
if($data) $smarty->assign('data',$data);
$smarty->assign('username',$_COOKIE['username']);
$info=$teacher->show();
var_dump($info);

$smarty->display('teacher.html');
?>
