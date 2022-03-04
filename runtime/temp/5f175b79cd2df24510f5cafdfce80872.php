<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\phpstudy_pro\WWW\cms\public/../application/index\view\article\details.html";i:1592381912;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\header.html";i:1592880889;s:61:"D:\phpstudy_pro\WWW\cms\application\index\view\base\side.html";i:1592300648;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\footer.html";i:1592555210;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=yes">
    <title><?php echo $data['name']; ?></title>
    <meta name="keywords" content="<?php echo $data['keywords']; ?>" />
    <meta name="description" content="<?php echo $data['desc']; ?>" />
    <meta name="renderer" content="webkit">
    <link rel="icon" href="/static/skin/images/ico.ico">
    <link rel="stylesheet" type="text/css" href="/static/skin/css/base.css"/>
    <link rel="stylesheet" type="text/css" href="/static/skin/css/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="/static/skin/css/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" href="/static/skin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/static/skin/css/select.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/responsive.css"/>
    <script src="/static/skin/js/jquery-1.11.0.min.js"></script>
    <script src="/static/skin/js/wow.min_1.js"></script>
    <script src="/static/skin/js/owl.carousel.min.js"></script>
    <script src="/static/skin/js/page.js"></script>
</head>
<body>
<div class="header">
    <div class="rowFluid">
        <div class="span2 col-md-12">
            <div class="logo">
                <a href="/" title="返回首页"> <img src="<?php echo $info['logo']; ?>" alt="<?php echo $info['title']; ?>" /> </a>
            </div>
        </div>
        <div class="span8">
            <div class="mobileMenuBtn"><span class="span1"></span><span class="span2"></span><span class="span3"></span></div>
            <div class="mobileMenuBtn_shad"></div>
            <div class="header_menu">
                <ul id="menu" style="font-size:16px;">
                    <li><a href="/" <?php if($controllerName=='Index'): ?>class='active'<?php endif; ?> title="首页" style="font-size:16px;">首页</a></li>

                    <li onmouseover="SelectPopup1(0)" onmouseout="Selecthide1(0)">
                        <a <?php if($controllerName=='Product'): ?>class='active'<?php endif; ?>  href="/Index/Product/details/id/3" title="产品服务" style="font-size:16px;">产品服务</a>
                        <div class="wrap-select" id="software-list0">
                                <?php foreach($productList as $v): ?>
                                    <div style="margin-bottom: 10px; cursor: pointer;  font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;" onclick="gotoProductDetails(<?php echo $v['id']; ?>)">
                                            <?php echo $v['name']; ?>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </li>

                    <li onmouseover="SelectPopup1(1)" onmouseout="Selecthide1(1)">
                        <a <?php if($controllerName=='Article'): ?>class='active'<?php endif; ?>  href="/Index/Article/index/id/2" title="新闻资讯" style="font-size:16px;">新闻资讯</a>
                        <div class="wrap-select" id="software-list1">
                                <?php foreach($cateList as $v): ?>
                                    <div onclick="gotoArticleList(<?php echo $v['id']; ?>)" style="margin-bottom: 10px; cursor: pointer;font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;" onclick="gotoProductDetails(<?php echo $v['id']; ?>)">
                                            <?php echo $v['name']; ?>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </li>

                    <li onmouseover="SelectPopup(2)" onmouseout="Selecthide(2)">
                        <a <?php if($controllerName=='About'): ?>class='active'<?php endif; ?>  href="/Index/About/index" title="关于我们" style="font-size:16px;">关于我们</a>
                    </li>

                    <!-- <li><a href="客户案例.html" title="客户案例">客户案例</a></li> -->

                    <!-- <li><a href="建站方案.html" title="建站方案">建站方案</a></li> -->

                    <!-- <li><a href="新闻资讯.html" title="新闻资讯">新闻资讯</a></li> -->

                    <!-- <li><a href="技术支持.html" title="技术支持">技术支持</a></li> -->

                    <!-- <li><a href="联系我们.html" title="联系我们">联系我们</a></li> -->

                </ul>
            </div>
        </div>
        <div class="span2"> </div>
    </div>
</div>
<script>
    function gotoProductDetails(id){
        window.location.href='/Index/Product/details/id/'+id;
    }

    function gotoArticleList(id){
        window.location.href='/Index/Article/index/id/'+id;
    }

    function gotoForm(){
        window.location.href="/Index/Form/index";
    }

    function SelectPopup1(num) {
        $("#software-list" + num).show()
    }

    function Selecthide1(num) {
        $("#software-list" + num).hide();
    }
</script>

<div class="aside">
    <ul>
        <li>
            <a href="/Index/Form/index" target="_blank" title="合作"><img src="/static/skin/images/057.png" alt="合作" />留言</a>
        </li>
        <li class="consulting"><a href="#this" title="建站在线客服"><span></span><span></span><span></span><img src="/static/skin/images/059.png" class="img1" alt="建站在线客服" /><img src="/static/skin/images/061.png" class="img2" alt="建站在线客服" />咨询</a></li>
    </ul>
