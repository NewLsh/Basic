<?php
echo header("content-type:text/html;charset=utf8");

#计算当前第几周
function weekth(){
  $scday=date('z',strtotime('2017-02-20'));
  $today=date('z');
  $weekth=ceil(($today-$scday)/7);
  echo "$scday,$today,$weekth";
  return $weekth;
}
// weekth();

#链接数据库
 $host='localhost';
 $user='root';
 $pwd='9539';
$link=mysql_connect($host,$user,$pwd);
if(!$link){
  die ('链接数据库失败'.mysql_error());
}

function reg($s1,$s2,$floor,$week){
  if($s1>$s2){
    //弹出警告框
    echo "<script type=text/script>alert '请选择正确时间段！'</script>";
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
  $floor='';break;
  case 1:
  $floor='';break;
  case 1:
  $floor='';break;
  case 1:
  $floor='';break;
}
//











$reg=$floor.'.*'.$week.'#['.$th.']';

}






?>
