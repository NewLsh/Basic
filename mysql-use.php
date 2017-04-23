<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<?php
require_once './pratice.php';
if(isset($_POST['submit'])){
  
}
$config = array(
  'host'=>'localhost',
  'port'=>'3306',
  'user'=>'root',
  'pwd'=>'9539',
  'charset'=>'utf-8',
  'dbname'=>'allroom'
);
$db =new Student();
$sql="show databases";
$sql="select * from query.allroom";
echo "<pre>";
$db->Rchange($sql);


?>
</body>
</html>
