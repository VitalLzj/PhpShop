<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14 0014
 * Time: 下午 3:47
 */
namespace Model;

use \Think\Model;

class GoodsModel extends Model
{
    //自动完成设置 ，给某些值设置默认值
    protected $_auto = array(
        array('add_time', 'time', '1', 'function'),
        array('upd_time', 'time', '1', 'function'),
    );

}