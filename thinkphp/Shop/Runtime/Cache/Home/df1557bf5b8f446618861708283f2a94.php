<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="Generator" content="YONGDA v1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />

        <title>我的购物车</title>
        <script src="https://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
        <link href="<?php echo (CSS_PATH); ?>style.css" rel="stylesheet" type="text/css" />
        <style type="text/css">
            table {border:1px solid #dddddd; border-collapse: collapse; width:99%; margin:auto;}
            td {border:1px solid #dddddd;}
            #consignee_addr {width:450px;}
        </style>

    </head>
    <body>

        <div class="block clearfix" style="position: relative; height: 98px;">
            <a href="<?php echo U('index/index');?>" name="top"><img class="logo" src="<?php echo (IMG_PATH); ?>logo.gif" /></a>
            <div id="topNav" class="clearfix">
                <div style="float: left;"> 
                    <font class="f4_b"><?php echo ($_SESSION['user_name']); ?></font>, 欢迎您回来！
                    <a href=" <?php echo U('user/ucenter');?>">用户中心</a>
                    <a href="#">退出</a>
                    </font>
                </div>
                <div style="float: right;">
                    <a href="/thinkphp/index.php/Home/user/cart">查看购物车</a>
                    |
                    <a href="#">选购中心</a>
                    |
                    <a href="#">标签云</a>
                    |
                    <a href="#">报价单</a>


                </div>
            </div>

            <div id="mainNav" class="clearfix">
                <a href="<?php echo U('index/index');?>" class="cur">首页<span></span></a>
                <a href="<?php echo U('goods/index');?>">GSM手机<span></span></a>
                <a href="#">双模手机<span></span></a>
                <a href="#">手机配件<span></span></a>
                <a href="#">优惠活动<span></span></a>
                <a href="#">留言板<span></span></a>
            </div>
        </div>


        <div class="header_bg">

            <div style="float: left; font-size: 14px; color:white; padding-left: 15px;">
            </div>  

            <form id="searchForm" method="get" action="#">
                <input name="keywords" id="keyword" type="text" />
                <input name="imageField" value=" " class="go" style="cursor: pointer; background: url('<?php echo (IMG_PATH); ?>sousuo.gif') no-repeat scroll 0% 0% transparent; width: 39px; height: 20px; border: medium none; float: left; margin-right: 15px; vertical-align: middle;" type="submit" />

            </form>
        </div>
        <div class="blank5"></div>

        <div class="header_bg_b">
            <div class="f_l" style="padding-left: 10px;">
                <img src="<?php echo (IMG_PATH); ?>biao6.gif" />
                北京市区，现在下单(截至次日00:30已出库)，<b>明天上午(9-14点)</b>送达 <b>免运费火热进行中！</b>
            </div>

            <div class="f_r" style="padding-right: 10px;">
                <img style="vertical-align: middle;" src="<?php echo (IMG_PATH); ?>biao3.gif" />

                <span class="cart" id="ECS_CARTINFO">
                    <a href="#" title="查看购物车">您的购物车中有 1 件商品，总计金额 ￥2000.00元。</a></span>
                <a href="#"><img style="vertical-align: middle;" src="<?php echo (IMG_PATH); ?>biao7.gif" /></a>
            </div>
        </div>

        <div class="block box">
            <div class="blank"></div>
            <div id="ur_here">
                当前位置: <a href="<?php echo U('index/index');?>">首页</a> <code>&gt;</code> 购物流程
            </div>
        </div>
        <div class="blank"></div>
        <div class="blank"></div>
        <div class="block">
            <div class="flowBox">
                <h6><span>商品列表</span></h6>
                <form id="formCart">
                    <table cellpadding="5" cellspacing="1" id="tables" text-align="center">
                        <tbody><tr>
                                <th>商品名称</th>
                                <th>属性</th>
                                <th>市场价</th>
                                <th>本店价</th>
                                <th>购买数量</th>
                                <th>小计</th>
                                <th>操作</th>
                            </tr>
                            <?php $m = $num; ?>
                            <?php if(is_array($cart_info)): foreach($cart_info as $key=>$vo): ?><tr>
                                    <td align="center">
                                        <a href="#" target="_blank"><img style="width: 80px; height: 80px;" src="<?php echo (UPLOADS_IMG_PATH); echo ($vo["goods_small_img"]); ?>" title="<?php echo ($vo["goods_name"]); ?>" /></a><br />
                                        <a href="#" target="_blank" class="f6"><?php echo ($vo["goods_name"]); ?></a>
                                    </td>
                                    <td>颜色:灰色 <br />
                                    </td>
                                    <td align="right">￥2400.00元</td>
                                    <td align="right">￥<?php echo ($vo["goods_price"]); ?>元</td>
                                    <td align="right" style="text-align: center;">
                                        <span id="span1" style="cursor:pointer;background:#dddddd;height:20px;width:20px;display: inline-block;margin-right:5px;">- </span><input name="goods_num" id="goods_num" value="<?php echo ($vo["c_num"]); ?>" size="4" class="inputBg" style="text-align: center;" type="text" /><span id="span2" style="cursor:pointer;background:#dddddd;height:20px;width:20px;display: inline-block;margin-left:5px;"> +</span>
                                    </td>
                                    <td align="right" style="color: #f40;font-weight: 700;font-family: Verdana,Tahoma,arial;">￥<?php echo ($vo['c_num'] * $vo['goods_price']); ?></td>
                                    <td align="center">
                                        <a href="/thinkphp/index.php/Home/User/cartdele/cid/<?php echo ($vo["c_id"]); ?>" class="f6">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; ?>
                            <script type="text/javascript">
                                $(function () {
//***********************************************************当点击减号(-)时的动作*******************************************************************************
                                    var a = 0;
                                    //1.选中所有span标签里面id=span1的元素; 
                                    //2.遍历当前获取到的元素, 
                                    //3.当点击当前span标签时 将当前元素下一个相邻的同级元素的值-1
                                    $("span").filter("#span1").click(function () {
                                        var down = $(this).next().val();
                                        if (down <= 1) {
                                            down = 1;
                                            $(this).hide();//当点击减号按钮,数值小于等于1时,隐藏减号按钮
                                        } else {
                                            //html()方法是用来juery中获取元素中内容  等同与js中的 innerHTML
                                            //text()方法是用来juery中获取元素中内容  等同与js中的 innerText
                                            //获取当前元素的父级元素的上一个元素
                                            $(this).next().val(--down);
                                            var crrutnum = $(this).next().val();//当前商品总数
                                            var price = $(this).parent().prev().text();//获取单价
                                            //将获取到的字符串分割处理 获取到当前循环的商品单价
                                            var price = price.replace(/￥/, "");
                                            var price = price.replace(/元/, "");
                                            var smprice = price * crrutnum;//计算数量的小计
                                            var str = "￥" + smprice;//拼接字符串
                                            $(this).parent().next().text(str);//将得到的新值更新到对应的元素中
                                        }
                                    });
//***********************************************************当点击加号(+)时的动作*******************************************************************************                                   
                                    //1.选中所有span标签里面id=span2的元素; 
                                    //2.遍历当前获取到的元素; 
                                    //3.当点击当前span标签时 将当前元素上一个相邻的同级元素的值+1
                                    $("span").filter("#span2").click(function () {
                                        var up = $(this).prev().val();
                                        $(this).prev().val(++up);
                                        var crrutnum = $(this).prev().val();
                                        //获取当前元素的父级元素的上一个元素中的内容
                                        var price = $(this).parent().prev().text();
                                        //将获取到的字符串分割处理 获取到当前循环的商品单价
                                        var price = price.replace(/￥/, "");
                                        var price = price.replace(/元/, "");
                                        var smprice = price * crrutnum;
                                        var str = "￥" + smprice;
                                        $(this).parent().next().text(str);
                                        //当点击加号时让减号键显示出来
                                        $(this).prev().prev().show();
                                    });
//***********************************************************当直接修改商品数量时的动作*******************************************************************************

                                    //1.获取input标签中id为goods_num的元素; 当前的改变是 则获取改变后的值
                                    $("input").filter("#goods_num").change(function () {
                                        var crrutnum = $(this).val();
                                        if (isNaN(crrutnum) || crrutnum <= 1) {
                                            $(this).val(1);
                                            $(this).prev().hide();//当改变数量小于等于1时减号按钮隐藏
                                        } else {
                                            $(this).val(crrutnum);
                                            var crrutnum = $(this).val();//获取当前商品总数
                                            var price = $(this).parent().prev().text();//获取单价
                                            //将获取到的字符串分割处理 获取到当前循环的商品单价
                                            var price = price.replace(/￥/, "");
                                            var price = price.replace(/元/, "");
                                            var smprice = price * crrutnum;//计算数量的小计
                                            var str = "￥" + smprice;//拼接字符串
                                            $(this).parent().next().text(str);//将得到的新值更新到对应的元素中
                                            $(this).prev().show();//当改变数量大于1时显示减号按钮
                                        }
                                    });
                                });
                            </script>

                        </tbody></table>
                    <table cellpadding="5" cellspacing="1">
                        <tbody><tr>
                                <td>
                                    购物金额小计 ￥<?php echo ($price_sum); ?>元，比市场价 ￥2400.00元 节省了 ￥400.00元 (17%)              </td>
                                <td align="right">
                                    <input value="清空购物车" class="bnt_blue_1"  type="button" />
                                    <input name="submit" class="bnt_blue_1" value="更新购物车" type="submit" />
                                </td>
                            </tr>
                        </tbody></table>
                    <input name="step" value="update_cart" type="hidden" />

                </form>



                <table cellpadding="5" cellspacing="0" width="99%">
                    <tbody><tr>
                            <td><a href="<?php echo U('index/index');?>"><img src="<?php echo (IMG_PATH); ?>continue.gif" alt="continue" /></a></td>
                            <td align="right"><a href="/thinkphp/index.php/Home/User/auction/goodsid/<?php echo ($vo["goods_id"]); ?>"><img src="<?php echo (IMG_PATH); ?>checkout.gif" alt="checkout" /></a></td>
                        </tr>
                    </tbody></table>
            </div>
            <div class="blank"></div>
            <div class="blank5"></div>
        </div>

        <div class="blank"></div>
        <div class="block">

            <a href="#" target="_blank" title="YONGDA商城"><img alt="YONGDA商城" src="<?php echo (IMG_PATH); ?>di.jpg" /></a>

            <div class="blank"></div>
        </div>

        <div class="block">
            <div class="box">
                <div class="helpTitBg" style="clear: both;">
                    <dl>
                        <dt><a href="#" title="新手上路 ">新手上路 </a></dt>
                        <dd><a href="#" title="售后流程">售后流程</a></dd>
                        <dd><a href="#" title="购物流程">购物流程</a></dd>
                        <dd><a href="#" title="订购方式">订购方式</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="手机常识 ">手机常识 </a></dt>
                        <dd><a href="#" title="如何分辨原装电池">如何分辨原装电池</a></dd>
                        <dd><a href="#" title="如何分辨水货手机 ">如何分辨水货手机</a></dd>
                        <dd><a href="#" title="如何享受全国联保">如何享受全国联保</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="配送与支付 ">配送与支付 </a></dt>
                        <dd><a href="#" title="货到付款区域">货到付款区域</a></dd>
                        <dd><a href="#" title="配送支付智能查询 ">配送支付智能查询</a></dd>
                        <dd><a href="#" title="支付方式说明">支付方式说明</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="会员中心">会员中心</a></dt>
                        <dd><a href="#" title="资金管理">资金管理</a></dd>
                        <dd><a href="#" title="我的收藏">我的收藏</a></dd>
                        <dd><a href="#" title="我的订单">我的订单</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="服务保证 ">服务保证 </a></dt>
                        <dd><a href="#" title="退换货原则">退换货原则</a></dd>
                        <dd><a href="#" title="售后服务保证 ">售后服务保证</a></dd>
                        <dd><a href="#" title="产品质量保证 ">产品质量保证</a></dd>
                    </dl>
                    <dl>
                        <dt><a href="#" title="联系我们 ">联系我们 </a></dt>
                        <dd><a href="#" title="网站故障报告">网站故障报告</a></dd>
                        <dd><a href="#" title="选机咨询 ">选机咨询</a></dd>
                        <dd><a href="#" title="投诉与建议 ">投诉与建议</a></dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="blank"></div>

        <div id="bottomNav" class="box block">
            <div class="box_1">
                <div class="links clearfix"> 
                    <a href="#" target="_blank" title="YONGDA商城"><img src="<?php echo (IMG_PATH); ?>flow.htm" alt="YONGDA商城" /></a>


                    [<a href="#" target="_blank" title="">yongda商城</a>]
                </div>
            </div>
        </div>

        <div class="blank"></div>


        <div id="bottomNav" class="box block">
            <div class="bNavList clearfix">
                <a href="#">免责条款</a>
                |
                <a href="#">隐私保护</a>
                |
                <a href="#">Powered&nbsp;by&nbsp;<strong><span style="color: rgb(51, 102, 255);">YongDa</span></strong></a>
                |
                <a href="#">联系我们</a>
                |
                <a href="#">公司简介</a>
                |
                <a href="#">批发方案</a>
                |
                <a href="#">配送方式</a>

            </div>
        </div>



        <div id="footer">
            <div class="text">
                © 2005-2012 YONGDA 版权所有，并保留所有权利。<br />
            </div>
        </div>
    </body>
</html>