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
if(isset($_REQUEST['submit'])){
  if(!isset($_REQUEST['date'])){
    var_dump($_REQUEST['date']);
    $receive=$_REQUEST;
  }
  
}

//遍历接到的数组
foreach($receive as $key=>$value){
  $$key=$value;
}
$rec=new mess();
// $rec->weekth($date);







































$config = array(
  'host'=>'localhost',
  'port'=>'3306',
  'user'=>'root',
  'pwd'=>'9539',
  'charset'=>'utf-8',
  'dbname'=>'allroom'
);
$db =new Teacher();
// $link=$db->link();
// var_dump ($link->exec("insert into query.allroom values (100,'room123','70')"));
// $sql="insert into query.allroom values (122,'room12','70')";
echo '<hr>';
// $db->change($sql);
echo '<hr>';
// var_dump ($db->insert($sql));













?>




</body>
</html>
