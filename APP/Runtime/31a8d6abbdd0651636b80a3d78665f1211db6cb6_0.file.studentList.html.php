<?php
/* Smarty version 3.1.30, created on 2017-05-05 21:30:58
  from "E:\mvc\v16\App\Home\View\Student\studentList.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c7e92c0be01_84638936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31a8d6abbdd0651636b80a3d78665f1211db6cb6' => 
    array (
      0 => 'E:\\mvc\\v16\\App\\Home\\View\\Student\\studentList.html',
      1 => 1493991057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c7e92c0be01_84638936 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>学生列表</title>
</head>

<body>
  <h2 align="center">学生列表</h2>
  <table border="1" cellspacing="0" cellpadding="2" rules="all" width='90%' align="center">
    <tr>
      <th>ID</th>
      <th>姓名</th>
      <th>性别</th>
      <th>年龄</th>
      <th>学历</th>
      <th>城市</th>
      <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sex'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['age'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['edu'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['val']->value['city'];?>
</td>
      <td>
        <a href="index.php?c=Student&a=studentDel&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">删除</a>
      </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </table>
  <table border="1" cellspacing="0" cellpadding="2" rules="all" width='90%' align="center">
    <tr>
      <td>
        总计
        <?php echo '<?php ';?>//echo $count;<?php echo '?>';?>个学生
      </td>
    </tr>
  </table>
</body>

</html>
<?php }
}
