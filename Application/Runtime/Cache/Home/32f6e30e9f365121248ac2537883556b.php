<?php if (!defined('THINK_PATH')) exit();?><html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/safe/css.css" />
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/safe/common.min.css" />
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/safe/ms-style.min.css" />
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/safe/personal_member.min.css" />
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/safe/Snaddress.min.css" />
    <link rel="stylesheet" href="/Campus/Public/UCenter/css/sui.css" />

    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/Campus/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/Campus/Public/Home/css/bootstrapmoban458.css" rel='stylesheet' type='text/css' />

<link href="/Campus/Public/Home/css/style.css" rel='stylesheet' type='text/css' />  
<link href="/Campus/Public/Home/css/styleMoban458.css" rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="/Campus/Public/Home/css/common.css"/>

<script type="text/javascript" src="/Campus/Public/Home/js/jquery.min.js"></script>


<script src="/Campus/Public/Home/js/jquery-1.11.1.min.js"></script>
<script src="/Campus/Public/Home/js/bootstrap.min.js"></script>
<script src="/Campus/Public/Home/js/responsiveslides.min.js"></script>
<!-- animation-effect -->
<link href="/Campus/Public/Home/css/animate.min.css" rel="stylesheet"> 
<script src="/Campus/Public/Home/js/wow.min.js"></script>

<script type="text/javascript">
  var w,h,className;
function getSrceenWH(){
  w = $(window).width();
  h = $(window).height();
  $('#dialogBg').width(w).height(h);
}

window.onresize = function(){  
  getSrceenWH();
}  
$(window).resize();  

$(function(){
  getSrceenWH();
  
  //ÏÔÊ¾µ¯¿ò
  $('.box a').click(function(){
    className = $(this).attr('class');
    $('#dialogBg').fadeIn(300);
    $('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn();
  });
  
  //¹Ø±Õµ¯´°
  $('.claseDialogBtn').click(function(){
    $('#dialogBg').fadeOut(300,function(){
      $('#dialog').addClass('bounceOutUp').fadeOut();
    });
  });
});
</script>



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style type="text/css">
body{
  background: #f7f7f7;
}

/*   首页图片更换 样式     */
.head-img-top{
  position:absolute;
  z-index: 100;
  text-align: center;
  margin: 0px auto;
  background-color: rgba(0,0,0,0.3);
  width: 1400px;
  height: 482px;
  padding-top: 180px;
  /*height: 600px;*/

  /*margin-top: 250px;*/
}
.img{
  position: relative; 
}
.head-img-top p{
  width: 55%;
  margin: 20px auto;
  font-size: 1.2em;
  color:rgba(255, 255, 255, 0.46);
  font-weight: lighter;
}

.head-img-top h2 {
    font-size: 2.5em;
    font-weight: 600;
    color: #fff;
}



/*   -------------------------------     */

@font-face{
  font-family: 'miaomi';

  src:url( 'fonts/miaomi.ttf') format('truetype');
}
.b-bottom{
   border: 1px solid #ececec;
    
    font-size: 14px;
    color: #636363;
}
.xpc {
    padding: 18px 25px;
    overflow: hidden;
}
.xpc li {
    float: left;
    width: 590px;
    line-height: 50px;
    border-bottom: 1px dashed #ececec;
}
.biaoti{
  width: 115px;
  float: left;
}
.xpc .xlast {

    border-bottom: none;
    word-wrap: break-word;
    word-break: break-all;
}
.xmt20{
 
  margin-top: -25px;
}
#de{
  margin-left: 115px;
}
.cons{
  color: #010101;
}

.submitBtn {
    width: 90px;
    height: 30px;
    line-height: 30px;
    font-family: "miaomi";
    cursor: pointer;
    margin-top: 10px;
    display: inline-block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    text-align: center;
    background-color: #fa4b2a;
    color: #fff;
    box-shadow: 0 0px 0 #fff inset;
    -webkit-box-shadow: 0 0 0 #fff inset;
}
.submitBtn:hover{
  background-color: #fff;
  border: 1px solid #fa4b2a;
  color: #fa4b2a;
}
#dialog{
  height: 320px;
   box-shadow: 0 0 0 #fff;
    -webkit-box-shadow: 0 0 0 #fff;
}


