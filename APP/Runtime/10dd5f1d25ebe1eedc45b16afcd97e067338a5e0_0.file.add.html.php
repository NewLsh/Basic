<?php
/* Smarty version 3.1.30, created on 2017-05-08 16:37:18
  from "E:\blog\App\Admin\View\Article\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59102e3ec1c7c8_79588522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '10dd5f1d25ebe1eedc45b16afcd97e067338a5e0' => 
    array (
      0 => 'E:\\blog\\App\\Admin\\View\\Article\\add.html',
      1 => 1494232637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/left.html' => 1,
  ),
),false)) {
function content_59102e3ec1c7c8_79588522 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="./Public/Admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="./Public/Admin/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="./Public/Admin/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="../../../web/home/js/jquery1.42.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        window.onload = function () {
            var myfm = document.getElementById('myfm');
            myfm.onsubmit = document.querySelector('select');
            if (myfm == '') {
                alert('请选择类别');
                return false;
            }
        }

    <?php echo '</script'; ?>
>
</head>
<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    
    <!--左侧菜单栏-->
    
    <!--左侧菜单栏 begin-->
     <?php $_smarty_tpl->_subTemplateRender("file:../Public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="?m=Admin&c=Article&a=addHandle" method="post" id="myfm" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>所属分类</th>
                                <td>
                                   <select name="category_id">
                                       <option value="">请选择</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                       <option value=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                   </select>
                                   <i class="require-red">必选</i>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" name="author" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>发布时间：</th>
                                <td>
                                    <input class="common-text required" name="ptime" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>排序：</th>
                                <td>
                                    <input class="common-text required" name="order" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea name="content" class="common-textarea" cols="100" rows="20"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>

</html>
<?php }
}
