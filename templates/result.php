<?php
include_once 'class.php';
$smarty= DB::getDB();
$student=new Student();
$data=$student->run();
// var_dump($data);
$smarty->assign('data',$data);



$smarty->display('result.html');
?>