#link-effect-7 a{
    font-family: 'miaomi';
    font-size: 18px;
}

.login li a {
    
    display: block;
    height: 22px; 
    -webkit-transition: .5s all;
    transition: .5s all;
    -moz-transition: .5s all;
    padding: 0;
}

.miaomi{
    font-family: 'miaomi';
}
body{
    font-family: 'miaomi';
    font-weight: bold;
}
ul.real-widget li a {
    font-size: 15px;
    color: #000;
}

.login li{
    float: left;
    list-style: none;
    margin-top: 10px;
    margin-left: 10px;
}

.login li a:hover{
    -webkit-transform:rotateY(360deg);
    transform:rotateY(360deg);
    -moz-transform:rotateY(360deg);
    -o-transform:rotateY(360deg);
    -ms-transform:rotateY(360deg);
}

.key a {
    font-size: 1em;
    color: #fff;
    font-weight: 600;
    padding: 0.6em 2em;
    background: #fa4b2a;
}
.key a:hover{
    background:#fff;
    color: #fa4b2a;
    border: 1px solid #fa4b2a;

}
.key{
    float: right;
    margin-top: -25px;
    
}

/* 分页样式*/
.prev{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-left-radius: 6px;
      border-bottom-left-radius: 6px;

}

.next{
     border: 1px solid #ddd;
      padding: 10px 20px;
      border-top-right-radius: 6px;
      border-bottom-right-radius: 6px;

}

.num{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-left: 0px
}

.current{
    border: 1px solid #ddd;
    padding: 10px 20px;
    margin-right: 10px;
    margin-left: 10px;
  
}

.paging a{
     font-size: 18px;

}

.paging{
    margin-left:250px; 
}

.contact-grid{
    display:none;
}

</style>
    <!-- <script type="text/javascript" src="/Campus/Public/UCenter/js/jquery-1.9.1.min.js" ></script>
    <script type="text/javascript" src="/Campus/Public/UCenter/js/sui.js" ></script> -->
    <style>
    body {
        background: #f5f5f5;
    }
      .sui-table th{
        padding: 16px 8px;
        line-height: 18px;
        text-align: center;
        vertical-align: middle;
        border-top: 1px solid #e6e6e6;
        font-weight: normal;
        font-size: 14px;
        color: #333333;
       }
       .sui-table td {
        padding: 16px 8px;
        line-height: 18px;
        text-align: center;
        vertical-align: middle;
        border-top: 1px solid #e6e6e6;
        font-weight: normal;
        font-size: 12px;
        color: #333333;
       }
  img {
      max-width: 100%;
      height: auto;
      /*vertical-align: bottom;*/
      border: 0;
      -ms-interpolation-mode: bicubic;
      margin-left: -10px;
  }
a{
  color: #000000;
}
    </style>
  </head>
  <script type="text/javascript">

  var w,h,className;
function getSrceenWH(){
  w = $(window).width();
  h = $(window).height();
  $('#dialogBg').width(w).height(h);
}

window.onresize = function(){  
  getSrceenWH();
}  
$(window).resize();  

