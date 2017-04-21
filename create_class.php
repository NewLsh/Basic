<?php
echo header("content-type:text/html;charset=utf8");

// echo "$floor ,$roomName";

//创建上课的教室
function CreateClass(){
  $bdNameAll = array('勤政楼','化学北楼','物理南楼','计科楼');
  foreach($bdNameAll as $value)
  {
    for($floor=1;$floor<=6;$floor++){
      for($roomName=1;$roomName<=9;$roomName++){
        $bdName=$value;
        $className=$bdName.$floor.'0'.$roomName;
        // echo $className;
        $classrooms[]=$className;
      }
    }
    // $roomName=rand(1,9);
    // $bdName=$bdNameAll[$j];
    // // echo $bdName;楼搞定
    // $className=$bdName.$floor.'0'.$roomName;
    // return $className;
    // echo '<br/>';
  

}return $classrooms;
}
echo '<pre>';
// var_dump (CreateClass());

// CreateClass();
function CreateTeacher(){
  $arr=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
  $name='';
  $len=rand(4,6);
  for($i=0;$i<$len;$i++){
    $j=rand(0,sizeof($arr)-1);
    $name.=$arr[$j];
  }
  return $name;
}
// CreateTeacher();教师搞定

//上课准确时间
function Classtime(){
  for($week=0;$week<7;$week++){
    for($dayth=1;$dayth<=5;$dayth++){
      $course="${week}#$dayth";
      $courses[]=$course;
      // echo $course;
    }
  }
   return $courses;
  // $week=rand(1,5);
  // $weekAt=rand(1,5);
  // $Classtime=$week.'#'.$weekAt;
  // return $Classtime;
}
// var_dump (Classtime());
// Classtime();
function all(){
  $classrooms=CreateClass();
  $courses=Classtime();
  foreach($classrooms as $value){
    $classroom=$value;
    foreach($courses as $value){
      $course=$value;
      $classes=$classroom.'at'.$course;
      $class_at[]=$classes;
    }
  }
  return $class_at;
}
//全部教室
// var_dump (all());
?>
