<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言头部</title>
	<style type="text/css">
body{background:#5bacb6;}/*#778899;*/
   h1{font-size:34px; color:white;position: relative;left: 10%;margin-top:30px;margin-bottom: 0;}
   .welcome{color: #E0FFFF;position:absolute;top:50px;right: 0px;}
   .logo img{position:absolute; top: 10px;left: 20px; height: 80px;}
  /*#main{position: absolute;left: 0;top:63px;text-decoration: blink;color: white;}*/
  #main{text-decoration: blink;color: white;}

	</style>

</head>
<body>
	<h1 >忘穿时空</h1>
	 <p class="logo"><a href="__APP__/Main/main" target="_blank"><img src="__PUBLIC__/Images/logo.png" id="logo" alt="忘穿时空" title="忘穿时空"></a></p><!--logo的图片-->

	<p class="welcome"><a id="main" href="__APP__/Main/main" target="_blank">首页</a>&nbsp;&nbsp;&nbsp;欢迎你<b> <?php echo (session('username')); ?> </b><a href="__APP__/Login/doLogout" target="_top">退出</a></p><!-- _top打开时忽略所有的框架 -->
</body>
</html>