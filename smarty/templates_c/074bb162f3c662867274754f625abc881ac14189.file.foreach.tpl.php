<?php /* Smarty version Smarty-3.1.16, created on 2017-03-13 14:25:40
         compiled from "templates\foreach.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2187258c634531e8469-94721641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '074bb162f3c662867274754f625abc881ac14189' => 
    array (
      0 => 'templates\\foreach.tpl',
      1 => 1489386311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2187258c634531e8469-94721641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58c634532f5e56_17381183',
  'variables' => 
  array (
    'array' => 0,
    'key' => 0,
    'value' => 0,
    'hero' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c634532f5e56_17381183')) {function content_58c634532f5e56_17381183($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h2>Foreach遍历</h2>
<ul>
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
===<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</li>
    <?php } ?>
</ul>
<h2>Foreach二维数组遍历</h2>
<table width="600px" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>nickname</th>
        <th>weapon</th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hero']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
?>
        <tr <?php if ($_smarty_tpl->tpl_vars['value']->first) {?>class="first"<?php }?>>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['nickname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['weapon'];?>
</td>
        </tr>
    <?php } ?>

</table>
</body>
</html><?php }} ?>
