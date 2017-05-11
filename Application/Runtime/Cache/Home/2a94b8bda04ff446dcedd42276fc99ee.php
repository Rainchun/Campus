<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
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
<link href="/Campus/Public/Home/css/animate.min.css" rel="stylesheet">
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
	

<!-- banner -->

<div>
   <div class="head-img-top">
      <h2><?php echo ($carousel["title"]); ?></h2>
	  <p><?php echo ($carousel["sketch"]); ?></p>
	  <!-- <a href="singlepage.html">READ MORE</a> -->
	 </div>
    <div class="img">
      <img src="/Campus/Public/Admin/Uploads/carouselphoto/<?php echo ($carousel["pic"]); ?>" style="height: 482px;width: 1400px">
      </div>
 </div>


<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">城市</a></li>
						<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">景点</a></li>
						<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">活动</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">
							
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/f2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/f4.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/f3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
						
						
						<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/t1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/t2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/t3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">

							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/m2.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/m1.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="col-md-4 col-sm-5 tab-image">
								<img src="/Campus/Public/Home/images/m3.jpg" class="img-responsive" alt="Wanderer">
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="content_top">
   <div class="container">
   	  <h4 class="m_3" style="font-family:miaomi">探索精彩大连</h4>
   	  <div class="grid_1">

   	   <?php if(is_array($redmodel)): $i = 0; $__LIST__ = $redmodel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-3 box_1">
			<a href="<?php echo U('Recommend/content',array('id'=>$v['id']));?>"><img src="/Campus/Public/Home/uploads/recmdphoto/<?php echo ($v["pic"]); ?>" class="img-responsive" style="width: 300px;height: 200px" /></a>
		    <div class="box_2">
			  <div class="special-wrap"><div class="hot_offer"><span class="m_11" style="background-color: rgba(0,0,0,.6);">Hot<br/>最热</span></div><div class="forclosure"><span class="m_12" style="background-color: rgba(0,0,0,.6);">New<br/>最新</span></div></div>
			</div>
		   <div class="box_3">
			 <h3 style="margin-bottom: 5px"><a href="<?php echo U('Recommend/content',array('id'=>$v['id']));?>"><?php echo ($v["name"]); ?></a></h3>
			 <div class="boxed_mini_details clearfix">
			      <span class="area first"><strong>发布人</strong><i class="fa fa-plane icon1"> </i><img src="/Campus/Public/Home/images/user.png" style="width: 13px;margin-left: 3px;" >
			      <?php echo ($v["uname"]); ?></span>
			      <span class="status"><strong>浏览量</strong><i class="fa fa-retweet icon1"> </i>
			      <img src="/Campus/Public/Home/images/eye.png" style="width: 13px;margin-left: 3px;" >
			      <?php echo ($v["hits"]); ?></span>
			      <span class="bedrooms last"><strong>觉得很棒</strong><i class="fa fa-bed"></i>
			      <img src="/Campus/Public/Home/images/zan.png" style="width: 13px; margin-left: 9px;" >
			      <?php echo ($v["praise"]); ?></span>
             </div>
		   </div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>

		<div class="clearfix"> </div>
	</div>
	   <div class="content_bottom">
		<div class="col-md-2">
			<div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i>主题推荐</h3></div>
                  <ul class="real-widget">
                        <li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/1');?>">美食(<?php echo ($rtype1); ?>)</a></li>
                	    <li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/2');?>">人文(<?php echo ($rtype2); ?>)</a></li>
                	    <li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/3');?>">购物(<?php echo ($rtype3); ?>)</a></li>
                		<li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/4');?>">旅游观光(<?php echo ($rtype4); ?>)</a></li>
                		<li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/5');?>">娱乐休闲(<?php echo ($rtype5); ?>)</a></li>
                		<li><a href="<?php echo U('Home/Recommend/lists/rtype_rid/6');?>">沙滩海岛(<?php echo ($rtype6); ?>)</a></li>

                  </ul>
                </ul>
             </div>
             <div class="widget">
                <div class="title"><h3><i class="fa fa-meh-o men"> </i>结伴同游</h3></div>
                  <ul class="real-widget"><li><a href="<?php echo U('Home/Travel/travel/theme_tid/1');?>">一起浪(<?php echo ($themetype1); ?>)</a></li>
                	<li><a href="<?php echo U('Home/Travel/travel/theme_tid/2');?>">粗去吃(<?php echo ($themetype2); ?>)</a></li>
                	<li><a href="<?php echo U('Home/Travel/travel/theme_tid/3');?>">约你看电影(<?php echo ($themetype3); ?>)</a></li>
                	<li><a href="<?php echo U('Home/Travel/travel/theme_tid/4');?>">图书馆不见不散(<?php echo ($themetype4); ?>)</a></li>
                	<li><a href="<?php echo U('Home/Travel/travel/theme_tid/5');?>">购物(<?php echo ($themetype5); ?>)</a></li>
                		
                </ul>
             </div>
		</div>
		<div class="col-md-7">	
		   <div class="sap_tabs">
				<div id="horizontalTab" style="display: block; width: 100%;">
						 <div class="tab_grid">
							  <ul class="resp-tabs-list">
							  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span class="miaomi" style="font-size: 28px;">喂,约不约~</span></li>
								 
								  <div class="clearfix"></div>
							  </ul>	
							</div>	
							    <div>

							    	<ul class="tab_img tab_1">
									
									<?php if(is_array($travel)): $i = 0; $__LIST__ = $travel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="last" style="margin-right: 20px;margin-bottom: 30px">
										  <div class="client_box1">
					       				    <a href="<?php echo U('Travel/detail',array('id'=>$vo['id']));?>"><img src="/Campus/Public/Home/uploads/travelphoto/<?php echo ($vo["pic"]); ?>" class="img-responsive" style="width: 200px;height: 150px" /></a>
					       				     
					       				     <h3 class="m_1"><a href="<?php echo U('Travel/detail',array('id'=>$vo['id']));?>"><?php echo ($vo["titles"]); ?></a></h3>
					       				    <div class="boxed_mini_details clearfix">
			                                    <span class="area first">
			                                    <img src="/Campus/Public/Home/images/user.png" style="width: 13px;margin-left: 3px;" >
                                                <?php echo ($vo["uname"]); ?></span>
			                                    <span class="status">
			                                    <img src="/Campus/Public/Home/images/eye.png" style="width: 13px;margin-left: 3px;" >
			                                     <?php echo ($vo["hits"]); ?></span>
			                                    <span class="bedrooms last">
			                                    <img src="/Campus/Public/Home/images/zan.png" style="width: 13px; margin-left: 9px;" >
			                                    <?php echo ($vo["want"]); ?></span>
                                            </div>
					       				  </div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>

										<div class="clearfix"></div>
										</ul>
										

							     </div>	

							     
							    
				  </div>
           </div>
        </div>
 <div class="col-md-3">
			<div class="blog_list2">
				 <h3>联系我们</h3>
					 <ul class="blog-list3 list_1">
					 	<li class="blog-list3-img"><img src="/Campus/Public/Home/images/pic12.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">宋雯静</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
					 <ul class="blog-list3 list_1">
					 	<li class="blog-list3-img"><img src="/Campus/Public/Home/images/pic13.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">毛思懿</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
					 <ul class="blog-list3">
					 	<li class="blog-list3-img"><img src="/Campus/Public/Home/images/pic7.jpg" class="img-responsive" alt=""/></li>
					 	<li class="blog-list3-desc">
					 	  <h4><a href="#">葛蕾</a></h4>
					 	    <ul class="admin_desc">
							    <li class="list_top"><i class="fa fa-phone-square ph"> </i>
								<p class="m_2">20-1257-2587</p></li>
								<div class="clearfix"> </div>
								<li class="list_top"><i class="fa fa-envelope ph"> </i>
								<p class="m_2"><a href="malito:mail@demolink.org">mail(at)realist.com</a></p></li>
								<div class="clearfix"> </div>
					        </ul>
		                 </li>
					 	<div class="clearfix"> </div>
					 </ul>
			    </div>
		</div>
        <div class="clearfix"> </div>
    </div>
   </div>
</div>	

 <div class="copyright">
				<div class="container">
					<p><a href="<?php echo U('Admin/Index/index');?>" style="margin-right: 10px">管理员登录</a>Copyright &copy; 14110100534 宋雯静 </p>
				</div>
			</div>
      
</body>
</html>