<?php
require_once 'php/pratice.php';
 echo '<pre>';
if(isset($_POST['submit'])){
  // var_dump($_POST);
    foreach($_POST as $key=>$value){
     $$key=$value;   
    }
    $pdo=new mess();   
}
 

$_COOKIE['userid']
$_REQUEST
$_SESSION['userid']
