<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"D:\phpstudy_pro\WWW\cms\public/../application/admin\view\message\index.html";i:1592019583;s:63:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\navbar.html";i:1592381958;s:64:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\sidebar.html";i:1592819200;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html>
<!-- Head -->

<head>
    <meta charset="utf-8"/>
    <title>后台管理系统</title>

    <meta name="description" content="Dashboard"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/static/beyondAdmin/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/static/beyondAdmin/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="/static/beyondAdmin/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="/static/beyondAdmin/css/weather-icons.min.css" rel="stylesheet"/>

    <!--Fonts-->
    <!--     <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/beyondAdmin/css/beyond.min.css" rel="stylesheet" type="text/css"/>
    <link href="/static/beyondAdmin/css/demo.min.css" rel="stylesheet"/>
    <link href="/static/beyondAdmin/css/typicons.min.css" rel="stylesheet"/>
    <link href="/static/beyondAdmin/css/animate.min.css" rel="stylesheet"/>
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>

	<!--Page Related styles-->
	<link href="/static/beyondAdmin/css/dataTables.bootstrap.css" rel="stylesheet" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/static/beyondAdmin/js/skins.min.js"></script>
</head>
<!-- /Head -->
<!-- Body -->

<body>
<!-- Loading Container -->
<div class="loading-container">
    <div class="loading-progress">
        <div class="rotator">
            <div class="rotator">
                <div class="rotator colored">
                    <div class="rotator">
                        <div class="rotator colored">
                            <div class="rotator colored"></div>
                            <div class="rotator"></div>
                        </div>
                        <div class="rotator colored"></div>
                    </div>
                    <div class="rotator"></div>
                </div>
                <div class="rotator"></div>
            </div>
            <div class="rotator"></div>
        </div>
        <div class="rotator"></div>
    </div>
</div>
<!--  /Loading Container -->
<!-- Navbar -->
<link rel="icon" href="/static/skin/images/ico.ico">
<div class="navbar">
	<div class="navbar-inner">
		<div class="navbar-container">
			<!-- Navbar Barnd -->
			<div class="navbar-header pull-left">
				<a href="/Admin/Index/index" class="navbar-brand">
					<small>
                            <img src="/static/beyondAdmin/img/logo.png" alt="" />
                        </small>
				</a>
			</div>
			<!-- /Navbar Barnd -->

			<!-- Sidebar Collapse -->
			<div class="sidebar-collapse" id="sidebar-collapse">
				<i class="collapse-icon fa fa-bars"></i>
			</div>
			<!-- /Sidebar Collapse -->
			<!-- Account Area and Settings --->
			<div class="navbar-header pull-right">
				<div class="navbar-account">
					<ul class="account-area">
						
						<li>
							<a class="login-area dropdown-toggle" data-toggle="dropdown">
								<div class="avatar" title="View your public profile">
									<img src="/static/beyondAdmin/img/avatars/adam-jansen.jpg">
								</div>
								<section>
									<h2><span class="profile"><span><?php echo $adminInfo['nickname']; ?></span></span></h2>
								</section>
							</a>
							<!--Login Area Dropdown-->
							<ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
								<li class="username">
									<a><?php echo $adminInfo['nickname']; ?></a>
								</li>
								<li class="email">
									<a><?php echo $adminInfo['user']; ?></a>
								</li>
								<li class="dropdown-footer">
									<a href="/Admin/Admin/editPass">
										修改密码
									</a>
								</li>
								<li class="dropdown-footer">
									<a href="/Admin/Index/logout">
										安全退出
									</a>
								</li>
							</ul>
							<!--/Login Area Dropdown-->
						</li>
						<!-- /Account Area -->
						<!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
						<!-- Settings -->
					</ul>
					
					<!-- Settings -->
				</div>
			</div>
			<!-- /Account Area and Settings -->
		</div>
	</div>
</div>
<!-- /Navbar -->
<!-- Main Container -->
<div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
	<!-- Page Sidebar Header-->
	<!--<div class="sidebar-header-wrapper">
		<input type="text" class="searchinput" />
		<i class="searchicon fa fa-search"></i>
		<div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
	</div>-->
	<!-- /Page Sidebar Header -->
	<!-- Sidebar Menu -->
	<ul class="nav sidebar-menu">
		<!--Dashboard-->
		<li <?php if($controllerName == 'Index'): ?>class="active"<?php endif; ?>>
			<a href="/Admin/Index/index">
				<i class="menu-icon glyphicon glyphicon-home"></i>
				<span class="menu-text"> 控制台首页 </span>
			</a>
		</li>

		<!--UI 首页管理-->
		<li class="open">
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> 首页管理 </span>
				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="/Admin/Index/logo">
						<span class="menu-text">logo设置</span>
					</a>
				</li>
				<li>
					<a href="/Admin/Index/bannerimg">
						<span class="menu-text">图片轮播</span>
					</a>
				</li>
