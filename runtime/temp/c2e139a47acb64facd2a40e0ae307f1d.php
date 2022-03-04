<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"D:\phpstudy_pro\WWW\cms\public/../application/index\view\about\index.html";i:1594028636;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\header.html";i:1594028636;s:61:"D:\phpstudy_pro\WWW\cms\application\index\view\base\side.html";i:1592300648;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\footer.html";i:1594028636;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=yes">
    <title>区块链平台开发_关于我们【比链科技Bitchain官网】</title>
    <meta name="keywords" content="区块链系统,交易所系统开发,数字钱包技术开发,场外交易平台,合约交易系统,链改技术开发,比链科技简介" />
    <meta name="description" content="比链科技是一家全球领先的区块链技术服务提供商,面向全球提供数字资产金融衍生品系统、钱包服务系统、公链私有链联盟链等区块链技术解决方案,为广大金融机构提供安全、稳定、可靠的场外交易系统开发服务。" />
    <meta name="renderer" content="webkit">
    <link rel="icon" href="/static/skin/images/ico.ico">
    <link rel="stylesheet" type="text/css" href="/static/skin/css/weui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/global.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/about.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/select.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/responsive.css" />
    <script src="/static/skin/js/jq.weui.js"></script>
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
                    <div id="about" class="wrap">
                        <div class="clean">
                            <div
                                    class="item fr fz0 text-center wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;"
                            >
                                <img src="/static/skin/images/loufang.png" alt="" class="max-w100" />
                            </div>
                            <div
                                    class="item about-brief fl border-box text-center wow fadeInUp"
                                    style="visibility: visible; animation-name: fadeInUp;"
                            >
                                <div class="about-title text-center">
                                    <div class="title-0">
                                        WHO ARE WE
                                    </div>
                                    <div class="title-1">
                      <span>
                        我们是谁
                      </span>
                                    </div>
                                </div>
                                <div class="brief">
                                    比链科技比链科技隶属深圳星汉浩云科技有限公旗下科技品牌，
                                    <br /> 是全球区块链技术提供商和链改解决方案领航者。 <br /> 经过多年技术创新与迅速发展，目前超过150多名技术骨干， <br /> 以深圳为核心布局广州、上海等多家分公司，累计为国内外上百家区块链企业提供专业的解方案。
                                    <br /> 深耕区块链技术服务提供商，面向全球提供数字资产金融衍生品系统、交易所系统、OTC系统、
                                    <br /> CFD系统、区块链钱包系统、链改技术解决方案（公链、私有链、联盟链）等区块链技术开发，
                                    <br />为广大机构提供安全、稳定、可靠的技术服务。
                                </div>
                            </div>
                        </div>
                        <div class="clean relative">
                            <div class="item fl fz0 text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <img src="/static/skin/images/chengshi.png" alt="" class="max-w100" />
                            </div>
                            <div class="item number absolute wow fadeInUp" id="wall">
                                <div style="
                      width: 408px;
                      height: 266px;
                      background: rgba(255, 255, 255, 1);
                      display: inline-block;
                      padding-left: 98px;
                      box-sizing: border-box;
                      padding-top: 52px;
                    ">
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: #000000;
                        margin-bottom: 10px;
                      ">
                                        2017年
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        3月Bitchain正式成立
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        4月推出首家区块链券商交易系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        7月推出数字资产钱包系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        9月推出数字资产量化交易系统
                                    </div>
                                </div>
                                <div style="
                      width: 408px;
                      height: 266px;
                      background: rgba(245, 245, 245, 1);
                      display: inline-block;
                      margin-left: 30px;
                      padding-left: 98px;
                      box-sizing: border-box;
                      padding-top: 52px;
                    ">
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: #000000;
                        margin-bottom: 10px;
                      ">
                                        2018年
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        1月推出数字资产交易所系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        7月推出期货合约系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        10月推出CFD差价合约系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        2018年客户服务超过80家
                                    </div>
                                </div>
                                <div style="
                      width: 432px;
                      height: 266px;
                      background: rgba(245, 245, 245, 1);
                      display: inline-block;
                      padding-left: 98px;
                      box-sizing: border-box;
                      padding-top: 52px;
                    ">
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: #000000;
                        margin-bottom: 10px;
                      ">
                                        2019年
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        3月推出OTC场外交易系统
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        5月推出链改技术应用开发
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        8月创立中华区块链商学院
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        10月推出数字资产基金商城
                                    </div>
                                </div>
                                <div style="
                      width: 408px;
                      height: 266px;
                      background: rgba(255, 255, 255, 1);
                      display: inline-block;
                      padding-left: 98px;
                      box-sizing: border-box;
                      padding-top: 52px;
                    ">
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: #000000;
                        margin-bottom: 10px;
                      ">
                                        2020年
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        1月推出区块链产品溯源解决方案
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        3月推出区块链电商解决方案
                                    </div>
                                    <div style="
                        font-size: 14px;
                        font-family: Microsoft YaHei;
                        font-weight: 400;
                        color: rgba(102, 102, 102, 1);
                        margin-bottom: 10px;
                      ">
                                        6月推出供应链金融链改解决方案
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="introduction" style="padding-left: 11px;box-sizing: border-box;text-align: center" id="introduction">
                       <div class="wrap-introduction">
                           <div class="title" style="margin-bottom: 10px;color: #000000;;font-weight: bold;font-size: 14px;font-family: Microsoft YaHei;">2017年</div>
                           <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">3月Bitchain正式成立</div>
                           <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">4月推出首家区块链券商交易系统</div>
                           <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">7月推出数字资产钱包系统</div>
                           <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">9月推出数字资产量化交易系统</div>
                       </div>
                        <div class="wrap-introduction">
                            <div class="title" style="margin-bottom: 10px;color: #000000;;font-weight: bold;font-size: 14px;font-family: Microsoft YaHei;">2018年</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">1月推出数字资产交易所系统</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">7月推出期货合约系统</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">10月推出CFD差价合约系统</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">2018年客户服务超过80家</div>
                        </div>
                        <div class="wrap-introduction">
                            <div class="title" style="margin-bottom: 10px;color: #000000;;font-weight: bold;font-size: 14px;font-family: Microsoft YaHei;">2019年</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">3月推出OTC场外交易系统</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">5月推出链改技术应用开发</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">8月创立中华区块链商学院</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">10月推出数字资产基金商城</div>
                        </div>
                        <div class="wrap-introduction">
                            <div class="title" style="margin-bottom: 10px;color: #000000;;font-weight: bold;font-size: 14px;font-family: Microsoft YaHei;">2020年</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">1月推出区块链产品溯源解决方案</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">3月推出区块链电商解决方案</div>
                            <div class="item" style="margin-bottom: 10px;color: rgba(102, 102, 102, 1);font-weight: 400;font-size: 14px;font-family: Microsoft YaHei;">6月推出供应链金融链改解决方案</div>
                        </div>
                    </div>
                    <div class="about-title" id="mobile-specialist" style="margin-top: 30px;">
                        <div class="title-0 text-center">
                            E X P E R T A D V I S E R
                        </div>
                        <div class="title-1 text-center">
                          <span>
                            专家顾问
                          </span>
                        </div>
                        <div class="image-collection">
                           <div class="wrap" style="display: flex;justify-content:space-around;margin-top: 20px;">
                               <div class="item" onclick="ShellPopup(`
                               太平绅士
                               澳洲工程师协会会员
                               澳洲项目管理协会会员
                               澳洲公司董事协会会员
                               澳洲昆士兰州注册专业工程师
                               Michael是第一位亚裔澳洲人，被选入澳大利亚昆士兰州议会议员，任期近12年。他担任过众多副部长职务，包括矿物和能源、自然资源、贸易和
                               多元文化事务。近年来，专注于房地产行业的链改落地应用自1988年以来，Michael一直担任澳大利亚众多上市公司和私营企业的董事，在房地产
                               项目开发和施工管理方面拥有30多年的经验。另外，兼任布里斯班名誉大使、雷德兰市名誉大使、中国深圳市荣誉市民，亦被中国政府任命为中国海外交流协会理事。
                               Michael目前是澳大利亚中国商业理事会昆士兰分会副主席。
                               `
                               )">
                                   <div class="img">
                                       <img src="/static/skin/images/1.png " alt=" " srcset="" width="56" height="71"  />
                                   </div>
                                   <div class="text">
                                       <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">董事会主席</div>
                                       <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">蔡伟民</div>
                                   </div>
                               </div>
                               <div class="item" onclick="ShellPopup(`经济学博士，持有香港及中国内地证券从业资格证书，在国际投资管理、投资银行及企业围棋收购方面有20多年的专业经验。李先生现任长江联合股权基金管理有限公司总经理，BM Intelligence（上海）高级合伙人兼首席经济学家，以及来自中国大陆的知名国际众筹平台TCH的董事长兼联合创始人。李博士还协助数百家企业成功在香港和中国内地的证券交易所上市。他著有10多本专业书籍。曾任政府、协会、科研院所、大学等多个部门的经济顾问、兼职研究员。`)">
                                   <div class="img">
                                       <img src="/static/skin/images/2.png " alt=" " srcset="" width="56" height="71"  />
                                   </div>
                                   <div class="text">
                                       <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">经济学顾问</div>
                                       <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">李波教授</div>
                                   </div>
                               </div>
                               <div class="item" onclick="ShellPopup(`工程力学学士，工商管理硕士，香港区块链应用研究所研究员。曾参与世界各地多个区块链项目开发和运营管理。`)">
                                   <div class="img">
                                       <img src="/static/skin/images/3.png " alt=" " srcset="" width="56" height="71"  />
                                   </div>
                                   <div class="text">
                                       <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席运营官</div>
                                       <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold"> 冯革</div>
                                   </div>
                               </div>
                               <div class="item" onclick="ShellPopup(`执业会计师45年以上，在事务所担任校长40年以上。曾在审计、税务、商业服务、会计、管理咨询、信息技术、企业重组和破产以及国际商务等公共实践领域工作。现在主要担任多家企业的顾问，包括Arm会计师事务所的高级合伙人。在房地产投资、贸易交易所和中小型企业等多个行业拥有丰富的经验。教育/资格会计师协会研究员、商业学士（UQ）、商业硕士（UNE）。`)">
                                   <div class="img">
                                       <img src="/static/skin/images/4.png " alt=" " srcset="" width="56" height="71"  />
                                   </div>
                                   <div class="text">
                                       <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席财务官</div>
                                       <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">罗伯特</div>
                                   </div>
                               </div>
                           </div>
                            <div class="wrap" style="display: flex;justify-content:space-around;margin-top: 20px;">
                                <div class="item" onclick="ShellPopup(`昆士兰理工大学计算机科学与信息技术学士
                          从事互联网行业20年，主要从事金融、企业/政府网站、区块链技术架构。专门为个人电脑和XBOX开发了11个独立项目；与Vivendi Online和Universal Studios合作开发在线管理系统，拥有700多万用户。`)">
                                    <div class="img">
                                        <img src="/static/skin/images/5.png " alt=" " srcset="" width="56" height="71"  />
                                    </div>
                                    <div class="text">
                                        <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席技术官</div>
                                        <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">莱昂内尔</div>
                                    </div>
                                </div>
                                <div class="item" onclick="ShellPopup(`60年代末在布里斯班开始经营汽车经销商业务，是昆士兰第一家官方保时捷经销商。近年来深耕金融与房地产链改落地应用，现任环球地产国际总监。`)">
                                    <div class="img">
                                        <img src="/static/skin/images/6.png " alt=" " srcset="" width="56" height="71"  />
                                    </div>
                                    <div class="text">
                                        <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席营销官</div>
                                        <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">格斯</div>
                                    </div>
                                </div>
                                <div class="item" onclick="ShellPopup(`
                                    澳洲商会中国区主席
                                    UCOME有限公司总裁善于运用项目管理工具，成功组织多项区块链应用战略研讨。
                                    威克斯国际管理教育董事长，15年管理教育背景。
                                    清华大学，高级教练员导师。
                                    北京大学，公共关系管理研究员，参与撰写《中国NGO》白皮书。
                                `)">
                                    <div class="img">
                                        <img src="/static/skin/images/7.png " alt=" " srcset="" width="56" height="71"  />
                                    </div>
                                    <div class="text">
                                        <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席战略官</div>
                                        <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">温迪·文</div>
                                    </div>
                                </div>
                                <div class="item" onclick="ShellPopup(`
                                拥有20年的国际贸易经验，是阿里巴巴在澳大利亚唯一的全球服务合作伙伴，全球业务中国直接采购（ChinaDirect Sourcing）的创始人兼董事总经理。作为一名杰出的女企业家，先后与昆士兰州政府合作，为800多家中小企业提供专项指导。
                                陈琳迪是FRETHAN Chain（基于区块链技术搭建国际贸易证书存储平台）创始人和ContraCoin（区块链房地产链改应用）顾问，同时兼任澳大利亚区块链联盟（ABA）的创始主席。
                                `)">
                                    <div class="img">
                                        <img src="/static/skin/images/8.png " alt=" " srcset="" width="56" height="71"  />
                                    </div>
                                    <div class="text">
                                        <div class="title" style="font-family:Microsoft YaHei;font-weight:500;">首席分析师</div>
                                        <div class="title-small" style="font-family:Microsoft YaHei;font-size: 16px;font-weight:bold">陈琳迪</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="team" class="wrap">
                        <div class="about-title text-center">
                            <div class="title-0 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                e x p e r t a d v i s e r
                            </div>
                            <div class="title-1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                            <span>
                                专家顾问
                              </span>
                            </div>
                        </div>
                        <div class="team-list clean">
                            <div class="wrap" style="
                    display: flex;
                    justify-content: space-around;
                  ">
                                <div class="item img0" onclick="reacteHTML(0)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/1.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        董事会主席/首席执行官
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        蔡伟民
                                    </div>
                                </div>
                                <div class="item img1" onclick="reacteHTML(1)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/2.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席经济学顾问
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        李波教授
                                    </div>
                                </div>
                                <div class="item img2" onclick="reacteHTML(2)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/3.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席运营官
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        冯革
                                    </div>
                                </div>
                                <div class="item img3" onclick="reacteHTML(3)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/4.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席财务官
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        罗伯特·艾德考克
                                    </div>
                                </div>
                            </div>

                            <div style="width:82%; display: none; height: 300px;background:rgba(248,248,248,1);padding-top: 39px;padding-left:30px; box-sizing: border-box;margin: auto;margin-bottom: 54px;" id="content_wrapper">

                            </div>
                            <div class="wrap" style="display: flex; justify-content: space-around;margin-top: 50px;">
                                <div class="item img4" onclick="reacteHTML(4)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/5.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席技术官
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        莱昂内尔·托马斯
                                    </div>
                                </div>
                                <div class="item img5" onclick="reacteHTML(5)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/6.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席营销官
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        格斯·麦克卢尔
                                    </div>
                                </div>
                                <div class="item img6" onclick="reacteHTML(6)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/7.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席战略官
                                    </div>
                                    <div style="

                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        温迪·文
                                    </div>
                                </div>
                                <div class="item img7" onclick="reacteHTML(7)"  style="cursor:pointer">
                                    <div class="img">
                                        <img src="/static/skin/images/8.png " alt=" " srcset="" />
                                    </div>
                                    <div style=" font-size: 16px;">
                                        首席分析师
                                    </div>
                                    <div style="
                        font-size: 20px;
                        font-family: Microsoft YaHei;
                        font-weight: bold;
                        color: rgba(0, 0, 0, 1);
                      ">
                                        陈琳迪
                                    </div>
                                </div>
                            </div>
                            <div style="width:82%; display: none; height: 300px;background:rgba(248,248,248,1);padding-top: 39px;padding-left:30px; box-sizing: border-box;margin: auto;margin-bottom: 54px;" id="wrap_wrapper">

                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 93px;" id="service">
                        <img src="/static/skin/images/组 5.png" alt="" srcset="" />
                    </div>
                    <div class="join_in">
                        <div class="rowFluid">
                            <div class="span12">
                                <div class="container">
                                    <div class="join_in_title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                        选择比链科技，让您的企业快速迈向区块链+时代
                                    </div>
                                    <div class="join_in_text wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                                        提交您的信息和诉求，限量获取20,000现金抵扣券
                                    </div>
                                    <a href="/Index/Form/index" class="all_button join_in_button wow fadeInUp animated" target="_blank" style="visibility: visible; animation-name: fadeInUp;">免费获取</a
                                    >
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
                            <div class="advisory-wrap">
                                <div class="leave" onclick="LeaveClick()">
                                    <img src="/static/skin/images/leave.png" alt="" width="40" height="46">
                                </div>
                                <div class="advisory" onclick="advisoryClick()">
                                    <img src="/static/skin/images/advisory.png" alt="" width="40" height="46">
                                </div>
                            </div>
                            <div class="span6 bottom_logo-phone" style="position: relative;
left: -58px;top: -127px;">
                                <div class="bottom_logo"> <img src="<?php echo $info['wechat_code']; ?>" alt="微信服务号二维码" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">Copyright &copy; 2002-2011 <?php echo $info['host']; ?> 模板 版权所有 <?php echo $info['icp']; ?> </div>
        </div>
    </div>
</div>

<script type="text/javascript">
     function  advisoryClick() {
        window.location.href = "http://wpa.qq.com/msgrd?v=3&uin=<?php echo $info['qq']; ?>&site=qq&menu=yes";
     }

     function  LeaveClick() {
         window.location.href = '/Index/Form/index';
     }
</script>
                </div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript">
    function SelectPopup(num) {
        $("#software-list" + num).show()
    }

    function Selecthide(num) {
        $("#software-list" + num).hide();
    }

    function ShellPopup(message){
        jq.alert(message,function(){

        });
    }



    $(function () {
        if($(window).width() <= 479){
            $('#wall').css('display','none');
            $('#team').css('display','none');
            $('#about').css('margin-bottom','20px');
            $('#service').css('margin-top','0px');
            $('#mobile-specialist').css('display','block');
            $('#introduction').css('display','block');
        }else{
            $('#wall').css('display','block');
            $('#team').css('display','block');
            $('#about').css('margin-bottom','100px');
            $('#service').css('margin-top','93px');
            $('#mobile-specialist').css('display','none');
            $('#introduction').css('display','none');
        }

        window.onresize = function() {
            if($(window).width() <= 479){
                $('#wall').css('display','none');
                $('#team').css('display','none');
                $('#about').css('margin-bottom','20px');
                $('#service').css('margin-top','0px');
                $('#mobile-specialist').css('display','block');
                $('#introduction').css('display','block');
            }else{
                $('#wall').css('display','block');
                $('#team').css('display','block');
                $('#about').css('margin-bottom','100px');
                $('#service').css('margin-top','93px');
                $('#mobile-specialist').css('display','none');
                $('#introduction').css('display','none');
            }
        }
    })

    function  reacteHTML(num) {
        var str = '';
        var i = 0;
        for (;i<8;i++){
            $(".img"+i).removeClass('addClass-active');
        };

        switch (num) {
            case 0:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                     <div>太平绅士</div>
                     <div>澳洲工程师协会会员</div>
                     <div>澳洲项目管理协会会员</div>
                     <div>澳洲公司董事协会会员</div>
                     <div style="margin-bottom: 50px;">澳洲昆士兰州注册专业工程师 </div>
                     <div>Michael是第一位亚裔澳洲人，被选入澳大利亚昆士兰州议会议员，任期近12年。他担任过众多副部长职务，包括矿物和能源、自然资源、贸易和</div>
                     <div>多元文化事务。近年来，专注于房地产行业的链改落地应用自1988年以来，Michael一直担任澳大利亚众多上市公司和私营企业的董事，在房地产</div>
                     <div>项目开发和施工管理方面拥有30多年的经验。另外，兼任布里斯班名誉大使、雷德兰市名誉大使、中国深圳市荣誉市民，亦被中国政府任命为中国海外交流协会理事。</div>
                     <div>Michael目前是澳大利亚中国商业理事会昆士兰分会副主席。</div>
              </div>`
                $("#wrap_wrapper").hide();
                if($('#content_wrapper').css('display') === 'none'){
                    $('#content_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#content_wrapper').hide();
                }
                break;
            case 1:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                      <div> 经济学博士，持有香港及中国内地证券从业资格证书，在国际投资管理、投资银行及企业围棋收购方面有20多年的专业经验。李先生现任长江联合股权基金管理有限公司总经理，BM Intelligence（上海）高级合伙人兼首席经济学家，以及来自中国大陆的知名国际众筹平台TCH的董事长兼联合创始人。李博士还协助数百家企业成功在香港和中国内地的证券交易所上市。他著有10多本专业书籍。曾任政府、协会、科研院所、大学等多个部门的经济顾问、兼职研究员。
