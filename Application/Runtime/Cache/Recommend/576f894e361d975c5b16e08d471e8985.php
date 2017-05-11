<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Baseball Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="/CampusAlliance/Public/Home/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/CampusAlliance/Public/Home/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="/CampusAlliance/Public/Home/css/styleslide.css" type="text/css" media="all" />
<link href="/CampusAlliance/Public/Home/css/styles.css?v=1.6" rel="stylesheet">
<!--// css -->
<script src="/CampusAlliance/Public/Home/js/jquery-1.11.1.min.js"></script>
<script src="/CampusAlliance/Public/Home/js/scripts.js?v=1.7"></script>
<script src="/CampusAlliance/Public/Home/js/bootstrap.js"></script>
<script type="text/javascript" src="/CampusAlliance/Public/Home/js/move-top.js"></script>
<script type="text/javascript" src="/CampusAlliance/Public/Home/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>	

<style type="text/css">
	
	.sidemenu, .lively_user {
    width: 220px;
    min-height: 160px;
    background: #fff;
    border: solid 1px #eaeaea;

}
.sidemenu .s_title {
    height: 36px;
    line-height: 36px;
    font-size: 16px;
    color: #545454;
    background: #F7F7F7;
    padding-left: 20px;
}
.sidemenu ul li a:hover, .sidemenu ul li.on a {
    color:#545454;
}
.sidemenu ul li a {
	padding-left: 20px;
     color:#545454;
    height: 36px;
    line-height: 36px;
    border-bottom: dashed 1px #e6e6e6;
    margin-top: 5px;
    display: block;
    font-size: 14px;
}
a:hover {
    color: #000;
}
ul, li {
	margin-left: -20px;
    list-style-type: none;
}
.self-right{
    float: right; margin-top: -200px; padding-right: 270px;
}
</style>

<style type="text/css">
	
	.container {
		font-family: '微软雅黑';
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.section-header {
    margin-bottom: 50px;
}
.section-header p{
	text-align: center;
}
.section-header .section-title {
    font-size: 44px;
    color: #F33131;
    position: relative;
    padding-bottom: 20px;
    margin: 0 0 20px;
    border-bottom: 1px solid #E7E7E7;
    display: block;
    text-align: center;

}

.reply_wrap{
	margin-top: 40px;
}
.reply_wrap .r_title{
	font-size: 16px; font-weight: bold; border-bottom: solid 1px #ddd; padding-bottom: 4px; margin-bottom: 15px;
}
.reply_wrap .talk_list .backview{
	margin-bottom: 25px; border-bottom: solid 1px #ddd; overflow: hidden; padding-bottom: 15px;
}
.talk_list .backview p{
	text-indent: 0;
}
.talk_list .backview .det_l, .del_repy .cl .avatar, .editor .avatar{
	width: 80px; height: 80px; border: solid 1px #eee; float: left; margin-right: 15px; margin-top: 5px;
}
.talk_list .backview .det_l img, .editor .avatar img{
	width: 80px; height: 80px; margin: 0 auto;
}
.talk_list .backview .li_cont{
	width: 700px; float: left;
}
.talk_list .backview .li_cont .replyinfo{
	border-bottom: solid 1px #ddd; margin-bottom: 15px;
}
.talk_list .backview .li_cont .replyinfo .replynum{
	/*background: url(../images/angle.png) 0 24px no-repeat;*/ display: block; height: 36px;
}
.talk_list .backview .li_cont .replyinfo .replynum.active{
	background: url(../images/angle.png) 0 24px no-repeat;
}
.talk_list .backview .li_cont .info, .talk_list .backview .li_cont .info a{
	font-weight: bold; color: #b7b7b7;
}
.talk_list .backview .li_cont .info .date, .talk_list .backview .li_cont .replyinfo a{
	font-weight: normal;
}
.talk_list .backview .li_cont .info .date{
	margin-left: 20px;
}
.talk_list .backview a:hover{
	color: #04538B!important;
}
.del_repy .cl{
	border-bottom: dashed 1px #ddd; margin-bottom: 15px; overflow: hidden;

}
.del_repy .cl .avatar{
	width: 28px; height: 28px;
}
.del_repy .cl .avatar img{
	width: 28px; height: 28px; margin: 0 auto;
}
.del_repy .cl .cl_cont{
	width: 654px; float: left;
}
.del_reply_input_cl textarea{
	width: 674px; height: 32px; line-height: 32px; padding: 0 12px; border: solid 1px #ddd;margin-left: 100PX;
}
.del_reply_input_cl .del_reply_btn{
	 height: 30px; line-height: 30px; margin-top: 6px;margin-left: 700PX;
}
.del_reply_input_cl .del_reply_btn .btn,.editor .submit_btn{
	padding: 6px 15px; margin-left: 15px;
}
.editor{
	overflow: hidden; margin-top: 50px;
}
.editor .avatar{
	margin-top: 0;
}
.editor #editor{
	float: left; width: 702px;
}
.editor .submit_btn{
	float: right; margin-top: 15px;
}
.talk_list li{
	list-style: none;
}
.col-md-5 .Featimg img{
	height: 220px;

}