<!--				<li>-->
<!--					<a href="/Admin/Index/banner">-->
<!--						<span class="menu-text">顶部轮播按钮</span>-->
<!--					</a>-->
<!--				</li>-->
				<li>
					<a href="/Admin/Index/link" class="menu-dropdown">
						<span class="menu-text">合作伙伴</span>
					</a>
				</li>
				<li>
					<a href="/Admin/Index/friend" class="menu-dropdown">
						<span class="menu-text">友情链接</span>
					</a>
				</li>
				<li>
					<a href="/Admin/Index/about">
						<span class="menu-text">网站设置</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Tables-->
		<li class="open">
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-table"></i>
				<span class="menu-text"> 产品管理 </span>
				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="/Admin/Product/index">
						<span class="menu-text">产品列表</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Forms-->
		<li class="open">
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-table"></i>
				<span class="menu-text"> 资讯管理 </span>
				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="/Admin/Cate/index">
						<span class="menu-text">资讯分类</span>
					</a>
				</li>
				<li>
					<a href="/Admin/Article/index">
						<span class="menu-text">资讯列表</span>
					</a>
				</li>
			</ul>
		</li>

		<li class="open">
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-table"></i>
				<span class="menu-text"> 留言管理 </span>
				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="/Admin/Message/index">
						<span class="menu-text">留言列表</span>
					</a>
				</li>
			</ul>
		</li>
	</ul>
	<!-- /Sidebar Menu -->
</div>
        <!-- /Page Sidebar -->
        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Breadcrumb -->
            <div class="page-body">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="widget">
                            <div class="widget-header ">
                                <span class="widget-caption">留言管理</span>
                                <div class="widget-buttons">
                                    <a href="#" data-toggle="maximize">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="#" data-toggle="collapse">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a href="#" data-toggle="dispose">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <div role="grid" id="editabledatatable_wrapper"
                                     class="dataTables_wrapper form-inline no-footer">

                                    <table class="table table-striped table-hover table-bordered dataTable no-footer"
                                           id="editabledatatable" aria-describedby="editabledatatable_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" rowspan="1" colspan="1" style="width: 185px;">
                                                姓名
                                            </th>
                                            <th class="sorting" rowspan="1" colspan="1" style="width: 275px;">
                                                电话
                                            </th>
                                            <th class="sorting" rowspan="1" colspan="1" style="width: 122px;">
                                                邮箱
                                            </th>
                                            <th class="sorting" rowspan="1" colspan="1" style="width: 122px;">
                                                信息
                                            </th>
                                            <th class="sorting" rowspan="1" colspan="1" style="width:195px;">
                                                时间
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <?php foreach($list as $v): ?>
                                        <tr class="odd">
                                            <td class="sorting_1"><?php echo $v['name']; ?></td>
                                            <td class=" "><?php echo $v['phone']; ?></td>
                                            <td class=" "><?php echo $v['email']; ?></td>
                                            <td class=" "><?php echo $v['info']; ?></td>
                                            <td class="center  "><?php echo date("Y-m-d H:i:s", $v['create_time']); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /Page Body -->
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->
    <!-- Main Container -->

</div>

<!--Basic Scripts-->
<script src="/static/beyondAdmin/js/jquery-2.0.3.min.js"></script>
<script src="/static/beyondAdmin/js/bootstrap.min.js"></script>

<!--Beyond Scripts-->
<script src="/static/beyondAdmin/js/beyond.min.js"></script>

<!--Page Related Scripts-->
<script src="/static/beyondAdmin/js/datatable/jquery.dataTables.min.js"></script>
<script src="/static/beyondAdmin/js/datatable/ZeroClipboard.js"></script>
<script src="/static/beyondAdmin/js/datatable/dataTables.tableTools.min.js"></script>
<script src="/static/beyondAdmin/js/datatable/dataTables.bootstrap.min.js"></script>
<script src="/static/beyondAdmin/js/datatable/datatables-init.js"></script>
<script>
	InitiateSimpleDataTable.init();
	InitiateExpandableDataTable.init();
	InitiateSearchableDataTable.init();
</script>
<!--Google Analytics::Demo Only-->
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date(); a = s.createElement(o),
				m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
	})(window, document, 'script', 'http://www.google-analytics.com/analytics.js', 'ga');

	ga('create', 'UA-52103994-1', 'auto');
	ga('send', 'pageview');

    $(function(){
        $('.delete').on('click', function(){
            return confirm('确定要删除该数据?');
        })
    })
</script>
</body>
<!--  /Body -->

</html>