<?php
echo header("content-type:text/html;charset=utf8");

#计算当前第几周
function weekth(){
  //设置开学日期
  $scday=date('z',strtotime('2017-02-20'));
  //获取当天日期
  $today=date('z');
  //计算当前周为第几周
  $weekth=ceil(($today-$scday)/7);
  //$weekth就是想要的
  echo "$scday,$today,$weekth";
  return $weekth;
}
weekth();

#链接数据库
 $host='localhost';
 $user='root';
 $pwd='9539';
$link=mysql_connect($host,$user,$pwd);
if(!$link){
  die ('链接数据库失败'.mysql_error());
}
// var_dump ($link);

function reg($s1,$s2,$floor,$day){
  if($s1>$s2){
    //弹出警告框
    echo "<script>alert ('请选择正确时间段！');location.href='main.html'</script>";
  }
  //得到reg最后部分
  switch ($s1){
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
  switch ($s2){
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
 $th='';
  for(;$start<=$stop;$start++){
    $th.="$start";
  }
// echo "${today}#$start"; 数据采集完成  
//reg楼层的选择
switch($floor){
  case 1:
  $floor='勤政楼';break;
  case 2:
  $floor='';break;
  case 3:
  $floor='';break;
  case 4:
  $floor='';break;
}
//计算当前第几周

 //设置开学日期
  $scday=date('z',strtotime('2017-02-20'));
  //获取当天日期
  $today=date('z',$day);
  //计算当前周为第几周
  $weekth=ceil(($today-$scday)/7);
  //$weekth就是想要的

//获得所选日期为周几
$week=date('w',$day);
//

$reg=$floor.'.*'.$week.'#['.$th.']';
$ask="select name,room,size from '$weekth' where room regexp '$reg'";
return $ask;
}
$ask=reg(1,8,1,strtotime());
$res=mysql_query($ask,$link);
if(!$res)
{
  die("查询出错,错误如下:".mysql_error());
}
// return $res;
// $res=reg(1,8,1,strtotime());
$row=mysql_fetch_array($res);
var_dump ($row);





?>
