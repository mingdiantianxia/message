//下面是点击换内容的js
	$(document).ready(function(e) {
   //      $("#picList ul li").click(function(){var i=$(this).index();
			// $("#picContent .container").siblings().hide();
			
		 //    $("#picContent .container:eq("+i+")").show();

			// })
			// $("#picContent .container").siblings().hide();
			
		 //    $("#picContent .container:eq("+0+")").show();
//		//分享代码
//		//分享腾讯微博
//		var $lifirst=$("#showr ul li a:eq(0)");
//		$lifirst.click(function(){var _t = encodeURI(document.title);  var _url = encodeURI(window.location); var _appkey = '333cf198acc94876a684d043a6b48e14'; var _site = encodeURI; var _pic = ''; var _u = 'http://v.t.qq.com/share/share.php?title='+_t+'&url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic; window.open( _u,'转播到腾讯微博', 'width=700, height=580, top=180, left=320, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );  })
//		//分享新浪微博
//		var $lisecond=$("#showr ul li a:eq(1)");
//		$lisecond.attr("href","javascript:void((function(s,d,e){try{}catch(e){}var%20f='http://v.t.sina.com.cn/share/share.php?',u=d.location.href,p=['url=',e(u),'&title=',e(d.title),'&appkey=1392530042'].join('');function a(){if(!window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=620,height=450,left=',(s.width-620)/2,',top=',(s.height-450)/2].join('')))u.href=[f,p].join('');};if(/Firefox/.test(navigator.userAgent)){setTimeout(a,0)}else{a()}})(screen,document,encodeURIComponent));");
//				var $lithird=$("#showr ul li a:eq(2)");
//            $lithird.attr("href","javascript:window.open('http://share.renren.com/share/buttonshare.do?link='+encodeURIComponent(document.location.href)+'&amp;title='+encodeURIComponent(document.title));void(0)");
//			var $lifourth=$("#showr ul li a:eq(3)");
//	$lifourth.attr("href","javascript:d=document;t=d.selection?(d.selection.type!='None'?d.selection.createRange().text:''):(d.getSelection?d.getSelection():'');void(kaixin=window.open('http://www.kaixin001.com/~repaste/repaste.php?&rurl='+escape(d.location.href)+'&rtitle='+escape(d.title)+'&rcontent='+escape(d.title),'kaixin'));kaixin.focus();");
      //轮换图
 function DY_scroll(wraper,prev,next,img,speed,or)
 { 
  var wraper = $(wraper);
  var prev = $(prev);
  var next = $(next);
  var fWrapbg=$('#fWrapbg');
  var img = $(img).find('ul');
  var w = img.find('li').outerWidth(true);
  var s = speed;
  next.click(function()
       {
        img.animate({'margin-left':-w},function()
                  {
                   
                   img.find('li').eq(0).appendTo(img);//将第一项插入到图片序列最后一项
                   img.css({'margin-left':0});
                   });
        });
  prev.click(function()
       {
       img.css({'margin-left':-w});
        img.find('li:last').prependTo(img);
       
        img.animate({'margin-left':0});
        });
  if (or == true)
  {
   ad = setInterval(function() { next.click();},s*1000);
   wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});

  }
 }
 DY_scroll('.img-scroll','.prev','.next','.img-list',5,true);// true为自动播放，不加此参数或false就默认不自动

    });
	
