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
// var_dump($_POST);
if(isset($_POST['submit'])){
  // die('请选择查询条件');

  //从表单中获取数据
  foreach($_POST as $key=>$value){
     $$key=$value;
  }
  if(!isset($_POST['date'])){
     die('请选择查询日期');
  }
  //  var_dump($_POST);
    $receive=$_POST;
    
}else{
  echo "<script>alert('forbidden');location.href='../lindex.html'</script>";
}



//遍历接到的数组

die();




// $rec=new mess();
// // $rec->weekth($date);
// $reg=$rec->reg($receive);
// // echo $reg;
// // echo $rec->weekth($receive);
// $rec->demand($receive);




























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
