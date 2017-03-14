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
//设置相关数据
$time = date('Y-m-d H-i-s');
$smarty->assign("time", $time);
$smarty->assign("poem", "一二三四五六七八九十");
//展示数据
$smarty->display('modifier.tpl');