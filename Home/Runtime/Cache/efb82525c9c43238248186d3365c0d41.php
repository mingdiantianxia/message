<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>繁空缘</title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/nav.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/reset.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/top.css">
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/water_2.css">
<LINK  type='text/css' rel='stylesheet' href="__PUBLIC__/Css/Home/skin2.css" />
<link href="__PUBLIC__/Css/Home/favicon.ico" rel="icon"  type="image/x-icon"/>
<link rel="shortcut icon" href="__PUBLIC__/Css/Home/favicon.ico" type="image/x-icon"/>
<link href="favicon.ico" rel="icon"  type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>




</head>
<script type="text/javascript">
var waitting = 1;              
var secondLeft = waitting;              
var timer;                              
var sourceObj;              
var number;              
function getObject(objectId)//获取id的函数               
    {              
        if(document.getElementById && document.getElementById(objectId)) {              
        // W3C DOM              
        return document.getElementById(objectId);              
        } else if (document.all && document.all(objectId)) {              
        // MSIE 4 DOM              
        return document.all(objectId);              
        } else if (document.layers && document.layers[objectId]) {              
        // NN 4 DOM.. note: this won't find nested layers              
        return document.layers[objectId];              
        } else {              
        return false;              
        }              
    }              
function SetTimer()//主导航时间延迟的函数              
    {              
        for(j=1; j <10; j++){              
            if (j == number){              
                if(getObject("mm"+j)!=false){              
                    getObject("mm"+ number).className = "menuhover";              
                    getObject("mb"+ number).className = "";              
                }              
            }              
            else{              
                 if(getObject("mm"+j)!=false){               
                    getObject("mm"+ j).className = "";              
                    getObject("mb"+ j).className = "hide";               
                }              
            }              
        }              
    }              
function CheckTime()//设置时间延迟后              
    {              
        secondLeft--;              
        if ( secondLeft == 0 )              
        {              
        clearInterval(timer);                                      
        SetTimer();                      
        }              
    }              
function showM(thisobj,Num)//主导航鼠标滑过函数,带时间延迟              
    {              
        number = Num;              
        sourceObj = thisobj;              
        secondLeft = 1;              
        timer = setTimeout('CheckTime()',100);              
    }              
function OnMouseLeft()//主导航鼠标移出函数,清除时间函数              
    {              
        clearInterval(timer);              
    }              
</script>
<body>
<span id="blank" >分割线</span>
<i><h1 align="center" style="z-index:1; position:absolute;top:30px;left:34%; font-size:400%; color:white">  世界因你而精彩</h1></i>
<a id="returnTop" href="javascript:;">回到顶部</a> 
<header>
<!--这是头部，包括logo，登陆，导航-->
<div id="top">

    <div class="clearfloat"></div>
    <!--清除浮动--> 
    <!--    导航start-->
  
 <div id="mainmenu_body"> 
 <!--  <div id="logoAndNav">  -->
    <!--logo及登录start-->
  
    <div id="log">
    <img src="__PUBLIC__/Images/logo.png" id="logo" alt="繁空缘" title="繁空缘"><!--logo的图片-->
      <div id="entry">
      <a href="__APP__/Login/login" target="_blank"  id="logon" title="登录">登录</a> 
      <strong>/</strong> 
      <a href="__APP__/Register/reg" target="_blank"  id="login" title="注册">注册</a> <!--登陆框--> 
      &nbsp;&nbsp;<a href="__ROOT__/Admin.php/Index/index" target="_blank"  id="admin" title="登录">管理员入口</a>  

        <!--logo及登录end
--> 
      </div>
    </div>
 <!--    </div> -->
<!--主导航开始-->
    <div id='mainmenu_top'> 
        <UL> 
        <LI><A id='mm1' onmouseover="showM(this,1)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>首页</A> </LI> 
        <LI><A id='mm2' onmouseover="showM(this,2)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>学习之路</A> </LI> 
        <LI><A id='mm3' onmouseover="showM(this,3)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>资源分享</A> </LI> 
        <LI><A id='mm4' onmouseover="showM(this,4)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>生活点滴</A> </LI> 
        <LI><A id='mm5' onmouseover="showM(this,5)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>岁月静好</A> </LI> 
        <LI><A id='mm6' onmouseover="showM(this,6)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>最新资讯</A> </LI> 
        <LI><A id='mm7' onmouseover="showM(this,7)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>产品展示</A> </LI> 
        <LI style="DISPLAY: none"><A id='mm8' onmouseover="showM(this,8)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>服务中心</A> </LI> 
        <LI><A id='mm9' onmouseover="showM(this,9)"; onmouseout="OnMouseLeft()"; href="javascript:;" target='_parent'>关于我们</A> </LI></UL>
    </div> 