$(function(){
  getSrceenWH();
  
  //ÏÔÊ¾µ¯¿ò
  $('.box a').click(function(){
    className = $(this).attr('class');
    $('#dialogBg').fadeIn(300);
    $('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn();
  });
  
  //¹Ø±Õµ¯´°
  $('.claseDialogBtn').click(function(){
    $('#dialogBg').fadeOut(300,function(){
      $('#dialog').addClass('bounceOutUp').fadeOut();
    });
  });
});
</script>

  <body >
    <div class="header" id="ban"  >
    <style type="text/css"></style>

	<div class="container">
			<div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
				<div class="header-search">
						<div class="search">
							<input class="search_box" type="checkbox" id="search_box">
							<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
							<div class="search_form">
								<form action="#" method="post">
									<input type="text" name="Search" placeholder="Search...">
									<input type="submit" value="Send">
								</form>
							</div>
						</div>
				</div>
			</div>
			<div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-7" id="link-effect-7">
						<ul class="nav navbar-nav">
							<li class="active act"><a href="<?php echo U('Index/index');?>">主页</a></li>
							<li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/1');?>">主题推荐</a></li>
							<li><a href="<?php echo U('Home/Travel/travel/theme_tid/1');?>">结伴同游</a></li>
							<li><a href="<?php echo U('Home/Travel/travel/theme_tid/2');?>">粗去吃</a></li>
							<li><a href="<?php echo U('Home/Travel/travel/theme_tid/3');?>">约你看电影</a></li>
							<li><a href="<?php echo U('Home/Travel/travel/theme_tid/4');?>">图书馆不见不散</a></li>
							<li><a href="<?php echo U('Home/Travel/travel/theme_tid/5');?>">购物</a></li>
							<!-- <li><a href="contact.html">Contact</a></li> -->
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div id="social-icons" >			
					<ul class="login">
					<?php if($_SESSION['uname']== null): ?><li><a href="<?php echo U('Home/User/logins');?>">登录</a></li>
						<li><a href="<?php echo U('Home/User/logins');?>">注册</a></li>
					<?php else: ?>
					    <li><a href="<?php echo U('Home/User/center');?>"><?php echo (session('uname')); ?></a></li>
					    <li><a href="<?php echo U('Home/User/logout');?>">退出</a></li><?php endif; ?>
						
					</ul>
				</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	
  </div>

  
    <div id="ms-center" class="personal-member" style="margin-top: -19px;margin-left: 100px">
      <div class="cont">
        <div class="cont-side">
             <div class="side-neck" style="margin-top: 80px;">
            <i></i>
          </div>
          <div class="ms-side" style="margin-top: 80px;">
            <article class="side-menu side-menu-off">
              <dl class="side-menu-tree" style="padding-left: 50px;">
                
                <dt><img src="/Campus/Public/UCenter/img/左侧/我的买啦.png"  style="margin-right: 10px;margin-left: -20px;"/>个人中心</dt>
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/center');?>">我的推荐</a>

                </dd>
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/my_travel');?>">我的结伴</a>

                </dd>
                <!-- <dd>
                  <a href="#">我的帖子</a>

                </dd> -->
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/private_letter');?>">我的私信</a>

                </dd>
                <!-- <dd>
                  <a href="我的拍卖.html">我的拍卖</a>

                </dd>
                <dd>
                  <a href="店铺的优惠券 .html">我的优惠券</a>

                </dd> -->
                <dt><img src="/Campus/Public/UCenter/img/左侧/sc.png"  style="margin-right: 7px;margin-left: -23px; width: 17px;height: 17px"/>我的收藏</dt>
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/collect_recmd');?>">主题推荐</a>

                </dd>
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/collect_travel');?>">结伴同游</a>

                </dd>
                <!-- <dd>
                  <a href="#">游记</a>

                </dd> -->
                <!-- <dd>
                  <a href="我的买豆.html">我的买豆</a>

                </dd> -->
                <!-- <dd>
                  <a href="邀请管理-收入明细.html">邀请管理</a>

                </dd> -->
                <dt><img src="/Campus/Public/UCenter/img/左侧/set.png"  style="margin-right: 10px;margin-left: -23px;width: 17px;height: 17px"/>设置</dt>
                <dd>
                  <a href="<?php echo U('..//Campus/Home/User/userinfo');?>">个人资料</a>

                </dd>
                <!-- <dd>
                  <a href="#">修改密码</a>

                </dd> -->
                <!-- <dd>
                  <a href="#">修改头像</a>

                </dd> -->
              </dl>

              <a ison="on" class="switch-side-menu icon-up-side"><i></i></a>
            </article>
          </div>
        </div>
        <div class="cont-main">
          <div style="margin-left: 200px;">
            <!--<h3>
                          <strong>我的会员等级</strong>
                      </h3>-->
            <div class="server-wrapper" style="margin-top: 90px;">
              <div class="server-tab" style="margin-top: 26px;">
                <div style=" float: left;vertical-align: bottom;text-align: center;">
                
        
                
                <!--右侧-end-->
                
                <div style="width: 950px;padding:10px;display: inline-block; float: left;margin-top:60px;background-color: #fff; margin-bottom: 100px">
                  <div style="border-bottom: 1px #ccc solid;">
                    <p style="font-size: 20px;text-align: left;">我的私信</p>
                  </div>

                 <!--  <?php if(is_array($travel)): $i = 0; $__LIST__ = $travel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="padding: 20px 20px;border-bottom: 1px #F5F5F5 solid;height: 150px;">
                    <div style="float: left;margin-top: 10px;">
                      <img src="/Campus/Public/Home/uploads/travelphoto/<?php echo ($vo["pic"]); ?>" width="150px" />
                    </div>
                    <div style="float: left;margin-top: 20px;">
                      <p><a href="<?php echo U('Travel/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["titles"]); ?></a></p>
                      <p><strong>结伴日期：<?php echo ($vo["pretime"]); ?>~<?php echo ($vo["endtime"]); ?></strong></p>
                    </div>
                    <div style="float: right;margin-right: 20px;margin-top: 50px;">
                    <a href="<?php echo U('deltrave',array('id'=>$vo['id']));?>">
                      <button style="border: 1px #ccc solid;padding: 5px;background-color: #fff;">删除</button></a>
                    </div>
                    
                  </div><?php endforeach; endif; else: echo "" ;endif; ?> -->
                <?php if(is_array($pletters)): $i = 0; $__LIST__ = $pletters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="width: 96%;margin-top: 20px;display: inline-block;border-bottom: 1px #ccc solid;padding-top: 30px;">
                    <div style="float: left;margin-left: 77px;"> 
                      <img src="/Campus/Public/Home/userphoto/<?php echo ($vo["upic"]); ?>" style="width: 100px;margin-top: -20px;margin-bottom: 10px" />
                    </div>
                    <div style="float: left;margin-left: 77px;"> 
                      <p style="    word-break: break-word;   width: 300px;font-size: 12px;"><?php echo ($vo["pcontent"]); ?></p>
                      <p><?php echo ($vo["p_time"]); ?></p>
                    </div>
                    <div style="float: left;margin-left: 77px;"> 
                      <span>神秘人:<a ><font style="color:#0f42b2"><?php echo ($vo["uname"]); ?></font ></a></span>
                    </div>
                    
                    
                    <div style="float: left;margin-left: 77px;"> 



                      <!-- <button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button> -->



 <div id="wrapper">
  <div class="box">
    <div class="demo">
      
      <a href="javascript:;" class="rollIn" >
        <button style="background-color: #F37B1D;padding: 5px;border: 0px;color: #fff;border-radius: 5px;width: 50px;"> 回复</button>
      </a>
      
    </div>
    
    <div id="dialogBg"></div>
    
    
      <div id="dialog" class="animated" style="height: 198px;">
      <div class="dialogTop">
          <a href="#" style="font-size: 20px; margin-right: 180px;">@<?php echo ($vo['uname']); ?></a>
        <a href="javascript:;" class="claseDialogBtn">关闭</a>
      </div>
      <form action="<?php echo U('Home/User/send_letter');?>" method="post" id="editForm" enctype="multipart/form-data">
        <ul class="editInfos">
          <input type="hidden" name="ag_uid" value="<?php echo ($vo["uid"]); ?>" >
          <li><textarea name="pcontent" placeholder="悄悄话。。。" style="width: 250px; height: 80px;margin-left: 3px;margin-top: -5px" required=""></textarea></li>
                          
          <li><input type="submit" value="发送" class="submitBtn" style="margin-top: -4px;margin-right: -160px" /></li>
        </ul>
      </form>
    </div>
  


  </div>
  
</div>





                    </div>
                    
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                  
                  
                
                  <p style="text-align: center;margin-top: 30px;"><?php echo ($link); ?></p>
                 
                </div>
                
              
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    </div>
    <div class="clear "></div>
   
  </div>
   <div class="copyright">
				<div class="container">
					<p><a href="<?php echo U('Admin/Index/index');?>" style="margin-right: 10px">管理员登录</a>Copyright &copy; 14110100534 宋雯静 </p>
				</div>
			</div>   
  </body>

</html>