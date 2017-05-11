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

@font-face{
	font-family: 'Iceland';
	font-weight: 400;
	src:url(/CampusAlliance/Public/Recommend/font/Iceland.woff)format('woff');
}

	.row{
    margin-left: -15px;
    margin-right: -15px;
	}
	.overlay:hover {
    opacity: 1;
}
.overlay {
    height: 100%;
    position: absolute;
    left: 15px;
    right: 15px;
    top: 0px;
    opacity: 0;
    border: solid 5px #63c6ae;

}
.carousel-content {
    text-align: left;
    padding: 10px 25px;
    border-left: solid 1px #dbe1e7;

}
.col-md-3{
	margin-bottom: 30px;
	float: left;
}
.dabiaoti{
	width: 800px;
	margin-left: 200px;
	margin-top:10px;
}
 .dabiaoti h1{
 	color:#FF1177;
	font-family:"Iceland";
	font-size: 80px;
	margin-top: -10px;
	margin-bottom: 20px;
	text-align: center;
	padding-right: 10px;

}
.wtuijian{
	width: 80px;
    margin-left: 810px;
    margin-top: -60px;
    margin-bottom: 60px;}
.wtuijian a{
	font-family: "微软雅黑" ;
	color: #5A5A5A;
 	
 }
 .wtuijian a:hover{
 	color: #999;
 }
.dabiaoti h1:hover{
 
  animation: neon1 1.5s ease-in-out infinite alternate;
}
@keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff,
               0 0 20px  #fff,
               0 0 30px  #fff,
               0 0 40px  #FF1177,
               0 0 70px  #FF1177,
               0 0 80px  #FF1177,
               0 0 100px #FF1177,
               0 0 150px #FF1177;
  }
  to {
    text-shadow: 0 0 5px #fff,
               0 0 10px #fff,
               0 0 15px #fff,
               0 0 20px #FF1177,
               0 0 35px #FF1177,
               0 0 40px #FF1177,
               0 0 50px #FF1177,
               0 0 75px #FF1177;
  }
}

.chakangengduo{
	text-align: center;
	text-decoration: none;
	font-family: "微软雅黑";
	margin-bottom: 50px;
}
.chakangengduo a{
	color: #5A5A5A;
}
.chakangengduo a:hover{
	color: #999;
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
											<li><a href="<?php echo U('Recommend/Index/index');?>" style="font-family:'微软雅黑'">好吃儿</a></li>
											<li><a href="gallery.html" style="font-family:'微软雅黑'">好地儿</a></li>
											<li><a href="gallery.html" style="font-family:'微软雅黑'">好店儿</a></li>
											<li><a href="gallery.html" style="font-family:'微软雅黑'">划算儿</a></li>
											<li><a href="gallery.html" style="font-family:'微软雅黑'">聚会场所</a></li> 
										</ul>


									<li class="hvr-bounce-to-bottom"><a href="#">Club</a></li>
									<li><a href="#">Answer</a></li>
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


									<?php if($_SESSION['telephone']== null): ?><li><a href="<?php echo U('Home/Index/login');?>">登录</a></li>&<li><a href="<?php echo U('Home/Index/reg');?>">注册</a></li>
									   <?php else: ?>
									   <li class="clearfix"><a href="<?php echo U('Home/Index/center');?>">Welcome <?php echo (session('uname')); ?></a>&<a href="<?php echo U('Home/Index/logout');?>">退出</a></li><?php endif; ?>
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
	
	<div class="all">	  

    <div class="dabiaoti"><h1>Eat in Dalian</h1></div>
    <div class="wtuijian"><a href="#">我要推荐</a></div>

    <div class="row">
        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

      </div><!---ROW-------->

      <div class="chakangengduo"><a href="#">查看更多</a></div>
<hr>

      <div class="dabiaoti"><h1>Plan in Dalian</h1></div>
    <div class="wtuijian"><a href="#">我要推荐</a></div>

    <div class="row">
        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="/CampusAlliance/Public/Recommend/img/c01.jpg" alt="Carousel Img">
          </div>
          <div class="carousel-avatar av1">
          </div>
          <div class="carousel-content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris mattis suscipit est, ut imperdiet tortor. Proin sed molestie massa.</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>

      </div><!---ROW-------->

      <div class="chakangengduo"><a href="#">查看更多</a></div>
		
</div><!---ALL---->


	





</div>
<!---------main-content结束--->

</body>	
</html>