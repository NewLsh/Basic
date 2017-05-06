<?php
/* Smarty version 3.1.30, created on 2017-05-06 13:56:00
  from "E:\apache\htdocs\query\templates\result.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590d6570455b56_47136990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd285e71e059d81439913d36d98441e20b75f12b7' => 
    array (
      0 => 'E:\\apache\\htdocs\\query\\templates\\result.html',
      1 => 1494050160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590d6570455b56_47136990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>查询空余教室</title>
  <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
  <?php echo '<script'; ?>
 src="./bootstrap/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="./bootstrap/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

  <nav class="col-lg-10 text-center">
    <h2>你好</h2>
  </nav>
  <div class="col-lg-2">
    <h4>教师用户? <a href="SignIn.html">立即登陆</a> </h4>
  </div>
  <div>
    <h2 class="text-center col-sm-12">欢迎使用空教室查询系统</h2>
  </div>
  <div class="container">
    <form action="result.php" method="post" mutify enctype="multipart/form-data">
      <div class="col-sm-3 from-group">
        <label for="">选择日期</label>
        <input type="date" class="btn" name="date"></div>
      <div class="col-sm-3 form-group">
        <label for="" class="">选择楼层</label>

        <select name="floor" id="" class='btn' data-toggle="dropdown">
			
			<option value="0">全部</option>
			<option value=1>勤政楼</option>
			<option value="2">计科楼</option>
			<option value="3">物理南楼</option>
			<option value="4">化学北楼</option>
		</select>
      </div>
      <div class="col-sm-3 form-group">
        <label for="" class="">选择课时</label>

        <select name="course" id="" class='btn' data-toggle="dropdown">
			
			<option value="1">早上一二节</option>
			<option value="2">早上三四节</option>
			<option value="3">第三课时</option>
			<option value="4">第四课时</option>
			<option value="5">第五课时</option>
		</select>
      </div>

      <div class="col-sm-2 form-group"><input type="submit" name="submit" value="查询" class="btn btn-success btn-block "></div>
      <div class="col-sm-1 form-group"> <input type="reset" value="重置" class="btn btn-info btn-block"></div>



    </form>
    <table class="table table-striped">  
      <tr>
        <td>教室ID</td>
        <td>教室名称</td>
        <td>教室规模</td>
        <td>操作</td>
      </tr>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
</td>          
          <td>无</td>
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