</div>
                   </div>`
                $("#wrap_wrapper").hide();
                if($('#content_wrapper').css('display') === 'none'){
                    $('#content_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#content_wrapper').hide();
                }
                break;
            case 2:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                      <div> 工程力学学士，工商管理硕士，香港区块链应用研究所研究员。曾参与世界各地多个区块链项目开发和运营管理。

</div>
                   </div>`
                $("#wrap_wrapper").hide();
                if($('#content_wrapper').css('display') === 'none'){
                    $('#content_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#content_wrapper').hide();
                }
                break;
            case 3:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                        <div>

                          执业会计师45年以上，在事务所担任校长40年以上。曾在审计、税务、商业服务、会计、管理咨询、信息技术、企业重组和破产以及国际商务等公共实践领域工作。现在主要担任多家企业的顾问，包括Arm会计师事务所的高级合伙人。在房地产投资、贸易交易所和中小型企业等多个行业拥有丰富的经验。教育/资格会计师协会研究员、商业学士（UQ）、商业硕士（UNE）。
                        </div>


                   </div>`
                $("#wrap_wrapper").hide();
                if($('#content_wrapper').css('display') === 'none'){
                    $('#content_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#content_wrapper').hide();
                }
                break;
            case 4:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                        <div>

                          昆士兰理工大学计算机科学与信息技术学士
                          从事互联网行业20年，主要从事金融、企业/政府网站、区块链技术架构。专门为个人电脑和XBOX开发了11个独立项目；与Vivendi Online和Universal Studios合作开发在线管理系统，拥有700多万用户。
                        </div>

                   </div>`
                $("#content_wrapper").hide();
                if($('#wrap_wrapper').css('display') === 'none'){
                    $('#wrap_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#wrap_wrapper').hide();
                }

                break;
            case 5:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                        <div>
                          60年代末在布里斯班开始经营汽车经销商业务，是昆士兰第一家官方保时捷经销商。近年来深耕金融与房地产链改落地应用，现任环球地产国际总监。
                        </div>
                   </div>`
                $("#content_wrapper").hide();
                if($('#wrap_wrapper').css('display') === 'none'){
                    $('#wrap_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#wrap_wrapper').hide();
                }
                break;
            case 6:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                     <div>诺华国际集团总裁</div>
                     <div>澳洲商会中国区主席</div>
                     <div>UCOME有限公司总裁</div>
                     <div>善于运用项目管理工具，成功组织多项区块链应用战略研讨。</div>
                     <div>威克斯国际管理教育董事长，15年管理教育背景。</div>
                     <div>清华大学，高级教练员导师。</div>
                     <div>北京大学，公共关系管理研究员，参与撰写《中国NGO》白皮书。</div>
              </div>`
                $("#content_wrapper").hide();
                if($('#wrap_wrapper').css('display') === 'none'){
                    $('#wrap_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#wrap_wrapper').hide();
                }
                break;
            case 7:
                str += `<div  style="font-size:16px;font-family:Microsoft YaHei;font-weight:400;color:rgba(0,0,0,1);">
                        <div>
                          拥有20年的国际贸易经验，是阿里巴巴在澳大利亚唯一的全球服务合作伙伴，全球业务中国直接采购（ChinaDirect Sourcing）的创始人兼董事总经理。作为一名杰出的女企业家，先后与昆士兰州政府合作，为800多家中小企业提供专项指导。
                          陈琳迪是FRETHAN Chain（基于区块链技术搭建国际贸易证书存储平台）创始人和ContraCoin（区块链房地产链改应用）顾问，同时兼任澳大利亚区块链联盟（ABA）的创始主席。
                        </div>
                   </div>`
                $("#content_wrapper").hide();
                if($('#wrap_wrapper').css('display') === 'none'){
                    $('#wrap_wrapper').html(str).show();
                    $(".img"+num).addClass('addClass-active');
                }else{
                    $('#wrap_wrapper').hide();
                }
                break;
        }
    }


</script>

</html>