</style>

</head>
<body>
	<div class="main-content">
	<!-- header -->
		<div class="navigation">
			<div class="container-wrap-fluid">
					<nav class="pull">
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="hvr-bounce-to-bottom" ><a href="/CampusAlliance/Home/Index/index" class="active" style="font-family:'微软雅黑'">主页</a></li>

									<li><a href="#" class="menu1" style="font-family:'微软雅黑'">推荐好地儿<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
										<ul class="nav-sub">
											<li><a href="<?php echo U('Recommend/Index/lists/rid/1');?>" style="font-family:'微软雅黑'">好吃儿</a></li>
											<li><a href="<?php echo U('Recommend/Index/lists/rid/2');?>" style="font-family:'微软雅黑'">好地儿</a></li>
											<li><a href="<?php echo U('Recommend/Index/lists/rid/3');?>" style="font-family:'微软雅黑'">好店儿</a></li>
											<li><a href="<?php echo U('Recommend/Index/lists/rid/4');?>" style="font-family:'微软雅黑'">划算儿</a></li>
											<li><a href="<?php echo U('Recommend/Index/lists/rid/5');?>" style="font-family:'微软雅黑'">聚会场所</a></li> 
										</ul>


									
									<!-- <li><a href="#" class="scroll">News</a></li>
									<li><a href="#">Trade</a></li>
									<li><a href="#">Forum</a></li> -->

									<!-- <li><a href="#" class="menu1">Gallery<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li> -->
										<ul class="nav-sub">
											<!-- <li><a href="gallery.html">Gallery1</a></li>                                             
											<li><a href="#" class="menu">Gallery2<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
												<ul class="nav-sub1">
													<li><a href="gallery.html">Gallery4</a></li>                                             
													<li><a href="gallery.html">Gallery5</a></li>   
													<li><a href="gallery.html">Gallery6</a></li> 
												</ul> -->
												<script>
													$( "li a.menu" ).click(function() {
													$( "ul.nav-sub1" ).slideToggle( 300, function() {
													// Animation complete.
													});
													});
												</script>
											<!-- <li><a href="gallery.html">Gallery3</a></li>  -->
										</ul>
										<!-- script-for-menu -->
										<script>
											$( "li a.menu1" ).click(function() {
											$( "ul.nav-sub" ).slideToggle( 300, function() {
											// Animation complete.
											});
											});
										</script>


									<?php if($_SESSION['uname']== null): ?><li><a href="<?php echo U('Home/Index/logins');?>">登录</a></li>&<li><a href="<?php echo U('Home/Index/logins');?>">注册</a></li>
									   <?php else: ?>
									   <li class="clearfix"><a href="<?php echo U('Home/User/center');?>">Welcome <?php echo (session('uname')); ?></a>&<a href="<?php echo U('Home/Index/logout');?>">退出</a></li><?php endif; ?>
								</ul>	
								<div class="clearfix"> </div>
							</div>
					</nav>
			</div>
		</div>
		<div class="header-top">
				<div class="head-logo">
					<h1><a href="index.html">Dalian CampusAlliance</a></h1>
				</div>
				<div class="top-nav">
					<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="/CampusAlliance/Public/Home/images/menu.png" alt=""></a>
					</div>	
				</div>
				<div class="header-right">
					<div class="social">
						<ul>
						
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="facebook twitter"> </a></li>
							<li><a href="#" class="facebook chrome"> </a></li>
							<li><a href="#" class="facebook dribbble"> </a></li> 
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>				
				<div class="clearfix"> </div>
		</div>
		<!-- //header -->


		  
       <div class="container">
   <div class="section-header">
			<h2 class="section-title wow fadeInDown"></h2>
			<p class="wow fadeInDown"></p>
		</div>
 <div class="row FeatLayout">
