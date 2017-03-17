<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

    <title>会员列表</title>

    <link href="<?php echo (C("BACK_CSS_URL")); ?>mine.css" type="text/css" rel="stylesheet"/>
    <script type="text/javascript" src="<?php echo (C("COMMON_URL")); ?>Js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?php echo (C("LAYER_URL")); ?>layer.js"></script>

</head>
<body>
<style>
    .tr_color {
        background-color: #9F88FF
    }
</style>
<div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="/shop/index.php/Back/Goods/addGood">【添加商品】</a>
                </span>
            </span>
</div>
<div></div>
<div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit"/>
                </form>
            </span>
</div>
<div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody>
        <tr style="font-weight: bold;">
            <td>序号</td>
            <td>商品名称</td>
            <!--<td>库存</td>-->
            <td>价格</td>
            <td>描述</td>
            <!--<td>图片</td>-->
            <!--<td>缩略图</td>-->
            <!--<td>品牌</td>-->
            <td>商品图片</td>
            <td align="center">操作</td>
        </tr>
        <?php if(is_array($info)): foreach($info as $key=>$v): ?><tr id="product<?php echo ($v["goods_id"]); ?>">
                <td><?php echo ($v["goods_id"]); ?></td>
                <td><a href="#"><?php echo ($v["goods_name"]); ?></a></td>
                <td><?php echo ($v["goods_price"]); ?></td>
                <td><?php echo (htmlspecialchars_decode($v["goods_introduce"])); ?></td>
                <td><img src="<?php echo (C("SHOP_URL")); echo ($v["goods_big_small"]); ?>" alt="暂无图片"/></td>
                <td><a href="/shop/index.php/Back/Goods/updateGood/goods_id/<?php echo ($v["goods_id"]); ?>">修改</a></td>
                <td><a onclick="delete_good(<?php echo ($v["goods_id"]); ?>)" style="cursor: pointer">删除</a></td>
            </tr><?php endforeach; endif; ?>
        <script type="text/javascript">
            function delete_good(good_id) {

                layer.confirm('您真的要删除么？', {
                    btn: ['确定', '取消'] //按钮
                }, function () {
                    $.ajax(
                        {
                            url: "<?php echo U('delGood');?>",
                            data: {'goods_id': good_id},
                            type: "get",
                            success: function (msg) {
                                $('#product' + good_id).remove();
                                layer.msg('删除成功', {icon: 1});
                            }
                        }
                    );
                });

            }
        </script>
        <!--<tr id="product2">-->
        <!--<td>2</td>-->
        <!--<td><a href="#">苹果（APPLE）iPhone 4</a></td>-->
        <!--<td>100</td>-->
        <!--<td>3100</td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174248-28718.jpg" height="60" width="60"></td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174248-87501.jpg" height="40" width="40"></td>-->
        <!--<td>苹果apple</td>-->
        <!--<td>2012-10-18 17:42:48</td>-->
        <!--<td><a href="/shop/index.php/Back/Goods/updateGood">修改</a></td>-->
        <!--<td><a href="javascript:;" onclick="delete_product(2)">删除</a></td>-->
        <!--</tr>-->
        <!--<tr id="product3">-->
        <!--<td>3</td>-->
        <!--<td><a href="#">苹果（APPLE）iPhone 4 8G版</a></td>-->
        <!--<td>100</td>-->
        <!--<td>1290</td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174346-31424.jpg" height="60" width="60"></td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174346-54660.jpg" height="40" width="40"></td>-->
        <!--<td>苹果apple</td>-->
        <!--<td>2012-10-18 17:43:46</td>-->
        <!--<td><a href="/shop/index.php/Back/Goods/updateGood">修改</a></td>-->
        <!--<td><a href="javascript:;" onclick="delete_product(3)">删除</a></td>-->
        <!--</tr>-->
        <!--<tr id="product4">-->
        <!--<td>4</td>-->
        <!--<td><a href="#">苹果（APPLE）iPhone 4S 16G版</a></td>-->
        <!--<td>100</td>-->
        <!--<td>987</td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174455-91962.jpg" height="60" width="60"></td>-->
        <!--<td><img src="<?php echo (C("BACK_IMG_URL")); ?>20121018-174455-10118.jpg" height="40" width="40"></td>-->
        <!--<td>苹果apple</td>-->
        <!--<td>2012-10-18 17:44:30</td>-->
        <!--<td><a href="/shop/index.php/Back/Goods/updateGood" >修改</a></td>-->
        <!--<td><a href="#" >删除</a></td>-->
        <!--</tr>-->
        <tr>
            <td colspan="20" style="text-align: center;">
                <?php echo ($pagelist); ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>