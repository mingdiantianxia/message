<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>留言页</title>

	<style type="text/css">
				b{color:#0072bc;font-weight:bold; }
				body{ /*background-image: url(__PUBLIC__/Images/002.jpg); background-repeat:repeat; */  background-color: #D6D6D6; }
				div{margin-top:10px;margin-left: 10px;}
				img{max-width:25%; }
	</style>

</head>
<body >
	<?php if(is_array($list)): foreach($list as $key=>$vo): ?><div><b>留 言 人：</b><?php echo ($vo["uname"]); ?></div>
		<div><b>留言时间：</b><?php echo (date('Y-m-d h:i:s',$vo["time"])); ?></div>
		<div><b>分享标题：</b><?php echo ($vo["title"]); ?></div>
		<div><b>分享内容：</b><?php echo ($vo["content"]); ?></div>
		<div><b>图	&nbsp;&nbsp; 片：</b><?php echo ($vo["filename"]); ?><br/>
		<img src='__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>'/>
		</div>
		
		<hr/><?php endforeach; endif; ?>
	<?php echo ($show); ?>
</body>
</html>