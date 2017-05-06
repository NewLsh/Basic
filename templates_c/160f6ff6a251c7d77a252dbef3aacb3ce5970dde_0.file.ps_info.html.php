<?php
/* Smarty version 3.1.30, created on 2017-05-06 17:31:28
  from "E:\apache\htdocs\query\templates\ps_info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d97f00c2380_41829005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '160f6ff6a251c7d77a252dbef3aacb3ce5970dde' => 
    array (
      0 => 'E:\\apache\\htdocs\\query\\templates\\ps_info.html',
      1 => 1494063087,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d97f00c2380_41829005 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>个人中心</title>
   <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="./bootstrap/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="./bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
  <div class="container">
     <div class="col-sm-4 "><a href="#">修改密码</a></div> 
     <div class="col-sm-4 "><a href="teacher.php">返回主页</a></div> 
    <h3>个人信息</h3>
    <table class="table">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
      <tr>
        <td>教职工编号</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
      </tr>
      <tr>
        <td>姓名</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
      </tr>
      <tr>
        <td>性别</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sex'];?>
</td>
      </tr>
      <tr>
        <td>年龄</td>
        <td><?php echo $_smarty_tpl->tpl_vars['val']->value['age'];?>
</td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
  </div>
 
  
</body>
</html>
<?php }
}