<!--子导航导航开始-->
    <div id='mainmenu_bottom'> 
    
        <div class='mainmenu_rbg'>
         
            <UL class='hide' id='mb1'> 
            <LI><A href="__APP__/Index/index" target="_blank">发布图片留言</A> </LI> 
            <LI><A href="http://www.sgu.edu.cn/" target="_blank">韶关学院</A> </LI> 
            <LI><A href="__PUBLIC__/File/kuanjia.html" target="_blank">学习网站</A> </LI> 
            <LI><A href="http://www.w3school.com.cn/" target="_blank">w3school</A> </LI> 
            <LI><A href="http://www.runoob.com/" target="_blank">菜鸟教程</A> </LI> 
        </UL> 
            
            <UL class='hide' id='mb2'> 
            <LI style="DISPLAY: none"><A href="javascript:;" target='_parent'></A> </LI> 
            <LI><A href="javascript:;" target='_parent'>孤山幽径乌夜啼</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>道阻林深路已西</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>雪雨寒风炼身骨</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>不上重霄誓不栖</A> </LI> 
            </UL>
            
            <UL class='hide' id='mb3'> 
            <LI style="DISPLAY: none"><A href="javascript:;" target='_parent'></A> </LI> 
            <LI style="MARGIN-LEFT: 7px"><A href="javascript:;" target='_parent'>符玉璧合遣天兵</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>凯风撩烟沙场情</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>耀光濯城尸万里</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>赠换将军一世名</A> </LI> 
            </UL> 
            
            <UL class='hide' id='mb4'> 
            <LI style="DISPLAY: none; MARGIN-LEFT: 80px"><A href="javascript:;" target='_parent'></A> </LI> 
           <!--  <LI style="MARGIN-LEFT: 80px"><A href="javascript:;" target='_parent'>地狱幽冥断魂曲</A> </LI> 
            <LI><A href="javascript:;" target='_parent'>六道阎罗万事虚</A> </LI>  -->
            </UL> 
            
            <UL class='hide' id='mb5'> 
            <LI style="DISPLAY: none"><A href="javascript:;" target='_parent'></A> </LI> 
          <!--   <LI style="MARGIN-LEFT: 80px"><A href="javascript:;" target='_parent'>从今后不言愁</A> </LI> 
            <LI><A href="javascript:;">望穿秋水</A> </LI> 
            <LI><A href="javascript:;">相忘江湖</A> </LI>  -->
            </UL> 
            
            <UL class='hide' id='mb6'> 
            <LI style="DISPLAY: none"><A href="javascript:;" target='_parent'></A> </LI> 
            <!-- <LI style="MARGIN-LEFT: 160px"><A href="javascript:;" target='_parent'>念往事不忍回眸</A> </LI>  -->
            </UL> 

            <UL class='hide' id='mb7'> 
            <LI style="DISPLAY: none"><A href="javascript:;" target='_parent'></A> </LI> 
            <!-- <LI style="MARGIN-LEFT: 180px"><A href="javascript:;" target='_parent'>任春意满西楼</A> </LI>  -->
            </UL> 
            
            <UL class='hide' id='mb8' style="DISPLAY: none"> 
            <!-- <LI style="MARGIN-LEFT: 270px"><A href="javascript:;" target='_parent'>风雨濯星哞</A> </LI>  -->
            </UL> 
            
            <UL class='hide' id='mb9'> 
            <!-- <LI style="MARGIN-LEFT: 180px"><A href="javascript:;">霜丝染病头</A> </LI>  -->
            </UL> 
        <script src="__PUBLIC__/Js/main_nav.js"></script>
        </div>
    
    </div>

</div>

    <!--导航end-->
 
 
</div>


