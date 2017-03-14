<?php /* Smarty version Smarty-3.1.16, created on 2017-03-13 12:04:09
         compiled from "templates\if.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2361658c618dfb822b1-18313837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d537cb9adbcf8b54aabe64ec4ea635b6e461f1f' => 
    array (
      0 => 'templates\\if.tpl',
      1 => 1489377847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2361658c618dfb822b1-18313837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58c618dfbf7843_92653106',
  'variables' => 
  array (
    'IQ' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c618dfbf7843_92653106')) {function content_58c618dfbf7843_92653106($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<p>您的IQ为</p><?php echo $_smarty_tpl->tpl_vars['IQ']->value;?>

<p>您适合学习
    <?php if ($_smarty_tpl->tpl_vars['IQ']->value>=100) {?>
        乾坤大挪移
    <?php } else { ?>
        葵花宝典
    <?php }?>
</p>

</body>
</html><?php }} ?>
