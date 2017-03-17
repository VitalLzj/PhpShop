<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/14 0014
 * Time: 下午 3:47
 */
namespace Model;

use \Think\Model;
use Think\Think;

class GoodsModel extends Model
{
    //自动完成设置 ，给某些值设置默认值
    protected $_auto = array(
        array('add_time', 'time', '1', 'function'),
        array('upd_time', 'time', '1', 'function'),
    );


    /**
     * @param $data 收集的表单信息
     * @param $options 设置的属性
     * 插入数据前的回调方法
     */
    protected function _before_insert(&$data, $options)
    {
        //上传图片处理
        if ($_FILES['goods_big_logo']['error'] === 0) {

            //上传原图
            $cfg = array(
                'rootPath' => './Common/Uploads/', //保存根路径
            );
            $upload = new \Think\Upload($cfg);
            //上传单个文件 $z为上传文件成功后返回的信息
            $z = $upload->uploadOne($_FILES['goods_big_logo']);
            $logo_path = $upload->rootPath . $z['savepath'] . $z['savename'];
            $data['goods_big_logo'] = $logo_path;
            //./Common/Uploads/2017-03-16/58ca447c37192.jpg

            //制作缩略图
            //实例化对象
            $thumb = new \Think\Image();
            //打开原图
            $thumb->open($logo_path);
            //裁剪
            $thumb->thumb(60, 60);
            //缩略图路径
            $thumb_path = $upload->rootPath . $z['savepath'] . 'small_' . $z['savename'];
            //保存到服务器
            $thumb->save($thumb_path);
            //保存到数据库
            $data['goods_big_small'] = $thumb_path;
        }
    }

    // 插入成功后的回调方法
    protected function _after_insert($data, $options)
    {
        //多文件上传
//        $cfg = array(
//            'rootPath' => './Common/Uploads/', //保存根路径
//        );
//        $upload = new \Think\Upload($cfg);
//        $z = $upload->upload(array('good_pics'=>$_FILES['good_pics']));
        //遍历$z即可得到相关信息
    }

    //商品分页
    function fetchData()
    {
        //获取商品总条数
        $total = $this->count();
        //定义每页显示条数
        $per = 5;
        //实例化分页类page对象
        $page = new \Common\Tools\Page($total, $per);
        //获取分页信息
        $pageinfo = $this->order('goods_id desc')->limit($page->offset, $per)->select();
        //获取页码列表信息
        $pagelist = $page->fpage();
        return array(
            'pageinfo' => $pageinfo,
            'pagelist' => $pagelist
        );
    }

    // 更新数据前的回调方法
    protected function _before_update(&$data, $options)
    {
        //上传修改后的图片
        if ($_FILES['goods_big_upd']['error'] === 0) {
            //修改图片前 先删除本地已存在图片
            //先查询本地是否有图片
            $pic_info = $this->field('goods_big_logo,goods_big_small')->find($options['where']['goods_id']);
            if (!empty($pic_info['goods_big_logo']) || !empty($pic_info['goods_big_small'])) {
                //删除本地图片
                unlink($pic_info['goods_big_logo']);
                unlink($pic_info['goods_big_small']);
            }
            //上传原图
            $cfg = array(
                'rootPath' => './Common/Uploads/', //保存根路径
            );
            $upload = new \Think\Upload($cfg);
            //上传单个文件 $z为上传文件成功后返回的信息
            $z = $upload->uploadOne($_FILES['goods_big_upd']);
            $logo_path = $upload->rootPath . $z['savepath'] . $z['savename'];
            $data['goods_big_logo'] = $logo_path;
            //./Common/Uploads/2017-03-16/58ca447c37192.jpg

            //制作缩略图
            //实例化对象
            $thumb = new \Think\Image();
            //打开原图
            $thumb->open($logo_path);
            //裁剪
            $thumb->thumb(60, 60);
            //缩略图路径
            $thumb_path = $upload->rootPath . $z['savepath'] . 'small_' . $z['savename'];
            //保存到服务器
            $thumb->save($thumb_path);
            //保存到数据库
            $data['goods_big_small'] = $thumb_path;
        }
    }

    // 更新成功后的回调方法
    protected function _after_update($data, $options)
    {
    }


}