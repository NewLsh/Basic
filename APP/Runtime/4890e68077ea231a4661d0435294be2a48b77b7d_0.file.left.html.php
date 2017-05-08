<?php
/* Smarty version 3.1.30, created on 2017-05-08 15:43:55
  from "E:\blog\App\Admin\View\left.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591021bbbc0949_01655459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4890e68077ea231a4661d0435294be2a48b77b7d' => 
    array (
      0 => 'E:\\blog\\App\\Admin\\View\\left.html',
      1 => 1494228988,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591021bbbc0949_01655459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar-wrap">
  <div class="sidebar-title">
    <h1>菜单</h1>
  </div>
  <div class="sidebar-content">
    <ul class="sidebar-list">
      <li>
        <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
        <ul class="sub-menu">
          <li><a href="?m=Admin&c=Category"><i class="icon-font">&#xe008;</i>分类管理</a></li>
          <li><a href="?m=Admin&c=Article&a=showArt"><i class="icon-font">&#xe005;</i>博文管理</a></li>
          <li><a href="?m=Admin"><i class="icon-font">&#xe012;</i>评论管理</a></li>
          <li><a href="?m=Admin"><i class="icon-font">&#xe052;</i>友情链接</a></li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
        <ul class="sub-menu">
          <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
          <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
          <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<?php }
}
