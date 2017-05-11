<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="/CampusAlliance/Public/Home/css/demo.css">
	
	
	<link rel="stylesheet" href="/CampusAlliance/Public/Home/css/tabs-basic.css">
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
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


									
									<li><a href="#" class="scroll">News</a></li>
									<li><a href="#">Trade</a></li>
									<li><a href="#">Forum</a></li>

									<li><a href="#" class="menu1">Gallery<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
										<ul class="nav-sub">
											<li><a href="gallery.html">Gallery1</a></li>                                             
											<li><a href="#" class="menu">Gallery2<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
												<ul class="nav-sub1">
													<li><a href="gallery.html">Gallery4</a></li>                                             
													<li><a href="gallery.html">Gallery5</a></li>   
													<li><a href="gallery.html">Gallery6</a></li> 
												</ul>
												<script>
													$( "li a.menu" ).click(function() {
													$( "ul.nav-sub1" ).slideToggle( 300, function() {
													// Animation complete.
													});
													});
												</script>
											<li><a href="gallery.html">Gallery3</a></li> 
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
	</div>	
	<div class="tabs-basic">

		<ul>
			<li>
				<a class="tab-active" data-index="0" href="<?php echo U('center');?>">个人中心</a>
			</li>
			<li>
				<a  href="<?php echo U('wtuijian');?>">我的推荐</a>
			</li>
			<li>
				<a href="#">我的评价</a>
			</li>
		</ul>

		<div class="tabs-content-placeholder">

			<div class="tab-content-active">
				<input type="text"></input>
			</div>

			
		</div>

	</div>

	
	
</body>
</html>