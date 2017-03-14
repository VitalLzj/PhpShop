<?php /* Smarty version Smarty-3.1.16, created on 2017-03-13 15:01:33
         compiled from "templates\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:839658c641a01c58b7-26229898%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e8afc00670ad2864ca1191659a67ead4ae3f1c2' => 
    array (
      0 => 'templates\\modifier.tpl',
      1 => 1489388491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '839658c641a01c58b7-26229898',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58c641a024c3f2_49499271',
  'variables' => 
  array (
    'time' => 0,
    'poem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c641a024c3f2_49499271')) {function content_58c641a024c3f2_49499271($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PhpStudeyLite\\WWW\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'E:\\PhpStudeyLite\\WWW\\smarty\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>变量修饰器</h2>
<p>
    当前时间是：<?php echo $_smarty_tpl->tpl_vars['time']->value;?>

</p>
<p>
    当前时间是：<?php echo smarty_modifier_date_format(time(),'%Y-%m-%d %T');?>

</p>
<p><?php echo $_smarty_tpl->tpl_vars['poem']->value;?>
 截取八位 <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['poem']->value,8);?>
  </p>
</body>
</html><?php }} ?>
