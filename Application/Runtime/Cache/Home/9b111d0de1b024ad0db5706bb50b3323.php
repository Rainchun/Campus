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

        <form  method="post"  action="<?php echo U(doUpdate);?>"  enctype="multipart/form-data"  >
        <div class="cont-main" >
          <div style="margin-left:20px;padding-top: 45px;">

           <div class="main-wrap" style="width: 950px">
            <h3>
                          <strong>编辑个人信息</strong>
                      </h3>
            <div class="user-profile clearfix">
              <div class="user-profile-wrap">
                <div class="profile-avatar">
                  <img src="/Campus/Public/Home/userphoto/<?php echo ($userInfos["upic"]); ?>" height="150" width="130">
                  <!-- <a href="#" name="">编辑头像</a>  -->
                 
                </div>
              </div>
              <div class="profile-info">
                <div class="control-group clearfix ">
                  <div class="controls lh26">
                    <label class="control-label"><em>*</em><span style="margin-left: 10px;">用户名:</span> 
                    <input  type="hidden" name="uid" value="<?php echo ($userInfos["uid"]); ?>">
                      <input  style="margin-left: 10px;" type="text" name="uname" class="text" value="<?php echo ($userInfos["uname"]); ?>">
                      <!-- <img src="/Campus/Public/UCenter/img/success.png " /><span style="margin-left: 10px;">一旦完善成功,不能修改</span> -->
                  </div>
                  <div style="margin-top: 40px;position: absolute;">
                  
                     <label class="control-label"><span style="float: left;margin-right: 5px">上传头像:</span> <input  style="margin-left: 10px;" type="file" value="<?php echo ($userInfos["upic"]); ?>" name="file"  >
                  </div>
                </div>
              </div>
            </div>
            <div class=" tab-switch personal-wrap-show" style="margin-top: 30px">
              
                <div class="control-group clearfix">
                  <label class="control-label"><em>*&nbsp;</em>真实姓名：</label>
                  <div class="controls">
                    <input  type="text" class="text" name="realname" maxlength="12"  value="<?php echo ($userInfos["realname"]); ?>">
                  </div>
                </div>

                 <div class="control-group clearfix">
                  <label class="control-label"><em>*&nbsp;</em>邮箱：</label>
                  <div class="controls">
                    <input  type="text" class="text" name="email" value="<?php echo ($userInfos["email"]); ?>">
                  </div>
                </div>
               

                <div class="control-group clearfix">
                  <label class="control-label"><em>*&nbsp;</em>性别：</label> 
                  <div id="gender" class="controls">

                  <?php if($userInfos["gender"] == 0): ?><label class="sex-label">
                      <input type="radio" name="gender" value="0" checked="" >
                      <span>男</span>
                    </label>
                    <label class="sex-label">
                      <input type="radio" name="gender" value="1">
                      <span>女</span>
                    </label>

                    <?php else: ?>
                    <label class="sex-label">
                      <input type="radio" name="gender" value="0"  >
                      <span>男</span>
                    </label>
                    <label class="sex-label">
                      <input type="radio" name="gender" value="1" checked="">
                      <span>女</span>
                    </label><?php endif; ?>
                    
                 
               
                  </div>
                </div>
                
                <div class="control-group clearfix">
                  <label class="control-label">出生日期：</label>
                  <div class="controls">
                    <span id="" class="dateSelector">
                    <input  placeholder="请选择" type="date" name="birthday" class="text date-color" value="<?php echo ($userInfos["birthday"]); ?>" >
                    <i class="date-icons"></i>
                    </span>
                    <i class="date-line">－星座：</i><input  type="text"  name="constellation" class="text  default" value="<?php echo ($userInfos["constellation"]); ?>" >
                  </div>
                  <div id="" class="error-place">
                    <i class="tips"></i><span><a target="_blank" ><img src="/Campus/Public/UCenter/img/smrz01.png" style="margin-bottom: -4px;margin-right: 10px;"/>填写生日日期，享受特权好礼</a></span>
                  </div>
                </div>

                <div class="control-group clearfix">
                  <label class="control-label">个性签名：</label>
                  <div class="controls">
                    
                    <textarea name="info"><?php echo ($userInfos["info"]); ?></textarea>
                  </div>
                </div>

                <div class="control-group clearfix priority-low">
                  <label class="control-label">&nbsp;</label>
                  <div style="float:left;">
                    <!-- <a href=""  class="ms-stand-btn1" >保 存</a> -->
                    <input type="submit" value="保存" class="ms-stand-btn1">
                  </div>
                  <div id="" class="error-place"></div>
                  <div class="error-place mt29"></div>
                </div>
         
            </div>
          </div>
        </div>
     </form>     
              
           
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