<div class="col-md-5 Featimg"> <img src="/CampusAlliance/Public/Recommend/photo/<?php echo ($content["pic"]); ?>"  alt="feature" class="img-responsive center-block"></div>
<div class="col-md-7">
<h2 style="margin-top: -3px"><?php echo ($content["name"]); ?></h2>
<p>推荐理由：<?php echo ($content["cause"]); ?></p>
<ul class="listarrow">
<li><i class="fa fa-angle-double-right"></i>所在地：<?php echo ($content["place"]); ?></li>
<li><i class="fa fa-angle-double-right"></i>推荐时间：<?php echo ($content["creatime"]); ?></li>
<li><i class="fa fa-angle-double-right"></i>类型：<?php echo ($rname); ?></li>
<li><i class="fa fa-angle-double-right"></i>推荐人：<?php echo ($uname); ?></li>

</ul>
</div>
</div>
 </div>



<div class="reply_wrap" id="reply">
								<div class="r_title">共4个回复</div>

								<div style="margin-left: 150px;">

								<ul class="talk_list">

								<?php if(is_array($com)): $i = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="backview">
										<div class="det_l">
											<a href="ownTopic1.html" class="avatar"><img src="/CampusAlliance/Public/Home/userphoto/<?php echo ($vo["pic"]); ?>"/></a>
										</div>
										<div class="">
											<div class="">
												<span class=""><a href="ownTopic1.html"><?php echo ($vo["uname"]); ?></a><span class="">&nbsp;&nbsp;<?php echo ($vo["creatime"]); ?></span></span>
											</div>
											<div class="li_t editor_style">
												<p><?php echo ($vo["content"]); ?></p>
											</div>
											<input type="hidden" name="cid" value=<?php echo ($vo["cid"]); ?>>
											<div class="del_reply_wp">
												<ul class="del_repy">
													<li class="cl">
														

														<div>
														<a href="ownTopic1.html" class="avatar"><img src="images/favicon.jpg"/></a>
															<div>
																<span class=""><a href="ownTopic1.html">用户名称</a><span class="">2016-06-17 14:00</span></span>
															</div>
														
															<div class="li_t editor_style">
																<p>回复内容</p>
															</div>
														</div>
													</li>
												</ul>

												<?php if($_SESSION['uname']== null): ?><H4 style="font-family: 微软雅黑; text-align: center;">亲！<a href="<?php echo U('Home/Index/login');?>">登录</a>后才能回复哦</H4>
												<?php else: ?>
												<div class="del_reply_input_cl">
													<form action="<?php echo U('Content/repcomment');?>" method="post">
													    <input type="hidden" name="cid" value=<?php echo ($vo["cid"]); ?>>
														<textarea placeholder="回复他" name="rcontent"></textarea>									
														<div class="clear"></div>

														<div class="del_reply_btn" >
															
															<button type="submit" class="btn submit_btn">回复</button>
														</div>

													</form>
												</div><?php endif; ?>
											</div>
										</div>
									</li><?php endforeach; endif; else: echo "" ;endif; ?>



								</ul>

								
     </div><!--margin-left------>
                                       
                                       <?php if($_SESSION['uname']== null): ?><H4 style="font-family: 微软雅黑; text-align: center;">亲！<a href="<?php echo U('Home/Index/login');?>">登录</a>后才能评论哦</H4>
                                        <?php else: ?>      <div style="text-align: center;" >
													<form action="<?php echo U('Content/comment');?>" method="post">
													<input type="hidden" value=<?php echo ($content["id"]); ?> name="id">
														<textarea placeholder="评论" name="content" rows="5" cols="100"></textarea>									
														<div class="clear"></div>

														<div class="del_reply_btn" style="margin-left: 760px; margin-top: 10px" >
															
															<button type="submit" class="btn submit_btn">评论</button>
														</div>
												</form>											
											</div><?php endif; ?>	       


							</div>
							
						</div>
				<div style="text-align: center;margin-bottom: 30px;"><?php echo ($link); ?></div>



	





</div>
<!---------main-content结束--->

</body>	
</html>