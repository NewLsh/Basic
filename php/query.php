<?php
echo header("content-type:text/html;charset=utf8");
//登陆数据库
  $host='127.0.0.1';
  $port='3306';
  $user='root';
  $pwd='9539';
  $link=mysql_connect("$host:$port",$user,$pwd);
  if(!$link){

    die('Could\'t connect:'.mysql_error());
  }

//接受传递值，设置查询课时
function class_query($class_q1,$class_q2){
  if($class_q1>$class_q2){
    //弹出警告框
    echo "<script type=text/script>alert '请选择正确时间段！'</script>";
  }
switch ($class_q1){
  case 1:
   $start=1;break;
  case 2:
   $start=1;break;
  case 3:
   $start=2;break;
  case 4:
   $start=2;break;
  case 5:
   $start=3;break;
  case 6:
   $start=3;break;
  case 7:
   $start=4;break;
  case 8:
   $start=4;break;
  case 9:
   $start=5;break;
}
switch ($class_q2){
  case 1:
   $stop=1;break;
  case 2:
   $stop=1;break;
  case 3:
   $stop=2;break;
  case 4:
   $stop=2;break;
  case 5:
   $stop=3;break;
  case 6:
   $stop=3;break;
  case 7:
   $stop=4;break;
  case 8:
   $stop=4;break;
  case 9:
   $stop=5;break;
  case 10:
   $stop=5;break;
}
//  $today=date('w');
 $arr='';
  for(;$start<=$stop;$start++){
// echo "${today}#$start"; 数据采集完成
    
    $arr.="$start";
  }
  return $arr;

}
 $th=class_query(1,10);


 echo'<pre>';
//  var_dump ($Class_q);


//定义查询语句
//  function class_make(){
//    $sql='';
//    $Class_q=class_query();
//    $len=sizeof($Class_q);
//    for($i=0;$i<$len;$i++){
//      $str=$Class_q[$i];
//      //查询语句
//      $sql.=" ####";
//    }
//    return $sql;
//  }
  //获取当前时间&设置日期
  $today=date('w');
$week=$today;




$reg='^'.$week.'#['.$th.']';
var_dump($reg);


  $str="select * from class_rooms where class_at regexp '$reg'";

  mysql_select_db('somedb');
  
  $res=mysql_query($str,$link);
  if(!$res){
    die('can not query data:'.mysql_error());
  }
  echo '<pre>';
  
  while($row=mysql_fetch_array($res,MYSQL_ASSOC)){
  // var_dump($res);
  echo "<table border=1px><tr><td>{$row['class_on']}</td>".
   "<td>{$row['class_at']}</td></tr></table>";
        // "AT:{$row['class_at']} <br>".
        // "------------------------<br>";

  }
  mysql_close($link);

function l($th){
    switch($th){
        case 1:
        $a='^勤政楼';return $a;
        case 2:
        $a='^化学北楼';return $a;
        case 3:
        $a='^物理南楼';return $a;
        case 4:
        $a='^计科楼';return $a;
        case 5:
        $a='';return $a;
        
    }
}
$reg='.*'.$today.'#['.$th.']';
echo $reg;


  ?>
