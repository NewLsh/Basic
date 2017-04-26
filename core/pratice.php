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
  public function Rprint($sql){
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
  public function Rupdate($sql){
    if($res=$this->check($sql)){
      echo "<br/>修改数据成功";
    }
  }
  public function Rchange(){
    
  }
}
final class Teacher{
  // protected
  // protected 
  function link($user='root',$pwd='9539'){
    try{
    $link=new PDO('mysql:host=localhost;dbname=query',$user,$pwd,array(PDO::ATTR_PERSISTENT=>TRUE));
    }catch (PDOException $e) {
      print "Error!:".$e->getMessage().'<br/>';
      die();
    }
    return $link;
  }
  public function insert($sql){
    $dbh=$this->link();
    try{
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $res=$dbh->exec($sql);
      if(!$res){
        throw new PDOException('查询失败');
        }
    }catch (PDOException $e){
      print "Error!:". $e->getMessage() .'<br/>';
    
      echo "Error!:".$e->getCode().'<br/>';

      // var_dump($e->getTrace());
      die();
    }
    // return $res;
  }
  public function change($sql){
    try{
      $dbh=$this->link();
      $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      $dbh->beginTransaction();
      $sta=$dbh->exec($sql);
      if(!$sta){
        throw new PDOException('查询失败');
      }
      $sta=$dbh->$sql;
      if(!$sta){
        throw new PDOException('查询失败');
      }
      $dbh->commit();
      
    }catch (PDOException $e){
      $dbh->rollback();
      print "Error!:". $e->getMessage() .'<br/>';
    
      echo "Error!:".$e->getCode().'<br/>';

      // var_dump($e->getTrace());
      die();
    }
  }



}

//杂乱的功能
class mess{
  static $s_start="2017-02-04";
  // protected
   function weekth($date){
    // 计算当前第几周
    //开学时间转化为秒数,取天数
    $scday=date('z',strtotime(self::$s_start));
    //传入的时间转化为秒数,去天数
    $today=date('z',strtotime($date));
    //向上取整为所选周数
    $weekth=ceil(($today-$scday)/7);
    // echo "$scday,$today,$weekth";
    //返回周数
    return $weekth;
  }
  //
  function reg($floor){
    switch($floor){
      case 1:
        $floor="";break;
    }
    $week=date('w',$date);
    $reg="$floor".'.*'.$week.'#'.$th
    
  }
}





