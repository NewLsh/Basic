<?php
/* Smarty version 3.1.30, created on 2017-05-06 17:22:18
  from "E:\apache\htdocs\query\templates\teacher.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d95ca23bbd0_85793836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca149a1f3767426b995a4e6b89d406ebd7e24a27' => 
    array (
      0 => 'E:\\apache\\htdocs\\query\\templates\\teacher.html',
      1 => 1494062467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d95ca23bbd0_85793836 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en"
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>教师用户</title>
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
  <div class="text-right">
    <a href="ps_info.php">个人中心</a>
    <span>你好,<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&nbsp&nbsp</span>
    <a href="index.php">安全退出</a>
  </div>
  <h4>本周的课程如下</h4>
  <table class="table table-hover">
  <tr>
    <td>课程名称</td>
    <td>授课地点</td>
    <td>上课班级</td>
    <td>操作</td>
  </tr>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['room'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['class_name'];?>
</td>
      <td><a href="change.html?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['roomid'];?>
">调课</a> | <a href="update.html?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['roomid'];?>
">编辑</a></td>
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
