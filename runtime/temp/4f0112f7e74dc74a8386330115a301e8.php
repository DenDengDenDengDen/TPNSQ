<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:72:"D:\phpstudy_pro\WWW\cms\public/../application/index\view\form\index.html";i:1594028636;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\header.html";i:1594028636;s:61:"D:\phpstudy_pro\WWW\cms\application\index\view\base\side.html";i:1592300648;s:63:"D:\phpstudy_pro\WWW\cms\application\index\view\base\footer.html";i:1594028636;}*/ ?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=yes">
    <title>区块链平台开发_在线留言_免费获取抵扣券【比链科技Bitchain官网】</title>
    <meta name="description" content="比链科技是一家全球领先的区块链技术服务提供商,面向全球提供数字资产金融衍生品系统、交易所系统、OTC系统、CFD系统、区块链钱包系统、链改技术解决方案（公链、私有链、联盟链）等区块链技术开发，为广大机构提供安全、稳定、可靠的技术服务-在线留言。" />
    <meta name="keywords" content="区块链系统,交易所系统开发,数字钱包技术开发,场外交易平台,合约交易系统,链改技术开发,区块链在线留言" />
    <meta name="renderer" content="webkit">
    <link rel="icon" href="/static/skin/images/ico.ico">
    <link rel="stylesheet" type="text/css" href="/static/skin/css/base.css" />
    <link rel="stylesheet" type="text/css" href="/static/skin/css/page.css" />
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
<div class="page" id="page-form">
    <div class="rowFluid">
        <div class="span12">
            <div class="main">
                <link href="/static/skin/css/style_10.css" rel="stylesheet" />
                <body>
                <div id="content" class="form-box" style="background:rgba(245,245,245,1);">
                    <div class="form-content" style="background-color: #ffffff;">
                        <h4 class=" form-title " style="font-size:24px;font-family:Microsoft YaHei;font-weight:bold;color:rgba(0,0,0,1);">免费获取</h4>
                        <h5 class="form-subtitle" style="font-size:14px;font-family:Microsoft YaHei;font-weight:400;color:rgba(165,165,165,1);">提交您的信息和述求，获取20,000现金抵扣券，此后将作为您折扣的重要依据</h5>
                        <div class="getmsg-box">
                            <p class="input-box">
                                <input type="text" class="msg-input" name="" id="txtName" placeholder="姓名（必填）" style="background:rgba(255,255,255,1); outline:none;  border:1px solid rgba(223,223,223,1); color: #000;">
                            </p>
                            <p class="input-box">
                            </p>
                            <p class="code" id="codeListN">
                                <select class="selected-title" style="background:rgba(255,255,255,1); outline:none; border:1px solid rgba(223,223,223,1);color: #000;">

                                    <option name="payMethod" value="+86">+86</option>

                                    <option name="payMethod" value="+376">+376</option>

                                    <option name="payMethod" value="+213">+213</option>

                                    <option name="payMethod" value="+355">+355</option>

                                </select>
                            </p>
                            <input type="number" class="msg-input" name="" id="txtPhone" placeholder="电话（必填）" style="background:rgba(255,255,255,1);outline:none; border:1px solid rgba(223,223,223,1);color: #000;">
                            <p></p>
                            <p class="input-box">
                                <input type="email" class="msg-input" name="" id="mail" placeholder="邮箱（选填）" style="background:rgba(255,255,255,1);outline:none; border:1px solid rgba(223,223,223,1);color: #000;">
                            </p>
                            <p class="input-checkbox" style="display: none;">
                                <span>意向产品（至少选一个）</span>
                                <label data="1"><i></i>交易所解决方案</label>
                                <label data="2"><i></i>区块链钱包解决方案</label>
                                <label data="3"><i></i>流动性支持解决方案</label>
                                <label data="4"><i></i>其他 （可以自己填一个）</label>
                            </p>
                            <p class="input-textarea">
                                <textarea id="textarea" class="msg-input" placeholder="留言（选填）提示最多只能显示200个字" style="background:rgba(255,255,255,1);outline:none; border:1px solid rgba(223,223,223,1);color: #000;"></textarea>
                            </p>
                            <p class="input-button">
                                <div style="width:121px;height:40px; line-height: 40px;  background:rgba(37,125,255,1);border-radius:1px;text-align: center; font-size:14px;font-family:Microsoft YaHei;font-weight:400;color:rgba(255,255,255,1);" id="Button1" onclick="checkContent222()">提交<i class="arrowR "></i></div><br><br>
                                <span class="button-info " style="font-size:12px;font-family:Microsoft YaHei;font-weight:400;color:rgba(165,165,165,1);">Bitchain会保护您的隐私</span>
                            </p>
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
                </body>
            </div>
        </div>
    </div>
