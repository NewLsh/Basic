<?php
class basic{
  protected $builds=array('勤政楼','计科楼','物理南楼','化学北楼');
  function show(){
    $mysql=new mysqli('localhost','root','9539','query');
    var_dump ($mysql);
  }
  function query(){
    $sql='select * from query.allroom where id=2555';
    $mysql=new mysqli('localhost','root','9539','query');
    $result=$mysql->query($sql);
if($result->num_rows > 0){
      // Cycle through results
     while ($row = $result->fetch_assoc()){
      //  var_dump ($row);
         echo "<tr><td>id:".$row['id'] ."</td><td>name:".$row['name']."</tr><tr>Size:".$row['size'].'</td></tr>';
     }
     // Free result set
     $result->close();
 }else echo ($mysqli->error);
 $mysql->close();

$this->show();
  }
}
class room extends basic{

}
$a=new basic;
// var_dump($a);
echo '<pre>';
// var_dump (basic::$builds);
$link=mysqli_connect('localhost','root','9539');
// var_dump($link);
$sql='select * from query.allroom where id>5000';
// $res=mysqli_query($sql,$link);
// var_dump($res);

$mysql=new mysqli('localhost','root','9539','query');
$result=$mysql->query($sql);
if($result->num_rows > 0){
      // Cycle through results
      echo $result->num_rows,'<br>';
     while ($row = $result->fetch_assoc()){
      //  var_dump ($row);
         echo "<tr><td>id:".$row['id'] ."</td><td>name:".$row['name']."</tr><tr>Size:".$row['size'].'</td></tr>';
     }
     // Free result set
     $result->close();
 }else echo ($mysqli->error);
 $mysql->close();
 echo'<hr>';
// var_dump($a->show());
$a->query();