</div>
<div class="consulting_box">
    <div class="title">
        <div class="title_t1">RELATEED CONSULTING</div>
        <div class="title_t2">相关咨询 </div>
    </div>
    <div class="consulting_type">
        <div class="consulting_type_title">选择下列产品马上在线沟通</div>
        <ul>
            <li>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $info['qq']; ?>&site=qq&menu=yes" title="响应式建站咨询"> <img src="/static/skin/images/062.png" class="img1" alt="网站建设" /><img src="/static/skin/images/063.png" class="img2" alt="响应式网站咨询" />建站咨询 </a>
            </li>
            <li>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $info['qq']; ?>&site=qq&menu=yes" title="建站平台加盟咨询"> <img src="/static/skin/images/062.png" class="img1" alt="建站平台" /><img src="/static/skin/images/063.png" class="img2" alt="建站平台代理咨询" />加盟咨询 </a>
            </li>
            <li>
                <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $info['qq']; ?>&site=qq&menu=yes" title="响应式网站定制"> <img src="/static/skin/images/062.png" class="img1" alt="响应式网站定制" /><img src="/static/skin/images/063.png" class="img2" alt="响应式网站定制" />定制咨询 </a>
            </li>
        </ul>
        <div class="time">服务时间：9:30-18:00</div>
    </div>
    <div class="problem">
        <div class="problem_title">你可能遇到了下面的问题</div>
        <div class="img" style="margin-top: 50px;">
            <img src="<?php echo $info['wechat_code']; ?>" width="250" height="246"/>
        </div>
       <!-- <ul>
            <li><span></span><a href="/a/jishuzhichi/fuwutiaokuan/34.html" title="开发App的5个基本步骤">开发App的5个基本步骤</a></li>
            <li><span></span><a href="/a/jishuzhichi/fuwutiaokuan/33.html" title="手机App的发展前景展望">手机App的发展前景展望</a></li>
            <li><span></span><a href="/a/jishuzhichi/shiyongshouce/32.html" title="网站制作从原型图架构到设计开发的具体步骤">网站制作从原型图架构到设计开发的具体步骤</a></li>
            <li><span></span><a href="/a/jishuzhichi/shiyongshouce/31.html" title="站长必看网站建设系统选择知识">站长必看网站建设系统选择知识</a></li>
            <li><span></span><a href="/a/jishuzhichi/shiyongshouce/30.html" title="高端网站建设必须要满足哪些要求">高端网站建设必须要满足哪些要求</a></li>

        </ul>-->
    </div>
    <div class="close"> <img src="/static/skin/images/close.png" alt="关闭右侧工具栏" /> </div>
</div>
<div class="page">
    <div class="rowFluid">
        <div class="span12">
            <div class="main">
                <div class="z_banner news_banner"></div>
                <div class="technical_support" style="padding-bottom:0px;">
                    <div class="rowFluid">
                        <div class="span12">
                            <div class="container">
                                <div class="wow fadeInRight">
                                    <div class="technical_support_list" style="margin:0 auto">
                                        <div class="technical_support_box_z">
                                            <div class="technical_support_box_z_header">
                                                <div class="title"><?php echo $data['name']; ?></div>
                                                <ul>
                                                    <li>作者：<?php echo $data['author']; ?></li>
                                                    <li>发表时间：<?php echo date("Y-m-d", $data['create_time']); ?></li>
                                                    <li>来源：<?php echo $data['origin']; ?></li>
                                                </ul>
                                            </div>
                                            <div class="technical_support_box_z_info_box">
                                                <div class="technical_support_box_z_info">
                                                    <?php echo $data['content']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer wow fadeInUp">
    <div class="rowFluid">
        <div class="span12">
            <div class="container">
                <div class="footer_content">
                    <div class="span4 col-xm-12">
                        <div class="footer_list">
                            <!--<div class="span6">
                                <div class="bottom_logo"> <img src="<?php echo $info['wechat_code']; ?>" alt="微信服务号二维码" /> </div>
                            </div>-->
                            <div class="span6 col-xm-12">
                                <div class="quick_navigation">
                                    <div class="quick_navigation_title">快速导航</div>
                                    <ul>
                                        <li> <a href="/" title="首页">首页</a> </li>
                                        <li> <a href="/Index/Product/details/id/3" title="产品服务">产品服务</a> </li>
                                        <li> <a href="/Index/Article/index/id/2" title="新闻资讯">新闻资讯</a> </li>
                                        <li> <a href="/Index/About/index" title="关于我们">关于我们</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4 col-xm-6 col-xs-12">
                        <div class="footer_list">
                            <div class="span6" style="margin-top: 40px;">
                                <div class="bottom_logo"> <img src="<?php echo $info['wechat_code']; ?>" alt="微信服务号二维码" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class="span4 col-xm-6 col-xs-12">
                        <div class="footer_list">
                            <div class="footer_cotact">
                                <div class="footer_cotact_title">联系方式</div>
                                <ul style="cololr:#8a8a8a">
                                    <li><span class="footer_cotact_type" style="color:#8A8A8A">电话：</span><span class="footer_cotact_content"><a href="tel:<?php echo $info['tel']; ?>" class="call"><?php echo $info['tel']; ?></a></span></li>
                                    <li><span class="footer_cotact_type" style="color:#8A8A8A">网址：</span><span class="footer_cotact_content"><a href="<?php echo $info['host']; ?>" title="官网"><?php echo $info['host']; ?></a></span></li>
                                    <li><span class="footer_cotact_type" style="color:#8A8A8A">邮箱：</span><span class="footer_cotact_content" style="color:#8A8A8A"><?php echo $info['email']; ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">Copyright &copy; 2002-2011 <?php echo $info['host']; ?> 模板 版权所有 <?php echo $info['icp']; ?> </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>

    function SelectPopup(num) {
        $("#software-list" + num).addClass('active');
    }

    function Selecthide(num) {
        $("#software-list" + num).removeClass('active');
    }

</script>
</html>
