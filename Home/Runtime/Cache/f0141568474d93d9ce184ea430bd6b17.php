<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
	<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>

	<style type="text/css">
	</style>

<script type="text/javascript">
			$(function(){
							$('#login').click(function() {
								$('form[name="myForm"]').submit();	
							});	
									
							$('button[class="barter_btn"]').click(function() {
								window.location='__APP__/Register/reg';
							});
						
						});

$(function() {
	$('#login').click(function() {
		var name_state = $('#name');
		var psd_state = $('#psd');
		var code_state = $('input[name="code"]');
		var code = $('input[name="code"]').val();
		var name = $('#name').val();
		var psd = $('#psd').val();
		if (name == '') {
			name_state.parent().next().next().css("display", "block");
			return false;
		} else if (psd == '') {
			name_state.parent().next().next().css("display", "none");
			psd_state.parent().next().next().css("display", "block");
			return false;
		} else if(code ==''){
			name_state.parent().next().next().css("display", "none");
			psd_state.parent().next().next().css("display", "none");
			code_state.parent().next().next().css("display", "block");
		}else {
			name_state.parent().next().next().css("display", "none");
			psd_state.parent().next().next().css("display", "none");
			code_state.parent().next().next().css("display", "none");
			$('.login').submit();
		}
	});
})

function ok_or_errorBylogin(l) {
	var content = $(l).val();
	if (content != "") {
		$(l).parent().next().next().css("display", "none");
	}
}



// function barter_btn(bb) {
// 	//fadeOut() 方法逐渐改变被选元素的不透明度，从可见到隐藏（褪色效果）。
// 	//fadeIn() 方法逐渐改变被选元素的不透明度，从隐藏到可见（褪色效果）。
// 	//siblings()选取每个匹配元素的所有同级元素
// 	//trigger促发指定事件类型
// 	$(bb).parent().parent().fadeOut(1000);
// 	$(bb).parent().parent().siblings().fadeIn(2000);}
</script>
</head>

<body class="login_body">

<div class="login_div">
	<div class="col-xs-12 login_title">登录</div>

	<form class="login" action="__URL__/doLogin"  method="post" name="myForm"  >
		<div class="nav">
			<div class="nav login_nav">
				<div class="col-xs-4 login_username">
					用户名:
				</div>
				<div class="col-xs-6 login_usernameInput">
					<input type="text" name="username" id="name" value="" placeholder="&nbsp;&nbsp;用户名"  onblur="javascript:ok_or_errorBylogin(this)" />
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>
			<div class="nav login_psdNav">
				<div class="col-xs-4">
					密&nbsp;&nbsp;&nbsp;&nbsp;码:
				</div>
				<div class="col-xs-6">
					<input type="password" name="password" id="psd" value="" placeholder="&nbsp;&nbsp;密码" onBlur="javascript:ok_or_errorBylogin(this)" />
				</div>

				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>

			<div class="nav code">
				<div class="col-xs-4 login_code">
				     验证码:
				</div>
				<div class="col-xs-6 login_codeInput" >
					<input type="text" name="code"  value="" placeholder="&nbsp;&nbsp;验证码" onBlur="javascript:ok_or_errorBylogin(this)" />
					<img src='__APP__/Public/code?w=50&h=34&l=4'  onclick='this.src=this.src+"?"+Math.random()'/><br/>
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>

			<div class="col-xs-12 login_btn_div">
				<input type="submit" class="sub_btn" value="登录" id="login" />
			</div>
		</div>
	</form>

	<div class="col-xs-12 barter_btnDiv">
		<button class="barter_btn" onClick="javascript:barter_btn(this)">没有账号?前往注册</button>
	</div>
</div>

</body>
</html>