</div>
<div id="page-form1">
    <div class="wrap-mobile">
        <div class="title">免费获取</div>
        <div class="title-small">
            <div class="text">提交您的信息和述求，获取20,000现金抵扣券，</div>
            <div class="text">此后将作为您折扣的重要依据</div>
        </div>
        <div class="name-input">
            <input type="text" placeholder="姓名（必填）" id="txtName">
        </div>
        <div class="phone-wrap">
            <div class="title-phone">+86</div>
            <div class="phone">
                <input type="text" placeholder="电话（必填）" id="txtPhone">
            </div>
        </div>
        <div class="name-input">
            <input type="text" placeholder="邮箱（必填）" id="mail">
        </div>
        <div class="textarea">
            <textarea placeholder="留言（选填）提示最多只能显示200个字" id="textarea"></textarea>
        </div>
        <div class="sumit-btn" id="Button1" onclick="checkContent222()">提交</div>
        <div class="footer-title">Bitchain会保护您的隐私</div>
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


</body>
<script src="#/templets/default/js/online.js" type="text/javascript"></script>

</html>

<script type="text/javascript">
    $(function () {
       var HTML1 = $('#page-form')[0].innerHTML;
       var HTML2 = $('#page-form1')[0].innerHTML;
        if($(window).width() <= 479){
            $('#page-form').html('');
            $('#page-form1').html(HTML2);
        }else{
            $('#page-form1').html('');
            $('#page-form').html(HTML1);
        }
        window.onresize = function() {
            if($(window).width() <= 479){
                $('#page-form').html('');
                $('#page-form1').html(HTML2);
            }else{
                $('#page-form1').html('');
                $('#page-form').html(HTML1);
            }
        }
    });

    function SelectPopup(num) {
        $("#software-list" + num).addClass('active');
    }

    function Selecthide(num) {
        $("#software-list" + num).removeClass('active');
    }
    function checkContent222() {
        //姓名
        var strName = document.getElementById("txtName").value;
        console.log(document.getElementById("txtName"))
        if (strName == "") {
            alert("请输入姓名");
            document.getElementById("txtName").focus();
            return false;
        }
        //+86
        var CPLX = $('.selected-title option[name="payMethod"]:checked ').val();
        //手机号码
        var strPhone = document.getElementById("txtPhone").value;
        if (strPhone == "") {
            alert("请输入手机号码！");
            document.getElementById("txtPhone").focus();
            return false;
        } else if (!(/^1[3456789]\d{9}$/g.test(strPhone))) {
            alert("手机号码格式不对");
            document.getElementById("txtPhone").focus();
            return false;
        }
        //邮箱
        var mail = document.getElementById("mail").value;
        //内容
        var textarea = document.getElementById("textarea").value;

        //防止用户多次点击
        document.getElementById('Button1').disabled = true;
        document.getElementById('Button1').value = "正在提交...";
        //提交信息开始
        $.ajax({
            type: "post",
            url: "/Index/Form/ajaxAdd",
            data:{name:strName,phone:strPhone,email:mail,info:textarea},
            dataType:'json',
            success: function(msg) {
                if(msg.code == 200){
                    document.getElementById('Button1').value = "恭喜你，提交成功";
                    alert("恭喜你，资料提交成功！");
                    window.location.href = '/';
                }
                else{
                    document.getElementById('Button1').value = "提交资料申请";
                    document.getElementById('Button1').disabled = false;
                    alert(msg.msg);
                    return false;
                    window.location.reload();
                }
            }
        });
    }
</script>

</html>