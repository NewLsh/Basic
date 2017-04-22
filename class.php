<?php
class basic{
  protected $builds=array('勤政楼','计科楼','物理南楼','化学北楼');

}
class room extends basic{

}
$a=new room;
// var_dump($a);
echo '<pre>';
// var_dump (basic::$builds);
$link=mysqli_connect('localhost','root','9539');
// var_dump($link);
$sql='select * from query.allroom where id=2555';
// $res=mysqli_query($sql,$link);
// var_dump($res);

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
