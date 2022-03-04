<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"E:\wamp64\www\beaba\public/../application/admin\view\login\index.html";i:1573788430;}*/ ?>
﻿<!DOCTYPE html>
<html>
	<!--Head-->

	<head>
		<meta charset="utf-8" />
		<title>后台系统入口</title>

		<meta name="description" content="login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="/static/beyondAdmin/img/favicon.png" type="image/x-icon">

		<!--Basic Styles-->
		<link href="/static/beyondAdmin/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/font-awesome.min.css" rel="stylesheet" />

		<!--Beyond styles-->
		<link id="beyond-link" href="/static/beyondAdmin/css/beyond.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/demo.min.css" rel="stylesheet" />
		<link href="/static/beyondAdmin/css/animate.min.css" rel="stylesheet" />
		<link id="skin-link" href="" rel="stylesheet" type="text/css" />

		<!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
		<script src="/static/beyondAdmin/js/skins.min.js"></script>
	</head>
	<!--Head Ends-->
	<!--Body-->

	<body>
		<div class="login-container animated fadeInDown">
			<form class="loginbox bg-white" onsubmit="return false;">
				<div class="loginbox-title">后台管理系统入口</div>
				<div class="loginbox-textbox">
					<hr />
				</div>
				<div class="loginbox-textbox">
					<input type="text" class="form-control" name="username" placeholder="输入账号" />
				</div>
				<div class="loginbox-textbox">
					<input type="password" class="form-control" name="password" placeholder="输入密码" />
				</div>
				<div class="loginbox-textbox">
					<input type="text" class="form-control" name="verify" placeholder="输入验证码" />
				</div>
				<div class="loginbox-textbox">
					<img src="/Admin/Login/getVerify" id="verify" alt="验证码" onclick="this.src='/Admin/Login/getVerify?'+Math.random()" />
				</div>
				<div class="loginbox-submit">
					<input type="submit" class="btn btn-primary btn-block" onclick="sendData()" value="登录">
				</div>
			</form>
		</div>

		<!--Basic Scripts-->
		<script src="/static/beyondAdmin/js/jquery-2.0.3.min.js"></script>
		<script src="/static/beyondAdmin/js/bootstrap.min.js"></script>
	</body>
	<script>
		function sendData(){
			var username = $("input[name='username']").val();
			var password = $("input[name='password']").val();
			var verify = $("input[name='verify']").val();
			console.log(username);
			console.log(password);
			console.log(verify);
			var formData = new FormData();
			formData.append('username', username);
			formData.append('password', password);
			formData.append('verify', verify);
			$.ajax({
				url: '/Admin/Login/ajaxLogin',
				data: formData,
				type: 'post',
				dataType: 'json',
				cache: false,
	    		processData: false,
	    		contentType: false,
				success:function(res){
					if(res.code == 200){
						//成功跳转
						window.location.href = '/Admin/Index/index';
					}
					else{
						alert(res.msg);
						$('#verify').attr('src', '/Admin/Login/getVerify?'+Math.random())
					}
				}
			});
		}
	</script>
</html>