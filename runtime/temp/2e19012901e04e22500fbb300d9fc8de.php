<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"D:\phpstudy_pro\WWW\cms\public/../application/admin\view\admin\edit_pass.html";i:1573788174;s:63:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\navbar.html";i:1573785337;s:64:"D:\phpstudy_pro\WWW\cms\application\admin\view\base\sidebar.html";i:1573785503;}*/ ?>
﻿<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 1.0.0
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->
<head>
    <meta charset="utf-8" />
    <title>后台管理系统</title>

    <meta name="description" content="form layouts" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/static/beyondAdmin/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/static/beyondAdmin/css/bootstrap.min.css" rel="stylesheet" />
    <link id="bootstrap-rtl-link" href="" rel="stylesheet" />
    <link href="/static/beyondAdmin/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/static/beyondAdmin/css/weather-icons.min.css" rel="stylesheet" />

    <!--Fonts-->
 <!--    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css"> -->

    <!--Beyond styles-->
    <link id="beyond-link" href="/static/beyondAdmin/css/beyond.min.css" rel="stylesheet" />
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
		<!--Databoxes-->
		<li>
			<a href="databoxes.html">
				<i class="menu-icon glyphicon glyphicon-tasks"></i>
				<span class="menu-text"> Data Boxes </span>
			</a>
		</li>
		<!--Widgets-->
		<li>
			<a href="widgets.html">
				<i class="menu-icon fa fa-th"></i>
				<span class="menu-text"> Widgets </span>
			</a>
		</li>
		<!--UI Elements-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text"> Elements </span>
				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="elements.html">
						<span class="menu-text">Basic Elements</span>
					</a>
				</li>
				<li>
					<a href="#" class="menu-dropdown">
						<span class="menu-text">
                                        Icons
                                    </span>
						<i class="menu-expand"></i>
					</a>

					<ul class="submenu">
						<li>
							<a href="font-awesome.html">
								<i class="menu-icon fa fa-rocket"></i>
								<span class="menu-text">Font Awesome</span>
							</a>
						</li>
						<li>
							<a href="glyph-icons.html">
								<i class="menu-icon glyphicon glyphicon-stats"></i>
								<span class="menu-text">Glyph Icons</span>
							</a>
						</li>
						<li>
							<a href="typicon.html">
								<i class="menu-icon typcn typcn-location-outline"></i>
								<span class="menu-text"> Typicons</span>
							</a>
						</li>
						<li>
							<a href="weather-icons.html">
								<i class="menu-icon wi-day-snow"></i>
								<span class="menu-text">Weather Icons</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="tabs.html">
						<span class="menu-text">Tabs & Accordions</span>
					</a>
				</li>
				<li>
					<a href="alerts.html">
						<span class="menu-text">Alerts & Tooltips</span>
					</a>
				</li>
				<li>
					<a href="modals.html">
						<span class="menu-text">Modals & Wells</span>
					</a>
				</li>
				<li>
					<a href="buttons.html">
						<span class="menu-text">Buttons</span>
					</a>
				</li>
				<li>
					<a href="nestable-list.html">
						<span class="menu-text"> Nestable List</span>
					</a>
				</li>
				<li>
					<a href="treeview.html">
						<span class="menu-text">Treeview</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Tables-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-table"></i>
				<span class="menu-text"> Tables </span>

				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="tables-simple.html">
						<span class="menu-text">Simple & Responsive</span>
					</a>
				</li>
				<li>
					<a href="tables-data.html">
						<span class="menu-text">Data Tables</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Forms-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Forms </span>

				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="form-layouts.html">
						<span class="menu-text">Form Layouts</span>
					</a>
				</li>

				<li>
					<a href="form-inputs.html">
						<span class="menu-text">Form Inputs</span>
					</a>
				</li>

				<li>
					<a href="form-pickers.html">
						<span class="menu-text">Data Pickers</span>
					</a>
				</li>
				<li>
					<a href="form-wizard.html">
						<span class="menu-text">Wizard</span>
					</a>
				</li>
				<li>
					<a href="form-validation.html">
						<span class="menu-text">Validation</span>
					</a>
				</li>
				<li>
					<a href="form-editors.html">
						<span class="menu-text">Editors</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Charts-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-bar-chart-o"></i>
				<span class="menu-text"> Charts </span>

				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="flot.html">
						<span class="menu-text">Flot Charts</span>
					</a>
				</li>

				<li>
					<a href="morris.html">
						<span class="menu-text"> Morris Charts</span>
					</a>
				</li>
				<li>
					<a href="sparkline.html">
						<span class="menu-text">Sparkline Charts</span>
					</a>
				</li>
				<li>
					<a href="easypiecharts.html">
						<span class="menu-text">Easy Pie Charts</span>
					</a>
				</li>
				<li>
					<a href="chartjs.html">
						<span class="menu-text"> ChartJS</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Profile-->
		<li>
			<a href="profile.html">
				<i class="menu-icon fa fa-picture-o"></i>
				<span class="menu-text">Profile</span>
			</a>
		</li>
		<!--Mail-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-envelope-o"></i>
				<span class="menu-text"> Mail </span>

				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="inbox.html">
						<span class="menu-text">Inbox</span>
					</a>
				</li>

				<li>
					<a href="message-view.html">
						<span class="menu-text">View Message</span>
					</a>
				</li>
				<li>
					<a href="message-compose.html">
						<span class="menu-text">Compose Message</span>
					</a>
				</li>
			</ul>
		</li>
		<!--Calendar-->
		<li>
			<a href="calendar.html">
				<i class="menu-icon fa fa-calendar"></i>
				<span class="menu-text">
                                Calendar
                            </span>
			</a>
		</li>
		<!--Pages-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon glyphicon glyphicon-paperclip"></i>
				<span class="menu-text"> Pages </span>

				<i class="menu-expand"></i>
			</a>
			<ul class="submenu">
				<li>
					<a href="timeline.html">
						<span class="menu-text">Timeline</span>
					</a>
				</li>
				<li>
					<a href="pricing.html">
						<span class="menu-text">Pricing Tables</span>
					</a>
				</li>

				<li>
					<a href="invoice.html">
						<span class="menu-text">Invoice</span>
					</a>
				</li>

				<li>
					<a href="login.html">
						<span class="menu-text">Login</span>
					</a>
				</li>
				<li>
					<a href="register.html">
						<span class="menu-text">Register</span>
					</a>
				</li>
				<li>
					<a href="lock.html">
						<span class="menu-text">Lock Screen</span>
					</a>
				</li>
				<li>
					<a href="typography.html">
						<span class="menu-text"> Typography </span>
					</a>
				</li>
			</ul>
		</li>
		<!--More Pages-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon glyphicon glyphicon-link"></i>

				<span class="menu-text">
                                More Pages
                            </span>

				<i class="menu-expand"></i>
			</a>

			<ul class="submenu">
				<li>
					<a href="error-404.html">
						<span class="menu-text">Error 404</span>
					</a>
				</li>

				<li>
					<a href="error-500.html">
						<span class="menu-text"> Error 500</span>
					</a>
				</li>
				<li>
					<a href="blank.html">
						<span class="menu-text">Blank Page</span>
					</a>
				</li>
				<li>
					<a href="grid.html">
						<span class="menu-text"> Grid</span>
					</a>
				</li>
				<li>
					<a href="#" class="menu-dropdown">
						<span class="menu-text">
                                        Multi Level Menu
                                    </span>
						<i class="menu-expand"></i>
					</a>

					<ul class="submenu">
						<li>
							<a href="#">
								<i class="menu-icon fa fa-camera"></i>
								<span class="menu-text">Level 3</span>
							</a>
						</li>

						<li>
							<a href="#" class="menu-dropdown">
								<i class="menu-icon fa fa-asterisk"></i>

								<span class="menu-text">
                                                Level 4
                                            </span>
								<i class="menu-expand"></i>
							</a>

							<ul class="submenu">
								<li>
									<a href="#">
										<i class="menu-icon fa fa-bolt"></i>
										<span class="menu-text">Some Item</span>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="menu-icon fa fa-bug"></i>
										<span class="menu-text">Another Item</span>
									</a>
								</li>
							</ul>
						</li>

					</ul>
				</li>

			</ul>
		</li>
		<!--Right to Left-->
		<li>
			<a href="#" class="menu-dropdown">
				<i class="menu-icon fa fa-align-right"></i>
				<span class="menu-text"> Right to Left </span>

				<i class="menu-expand"></i>
			</a>
			<ul class="submenu">
				<li>
					<a>
						<span class="menu-text">RTL</span>
						<label class="pull-right margin-top-10">
                                        <input id="rtl-changer" class="checkbox-slider slider-icon colored-primary" type="checkbox">
                                        <span class="text"></span>
                                    </label>
					</a>
				</li>
				<li>
					<a href="index-rtl-ar.html">
						<span class="menu-text">Arabic Layout</span>
					</a>
				</li>

				<li>
					<a href="index-rtl-fa.html">
						<span class="menu-text">Persian Layout</span>
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
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="fa fa-home"></i>
                            <a href="/Admin/Index/index">主页</a>
                        </li>
                        <li class="active">修改密码</li>
                    </ul>
                </div>
                <!-- /Page Breadcrumb -->
                <!-- Page Header -->
                <div class="page-header position-relative">
                    <!--<div class="header-title">
                        <h1>
                            Forms
                            <small>
                                <i class="fa fa-angle-right"></i>
                                Layouts
                            </small>
                        </h1>
                    </div>-->
                    <!--Header Buttons-->
                    <div class="header-buttons">
                        <a class="sidebar-toggler" href="#">
                            <i class="fa fa-arrows-h"></i>
                        </a>
                        <a class="refresh" id="refresh-toggler" href="">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a class="fullscreen" id="fullscreen-toggler" href="#">
                            <i class="glyphicon glyphicon-fullscreen"></i>
                        </a>
                    </div>
                    <!--Header Buttons End-->
                </div>
                <!-- /Page Header -->
                <!-- Page Body -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget">
                                        <div class="widget-header bordered-bottom bordered-palegreen">
                                            <span class="widget-caption">修改密码</span>
                                        </div>
                                        <div class="widget-body">
                                            <div>
                                                <form class="form-horizontal form-bordered" role="form" onsubmit="return false;">
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">账号</label>
                                                        <div class="col-sm-7 text-align-left control-label">
                                                            <?php echo $data['user']; ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">输入新密码</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" name="password" class="form-control" placeholder="输入新密码">
                                                        </div>
                                                        <div class="col-md-3 text-align-left control-label">
                                                        	<span>密码6~20位</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label no-padding-right">确认新密码</label>
                                                        <div class="col-sm-7">
                                                            <input type="password" class="form-control" placeholder="确认密码请保持与新密码一致" name="confirmPassword">
                                                        </div>
                                                        <div class="col-md-3 text-align-left control-label">
                                                        	<span>与新密码保持一致</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-palegreen">提交</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
    <!--Google Analytics::Demo Only-->
    <script>
    $(function(){
    	$("button[type='submit']").on('click',function(){
    		var password = $("input[name='password']").val();
    		var confirmPassword = $("input[name='confirmPassword']").val();
    		
    		//验证密码与确认密码是否一致
    		if(password != confirmPassword){
    			alert('确认密码与密码不一致');
    			return false;
    		}
    		
    		var formData = new FormData();
    		formData.append('password', password);
    		
    		$.ajax({
    			url: '/Admin/Admin/ajaxEditPassword',
    			type: 'post',
    			data: formData,
    			dataType: 'json',
    			cache: false,
	    		processData: false,
	    		contentType: false,
	    		success:function (res){
	    			if(res.code == 200){
	    				alert('数据提交成功');
	    				window.location.href = '/Admin/Index/index'
	    			}
	    			else{
	    				alert(res.msg);
	    			}
	    		}
    		})
    		
    		return false;
    	})
    })

    </script>
</body>
<!--  /Body -->
</html>
