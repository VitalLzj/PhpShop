<?php /* Smarty version Smarty-3.1.16, created on 2017-03-13 14:44:07
         compiled from "templates\section.tpl" */ ?>
<?php /*%%SmartyHeaderCode:515358c63e4a5cadb2-80899061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1166302c05eff4d5393ac973d17aca9105a2e86' => 
    array (
      0 => 'templates\\section.tpl',
      1 => 1489387380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '515358c63e4a5cadb2-80899061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_58c63e4a814bb4_42082160',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58c63e4a814bb4_42082160')) {function content_58c63e4a814bb4_42082160($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h2>Section</h2>

<ul>
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['item'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['item']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['name'] = 'item';
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['item']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['item']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['item']['total']);
?>
        <li><?php echo $_smarty_tpl->tpl_vars['arr']->value[$_smarty_tpl->getVariable('smarty')->value['section']['item']['index']];?>
</li>
    <?php endfor; endif; ?>
</ul>

</body>
</html><?php }} ?>
