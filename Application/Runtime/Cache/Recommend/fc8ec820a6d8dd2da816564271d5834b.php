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
		  
       
 <br><br>
    <center><h3 style="font-weight: bold;">请填写您要推荐的信息</h3></center>
    <br>
    <div class="container-fluid col-md-offset-3" style="margin-right: -70px;">
  <form class="form-horizontal" method=post action="<?php echo U('addTuijian');?>" enctype="multipart/form-data">
     <div class="form-group ">
     <label class="col-md-2 col-xs-5 control-label">推荐名称:</label>
     <div class="col-md-4">
     <input type="text" name="name" class="form-control" placeholder="推荐名称" required=""> 
     </div>
  </div>

  <div class="form-group ">
     <label class="col-md-2 col-xs-5 control-label">推荐所在地:</label>
     <div class="col-md-4">
     <input type="text" name="place" class="form-control" placeholder="推荐所在地" required=""> 
     </div>
  </div>

 

  <div class="form-group ">
     <label class="col-md-2 control-label">推荐类型:</label>
     <div class="col-md-4">
     <select name="rid">
                    <option value="0">请选择</option>
                    <option value="1">好吃儿</option>
                    <option value="2">好地儿</option>
                    <option value="3">好店儿</option>  
                    <option value="4">划算儿</option>
                    <option value="4">聚会场所</option>
                 </select>
     </div>
  </div> 

  <div class="form-group ">
     <label for="exampleInputTextareal" class="col-md-2 control-label">推荐理由</label>
     <div class="col-md-4">
     <textarea class="form-control" rows="3" id="exampleInputTextareal" placeholder="推荐理由" name="cause"> </textarea> 
     </div>
  </div>

  <div class="form-group ">
     <label for="exampleInputFile" class="col-md-2 control-label">推荐图片</label>
     <div class="col-md-4">
     <input type="file" name="pic" id="exampleInputFile" required=""> 
     </div>
  </div>
<?php if($_SESSION['uname']== null): ?><div class="form-group ">
     <div class="col-sm-offset-2 col-sm-10">
    <H4 style="font-family: 微软雅黑">亲！<a href="<?php echo U('Home/Index/login');?>">登录</a>后才能推荐哦</H4>
     </div>
  <?php else: ?>
  <div class="form-group ">
     <div class="col-sm-offset-2 col-sm-10">
     <input type="submit" class="btn btn-default" value="提交"> 
     <input type="reset" class="btn btn-default" value="重置">
     </div>
  </div><?php endif; ?>
</form>
</div>


</div>
<!---------main-content结束---->

</body>	
</html>