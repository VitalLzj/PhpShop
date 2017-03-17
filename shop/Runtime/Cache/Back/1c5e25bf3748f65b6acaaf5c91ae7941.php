<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>修改商品</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8">
    <link href="<?php echo (C("BACK_CSS_URL")); ?>mine.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo (C("PLUGIN_URL")); ?>/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" charset="utf-8"
            src="<?php echo (C("PLUGIN_URL")); ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>

<div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》修改商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="/shop/index.php/Back/Goods/showGoods">【返回】</a>
                </span>
            </span>
</div>
<div></div>

<div style="font-size: 13px;margin: 10px 5px">
    <form action="/shop/index.php/Back/Goods/updateGood/goods_id/10" method="post" enctype="multipart/form-data">
        <table border="1" width="100%" class="table_a">
            <!-- 传入id 方便保存-->
            <input type="hidden" name="goods_id" value="<?php echo ($goods_info["goods_id"]); ?>"/>
            <tr>
                <td>商品名称</td>
                <td><input type="text" name="goods_name" value="<?php echo ($goods_info["goods_name"]); ?>"/></td>
            </tr>
            <tr>
                <td>商品价格</td>
                <td><input type="text" name="goods_price" value="<?php echo ($goods_info["goods_price"]); ?>"/></td>
            </tr>
            <tr>
                <td>商品图片</td>
                <td>
                    <notempty name="<?php echo ($goods_info["goods_big_small"]); ?>">
                        <img src="<?php echo (C("SHOP_URL")); echo ($goods_info["goods_big_small"]); ?>" alt="图片"/>
                        <notempty>
                            <input type="file" name="goods_big_upd"/>
                </td>
            </tr>
            <tr>
                <td>商品详细描述</td>
                <td>
                    <textarea name="goods_introduce" id="goods_introduce"
                              style="width: 730px;height: 380px; "> <?php echo ($goods_info["goods_introduce"]); ?></textarea>
                </td>
            </tr>
            <script type="text/javascript">
                var ue = UE.getEditor('goods_introduce');
            </script>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="确认修改">
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>