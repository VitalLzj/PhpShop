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
$name = array("aaa", "bbb", "ccc", "ddd");
$smarty->assign("array", $name);
$hero = array(
    array("id" => 1, "name" => "王重阳", "nickname" => "中神通", "weapon" => "浮沉"),
    array("id" => 2, "name" => "一灯大师", "nickname" => "男帝", "weapon" => "一阳指"),
    array("id" => 3, "name" => "洪七公", "nickname" => "北丐", "weapon" => "打狗棒"),
    array("id" => 4, "name" => "黄药师", "nickname" => "东邪", "weapon" => "萧"),
    array("id" => 5, "name" => "欧阳锋", "nickname" => "西毒", "weapon" => "蛇")
);
$smarty->assign("hero", $hero);
//展示数据
$smarty->display('foreach.tpl');