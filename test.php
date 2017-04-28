<?php
require_once 'php/pratice.php';
 echo '<pre>';
if(isset($_POST['submit'])){
  // var_dump($_POST);
    foreach($_POST as $key=>$value){
     $$key=$value;   
    }

    if(!$userid || !$userpwd) {
       echo"<script>alert('请输入用户名或密码');location.href='SignIn.html'</script>";
    }
    $pdo=new mess();
    $pdo->sign($_POST);
    $pdo->select($_POST);

    
}else{
  echo"<script>alert('非法登陆');location.href='SignIn.html'</script>";
}
  //从表单中获取数据                     
  foreach($_POST as $key=>$value){
     $$key=$value;
  } 
 

