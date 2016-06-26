<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML><html><head><meta charset="utf-8"><meta name="renderer" content="webkit|ie-comp|ie-stand"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" /><meta http-equiv="Cache-Control" content="no-siteapp" /><!--[if lt IE 9]><script type="text/javascript" src="__PUBLIC__/Admin/lib/html5.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/respond.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/PIE_IE678.js"></script><![endif]--><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/H-ui.min.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/H-ui.admin.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/lib/Hui-iconfont/1.0.7/iconfont.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/lib/icheck/icheck.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/skin/default/skin.css" id="skin" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/style.css" /><!--[if IE 6]><script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script><script>DD_belatedPNG.fix('*');</script><![endif]--><title>留言列表</title></head><body><nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 留言管理 <span class="c-gray en">&gt;</span> 留言列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav><div class="page-container"><div class="text-c"><span class="select-box inline"><select name="" class="select"><option value="0">全部分类</option><option value="1">分类一</option><option value="2">分类二</option></select></span> 日期范围：
		<input type="text" onfocus="WdatePicker({maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;"><input type="text" name="" id="searchTitle" placeholder=" 留言名称" style="width:250px" class="input-text"><button name="" id="search" class="btn btn-success" type="submit" ><i class="Hui-iconfont">&#xe665;</i> 搜留言</button></div><div class="cl pd-5 bg-1 bk-gray mt-20"><span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> &nbsp;
	<a class="btn btn-primary radius" data-title="添加留言" _href="article-add.html" onclick="Hui_admin_tab(this)" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加留言</a></span><span class="r">共有数据：<strong>54</strong> 条</span></div><div class="mt-20"><table class="table table-border table-bordered table-bg table-hover table-sort"><thead><tr class="text-c"><th width="25"><input type="checkbox" name="" value=""></th><th width="80">ID</th><th>标题</th><th width="120">附件名</th><th width="80">用户</th><th width="120">更新时间</th><th width="75">浏览次数</th><th width="60">发布状态</th><th width="120">操作</th></tr></thead><tbody><?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c"><td><input type="checkbox" value="" name=""></td><td><?php echo ($vo["id"]); ?></td><td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?php echo ($vo["title"]); ?></u></td><td><?php echo ($vo["filename"]); ?></td><td><?php echo ($vo["uname"]); ?></td><td><?php echo (date('Y-m-d h:i:s',$vo["time"])); ?></td><td>21212</td><td class="td-status"><span class="label label-success radius">已发布</span></td><td class="f-14 td-manage"><a style="text-decoration:none" onClick="article_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a><a style="text-decoration:none" class="ml-5" onClick="article_edit('留言编辑','__URL__/upMess?id=<?php echo ($vo["id"]); ?>',<?php echo ($vo["id"]); ?>)" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a><a style="text-decoration:none" class="ml-5" onClick="article_del(this,<?php echo ($vo["id"]); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td></tr><?php endforeach; endif; ?></tbody></table></div></div><script type="text/javascript" src="__PUBLIC__/Admin/lib/jquery/1.9.1/jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/layer/2.1/layer.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/My97DatePicker/WdatePicker.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/static/h-ui/js/H-ui.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/static/h-ui/js/H-ui.admin.js"></script><script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 不参与排序的列
	]
});

/*资讯-添加*/
function article_add(title,url,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
	$(obj).parents("tr").remove();
	$.get('__URL__/delMess',{'id':id},function(data){
	if(data=='成功'){
		layer.msg('已删除!',{icon:1,time:1000});
	}else{
		layer.msg('删除失败!',{icon:1,time:1000});
			}
			});
	});
}
/*资讯-审核*/
function article_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过','取消'], 
		shade: false,
		closeBtn: 0
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*资讯-下架*/
function article_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*资讯-发布*/
function article_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}


$(function(){
		$('#search').click(function() {
			var title=$('#searchTitle').val();
			// $.get('__URL__/messageSearch', {'title':title},function(data) {
			// 	alert(data);

			// });
			var url='__URL__/messageSearch?title='+title;
		var index = layer.open({
		type: 2,
		title: '查询留言',
		content: url
	});
	layer.full(index);

		});
});


</script></body></html>