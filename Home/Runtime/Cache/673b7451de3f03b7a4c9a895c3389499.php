<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言表单</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<script type="text/javascript">
function subCheck(){
	 if(event.ctrlKey&&event.keyCode==13){//ctrl+enter键提交
			document.getElementById("myForm").submit();
	 }
}
</script>


<style type="text/css">
body{background:#E0E0E0;}
/*.wrap{ width:600px; height:700px; margin:auto;border:7px solid #C076EB;}*/
.form_wrap{ width:530px; height:450px; margin:auto; /* border:7px solid #C076EB;  */
-webkit-transition: all 1s ease-in-out .3s;
 -moz-transition: all 1s ease-in-out .3s;
 -o-transition: all 1s ease-in-out .3s;
 transition: all 1s ease-in-out .3s;}
.wrap_before{
	position: absolute;
	width: 530px;
	height: 316px;
    top:6px;
	margin:auto;
	background-size: 530px 316px;
	background-image: url(__PUBLIC__/Images/before.png);
	background-repeat: no-repeat;
	-webkit-transition: all 1s ease-in-out .3s;
 -moz-transition: all 1s ease-in-out .3s;
 -o-transition: all 1s ease-in-out .3s;
 transition: all 1s ease-in-out .3s;
}
.wrap_after {
	position:absolute; 
top:190px;
	background:url(__PUBLIC__/Images/after.png);
	width:530px;
	height: 260px;
	background-size:530px 260px;
	background-repeat: no-repeat;
	-webkit-transition: all 1s ease-in-out .3s;
 -moz-transition: all 1s ease-in-out .3s;
 -o-transition: all 1s ease-in-out .3s;
 transition: all 1s ease-in-out .3s;
	}

.msg{
	overflow:hidden;
	width:430px;
	height:250px;
	position: relative;
 	top:170px;
	margin: auto;
	background: url(__PUBLIC__/Images/letter_bg.png);
	-webkit-transition: all 1s ease-in-out .3s;
 -moz-transition: all 1s ease-in-out .3s;
 -o-transition: all 1s ease-in-out .3s;
 transition: all 1s ease-in-out .3s;
}
.form_wrap:hover{ height:652px;}
.form_wrap:hover .wrap_after{top:406px;}
.form_wrap:hover .wrap_before{top:222px;}
.form_wrap:hover .msg{ height:448px;top:0px;}

.liuyan{width:385px; height:373px; margin:auto;
position:relative; top:2%; 
border:2px solid  #E0D2B6;}
.liuyanx{
	width: 29%;
	/*background: rgb(0, 255, 143);*/
	height: 7%;
	display: block;
	position:relative;
	left:6%;
	font-weight: bold;
	font-size: 120%;
	color: #C3BC2E;
}
.lytitle,/*.lyusername,*/.lyfile,.liuyan textarea{
	color: #7c7873;
	background: none;
	
	border:1px solid #E0D2B6;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	
	-moz-box-shadow: inset 0px 0px 1px #726959;
	-webkit-box-shadow:  inset 0px 0px 1px #b3a895;
	box-shadow:  inset 0px 0px 1px #b3a895;
	width: 85%;
	height: 6%;
	position: relative;
	left: 7%;
}
textarea[name=content]{height:50%;}
.lytitle:focus,/*.lyusername:focus,*/.liuyan textarea:focus{
	background:#FFF; color:#000;}
.anjian{
	width: 23%;
	height: 9%;
	border-radius: 7px;
	position: relative;
	left: 24%;
	top: 5px;
	font-size: 120%;
	background-color: #EDE6D6;
	border: 1px outset #D3DD60;
	-webkit-transition: all 1ms ease-in-out 0s;
	-moz-transition: all 1ms ease-in-out 0s;
	-o-transition: all 1ms ease-in-out 0s;
	transition: all 1ms ease-in-out 0s;
	-ms-transition: all 1ms ease-in-out 0s;
}
	.msg{ z-index:1;}
	  .form_wrap:hover  .msg{z-index:3;}
	.wrap_after{ z-index:2;}
.anjian:hover{
	color: #F16D08;
	font-size: 130%;
	font-weight: bold;
	border: 3px outset #D3DD60;
	background-color: #E2FAE6;
}

</style>

</head>
<body>
	<div class="wrap">
    <div class="form_wrap">
      <div class="wrap_before"></div>
<form action="__APP__/Message/doMess" method="post" enctype="multipart/form-data" id="myForm" onkeydown="subCheck();" >
 
    <fieldset class="msg">
     
     <legend style="font-size:200%; font-weight: bold;color:#6FCD42; font-style:italic;" >你想让世界知道的事：</legend>
     <div class="liuyan">
     <i class="liuyanx" >分享标题：</i>
    
    <input class="lytitle" name="title" type="text" value="爱好"  />
    <br />
  <!--    <i class="liuyanx">留&nbsp;言&nbsp;者：</i>
     <input class="lyusername" name="name" type="text" value="猪头"   /> -->
     <i class="liuyanx">图　　片：</i>
     <input class="lyfile" type="file" name="filename" /><br />
     <i class="liuyanx">分享内容：</i>
     <textarea class="lycontent" name="content" rows="14" >吃饱了睡</textarea>
  <br/>
     
     
    <input class="anjian" type="submit" value="发送" / >
    <input class="anjian" type="reset" value="重置"  />
    
    </div>
 
    </fieldset>
    </form>
    <div class="wrap_after"></div>
</div></div>


</body>
</html>