<!--轮换图-->
<div id="fWrap"><!--轮换图-->
  <div class="img-scroll">
    <span class="prev"><img src="__PUBLIC__/Images/toleft.gif" class="move"></span>
    <span class="next"><img src="__PUBLIC__/Images/toright.gif" class="move"></span>
    <div class="img-list">
        <ul>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (1).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (2).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (3).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (4).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (5).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (6).jpg"></li>
            <li><img  src="__PUBLIC__/Images/fwap/121100 (7).jpg"></li>
        </ul>
 
    </div>
   <div id="fWrapbg" ><img  src="__PUBLIC__/Images/fwap/121100 (1).jpg"></div>

</div>

  <div class="c"></div>
</div>
</header>

<!--内容start-->
<!--描述语言需要被设计-->
<article id="content">
<div class="container">
<!--被固定的图片-->
	<ul class="col">
  <!--    <li> 
    <div class="shadow">
        <a href="javascript:;" target="_blank">
    <img src="__PUBLIC__/Uploads/<?php echo ($list[0]['filename']); ?>"/></a>
    <div class="water_option">真人芭比娃娃</div>//描述语
    </div>
    </li>  -->
    </ul> 
    
    
	<ul class="col">
    </ul>

    <ul class="col">
    </ul>
    
    <ul class="col" style="margin-right:0">    
    </ul>

    


    
    	<a href="javascript:" class="loadMeinvMOre" id="loadMeinvMOre">加载更多</a>
	
</div>
</article>
<!--内容end-->
<br/>
<!--页脚-->
<footer style="clear:both;">
<center>copyright  2016 忘穿时空. All  rights  reserved</center>
</footer>
<script type="text/javascript">
var filename = new Array();
var uname = new Array();
var title = new Array();
  filename[0]='';
  uname[0]='';
  title[0]='';
  var i = 1;
</script>
<?php if(is_array($list)): foreach($list as $key=>$vo): ?><script type="text/javascript">
    filename[i]="<?php echo ($vo["filename"]); ?>";
    uname[i]='<?php echo ($vo["uname"]); ?>';
    title[i]='<?php echo ($vo["title"]); ?>';
   i++;
</script><?php endforeach; endif; ?>

<!--JS区域-->
<script type="text/javascript" src="__PUBLIC__/Js/jquery.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/top.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/photoshare.js"></script>




<!--图片无限随机加载，填写描述语-->
<script type="text/javascript">
$(function(){
	//url data function dataType
	function loadMeinv(){
		var data = 1;
		// var describe=[" ","微末凡尘","心灵之树","她的国","心向天空"];//描述语言,第一个项不可删除
		var number='<?php echo ($count); ?>'; //总图集数
      // alert(number);
        for(var i=1;i<=number;i++){                              //每次加载时模拟随机加载图片
			data = parseInt(Math.random()*(number-1)+1);         //将字符串装换成最大为number的随机整数
            var html = "";
			 html = '<li><div class="shadow"><div class="water_pic"><a href="javascript:;" target="_blank"> <img src ="__PUBLIC__/Uploads/'+filename[data]+'"/></a></div><div class="water_option">'+uname[data]+'<br/>'+title[data]+'</div></li>';
			//加载的图片和描述文字
			$minUl = getMinUl();
			$minUl.append(html);//在被选元素的结尾（仍然在内部）插入指定内容。
		}
	}
	loadMeinv();
	$(window).on("scroll",function(){
		$minUl = getMinUl();
		if($minUl.height() <= $(window).scrollTop()+$(window).height()){
		//当最短的ul的高度比窗口滚出去的高度+浏览器高度大时加载新图片
			loadMeinv();
		}
	})
	function getMinUl(){//每次获取最短的ul,将图片放到其后
		var $arrUl = $(".container .col");//
		var $minUl =$arrUl.eq(0);
		$arrUl.each(function(index,elem){
			if($(elem).height()<$minUl.height()){
				$minUl = $(elem);
			}
		});
		return $minUl;
	}
	
//点击更多加载
	$("#loadMeinvMOre").click(function() {
		$minUl = getMinUl();
		loadMeinv();
	});
})
</script>



<!--轮换图-->
  <script type="text/javascript">
        <!--
        //picrun_ini();
        //-->
        </script> 
</body>
</html>