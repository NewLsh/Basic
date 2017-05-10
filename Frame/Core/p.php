<?php
// include_once 'DB.class.php';
class student extends DB{
  protected $pdo=null;
  public function __construct(){
    $db= DB::getDB();
    $this->pdo=$db->pdo;
  }
  public function run(){
    $post=$_POST;
    $this->check($post);
    $deal=$this->deal($post);
    // var_dump($deal);
    $sql="select * from empty{$deal['weekth']} where name regexp '{$deal['reg']}' ";
    // echo $sql;
    return $this->select($sql);  
  }
  public function select($sql){
    try{     
    $stmt=$this->pdo->prepare($sql);
    $stmt->execute();
    $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
    }catch(PDOException $e){
      $this->getERR($e);
    } 
  }
  protected function deal($post){
     // 计算当前第几周
    static $s_start="2017-02-04";
    //开学时间转化为秒数,取天数
    $scday=date('z',strtotime($s_start));
    //传入的时间转化为秒数,去天数    
    $today=date('z',strtotime($post['date']));
    //向上取整为所选周数
    $weekth=ceil(($today-$scday)/7);
    // $weekth='empty'.$weekth;
    /********************/
    //获得楼的名字
    switch($_POST['floor']){
      case 0:
        $floor="";break;
      case 1:
        $floor="勤政楼";break;
      case 2:
        $floor="计科楼";break;
      case 3:
        $floor="物理南楼";break;
      case 4:
        $floor="化学北楼";break;
    }
    //查询的日期为周几
    $week=date('w',strtotime($post['date']));
    //生成rege_POSTxp语句
    $reg="$floor".'.*'.$week.'#'.$post['course'];
    //返回数组
    return array('weekth'=>$weekth,'reg'=>$reg);
  }
  protected function getERR($e){
    echo "<br>错误信息:",$e->getMessage();
    echo "<br>错误代码:",$e->getCode();
    echo "<br>错误文件:",$e->getFile();
    echo "<br>错误行数:",$e->getLine();
  }
  protected function check($post){
    if(!empty($post['date'])){
      $s=date('d',strtotime($post['date']));
      $t=date('d',time());
      if($s<=$t){
        echo "<script>alert('选择合理的日期');location.href='index.html';</script>";
      }
    }else{
        echo "<script>alert('日期不能为空');location.href='index.html';</script>";
    }
  }
}
/**
 * @param=a
 * teacher
 */
class teacher extends student{
  public function run(){
    $post=$_POST;
    $sql="select name,pwd from teachers where id = $post[userid]";
    $this->sign($sql,$post);
    $weekth=$this->getweek();
    $sql="select name,room,class_name,roomid from week{$weekth} where teacherid={$_COOKIE['userid']}";
    return $this->select($sql);
  }
  public function sign($sql,$post){
    try{
      if(!$post['userid'] or !$post['userpwd']){
         echo"<script>alert('用户名或密码不能为空!');location.href='signin.html'</script>";
      }
      $stmt=$this->pdo->query($sql);
      $row=$stmt->fetch(PDO::FETCH_ASSOC);
      // var_dump($row);
      if($row['pwd']==$post['userpwd']){
         echo"<script>alert('登陆成功');</script>";     
        setcookie('userid',$post['userid'],time()+64800);
        setcookie('username',$row['name'],time()+64800);
       
      }else{
      echo"<script>alert('用户名或密码错误');location.href='SignIn.html'</script>";
      } 
      // var_dump($row);
    }catch (PDOException $e){
      $this->getERR($e);
    }
    
  }
  public function show(){
    $sql="select * from teachers where id={$_COOKIE['userid']}";
    return $this->select($sql);
  }
  public function Rowcount($data){
    $count=0;
  }
  public function getweek(){  
    static $s_start="2017-02-04";
    $scday=date('z',strtotime($s_start));   $today=date('z',time());
    $weekth=ceil(($today-$scday)/7);
    return $weekth;
  }
}
