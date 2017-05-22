<?php
include_once "./create_class.php";
$all=all();


echo "<pre>";
// shuffle($all);
// var_dump ($all);
// die;
$sql="insert into query.allroom (name) values ";
// for($i=0;$i<500;$i++){
//   $room=$all[$i];
//   $sql.= $i!=0? ",('$room',682)":"('$room',682)"; 
// // }
// for($i=0;$i<count($all);$i++){
//   $room=$all[$i];
//   $sql.= ($i!=0? ",('$room')":"('$room')"); 
// }
// echo 
// echo $sql;
// die("<hr>");

//1-18为262143
//单周87381
//双周174762

//链接数据库
$link=mysql_connect('localhost:3306','root','9539');
if(!$link){
  die('could not connect to mysql,because:'.mysql_error());
}
mysql_select_db('query');
$res=mysql_query($sql,$link);
if(!$res){
  die("can not insert data! because:".mysql_error());
}else{
  mysql_close($link);
  echo "insert data sucess!<br>";
}
@mysql_close($link);

?>
