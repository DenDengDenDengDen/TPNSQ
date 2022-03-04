<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpstudy_pro\WWW\cms\public/../application/index\view\index\index.html";i:1597308644;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\header.html";i:1594028636;s:61:"D:\phpstudy_pro\WWW\cms\application\index\view\base\side.html";i:1592300648;}*/ ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=yes">
    <title><?php echo $info['title']; ?></title>
    <meta name="description" content="<?php echo $info['desc']; ?>" />
    <meta name="keywords" content="<?php echo $info['keywords']; ?>" />
    <meta name="renderer" content="webkit">
    <link rel="icon" href="/static/skin/images/ico.ico">
    <!--ico-->
    <link rel="stylesheet" type="text/css" href="/static/skin/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/select.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/responsive.css" />
    <script src="/static/skin/js/jquery-1.11.0.min.js"></script>
    <script src="/static/skin/js/wow.min_1.js"></script>
    <script src="/static/skin/js/owl.carousel.min.js"></script>
    <script src="/static/skin/js/page.js"></script>
</head>

<body>

<div class="header">
    <div class="rowFluid">
        <div class="span2 col-md-12">
            <div class="logo mobile-logo">
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
                        <a <?php if($controllerName=='Product'): ?>class='active'<?php endif; ?>   title="产品服务" id="product-service" style="font-size:16px;">产品服务</a>
                        <div class="wrap-select wrap-select-phone" id="software-list0">
                            <div style="margin-bottom: 10px; cursor: pointer;  font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;" onclick="gotoProductDetails(3)">
                                产品服务
                            </div>
                                <?php foreach($productList as $v): ?>
                                    <div style="margin-bottom: 10px; cursor: pointer;  font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;" onclick="gotoProductDetails(<?php echo $v['id']; ?>)">
                                            <?php echo $v['name']; ?>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </li>

                    <li onmouseover="SelectPopup1(1)" onmouseout="Selecthide1(1)">
                        <a <?php if($controllerName=='Article'): ?>class='active'<?php endif; ?>   title="新闻资讯" style="font-size:16px;">新闻资讯</a>
                        <div class="wrap-select wrap-select-phone" id="software-list1">
                            <div style="margin-bottom: 10px; cursor: pointer;  font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;" onclick="gotoArticleList(2)">
                                新闻资讯
                            </div>
                                <?php foreach($cateList as $v): ?>
                                    <div onclick="gotoArticleList(<?php echo $v['id']; ?>)" style="margin-bottom: 10px; cursor: pointer;font-size:12px;font-family:Microsoft YaHei;font-weight:bold;line-height:16px;color:rgba(69,122,255,1);opacity:1;">
                                            <?php echo $v['name']; ?>
                                    </div>
                                <?php endforeach; ?>
                        </div>
                    </li>

                    <li onmouseover="SelectPopup(2)" onmouseout="Selecthide(2)">
                        <a <?php if($controllerName=='About'): ?>class='active'<?php endif; ?>  href="/Index/About/index" title="关于我们" style="font-size:16px;display: block;height: 46px;line-height: 46px;">关于我们</a>
                    </li>
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
                    <script src="/static/skin/js/login.js"></script>
                    <div class="banner"style="background:none;">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="owl-demo">
                                    <?php foreach($bannerimgList as $v): ?>
                                    <div class="item">
                                        <img src="<?php echo $v['img']; ?>" alt="<?php echo $v['img']; ?>">
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div id="container" class="mpage">
                            <div id="anitOut" class="anitOut"></div>
                        </div>
                    </div>
                    <div class="index_product">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="all_title1 wow fadeInDown">
                                        <h3 class="title">我们的产品</h3>
                                        <div class="text">OUR PRODUCT</div>
                                    </div>
                                    <div class="rowFluid">
                                        <div class="index_product_content">
                                            <?php foreach($productList as $key=>$v): ?>
                                            <div <?php if($key%3==0): ?>class="span4 col-md-6 col-xs-12 wow fadeInDown"<?php elseif($key%3==1): ?>class="span4 col-md-6 col-xs-12 wow flipInX"<?php elseif($key%3==2): ?>class="span4 col-md-6 col-xs-12 wow fadeInRight"<?php endif; ?> onclick="gotoProductDetails(<?php echo $v['id']; ?>)" style="cursor: pointer;">
                                                <a class="index_product_list" title="<?php echo $v['name']; ?>">
                                                    <div class="list_backimg list_backimg<?php echo $key+1; ?>">
                                                        <div class="list_img"> <img src="<?php echo $v['icon']; ?>" alt="<?php echo $v['name']; ?>" /> </div>
                                                        <div class="list_txt">
                                                            <div class="list_title"><?php echo $v['name']; ?></div>
                                                            <div class="list_text"><?php echo $v['e_name']; ?></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="platform_advantage">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="all_title2 wow fadeInUp">
                                        <h3 class="title">比链科技优势</h3>
                                        <div class="text">PLATFORM ADVANTAGE</div>
                                    </div>
                                    <div class="rowFluid">
                                        <div class="platform_advantage_content">
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceInLeft">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/008.png" alt="高性价比的产品
" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">高性价比的产品
                                                        </div>
                                                        <div class="brief_text">技术架构优化与产品合理管控<br />为客户提供高性价比产品
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceIn">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/009.png" alt="高效的上线机制" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">高效的上线机制</div>
                                                        <div class="brief_text">高效与节点流程规划，运用成熟<br />的产品体系，为客户分秒必争</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceInRight">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/010.png" alt="丰富的行业经验" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">深厚的技术沉淀</div>
                                                        <div class="brief_text">十多年技术沉淀，首家区块链券<br />商研发，上百家客户市场验证
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceInLeft">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/011.png" alt="大数据" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">大数据</div>
                                                        <div class="brief_text"> 升级更新数据保留，企业数据沉淀<br /> 实现数据分析。 </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceIn">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/012.png" alt="一站无忧的服务" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">一站无忧的服务</div>
                                                        <div class="brief_text">产品应用落地以及后续运营服务，<br />比链懂您所需，做您所想</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="span4 col-xm-6 col-xs-12 wow bounceInRight">
                                                <div class="platform_advantage_list">
                                                    <div class="platform_advantage_img"> <img src="/static/skin/images/013.png" alt="安全稳定" /> </div>
                                                    <div class="platform_advantage_brief">
                                                        <div class="brief_title">安全稳定</div>
                                                        <div class="brief_text"> 平台运行于阿里云计算中心<br /> 多备份容灾保障，安全稳定 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rowFluid">
                                    <div class="waves_box">
                                        <canvas id="waves" class="waves"></canvas>
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="rowFluid">
                                        <div class="response_shows">
                                            <div class="response_shows_box wow bounceIn">
                                                <div class="response_shows_width">
                                                    <div class="pc"> <img src="/static/skin/images/015.png" alt="建站神器" />
                                                        <div class="pic">
                                                            <div class="item"> <img src="/static/skin/images/0511.jpg" alt="快速响应式网站制作" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0512.jpg" alt="网站建设" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0513.jpg" alt="响应式自助建站" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="pad"> <img src="/static/skin/images/017.png" alt="H5响应式网站建设" />
                                                        <div class="pic">
                                                            <div class="item"> <img src="/static/skin/images/0521.jpg" alt="郑州数立方建站" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0522.jpg" alt="生态级响应式2.0建站平台" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0523.jpg" alt="H5响应式网站建设" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="phone"> <img src="/static/skin/images/016.png" alt="响应式网站模板" />
                                                        <div class="pic">
                                                            <div class="item"> <img src="/static/skin/images/0531.jpg" alt="响应式网站设计案例" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0532.jpg" alt="响应式网站案例" /> </div>
                                                            <div class="item"> <img src="/static/skin/images/0533.jpg" alt="html5建站平台" /> </div>
                                                        </div>
                                                    </div>
                                                    <div class="thumb"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="marketing_advantage" style="background: none">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="marketing_advantage marketing_advantage-pc">
                                    <div class="rowFluid">
                                        <div class="span12">
                                            <img src="/static/skin/images/index_youshi.png" alt="" srcset="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="partners">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="all_title1 wow fadeInUp">
                                        <h3 class="title">合作伙伴</h3>
                                        <div class="text">COOPERATIVE PARTNER</div>
                                    </div>
                                    <div class="rowFluid">
                                        <div class="partners_content">
                                            <?php foreach($linkList as $k=>$v): ?>
                                            <a class="partners_content_list wow fadeInUp" data-wow-delay="<?php echo $k*0.2; ?>s" target="_blank"> <img src="<?php echo $v['img']; ?>" alt="<?php echo $v['name']; ?>" /> </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="join_in">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="join_in_title wow fadeInUp">选择比链科技，让您的企业快速迈向区块链+时代</span></div>
                                    <div class="join_in_text wow fadeInLeft">提交您的信息和诉求，限量获取20,000现金抵扣券</div>
                                    <a href="/Index/Form/index" class="all_button join_in_button wow fadeInUp" target="_blank">20,000现金抵扣券  限量免费获取</a> </div>
                            </div>
                        </div>
                    </div>
                    <div class="news_center">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="all_title1 wow fadeInUp">
                                        <h3 class="title">新闻中心</h3>
                                        <div class="text">NEWS TRENDS</div>
                                    </div>
                                    <div class="rowFluid">
                                        <div class="news_center_content">
                                            <?php foreach($articleList as $v): ?>
                                            <div class="span4 col-sm-12 wow fadeInDown" data-wow-delay="1.2s">
                                                <div class="news_center_list">
                                                    <div class="news_center_list_img"> <img src="<?php echo $v['img']; ?>" alt="<?php echo $v['name']; ?>" /> </div>
                                                    <div class="news_center_list_title"><?php echo $v['name']; ?></div>
                                                    <ul>
                                                        <?php foreach($v['articleList'] as $vv): ?>
                                                        <li class="span12"> <a href="/Index/Article/details/id/<?php echo $vv['id']; ?>" class="span8" title="<?php echo $vv['name']; ?>"><i class="fa fa-angle-right"></i><?php echo $vv['name']; ?></a>
                                                            <div style="font-size: 12px; color: #ccc; float: right; margin-top: 3px;"><?php echo date("m-d",$vv['create_time']); ?></div>
                                                        </li>
                                                        <?php endforeach; ?>

                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script src="/static/skin/js/effects.js"></script>
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
                                            <div class="footer_link">
                                                <div class="footer_link_title">友情链接</div>
                                                <ul id="frientLinks">

                                                    <?php foreach($friendList as $v): ?>
                                                    <li><a href='<?php echo $v['url']; ?>' target='_blank' rel="nofollow"><?php echo $v['name']; ?></a> </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                            <div class="span6" style="margin-top: 40px;position: relative;
