<?php

class Verify{
  public static function yzm(){
    //header
    header('content-type:image/png');
    //创建一个图片
    $yzm;
    $font_siz=48;
    $img_l=200;
    $img_h=70;
    $img=imagecreatetruecolor($img_l,$img_h);

    //处理图像
    //添加背景颜色
    $bgcolor =imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    $ttfcolor =imagecolorallocate($img,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    imagefill($img,0,0,$bgcolor);
    //像图片上写string 
    //验证码字符串
    $b_str='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    for($i=0;$i<4;$i++){
      $l=$img_l/5;
      //水平位置
      $a=$l*$i;#+$font_siz;
      $b=$l*($i+1);
      $str=str_shuffle($b_str)[1];
      $yzm.=$str;
      imagettftext($img,$font_siz,mt_rand(-30,30),mt_rand($a,$b),mt_rand(50,60),$ttfcolor, CORE_DIR.'Deng.ttf',$str);
    }
    // var_dump($yzm);
    $_SESSION['yzm']=$yzm;
   
    
    //imagestring($img,5,10,0,'a',$ttfcolor);
    // imagettftext($img,30,mt_rand(0,30),mt_rand(0,20),mt_rand(50,70),$ttfcolor, CORE_DIR.'Deng.ttf',$str);
    // imagettftext($img,30,mt_rand(0,30),mt_rand(50,80),mt_rand(50,70),$ttfcolor, CORE_DIR.'Deng.ttf',$str);
    // imagettftext($img,30,mt_rand(0,30),mt_rand(100,130),mt_rand(40,70),$ttfcolor, CORE_DIR.'Deng.ttf',$str);
    // imagettftext($img,30,mt_rand(0,30),mt_rand(150,180),mt_rand(50,70),$ttfcolor, CORE_DIR.'Deng.ttf',$str);


    //清空缓存
    ob_clean();
    //输出图像
    imagepng($img);
    //销毁资源
    imagedestroy($img);
  }
}
