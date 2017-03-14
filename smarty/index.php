<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/13 0013
 * Time: 上午 10:29
 */

//引入smarty
include "./libs/Smarty.class.php";
//实例化smarty
$smarty = new Smarty();
//配置smarty
$smarty->template_dir = "templates/";//模板目录
$smarty->compile_dir = "templates_c";//编译目录
//修改定界符
$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";
//设置相关数据
$smarty->assign("title", "Smarty");
$smarty->assign("content", "Smarty_Content");
//展示数据
$smarty->display('index.html');