left: -58px;">
                                                <div class="bottom_logo"> <img src="<?php echo $info['wechat_code']; ?>" alt="微信服务号二维码" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span4 col-xm-6 col-xs-12">
                                        <div class="footer_list">
                                            <div class="footer_cotact">
                                                <div class="footer_cotact_title">联系方式</div>
                                                <ul>
                                                    <li><span class="footer_cotact_type">电话：</span><span class="footer_cotact_content"><a href="tel:<?php echo $info['tel']; ?>" class="call"><?php echo $info['tel']; ?></a></span></li>
                                                    <li><span class="footer_cotact_type">网址：</span><span class="footer_cotact_content"><a href="#" title="官网"><?php echo $info['host']; ?></a></span></li>
                                                    <li><span class="footer_cotact_type">邮箱：</span><span class="footer_cotact_content"><?php echo $info['email']; ?></span></li>
													<li><span class="footer_cotact_type" style="color:#8A8A8A">地址：</span><span class="footer_cotact_content" style="color:#8A8A8A"><?php echo $info['address']; ?></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="advisory-wrap">
                                        <div class="leave" onclick="LeaveClick()">
                                            <img src="/static/skin/images/leave.png" alt="" width="40" height="46">
                                        </div>
                                        <div class="advisory" onclick="advisoryClick()">
                                            <img src="/static/skin/images/advisory.png" alt="" width="40" height="46">
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

</body>
<script src="#/templets/default/js/online.js" type="text/javascript"></script>

</html>

<script type="text/javascript">
    function  advisoryClick() {
        window.location.href = "http://wpa.qq.com/msgrd?v=3&uin=<?php echo $info['qq']; ?>&site=qq&menu=yes";
    }

    function  LeaveClick() {
        window.location.href = '/Index/Form/index';
    }
</script>

</html>