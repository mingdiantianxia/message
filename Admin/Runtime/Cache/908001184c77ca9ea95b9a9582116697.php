<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去--><!DOCTYPE HTML><html><head><meta charset="utf-8"><meta name="renderer" content="webkit|ie-comp|ie-stand"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" /><meta http-equiv="Cache-Control" content="no-siteapp" /><LINK rel="Bookmark" href="/favicon.ico" ><LINK rel="Shortcut Icon" href="/favicon.ico" /><!--[if lt IE 9]><script type="text/javascript" src="lib/html5.js"></script><script type="text/javascript" src="lib/respond.min.js"></script><script type="text/javascript" src="lib/PIE_IE678.js"></script><![endif]--><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/H-ui.min.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/H-ui.admin.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/lib/Hui-iconfont/1.0.7/iconfont.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/lib/icheck/icheck.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/skin/default/skin.css" id="skin" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/Admin/static/h-ui/css/style.css" /><!--[if IE 6]><script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script><script>DD_belatedPNG.fix('*');</script><![endif]--><!--/meta 作为公共模版分离出去--><title>修改留言 - 留言管理</title><meta name="keywords" content=""><meta name="description" content=""></head><body><article class="page-container"><form action="__URL__/doUpMess" enctype="multipart/form-data" method="post" class="form form-horizontal" id="form-article-add"><div class="row cl"><label class="form-label col-xs-4 col-sm-2">留言用户：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value='<?php echo ($list['uname']); ?>' placeholder="" id="" name="uname"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>留言标题：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value='<?php echo ($list['title']); ?>' placeholder="" id="" name="title"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">简略标题：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value="" placeholder="" id="" name=""></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>分类栏目：</label><div class="formControls col-xs-8 col-sm-9"><span class="select-box"><select name="" class="select"><option value="0">全部栏目</option><option value="1">新闻资讯</option><option value="11">├行业动态</option><option value="12">├行业资讯</option><option value="13">├行业新闻</option></select></span></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文章类型：</label><div class="formControls col-xs-8 col-sm-9"><span class="select-box"><select name="" class="select"><option value="0">全部类型</option><option value="1">帮助说明</option><option value="2">新闻资讯</option></select></span></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">排序值：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value="0" placeholder="" id="" name=""></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">关键词：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value="" placeholder="" id="" name=""></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">留言简介：</label><div class="formControls col-xs-8 col-sm-9"><textarea name="content" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea><p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">文章来源：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" class="input-text" value="0" placeholder="" id="" name=""></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">允许评论：</label><div class="formControls col-xs-8 col-sm-9 skin-minimal"><div class="check-box"><input type="checkbox" id="checkbox-pinglun"><label for="checkbox-pinglun">&nbsp;</label></div></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">评论开始日期：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{$dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">评论结束日期：</label><div class="formControls col-xs-8 col-sm-9"><input type="text" onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'#F{$dp.$D(\'datemin\')}'})" id="datemax" class="input-text Wdate"></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">使用独立模版：</label><div class="formControls col-xs-8 col-sm-9 skin-minimal"><div class="check-box"><input type="checkbox" id="checkbox-moban"><label for="checkbox-moban">&nbsp;</label></div><button onClick="mobanxuanze()" class="btn btn-default radius ml-10">选择模版</button></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">图片附件：</label><div class="formControls col-xs-8 col-sm-9"><div class="uploader-thum-container"><div id="fileList" class="uploader-list"></div><div id="filePicker">选择图片</div><br/><button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button></div></div></div><div class="row cl"><label class="form-label col-xs-4 col-sm-2">文章内容：</label><div class="formControls col-xs-8 col-sm-9"><script id="editor"  name="content" type="text/plain" style="width:100%;height:400px;"><?php echo ($list['content']); ?></script></div></div><div class="row cl"><div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2"><input type="hidden" name="id" value='<?php echo ($list['id']); ?>'/><button onClick="article_save_submit();get_EditorContenTxt();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>&nbsp;
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>&nbsp;
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button></div></div></form></article><!--_footer 作为公共模版分离出去--><script type="text/javascript" src="__PUBLIC__/Admin/lib/jquery/1.9.1/jquery.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/layer/2.1/layer.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/icheck/jquery.icheck.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/jquery.validation/1.14.0/messages_zh.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/static/h-ui/js/H-ui.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/static/h-ui/js/H-ui.admin.js"></script><!--/_footer /作为公共模版分离出去--><!--请在下方写此页面业务相关的脚本--><script type="text/javascript" src="__PUBLIC__/Admin/lib/My97DatePicker/WdatePicker.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/webuploader/0.1.5/webuploader.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"></script><script type="text/javascript" src="__PUBLIC__/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script><script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	
	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;

	var uploader = WebUploader.create({
		auto: true,
		swf: '__PUBLIC__/Admin/lib/webuploader/0.1.5/Uploader.swf',
	
		// 文件接收服务端。
		server: 'fileupload.php',
	
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',
	
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb( file, function( error, src ) {
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
	
			$img.attr( 'src', src );
		}, thumbnailWidth, thumbnailHeight );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function( file ) {
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});
	
	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });
	
	var ue = UE.getEditor('editor');//实例化编辑器
	
});




    //UEDITOR_HOME_URL、config、all这三个顺序不能改变(绝对路径)
    //window.UEDITOR_HOME_URL = "/ThinkPHP/Public/Ueditor/";    
    
    //实例化编辑器
    var ue = UE.getEditor('editor');
    function insertHtml() {
        var value = prompt('插入html代码', '');
        ue.execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }
    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }
    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }
    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    
    //提交方法
    function submitEditor()    {
        //此处以非空为例
        if(ue.hasContents()){
            ue.sync();       //同步内容
            document.MyForm.submit();
        }
    }    
    
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            domUtils.removeAttributes(btn, ["disabled"]);
        }
    }
 

function get_EditorContenTxt(){
 $('#editor').val()=ue.getContentTxt();
}

</script><!--/请在上方写此页面业务相关的脚本--></body></html>