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
$beauty = array(
    1 => "王昭君",
    2 => "杨玉环",
    3 => "西施",
    4 => "貂蝉");
$smarty->assign("beauty", $beauty);
//展示数据
$smarty->display('radio.tpl');