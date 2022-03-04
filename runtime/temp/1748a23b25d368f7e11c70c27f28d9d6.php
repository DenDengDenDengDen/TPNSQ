<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"D:\phpstudy_pro\WWW\cms\public/../application/admin\view\friend\edit.html";i:1592294967;s:63:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\navbar.html";i:1573785337;s:64:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\sidebar.html";i:1592294140;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html>
	<!-- Head -->

	<head>
		<meta charset="utf-8" />
		<title>后台管理系统</title>

		<meta name="description" content="Dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="/static/beyondAdmin/img/favicon.png" type="image/x-icon">

		<!--Basic Styles-->
		<link href="/static/beyondAdmin/css/bootstrap.min.css" rel="stylesheet" />
		<link id="bootstrap-rtl-link" href="" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/font-awesome.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/weather-icons.min.css" rel="stylesheet" />

		<!--Fonts-->
		<!--     <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

		<!--Beyond styles-->
		<link id="beyond-link" href="/static/beyondAdmin/css/beyond.min.css" rel="stylesheet" type="text/css" />
		<link href="/static/beyondAdmin/css/demo.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/typicons.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/animate.min.css" rel="stylesheet" />
		<link id="skin-link" href="" rel="stylesheet" type="text/css" />

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
					<a href="/Admin/Index/banner">
						<span class="menu-text">顶部轮播按钮</span>
					</a>
				</li>
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
					<!-- 加载编辑器的容器 -->
					<div class="page-body">
						<div class="row">
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="widget">
									<div class="widget-header bordered-bottom bordered-blue">
										<span class="widget-caption">Bordered Form</span>
									</div>
									<div class="widget-body">
										<div>
											<form class="form-horizontal form-bordered" role="form" method="post" enctype="multipart/form-data">

												<div class="form-group">
													<label for="inputEmail3" class="col-sm-2 control-label no-padding-right">链接名称</label>
													<div class="col-sm-10">
														<input type="text" value="<?php echo $data['name']; ?>" class="form-control" id="inputEmail3" name="name" placeholder="链接名称(长度:1-20位)">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword3" class="col-sm-2 control-label no-padding-right">链接网址</label>
													<div class="col-sm-10">
														<input type="text" value="<?php echo $data['url']; ?>" class="form-control" id="inputPassword3" name="url" placeholder="请输入友情链接地址">
													</div>
												</div>

												<div class="form-group">
													<label for="inputPassword6" class="col-sm-2 control-label no-padding-right">链接排序</label>
													<div class="col-sm-10">
														<input type="text" value="<?php echo $data['sort']; ?>" class="form-control" id="inputPassword6" name="sort" value="1" placeholder="请输入排序值,数值越小排名越靠前">
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-offset-2 col-sm-10">
														<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
														<button type="submit" name="submit" value="ok" class="btn btn-blue">确定</button>
													</div>
												</div>
											</form>
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
		<!--Sparkline Charts Needed Scripts-->
		<script src="/static/beyondAdmin/js/charts/sparkline/jquery.sparkline.js"></script>
		<script src="/static/beyondAdmin/js/charts/sparkline/sparkline-init.js"></script>

		<!--Easy Pie Charts Needed Scripts-->
		<script src="/static/beyondAdmin/js/charts/easypiechart/jquery.easypiechart.js"></script>
		<script src="/static/beyondAdmin/js/charts/easypiechart/easypiechart-init.js"></script>

		<!--Flot Charts Needed Scripts-->
		<script src="/static/beyondAdmin/js/charts/flot/jquery.flot.js"></script>
		<script src="/static/beyondAdmin/js/charts/flot/jquery.flot.resize.js"></script>
		<script src="/static/beyondAdmin/js/charts/flot/jquery.flot.pie.js"></script>
		<script src="/static/beyondAdmin/js/charts/flot/jquery.flot.tooltip.js"></script>
		<script src="/static/beyondAdmin/js/charts/flot/jquery.flot.orderBars.js"></script>
		<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
		<!-- 编辑器源码文件 -->
		<script type="text/javascript" src="/ueditor/ueditor.all.js"></script>
		<!-- 实例化编辑器 -->
		<script type="text/javascript">
			var ue = UE.getEditor('container');
		</script>
	</body>
	<!--  /Body -->

</html>