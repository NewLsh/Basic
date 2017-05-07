<?php
/* Smarty version 3.1.30, created on 2017-05-05 21:41:40
  from "E:\mvc\v16\App\Home\View\Student\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c8114962081_49494439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13bdea6a3721a47f8d4d3f84d4dcc9f1e9ab11f1' => 
    array (
      0 => 'E:\\mvc\\v16\\App\\Home\\View\\Student\\add.html',
      1 => 1493987987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c8114962081_49494439 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>添加学生</title>
</head>

<body>
  <form action="addHandle.php" method="post">
    <table border="1" cellpadding="2" cellspacing="0" width="600" align="center" rules="all">
      <tr>
        <td>姓名</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>性别</td>
        <td>
          <input type="radio" name="sex" value="男" checked>男
          <input type="radio" name="sex" value="女">女
        </td>
      </tr>
      <tr>
        <td>年龄</td>
        <td><input type="text" name="age"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="提交">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
<?php }
}
