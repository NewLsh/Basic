<?php
class student{
  // private  $link=null;
  //默认可查询的链接数据库
  private function link($user='root',$pwd='9539',$host='localhost'){
    if($link=mysqli_connect($host,$user,$pwd)){
      return $link;
    }
    die("连接失败");
  }
  //查询函数
  public function getres($sql){
    // var_dump ($link);
    $res=$this->check($sql);
    while($row=$res->fetch_assoc()){
      echo"<tr>";
      echo"<td>{$row['id']}</td>";
      echo"<td>{$row['name']}</td>";
      echo"<td>{$row['size']}</td>";
      echo"</tr>";
    }
    
  }

  //判断查询语句结果
  protected function check($sql){
    $link=$this->link();    
    $res=mysqli_query($link,$sql);
    if($res === false){
      echo "<br/>查询出错,错误信息如下:";
      echo "<br/>错误信息:".$link->error;
      echo "<br/>错误信息:".$link->errno;
      echo "<br/>查询语句:".$sql;
      die();
    }
    return $res;
  }
  public function Rinsert($sql){
    if($res=$this->check($sql)){
      echo "<br/>插入数据成功";
    }
  }
  public function Rchange($sql){
    if($res=$this->check($sql)){
      echo "<br/>修改数据成功";
    }
  }
}
