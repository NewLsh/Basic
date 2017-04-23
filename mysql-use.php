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
$config = array(
  'host'=>'localhost',
  'port'=>'3306',
  'user'=>'root',
  'pwd'=>'9539',
  'charset'=>'utf-8',
  'dbname'=>'allroom'
);
$db = root::GetDB($config);
$sql="show databases";
mysql_query($sql);



  ?>
</body>
</html>
