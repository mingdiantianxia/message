<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>注册</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" />
		<!-- <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reg.css" /> -->
		<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript">
$(function(){
				var error =new Array();
				$('input[name="username"]').blur(function(){//当元素失去焦点时发生 blur 事件
				var username = $(this).val();
				$.get('__URL__/checkName',{'username':username},function(data){
				if(data=='不允许'&&$('#umessage').val()==null){
				error['username']=1;
			$('input[name="username"]').after('<p id="umessage" style="color:red">该用户名已经注册</p>');
			$('#name_r').parent().next().css("display", "none");
			$('#name_r').parent().next().next().css("display", "block");
			}else if (data=='不允许'&&$('#umessage').val()!==null) {
					$('#name_r').parent().next().css("display", "none");
					$('#name_r').parent().next().next().css("display", "block");
				}else if(data=='错误'){
				error['username']=1;
				$('#umessage').remove();
			$('#name_r').parent().next().css("display", "none");
			$('#name_r').parent().next().next().css("display", "block");
				}else if(data=='允许'){
						error['username']=0;
						$('#umessage').remove();
					$('#name_r').parent().next().css("display", "block");
					$('#name_r').parent().next().next().css("display", "none");
								}
										
					});
			});
							
		$('button[class="barter_registerBtn"]').click(function() {
								window.location='__APP__/Login/login';
							});
		//提交表单
		$('#register').click(function(){
				var name_r_state = $('#name_r');
				var psd_r_state = $('#psd_r');
				var affirm_psd_state = $('#affirm_psd');
				var name_r = $('#name_r').val();
				var psd_r = $('#psd_r').val();
				var affirm_psd = $('#affirm_psd').val();
				if(error['username']==1){
					alert('注册信息有误');
						return false;
				}else if (name_r == '') {
					name_r_state.parent().next().next().css("display", "block");
					return false;
				} else if (psd_r == '') {
					psd_r_state.parent().next().next().css("display", "block");
					return false;
				} else if (affirm_psd == '') {
					affirm_psd_state.parent().next().next().css("display", "block");
					return false;
				} else if (psd_r != affirm_psd) {
					return false;
				} else{				
				$('form[name="myForm"]').submit();
					}});
			


});


function ok_or_errorByRegister(r) {
	var affirm_psd = $("#affirm_psd");
	var psd_r = $("#psd_r");
	var affirm_psd_v = $("#affirm_psd").val();
	var psd_r_v = $("#psd_r").val();
	var content = $(r).val();
	if (content == "") {
		$(r).parent().next().next().css("display", "block");
		return false;
	} else {
		$(r).parent().next().css("display", "block");
		$(r).parent().next().next().css("display", "none");
		if (psd_r_v == "") {
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "block");
			return false;
		}
		if (affirm_psd_v == "") {
			$(affirm_psd_v).parent().next().css("display", "none");
			$(affirm_psd_v).parent().next().next().css("display", "none");
			$(affirm_psd_v).parent().next().next().css("display", "block");
			return false;
		}
		if (psd_r_v == affirm_psd_v) {
			$(affirm_psd).parent().next().css("display", "none");
			$(affirm_psd).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(affirm_psd).parent().next().css("display", "block");
			$(psd_r).parent().next().css("display", "block");
		} else {
			$(affirm_psd).parent().next().css("display", "none");
			$(affirm_psd).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "none");
			$(psd_r).parent().next().next().css("display", "none");
			$(psd_r).parent().next().css("display", "block");
			$(affirm_psd).parent().next().next().css("display", "block");
			return false;
		}
	}
}
/*function barter_btn(bb) {
	//fadeOut() 方法逐渐改变被选元素的不透明度，从可见到隐藏（褪色效果）。
	//fadeIn() 方法逐渐改变被选元素的不透明度，从隐藏到可见（褪色效果）。
 	//siblings()选取每个匹配元素的所有同级元素
 	//trigger促发指定事件类型
	$(bb).parent().parent().fadeOut(1000);
	$(bb).parent().parent().siblings().fadeIn(2000);
}*/

</script>
	</head>
	<body>
	
<div class="register_body">
	<div class="col-xs-12 register_title">注册</div>
	<form  class="register" action="__URL__/doReg"  method="post" name="myForm">
		<div class="nav">
			<div class="nav register_nav">
				<div class="col-xs-4">
					用&nbsp; 户 名:
				</div>
				<div class="col-xs-6">
					<input type="text" name="username" id="name_r" value="" placeholder="&nbsp;&nbsp;用户名" onBlur="javascript:ok_or_errorByRegister(this)" />
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>
			<div class="nav register_psdnav">
				<div class="col-xs-4">
					密 &nbsp;　 码:
				</div>
				<div class="col-xs-6">
					<input type="password" name="password" id="psd_r" value="" placeholder="&nbsp;&nbsp;密码" onBlur="javascript:ok_or_errorByRegister(this)" />
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>
			<div class="nav register_affirm">
				<div class="col-xs-4">
					确认密码:
				</div>
				<div class="col-xs-6">
					<input type="password" name="repassword" id="affirm_psd" value="" placeholder="&nbsp;&nbsp;确认密码" onBlur="javascript:ok_or_errorByRegister(this)" />
				</div>
				<div class="col-xs-1 ok_gou">
					√
				</div>
				<div class="col-xs-1 error_cuo">
					×
				</div>
			</div>

	<div class="nav r_sex">
			<div class="col-xs-4 register_sex">
			      性 &nbsp;　 别:
			</div>
			<input type="radio" name="sex" value="1" class="radio" />　男
			<input type="radio" name="sex" value="0" class="radio" />　女<br />
	</div>

		<div class="nav r_code">
				<div class="col-xs-4 register_code">
				     验 &nbsp;证 码:
				</div>
				<div class="col-xs-6 register_codeInput" >
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


			<div class="col-xs-12 register_btn_div">
				<input type="submit" class="sub_btn" value="注册" id="register" />
			</div>
		</div>
	</form>
	<div class="col-xs-12 barter_register">
		<button class="barter_registerBtn" onClick="javascript:barter_btn(this)" style="">已有秘籍?返回登录</button>
	</div>
</div>

	</body>
</html>