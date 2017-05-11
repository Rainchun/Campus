<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Travelist</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

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


<script src="/Campus/Public/Home/js/jquery.js"></script>
<script src="/Campus/Public/Home/js/bootstrap-modal.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<style type="text/css">
    @font-face{
  font-family: 'miaomi';

  src:url( 'fonts/miaomi.ttf') format('truetype');
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
<style type="text/css">
body{
	background: #f7f7f7;
}
</style>
</head>
<body>
<div class="header" id="ban">

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
							<li><a href="about.html">About</a></li>
							<li><a href="features.html">Features</a></li>
							<li><a href="travel.html">Travel</a></li>
							<li><a href="fashion.html">Fashion</a></li>
							<li><a href="music.html">Music</a></li>
							<li><a href="codes.html">Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			</div>
			<div id="social-icons" >
					<ul class="login">
						<li><a href="#">登录</a></li>
						<li><a href="#">注册</a></li>
						
					</ul>
				</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
	


</div>

	<!-- technology-left -->
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left" style="margin-bottom: 30px;">
			<div class="blog">
		
			<h2 class="w3" style="font-family: miaomi">图书馆不见不散</h2>


			


	<div id="wrapper">
	<div class="box">
		<div class="demo">
			<div class="key">	
			<a href="javascript:;" class="flipInX">发布结伴</a>
			</div>
		</div>
		
		<div id="dialogBg"></div>
		<div id="dialog" class="animated">
			<!-- <img class="dialogIco" width="50" height="50" src="/Campus/Public/Home/images/ico.png" alt="" /> -->
			<div class="dialogTop">
			    <a href="#" style="font-size: 20px; margin-right: 20px;">快速吸引你的小伙伴</a>
				<a href="javascript:;" class="claseDialogBtn">关闭</a>
			</div>
			<form action="" method="post" id="editForm">
				<ul class="editInfos">
					<li><input type="text" name="titles" value="" class="ipt" style="width: 250px;" placeholder="结伴标题" required  /></li>
					<li><input type="text" name="theme" value="" class="ipt" style="width: 250px;" placeholder="结伴目的地" required  /></li>
					<li><select name="rid" class="ipt"  style="width: 250px;" >
                    <option value="0">结伴主题</option>
                    <option value="1">一起浪</option>
                    <option value="2">粗去吃</option>
                    <option value="3">约你看电影</option>  
                    <option value="4">图书馆不见不散</option>
                    <option value="5">购物</option>                   
                    </select></li>
                    <li><input type="date" name="pretime" value="" class="ipt" style="width: 250px; height: 30px;" title="出发时间" required  /></li>
                    <li><input type="date" name="endtime" value="" class="ipt" style="width: 250px; height: 30px;" title="结束时间" required  /></li>
                    <li><input type="text" name="tele" value="" class="ipt" style="width: 250px;" placeholder="联系方式" required  /></li>
                    <li style="margin-left: 22px" class="file">        
                    <input type="file" name="pic" value="" class="ipt" style="width: 250px;" title="结伴封面图片" required  /></li>
                    <li><textarea name="detail" placeholder="结伴详情" style="width: 250px; height: 250px;margin-left: 1px"></textarea></li>
					<li><input type="submit" value="发布" class="submitBtn" /></li>
				</ul>
			</form>
		</div>
	</div>
	
</div>







			<div class="clearfix"> </div>
		

			<div class="music">
				
				<div class="effect-grid">
						<h3 class="w3">PROGRAMS</h3>
						<ul class="grid cs-style-3">
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m1.jpg" alt="img02">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m2.jpg" alt="img03">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m3.jpg" alt="img06">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m3.jpg" alt="img04">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m2.jpg" alt="img05">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<li>
							<figure>
								<img src="/Campus/Public/Home/images/m1.jpg" alt="img01">
								<figcaption>
									<h4>PROGRAMS</h4>
								</figcaption>
							</figure>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
			</div>


           <div class="paging"><?php echo ($link); ?></div>
			




			<!-- <nav class="paging">
				<ul class="pagination pagination-lg">
					<li><a href="#" aria-label="Previous"><span aria-hidden="true"><<</span></a></li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">>></span></a></li>
				</ul>
			</nav> -->
		
	</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					
					<h4 style="font-family: miaomi">推荐主题</h4>
						<div class="blog-grids" style="margin-top: -13px;">							
							<div class="blog-grid-right">
							<?php if(is_array($rtype)): $i = 0; $__LIST__ = $rtype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h5 style="font-family: miaomi;margin-bottom: 5px; font-size: 16px;"><a href="<?php echo U('Recommend/lists',array('rtype_rid'=>$vo['rid']));?>"><?php echo ($vo["rname"]); ?></a> </h5><?php endforeach; endif; else: echo "" ;endif; ?>
							</div>
							<div class="clearfix"> </div>
						</div>
						
						
						<div class="insta">
					<h4 style="font-family: miaomi">最新推荐</h4>
                     <?php if(is_array($fresh)): $i = 0; $__LIST__ = $fresh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blog-grids">
							<div class="blog-grid-left">
								<a href="<?php echo U('Recommend/content',array('id'=>$vo['id']));?>"><img src="/Campus/Public/Recommend/photo/<?php echo ($vo["pic"]); ?>" class="img-responsive" alt=""></a>
							</div>
							<div class="blog-grid-right">
								<input type="hidden" value="<?php echo ($vo["id"]); ?><"></input>
								<h5 style="font-family: miaomi ;margin-top:10px;"><a href="<?php echo U('Recommend/content',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a> </h5>
								<img src="/Campus/Public/Home/images/red_eye.png" style="width: 18px;margin-top: -3px;"><span style="font-size: 15px;"><?php echo ($vo["hits"]); ?></span>
							</div>
							<div class="clearfix"> </div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>

					</div>
	
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>

               <div class="contact-grid" style="width: 350px;">
							
							<form action="#" method="post">
								<input type="text" name="Name" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
								<textarea type="text" name="textarea" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Special Instruction/Comments...';}" required="">Special Instruction/Comments...</textarea>
								<input type="submit" value="Send">
							</form>
						</div>



	<div class="copyright">
				<div class="container">
					<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
				</div>
			</div>

</body>
</html>